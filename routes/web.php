<?php

use Illuminate\Support\Facades\Route;

Route::get('products', function () {
    return view('welcome');
});
Route::resource('products', 'App\Http\Controllers\ProductsController');