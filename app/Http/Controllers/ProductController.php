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

        foreach ($products as $key => $value) {
            $product_features = $value['productFeatures'];
            $product_features_list = [];

            if (!is_null($product_features['weight'])) {
                array_push(
                    $product_features_list,
                    array(
                        'type_of_piece' => 'peso',
                        'quantity_type_of_piece' => $product_features['weight']
                    )
                );
            }

            if (!is_null($product_features['height'])) {
                array_push(
                    $product_features_list,
                    array(
                        'type_of_piece' => 'alto',
                        'quantity_type_of_piece' => $product_features['height']
                    )
                );
            }

            if (!is_null($product_features['upper_profile_reference_id'])) {
                array_push(
                    $product_features_list,
                    array(
                        'type_of_piece' => 'listones_superiores',
                        'quantity_type_of_piece' => $product_features['upper_profile_amount'],
                        'type_caracterist_manu' => $product_features['upper_profile_reference_id']
                    )
                );
            }

            if (!is_null($product_features['lower_profile_reference'])) {
                array_push(
                    $product_features_list,
                    array(
                        'type_of_piece' => 'listones_inferiores',
                        'quantity_type_of_piece' => $product_features['lower_profile_amount'],
                        'type_caracterist_manu' => $product_features['lower_profile_reference']
                    )
                );
            }

            if (!is_null($product_features['sleeping_reference_id'])) {
                array_push(
                    $product_features_list,
                    array(
                        'type_of_piece' => 'durmiente',
                        'quantity_type_of_piece' => $product_features['sleeping_quantity'],
                        'type_caracterist_manu' => $product_features['sleeping_reference_id']
                    )
                );
            }

            if (!is_null($product_features['screws_type_id'])) {
                array_push(
                    $product_features_list,
                    array(
                        'type_of_piece' => 'tornillos',
                        'quantity_type_of_piece' => $product_features['number_of_screws'],
                        'type_caracterist_manu' => $product_features['screws_type_id']
                    )
                );
            }

            if (!is_null($product_features['nut_type_id'])) {
                array_push(
                    $product_features_list,
                    array(
                        'type_of_piece' => 'tuerca',
                        'quantity_type_of_piece' => $product_features['nut_quantity'],
                        'type_caracterist_manu' => $product_features['nut_type_id']
                    )
                );
            }

            if (!is_null($product_features['washer_type_id'])) {
                array_push(
                    $product_features_list,
                    array(
                        'type_of_piece' => 'arandela',
                        'quantity_type_of_piece' => $product_features['washer_quantity'],
                        'type_caracterist_manu' => $product_features['washer_type_id']
                    )
                );
            }

            if (!is_null($value['entries_quantity'])) {
                array_push(
                    $product_features_list,
                    array(
                        'type_of_piece' => 'entradas',
                        'quantity_type_of_piece' => $product_features['entries_quantity'],
                        'type_caracterist_manu' => $product_features['entries_quantity']
                    )
                );
            }

            $value['product_features_list'] = $product_features_list;
        }
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
