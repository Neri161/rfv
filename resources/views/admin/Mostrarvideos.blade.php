@extends('admin.layout.usuario')

@section('titulo')
    <title>Cursos</title>
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

    <!-- ##### Hero Area Start ##### -->
    <section class="hero--area section-padding-80">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="post-1" role="tabpanel" aria-labelledby="post-1-tab">
                            <!-- Single Feature Post -->
                            <div class="single-feature-post video-post bg-img" style="background-image: url(/visew/img/bg-img/7.jpg);">
                                <!-- Play Button -->
                                <a href="video-post.html" class="btn play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>

                                <!-- Post Content -->
                                <div class="post-content" >

                                    <a href="{{route('admin.video')}}" class="post-title">Reunification of migrant toddlers, parents should be completed Thursday</a>

                                </div>

                                <!-- Video Duration -->
                                <span class="video-duration">05.03</span>
                            </div>
                        </div>



                    </div>
                </div>

                <div class="col-12 col-md-5 col-lg-4">
                    <ul class="nav vizew-nav-tab" role="tablist">

                        <li class="nav-item">
                            <a class="nav-link active" id="post-1-tab" data-toggle="pill" href="#post-1" role="tab" aria-controls="post-1" aria-selected="true">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post style-2 d-flex align-items-center">
                                    <div class="post-thumbnail">
                                        <img src="/visew/img/bg-img/3.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <h6 class="post-title">Boys 'doing well' after Thai cave rescue</h6>
                                        <div class="post-meta d-flex justify-content-between">
                                            <span><i class="fa fa-comments-o" aria-hidden="true"></i> 25</span>
                                            <span><i class="fa fa-eye" aria-hidden="true"></i> 11</span>
                                            <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 19</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="post-2-tab" data-toggle="pill" href="#post-2" role="tab" aria-controls="post-2" aria-selected="false">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post style-2 d-flex align-items-center">
                                    <div class="post-thumbnail">
                                        <img src="/visew/img/bg-img/4.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <h6 class="post-title">Meet the 12 boys rescued from cave</h6>
                                        <div class="post-meta d-flex justify-content-between">
                                            <span><i class="fa fa-comments-o" aria-hidden="true"></i> 14</span>
                                            <span><i class="fa fa-eye" aria-hidden="true"></i> 34</span>
                                            <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="post-3-tab" data-toggle="pill" href="#post-3" role="tab" aria-controls="post-3" aria-selected="false">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post style-2 d-flex align-items-center">
                                    <div class="post-thumbnail">
                                        <img src="/visew/img/bg-img/5.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <h6 class="post-title">Pogba dedicates France win to Thai cave boys</h6>
                                        <div class="post-meta d-flex justify-content-between">
                                            <span><i class="fa fa-comments-o" aria-hidden="true"></i> 14</span>
                                            <span><i class="fa fa-eye" aria-hidden="true"></i> 34</span>
                                            <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="post-4-tab" data-toggle="pill" href="#post-4" role="tab" aria-controls="post-4" aria-selected="false">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post style-2 d-flex align-items-center">
                                    <div class="post-thumbnail">
                                        <img src="/visew/img/bg-img/6.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <h6 class="post-title">How the world reacted to PM's Brexit crisis</h6>
                                        <div class="post-meta d-flex justify-content-between">
                                            <span><i class="fa fa-comments-o" aria-hidden="true"></i> 24</span>
                                            <span><i class="fa fa-eye" aria-hidden="true"></i> 98</span>
                                            <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 63</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="post-5-tab" data-toggle="pill" href="#post-5" role="tab" aria-controls="post-5" aria-selected="false">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post style-2 d-flex align-items-center">
                                    <div class="post-thumbnail">
                                        <img src="/visew/img/bg-img/4.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <h6 class="post-title">Meet the 12 boys rescued from cave</h6>
                                        <div class="post-meta d-flex justify-content-between">
                                            <span><i class="fa fa-comments-o" aria-hidden="true"></i> 14</span>
                                            <span><i class="fa fa-eye" aria-hidden="true"></i> 34</span>
                                            <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="post-6-tab" data-toggle="pill" href="#post-6" role="tab" aria-controls="post-6" aria-selected="false">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post style-2 d-flex align-items-center">
                                    <div class="post-thumbnail">
                                        <img src="/visew/img/bg-img/6.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <h6 class="post-title">How the world reacted to PM's Brexit crisis</h6>
                                        <div class="post-meta d-flex justify-content-between">
                                            <span><i class="fa fa-comments-o" aria-hidden="true"></i> 24</span>
                                            <span><i class="fa fa-eye" aria-hidden="true"></i> 98</span>
                                            <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 63</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="post-7-tab" data-toggle="pill" href="#post-7" role="tab" aria-controls="post-7" aria-selected="false">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post style-2 d-flex align-items-center">
                                    <div class="post-thumbnail">
                                        <img src="/visew/img/bg-img/4.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <h6 class="post-title">Meet the 12 boys rescued from cave</h6>
                                        <div class="post-meta d-flex justify-content-between">
                                            <span><i class="fa fa-comments-o" aria-hidden="true"></i> 14</span>
                                            <span><i class="fa fa-eye" aria-hidden="true"></i> 34</span>
                                            <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Trending Posts Area Start ##### -->
    <section class="trending-posts-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h4>Trending Videos</h4>
                        <div class="line"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Blog Post -->
                <div class="col-12 col-md-4">
                    <div class="single-post-area mb-80">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="/visew/img/bg-img/11.jpg" alt="">

                            <!-- Video Duration -->
                            <span class="video-duration">05.03</span>
                        </div>

                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="post-cata cata-sm cata-success">Sports</a>
                            <a href="{{route('admin.video')}}" class="post-title">Warner Bros. Developing ‘The accountant’ Sequel</a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 22</a>
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 16</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 15</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="col-12 col-md-4">
                    <div class="single-post-area mb-80">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="/visew/img/bg-img/12.jpg" alt="">

                            <!-- Video Duration -->
                            <span class="video-duration">05.03</span>
                        </div>

                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="post-cata cata-sm cata-danger">Game</a>
                            <a href="{{route('admin.video')}}" class="post-title">Searching for the 'angel' who held me on Westminste Bridge</a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 28</a>
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 17</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="col-12 col-md-4">
                    <div class="single-post-area mb-80">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="/visew/img/bg-img/13.jpg" alt="">

                            <!-- Video Duration -->
                            <span class="video-duration">05.03</span>
                        </div>

                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="post-cata cata-sm cata-primary">Business</a>
                            <a href="{{route('admin.video')}}" class="post-title">Love Island star's boyfriend found dead after her funeral</a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 38</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ##### Trending Posts Area End ##### -->

    <!-- ##### Vizew Post Area Start ##### -->
    <section class="vizew-post-area mb-50">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-5 col-lg-4">
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
    <!-- ##### Vizew Psot Area End ##### -->


    </footer>


@endsection

@section('js')
 <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="/visew/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="/visew/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/visew/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="/visew/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="/visew/js/active.js"></script>


@endsection
