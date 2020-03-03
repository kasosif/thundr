@extends('layout')
@section('csspage') @endsection
@section('title') NOS REALISATIONS, Travaux internes @endsection
@section('realisations_active') style= "color: #ebd13d" @endsection
@section('internalworkspage_active') style= "background: #ebd13d" @endsection
@section('is_slide') section_title-02 @endsection
@section('section_title')
    <!-- Info section Title-->
    <div class="container tobottom">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>NOR REALISATIONS</h1>
                <p class="lead">Travaux Internes</p>
            </div>
        </div>
    </div>
    <!-- End Info section Title-->
@endsection
@section('breadcumbs')
    <!-- crumbs-->
    <div class="crumbs border_bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li><a href="{{route('homepage')}}">Accueil</a></li>
                        <li>/</li>
                        <li>Travaux Internes</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End crumbs-->
@endsection
@section('content')
    <!-- Info title-->
    <div class="row info_title wow animated fadeInUp">
        <div class="vertical_line">
            <div class="circle_bottom"></div>
        </div>
        <div class="info_vertical">
            <h2>Our <span>projects</span> speak well of us.</h2>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
        </div>
        <div class="vertical_line"></div>

        <i class="fa fa-html5 right"></i>
        <i class="fa fa-css3 left"></i>
    </div>
    <!-- End Info title-->

    <!-- End content info - Grey Section-->
    <section class="content_info">
        <!-- Info Resalt-->
        <div class="info_resalt borders">
            <div class="container">

                <!-- Nav Filters -->
                <div class="portfolioFilter">
                    <a href="#" data-filter="*" class="current">Show All</a>
                    <a href="#desing" data-filter=".desing">Desing</a>
                    <a href="#development" data-filter=".development">Development</a>
                    <a href="#mobile" data-filter=".mobile">Mobile</a>
                    <a href="#retina" data-filter=".retina">Retina Desing</a>
                </div>
                <!-- End Nav Filters -->

                <!-- Items Works filters-->
                <div class="row portfolioContainer">
                    <!-- Item Work-->
                    <div class="col-sm-6 col-md-6 desing">
                        <div class="item-work">
                            <div class="hover">
                                <img src="img/gallery/1.jpg" alt="Image"/>
                                <a href="img/gallery/1.jpg" class="ligbox-image" title="Image"><div class="overlay"></div></a>
                            </div>
                            <div class="info">
                                <a href="single-work.html">Jekas - Creative Template</a>
                                <i class="fa fa-tablet"></i>
                                <i class="fa fa-desktop"></i>
                            </div>
                        </div>
                    </div>
                    <!-- End Item Work-->

                    <!-- Item Work-->
                    <div class="col-sm-6 col-md-6 development">
                        <div class="item-work">
                            <div class="hover">
                                <img src="img/gallery/2.jpg" alt="Image"/>
                                <a href="img/gallery/2.jpg" class="ligbox-image" title="Image"><div class="overlay"></div></a>
                            </div>
                            <div class="info">
                                <a href="single-work.html">Mycv - One Resume Page</a>
                                <i class="fa fa-tablet"></i>
                                <i class="fa fa-desktop"></i>
                            </div>
                        </div>
                    </div>
                    <!-- End Item Work-->

                    <!-- Item Work-->
                    <div class="col-sm-6 col-md-6 mobile">
                        <div class="item-work">
                            <div class="hover">
                                <img src="img/gallery/3.jpg" alt="Image"/>
                                <a href="img/gallery/3.jpg" class="ligbox-image" title="Image"><div class="overlay"></div></a>
                            </div>
                            <div class="info">
                                <a href="single-work.html">Megahost - Hosting Template</a>
                                <i class="fa fa-tablet"></i>
                                <i class="fa fa-desktop"></i>
                            </div>
                        </div>
                    </div>
                    <!-- End Item Work-->

                    <!-- Item Work-->
                    <div class="col-sm-6 col-md-6 development">
                        <div class="item-work">
                            <div class="hover">
                                <img src="img/gallery/4.jpg" alt="Image"/>
                                <a href="img/gallery/4.jpg" class="ligbox-image" title="Image"><div class="overlay"></div></a>
                            </div>
                            <div class="info">
                                <a href="single-work.html">Studio - Landing Page</a>
                                <i class="fa fa-tablet"></i>
                                <i class="fa fa-desktop"></i>
                            </div>
                        </div>
                    </div>
                    <!-- End Item Work-->

                    <!-- Item Work-->
                    <div class="col-sm-6 col-md-6 retina">
                        <div class="item-work">
                            <div class="hover">
                                <img src="img/gallery/5.jpg" alt="Image"/>
                                <a href="img/gallery/5.jpg" class="ligbox-image" title="Image"><div class="overlay"></div></a>
                            </div>
                            <div class="info">
                                <a href="single-work.html">Ebook - Landing Page</a>
                                <i class="fa fa-tablet"></i>
                                <i class="fa fa-desktop"></i>
                            </div>
                        </div>
                    </div>
                    <!-- End Item Work-->

                    <!-- Item Work-->
                    <div class="col-sm-6 col-md-6 desing">
                        <div class="item-work">
                            <div class="hover">
                                <img src="img/gallery/6.jpg" alt="Image"/>
                                <a href="img/gallery/6.jpg" class="ligbox-image" title="Image"><div class="overlay"></div></a>
                            </div>
                            <div class="info">
                                <a href="single-work.html">Gotten - Landing Page</a>
                                <i class="fa fa-tablet"></i>
                                <i class="fa fa-desktop"></i>
                            </div>
                        </div>
                    </div>
                    <!-- End Item Work-->

                    <!-- Item Work-->
                    <div class="col-sm-6 col-md-6 retina">
                        <div class="item-work">
                            <div class="hover">
                                <img src="img/gallery/7.jpg" alt="Image"/>
                                <a href="img/gallery/7.jpg" class="ligbox-image" title="Image"><div class="overlay"></div></a>
                            </div>
                            <div class="info">
                                <a href="single-work.html">Vinilo - Html Page</a>
                                <i class="fa fa-tablet"></i>
                                <i class="fa fa-desktop"></i>
                            </div>
                        </div>
                    </div>
                    <!-- End Item Work-->

                    <!-- Item Work-->
                    <div class="col-sm-6 col-md-6 development">
                        <div class="item-work">
                            <div class="hover">
                                <img src="img/gallery/8.jpg" alt="Image"/>
                                <a href="img/gallery/8.jpg" class="ligbox-image" title="Image"><div class="overlay"></div></a>
                            </div>
                            <div class="info">
                                <a href="single-work.html">Newhost - Hosting Theme</a>
                                <i class="fa fa-tablet"></i>
                                <i class="fa fa-desktop"></i>
                            </div>
                        </div>
                    </div>
                    <!-- End Item Work-->
                </div>
                <!-- End Items Works filters-->
            </div>
        </div>
        <!-- End Info Resalt-->
    </section>
    <!-- End content info - Grey Section-->
@endsection
@section('jspage') @endsection
