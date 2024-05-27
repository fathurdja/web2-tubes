<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('/products', function(){
    return view('admin.products.index');
});

Route::get('/products/create', function () {
    return view('admin.products.create');
});

Route::get('/products/edit', function () {
    return view('admin.products.edit');
});

Route::get('/orders', function () {
    return view('admin.orders.index');
});