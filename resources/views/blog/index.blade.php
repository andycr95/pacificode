@extends('layouts.layout')

@section('meta-title')
Pacificode | Blog
@endsection

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
                <li>Blog</li>
                <li><a href="/">Inicio</a></li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <section class="sidebar-page-container">
        <div class="container" id="pcoded">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="blog-content">
                        @foreach ($posts as $post)
                            <div class="single-blog-content">
                                <div class="inner-box">
                                    <figure class="image-box"><a href="{{ route('blog', $post)}}"><img src="{{$post->post_photo}}" alt=""></a></figure>
                                    <div class="lower-content">
                                        <div class="upper-box">
                                            <div class="post-date"><i class="fas fa-calendar-alt"></i>{{$post->created_at->diffForHumans()}}</div>
                                            <h3><a href="{{ route('blog', $post)}}">{{$post->post_title}}</a></h3>
                                            <div class="text">{{$post->post_extract}}</div>
                                            <div class="right-content pull-right">
                                                @foreach ($post->tags as $tag)
                                                    <span class="admin-name">#{{$tag->name}}</span>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="lower-box clearfix">
                                            <div class="left-content pull-left">
                                                <figure class="admin-image"><img src="{{$post->user->photo_profile}}" alt=""></figure>
                                                <span class="admin-name">Por {{$post->user->name}}</span>
                                            </div>
                                            <ul class="right-content pull-right">
                                                <li><a href="#">{{ $post->comments->count() }} &nbsp;<i class="far fa-comments"></i></a></li>
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
                            </div>
                        @endforeach
                        <div class="pagination-wrapper centred">
                            {{ $posts->links() }}
                        </div>
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
                                        <figure class="image"><a href="{{route('blog', $l_p)}}"><img src="{{$l_p->post_photo}}" alt="{{$l_p->post_title}}"></a></figure>
                                        <h5><a href="{{route('blog', $l_p)}}">{{$l_p->post_title}}</a></h5>
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
    @include('components.tech')
@endsection
