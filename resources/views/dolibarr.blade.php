@extends('layout')
@section('csspage')@endsection
@section('title') Dolibarr @endsection
@section('dolibarr_active') style= "color: #ebd13d" @endsection
@section('internalworkspage_active') style= "background: #ebd13d" @endsection
@section('is_slide') section_title-02 @endsection
@section('section_title')
    <!-- Info section Title-->
    <div class="container tobottom">
        <div class="row">
            <div class="col-md-12 text-center">
                <img class="dolicloud_picture" src="{{asset('img/gallery/dolicloud_logo_white.png')}}" alt="">
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
                        <li>Dolibarr</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End crumbs-->
@endsection
@section('content')
    <!-- Info title-->
    <div class="row info_title wow fadeInUp">
        <div class="vertical_line">
            <div class="circle_bottom"></div>
        </div>
        <div class="info_vertical">
            <h1>Dolibarr</h1>
            <p class="lead">Un partenaire du <span>tonnerre</span> !</p>
        </div>
    </div>
    <!-- End Info title-->
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
                                    <h3>
                                        DoliCloud
                                        <span>Une solution pour votre Entreprise</span>
                                    </h3>
                                </div>
                                <div class="caption-service-02">
                                    <p>Le logiciel Dolicloud ERP & CRM est un logiciel moderne de gestion de votre activité professionnelle ou associative (contacts, factures, commandes, stocks, agenda, etc...), intègrant les fonctions de Progiciel de Gestion Intégré et les fonctions de Gestion de la Relation Client. Simple d'utilisation et Open Source pour les petites et moyennes entreprises, nous nous chargeons de l’installer dans le Cloud (nous vous proposons 15 jours d'essai gratuit). </p>
                                    <p>
                                        DoliCloud offre un ensemble de modules s'intégrant les uns aux autres évitant les doubles saisies et permettant une vision 360 sur tous les métiers avec comme principal mot d'ordre: la simplicité d'utilisation.
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

    <!-- End content info - Video Section -->
    <section class="content_info">
        <!-- Vide Background -->
        <video class="bg_video" preload="auto" autoplay="autoplay" loop muted>
            <source src="{{asset('vid/dolibarr.mp4')}}" type="video/mp4">
        </video>
        <!-- Vide Background -->

        <!-- Content Video-->
        <section class="opacy_bg_03 paddings borders" style="background: rgba(255, 240, 0,0.87);">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 style="color: black !important;font-size: xx-large;">Choisissez DOLIBARR !</h1>
                    </div>

                    <div class="col-md-12 text-center padding-top-mini">
                        <a href="#" class="btn-firas">Commencez Maintenant</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Content Video-->
    </section>
    <!-- End content info - Video Section -->
@endsection
@section('jspage') @endsection
