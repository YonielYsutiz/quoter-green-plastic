<!-- resources/views/pdf.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>PDF generado con Laravel</title>
</head>
<body>
    <h1>Reporte de Productos</h1>
    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <!-- <tbody>
            @foreach ($productos as $producto)
            <tr>
                <td>{{ $producto['nombre'] }}</td>
                <td>{{ $producto['precio'] }}</td>
                <td>{{ $producto['cantidad'] }}</td>
            </tr>
            @endforeach
        </tbody> -->
    </table>
</body>
</html>