<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Service;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Midtrans\Config;
use Midtrans\Snap;

class BookingController extends Controller
{
    public function __construct()
    {
        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction = config('services.midtrans.isProduction');
        Config::$isSanitized = config('services.midtrans.isSanitized');
        Config::$is3ds = config('services.midtrans.is3ds');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $service = Service::findOrFail($request->service_id);

        if ($service->isBooked()) {
            return redirect()->route('service', $service->id)->with('error', 'Konselor sudah di-booking oleh orang lain.');
        }

        return view('booking', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $service_id)
    {
        $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
        ]);

        $service = Service::findOrFail($service_id);

        $payload = [
            'transaction_details' => [
                'order_id' => 'ORDER-' . time(),
                'gross_amount' => $service->priceRaw,
            ],
            'customer_details' => [
                'first_name' => explode(' ', $request->full_name)[0],
                'email' => $request->email,
                'phone' => $request->phone,
            ],
            'item_details' => [
                [
                    'id' => $service->id,
                    'price' => $service->priceRaw,
                    'quantity' => 1,
                    'name' => $service->konselor->name,
                ],
            ],
        ];

        try {
            $snapToken = Snap::getSnapToken($payload);
            return response()->json(['snapToken' => $snapToken]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


    public function midtransWebhook(Request $request)
    {
        $payload = $request->query('payload');
        $clientFullName = $request->query('full_name');
        $clientEmail = $request->query('email');
        $clientPhone = $request->query('phone');
        $serviceId = $request->query('service_id');

        $notification = json_decode($payload);

        $service = Service::findOrFail($serviceId);

        $transaction = DB::transaction(function () use ($notification, $service, $clientFullName, $clientEmail, $clientPhone) {
            $booking = Booking::create([
                'service_id' => $service->id,
                'full_name' => explode(' ', $clientFullName)[0],
                'email' => $clientEmail,
                'phone' => $clientPhone,
            ]);

            $transaction = Transaction::create([
                'order_id' => $notification->order_id,
                'booking_id' => $booking->id,
                'transaction_id' => $notification->transaction_id,
                'gross_amount' => $notification->gross_amount,
                'transaction_time' => $notification->transaction_time,
                'transaction_status' => $notification->transaction_status,
                'payment_type' => $notification->payment_type,
                'fraud_status' => $notification->fraud_status,
                'status_message' => $notification->status_message,
                'status_code' => $notification->status_code,
                'signature_key' => $notification->signature_key ?? null,
                'bank' => $notification->bank ?? null,
                'va_number' => $notification->va_number ?? null,
                'biller_code' => $notification->biller_code ?? null,
                'bill_key' => $notification->bill_key ?? null,
                'permata_va_number' => $notification->permata_va_number ?? null,
            ]);

            return $transaction;
        });

        $service->markAsBooked();

        return redirect()->route('booking.show', $transaction->id);
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $transaction = Transaction::findOrFail($id);
        return view('checkout.success', compact('transaction'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
