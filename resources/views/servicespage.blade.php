@extends('layout')
@section('csspage')@endsection
@section('title') NOS SERVICES @endsection
@section('services_active') style= "color: #ebd13d" @endsection
@section('is_slide') section_title-02 @endsection
@section('section_title')
    <!-- Info section Title-->
    <div class="container tobottom">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>NOS SERVICES</h1>
                <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</p>
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
                        <li>NOS SERVICES</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End crumbs-->
@endsection
@section('content')
    <!-- Info title-->
    <div class="row info_title wow fadeInUp paddings">
        <div class="vertical_line">
            <div class="circle_bottom"></div>
        </div>
        <div class="info_vertical">
            <h1>Nous <span> Sommes</span> La</h1>
            <p class="lead">Nous faire confiance c'est vous assurer la qualité </p>
        </div>
    </div>
    <!-- End Info title-->

    <!-- End content info - White Section-->
    <section class="content_info">
        <!-- Info Resalt-->
        <div class="info_dark paddings">
            <div class="container wow fadeInUp">
                <div class="row">
                    <h2>DEVELOPPEMENT WEB</h2>
                </div>
                <div class="row">
                    <!-- Item Service-02-->
                    <div class="col-sm-6 col-md-4">
                        <div class="service-02">
                            <div class="head-service-02">
                                <i class="fa fa-trophy"></i>
                                <h3>
                                    Site vitrine
                                    <span>Thundr Dev</span>
                                </h3>
                            </div>
                            <div class="caption-service-02">
                                <p>Le site vitirne va permmetre d'ameliorer l'image de votre entreprise. Il est fiable, pas cher et efficace.
                                    Une bonne facon de présenter votre entreprise, votre activité et de mettre en évidence vos différents atouts.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Item Service-02-->

                    <!-- Item Service-02-->
                    <div class="col-sm-6 col-md-4">
                        <div class="service-02">
                            <div class="head-service-02">
                                <i class="fa fa-line-chart"></i>
                                <h3>
                                    Site intranet/Extranet
                                    <span>Thundr Dev</span>
                                </h3>
                            </div>
                            <div class="caption-service-02">
                                <p>Nous sommes en mesure de proposer des solutions web destinées a la gestion de votre entreprise, ce qui permettra vous permettra d'etre autonome dans la gestion numerique de votre entreprise.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Item Service-02-->

                    <!-- Item Service-02-->
                    <div class="col-sm-6 col-md-4">
                        <div class="service-02">
                            <div class="head-service-02">
                                <i class="fa fa-html5"></i>
                                <h3>
                                    Site perso
                                    <span>Thundr Dev</span>
                                </h3>
                            </div>
                            <div class="caption-service-02">
                                <p>Nous pouvons etudié et analysé vos besoins pour vous fournir une solution par rpport a vos critères et vous fournir une solution sur mesure.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Item Service-02-->
                </div>
                <div class="row" style="margin-top: 4px">
                    <!-- Item Service-02-->
                    <div class="col-sm-6 col-md-4">
                        <div class="service-02">
                            <div class="head-service-02">
                                <i class="fa fa-html5"></i>
                                <h3>
                                    Site E-commerce
                                    <span>Thundr Dev</span>
                                </h3>
                            </div>
                            <div class="caption-service-02">
                                <p>Vous voulez ouvrir votre propre boutique en ligne ? Nous nous chargeons de vous fournir une solution de site e-commerce pour pouvoir aqucerir de nouveaux clients et booster vos ventes. Vous pouver choisir entre avoir une solution avec vos critères et besoin ou bien opté pour un CMS tel que WordPress, PrestaShop ou bien encore Shopify. Avec THUNDR, tou est possible !</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Item Service-02-->

                    <!-- Item Service-02-->
                    <div class="col-sm-6 col-md-4">
                        <div class="service-02">
                            <div class="head-service-02">
                                <i class="fa fa-html5"></i>
                                <h3>
                                    Responsive design
                                    <span>Thundr Dev</span>
                                </h3>
                            </div>
                            <div class="caption-service-02">
                                <p>Nos sites sont adaptés sur ordinateur, comme sur smartphone et tablette !</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Item Service-02-->

                    <!-- Item Service-02-->
                    <div class="col-sm-6 col-md-4">
                        <div class="service-02">
                            <div class="head-service-02">
                                <i class="fa fa-html5"></i>
                                <h3>
                                    Pour Résumer, Vous Satisfaire !
                                    <span>Thundr Dev</span>
                                </h3>
                            </div>
                            <div class="caption-service-02">
                                <p>Nous vous offrons la solution la plus complète et ergonomique du marché pour la création de votre site et mettons en oeuvre pour que celui soit codé avec les technologies les plus recentes.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Item Service-02-->
                </div>
            </div>
        </div>
        <!-- End Info Resalt-->
    </section>
    <!-- End content info - White Section-->

    <!-- End content info - Grey Section-->
    <section class="content_info">
        <!-- Info Resalt-->
        <div class="info_resalt">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Sponsors Zone-->
                        <ul class="owl-carousel carousel-sponsors tooltip-hover carousel-sponsors" >
                            <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                                <a href="#"  class="tooltip_hover" title="Name Sponsor"><img  src="{{asset('img/sponsors/php.png')}}" alt="Image"></a>
                            </li>
                            <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                                <a href="#"  class="tooltip_hover" title="Name Sponsor"><img  src="{{asset('img/sponsors/html.png')}}" alt="Image"></a>
                            </li>
                            <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                                <a href="#"  class="tooltip_hover" title="Name Sponsor"><img  src="{{asset('img/sponsors/js.png')}}" alt="Image"></a>
                            </li>
                            <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                                <a href="#"  class="tooltip_hover" title="Name Sponsor"><img  src="{{asset('img/sponsors/css.png')}}" alt="Image"></a>
                            </li>
                            <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                                <a href="#"  class="tooltip_hover" title="Name Sponsor"><img  src="{{asset('img/sponsors/jquery.png')}}" alt="Image"></a>
                            </li>
                            <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                                <a href="#"  class="tooltip_hover" title="Name Sponsor"><img  src="{{asset('img/sponsors/mysql.png')}}" alt="Image"></a>
                            </li>
                            <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                                <a href="#"  class="tooltip_hover" title="Name Sponsor"><img  src="{{asset('img/sponsors/ajax.png')}}" alt="Image"></a>
                            </li>
                            <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                                <a href="#"  class="tooltip_hover" title="Name Sponsor"><img  src="{{asset('img/sponsors/angular.png')}}" alt="Image"></a>
                            </li>
                            <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                                <a href="#"  class="tooltip_hover" title="Name Sponsor"><img  src="{{asset('img/sponsors/wordpress.png')}}" alt="Image"></a>
                            </li>
                            <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                                <a href="#"  class="tooltip_hover" title="Name Sponsor"><img  src="{{asset('img/sponsors/prestashop.png')}}" alt="Image"></a>
                            </li>
                            <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                                <a href="#"  class="tooltip_hover" title="Name Sponsor"><img  src="{{asset('img/sponsors/shopify.png')}}" alt="Image"></a>
                            </li>
                            <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                                <a href="#"  class="tooltip_hover" title="Name Sponsor"><img  src="{{asset('img/sponsors/drupal.png')}}" alt="Image"></a>
                            </li>
                            <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                                <a href="#"  class="tooltip_hover" title="Name Sponsor"><img  src="{{asset('img/sponsors/jee.png')}}" alt="Image"></a>
                            </li>
                            <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                                <a href="#"  class="tooltip_hover" title="Name Sponsor"><img  src="{{asset('img/sponsors/dotnet.png')}}" alt="Image"></a>
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


    <section class="content_info">
        <!-- Info Resalt-->
        <div class="info_resalt no-bottom borders">
            <div class="container">
                <div class="row">
                    <!-- Simple Title-->
                    <div class="col-md-12">
                        <div class="simple-title wow fadeInUp">
                            <h2>VOTRE <span>APPLICATION</span>, NOTRE PASSION</h2>
                        </div>
                    </div>
                    <!-- End Simple Title-->
                </div>

                <!-- hot-features-->
                <div class="row hot-features padding-top">
                    <div class="col-sm-6 col-md-4 wow fadeInLeft">
                        <!-- Item Service 02-->
                        <div class="service-02">
                            <div class="head-service-02">
                                <i class="fa fa-trophy"></i>
                                <h3>
                                    Vous etes le chef !
                                    <span>sed do eiusmod tempor</span>
                                </h3>
                            </div>
                            <div class="caption-service-02">
                                <p>Des la conception du produit, nous vous impliquons dans votre projet pour vous fournir la solution la plus adaptés a vos attentes. Nous réalisons donc la solution sur mesure, en rapport avec vos différents critères imposés.</p>
                            </div>
                        </div>
                        <!-- Item Service 02-->

                        <!-- Item Service 02-->
                        <div class="service-02">
                            <div class="head-service-02">
                                <i class="fa fa-trophy"></i>
                                <h3>
                                    Le développement, coeur du projet
                                    <span>sed do eiusmod tempor</span>
                                </h3>
                            </div>
                            <div class="caption-service-02">
                                <p>Nous developpons les applications mobiles sur IOS et Android, avec les meilleures technologies pour vous fournir une application de qualité pouvant concurrencer celle disponible sur le marché. </p>
                            </div>
                        </div>
                        <!-- Item Service 02-->
                    </div>

                    <div class="col-sm-6 col-md-4 wow fadeInUp">
                        <img class="img-responsive" src="{{asset('img/5.png')}}" alt="">
                    </div>

                    <div class="col-sm-6 col-md-4 padding-top wow fadeInRight">
                        <!-- Item Service 02-->
                        <div class="service-02">
                            <div class="head-service-02">
                                <i class="fa fa-trophy"></i>
                                <h3>
                                    Design et Ergonomie
                                    <span>sed do eiusmod tempor</span>
                                </h3>
                            </div>
                            <div class="caption-service-02">
                                <p>La qualité de developpement de l'application est importante, mais la force d'impacte du design et de l'ergonomie priment. Ils détermineront les premières impressions de vos utilisateurs. Nous nous focalisons, donc, enoremement sur l'UI (Interface Utilisateur) et UX (Expérience Utilisateur) pour vous fournir une interface graphique originale et créative.</p>
                            </div>
                        </div>
                        <!-- Item Service 02-->
                    </div>
                </div>
                <!-- End hot-features-->
            </div>
        </div>
        <!-- End Info Resalt-->
    </section>

    <!-- End content info - Grey Section-->
    <section class="content_info">
        <!-- Info Resalt-->
        <div class="info_resalt">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Sponsors Zone-->
                        <ul class="owl-carousel carousel-sponsors tooltip-hover carousel-sponsors" >
                            <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                                <a href="#"  class="tooltip_hover" title="Name Sponsor"><img src="{{asset('img/sponsors/swift.png')}}" alt="Image"></a>
                            </li>
                            <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                                <a href="#"  class="tooltip_hover" title="Name Sponsor"><img src="{{asset('img/sponsors/react.png')}}" alt="Image"></a>
                            </li>
                            <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                                <a href="#"  class="tooltip_hover" title="Name Sponsor"><img src="{{asset('img/sponsors/androidstudio.png')}}" alt="Image"></a>
                            </li>
                            <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                                <a href="#"  class="tooltip_hover" title="Name Sponsor"><img src="{{asset('img/sponsors/examarin.png')}}" alt="Image"></a>
                            </li>
                            <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                                <a href="#"  class="tooltip_hover" title="Name Sponsor"><img src="{{asset('img/sponsors/ionic.png')}}" alt="Image"></a>
                            </li>
                            <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                                <a href="#"  class="tooltip_hover" title="Name Sponsor"><img src="{{asset('img/sponsors/firebase.png')}}" alt="Image"></a>
                            </li>
                            <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                                <a href="#"  class="tooltip_hover" title="Name Sponsor"><img src="{{asset('img/sponsors/ios.png')}}" alt="Image"></a>
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

    <!-- End content info - White Section-->
    <section class="content_info">
        <!-- Info Resalt-->
        <div class="paddings">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 wow fadeInRight animated">
                        <!-- Item Service-02-->
                        <div class="col-sm-6 col-md-12">
                            <div class="service-02">
                                <div class="head-service-02">
                                    <i class="fa fa-gear"></i>
                                    <h3>
                                        MARKETING DIGITAL
                                        <span>WebMarketing et plus encore !</span>
                                    </h3>
                                </div>
                                <div class="caption-service-02">
                                    <p>Parce que votre image c'est notre soucis, nous vous proposons, un suivi complet de votre communication et de vos référencement.</p>
                                    <p>- Referencement naturel SEO (audit et suivi)</p>
                                    <p>- Referencement payant SEM et SEA</p>
                                    <p> - Communication par réseau sociaux (Facebook, Twitter, Instagram,...)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Item Service-02-->
                    </div>
                    <div class="col-md-6 wow fadeInLeft animated">
                        <!-- Slide -->
                        <ul class="carousel-single" id="carousel-single">
                            <li><img src="img/gallery/1.jpg" alt="" class="img-responsive"></li>
                            <li><img src="img/gallery/2.jpg" alt="" class="img-responsive"></li>
                            <li><img src="img/gallery/4.jpg" alt="" class="img-responsive"></li>
                        </ul>
                        <!-- End Slide -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Info Resalt-->
    </section>
    <!-- End content info - White Section-->

@endsection
@section('jspage') @endsection
