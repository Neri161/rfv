<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://kit.fontawesome.com/7c0f4c4dd5.js" crossorigin="anonymous"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    <script src="js/login.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div id="first">
                <div class="myform form ">
                    <div class="logo mb-3">
                        <div class="col-md-12 text-center">
                            <h1 class="titulo">Registro</h1>
                        </div>
                    </div>
                    <form action="{{route('registro.form')}}" method="post" name="registration">
                        {{csrf_field()}}
                        @if(isset($estatus))
                            @if($estatus == "success")
                                <label class="bg-success text-white col-md-12 text-center">{{$mensaje}}</label>
                            @elseif($estatus == "error")
                                <label class="bg-danger text-white col-md-12 text-center">{{$mensaje}}</label>
                            @endif
                        @endif
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping"><i class="fas fa-user"></i></span>
                                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingresa Nombre"
                                       aria-label="nombre" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="paterno">Apellido Paterno:</label>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping"><i class="fas fa-user"></i></span>
                                <input type="text" name="paterno" id="paterno" class="form-control" placeholder="Ingresa Apellido Paterno"
                                       aria-label="correo" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="paterno">Apellido Materno:</label>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping"><i class="fas fa-user"></i></span>
                                <input type="text" name="materno" id="materno" class="form-control" placeholder="Ingresa Apellido Materno"
                                       aria-label="correo" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo:</label>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping"><i class="fas fa-at"></i></span>
                                <input type="email" name="correo" id="correo" class="form-control" placeholder="Ingresa Correo"
                                       aria-label="correo" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pass1">Contraseña:</label>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping"><i class="fas fa-lock"></i></span>
                                <input type="password" name="pass1" id="pass1" class="form-control"
                                       placeholder="Ingresa Contraseña" aria-label="password" aria-describedby="password">
                                <div class="input-group-append">
                                    <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pass2">Confirma Contraseña:</label>
                            <div class="input-group flex-nowrap" >
                                <span class="input-group-text" id="addon-wrapping"><i class="fas fa-lock"></i></span>
                                <input type="password" name="pass2" id="pass2" class="form-control"
                                       placeholder="Confirma Contraseña" aria-label="password" aria-describedby="password">
                            </div>
                        </div>
                        <div class="col-md-12 text-center mb-3">
                            <button type="submit" id="btnRegistrar" class="btn btn-block mybtn btn-primary tx-tfm">Registrate
                            </button>
                        </div>
                        <div class="col-md-12 ">
                            <div class="form-group">
                                <p class="text-center">Tienes una cuenta?<a href="{{route('login')}}" id="signin"> Inicia Sesion</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="popper/popper.min.js"></script>
<!--    Plugin sweet Alert 2  -->
<script src="plugins/sweetAlert2/sweetalert2.all.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<script src="js/login.js"></script>
<script src="js/verificar.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>
