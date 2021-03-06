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
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Mobile, iOS, Android, apple, creative app">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="/css/font-awesome-all.css" rel="stylesheet">
    <link href="/css/flaticon.css" rel="stylesheet">
    <link href="/css/owl.css" rel="stylesheet">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/imagebg.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">
    <style>
        .form-control-error {
            font-size: 14px;
            border-radius: 2px;
            border: 1px solid #ccc;
            border-color: red !important;
        }
    </style>
</head>


<!-- page wrapper -->
<body class="boxed_wrapper">

    <!-- preloader -->
    <div class="preloader"></div>
    <!-- preloader -->

    <!--================Header Menu Area =================-->
    @include('layouts.header')
    <!--================Header Menu Area =================-->
    <!-- Mobile Menu  -->
    @include('layouts.mobile-menu')
    <!-- End Mobile Menu -->
    <!-- page-title -->
    @include('layouts.name_page')
    <!-- page-title end -->

    <!--================Content Area =================-->
    @yield('content')
    <!--================Content Area =================-->
    <!--================Footer Area =================-->
    @include('layouts.footer')
    <!--================End Footer Area =================-->

<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-arrow-up"></span>
</button>


<!-- jquery plugins -->
<script src="/js/jquery.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/owl.js"></script>
<script src="/js/wow.js"></script>
<script src="/js/jquery.fancybox.js"></script>
<script src="/js/appear.js"></script>
<script src="/js/circle-progress.js"></script>
<script src="/js/jquery.countTo.js"></script>
<script src="/js/scrollbar.js"></script>
<script src="/js/nav-tool.js"></script>
<script src="/js/jquery.paroller.min.js"></script>
<script src="/js/tilt.jquery.js"></script>
<script src="/js/isotope.js"></script>
<script src="{{ asset('/js/app.js') }}"></script>
@stack('scripts')

<!-- main-js -->
<script src="/js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>
