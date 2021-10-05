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
    <form action="{{route('edit.form')}}" method="post" name="registration">
        {{csrf_field()}}
        @csrf @method('PATCH')
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
                    <div class="header text-justify">
                            <h1 >Cambiar Datos</h1>
                    </div>
                </div>
                <div class="inside">    
                    <div class="row">
                        <div class="col-md-3 text-center ">
                        </div>
                        <div class="col-md-6">
                            <label for="correo" class="mtop16">ID:</label>
                            <div class="input-group mb-3">                        
                                <input type="text" name="id" class="form-control" placeholder="{{session('usuario')->id}}" disabled="true" >                    
                            </div>
                        </div>
                    </div>            
                    <div class="row">   
                        <div class="col-md-3 text-center ">
                        </div>                
                            <div class="col-md-6">
                                <label for="comprobarUsuario" class="mtop16">Usuario:</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                    <input type="text" name="usuario" id="usuario" class="form-control" placeholder="{{session('usuario')->usuario}}" >
                                    
                                </div>
                                <p><img src="LoaderIcon.gif" id="loaderIcon" style="display:none" /></p>
                            </div>
                    </div>                 
                    <div class="row">
                        <div class="col-md-3 text-center ">
                        </div>
                        <div class="col-md-6">
                            <label for="correo" class="mtop16">Correo:</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">@</span>
                                <input type="text" name="correo" class="form-control" placeholder="{{session('usuario')->correo}}">
                               
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 text-center ">
                        </div>
                        <div class="col-md-6 ">
                            <label for="password1" class="mtop16">Contraseña:</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                                <input type="password" name="pass1" class="form-control" placeholder="Ingresa Contraseña">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 text-center ">
                        </div>
                        <div class="col-md-6 ">
                            <label for="password2" class="mtop16">Confirmar Contraseña:</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                                <input type="password" name="pass2" class="form-control" placeholder="Ingresa Contraseña ">
                            </div>
                        </div>
                    </div>
                 
                    <div class="row">
                        <div class="col-md-3 text-center ">
                        </div>
                        <div class="col-md-6 text-center ">
                            <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm"> Cambiar
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
<script>
    $("#usuario").on("keyup",function(){
        var texto =  $("#usuario").val();

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "get",
            url:"{{route('admin.usuario')}}/"+texto,
            dataType: 'json',
            cache: false,
            success: function (data) {
                if(data.estatus == "success"){
                   // alert(data.mensaje);
                    $("#usuario").css("border-color","green")
                    $("#usuario").css("box-shadow","1px 1px 1px 1px green")
                }else{
                   // alert('hola?');
                    $("#usuario").css("border-color","red")
                    $("#usuario").css("box-shadow","1px 1px 1px 1px red")
                }

            }
        });
    });
</script>
@endsection
