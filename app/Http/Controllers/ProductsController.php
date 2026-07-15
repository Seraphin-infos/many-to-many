<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Productsapp::all();
        return view('products.index', compact('products'));
    }
    public function create()
    {
        return view('products.create');
    }
    
}
