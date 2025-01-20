@extends('layouts.app')

@section('title', 'Layanan')

@section('content')
    <div class="px-28 mx-auto py-16">
        <h1 class="font-bold text-4xl mb-3">Layanan Dari Konseler Kami</h1>
        <p class="text-gray-700">Pilihlah jam dan tanggal sesuai dengan kesiapan anda</p>

        <div class="bg-gray-100 rounded shadow p-6 md:p-12 mt-12 w-full">
            <div class="grid grid-cols-1 w-full md:grid-cols-2 gap-12">
                <div>
                    <h2 class="font-bold text-3xl mb-3">{{ $konselor->name }}</h2>
                    <p class="font-semibold mb-8">Periksa ketersediaan kami dan pesan tanggal dan waktu yang sesuai untuk
                        Anda
                    </p>

                    @foreach ($groupedServices as $date => $servicesForDate)
                        <div class="flex justify-start gap-12 md:gap-40 items-center cursor-pointer">
                            <h3 class="font-semibold mb-4 border py-3 px-6 border-black rounded-xl">{{ $date }}</h3>

                            <div class="flex gap-3 md:overflow-hidden overflow-x-scroll items-center">
                                @foreach ($servicesForDate as $service)
                                    <div class="flex justify-between w-1/2 items-center mb-3">
                                        <label class="border py-3 px-6 border-black {{ $service->status == 'booked' ? 'bg-gray-400' : '' }} rounded-xl cursor-pointer"
                                            for="time-{{ $service->id }}">
                                            <input type="radio" name="time_select"
                                                {{ $service->status == 'booked' ? 'disabled' : '' }} hidden
                                                id="time-{{ $service->id }}" value="{{ $service->timeService->time }}"
                                                data-date="{{ $date }}"
                                                data-time="{{ $service->timeService->time }}"
                                                data-id="{{ $service->id }}">
                                            {{ $service->status == 'booked' ? 'Booked' : $service->timeService->time }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>

                <div>
                    <h2 class="font-semibold text-2xl mb-3">Service Detail</h2>
                    <div class="p-6 bg-white rounded-lg shadow-md">
                        <p class="text-lg font-semibold">Nama Konselor:</p>
                        <p id="selected-name" class="text-xl font-bold">{{ $konselor->name }}</p>

                        <div class="mt-4">
                            <p class="text-lg font-semibold">Jam & Tanggal:</p>
                            <p id="selected-date-time" class="text-xl text-gray-600">Jam & Tanggal belum dipilih</p>
                        </div>

                        <div class="mt-4">
                            <p class="text-lg font-semibold">Mode:</p>
                            <p id="consultation-type" class="text-xl text-gray-600">Konsultasi Daring</p>
                        </div>
                    </div>
                </div>
            </div>
            <form id="booking-form" method="POST" action="{{ route('booking') }}">
                @csrf
                <!-- Hidden fields to store the selected date and time -->
                <input type="hidden" id="selected-date" name="date" value="">
                <input type="hidden" id="selected-time" name="time" value="">
                <input type="hidden" id="service_id" name="service_id">

                <div class="flex justify-end mt-8">
                    <a href="{{ route('konselor') }}"
                        class="bg-gray-300 text-black py-2 px-6 rounded-lg hover:bg-gray-400">Kembali</a>
                    <button type="submit"
                        class="bg-black text-white py-2 px-6 rounded-lg hover:bg-gray-900 ml-4">Lanjutkan</button>
                </div>
            </form>

            <p id="error-message" class="text-red-500 mt-4 hidden">Silakan pilih jam dan tanggal sebelum melanjutkan.</p>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        const radioButtons = document.querySelectorAll('input[name="time_select"]');
        radioButtons.forEach(radioButton => {
            radioButton.addEventListener('change', function() {
                radioButtons.forEach(btn => {
                    const label = btn.closest('label');
                    label.classList.remove('bg-black', 'text-white');
                });

                this.parentElement.classList.add('bg-black', 'text-white');

                const selectedDate = this.getAttribute('data-date');
                const selectedTime = this.getAttribute('data-time');
                const serviceId = this.getAttribute('data-id');

                document.getElementById('selected-date').value = selectedDate;
                document.getElementById('selected-time').value = selectedTime;
                document.getElementById('service_id').value = serviceId;

                const selectedDateTime = document.getElementById('selected-date-time');
                selectedDateTime.textContent = `${selectedTime} on ${selectedDate}`;

                const selectedName = document.getElementById('selected-name');
                selectedName.textContent = '{{ $konselor->name }}';
            });
        });

        document.getElementById('booking-form').addEventListener('submit', function(e) {
            const selectedDate = document.getElementById('selected-date').value;
            const selectedTime = document.getElementById('selected-time').value;

            if (!selectedDate || !selectedTime) {
                e.preventDefault();

                const errorMessage = document.getElementById('error-message');
                errorMessage.classList.remove('hidden');
                errorMessage.textContent = 'Silakan pilih jam dan tanggal sebelum melanjutkan.';
            }
        });
    </script>
@endsection
