@extends('layouts.layout')

@section('meta-title')
{{"Pacificode | ".$post->post_title}}
@endsection
@section('meta-content', $post->post_extract)

@section('name_page')
    <div class="anim-icons">
        <div class="icon icon-1"><img src="/images/icons/anim-icon-17.png" alt=""></div>
        <div class="icon icon-2 rotate-me"><img src="/images/icons/anim-icon-18.png" alt=""></div>
        <div class="icon icon-3 rotate-me"><img src="/images/icons/anim-icon-19.png" alt=""></div>
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
        <div class="container" id="pcoded">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="blog-single-content">
                        <div class="post-details">
                            <figure class="image-box"><img src="{{ $post->post_photo }}" alt=""></figure>
                            <div class="inner-box">
                                <div class="upper-box">
                                    <div class="post-date"><i class="fas fa-calendar-alt"></i>{{ $post->created_at }}</div>
                                    <h3>{{ $post->post_title }}</h3>
                                    {{ $post->post_body }}
                                </div>
                                <div class="lower-box clearfix">
                                    <div class="left-content pull-left">
                                        <figure class="admin-image"><img src="{{ $post->user->photo_profile}}" alt=""></figure>
                                        <span class="admin-name">Por {{ $post->user->name}}</span>
                                    </div>
                                    <ul class="right-content pull-right">
                                        <li><a href="#">30 &nbsp;<i class="far fa-comments"></i></a></li>
                                        <li class="share">
                                            <a href="#"><i class="fas fa-share-alt"></i></a>
                                            <ul class="social-links">
                                                <li><a href="https://www.facebook.com/sharer.php?u={{Request()->fullUrl()}}&title={{ $post->title }}"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="https://twitter.com/intent/tweet?url={{ Request()->fullUrl() }}&text={{ $post->post_title }}&via={{config('app.name')}}"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="https://www.linkedin.com/shareArticle?mini=true&url={{ Request()->fullUrl()}}&title={{$post->post_title}}&summary={{$post->post_extract}}&source={{ config('app.name')}}"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="author-box">
                            <div class="author-inner">
                                <figure class="author-thumb"><img style="width:130px; height: 130px" src="{{ $post->user->photo_profile }}" alt=""></figure>
                                <div class="inner">
                                    <h4>{{ $post->user->name }}</h4>
                                    <div class="text">
                                        {{ $post->user->description }}
                                    </div>
                                    <ul class="social-links clearfix">
                                        <li><a href="{{ $post->user->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="{{ $post->user->linkedin}}"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="{{ $post->user->twitter}}"><i class="fab fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <comments-component post_id="{{$post->id}}"></comments-component>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="sidebar">
                        <div class="sidebar-search sidebar-widget">
                            <div class="search-form">
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <input type="search" name="search-field" placeholder="Search Now" required="">
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-categories sidebar-widget">
                            <h3 class="sidebar-title">Categorías</h3>
                            <div class="widget-content">
                                <ul>
                                    @foreach ($categories as $category)
                                        <li><a href="{{route('blogs', 'category='.$category->id)}}">{{$category->name}} <span>({{$category->posts->count()}})</span></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-post sidebar-widget">
                            <h3 class="sidebar-title">Ultimas publicaciones</h3>
                            <div class="widget-content">
                                @foreach ($last_posts as $l_p)
                                    <div class="post">
                                        <figure class="image"><a href="{{route('blog', $l_p->id)}}"><img src="{{$l_p->post_photo}}" alt="{{$l_p->post_title}}"></a></figure>
                                        <h5><a href="{{route('blog', $l_p->id)}}">{{$l_p->post_title}}</a></h5>
                                        <span class="post-date">{{$l_p->created_at->diffForHumans()}}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="sidebar-tags sidebar-widget">
                            <h3 class="sidebar-title">Tags más populares</h3>
                            <div class="widget-content">
                                <ul class="tag-list clearfix">
                                    @foreach ($tags as $tag)
                                        <li><a href="{{route('blogs', 'tag='.$tag->id)}}">{{ $tag->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-instagram sidebar-widget">
                            <h3 class="sidebar-title">Instagram</h3>
                            <div class="widget-content">
                                <div class="image-list clearfix">
                                    <figure class="image"><a href="#"><img src="/images/resource/instagram-1.jpg" alt=""></a></figure>
                                    <figure class="image"><a href="#"><img src="/images/resource/instagram-2.jpg" alt=""></a></figure>
                                    <figure class="image"><a href="#"><img src="/images/resource/instagram-3.jpg" alt=""></a></figure>
                                    <figure class="image"><a href="#"><img src="/images/resource/instagram-4.jpg" alt=""></a></figure>
                                    <figure class="image"><a href="#"><img src="/images/resource/instagram-5.jpg" alt=""></a></figure>
                                    <figure class="image"><a href="#"><img src="/images/resource/instagram-6.jpg" alt=""></a></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
