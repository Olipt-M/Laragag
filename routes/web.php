<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('/auth')->group(function () {
   Route::get('/register', [AuthController::class, 'registerForm'])->name('auth.registerForm');
   Route::get('/login', [AuthController::class, 'loginForm'])->name('auth.loginForm');
   Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
   Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
});
