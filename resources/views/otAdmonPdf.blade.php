<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remisión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 18px;
        }

        th,
        td {
            padding: 5px;
            text-align: left;
        }

        td {
            width: auto;
            padding: 5px;
            text-align: left;
            vertical-align: middle;
        }

        .header {
            text-align: center;
            font-weight: bold;
        }

        .centered-title {
            text-align: center;
            margin: 15px 0;
            font-size: 20px;
            font-weight: bold;
        }

        .subtitle {
            font-weight: bold;
            margin-top: 10px;
        }

        .logo {
            width: 80px;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td colspan="1"><img src="{{ public_path('green-plastic.jpg') }}" style="width: 30%" alt="Green Plastic" class="logo"></td>
            <td colspan="2" class="header">GREEN PLASTIC COLOMBIA SAS<br>NIT. 900.794.260-1</td>
            <td colspan="1">VERSIÓN 2024-2</td>
        </tr>
        <tr>
            <td colspan="4" style="text-align: center; padding-bottom: 30px;">Kilómetro 1.5 vía Siberia - Cota Parque Industrial Potrero Chico Robles 2 Bodega 2</td>
        </tr>
        <tr>
            <td>Fecha</td>
            <td>{{ $quoter->created_at }}</td>
            <td>Remisión No</td>
            <td>{{ $quoter->invoice_general_data['remission_number'] }}</td>

        </tr>
        <tr>
            <td>O.T. No</td>
            <td>OT</td>
            <td>O.C. No</td>
            <td>0</td>
        </tr>
        <tr>
            <td>Cliente</td>
            <td colspan="7">{{ $quoter->client }}</td>
        </tr>
        <tr>
            <td>Dirección entrega</td>
            <td colspan="7">{{ $quoter->delivery_address }}</td>
        </tr>
        <tr>
            <td>Contacto comercial</td>
            <td colspan="7">{{ $quoter->business_contact }}</td>
        </tr>
        <tr>
            <td>Teléfono contacto</td>
            <td>{{ $quoter->phone_contact }}</td>
            <td>Persona que recibe</td>
            <td colspan="5">{{ $quoter->business_contact }}</td>
        </tr>
    </table>
    <br>
    <table style="border: 1px solid black;">
        <thead>
            <tr>
                <th style="border: 1px solid black;">Item</th>
                <th style="border: 1px solid black;">Referencia</th>
                <th style="border: 1px solid black;">Cantidad</th>
                <th style="border: 1px solid black;">Observaciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach((array)$quoter->product_general_data as $item)
            @if(is_array($item)) <!-- Verifica si es un array -->
            <tr>
                <td style="border: 1px solid black;">{{ $item['type_reference'] ?? 'N/A' }}</td>
                <td style="border: 1px solid black;">{{ $item['standar_reference'] ?? 'N/A' }}</td>
                <td style="border: 1px solid black;">{{ $item['product_invoice_data']['quantity_total'] ?? 'N/A' }}</td>
                <!-- <td style="border: 1px solid black;">
                    @foreach($item['product_items_manufact'] ?? [] as $item_manufact)
                    <ul>
                        <li>{{ $item_manufact['quantity_type_of_piece'] ?? '' }}: {{ $item_manufact['type_of_piece'] ?? '' }}</li>
                        <li>{{ $item_manufact['type_caracterist_manu'] ?? '' }}</li>
                        <li>Peso: {{ $item_manufact['manu_weight'] ?? '' }}</li>
                        <li>Altura: {{ $item_manufact['manu_length'] ?? '' }}</li>
                    </ul>
                    @endforeach
                </td> -->
                <td style="border: 1px solid black;">{{ $item['description'] ?? 'N/A' }}</td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>
    <br>
    <table>
        <tr>
            <td>Transportado por</td>
        </tr>
        <tr>
            <td>Cédula</td>
            <td>Placa</td>
        </tr>
        <tr>
            <td>Teléfono</td>
            <td>Firma transportador</td>
            <td></td>
        </tr>
        <td colspan="4" style="padding-top: 60px; padding-bottom: 60px;">
            <div style="display: inline-block; text-align: center; width: 80%;">
                <div style="border-top: 1px solid #000; width: 100%; margin-bottom: 5px;"></div>
                <span style="font-size: 0.8em; color: #555;">
                    Nombre - Firma - Fecha de entrega - Sello
                </span>
            </div>
        </td>
        </tr>
    </table>
    <!-- <h2 class="centered-title">Producto</h2> -->

    <!-- Sección de Información del Producto -->
    <div class="centered-title">INFORMACION DEL PRODUCTO</div>

    <table>
        <tr>
            <td></td>
            <td style="border: 1px solid black; width: 45px;">Cantidad</td>
            <td style="border: 1px solid black; width: 150px;">Ref. Estándar</td>
            <td style="border: 1px solid black; width: 150px;">Ref. A medida</td>
            <td style="border: 1px solid black; width: 45px;">Tipo</td>
            <td style="border: 1px solid black; width: 45px;">Ancho</td>
            <td style="border: 1px solid black; width: 45px;">Largo</td>
            <td style="border: 1px solid black; width: 45px;">Alto</td>
            <td style="border: 1px solid black; width: 25px;">C1</td>
            <td style="border: 1px solid black; width: 25px;">C2</td>
            <td style="border: 1px solid black; width: 25px;">C3</td>
        </tr>
        <tr>
            <td style="border: 1px solid black; width: 40px;">Fabricación</td>
            <td style="border: 1px solid black;"></td>
            <td style="border: 1px solid black;"></td>
            <td style="border: 1px solid black;"></td>
            <td style="border: 1px solid black;"></td>
            <td style="border: 1px solid black;"></td>
            <td style="border: 1px solid black;"></td>
            <td style="border: 1px solid black;"></td>
            <td style="border: 1px solid black;"></td>
            <td style="border: 1px solid black;"></td>
            <td style="border: 1px solid black;"></td>
        </tr>
        <tr>
            <td style="border: 1px solid black;">Descargue de Inventario</td>
            <td style="border: 1px solid black;"></td>
            <td style="border: 1px solid black;"></td>
            <td class="subtitle" style="border: 1px solid black;">STOCK GPS</td>
            <td></td>
        </tr>
    </table>

    <!-- Descripción del producto debajo como solicitaste -->
    <table class="full-width">
        <h3 class="centered-title">Descripción del producto, condiciones especiales de fabricación</h3>
        <tr>
            <th style="border: 1px solid black; height: 60px;"></th>
        </tr>
    </table>

    <h2 class="centered-title">Como se debe Fabricar</h2>

    <table>
        <tr>
            <th style="width: 50px;"></th>
            <th style="width: 40px;">CANT</th>
            <th style="width: 180px;">TIPO</th>
            <th style="width: 80px;">LARGO</th>
            <th style="width: 80px;">PESO UNIT</th>
            <th style="width: 80px;">TOT UND</th>
        </tr>
        <tr>
            <td style="border: 1px solid black;">Listones superiores</td>
            <td style="border: 1px solid black;">2</td>
            <td style="border: 1px solid black;">TIPO</td>
            <td style="border: 1px solid black;">0</td>
            <td style="border: 1px solid black;">0.0</td>
            <td style="border: 1px solid black;"></td>
        </tr>
        <tr>
            <td style="border: 1px solid black;">Durmientes</td>
            <td style="border: 1px solid black;">2</td>
            <td style="border: 1px solid black;">TIPO</td>
            <td style="border: 1px solid black;">0</td>
            <td style="border: 1px solid black;">0.0</td>
            <td style="border: 1px solid black;"></td>
        </tr>
        <!-- Más filas según necesidad -->
    </table>

    <!-- Sección de Objetivaciones -->
    <table>
        <h3 style="border: 1px solid black;" class="centered-title">OBSERVACIONES</h3>
        <tr>
            <th style="border: 1px solid black;">Peso uni</th>
        </tr>
        <tr>
            <td style="border: 1px solid black;">0.0</td>
        </tr>
        <!-- Más filas según necesidad -->
    </table>
    <table>
        <h3 class="centered-title">Información para facturación</h3>
        <tr>
            <th style="border: 1px solid black;" colspan="3">Forma de pago:</th>
            <td style="border: 1px solid black;">Credito (X)</td>
            <th style="border: 1px solid black;"></th>
            <td style="border: 1px solid black;">Plazo de dias(X)</td>
            <th style="border: 1px solid black;"></th>
            <td style="border: 1px solid black;">Contado(X)</td>
            <th style="border: 1px solid black;"></th>
        </tr>
        <tr>
            <th style="border: 1px solid black;">Valor de venta unitario sin descuento:</th>
            <td style="border: 1px solid black;">Dcto %</td>
            <td style="border: 1px solid black;">0%</td>
            <th style="border: 1px solid black;">Observaciones a la forma de pago</th>
            <td style="border: 1px solid black;" colspan="3"></td>
        </tr>
        <tr>
            <th></th>
            <th style="border: 1px solid black;">VALOR!</th>
        </tr>
    </table>

    <!-- Sección de Dilatación proporcional -->

    <table>
        <h3 class="centered-title">Observaciones a la forma de pago</h3>
        <tr>
            <th style="border: 1px solid black;">Cantidad</th>
            <td style="border: 1px solid black;"> -</td>
            <th style="border: 1px solid black;">Valor total a facturar este item</th>
            <td style="border: 1px solid black;"> -</td>
        </tr>
        <tr>
            <th>Dilatacion entre durmientes</th>
            <th>Dilatacion Proporcional</th>
        </tr>
    </table>
</body>

</html>