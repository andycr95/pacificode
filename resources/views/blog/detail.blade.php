@extends('layouts.layout')

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
                <h1>Blog</h1>
                <p>Información actual e interesante</p>
            </div>
            <ul class="bread-crumb pull-right">
                <li>Detalle</li>
                <li><a href="index.html">Blog</a></li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <section class="sidebar-page-container">
        <post-detail-component></post-detail-component>
    </section>
@endsection
