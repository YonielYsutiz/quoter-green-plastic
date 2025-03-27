<?php

namespace App\Http\Controllers;

use App\Models\Quoter;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class QuoterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'client' => 'required',
            'nit' => 'required',
            'type_order' => 'required',
            'product_general_data' => 'required',
        ]);

        $quoter = Quoter::create([
            'client' => $request->client,
            'nit' => $request->nit,
            'delivery_address' => $request->delivery_address,
            'purchase_order' => $request->purchase_order,
            'business_contact' => $request->business_contact,
            'phone_contact' => $request->phone_contact,
            'type_order' => $request->type_order,
            'invoice_general_data' => json_encode($request->invoice_general_data),
            'order_terms' => json_encode($request->order_terms),
            'product_general_data' => json_encode($request->product_general_data),
        ]);

        // Generamos el PDF a partir de la vista y los datos
        $pdf = PDF::loadView('pdf', compact('quoter'));

        // return response()->json(['message' => 'Cotizacion creada con exito', 'product' => $product]);
        return $pdf->stream('quoter.pdf');
    }

    /**
     * Display the specified resource.
     */
    public function show(Quoter $quoter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quoter $quoter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quoter $quoter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quoter $quoter)
    {
        //
    }
}
