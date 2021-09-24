@extends('admin.layout.usuario')

@section('titulo')
    <title>Inicio</title>
@endsection

@section('css')

@endsection

@section('titulo-pagina')

@endsection

@section('contenido1')

@endsection

@section('contenido2')
    <link rel="stylesheet" href="css/login.css">


    <!--  Formulario registrar usuario -->
    <form action="{{route('registro.form')}}" method="post" name="registration">
        {{csrf_field()}}
        @if(isset($estatus))
            @if($estatus == "success")
                <label class="bg-success text-white col-md-12 text-center">{{$mensaje}}</label>
            @elseif($estatus == "error")
                <label class="bg-danger text-white col-md-12 text-center">{{$mensaje}}</label>
            @endif
        @endif
        <div class="container-fluid" id="sticky-sidebar">
            <div class="panel shadow">
                <div class="col-md-9">

                    <div class="header">

                            <h1 >Agregar Usuario</h1>
                    </div>
                </div>
                <div class="inside">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="nombre">Nombre:</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                <input type="text" name="nombre"  class="form-control" placeholder="Ingresa Nombre">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="paterno">Apellido Paterno:</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                <input type="text" name="paterno" class="form-control" placeholder="Ingresa Apellido Paterno">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="materno" class="mtop16">Apellido Materno:</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                <input type="text" name="materno" class="form-control" placeholder="Ingresa Apellido Materno">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="correo" class="mtop16">Correo:</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">@</span>
                                <input type="text" name="correo" class="form-control" placeholder="Ingresa Correo">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">          
                        <label for="rol" class="mtop16">Rol:</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                            <input type="text" name="rol" class="form-control" placeholder="Ingresa rol">
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ">
                            <label for="password1" class="mtop16">Contraseña:</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                                <input type="text" name="pass1" class="form-control" placeholder="Ingresa Contraseña">
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <label for="password2" class="mtop16">Confirmar Contraseña:</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                                <input type="text" name="pass2" class="form-control" placeholder="Ingresa Contraseña ">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 text-center ">
                        </div>
                        <div class="col-md-3 text-center ">
                            <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm"> Registrar
                            </button>
                        </div>
                        <div class="col-md-3 text-center ">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 ">
                            <label for="password2" class="mtop16"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 ">
            <div class="form-group">
                <p class="text-center">Tienes una cuenta?<a href="{{route('login')}}" id="signin"> Inicia Sesion</a></p>
            </div>
        </div>
    </form>
@endsection

@section('js')

@endsection
