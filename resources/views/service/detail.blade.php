@extends('layouts.layout')
@section('meta-title')
{{"Pacificode | ".$service->service_name}}
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

    <!-- service-details -->
    <section class="service-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="service-sidebar">
                        <div class="sidebar">
                            <h3>Services</h3>
                            <div class="text">Excepteur sint occaecat cupidatat pro ident sunt culpa officia desernt mollit</div>
                          
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
                                <p>{{$service->service_body}}</p>
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
