@extends('layouts.layout')

@section('meta-title')
{{"Pacificode | ".$project->project_title}}
@endsection
@section('meta-content', $project->project_extract)

@section('name_page')
  <div class="anim-icons">
      <div class="icon icon-1"><img src="images/icons/anim-icon-17.png" alt=""></div>
      <div class="icon icon-2 rotate-me"><img src="images/icons/anim-icon-18.png" alt=""></div>
      <div class="icon icon-3 rotate-me"><img src="images/icons/anim-icon-19.png" alt=""></div>
      <div class="icon icon-4"></div>
  </div>
  <div class="container">
      <div class="content-box clearfix">
          <div class="title-box pull-left">
              <h1>Proyecto</h1>
              <p>Información detallada de los proyectos realizados por nosotros.</p>
          </div>
          <ul class="bread-crumb pull-right">
              <li>Testimonial</li>
              <li><a href="{{ route('portfolio')}}">Portfolio</a></li>
          </ul>
      </div>
  </div>
@endsection

@section('content')
  <section class="portfolio-details">
    <div class="upper-box">
        <div class="outer-container">
            <div class="two-column-carousel owl-carousel owl-dots-none owl-nav-none">
                <figure class="image"><a href="{{$project->project_photo}}" class="lightbox-image" data-fancybox="gallery"><img src="{{$project->project_photo}}" alt=""></a></figure>
                <figure class="image"><a href="{{$project->project_photo2}}" class="lightbox-image" data-fancybox="gallery"><img src="{{$project->project_photo2}}" alt=""></a></figure>
                <figure class="image"><a href="{{$project->project_photo3}}" class="lightbox-image" data-fancybox="gallery"><img src="{{$project->project_photo3}}" alt=""></a></figure>
            </div>
        </div>
    </div>
    <div class="lower-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12 image-column">
                    <div class="image-content">
                        <div class="title-box">
                            <span>{{$category->name}}</span>
                            <h2>{{$project->project_title}}</h2>
                        </div>
                        <div class="image-box wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <figure class="image"><a href="{{$project->project_photo}}" class="lightbox-image" data-fancybox="gallery"><img src="{{$project->project_photo}}" alt=""></a></figure>
                        </div>
                        <div class="image-box wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <figure class="image"><a href="{{$project->project_photo2}}" class="lightbox-image" data-fancybox="gallery"><img src="{{$project->project_photo2}}" alt=""></a></figure>
                        </div>
                        <div class="image-box wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <figure class="image"><a href="{{$project->project_photo3}}" class="lightbox-image" data-fancybox="gallery"><img src="{{$project->project_photo3}}" alt=""></a></figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <h5>ACERCA DEL PROYECTO</h5>
                        <div class="text">
                            <p>{{$project->project_extract}}</p>
                        </div>
                        <ul class="info-list clearfix">
                            <li><span>Client</span>{{$project->project_title}}</li>
                            <li><span>Date</span>{{Carbon\Carbon::parse($project->project_date)->format('d M yy')}}</li>
                            <li><span>Categories</span>{{$category->name}}</li>
                            <li><span>Live demo</span><a href="https://{{$project->project_link}}">{{$project->project_link}}</a></li>
                        </ul>
                        <ul class="social-icons">
                            @if ($user->facebook != null)
                                <li><a href="{{$user->facebook}}"><i class="fab fa-facebook-square"></i></a></li>
                            @endif
                            @if ($user->twitter != null)
                                <li><a href="{{$user->twitter}}"><i class="fab fa-twitter-square"></i></a></li>
                            @endif
                            <li><a href="{{$user->linkedin}}"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection
