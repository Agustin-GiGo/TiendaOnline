<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <title>GIGO('title')</title>
    </head>
    <body>
        @section('barra lateral')
            <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Dashboard Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">
    
    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    
    <!-- Custom styles for this template -->
    <link href="../dashboard/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-rgb flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="">GIGO</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="/login">Iniciar sesion</a>
    </li>
  </ul>
</nav>

      
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard/dashboard.js"></script></body>
</html>
          
        <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Carousel Template · Bootstrap</title>

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.css" rel="stylesheet">

    
    <!-- Custom styles for this template -->
    <link href="carousel3.css" rel="stylesheet">
<!-- Bootstrap -->
    <link href="../public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

     <!-- Fonts -->
    
     <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet"> 
     <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
     

    <!-- Styles -->
  </head>
         
  
  
 
<div class="page-section cta" style="color: rgba(255, 255, 255, 0.85);" >
  <div class="container">
    <h1 class="display-3">BIENVENIDO </h1> 
  </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
  <div class="container">
    <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="base.html">Gestión de Pedidos</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="nav mx-auto">

        
        <li class="nav-item active px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="/">GIGO</a>  
     </li>
        <li class="nav-item active px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="contacto.html">Contacto</a>
        </li>
        </li>
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="productosV">EN VENTA</a>
        </li>
        <li class="nav-item active px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="#">FACEBOOK</a>
            </li>
         <li class="nav-item  active px-lg-4">
          <a class="nav-link text-uppercase text-expanded"href="categorias">Categorias</a>
          
          
        </li>
        </li>
      </ul>
      
    </div>
  </div>
</nav>

    <!-- Bootstrap -->
    <script src="../public/vendor/jquery/jquery.min.js"></script>
    <script src="../public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        @show

        <div class="container">
            @yield('contenido')
        </div>
    </body>
</html>
