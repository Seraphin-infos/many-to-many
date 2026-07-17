<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('products', ProductController::class);

Route::get('/products/edit', [ProductController::class, 'edit'])->name('products.edit');
