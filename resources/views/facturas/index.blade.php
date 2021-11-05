<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>nombre persona</th>
                <th>precio pago</th>
                <th>documento persona</th>
                <th>fecha facturacion</th>
                <th>nombre empresa</th>
                <th>razon_pago</th>
                <th>celular</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($facturas as $factura)
                <td>{{ $factura->nombre_persona }}</td>
                <td>{{ $factura->precio_pago }}</td>
                <td>{{ $factura->documento_persona }}</td>
                <td>{{ $factura->fecha_facturacion }}</td>
                <td>{{ $factura->nombre_empresa }}</td>
                <td>{{ $factura->razon_pago }}</td>
                <td>{{ $factura->celular }}</td>
            @endforeach
        </tbody>
    </table>
</body>
</html>