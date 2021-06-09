@extends('layout.superv')

@section('title', 'Page Title')

@section('content')
@can('create', App\Models\Productos::class)
<div class="container mt-5"style="background-color: rgba(255, 255, 255, 0.80)">
<table class="table table-bordered table-striped text-center">
@if($productos->count())
<thead>
  <tr>
      <th scope="col">Vendedores</th>
  </tr>
  </thead>
<tr>
  <td><p>Los productos registrados son: {{$productos->count()}}</td>
  </table>
  <table class="table table-bordered table-striped text-center">
  <thead>
  <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre del producto</th>
      <th scope="col">cantidad</th>
      <th scope="col">precio actual</th>
      <th scope="col">Imagen</th>
      <th scope="col">Fecha de registro</th>
  </tr>
  </thead>
  @foreach($productos as $producto)
  <tr>
      <td>{{ $producto->id}}</td>
      <td>{{ $producto->Nom_Producto}}</td>
      <td>{{ $producto->cantidad}}</td>
      <td>{{ $producto->precioU}}</td>
      <td><img class="img-thumbnail"width="100" height="100" src="{{ $producto->url_path}}"></td>
      <td>{{ $producto->created_at}}</td>
  </tr>
  
  @endforeach
  </table>  
@endif

</div>
@endcan  
</body>        
 
@endsection