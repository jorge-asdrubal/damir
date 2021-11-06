
@extends('adminlte::page')

@section('title', 'Registro')

@section('content_header')
    <h1>Registrar Factura</h1>
@stop

@section('content')
<form action="/facturacion" method="POST">
  @csrf
<div class="mb-3">
  <label for="" class="form-label">Nombre_Cliente</label>
  <input id="Nombre_Cliente" name="Nombre_Cliente" type="text" class="form-control" tabindex="1">    
</div>
<div class="mb-3">
  <label for="" class="form-label">Nombre_Producto</label>
  <input id="Nombre_Producto" name="Nombre_Producto" type="text" class="form-control" tabindex="2">
</div>
<div class="mb-3">
  <label for="" class="form-label">Precio</label>
  <input id="Precio" name="Precio" type="number" class="form-control" step="any" value="0.00"  tabindex="3">
</div>
<div class="mb-3">
  <label for="" class="form-label">Fecha</label>
  <input id="Fecha" name="Fecha" type="date" class="form-control" tabindex="3">
</div>
<a href="/facturacion" class="btn btn-secondary" tabindex="5">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop