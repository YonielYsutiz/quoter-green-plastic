<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orden de Trabajo - Green Plastic</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 10pt;
            margin: 0;
            padding: 5mm;
            color: #000;
        }

        .header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
        }

        .logo {
            height: 30px;
        }

        .company-name {
            font-weight: bold;
            font-size: 14pt;
            text-align: center;
        }

        .nit {
            font-size: 9pt;
            text-align: center;
        }

        .address {
            font-size: 9pt;
            text-align: center;
            margin: 5px 0 15px 0;
            border-bottom: 1px solid #000;
            padding-bottom: 10px;
        }

        .document-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }

        .document-table td {
            padding: 4px;
            border: 1px solid #000;
        }

        .document-table th {
            padding: 4px;
            border: 1px solid #000;
            background-color: #f0f0f0;
            text-align: center;
        }

        .section-title {
            font-weight: bold;
            font-size: 11pt;
            margin: 10px 0 5px 0;
            text-align: center;
            background-color: #f0f0f0;
            padding: 3px;
            border: 1px solid #000;
        }

        .subtitle {
            font-weight: bold;
            background-color: #f0f0f0;
        }

        .signature-line {
            border-top: 1px solid #000;
            margin-top: 50px;
            padding-top: 5px;
            text-align: center;
            font-size: 9pt;
        }

        .checkbox {
            display: inline-block;
            width: 20px;
            /* Aumenté el ancho */
            height: 20px;
            /* Aumenté la altura */
            border: 2px solid #000;
            /* Borde más grueso */
            text-align: center;
            line-height: 20px;
            /* Ajusté para centrar verticalmente */
            margin-right: 8px;
            font-size: 14px;
            /* Tamaño de fuente más grande para la "X" */
            font-weight: bold;
            /* "X" en negrita */
            vertical-align: middle;
            /* Alineación vertical con el texto */
        }

        @page {
            size: A4;
            margin: 10mm;
        }
    </style>
</head>

<body>
    <!-- Encabezado -->
    <div class="header">
        <img src=data:image/png;base64,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" class=" logo" alt="Green Plastic">
        <div>
            <div class="company-name">GREEN PLASTIC COLOMBIA SAS</div>
            <div class="nit">NIT. 900.794.260-1</div>
        </div>
        <div class="version">VERSIÓN 2024-2</div>
    </div>

    <div class="address">
        Kilómetro 1.5 vía Siberia - Cota Parque Industrial Potrero Chico Robles 2 Bodega 2
    </div>

    <table class="document-table">
        <tr>
            <td width="15%">Fecha</td>
            <td width="35%">{{ $quoter->created_at }}</td>
            <td width="15%">Remisión No</td>
            <td width="35%">{{ $quoter->invoice_general_data['remission_number'] }}</td>
        </tr>
        <tr>
            <td>O.T. No</td>
            <td>OT</td>
            <td>O.C. No</td>
            <td>0</td>
        </tr>
        <tr>
            <td>Cliente</td>
            <td colspan="3">{{ $quoter->client }}</td>
        </tr>
        <tr>
            <td>Dirección entrega</td>
            <td colspan="3">{{ $quoter->delivery_address }}</td>
        </tr>
        <tr>
            <td>Contacto comercial</td>
            <td colspan="3">{{ $quoter->business_contact }}</td>
        </tr>
        <tr>
            <td>Teléfono contacto</td>
            <td>{{ $quoter->phone_contact }}</td>
            <td>Persona que recibe</td>
            <td>{{ $quoter->business_contact }}</td>
        </tr>
    </table>

    <div class="section-title">PRODUCTO: POR FAVOR LAS ESTIBAS DEBEN IR MARCADAS CON LOGO GREEN PLASTIC</div>
    <table class="document-table">
        <thead>
            <tr>
                <th width="25%">Item</th>
                <th width="25%">Referencia</th>
                <th width="15%">Cantidad</th>
                <th width="35%">Observaciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach((array)$quoter->product_general_data as $item)
            @if(is_array($item))
            <tr>
                <td>{{ $item['type_reference'] ?? 'N/A' }}</td>
                <td>{{ $item['standar_reference'] ?? 'N/A' }}</td>
                <td>{{ $item['product_invoice_data']['quantity_total'] ?? 'N/A' }}</td>
                <td>{{ $item['description'] ?? 'N/A' }}</td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>

    <div class="section-title">INFORMACION DEL PRODUCTO</div>
    <table class="document-table">
        <tr>
            <th width="15%"></th>
            <th width="8%">Cantidad</th>
            <th width="12%">Ref. Estándar</th>
            <th width="12%">Ref. A medida</th>
            <th width="8%">Tipo</th>
            <th width="8%">Ancho</th>
            <th width="8%">Largo</th>
            <th width="8%">Alto</th>
            <th width="7%">C1</th>
            <th width="7%">C2</th>
            <th width="7%">C3</th>
        </tr>
        <tr>
            <td class="subtitle">Fabricación</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="subtitle">Descargue de Inventario</td>
            <td></td>
            <td></td>
            <td colspan="8">STOCK GPS</td>
        </tr>
    </table>

    <div class="section-title">Descripción del producto, condiciones especiales de fabricación</div>
    <table class="document-table">
        <tr>
            <td height="60px"></td>
        </tr>
    </table>

    <div class="section-title">CANTIDAD A FABRICAR</div>
    <table class="document-table">
        <tr>
            <td class="subtitle" colspan="6">Como se debe Fabricar</td>
            <td>0</td>
        </tr>
        <tbody>
            @foreach((array)$quoter->product_general_data as $item)
            @if(is_array($item) && !empty($item['product_items_manufact']))
            <tr>
                <th style="width: 30%;">Producto</th>
                <th style="width: 10%;">CANT</th>
                <th style="width: 15%;">TIPO</th>
                <th style="width: 15%;">LARGO</th>
                <th style="width: 15%;">TONT UND</th>
                <th style="width: 15%;">PESO</th>
            </tr>
            @foreach($item['product_items_manufact'] as $piece)
            <tr>
                <td> @switch($piece['type_of_piece'])
                    @case('listones_superiores') Listones Superiores @break
                    @case('durmiente') Durmiente @break
                    @case('tornillos') Tornillos @break
                    @default {{ ucfirst(str_replace('_', ' ', $piece['type_of_piece'])) }}
                    @endswitch
                </td>
                <td>{{ $piece['quantity_type_of_piece'] ?? '0' }}</td>
                <td>{{ $piece['type_caracterist_manu'] ?? 'N/A' }}</td>
                <td>{{ $piece['manu_length'] ?? '0' }}</td>
                <td>{{ $piece['manu_total_und'] ?? '0' }}</td>
                <td>{{ $piece['manu_weight'] ?? '0' }}</td>
            </tr>
            @endforeach
            <!-- <tr>
                <td>Dormiente 0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td></td>
            </tr>
            <tr>
                <td>Listones Inferiores</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td></td>
            </tr>
            <tr>
                <td>Tacos</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td></td>
            </tr> -->
            @endif
            @endforeach
        </tbody>
    </table>

    <div class="section-title">INFORMACIÓN PARA FACTURACIÓN</div>
    <table class="document-table">
        <tr>
            <td width="30%">Forma de pago:</td>
            <td width="20%"><span class="checkbox"> @if(isset($quoter->product_general_data[0]['product_invoice_data']['paid_method']) && $quoter->product_general_data[0]['product_invoice_data']['paid_method'] == 'credito')
                    X
                    @endif</span> Crédito</td>
            <td width="20%"><span class="checkbox"> @if(isset($quoter->product_general_data[0]['product_invoice_data']['paid_method']) && $quoter->product_general_data[0]['product_invoice_data']['paid_method'] == 'plazo')
                    X
                    @endif</span> Plazo de días</td>
            <td width="30%"><span class="checkbox"> @if(isset($quoter->product_general_data[0]['product_invoice_data']['paid_method']) && $quoter->product_general_data[0]['product_invoice_data']['paid_method'] == 'contado')
                    X
                    @endif</span> Contado</td>
        </tr>
        <tr>
            <td>Valor de venta unitario sin descuento:</td>
            <td>Dcto %</td>
            <td>0%</td>
            <td>Observaciones a la forma de pago</td>
        </tr>
        <tr>
            <td class="subtitle">VALOR</td>
            <td colspan="3"> ${{ number_format($quoter->product_general_data[0]['product_invoice_data']['value_total_without_discount'] ?? 0, 2) }}</td>
        </tr>
    </table>

    <div class="signature-line">
        Nombre - Firma - Fecha de entrega - Sello
    </div>
</body>

</html>