<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SobatController;

Route::get('/', function () {
    return view('landing');
})->name('landing');
Route::get('/landing', [SobatController::class, 'index'])->name('home');
Route::get('/konselor', [SobatController::class, 'konselor'])->name('konselor');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/hubungi', function () {
    return view('hubungi');
})->name('hubungi');
Route::get('/konselor/{id}', [SobatController::class, 'show'])->name('dkonselor');

Route::get('services/{id}', [SobatController::class, 'services'])->name('service');
Route::post('/booking', action: [BookingController::class, 'index'])->name('booking');
Route::post('/booking/book_konselor/{service_id}', [BookingController::class, 'store'])->name('booking.pay');
Route::get('midtrans/callback', [BookingController::class, 'midtransWebhook'])->name('booking.success');
Route::get('booking/{id}', [BookingController::class, 'show'])->name('booking.show');
Route::get('/booking/failed', [BookingController::class, 'midtransWebhook'])->name('booking.failed');
