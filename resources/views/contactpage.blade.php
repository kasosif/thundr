@extends('layout')
@section('csspage')
    <!-- iziToast alert -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/iziToast/iziToast.min.css')}}">
@endsection
@section('title') CONTACT @endsection
@section('contact_active') style= "color: #ebd13d" @endsection
@section('is_slide') section_title-02 @endsection
@section('section_title')
    <!-- Info section Title-->
    <div class="container tobottom">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>CONTACT</h1>
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
                        <li>CONTACT</li>
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
                <div class="row">
                    <!-- Item Location -->
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{asset('img/office/1.jpg')}}" alt="" class="img-responsive">
                            </div>
                            <div class="col-md-6">
                                <h4>THUNDRPLEX</h4>
                                <p>Résidence Flamingo – Rue Lac Victoria
                                    <br>Les Berges du Lac, TN 1053<br>
                                    Tel: +216 25 102 630<br>
                                    Email: <a href="mailto:thundrdev2018@gmail.com" style="color: #ebd13d">thundrdev2018@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- Item Location-->

                    <!-- Item Location-->
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{asset('img/office/2.jpg')}}" alt="" class="img-responsive">
                            </div>
                            <div class="col-md-6">
                                <h4>THUNDR Cogite</h4>
                                <p>Cogite – 1 Place Tahar Haddad
                                    <br>LAC 1, TN 1053<br>
                                    Tel: +216 56 360 351<br>
                                    Email: <a href="mailto:saiedfiras@gmail.com" style="color: #ebd13d">saiedfiras@gmail.com</a><br></p>
                            </div>

                        </div>
                    </div>
                    <!-- End Item Location-->
                </div>
            </div>
        </div>
        <!-- End Info Resalt-->
    </section>
    <!-- End content info - White Section-->

    <!-- End content info - Grey Section-->
    <section class="content_info">
        <!-- Info Resalt-->
        <div class="info_resalt border-top">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Contactez Nous</h3>
                        <form id="form" action="{{route('sendmail')}}" method="POST">
                            @csrf
                            <input type="text" placeholder="Nom/Société" name="name" required>
                            <div class="{{$errors->first('name') ? 'text-danger' : ''}}">{{$errors->first('name')}}</div>
                            <input type="email" placeholder="Email"  name="email" required>
                            <div class="{{$errors->first('email') ? 'text-danger' : ''}}">{{$errors->first('email')}}</div>

                            <input type="text" placeholder="Téléphone"  name="phone" required>
                            <div class="{{$errors->first('phone') ? 'text-danger' : ''}}">{{$errors->first('phone')}}</div>

                            <textarea style="resize: none;" placeholder="Votre Message" name="message" required></textarea>
                            <div class="{{$errors->first('message') ? 'text-danger' : ''}}">{{$errors->first('message')}}</div>
                            <br>
                            <input type="submit" value="Envoyer" class="button">
                        </form>
                    </div>

                    <div class="col-md-6">
                        <h3>Restez à la page</h3>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus.</p>

                        <!-- Map area-->
                        <section class="map_area">
                            <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.2834027954214!2d10.236749114641713!3d36.83568817340211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd356aa361bb9b%3A0x8bbd922605750ae8!2sCogite%20Coworking%20Space!5e0!3m2!1sfr!2stn!4v1576867755315!5m2!1sfr!2stn">
                            </iframe>
                        </section>
                        <!-- End Map area-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Info Resalt-->
    </section>
    <!-- End content info - Grey Section-->
@endsection
@section('jspage')
    <!-- iziToast -->
    <script src="{{asset('js/iziToast/iziToast.min.js')}}" type="text/javascript"></script>

    <script>
        $(document).ready(function () {
            @if ($message = Session::get('success'))
            iziToast.success({
                title: 'Succès',
                message: '{{ $message }}',
                position: 'bottomRight'
            });
            @endif
        })
    </script>

@endsection
