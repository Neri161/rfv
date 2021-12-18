@extends('admin.layout.usuario')

@section('titulo')
    <title>Cursos</title>
@endsection

@section('CSS')
    <!-- Stylesheet -->
    <link rel="stylesheet" href="/vizew/style.css">
@endsection

@section('contenido')
    <div class="row no-gutters">
        <div class="col-12 col-md-7 col-lg-8">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="post-1" role="tabpanel" aria-labelledby="post-1-tab">
                    <!-- Single Feature Post -->
                    <div class="single-feature-post video-post bg-img" style="background-image: url({{$primero->miniatura}});">
                        <!-- Play Button -->
                        <a href="{{route('admin.video')}}" class="btn play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>

                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="post-cata">{{$primero->gerencia_id}}</a>
                            <a href="single-post.html" class="post-title">{{$primero->Titulo}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-5 col-lg-4">
            @foreach($cursos as $valor)
            <ul class="nav vizew-nav-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="post-1-tab" data-toggle="pill" href="#post-1" role="tab" aria-controls="post-1" aria-selected="true">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style-2 d-flex align-items-center">
                            <div class="post-thumbnail">
                                <img src="{{$valor->miniatura}}" alt="">
                            </div>
                            <div class="post-content">
                                <h6 class="post-title">{{$valor->descripcion}}</h6>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
            @endforeach
        </div>
    </div>
@endsection

@section('js')
 <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="/vizew/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="/vizew/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/vizew/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="/vizew/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="/vizew/js/active.js"></script>


@endsection
