@extends('layouts.layout')

@section('meta-title')
Pacificode | Nosotros
@endsection
@section('name_page')
    <div class="content-box clearfix">
        <div class="title-box pull-left">
            <h1>NOSOTROS</h1>
            <p>Pacificode te ofrece tener un sitio web o App unico a la medida.</p>
        </div>
        <ul class="bread-crumb pull-right">
            <li>NOSOTROS</li>
            <li><a href="/">INICIO</a></li>
        </ul>
    </div>
@endsection
@section('content')
    <section class="our-history">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_53">
                        <div class="content-box wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="sec-title"><h2>Nuestra historia</h2></div>
                            <div class="text">
                                <p>Somos un grupo de profesionales en el área de ingeniería de sistemas, apasionados por esta profesión. Pacificode es una empresa de desarrollo web a la medida que tiene como principal objetivo suplir las necesidades y requerimientos de su empresa o negocio.</p>
                                <p>Pacificode tiene como lema ¡Desarrollo de sitios a la medida!, garantizando competitividad en el mercado.</p>
                                <p>En los últimos años hemos adquirido las competencias para brindar los mejores servicios, este grupo de profesionales comprometidos con especializarse con las últimas tecnologías desea suplir tus necesidades con un alto nivel de calidad.</p>

                    </div>
                    </div>

                    </div>


                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div id="image_block_47">
                        <div class="image-box js-tilt">
                            <figure class="image wow slideInRight" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="images/gallery/team_development.png" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mision">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_53">
                        <div class="content-box wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="sec-title"><h2>MISIÓN</h2></div>
                            <div class="text">
                                <P>Proporcionarle a su empresa o negocio un incremento en su competitividad y productividad. Para ello implementamos el desarrollo de software a la medida con las buenas prácticas adaptadas a sus requerimientos, le brindamos las mejores soluciones, somos creativos sacando provecho de las nuevas tecnologías que permiten a su negocio o empresa gozar de un sitio web único y adaptado a sus necesidades. </P>

                    </div>
                    </div>

                    </div>


                </div>


                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_53">
                        <div class="content-box wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="sec-title"><h2>VISIÓN</h2></div>
                            <div class="text">

                                <P>Estamos plenamente comprometidos con las necesidades de nuestros clientes generándoles total confianza. Nuestro mayor interés es ser dignamente referenciados, en aras del aprovechamiento de las nuevas tecnologías nos encaminamos a conocer la sociedad versátil, homogénea aplicando la ética profesional que es la base de nuestros servicios, es placentero para nosotros saber que nuestros clientes se sienten satisfechos con nuestros servicios.</P>


                            </div>

                    </div>


                </div>
    </section>
    <section class="team-style-three centred">
        <div class="container">
            <div class="row">
                @foreach ($users as $user)
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-three">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{$user->photo_profile}}" alt="">
                                    <ul class="social-links clearfix">
                                        <li><a href="{{$user->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="{{$user->twitter}}"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="{{$user->linkedin}}"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </figure>
                                <div class="lower-content">
                                    <h5><a href="#">{{$user->name}}</a></h5>
                                    <span class="designation">{{$user->position}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @include('components.news_letter')
    @include('components.tech')
@endsection
