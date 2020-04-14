<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>@yield('meta-title', config('app.name'))</title>
<meta name="description" content="@yield('meta-content', 'Empresa de Desarrollo de Software, Aplicaciones Móviles, Sistemas de Gestión a Medida, Gestión en la Nube. Ayudamos a EMPRENDEDORES a potenciar sus negocios con gran escalabilidad')">

<!-- Fav Icon -->
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="css/font-awesome-all.css" rel="stylesheet">
<link href="css/flaticon.css" rel="stylesheet">
<link href="css/owl.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/jquery.fancybox.min.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/imagebg.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

</head>
<!-- page wrapper -->
<body class="boxed_wrapper">

    <!-- preloader -->
    <div class="preloader"></div>
    <!-- preloader -->

    <header class="main-header">
        <div class="outer-container">
            <div class="nav-box">
                <div class="nav-btn nav-toggler navSidebar-button clearfix">
                    <span class="icon"></span>
                    <span class="icon"></span>
                    <span class="icon"></span>
                </div>
            </div>
            <div class="container">
                <div class="main-box clearfix">
                    <div class="logo-box pull-left">
                        <figure class="logo"><a href="/"><img src="images/logo-2.png" alt=""></a></figure>
                    </div>
                    <div class="menu-area pull-right">
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        @include('layouts.nav-bar')
                    </div>
                </div>
            </div>
        </div>

        <div class="sticky-header">
            <div class="container clearfix">
                <figure class="logo-box"><a href="/"><img src="images/small-logo.png" alt=""></a></figure>
                <div class="menu-area">
                    <nav class="main-menu clearfix">
                    </nav>
                </div>
            </div>
        </div>
    </header>

    @include('layouts.mobile-menu')

    <section class="banner-style-two">
        <div class="anim-icons">
            <div class="icon icon-1"></div>
            <div class="icon icon-2"></div>
            <div class="icon icon-3"></div>
        </div>
        <div class="image-layer" style="background-image: url(images/icons/banner-bg.png);"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <h3>Hagamos el cambio juntos</h3>
                        <h1>Creamos productos y servicios digitales brillantes</h1>
                        <div class="text">Nuestro equipo combina estrategia, conocimiento  e ingeniería tecnológica, creando experiencias digitales que cambian el juego para usted y sus clientes.</div>
                        <div class="btn-box"><a href="{{route('contact')}}" class="theme-btn-two">Contáctanos</a></div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                    <div class="image-box">
                        <div class="bg-layer" style="background-image: url(images/icons/shap-4.png);"></div>
                        <figure class="image image-1 float-bob-x"><img src="images/portfolio/fundamejoremos.png" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                    <div id="iamge_block_01">
                        <div class="image-box float-bob-y">
                            <figure class="image wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="images/resource/app_dev.png" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                    <div id="content_block_01">
                        <div class="content-box">
                            <div class="sec-title">
                                <h2>Nuestra Metodología</h2>
                                <p>Tenemos un proceso que nos ha permitido manejar proyectos de forma exitosa y cumplir con las expectativas de nuestros clientes.</p>
                            </div>
                            <div class="inner-box wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <div class="bg-layer" style="background-image: url(images/resource/case-1.png);"></div>
                                            <div class="icon-box"><i class="flaticon-app-1"></i></div>
                                            <h5><a href="#">Estrategia</a></h5>
                                            <div class="text">Entendemos las necesidades de su negocio y nuestra experiencia nos permite recomendarle una solución web que genere mejores resultados a corto plazo.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                            <div class="bg-layer" style="background-image: url(images/resource/case-1.png);"></div>
                                            <div class="icon-box"><i class="flaticon-target"></i></div>
                                            <h5><a href="#">Diseño</a></h5>
                                            <div class="text">Nuestro proceso creativo está centrado en obtener la mejor experiencia de usuario y comunicar el mensaje que usted desea que expresar a sus clientes.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                                            <div class="bg-layer" style="background-image: url(images/resource/case-1.png);"></div>
                                            <div class="icon-box"><i class="flaticon-shipping"></i></div>
                                            <h5><a href="#">Desarrollo</a></h5>
                                            <div class="text">Desarrollamos sitios web que son accesibles, compatibles con los estándares, amigables con los buscadores (SEO) y usando las mejores prácticas.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                                            <div class="bg-layer" style="background-image: url(images/resource/case-1.png);"></div>
                                            <div class="icon-box"><i class="flaticon-dashboard"></i></div>
                                            <h5><a href="#">Mantenimiento</a></h5>
                                            <div class="text">Le brindamos el soporte técnico que necesita. Desde la actualización de contenidos, aseguramiento del sitio web, hasta la optimización web para mejorar su posicionamiento en Google.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature-style-three">
        <div class="container">
            <div class="inner-container">
                <div class="inner-box">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div id="content_block_02">
                                <div class="content-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <div class="sec-title"><h2>Aplicaciones móviles redefinidas</h2></div>
                                    <div class="text">
                                        <p>Desarrollamos aplicaciones móviles multiplataforma (iOS / Android) debido a las ventajas que ofrecen sobre otras alternativas <br/> de usuario mejorada, acceso a todas las funcionalidades del dispositivo sin restricciones y excelente rendimiento.</p>
                                    </div>
                                    <div class="btn-box"><a href="#" class="theme-btn">Mas detalles<i class="fas fa-angle-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div id="iamge_block_02">
                                <div class="image-box">
                                    <div class="bg-layer" style="background-image: url(images/icons/image-shap-1.png);"></div>
                                    <figure class="image image-1 wow slideInRight" data-wow-delay="300ms" data-wow-duration="1500ms"><img src="images/portfolio/app_2.png" alt=""></figure>
                                    <figure class="image image-2 wow slideInRight" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="images/portfolio/app.png" alt=""></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="inner-box">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-12 col-sm-12 image-column">
                            <div id="image_block_12">
                                <div class="image-box">
                                    <figure class="image image-1 wow slideInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="images/portfolio/vitam.png" alt=""></figure>
                                    <figure class="image image-2 wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="images/portfolio/vitam-2.png" alt=""></figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                            <div id="content_block_14">
                                <div class="content-box margin_left_30 wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <div class="sec-title"><h2>Creamos aplicaciones web que generan resultados.</h2></div>
                                    <div class="text">Somos especialistas en diseño y desarrollo de aplicaciones Web a medida de tus necesidades, acumulamos una amplia experiencia en programación Web para asesorarte y guiarte en tu proyecto, con nosotros conseguirás alcanzar tus metas y objetivos.</div>
                                    <div class="btn-box"><a href="#" class="theme-btn">Más Detalles<i class="fas fa-angle-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-section centred">
        <div class="image-layer" style="background-image: url(images/icons/testimonial-bg.png);"></div>
        <div class="container">
            <div class="sec-title center">
                <h2>Testimonios</h2>
                <p>Enfocamos todos nuestros esfuerzos en satisfacer las necesidades de nuestros clientes<br /> y en impulsar sus negocios.</p>
            </div>

            <div class="testimonial-carousel owl-carousel owl-theme">
                @foreach ($testimonies as $t)
                <div class="testimonial-inner">
                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 testimonial-block">
                            <div class="testimonial-block-one">
                                <div class="inner-box">
                                    <figure class="image-box "><img src="{{$t->testimony_photo}}" style="width:100%" alt=""></figure>
                                    <div class="text">{{$t->testimony_extract}}</div>
                                    <div class="author-info">
                                        <h5 class="name">{{$t->testimony_name}}</h5>
                                        <span class="designation">{{$t->testimony_body}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>

    <section class="download-section">
        <div class="bg-layer wow slideInLeft animated" style="background-image: url(images/icons/shap-3.png);"></div>
        <div class="container">
            <div class="content-column">
                <div id="content_block_05">
                    <div class="content-box wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="sec-title"><h2>Tecnologías</h2></div>
                        <div>
                            <div class="row">
                                <div class="col-lg-2 col-md-4 col-sm-12" style="margin: 20px 0; text-align: center;"><figure class="image-box"><img src="images/resource/tech/ionic.png" alt=""></figure></div>
                                <div class="col-lg-2 col-md-4 col-sm-12" style="margin: 20px 0; text-align: center;"><figure class="image-box"><img src="images/resource/tech/nodejs.png" alt=""></figure></div>
                                <div class="col-lg-2 col-md-4 col-sm-12" style="margin: 20px 0; text-align: center;"><figure class="image-box"><img src="images/resource/tech/mongodb.png" alt=""></figure></div>
                                <div class="col-lg-2 col-md-4 col-sm-12" style="margin: 20px 0; text-align: center;"><figure class="image-box"><img src="images/resource/tech/spring.png" alt=""></figure></div>
                                <div class="col-lg-2 col-md-4 col-sm-12" style="margin: 20px 0; text-align: center;"><figure class="image-box"><img src="images/resource/tech/wordpress.png" alt=""></figure></div>
                                <div class="col-lg-2 col-md-4 col-sm-12" style="margin: 20px 0; text-align: center;"><figure class="image-box"><img src="images/resource/tech/android.png" alt=""></figure></div>
                                <div class="col-lg-2 col-md-4 col-sm-12" style="margin: 20px 0; text-align: center;"><figure class="image-box"><img src="images/resource/tech/angular.png" alt=""></figure></div>
                                <div class="col-lg-2 col-md-4 col-sm-12" style="margin: 20px 0; text-align: center;"><figure class="image-box"><img src="images/resource/tech/aws.png" alt=""></figure></div>
                                <div class="col-lg-2 col-md-4 col-sm-12" style="margin: 20px 0; text-align: center;"><figure class="image-box"><img src="images/resource/tech/git.png" alt=""></figure></div>
                                <div class="col-lg-2 col-md-4 col-sm-12" style="margin: 20px 0; text-align: center;"><figure class="image-box"><img src="images/resource/tech/docker.png" alt=""></figure></div>
                                <div class="col-lg-2 col-md-4 col-sm-12" style="margin: 20px 0; text-align: center;"><figure class="image-box"><img src="images/resource/tech/sass.png" alt=""></figure></div>
                                <div class="col-lg-2 col-md-4 col-sm-12" style="margin: 20px 0; text-align: center;"><figure class="image-box"><img src="images/resource/tech/java.png" alt=""></figure></div>
                                <div class="col-lg-2 col-md-4 col-sm-12" style="margin: 20px 0; text-align: center;"><figure class="image-box"><img src="images/resource/tech/laravel.png" alt=""></figure></div>
                                <div class="col-lg-2 col-md-4 col-sm-12" style="margin: 20px 0; text-align: center;"><figure class="image-box"><img src="images/resource/tech/python.png" alt=""></figure></div>
                                <div class="col-lg-2 col-md-4 col-sm-12" style="margin: 20px 0; text-align: center;"><figure class="image-box"><img src="images/resource/tech/vue.png" alt=""></figure></div>
                                <div class="col-lg-2 col-md-4 col-sm-12" style="margin: 20px 0; text-align: center;"><figure class="image-box"><img src="images/resource/tech/mysql.png" alt=""></figure></div>
                                <div class="col-lg-2 col-md-4 col-sm-12" style="margin: 20px 0; text-align: center;"><figure class="image-box"><img src="images/resource/tech/psql.png" alt=""></figure></div>
                                <div class="col-lg-2 col-md-4 col-sm-12" style="margin: 20px 0; text-align: center;"><figure class="image-box"><img src="images/resource/tech/ios.png" alt=""></figure></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news-section">
        <div class="container">
            <div class="sec-title center">
                <h2>Noticias & Eventos</h2>
                <p>En esta sección podrás encontrar las últimas noticias y eventos <br />sobre tecnología.</p>
            </div>
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-6 col-sm-12 news-column">
                        <div class="news-block-one wow flipInY animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="{{ route('blog', $post->id)}}"><img style="width: 100%; height: 270px;" src="{{$post->post_photo}}" alt=""></a></figure>
                                <div class="lower-content">
                                    <div class="post-date"><i class="fas fa-calendar-alt"></i>{{ $post->created_at->diffForHumans() }}</div>
                                <h3><a href="{{ route('blog', $post->id)}}">{{ $post->post_title }}</a></h3>
                                    <div class="link-btn"><a href="{{ route('blog',$post->id)}}">Leer más</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('components.news_letter')

    @include('layouts.footer')

    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fa fa-arrow-up"></span>
    </button>


    <!-- jequery plugins -->
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/scrollbar.js"></script>
    <script src="js/tilt.jquery.js"></script>

    <!-- main-js -->
    <script src="js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>
