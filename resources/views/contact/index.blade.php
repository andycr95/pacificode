@extends('layouts.layout')

@section('meta-title')
Pacificode | Contacto
@endsection

@section('name_page')
    <div class="content-box clearfix">
        <div class="title-box pull-left">
            <h1>CONTACTANOS</h1>
            <p>Somos una empresa especializada en diseño de páginas web, desarrollo de aplicaciones y tiendas online.</p>
        </div>
        <ul class="bread-crumb pull-right">
            <li>Contactanos</li>
            <li><a href="{{ route('home')}}">inicio</a></li>
        </ul>
    </div>
@endsection

@section('content')
    <!-- contact-section -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 col-sm-12 offset-lg-1 big-column">
                    <div class="info-content centred">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                                <div class="single-info-box">
                                    <figure class="icon-box"><img src="images/icons/info-icon-1.png" alt=""></figure>
                                    <h2>Celular</h2>
                                    <div class="text">llamamos desde cualquier parte del Mundo ✆</div>

                                    <div class="phone"><a href="tel:3128978597">(+57)312 - 897 - 8597</a></div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                                <div class="single-info-box">
                                    <figure class="icon-box"><img src="images/icons/info-icon-2.png" alt=""></figure>
                                    <h2>Correo Electronico</h2>
                                    <div class="text"></div>
                                    <div class="phone"><a href="info@pacificode.co">info@pacificode.co</a></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                                <div class="single-info-box">

                                   <figure class="icon-box"><img src="images/icons/info-icon-3.png" alt=""></figure>
                                    <h2>Direccion</h2>
                                    <div class="text">Nuestra sede principal está ubicada en Buenaventura -
                                        Valle del Cauca pero ofrecemos servicios a nivel de todo el país.</div>
                                    <div class="phone"><a href="#">Ver en  Google map</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="image-container">
                    <!--       <figure class="image-box"><img src="images/resource/contact-1.png" alt=""></figure>   -->
                    </div>
                    <div class="contact-form-area">
                        <div class="sec-title center"><h2>Si desea conocer más acerca de nuestros servicios y/o
                            opciones de contratación puede escribirnos a través de este formulario.</h2></div>


                        <div class="form-inner">
                            <form method="post" action="{{route('createContact')}}"  class="default-form">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 column">
                                        <div class="form-group">
                                            <i class="fas fa-user"></i>
                                            <input type="text" name="nombre" placeholder="Nombre" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 column">
                                        <div class="form-group">
                                            <i class="fas fa-envelope"></i>
                                            <input type="email" name="email" placeholder="Correo electronico" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 column">
                                        <div class="form-group">
                                            <i class="fas fa-file"></i>
                                            <input type="text" name="tema" placeholder="Tema" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 column">
                                        <div class="form-group">
                                            <i class="fas fa-phone"></i>
                                            <input type="text" name="telefono" placeholder="Telefono" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 column">
                                        <div class="form-group">
                                            <textarea name="mensaje" placeholder="Escribe aqui tu mensaje"  required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 column">
                                        <div class="form-group message-btn centred">
                                            <button type="submit" class="theme-btn-two" name="submit-form">Enviar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section end -->

    <!-- faq-section star -->
   @include('components.faq')
    <!-- section end -->
    <!-- map-section -->
    <section class="map-section">
        <div class="google-map-area">
            <div
                class="google-map"
                id="contact-google-map"
                data-map-lat="40.712776"
                data-map-lng="-74.005974"
                data-icon-path="images/icons/map-marker.png"
                data-map-title="Brooklyn, New York, United Kingdom"
                data-map-zoom="12"
                data-markers='{
                    "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","images/icons/map-marker.png"]
                }'>

            </div>
        </div>
    </section>
    <!-- map-section end -->
@endsection
@push('scripts')
<!-- map script -->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>
<script src="/js/gmaps.js"></script>
<script src="/js/map-helper.js"></script>
@endpush