<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SobatController;

Route::get('/', function () {
    return view('landing');
})->name('landing');
Route::get('/landing', [SobatController::class, 'index']);
Route::get('/konselor', [SobatController::class, 'konselor'])->name('konselor');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/hubungi', function () {
    return view('hubungi');
})->name('hubungi');
Route::get('/konselor/{id}', [SobatController::class, 'show'])->name('dkonselor');