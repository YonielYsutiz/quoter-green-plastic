<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return response()->json(['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createProduct(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'reference' => 'required',
            'description' => 'required',
            'intern_description' => 'required',
        ]);

        $product = Product::create([
            'name' => $request->name,
            'reference' => $request->reference,
            'description' => $request->description,
            'intern_description' => $request->intern_description,
            'warranty' => $request->warranty
        ]);
        return response()->json(['message' => 'Producto creado con éxito', 'product' => $product]);
    }

    public function search(Request $request)
    {
        $query = $request->query('search');
        $products = Product::where('name', 'like', "%$query%")->with('productFeatures')->get();
        return response()->json($products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
