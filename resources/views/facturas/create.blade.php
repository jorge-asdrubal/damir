<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Factura</legend>
        <form action="{{ route('facturas.guardar') }}" method="POST">
            @csrf
            
            <label for="nombre_persona">Nombre persona</label>
            <input type="text" name="nombre_persona" id="nombre_persona"><br>
            
            <label for="precio_pago">Precio pago</label>
            <input type="text" name="precio_pago" id="precio_pago"><br>

            <label for="documento_persona">documento persona</label>
            <input type="text" name="documento_persona" id="documento_persona"><br>

            <label for="fecha_facturacion">Fecha registro</label>
            <input type="date" name="fecha_facturacion" id="fecha_facturacion"><br>

            <label for="nombre_empresa">Nombre empresa</label>
            <input type="text" name="nombre_empresa" id="nombre_empresa"><br>

            <label for="razon_pago">Razon pago</label>
            <input type="text" name="razon_pago" id="razon_pago"><br>

            <label for="celular">Celular</label>
            <input type="text" name="celular" id="celular"><br>

            <input type="submit" value="GUARDAR">

        </form>
    </fieldset>
</body>
</html>