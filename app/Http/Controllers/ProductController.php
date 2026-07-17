<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Products = Products::latest()->paginate(5);
        return view('Products.index', compact('Productss'));
    }

    /**
     * Show the form for creating a new resource.
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
        return view("Products.editProducts");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $Productss)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'price' => 'required|decimal:1,20',
        ]);

        $Productss->update($validated);
        return redirect('welcome')->with('success','Produit modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
