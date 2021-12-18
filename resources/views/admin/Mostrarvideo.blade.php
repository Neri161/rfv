@extends('admin.layout.usuario')

@section('titulo')
    <title>Curso | {{$primero->Titulo}}</title>
@endsection

@section('CSS')

    <link rel="stylesheet" href="/vizew/style.css">

@endsection

@section('contenido')

    <!-- ##### Post Details Area Start ##### -->
    <section class="post-details-area mb-80">
        <div class="container">
            <div ><h1 class="text-dark">{{$primero->Titulo}}</h1></div>
            <div class="row">
                <div class="col-12">
                    <div class="single-video-area">
                        <iframe src="{{$primero->url}}" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div>
                    <article >
                        <h3 class="text-dark text-justify">
                            Descripcion
                        </h3>
                        <h4 class="text-dark text-justify">{{$primero->descripcion}}</h4>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->

@endsection

@section('js')
 <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

@endsection
