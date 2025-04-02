<?php

namespace App\Http\Controllers;

use App\Models\Quoter;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;
use App\Models\Product;

class QuoterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quoters = Quoter::all();

        foreach ($quoters as $quoter) {
            $quoter["invoice_general_data"] = json_decode($quoter->invoice_general_data, true);
            $quoter["order_terms"] = json_decode($quoter->order_terms, true);
            $quoter["product_general_data"] = json_decode($quoter->product_general_data, true);
        }

        return response()->json($quoters);
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

        $quoter["invoice_general_data"] = json_decode(
            $quoter->invoice_general_data,
            true
        );

        $quoter["order_terms"] = json_decode(
            $quoter->order_terms,
            true
        );

        $quoter["product_general_data"] = json_decode(
            $quoter->product_general_data,
            true
        );

        // Generamos el PDF a partir de la vista y los datos
        $pdf = PDF::loadView('pdf', compact('quoter'))->setPaper('A4', 'portrait')
            ->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);;

        // return response()->json(['message' => 'Cotizacion creada con exito', 'product' => $product]);
        return $pdf->download('quoter.pdf');
    }

    public function downloadPdf($id)
    {
        $quoter = Quoter::find($id);

        if (!$quoter) {
            return response()->json(['error' => 'Cotización no encontrada'], 404);
        }

        // Decodifica los campos JSON
        $quoter->invoice_general_data = json_decode($quoter->invoice_general_data, true) ?: [];
        $quoter->product_general_data = json_decode($quoter->product_general_data, true) ?: [];
        $quoter->order_terms = json_decode($quoter->order_terms, true) ?: [];

        $pdf = PDF::loadView('pdf', compact('quoter'))
            ->setPaper('A4', 'portrait')
            ->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);

        return $pdf->download("cotizacion_{$id}.pdf");
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
