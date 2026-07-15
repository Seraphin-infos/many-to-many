<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = \App\Models\Products::all();
        return view('products.index', compact('products')); 
    }
    
}
