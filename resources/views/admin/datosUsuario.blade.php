@extends('admin.layout.usuario')

@section('titulo')
    <title>Inicio</title>
@endsection

@section('css')

@endsection

@section('contenido')
    <link rel="stylesheet" href="css/login.css">


    <div class="inside">    
        <div class="row">
            <div class="col-md-3 text-center ">
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">TUS DATOS</label>

                     <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" disabled="true">
                      
                        ID: {{session('usuario')->id}} 
                        Nombre(s): {{session('usuario')->nombre}} 
                        Apellido paterno: {{session('usuario')->paterno}} 
                        Apellido materno: {{session('usuario')->materno}} 
                        Usuario: {{session('usuario')->usuario}} 
                        Correo: {{session('usuario')->correo}} 
                        
                        
                      </textarea>
                     
                   
                    
                  
                </div>
            </div>
        </div>          
    
       
    </div>
@endsection

@section('js')


@endsection
