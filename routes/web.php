<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SobatController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/landing', [SobatController::class, 'index']);
