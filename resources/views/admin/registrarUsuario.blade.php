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
    <form>
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
                                <input type="text" class="form-control" placeholder="Ingresa Nombre">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="paterno">Apellido Paterno:</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                <input type="text" class="form-control" placeholder="Ingresa Apellido Paterno">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="materno" class="mtop16">Apellido Materno:</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                <input type="text" class="form-control" placeholder="Ingresa Apellido Materno">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="correo" class="mtop16">Correo:</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">@</span>
                                <input type="text" class="form-control" placeholder="Ingresa Correo">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ">
                            <label for="password1" class="mtop16">Contraseña:</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                                <input type="text" class="form-control" placeholder="Ingresa Contraseña">
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <label for="password2" class="mtop16">Confirmar Contraseña:</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                                <input type="text" class="form-control" placeholder="Ingresa Contraseña ">
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
    </form>
@endsection

@section('js')

@endsection
