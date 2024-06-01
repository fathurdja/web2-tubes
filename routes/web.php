<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// eksplisit
Route::get('/', [DashboardController::class, '__invoke'])->name('dashboard');
// implist
// Route::get('/', DashboardController::class);

Route::resource('products', ProductController::class);
Route::get('/orders', [OrderController::class, 'index']);