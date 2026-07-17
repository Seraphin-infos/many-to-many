<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('products', function () {
    return view('welcome');
});
Route::resource('products', ProductController::class);
