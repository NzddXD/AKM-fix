<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [AuthController::class, 'forbidden'])->name('forbidden');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');