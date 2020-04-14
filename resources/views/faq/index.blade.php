@extends('layouts.layout')

@section('meta-title')
Pacificode | Preguntas frecuentes
@endsection

@section('name_page')
    <div class="content-box clearfix">
        <div class="title-box pull-left">
            <h1>Preguntas mas frecuentes</h1>
            <p>Póngase en contacto con los servicios de TI más confiables.</p>
        </div>
        <ul class="bread-crumb pull-right">
            <li>Formula tu pregunta</li>
            <li><a href="{{ route('home')}}">inicio</a></li>
        </ul>
    </div>
@endsection

@section('content')

    <!-- faq-section -->
    <section class="faq-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-column">
                    <div id="iamge_block_01">
                        <div class="image-box float-bob-y">
                            <figure class="image wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="images/resource/app_dev.png" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                    <div class="faq-content">
                        <div class="sec-title"><h2>Estamos atentos a tus consultas</h2></div>
                        @foreach ($faqs as $i)
                        <ul class="accordion-box">
                            <li class="accordion block">
                                 <div class="acc-btn">
                                 <div class="icon-outer"><i class="fas fa-plus"></i></div>
                                 <h4>{{$i->questions}}</h4>
                                </div>
                                @foreach ($answers as $i)
                                <div class="acc-content">
                                    <div class="content">
                                    <div class="text">{{$i->name}}</div>
                                    </div>
                                </div>
                                @endforeach
                            </li>
                        </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq-section end -->


    <!-- question-section -->
    <section class="question-section">
        <div class="image-layer" style="background-image: url(images/icons/layer-image-8.png);"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 col-sm-12 offset-lg-1 inner-column">
                    <div class="sec-title center">
                        <h2>Cuéntanos cualquier pregunta</h2>
                        <p>Brindamos el mejor servicio para que nuestros clientes cuentanos.</p>
                    </div>
                    <div class="question-form">
                        <form action="{{route('createFaq')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="name" placeholder="Nombres" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Correo electronico" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="subject" placeholder="Tema" required="">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="questions" placeholder="Pregunta"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn centred">
                                    <button type="submit" class="theme-btn-two">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- question-section end -->
@include('components.news_letter')
  <!-- question-section end -->



@endsection
