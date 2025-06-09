<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Cotización Green Plastic</title>
    <style>
        @page {
            margin: 40px 80px;
        }

        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 18px;
            line-height: 1.6;
            margin: 0 auto;
            padding: 20px;
            max-width: 800px;
        }


        /* .title-center {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            margin: 25px 0;
        } */

        .center {
            text-align: center;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header img {
            width: 500px;
        }

        .fecha {
            text-align: right;
            margin-bottom: 20px;
            font-size: 17px;
        }


        .right {
            text-align: right;
            margin-bottom: 20px;
            font-size: 15px;
        }

        .footer {
            position: fixed;
            bottom: 20px;
            width: 100%;
            text-align: center;
            font-size: 15px;
        }

        .logo {
            text-align: center;
            width: 200px;
            margin-bottom: 20px;
        }

        .paragraph {
            text-align: justify;
            margin-bottom: 10px;
            line-height: 1.6;
        }

        .bold {
            font-weight: bold;
        }

        .section {
            text-align: justify;
            margin-bottom: 20px;
        }

        th,
        td {
            padding: 3px;
            text-align: left;
        }

        h1 {
            font-size: 17px;
            margin-top: 20px;
        }

        .borderless-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px 0;
        }

        .green-row {
            background-color: #e8f5e9;
            font-weight: bold;
            /* Color de fondo verde claro */
        }

        /* .green {
            color: #48A23F;
            font-weight: bold;
        } */
        .green-hearder {
            background-color: #2e7d32;
            color: white;
            padding: 10px;
            border-radius: 4px;
            margin: 20px 0 10px 0;
        }

        .green-text {
            color: #2e7d32;
            font-weight: bold;
        }

        .product-info {
            margin-bottom: 20px;
        }

        .reference-image-container {
            text-align: center;
            margin: 15px 0;
        }

        /* Elimina todos los bordes por defecto */
        table {
            border: none;
            border-collapse: collapse;
        }

        /* Solo aplica bordes a tablas con la clase .with-border */
        table.with-border,
        table.with-border th,
        table.with-border td {
            border: 1px solid #000;
        }

        /* Estilo específico para tablas sin bordes */
        .no-border-table {
            width: 100%;
            border: none !important;
        }

        .no-border-table th,
        .no-border-table td {
            border: none !important;
            padding: 2px 5px;
            text-align: left;
        }

        .page-break {
            page-break-after: always;
        }


        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            font-size: 20px;
            margin-top: 10px;
            color: #666;
            text-align: center;
            border-top: 4px solid #44B849;
            padding-top: 15px 0;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
            line-height: 1.4;
        }

        .datos {
            margin-bottom: 20px;
        }

        .table-img {
            border: none;
            box-shadow: none;
            max-width: 100px;
            max-height: 100px;
            display: block;
            margin: 0 auto;
        }

        .logos-section {
            text-align: center;
            margin: 100px 0 20px 0;
            /* Margen superior grande para bajar los logos */
            padding: 10px 0;
        }

        .logos-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 40px;
            margin-bottom: 10px;
        }

        .logo-img {
            height: 125px;
            width: auto;
            max-width: 140px;
            object-fit: contain;
        }


        .members-text {
            font-style: italic;
            margin-bottom: 30px;
            color: #555;
            font-size: 16px;
        }

        .features-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            page-break-inside: avoid;
            /* Evita dividir la tabla entre páginas */
        }

        .reference-image {
            max-width: 80px;
            /* Tamaño reducido */
            max-height: 80px;
            height: auto;
            border: 1px solid #ddd;
            padding: 5px;
            background: #f9f9f9;
            page-break-inside: avoid;
            /* Evita dividir la imagen */
        }
    </style>
</head>

<body>

    {{-- Página 1 --}}
    <div class="header">
        <img src="data:image/png;base64,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" alt="Green Plastic">
    </div>
    <div class="fecha">
        Cota, 02 de abril de 2025
    </div>

    <div class="datos">
        <p><span class="bold">Cot. YP 0841</span></p>
        <p>
            <span class="bold">Señores:</span><br>
            <span class="bold">VADEL S.A.S</span><br>
            <span class="bold">{{$quoter->client}}</span><br>
            <span class="bold">Ciudad</span><br>
        </p>
    </div>


    <p class="bold">Asunto: Propuesta Comercial GREEN PLASTIC COLOMBIA S.A.S</p>

    <div class="section">
        <p>
            Estimado,<br><br>
            En <span class="bold">GREEN PLASTIC COLOMBIA S.A.S.</span>, somos un agente de cambio ambiental,
            mediante un modelo de economía circular transformamos y revalorizamos retales plásticos de un solo uso.
            En <span class="bold">GREEN PLASTIC COLOMBIA S.A.S.</span>, buscamos la constante innovación y desarrollo de
            nuestros productos mediante alianzas estratégicas con entidades como; el <span class="bold">SENA,
                el Instituto de Capacitación e Investigación del Plástico y del Caucho, y la Universidad Nacional</span>.
        </p>

        <p>
            Nuestros productos se caracterizan especialmente por sus altos atributos técnicos y duración gracias al desarrollo
            de una mezcla idónea de materias primas recicladas, fabricados con última tecnología, lo que nos ha llevado a contar
            con el apoyo de la <span class="bold">Cámara de Emprendimiento y Aceleración – ANDI DEL FUTURO, ACOPLÁSTICOS, CIRCÚLATE CAPITAL</span>
            y somos una empresa certificada como transformadores ante la <span class="bold">CAR</span>.
        </p>

        <h1>ALCANCE:</h1>
        <p>
            Con el uso de nuestros productos se da alcance a la normatividad vigente en el territorio nacional,
            <span class="bold">Resolución 2674 del 2013</span> que tiene por objeto establecer los requisitos sanitarios que se deben cumplir,
            que en su <span class="bold">CAPÍTULO VII “Almacenamiento, distribución, transporte y comercialización de alimentos y materias primas
                para alimentos”. Artículos 28 y 29. Almacenamiento y Transporte.</span>
            <i>Donde se establecen las condiciones que se deben cumplir en las operaciones de almacenamiento y transporte.</i>
        </p>
    </div>


    <div class="footer">
        Km 1,5 Vía Siberia Cota, Parque Industrial Potrero Chico, Robles II, Bodega II<br>
        Cota, Cundinamarca, Colombia
    </div>


    <div class="page-break"></div>

    {{-- Página 2 --}}
    @foreach ($quoter['product_general_data'] as $product)
    <div style="text-align: center;">
        <img src="data:image/png;base64,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" alt="Green Plastic Logo" style="width: 250px; margin-bottom: 20px;">
    </div>

    <div class="header">
        <h2>PROPUESTA ECONÓMICA</h2>
        <p>De acuerdo con su solicitud a continuación, relaciono el valor de las estibas plástica con referencias: </p>
    </div>

    <div class="product-info">
        <table class="borderless-table">
            <tr>
                <td class="green-text">Producto</td>
                <td>{{ $product['download_inventory'] ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td class="green-text">Referencia</td>
                <td>{{ $product['standar_reference'] ?? 'N/A' }}</td>
            </tr>
        </table>
    </div>

    <table class="borderless-table">
        <!-- Encabezado de la tabla -->
        <tr class="green-row">
            <th>Dimensión</th>
            <th>Cantidad</th>
            <th>Precio/Un</th>
            <th>Valor Total</th>
        </tr>

        <!-- @php
        $subtotal = 0; // Inicializa subtotal
        $granTotal = 0; // Inicializa granTotal
        @endphp -->

        @foreach((array)$product['product_items_manufact'] as $piece)
        @php
        $cantidad = is_numeric($piece['quantity_type_of_piece']) ? floatval($piece['quantity_type_of_piece']) : 0;
        $precio = is_numeric($piece['manu_weight']) ? floatval($piece['manu_weight']) : 0;
        $valorTotal = $cantidad * $precio;
        $subtotal += $valorTotal;
        @endphp
        <tr>
            <td>{{ $piece['type_caracterist_manu'] ?? 'N/A' }}</td>
            <td>{{ $cantidad }}</td>
            <td>$ {{ number_format($precio, 0, ',', '.') }}</td>
            <td>$ {{ number_format($valorTotal, 0, ',', '.') }}</td>
        </tr>
        @endforeach
    </table>

    @php
    $transporte = 90000;
    $iva = $subtotal * 0.19;
    $total = $subtotal + $transporte + $iva;
    @endphp

    <table class="borderless-table">
        <tr class="green-row">
            <td>Sub Total</td>
            <td>$ {{ number_format($subtotal, 0, ',', '.') }}</td>
        </tr>
        <tr>
            <td>Transporte</td>
            <td>$ {{ number_format($transporte, 0, ',', '.') }}</td>
        </tr>
        <tr>
            <td>IVA - 19%</td>
            <td>$ {{ number_format($iva, 0, ',', '.') }}</td>
        </tr>
        <tr class="green-row">
            <td>Total</td>
            <td>$ {{ number_format($total, 0, ',', '.') }}</td>
        </tr>
    </table>

    <table class="borderless-table">
        <thead>
            <td class="green-row">Características:</td>
        </thead>
        <tbody>
            <tr>
                <td>Tipo trabajo</td>
                <td>Liviano</td> {{-- O dinámico si tienes el campo --}}
            </tr>
            <tr>
                <td>Altura</td>
                <td>{{ $product['height'] }} cm</td>
            </tr>
            @php
            $listonSup = collect($product['product_items_manufact'] ?? [])
            ->firstWhere('type_of_piece', 'listones_superiores');

            $listonInf = collect($product['product_items_manufact'] ?? [])
            ->firstWhere('type_of_piece', 'listones_inferiores');
            @endphp

            <tr>
                <td>Listones plástico superiores</td>
                <td>
                    @if ($listonSup)
                    {{ $listonSup['quantity_type_of_piece'] ?? 'N/A' }} {{ $listonSup['type_caracterist_manu'] ?? '' }}
                    @else
                    N/A
                    @endif
                </td>
            </tr>

            {{-- Listones plástico inferiores --}}
            <tr>
                <td>Listones plástico inferiores</td>
                <td>
                    @if ($listonInf)
                    {{ $listonInf['quantity_type_of_piece'] ?? 'N/A' }} {{ $listonInf['type_caracterist_manu'] ?? '' }}
                    @else
                    N/A
                    @endif
                </td>
            </tr>
            {{-- Durmientes --}}
            @php
            $durmiente = collect($product['product_items_manufact'] ?? [])
            ->firstWhere('type_of_piece', 'durmiente');
            @endphp
            <tr>
                <td>Durmientes</td>
                <td>
                    @if ($durmiente)
                    {{ $durmiente['quantity_type_of_piece'] }} {{ $durmiente['type_caracterist_manu'] }}
                    @else
                    N/A
                    @endif
                </td>
            </tr>

            @php
            $pesoUnitario = 'N/A';

            if (!empty($product['product_items_manufact']) && is_array($product['product_items_manufact'])) {
            $pesos = [];

            foreach ($product['product_items_manufact'] as $pieza) {
            if (!empty($pieza['manu_weight'])) {
            $pesos[] = trim($pieza['manu_weight']) . ' Kg';
            }
            }

            if (count($pesos) > 0) {
            $pesoUnitario = implode(', ', $pesos);
            }
            }
            @endphp

            <tr>
                <td>Peso Unitario ( +/- 1)</td>
                <td>{{ $pesoUnitario }}</td>
            </tr>

            <tr>
                <td>Resistencia estática</td>
                <td>2000 Kg</td>
            </tr>
            <tr>
                <td>Resistencia dinámica</td>
                <td>900 Kg</td>
            </tr>
            <tr>
                <td>Resistencia Vacío</td>
                <td>N/A</td>
            </tr>
            <tr>
                <td>Entradas</td>
                <td>Dos entradas</td>
            </tr>
            <tr>
                <td>Dilatación</td>
                <td>5 cm</td>
            </tr>
            <tr>
                <td>Garantía</td>
                <td>3 años</td>
            </tr>
            <tr>
                <td>Imagen De Referencia</td>
                <td>
                    @if (!empty($product['image_reference']))
                    <img src="{{ $product['image_reference'] }}" width="150">
                    @endif
                </td>
            </tr>
        </tbody>
    </table>
    <!-- <div class="reference-image-container">
        <h3>Imagen De Referencia</h3>

    </div> -->

    @if (!$loop->last)
    <div class="page-break"></div>
    @endif
    @endforeach

    {{-- Página 3 --}}
    <div>
        <img src="data:image/png;base64,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" class=" logo">
    </div>

    <div class="section">
        <h4>Condiciones comerciales</h4>
        <p><strong>Forma de pago:</strong> Contado.</p>
        <p><strong>Tiempo de entrega:</strong> 8 Días hábiles después de puesta la orden de compra.</p>
        <p><strong>Transporte:</strong> Se incluye valor de transporte en esta cotización.</p>
        <p><strong>Descargue:</strong> No se incluye descargue en esta cotización.</p>
        <p><strong>Garantía:</strong> 3 Años.</p>
    </div>

    <div class="section" style="margin-top: 50px;">
        <p>Cordialmente,</p>

        <p>
            <strong>Yurany Pérez</strong><br>
            <strong>Asesora Comercial</strong><br>
            <strong>+57 350 4234570</strong><br>
            <strong>Teléfono: 601 8795050</strong><br>
            <strong>ventas4@greenplastic.co</strong><br>
            <strong>www.greenplastic.co</strong><br>
            <strong>NIT: 900.794.260-1</strong>
        </p>
    </div>

    <div class="logos-section">
        <div class="members-text">
            Miembros de
        </div>
        <div class="logos-container">
            <img class="logo-img" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAZAAAAEECAIAAACJKvXOAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjkxNEYyQ0M2ODNDQTExRThCRDUyQTdFMTlFRTY1OTdDIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjkxNEYyQ0M3ODNDQTExRThCRDUyQTdFMTlFRTY1OTdDIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6OTE0RjJDQzQ4M0NBMTFFOEJENTJBN0UxOUVFNjU5N0MiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6OTE0RjJDQzU4M0NBMTFFOEJENTJBN0UxOUVFNjU5N0MiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5VnfLEAAAtWUlEQVR42uydCWAU5d3G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" alt="Logo andi">
            <img class="logo-img" src="data:image/jpeg;base64,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" alt="Logo Vision 30-30">
            <img class="logo-img" src="data:image/png;base64,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" alt="Logo acoplasticos">
        </div>
    </div>
</body>

</html>