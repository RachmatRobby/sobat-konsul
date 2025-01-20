@extends('layouts.app')

@section('title', 'Checkout')

@section('content')
    <div class="px-28 mx-auto py-16">
        <h1 class="font-bold text-4xl mb-3">Checkout</h1>
        <p class="text-gray-700">Masukan nomor telpon dengan format +628xxxxxxxxxx. Isi kolom Nama dan Email</p>

        <div class="bg-gray-100 rounded shadow p-6 md:p-12 mt-12 w-full">
            <div class="flex flex-col md:flex-row justify-between">
                <div class="w-full md:w-1/2">
                    <h2 class="font-semibold text-xl mb-4">Order Summary</h2>
                    <div class="bg-white rounded shadow p-4 mb-4">
                        <div class="flex justify-between mb-2">
                            <span class="text-gray-700">Konselor Name</span>
                            <span class="font-semibold">{{ $service->konselor->name }}</span>
                        </div>
                        <div class="flex justify-between mb-2">
                            <span class="text-gray-700">Tanggal Booking</span>
                            <span class="font-semibold">{{ $service->dateService->date_service }}</span>
                        </div>
                        <div class="flex justify-between mb-2">
                            <span class="text-gray-700">Jam Booking</span>
                            <span class="font-semibold">{{ $service->timeService->time }}</span>
                        </div>
                        <div class="flex justify-between border-t pt-2 mt-2">
                            <span class="font-semibold text-lg">Total</span>
                            <span class="font-semibold text-lg">{{ $service->price }}</span>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 md:pl-6 mt-6 md:mt-0">
                    <h2 class="font-semibold text-xl mb-4">Client Information</h2>

                    <div class="bg-white rounded shadow p-4">
                        <!-- Full Name -->
                        <div class="mb-4">
                            <label for="full_name" class="block text-gray-700">Nama Lengkap</label>
                            <input type="text" id="full_name" name="full_name"
                                class="w-full @error('full_name') border-red-500 @enderror border rounded p-2 mt-1"
                                placeholder="Nama Lengkap" required>
                            @error('full_name')
                                <span class="text-red-500 mt-2 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700">Email</label>
                            <input type="email" id="email" name="email"
                                class="w-full border @error('email') border-red-500 @enderror rounded p-2 mt-1"
                                placeholder="emailanda@example.com" required>
                            @error('email')
                                <span class="text-red-500 mt-2 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Phone -->
                        <div class="mb-4">
                            <label for="phone" class="block text-gray-700">Nomor Telepon</label>
                            <input type="number" id="phone" name="phone"
                                class="w-full @error('phone') border-red-500 @enderror border rounded p-2 mt-1"
                                placeholder="+628xxxxxx" required>
                            @error('phone')
                                <span class="text-red-500 mt-2 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <button onclick="makePayment()"
                            class="w-full bg-green-500 text-white font-semibold py-2 rounded">
                            Checkout
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function makePayment() {
            const fullName = document.getElementById('full_name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;

            fetch("{{ route('booking.pay', ['service_id' => $service->id]) }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                },
                body: JSON.stringify({
                    full_name: fullName,
                    email: email,
                    phone: phone,
                }),
            })
            .then(response => response.json())
            .then(data => {
                if (data.snapToken) {
                    window.snap.pay(data.snapToken, {
                        onSuccess: function(result) {
                            const payload = encodeURIComponent(JSON.stringify(result));
                            window.location.href = "{{ route('booking.success') }}" + "?payload=" + payload + "&full_name=" + encodeURIComponent(fullName) + "&email=" + encodeURIComponent(email) + "&phone=" + encodeURIComponent(phone) + "&service_id={{ $service->id }}";
                        },
                        onError: function(result) {
                            console.error(result);
                            alert("Payment failed!");
                        }
                    });
                } else {
                    console.error(data);
                    alert("Failed to create Snap Token");
                }
            })
            .catch(error => {
                console.error(error);
                alert("An error occurred");
            });
        }
    </script>
    <script src="https://app.midtrans.com/snap/snap.js" data-client-key="{{ config('services.midtrans.clientKey') }}"></script>
@endsection
