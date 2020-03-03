@extends('layout')
@section('csspage') @endsection
@section('title') NOUS @endsection
@section('us_active') style= "color: #ebd13d" @endsection
@section('is_slide') section_title-02 @endsection
@section('section_title')
    <!-- Info section Title-->
    <div class="container tobottom">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>NOUS</h1>
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
                        <li>NOUS</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End crumbs-->
@endsection
@section('content')
    <!-- Info title-->
    <div class="row-fluid info_title">
        <div class="vertical_line">
            <div class="circle_bottom"></div>
        </div>
        <div class="info_vertical">
            <h1>A propos de <span>Nous</span></h1>
        </div>
    </div>
    <!-- End Info title-->

    <!-- End content info - White Section-->
    <section class="content_info">
        <!-- Info Resalt-->
        <div class="paddings">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-md-4">
                        <h4>THUNDR STORY</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi culpa dolorem earum eveniet facilis necessitatibus numquam quisquam repellendus veniam voluptatum! Accusantium ad cupiditate earum incidunt odio quo sunt. Dolorum, sequi.</p>
                    </div>
                    <div class="col-md-4">
                        <h4>WE ARE THUNDR</h4>
                        <p>Notre but est de livrer à nos clients les solutions souhaité dans la plus haute et constante qualité à moindre délai. Pour que toutes les solutions correspondent aux standards de qualité exigés, ils sont réalisés avec passion et rigeur. Pour pouvoir arriver d'une façon flexible aux désirs de nos clients, nous réagissons à court terme aux nouvelles demandes des clients et du marché.</p>
                    </div>
                    <div class="col-md-4">
                        <h4>LA MEHTODE ECLAIR</h4>
                        <p>L'équipe Thundr prône la gestion de projet par méthode agile, qui permet au client un suivi complet et de faire parti intégrante du projet, de A à Z. Les idées de chacun sont ecoutées et le projet est leader. Cela permet egalement d'affiner les besoins par rapport aux fonctionnalités en cours de réalisation et même déjà réalisées et de contrôler l’évolution de votre projet et avec une planification opérationnelle organisée.
                            Tout au long de la réalisation de votre projet, vous êtes le maitre du jeu.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Info Resalt-->
    </section>
    <!-- End content info - White Section-->

    <!-- Info title-->
    <div class="row-fluid info_title">
        <div class="vertical_line">
            <div class="circle_bottom"></div>
        </div>
        <div class="info_vertical">

            <h2>Un <span>FAIT</span> vaut mieux que mille mots</h2>
            <p>"Les grandes choses ne sont pas faites par la force, mais par la persévérance et la volonté "</p>
        </div>
        <div class="vertical_line"></div>

        <i class="fa fa-coffee left"></i>
    </div>
    <!-- End Info title-->

    <!-- End content info - Parallax Section 02 -->
    <section class="content_info">
        <!-- Parallax Background -->
        <div class="bg_parallax image_02_parallax"></div>
        <!-- Parallax Background -->

        <!-- Content Parallax-->
        <section class="opacy_bg_02 paddings">
            <div class="container wow fadeInUp">
                <!-- Resul-->
                <div class="row results results-no-top">
                    <div class="col-md-3">
                        <i class="fa fa-clock-o"></i>
                        <h2>3,712 <span>+</span></h2>
                        <h5>HEURES DE TRAVAIL DEPUIS 2018</h5>
                    </div>
                    <div class="col-md-2">
                        <i class="fa fa-code"></i>
                        <h2>25,792 <span>+</span></h2>
                        <h5>LIGNES DE CODES</h5>
                    </div>
                    <div class="col-md-2">
                        <i class="fa fa-group"></i>
                        <h2>32 <span>+</span></h2>
                        <h5>CLIENTS SERVIS</h5>
                    </div>
                    <div class="col-md-3">
                        <i class="fa fa-briefcase"></i>
                        <h2>40 <span>=</span></h2>
                        <h5>PROJETS COMPLETES</h5>
                    </div>
                    <div class="col-md-2">
                        <i class="fa fa-calendar "></i>
                        <h2>2</h2>
                        <h5>ANNEES D'EXPERIENCE</h5>
                    </div>
                </div>
                <!-- End Resul-->
            </div>
        </section>
        <!-- End Content Parallax-->
    </section>
    <!-- End content info - Parallax Section 02 -->



    <!-- End content info - White Section-->
    <section class="content_info">
        <!-- Info Resalt-->
        <div class="paddings">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-md-6">
                        <h2>LA THUNDR ARMY</h2>
                        <p>Une equipe soudée, compétente et passionnée dans son domaine; elle est la clé de votre réussite pour accomplir vos projets ! Nous essayons d'etre une organisation basée sur les forces de chacun pour vous fournir la meilleur solution. Nos connaissances sont sans limites et vous permez d'avoir un produit final de qualité.</p>
                        <p>Vous pouvez la mettre a rude epreuve, la Thundr Army trouveras toujours une solution..!</p>
                        <p>Compétence et créativité sont les atouts de la Thundr Army !</p>
                    </div>

                    <!-- skills-->
                    <div class="col-md-6">
                        <div class="skills-wrapper wow animated fadeInRight">
                            <h6 class="heading-progress">Web Design <span class="pull-right">97%</span></h6>
                            <div class="progress">
                                <div class="progress-bar" style="width: 97%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="97" role="progressbar">
                                </div>
                            </div>
                            <h6 class="heading-progress">Web Development <span class="pull-right">100%</span></h6>
                            <div class="progress">
                                <div class="progress-bar" style="width: 100%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="100" role="progressbar">
                                </div>
                            </div>
                            <h6 class="heading-progress">Marketing <span class="pull-right">88%</span></h6>
                            <div class="progress">
                                <div class="progress-bar" style="width: 88%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="88" role="progressbar">
                                </div>
                            </div>
                            <h6 class="heading-progress">Front End <span class="pull-right">100%</span></h6>
                            <div class="progress">
                                <div class="progress-bar" style="width: 100%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="100" role="progressbar">
                                </div>
                            </div>
                            <h6 class="heading-progress">Back End <span class="pull-right">98%</span></h6>
                            <div class="progress">
                                <div class="progress-bar" style="width: 98%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="98" role="progressbar">
                                </div>
                            </div>
                        </div>
                        <!--End skills-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Info Resalt-->
    </section>
    <!-- End content info - White Section-->

    <!-- Team Carousel Members-->
    <section class="content_info">
        <!-- Info Resalt-->
        <div class="info_skin_base paddings">
            <div class="container">
                <div class="row">
                    <!-- carousel-team-members-->
                    <div class="col-md-12" id="carousel-team-members">
                        <!-- Item Team-->
                        <div class="item-team">
                            <img src="{{asset('img/team/1.jpg')}}" alt="">
                            <h4>John Deverick
                                <span>CEO</span>
                            </h4>
                            <p>Lorem ipsum dolor amet, consectetue Radipiscing elit et Suspendisse et justo. mattis commodo augue.</p>
                        </div>
                        <!-- End Item Team-->

                        <!-- Item Team-->
                        <div class="item-team">
                            <img src="{{asset('img/team/1.jpg')}}" alt="">
                            <h4>Federick Gordon
                                <span>Manager</span>
                            </h4>
                            <p>Lorem ipsum dolor amet, consectetue Radipiscing elit et Suspendisse et justo. mattis commodo augue.</p>
                        </div>
                        <!-- End Item Team-->

                        <!-- Item Team-->
                        <div class="item-team">
                            <img src="{{asset('img/team/1.jpg')}}" alt="">
                            <h4>Patrick Vorgia
                                <span>Support</span>
                            </h4>
                            <p>Lorem ipsum dolor amet, consectetue Radipiscing elit et Suspendisse et justo. mattis commodo augue.</p>
                        </div>
                        <!-- End Item Team-->

                        <!-- Item Team-->
                        <div class="item-team">
                            <img src="{{asset('img/team/1.jpg')}}" alt="">
                            <h4>Patrick Vorgia
                                <span>Support</span>
                            </h4>
                            <p>Lorem ipsum dolor amet, consectetue Radipiscing elit et Suspendisse et justo. mattis commodo augue.</p>
                        </div>
                        <!-- End Item Team-->

                        <!-- Item Team-->
                        <div class="item-team">
                            <img src="{{asset('img/team/1.jpg')}}" alt="">
                            <h4>Patrick Vorgia
                                <span>Support</span>
                            </h4>
                            <p>Lorem ipsum dolor amet, consectetue Radipiscing elit et Suspendisse et justo. mattis commodo augue.</p>
                        </div>
                        <!-- End Item Team-->
                    </div>
                    <!-- End carousel-team-members-->
                </div>
            </div>
        </div>
        <!-- End Info Resalt-->
    </section>
    <!-- End Team Carousel Members-->

    <!-- End content info - Video Section -->
    <section class="content_info">
        <!-- Content Video-->
        <section class="opacy_bg_01 paddings borders">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Lancez vous maintnenant !</h1>
                    </div>

                    <div class="col-md-12 text-center padding-top-mini">
                        <a class="button" href="{{route('contactpage')}}">Let's Go</a>
                        <a class="btn" href="{{route('servicespage')}}">Plus d'info</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Content Video-->
    </section>
    <!-- End content info - Video Section -->


@endsection
@section('jspage') @endsection
