@extends('admin.layout.usuario')

@section('titulo')
    <title>Lista Usuarios</title>
@endsection
    @section('CSS')
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/dtjs/bootstrap/css/bootstrap.min.css">
        <!--datables CSS básico-->
        <link rel="stylesheet" type="text/css" href="/dtjs/datatables/datatables.min.css"/>
        <!--datables estilo bootstrap 4 CSS-->
        <link rel="stylesheet"  type="text/css" href="/dtjs/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
    @endsection
@section('contenido')
   <div class="row">
       <div class="col-lg-12">
           <div class="table-responsive">
               <table id="example" class="table table-striped table-bordered" style="width:100%">
                   <thead>
                   <tr>
                       <th>Nombre</th>
                       <th>Apellido Paterno</th>
                       <th>Apellido Materno</th>
                       <th>Usuario</th>
                       <th>Correo</th>
                       <th>Rol</th>
                       <th>Gerencia</th>
                   </tr>
                   </thead>
                   <tbody>
                   @foreach($usuario as $usuarios)
                       <tr>
                           <td>{{$usuarios->nombre}}</td>
                           <td>{{$usuarios->paterno}}</td>
                           <td>{{$usuarios->materno}}</td>
                           <td>{{$usuarios->usuario}}</td>
                           <td>{{$usuarios->correo}}</td>
                           <td>{{$usuarios->rol_id}}</td>
                           <td>{{$usuarios->gerencia_id}}</td>
                       </tr>
                   @endforeach
                   </tbody>
               </table>
           </div>
       </div>
   </div>
@endsection

@section('js')


    <!-- datatables JS -->
    <script type="text/javascript" src="/dtjs/datatables/datatables.min.js"></script>

    <script type="text/javascript" src="/dtjs/main.js"></script>
@endsection
