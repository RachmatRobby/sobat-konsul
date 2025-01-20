<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'order_id',
        'booking_id',
        'transaction_id',
        'gross_amount',
        'transaction_time',
        'transaction_status',
        'payment_type',
        'fraud_status',
        'status_message',
        'status_code',
        'signature_key',
        'bank',
        'va_number',
        'biller_code',
        'bill_key',
        'permata_va_number',
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    public function getTransactionTimeAttribute($value)
    {
        return date('Y-m-d H:i:s', strtotime($value));
    }

    public function setTransactionTimeAttribute($value)
    {
        $this->attributes['transaction_time'] = date('Y-m-d H:i:s', strtotime($value));
    }

    public function getGrossAmountAttribute($value)
    {
        return number_format($value, 2, '.', '');
    }

    public function setGrossAmountAttribute($value)
    {
        $this->attributes['gross_amount'] = number_format($value, 2, '.', '');
    }
}
