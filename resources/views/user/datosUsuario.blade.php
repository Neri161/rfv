@extends('user.layout.usuario')

@section('titulo')
    <title>Inicio</title>
@endsection

@section('css')

@endsection

@section('contenido')
 
<div class="col-md-12 text-center ">
    <img class="img-profile rounded-circle" src="/img/undraw_profile.svg" width="200" >
  

</div>

    <div class="inside">    
        <div class="row">
            <div class="col-md-3 text-center ">      
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <br>

                     <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" disabled="true">
                      
                        ID: {{session('usuario')->id}} 
                        Nombre: {{session('usuario')->nombre}} {{session('usuario')->paterno}} {{session('usuario')->materno}} 
                        Usuario: {{session('usuario')->usuario}} 
                        Correo: {{session('usuario')->correo}}  
                      
                       
                      </textarea>     
                  
                </div>
              <a  href="{{route('usuario.editarusuario')}}" class="btn btn-primary btn-lg btn-block">  Editar perfil  </a>
                  
            </div>
        </div>          
    
       
    </div>
@endsection

@section('js')


@endsection
