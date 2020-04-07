@extends('layouts.layout')

@section('meta-title')
Pacificode | Servicio
@endsection

  @section('name_page')
  <div class="content-box clearfix">
                <div class="title-box pull-left">
                    <h1>SERVICIOS</h1>
                    <p>Software a la medida de tu empresa.</p>
                </div>
                <ul class="bread-crumb pull-right">
                    <li>SERVICIOS</li>
                    <li><a href="index.html">INICIO</a></li>
                </ul>
            </div>

  @endsection

  @section('content')

  <div class="bg-layer" style="background-image: url(images/resource/case-1.png);"></div>


      <!-- designe-process -->
      <section class="designe-process service-page">
        <div class="image-layer" style="background-image: url(images/icons/layer-image-9.png);"></div>
        <div class="container">
            <div class="sec-title center"><h2>Your design process, in one place Appway with<br />useful features, an intuitive interface</h2></div>
            <div class="row">
                @foreach ($services as $s)
                <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                        <div class="single-item wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="left-layer"></div>
                                <div class="right-layer"></div>
                                <div class="icon-box">
                                    <i class="fas fa-sliders-h"></i>
                                </div>
                                <div class="bg-layer" style="background-image: url(images/resource/case-1.png);"></div>
                                <h4><a href="{{ route('service', $s->id)}}">{{$s->service_name}}</a></h4>
                                <div class="text">{{$s->service_extract}}</div>
                            </div>
                        </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- designe-precess end -->




    <!-- designe-process-three -->
    <section class="designe-process-three service-page">
        <div class="container">

        <div class="sec-title"><h2><br /></h2></div>
            <div class="inner-content">

                <div class="four-item-carousel owl-carousel owl-theme owl-dots-none">
                    @foreach ($features as $fea)
                    <div class="single-item">
                        <div class="inner-box">
                            <h3><a href="{{ route('service', $fea->service_id)}}">{{$fea->features_title}}</a></h3>
                            <div class="text">{{$fea->features_body}}</div>
                            <figure class="image-box"><img src="{{$fea->features_photo}}" alt=""></figure>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>

        </div>
    </div>
    </section>
    <!-- designe-process-three end -->

 @include('components.news_letter')

<<<<<<< HEAD
    <!-- subscribe-style-five -->
    @include('components.news_letter')
    <!-- subscribe-style-five end -->

=======
<!-- clients-style-four -->
<section class="clients-style-four style-five">
    <div class="image-layer" style="background-image: url(images/icons/layer-image-7.png);"></div>
    <div class="container">
        <div class="clients-carousel owl-carousel owl-theme owl-dots-none">
            <figure class="image-box"><a href="#"><img src="images/clients/client-1.png" alt=""></a></figure>

        </div>
    </div>
</section>
<!-- clients-style-four end -->
>>>>>>> 6fd687905a579e65098cb5b8571c6ad5ea7b3a0d



@endsection


