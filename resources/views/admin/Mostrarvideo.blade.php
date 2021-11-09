@extends('admin.layout.usuario')

@section('titulo')
    <title>Curso | </title>
@endsection

@section('CSS')

<link href="/visew/css/animate.css" rel="stylesheet" type="text/css">
<link href="/visew/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="/visew/css/classy-nav.css" rel="stylesheet" type="text/css">
<link href="/visew/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="/visew/css/magnific-popup.css" rel="stylesheet" type="text/css">
<link href="/visew/css/nice-select.css" rel="stylesheet" type="text/css">
<link href="/visew/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
<link href="/visew/css/themify-icons.css" rel="stylesheet" type="text/css">

@endsection

@section('contenido')
    <!-- ##### Pager Area Start ##### -->
    <div class="vizew-pager-area">

        <div class="vizew-pager-next">
            <p>NEXT ARTICLE</p>

            <!-- Single Feature Post -->
            <div class="single-feature-post video-post bg-img pager-article" style="background-image: url(img/bg-img/14.jpg);">
                <!-- Post Content -->
                <div class="post-content">
                    <a href="#" class="post-cata cata-sm cata-business">Business</a>
                    <a href="single-post.html" class="post-title">Reunification of migrant toddlers, parents should be completed Thursday</a>
                    <div class="post-meta d-flex">
                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
                    </div>
                </div>
                <!-- Video Duration -->
                <span class="video-duration">06.59</span>
            </div>
        </div>
    </div>
    <!-- ##### Pager Area End ##### -->

    <!-- ##### Post Details Area Start ##### -->
    <section class="post-details-area mb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="single-video-area">
                        <iframe src="https://www.youtube.com/embed/1nI-GMmHMHs" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Post Details Content Area -->
                <div class="col-12 col-lg-8">
                    <div class="post-details-content d-flex">
                        <!-- Post Share Info -->
                        <div class="post-share-info">
                            <p>Share</p>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="thumb-tack"><i class="fa fa-thumb-tack"></i></a>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">

                            <!-- Post Content -->
                            <div class="post-content mt-0">
                                <a href="#" class="post-cata cata-sm cata-danger">Game</a>
                                <a href="single-post.html" class="post-title mb-2">Reunification of migrant toddlers, parents should be completed Thursday</a>

                                <div class="d-flex justify-content-between mb-30">
                                    <div class="post-meta d-flex align-items-center">
                                        <a href="#" class="post-author">By Jane</a>
                                        <i class="fa fa-circle" aria-hidden="true"></i>
                                        <a href="#" class="post-date">Sep 08, 2018</a>
                                    </div>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 32</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 42</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 7</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="sidebar-area">

                        <!-- ***** Single Widget ***** -->
                        <div class="single-widget followers-widget mb-50">
                            <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span class="counter">198</span><span>Fan</span></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span class="counter">220</span><span>Followers</span></a>
                            <a href="#" class="google"><i class="fa fa-google" aria-hidden="true"></i><span class="counter">140</span><span>Subscribe</span></a>
                        </div>

                    </div>
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
