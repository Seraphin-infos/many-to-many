<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::all()->paginate(10);
        return view('products.index', compact('products'));
    }
    public function create()
    {
        return view('products.create');
    }
    
}
