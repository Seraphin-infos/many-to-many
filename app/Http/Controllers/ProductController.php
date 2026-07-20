<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /*
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::latest()->paginate(5);
        return view('Products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.e($pr
     */
    public function create()
    {
        //
        return view('Products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'name'          =>  'required|string|max:255',
            'description'   =>  'nullable|string',
            'price'         =>  'required|numeric|min:0',
            'stock'         =>  'required|integer|min:0',
        ]);

        Products::create($validated);

        return redirect()->view('Products.index')->with('Productss: create successfuly');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view("Products.editproduct");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $products)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'price' => 'required|decimal:1,20',
        ]);

        $products->update($validated);
        return redirect('welcome')->with('success','Produit modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $products = Products::findOrFail($id);
        $products->delete();

        return redirect()
            ->route('products.index')
            ->with('success', 'Product deleted successfully');
    }
}
