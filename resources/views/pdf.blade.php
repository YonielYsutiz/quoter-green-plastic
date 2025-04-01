<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remisión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
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
                <th style="border: 1px solid black;">Piezas para fabricar</th>
                <th style="border: 1px solid black;">Observaciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($quoter->product_general_data as $item)
            <tr>
                <td style="border: 1px solid black;">{{ $item['type_reference'] }}</td> <!-- Mostrar el precio del producto -->
                <td style="border: 1px solid black;">{{ $item['standar_reference'] }}</td> <!-- Mostrar el nombre del producto -->
                <td style="border: 1px solid black;">{{ $item['product_invoice_data']['quantity_total'] }}</td> <!-- Mostrar el precio del producto -->
                <td style="border: 1px solid black;">
                    @foreach($item['product_items_manufact'] as $item_manufact)
                    <ul>
                        <li>{{ $item_manufact['quantity_type_of_piece'] }}: {{$item_manufact['type_of_piece']}}</li>
                        <li>{{ $item_manufact['type_caracterist_manu'] }}</li>
                        <li>Peso: {{ $item_manufact['manu_weight'] }}</li>
                        <li>Altura: {{ $item_manufact['manu_length'] }}</li>
                    </ul>
                    @endforeach
                </td>
                <td style="border: 1px solid black;">{{ $item['description'] }}</td>
            </tr>
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
</body>

</html>