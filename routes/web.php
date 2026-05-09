<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

// Home Routes
Route::get('/', [HomeController::class, 'index'])->name('home');

// Auth Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'processLogin'])->name('process-login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Registration Routes
Route::post('/register-patient', [HomeController::class, 'storeRegistration'])->name('register-patient');

// Product Routes
Route::get('/products', [ProductController::class, 'index'])->name('products');
