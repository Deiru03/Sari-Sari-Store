<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('my-welcome');
});

Route ::get('/My-Dashboard', [OtherController::class, 'dashboard'])->name('dashboard');

Route::resource('product', ProductController::class);
