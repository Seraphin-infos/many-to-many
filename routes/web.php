<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('products', 'App\Http\Controllers\ProductsController');

Route::get('/products/edit', [ProductsController::class, 'edit'])->name('products.edit');
