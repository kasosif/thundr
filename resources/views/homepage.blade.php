@extends('layout')
@section('csspage')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('title') Feel the lightning @endsection
@section('homepage_active') style= "color: #ebd13d" @endsection
@section('is_slide') slide @endsection
@section('slidesection')
    <!-- Slide Section-->
    <div class="tp-banner-container">
        <div class="tp-banner" >
            <ul>
                <!-- SLIDE  01-->
                <li data-transition="slidehorizontal" data-slotamount="7" data-masterspeed="1000"  data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7">

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-fade fadeout fullscreenvideo"
                         data-x="0"
                         data-y="0"
                         data-speed="1000"
                         data-start="1100"
                         data-easing="Power4.easeOut"
                         data-endspeed="1500"
                         data-endeasing="Power4.easeIn"
                         data-autoplay="true"
                         data-autoplayonlyfirsttime="false"
                         data-nextslideatend="true"
                         data-forceCover="1"
                         data-dottedoverlay="twoxtwo"
                         data-aspectratio="16:9"
                         data-forcerewind="on"
                         style="z-index: 2">

                        <video class="video-js vjs-default-skin" preload="none" width="100%" height="100%"
                               poster='img/slide/slides/video-bg.png' data-setup="{}">
                            <source src='img/video/video-slide.webm' type='video/webm' />
                        </video>
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption medium_light_white tp-fade fadeout tp-resizeme"
                         data-x="30"
                         data-y="120" data-voffset="0"
                         data-speed="500"
                         data-start="1000"
                         data-easing="Power4.easeOut"
                         data-splitin="chars"
                         data-splitout="chars"
                         data-elementdelay="0.05"
                         data-endelementdelay="0.05"
                         data-endspeed="300"
                         style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">Développement par amour
                    </div>
                    <!-- LAYER NR. 2 -->

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption large_bold_white tp-fade fadeout tp-resizeme"
                         data-x="30"
                         data-y="195" data-voffset="120"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="1800"
                         data-easing="Power3.easeInOut"
                         data-splitin="words"
                         data-splitout="words"
                         data-elementdelay="0.12"
                         data-endelementdelay="0.12"
                         data-endspeed="300"
                         style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;text-transform: uppercase;">Passion et Ambition
                    </div>
                    <!-- LAYER NR. 3 -->
                </li>
                <!-- END SLIDE  01-->

                <!-- SLIDE  02-->
                <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000" >
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('img/bg-home/3.jpg')}}"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption large_bold_white large_text lft tp-resizeme"
                         data-x="right"
                         data-y="120" data-voffset="0"
                         data-speed="500"
                         data-start="1000"
                         data-easing="Power4.easeOut"
                         data-splitin="chars"
                         data-splitout="chars"
                         data-elementdelay="0.05"
                         data-endelementdelay="0.05"
                         data-endspeed="300"
                         style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">INNOVATION & REUSSITE
                    </div>
                    <!-- LAYER NR. 1 -->

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption medium_light_white large_text lft tp-resizeme"
                         data-x="right"
                         data-y="195" data-voffset="120"
                         data-speed="500"
                         data-start="1800"
                         data-easing="Power3.easeInOut"
                         data-splitin="words"
                         data-splitout="words"
                         data-elementdelay="0.12"
                         data-endelementdelay="0.12"
                         data-endspeed="300"
                         style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">"L'innovation distingue le leader du suiveur"
                    </div>
                    <!-- LAYER NR. 2 -->

                </li>
                <!-- END SLIDE  02-->

                <!-- SLIDE  03-->
                <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000"  data-saveperformance="off" >
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('img/bg-home/1.jpg')}}"  alt="power-to-creators-slider" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption large_text"
                         data-x="center" data-hoffset="0"
                         data-y="center" data-voffset="-100"
                         data-speed="500"
                         data-start="500"
                         data-easing="Power2.easeIn"
                         data-splitin="lines"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"> Une équipe <span style="text-transform: uppercase;font-weight: bold;color: #ebd13d !important;">RAPIDE</span> et <span style="text-transform: uppercase;font-weight: bold;color: #ebd13d !important;" >EFFICACE</span>
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption small_text lft tp-resizeme"
                         data-x="center" data-hoffset="0"
                         data-y="center" data-voffset="-30"
                         data-speed="300"
                         data-start="1100"
                         data-easing="Power2.easeIn"
                         data-splitin="lines"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         style="z-index: 3; font-size:16px; max-width: auto; max-height: auto; white-space: normal;">
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption style-caption lfb tp-resizeme"
                         data-x="center"
                         data-y="center" data-voffset="30"
                         data-speed="300"
                         data-start="1600"
                         data-easing="Power3.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300">
                        <a href="{{route('aboutpage')}}" class="button">
                            En Savoir Plus
                        </a>
                    </div>
                </li>
                <!-- END SLIDE  03-->
            </ul>
        </div>
    </div>
    <!-- End Slide Section-->
@endsection
@section('breadcumbs') @endsection
@section('content')
    <!-- Info title-->
    <div class="row info_title wow fadeInUp">
        <div class="vertical_line">
            <div class="circle_bottom"></div>
        </div>
        <div class="info_vertical animated">
            <h1>Une toute <span>nouvelle façon</span> de travailler</h1>
            <p class="">Une start-up pleine d'ambition, axée sur l'innovation tout en prônant les nouvelles technologies.
                Une équipe soudée et trés autonome, toujours la pour l'écoute de ses clients.</p>
        </div>
        <div class="vertical_line"></div>

        <i class="fa fa-cogs right"></i>
    </div>
    <!-- End Info title-->


    <section class="content_info">
        <!-- Info Resalt-->
        <div class="padding_bottom">
            <div class="container">
                <div class="row">
                    <!-- Image animation-->
                    <div class="col-md-7 padding-top wow fadeInDown ">
                        <h2>Développement Web</h2>
                        <p class="lead">Nous vous accompagnons dans la réalisation de votre projet web, en allant de la conception à la création d’un site internet (vitrine, e-commerce) ou d’une application métier à usage interne ou externe.</p>
                        <p>Notre mission : vous apporter la solution pour optimiser votre productivité ou simplifier le quotidien de vos utilisateurs.</p>
                        <div class="padding-top-mini">
                            <a href="#" class="button">En savoir plus</a>
                        </div>
                    </div>
                    <!-- End Image animation-->
                    <div class="col-md-5 wow fadeInRight">
                        <img src="{{asset('img/laptoptest.png')}}" alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
        <!-- End Info Resalt-->
    </section>

    <section class="content_info">
        <!-- Info Resalt-->
        <div class="padding_bottom">
            <div class="container">
                <div class="row">
                    <!-- Image animation-->
                    <div class="col-md-6 wow fadeInRight">
                        <img src="{{asset('img/mobiletest.png')}}" alt="" class="img-responsive">
                    </div>
                    <!-- End Image animation-->
                    <div class="col-md-6 padding-top text-right wow fadeInDown ">
                        <h2>Développement Mobile</h2>
                        <p class="lead">
                            Envie d’être a la page, numériquement ?
                        </p>
                        <p>
                            Notre équipe se charge de vous accompagner dans le développement de votre application,
                            native ou cross-plateforme (iOS, Android) en vous proposant une solution adaptée a vos besoins.
                        </p>
                        <div class="padding-top-mini">
                            <a href="#" class="button">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Info Resalt-->
    </section>

    <section class="content_info">
        <!-- Info Resalt-->
        <div class="padding_bottom">
            <div class="container">
                <div class="row">

                    <!-- End Image animation-->
                    <div class="col-md-7 padding-top wow fadeInDown">
                        <h2>Design et Graphique</h2>
                        <p class="lead">
                            Nous sommes en mesure de vous proposer une nouvelle image de votre marque ou de renouveler votre image, en concevant des logos, des bannières, et toutes sortes de design nécessaire a l’image d’une entreprise.
                        </p>
                        <div class="padding-top-mini">
                            <a href="#" class="button">En savoir plus</a>
                        </div>
                    </div>

                    <!-- Image animation-->
                    <div class="col-md-5 wow fadeInRight">
                        <img src="{{asset('img/graphicdesign.png')}}" alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
        <!-- End Info Resalt-->
    </section>


    <!-- Info title-->
    <div class="row info_title">
        <div class="vertical_line">
            <div class="circle_bottom"></div>
        </div>
        <div class="info_vertical" id="scale-it">
            <h2>Nos Partenaires</h2>
        </div>
        <div class="vertical_line"></div>
        <i class="fa fa-tablet right"></i>
    </div>
    <!-- End Info title-->

    <!-- End content info - Grey Section-->
    <section class="content_info">
        <!-- Info Resalt-->
        <div class="info_resalt">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Sponsors Zone-->
                        <ul class="owl-carousel carousel-sponsors tooltip-hover carousel-sponsors">
                            <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                                <a href="#"  class="tooltip_hover" title="Dolibarr"><img src="{{asset('img/sponsors/dolibarr.png')}}" alt="Image"></a>
                            </li>
                        </ul>
                        <!-- End Sponsors Zone-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Info Resalt-->
    </section>
    <!-- End content info - Grey Section-->

@endsection
@section('jspage') @endsection

