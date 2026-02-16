<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'showLogin'])->name('auth.login.show');
Route::post('/login', [AuthController::class,'processLogin'])->name('auth.login.process');

Route::get('/register', [AuthController::class, 'showRegister'])->name('auth.register.show');
Route::post('/register', [AuthController::class,'processRegister'])->name('auth.register.process');

