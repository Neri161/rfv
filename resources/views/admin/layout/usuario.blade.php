<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('titulo')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/inicio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <meta name="csrf-token" content="{{ csrf_token()}}">
    @yield('css')
</head>
<body>
<!-- Navbar en la parte superior que se deliza lo largo de la pagina -->
<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
    <a class="navbar-brand" href="{{route('usuario.inicio')}}"><i class="fas fa-truck-moving"></i> RFV </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!--Items, titulos -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <!--Menu desplegable -->
            <li class="nav-item dropdown">
            </li>
        </ul>
        <!--Busqueda -->
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-success" type="submit"><i class="fas fa-search"></i></button>
        </form>
        <!--Elementos de la derecha -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-expanded="true">

                    Bienvenido {{session('usuario')->nombre}}
                </a>
                <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('cerrar.sesion')}}">Cerrar Sesion</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    @yield('titulo-pagina')
    <div class="row py-3">
        <div class="col-3" id="sticky-sidebar">
            <div class="sticky-top border text-justify">
                <a href="{{route('admin.registrousuario')}}">Registrar Usuario</a><br>
                <a href="{{route('admin.gerencia')}}">Registrar Gerencia</a>
            @yield('contenido1')
            </div>
        </div>
        <div class="col order-2 border text-justify" id="main">
            @yield('contenido2')
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<script src="/js/jquery.min.js"></script>
@yield('js')

</body>
</html>
