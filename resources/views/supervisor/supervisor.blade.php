@extends('layout.superv')
@section('title', 'Page Title')
@section('content')
@can('create', App\Models\Categorias::class)
<div class="container mt-5"style="background-color: rgba(255, 255, 255, 0.80)">
<table class="table table-bordered table-striped text-center">

@if($users->count())
<thead>
  <tr>
      <th scope="col">Usuarios</th>
  </tr>
</thead>
<tr>
  <td><p>total de usuarios registrados: {{$users->count()}}</td>
</tr>
  </table>  
@endif

<table class="table table-bordered table-striped text-center">
 @foreach($productos as $producto)
     <thead>
      <tr>
        <th scope="col">Productos</th>
      </tr>
     </thead>
      <tr>
       <td> <p>total de Productos registrados: {{$producto->count()}}</p></td>   
      </tr>
</table>
@endforeach
<table class="table table-bordered table-striped text-center">
 @if($transacciones->count())
     <thead>
      <tr>
        <th scope="col">transacciones</th>
        </tr>
     </thead>
      <tr>
       <td> <p>total de Transaciones Realizadas: {{$transacciones->count()}}</p></td>   
      </tr>
</table>
</div>
@endif
@endcan  
</body>
 
@endsection