@extends('layout')

@section('title')
 Erreur 404
@endsection
@section('is_slide') section_title-02 @endsection

@section('section_title')
    <!-- Info section Title-->
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>OOps</h1>
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
                        <li>404</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End crumbs-->
@endsection
@section('content')
    <!-- End content info - White Section-->
    <section class="content_info">
        <!-- Info Resalt-->
        <div class="paddings">
            <div class="container wow fadeInUp">
                <div class="row page-error">
                    <h1>404 <i class="fa fa-unlink"></i></h1>
                    <hr class="tall">
                    <p class="lead">
                        Nous sommes désolés, mais la page que vous cherchiez n'existe pas...
                    </p>
                    <a href="{{route('homepage')}}" class="button">Retourner à l'accueil</a>
                </div>
            </div>
        </div>
        <!-- End Info Resalt-->
    </section>
    <!-- End content info - White Section-->
@endsection
