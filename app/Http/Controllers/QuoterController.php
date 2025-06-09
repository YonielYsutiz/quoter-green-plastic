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

    public function getQuoter($id)
    {
        $quoter = Quoter::findOrFail($id);

        $quoter["invoice_general_data"] = json_decode($quoter->invoice_general_data, true);
        $quoter["order_terms"] = json_decode($quoter->order_terms, true);
        $quoter["product_general_data"] = json_decode($quoter->product_general_data, true);

        return response()->json($quoter);
    }

    public function UpdateQuoter(Request $request, $id)
    {

        $quoter = Quoter::findOrFail($id);

        if ($request->has('invoice_general_data')) {
            $quoter->invoice_general_data = json_encode($request->invoice_general_data);
        }

        if ($request->has('order_terms')) {
            $quoter->order_terms = json_encode($request->order_terms);
        }

        if ($request->has('product_general_data')) {
            $quoter->product_general_data = json_encode($request->product_general_data);
        }

        $quoter->save();

        $quoter->refresh(); // Asegurarse de tener los últimos datos
        $quoter->invoice_general_data = json_decode($quoter->invoice_general_data, true) ?: [];
        $quoter->product_general_data = json_decode($quoter->product_general_data, true) ?: [];
        $quoter->order_terms = json_decode($quoter->order_terms, true) ?: [];

        $pdf = PDF::loadView('otProduct', compact('quoter'))
            ->setPaper('A4', 'portrait')
            ->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);

        return $pdf->download("cotizacionOtProduct_{$id}.pdf");
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

        $productData = $request->product_general_data;

        foreach ($productData  as $product) {
            if (isset($product['image_reference']) && strpos($product['image_reference'], 'base64') !== false) {
                $image = $product['image_reference'];
                preg_match("/data:image\/(.*?);base64,(.*)/", $image, $matches);
                $extension = $matches[1];
                $base64Data = $matches[2];

                $imageName = uniqid('estiba_') . '.' . $extension;
                $imagePath = public_path('images/estibas/' . $imageName);
                file_put_contents($imagePath, base64_decode($base64Data));

                // Guardamos la ruta pública para usarla en el PDF
                $product['image_reference'] = asset('images/estibas/' . $imageName);
            }
        }

        $quoter = Quoter::create([
            'client' => $request->client,
            'nit' => $request->nit,
            'quoter' => $request->quoter,
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
        $pdf = PDF::loadView('quoter', compact('quoter'))->setPaper('A4', 'portrait')
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

    public function generateEmptyPdfTemplate()
    {
        // Crear estructura vacía
        $emptyQuoter = [
            'client' => '',
            'nit' => '',
            'quoter' => '',
            'delivery_address' => '',
            'purchase_order' => '',
            'business_contact' => '',
            'phone_contact' => '',
            'type_order' => '',
            'invoice_general_data' => [],
            'order_terms' => [],
            'product_general_data' => []
        ];

        $pdf = PDF::loadView('pdfEmpty', ['quoter' => $emptyQuoter])
            ->setPaper('A4', 'portrait')
            ->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);

        return $pdf->download('cotizacion_empty.pdf');
    }

    public function downloadOtAdmon($id)
    {
        $quoter = Quoter::find($id);

        if (!$quoter) {
            return response()->json(['error' => 'Cotización no encontrada'], 404);
        }

        // Decodifica los campos JSON
        $quoter->invoice_general_data = json_decode($quoter->invoice_general_data, true) ?: [];
        $quoter->product_general_data = json_decode($quoter->product_general_data, true) ?: [];
        $quoter->order_terms = json_decode($quoter->order_terms, true) ?: [];

        $pdf = PDF::loadView('otAdmonPdf', compact('quoter'))
            ->setPaper('A4', 'portrait')
            ->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);

        return $pdf->download("cotizacionOtAdmon_{$id}.pdf");
    }

    public function downloadOtProduct($id)
    {
        $quoter = Quoter::find($id);

        if (!$quoter) {
            return response()->json(['error' => 'Cotización no encontrada'], 404);
        }

        // Decodifica los campos JSON
        $quoter->invoice_general_data = json_decode($quoter->invoice_general_data, true) ?: [];
        $quoter->product_general_data = json_decode($quoter->product_general_data, true) ?: [];
        $quoter->order_terms = json_decode($quoter->order_terms, true) ?: [];

        $pdf = PDF::loadView('otProduct', compact('quoter'))
            ->setPaper('A4', 'portrait')
            ->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);

        return $pdf->download("cotizacionOtProduct_{$id}.pdf");
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
