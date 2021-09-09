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
    <link rel="stylesheet" href="/plugins/sweetAlert2/sweetalert2.min.css">
    <link rel="stylesheet" href="/plugins/animate.css/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div id="first">
                <div class="myform form ">
                    <div class="logo mb-3">
                        <div class="col-md-12 text-center">
                            <h1>Registro</h1>
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
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" class="form-control" id="nombre"
                                   aria-describedby="emailHelp" placeholder="Ingresar Nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="paterno">Apellido Paterno</label>
                            <input type="text" name="paterno" class="form-control" id="paterno"
                                   aria-describedby="emailHelp" placeholder="Ingresar Apellido Paterno" required>
                        </div>
                        <div class="form-group">
                            <label for="materno">Apellido Materno</label>
                            <input type="text" name="materno" class="form-control" id="materno"
                                   aria-describedby="emailHelp" placeholder="Ingresar Apellido Materno" required>
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo</label>
                            <input type="email" name="correo" class="form-control" id="correo"
                                   aria-describedby="emailHelp" placeholder="Ingresar Correo" required>
                        </div>
                        <div class="form-group">
                            <label for="pass1">Contraseña</label>
                            <input type="password" name="pass1" id="pass1" class="form-control"
                                   aria-describedby="emailHelp" placeholder="Ingresar Contraseña" required>
                        </div>
                        <div class="form-group">
                            <label for="pass2">Confirmar Contraseña</label>
                            <input type="password" name="pass2" id="pass2" class="form-control"
                                   aria-describedby="emailHelp" placeholder="Confirmar Contraseña" required>
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
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/verificar.js"></script>

</body>
</html>
