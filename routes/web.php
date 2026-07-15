<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD
Route::ressource('products', 'App\Http\Controllers\ProductsController');
=======

Route::get('/posts/{post}/edit', [ProductsController::class, 'edit'])->name('posts.edit');
>>>>>>> e6f2f16 (edit)
