@extends('layouts.app')

@section('title', 'Payment Success')

@section('content')
    <div class="px-28 mx-auto py-16">
        <h1 class="text-3xl font-bold text-center">Payment Success</h1>
        <p class="text-center mt-4">Thank you for your purchase. Your order has been placed successfully.</p>
        <div class="rounded-lg border bg-card text-card-foreground shadow-sm w-full p-0 mt-6" data-v0-t="card">
            <div class="p-4 md:p-6">
                <div class="grid gap-1 text-lg">
                    <div class="flex items-center gap-2">
                        <div class="font-medium w-48">Transaction Code</div>
                        <div class="font-bold">: {{ $transaction->transaction_id }}</div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="font-medium w-48">Date</div>
                        <div>: {{ $transaction->transaction_time }}</div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="font-medium w-48">Payment method</div>
                        <div>: {{ $transaction->payment_type }}</div>
                    </div>
                </div>
                <div data-orientation="horizontal" role="none"
                    class="shrink-0 bg-border bg-gray-300 h-[1px] w-full my-4">
                </div>
                <div class="grid gap-1 text-lg">
                    <div class="flex items-center gap-2">
                        <div class="font-medium w-48">Email</div>
                        <div>: {{ $transaction->booking->email }}</div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="font-medium w-48">Konselor</div>
                        <div>: {{ $transaction->booking->service->konselor->name }}</div>
                    </div>
                </div>
            </div>
        </div>

        <p></p>
        <p id="countdown" class="text-center mt-4">Redirecting in 5 seconds...</p>
        <script>
            let countdown = 5;
            const countdownElement = document.getElementById('countdown');
            const interval = setInterval(function() {
                countdown--;
                countdownElement.textContent = `Redirecting in ${countdown} seconds...`;
                if (countdown <= 0) {
                    clearInterval(interval);
                    var transactionId = encodeURIComponent('{{ $transaction->transaction_id }}');
                    var transactionTime = encodeURIComponent('{{ $transaction->transaction_time }}');
                    var paymentType = encodeURIComponent('{{ $transaction->payment_type }}');
                    var email = encodeURIComponent('{{ $transaction->booking->email }}');
                    var konselorName = encodeURIComponent('{{ $transaction->booking->service->konselor->name }}');

                    var url = 'https://wa.me/+62895359721110?text=Payment%20Success%0A%0ATransaction%20Code:%20' +
                        transactionId +
                        '%0ADate:%20' + transactionTime +
                        '%0APayment%20method:%20' + paymentType +
                        '%0AEmail:%20' + email +
                        '%0AKonselor:%20' + konselorName;

                    window.location.href = url;
                }
            }, 1000);
        </script>
    </div>
@endsection
