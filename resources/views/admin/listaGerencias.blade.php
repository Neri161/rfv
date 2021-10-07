@extends('admin.layout.usuario')

@section('titulo')
    <title>Inicio</title>
@endsection

@section('css')

@endsection

@section('contenido')

 
<div class="inside">    
    <div class="row">
        <div class="col-md-3 text-center ">
        </div>
        <div class="col-md-6">
            <div class="input-group mb-3">                        
                <table  class="table">
                    <thead class="thead-dark">
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Gerencia</th>
                          <th scope="col">Creacion</th>
                          <th scope="col">Atualizado</th>
                                          
                        </tr>
                        @foreach($gerencia as $gerencias)
                        <tr>
                            <td>{{$gerencias->id}}</td>
                            <td>{{$gerencias->gerencia}}</td>
                            <td>{{$gerencias->created_at}}</td>
                            <td>{{$gerencias->updated_at}}</td>
                                                      
                        </tr>
                       @endforeach
                        
                      </thead>
                     
                </table>                   
            </div>
        </div>
    </div>          

   
</div>
    

 
@endsection

@section('js')

@endsection
