<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SobatController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/landing', [SobatController::class, 'index']);
Route::get('/konselor', [SobatController::class, 'konselor'])->name('konselor');
Route::get('/landing', function () {
    return view('landing');
})->name('landing');
Route::get('/about', function () {
    return view('about');
})->name('about');