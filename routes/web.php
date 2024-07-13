<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Front\LandingController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, '__invoke'])->name('dashboard');
    Route::resource('products', ProductController::class);
    Route::get('/orders', [OrderController::class, 'index']);
    Route::put('/orders/{id}', [OrderController::class, 'complete'])->name('orders.complete');
});
Route::get('/checkout', [checkoutController::class, 'index']);
Route::get('/login', [AuthController::class, 'loginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::post('/checkout', [checkoutController::class, 'process'])->name('checkout');
Route::middleware(['guest'])->group(function () {

    Route::get('/', [LandingController::class, 'food'])->name('home');
    Route::post('/order', [LandingController::class, 'createOrder'])->name('order.store');
    Route::get('/drink', [LandingController::class, 'drink'])->name('drink');
    Route::get('/cart', [LandingController::class, 'cart'])->name('cart');
});

Route::get('/home', function () {
    return view('user.index');
});
