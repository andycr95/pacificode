<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Pacificode</title>

<!-- Fav Icon -->
<link rel="icon" href="images/favicon-logo.ico" type="image/x-icon">

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

<!-- Utilizamos tecnologías nativas que nos permiten un óptimo desarrollo de aplicaciones móviles y lenguajes de programación ideales para crear sistemas y sitios web robustos, siguiendo metodologías ágiles para brindar proyectos de calidad. -->




<!--Scroll to top-->
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
<script src="js/circle-progress.js"></script>
<script src="js/jquery.countTo.js"></script>
<script src="js/scrollbar.js"></script>
<script src="js/nav-tool.js"></script>
<script src="js/jquery.paroller.min.js"></script>
<script src="js/tilt.jquery.js"></script>
<script src="js/isotope.js"></script>

<!-- map script -->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>
<script src="js/gmaps.js"></script>
<script src="js/map-helper.js"></script>

<!-- main-js -->
<script src="js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>
