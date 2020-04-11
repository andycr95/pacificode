@extends('layouts.layout')

@section('meta-title')
Pacificode | Portafolio
@endsection

@section('name_page')

      <div class="content-box clearfix">
          <div class="title-box pull-left">
              <h1>Portafolio</h1>
              <p>Nuestros proyectos al servicio del cliente.</p>
          </div>
          <ul class="bread-crumb pull-right">
              <li>Testimonial</li>
              <li><a href="/">Home</a></li>
          </ul>
      </div>

@endsection

@section('content')
    <section class="portfolio-section">
        <div class="container">
            <div class="sortable-masonry">
                <div class="filters">
                    <ul class="filter-tabs filter-btns centred clearfix">
                        <li class="active filter" data-role="button" data-filter=".all">Todos</li>
                        <li class="filter" data-role="button" data-filter=".design">Diseño</li>
                        <li class="filter" data-role="button" data-filter=".branding">Marca</li>
                        <li class="filter" data-role="button" data-filter=".graphic">Gráfico</li>
                    </ul>
                </div>
                <div class="items-container row clearfix">
                  @foreach($projects as $project)
                    <div class="col-lg-6 col-md-6 col-sm-12 masonry-item small-column all graphic design branding">
                        <div class="portfolio-block-one">
                            <div class="image-box">
                                <figure class="image"><img src="{{$project->project_photo}}" alt=""></figure>
                                <div class="content-box">
                                    <div class="inner">
                                        <div class="title">{{$project->project_customer}}</div>
                                        <h3><a href="{{ route('project',$project->id)}}">{{$project->project_title}}</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="subscribe-style-five">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                  <div id="image_block_38">
                      <div class="image-box">
                          <div class="bg-layer" style="background-image: url(images/icons/user-icon.png);"></div>
                          <figure class="image float-bob-y clearfix"><img src="images/resource/newsletter.png" alt=""></figure>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                  <div id="content_block_41">
                      <div class="content-box">
                          <div class="sec-title"><h2>Suscríbete a nuestro boletín</h2></div>
                          <div class="text">Te sorprenderás con nuestros servicios con la más alta calidad, anímate ya.</div>
                          <form action="#" method="post" class="subscribe-form">
                              <div class="form-group">
                                  <input type="email" name="email" placeholder="Introduce tu correo electrónico" required="true">
                                  <button type="submit" class="theme-btn-two">Suscríbase ahora</button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
@endsection
