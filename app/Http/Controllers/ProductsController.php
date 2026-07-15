<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function update(Request $request, Products $products) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'price' => 'required|decimal:1,20',
        ]);

        $products->update($validated);
        return redirect('welcome')->with('success','Produit modifié avec succès');
    }
    public function index()
    {
        $products = \App\Models\Products::all();
        return view('products.index', compact('products'));
    }
    // Affiche le formulaire d'édition
    public function edit()
    {
        return view('products.edit');
    }

    public function create()
    {
        return view('products.create');
    }
    
}