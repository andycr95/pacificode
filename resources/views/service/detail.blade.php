@extends('layouts.layout')
@section('meta-title')
{{"Pacificode | ".$service->service_name}}
@endsection


  @section('name_page')
  <div class="content-box clearfix">
                <div class="title-box pull-left">
                    <h1>SERVICIOS</h1>
                <p></p>
                </div>
                <ul class="bread-crumb pull-right">
                    <li>SERVICIOS</li>
                    <li><a href="/">INICIO</a></li>
                </ul>
            </div>

  @endsection

  @section('content')

    <!-- service-details -->
    <section class="service-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="service-sidebar">
                        <div class="sidebar">
                            <h3>Servicios</h3>
                            <div class="text">Nuestra empresa proporciona servicios informáticos altamente eficientes
                                 además de un servicio integral que engloba todos los servicios de distintas áreas.
                            </div>

                            <ul class="list">
                                @foreach ($services as $ser)
                                <li><a href="{{ route('service', $ser->id)}}">{{$ser->service_name}}</a></li>
                                @endforeach
                            </ul>


                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="service-details-content">
                        <div class="inner-box">
                            <div class="top-content">
                                <div class="sec-title">
                                <h2>{{$service->service_name}}</h2>
                                </div>
                                <div class="text">
                                <p>{{$service->service_extract}}</p>
                                </div>

                                <figure class="image-box"><img src="{{$service->service_photo}}" alt=""></figure>
                                <div class="text">
                                {{$service->service_body}}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-details end -->


  @endsection
