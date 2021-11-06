
@extends('adminlte::page')

@section('title', 'Editar')

@section('content_header')
    <h1>Editar Facturacion</h1>
@stop

@section('content')


<form action="/facturacion/{{$facturacion->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Nombre_Cliente</label>
    <input id="Nombre_Cliente" name="Nombre_Cliente" type="text" class="form-control" value="{{$facturacion->Nombre_Cliente}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Nombre_Producto</label>
    <input id="Nombre_Producto" name="Nombre_Producto" type="text" class="form-control" value="{{$facturacion->Nombre_Producto}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Precio</label>
    <input id="Precio" name="Precio" type="number" class="form-control" step="any" value="{{$facturacion->Precio}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha</label>
    <input id="Fecha" name="Fecha" type="date"  class="form-control" value="{{$facturacion->Fecha}}">
  </div>
  <a href="/facturacion" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop