@extends('admin.layout.usuario')

@section('titulo')
    <title>Registrar Gerencias</title>
@endsection

@section('css')

@endsection

@section('contenido')
    <link rel="stylesheet" href="css/login.css">


    <!--  Formulario registrar usuario -->
    <form action="{{route('gerencia.form')}}" method="post" name="registration">
        {{csrf_field()}}
        @if(isset($estatus))
            @if($estatus == "success")
                <label class="bg-success text-white col-md-12 text-center">{{$mensaje}}</label>
            @elseif($estatus == "error")
                <label class="bg-danger text-white col-md-12 text-center">{{$mensaje}}</label>
            @endif
        @endif
        <div class="container-fluid" id="sticky-sidebar">
            <div class="col-md-9">
                <div class="header text-justify">
                    <h1>Agregar Curso</h1>
                </div>
            </div>
            <div class="inside">
                <div class="row">
                    <div class="col-md-12">
                        <label for="titulo" class="mtop16">Titulo:</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-tasks"></i></span>
                            <input type="text" name="titulo" class="form-control" placeholder="Ingresa nombre de  Gerencia">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="url" class="mtop16">Url:</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-tasks"></i></span>
                            <input type="text" name="url" class="form-control" placeholder="Ingresa nombre de  Gerencia">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="descripcion" class="mtop16">Descripcion:</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-tasks"></i></span>
                            <input type="text" name="descripcion" class="form-control" placeholder="Ingresa nombre de  Gerencia">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="miniatura" class="mtop16">Miniatura:</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-tasks"></i></span>
                            <input type="text" name="miniatura" class="form-control" placeholder="Ingresa nombre de  Gerencia">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="nombre">Gerencia:</label>
                        <select class="browser-default custom-select" name="gerencia" id="gerencia">
                            <option selected="">Selecciona El Area De Gerencia</option>
                            @foreach($gerencia as $gerencias)
                                <option value="{{$gerencias->id}}">{{$gerencias->gerencia}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center ">
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
    </form>
@endsection

@section('js')

@endsection
