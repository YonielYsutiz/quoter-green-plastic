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
            <td colspan="1"><img src="logo.png" alt="Logo Green Plastic" class="logo"></td>
            <td colspan="2" class="header">GREEN PLASTIC COLOMBIA SAS<br>NIT. 900.794.260-1</td>
            <td colspan="1">VERSIÓN 2024-2</td>
        </tr>
        <tr>
            <td colspan="4">Kilómetro 1.5 vía Siberia - Cota Parque Industrial Potrero Chico Robles 2 Bodega 2</td>
        </tr>
        <tr>
            <td>Fecha</td>
            <td><input type="text" value="27/03/2025"></td>
            <td>Remisión No</td>
            <td><input type="text" value="RM"></td>
        </tr>
        <tr>
            <td>O.T. No</td>
            <td><input type="text" value="OT"></td>
            <td>O.C. No</td>
            <td><input type="text" value="0"></td>
        </tr>
        <tr>
            <td>Cliente</td>
            <td colspan="7"><input type="text" value="0"></td>
        </tr>
        <tr>
            <td>Dirección entrega</td>
            <td colspan="7"><input type="text" value="0"></td>
        </tr>
        <tr>
            <td>Contacto comercial</td>
            <td colspan="7"><input type="text" value="0"></td>
        </tr>
        <tr>
            <td>Teléfono contacto</td>
            <td><input type="text" value="0"></td>
            <td>Persona que recibe</td>
            <td colspan="5"><input type="text"></td>
        </tr>
    </table>
    <br>
    <table>
        <tr>
            <th>Item</th>
            <th>Cantidad</th>
            <th>Referencia</th>
            <th>Observaciones</th>
        </tr>
        <tr>
            <td>ITEM 1</td>
            <td>0</td>
            <td></td>
            <td>0</td>
        </tr>
        <tr>
            <td>ITEM 2</td>
            <td>0</td>
            <td></td>
            <td>0</td>
        </tr>
    </table>
    <br>
    <table>
        <tr>
            <td>Transportado por</td>
            <td colspan="3"><input type="text"></td>
        </tr>
        <tr>
            <td>Cédula</td>
            <td><input type="text"></td>
            <td>Placa</td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Teléfono</td>
            <td><input type="text"></td>
            <td>Firma transportador</td>
            <td></td>
        </tr>
        <tr>
            <td colspan="4">Nombre - Firma - Fecha de entrega - Sello</td>
        </tr>
    </table>
</body>

</html>