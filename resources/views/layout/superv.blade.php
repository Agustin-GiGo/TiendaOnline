<html>
    <head>
        <title>proyecto 202 @yield('title')</title>
    </head>
    <body>
        @section('barra lateral')
            <!doctype html>
            <!DOCTYPE html>


    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="../dashboard/dashboard.css" rel="stylesheet">
  </head>
  <body>
  @guest
 
@if (Route::has('login'))

<li>
   <a class="link" href="{{ route('login') }}">{{ __('Login') }}</a>
  <li>
 @endif
                            
 @if (Route::has('register'))
  
      <a class="link " href="{{ route('register') }}">{{ __('Register') }}</a>
    
@endif
@else
<nav class="navbar navbar-dark sticky-top bg-rgb flex-md-nowrap p-0 shadow">
<a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="">GIGO-SHOP</a>
<button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
  <div class="dropdown btn-group dropleft">
  
  <a id="navbarDropdown" class="link dropdown-toggle col-lg-2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
  
        {{ Auth::user()->name }}
  </a>   
    <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="{{route('editarUsuario',Auth::user()->id)}}">Editar Usuario</a>
       <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
    {{ __('Logout') }}
        </a>
        
   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
      @csrf
   </form>
   </div>
     </div>
     
     </div>
     
     </nav>
    @endguest

      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard/dashboard.js"></script></body>

         
<div class="page-section" style="color: rgba(255, 255, 255, 0.85);" >
  <div class="container">
    <h1 class="display-3">WELCOME</h1>
  </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
  <div class="container-fluid">
    <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">\</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
   
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="nav mx-auto">
      
      @can('create', App\Models\Categorias::class)
        <li class="nav-item active px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="/supervisor">GIGO-SHOP</a>  
     </li>
    @endcan

    <li class="nav-item px-lg-6">
      <a class="nav-link text-uppercase text-expanded" href="/home">Home</a>
  </li>

    @can('create', App\Models\Categorias::class)
        <li class="nav-item px-lg-5">
          <a class="nav-link text-uppercase text-expanded" href="/usuariosS">Usuarios</a>
        </li>
       @endcan
       
       @can('create', App\Models\Categorias::class)
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="/productoS">Productos</a>
        </li>
         @endcan  
         
      @can('create', App\Models\Categorias::class)
         <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase "href="/categorias">Categorias</a>
          </li>
          @endcan
          @can('create', App\Models\Categorias::class)
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="/vendedores">Vendedores</a>
            </li>
         @endcan 
         @can('create', App\Models\Anonimo::class)
         <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="/login">Login</a>
            </li> 
            @endcan
            @can('create', App\Models\Anonimo::class)
         <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="/Vendedores">Vendedores</a>
            </li> 
            @endcan
            <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded"href="revision">Revision</a>
          </li>
            @can('create', App\Models\Categorias::class)
         <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="/recibir">Recibi</a>
            </li> 
            
            @endcan 
          
      </ul>
      </ul>   
    </div>  
  </div>
</nav>
</div>
@show

       
@yield('content')

      
          <!-- Bootstrap -->
          <script src="../public/vendor/jquery/jquery.min.js"></script>
          <script src="../public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>


         

  


