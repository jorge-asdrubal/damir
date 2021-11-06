
@extends('adminlte::page')

@section('title', 'Lista')

@section('content_header')
    <h1>Lista de Facturas</h1>
@stop

@section('content')
<a href="facturacion/create" class="btn btn-primary mb-3">CREAR</a>
<a href="{{ route('VistaPDF') }}" class="btn btn-primary mb-3">PDF</a>

<table  id="facturacion" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">

    <thead class="thead-dark" text="white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre_Cliente</th>
            <th scope="col">Nombre_Producto</th>
            <th scope="col">Precio</th>
            <th scope="col">Fecha</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
 @foreach($facturacion as $facturacion)
<tr>
    <td>{{$facturacion->id}}</td>
    <td>{{$facturacion->Nombre_Cliente}}</td>
    <td>{{$facturacion->Nombre_Producto}}</td>
    <td>{{$facturacion->Precio}}</td>
    <td>{{$facturacion->Fecha}}</td>
    <td>
        <form id="eliminar" action="{{ route('facturacion.destroy',$facturacion->id) }}" method="POST">
            <a href="{{ route('VistaPDF') }}" class="btn btn-primary mb-3">PDF</a>
            <a href="/facturacion/{{$facturacion->id}}/edit" class="btn btn-info">Editar</a>         
                @csrf
                @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
           </form>      

    </td>
   
</tr>


@endforeach

    </tbody>

</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#facturacion').DataTable({

        "lengthMenu":[[5,10,50,-1],[5,10,50,"all"]]
    });
} );

</script>

@stop

@section('js')
<script type="text/javascript">

$('#eliminar').submit(function(e){

e.preventDefault();

Swal.fire({
    title: 'Estas seguro de eliminar?',
    text: "No serás capaz de revertir esto!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Si, Eliminar!'
  }).then((result) => {
    if (result.isConfirmed) {
     /* Swal.fire(
        'Eliminado!',
        'Tu facturacon esta eliminida.',
        'success'
      )*/
    this.submit();

    }
  })
})

</script>
@stop


