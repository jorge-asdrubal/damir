<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de Facturacion</title>   
<style>
  #emp{
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
  #emp td,#emp th{
    border: 1px solid #ddd;
    padding:8px;
  }

    #emp td{
      padding-bottom: 12px;
    text-align: left;
    background-color: black;
    color:#fff;}
    

</style>

  </head>
<body>
     <div class="container">
       <h1>PDF de Facturas</h1>
        <table id="emp">
            <thead>
              <tr>
                <th>#</th>
                <th>Nombre_Cliente</th>
                <th>Nombre_Producto</th>
                <th>Precio</th>
                <th>Fecha</th>
              </tr>
            </thead>
       
        <tbody>
            @foreach($facturacion as $facturacion)
            <tr>
                <th scope="row">{{$facturacion->id}}</th>
                <td>{{$facturacion->Nombre_Cliente}}</td>
                <td>{{$facturacion->Nombre_Producto}}</td>
                <td>{{$facturacion->Precio}}</td>
                <td>{{$facturacion->Fecha}}</td>
            </tr>
                 @endforeach
        </tbody>
    </table>
</div>
</body>
</html>