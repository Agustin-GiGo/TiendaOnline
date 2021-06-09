@extends('layout.superv')

@section('title', 'Page Title')

@section('content')
@can('create', App\Models\Categorias::class)
<div class="container mt-5"style="background-color: rgba(255, 255, 255, 0.80)">
<table class="table table-bordered table-striped text-center">
@if($users->count())
<thead>
  <tr>
      <th scope="col">Vendedores</th>
  </tr>
  </thead>
<tr>
  <td><p>total de vendedores registrados: {{$users->count()}}</td>
  </table>
  <table class="table table-bordered table-striped text-center">
  <thead>
  <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Fecha de Registro</th>
      <th scope="col">Transacciones</th>
  </tr>
  </thead>
  @foreach($users as $user)
  @if($transacciones->count())
  <tr>
      <td>{{ $user->id}}</td>
      <td>{{ $user->name}}</td>
      <td>{{ $user->email}}</td>
      <td>{{ $user->created_at}}</td>
      <td>{{$transacciones->count()}}</td>
  </tr>
  @endif
  @endforeach
  </table>  
@endif

</div>
@endcan  
</body>
 
@endsection