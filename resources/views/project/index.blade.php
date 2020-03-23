@extends('layouts.layout')

@section('Name_header')
    <!-- page title -->
    <div class="container">
      <div class="content-box clearfix">
          <div class="title-box pull-left">
              <h1>Portfolio 01</h1>
              <p>Reach out to the world’s most reliable IT services.</p>
          </div>
          <ul class="bread-crumb pull-right">
              <li>Testimonial</li>
              <li><a href="index.html">Home</a></li>
          </ul>
      </div>
    </div>
    <!-- page title end-->
@endsection

@section('content')


    <!-- section -->
    <section class="portfolio-section">
      <div class="container">
        <div class="sortable-masonry">
          <div class="filters">
              <ul class="filter-tabs filter-btns centred clearfix">
                  <li class="active filter" data-role="button" data-filter=".all">All</li>
                  <li class="filter" data-role="button" data-filter=".design">Design</li>
                  <li class="filter" data-role="button" data-filter=".branding">Branding</li>
                  <li class="filter" data-role="button" data-filter=".graphic">Graphic</li>
              </ul>
          </div>
        </div>
      </div>
    </section>

@endsection
