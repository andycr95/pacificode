<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | Admin</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="/files/bower_components/bootstrap/css/bootstrap.min.css">
        <!-- light-box css -->
    <link rel="stylesheet" type="text/css" href="/files/bower_components/ekko-lightbox/css/ekko-lightbox.css">
    <link rel="stylesheet" type="text/css" href="/files/bower_components/lightbox2/css/lightbox.css">
    <!-- Date-Dropper css -->
    <link rel="stylesheet" type="text/css" href="/files/bower_components/datedropper/css/datedropper.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="/files/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="/files/assets/icon/icofont/css/icofont.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="/files/assets/icon/feather/css/feather.css">
    <link rel="stylesheet" type="text/css" href="/files/assets/pages/social-timeline/timeline.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="/files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="/files/assets/css/jquery.mCustomScrollbar.css">
    <style>
        .v-enter-active, .v-leave-active {
        transition: opacity .5s
        }
        .v-enter, .v-leave-to /* .v-leave-active below version 2.1.8 */ {
        opacity: 0
        }
        .form-control-error {
            font-size: 14px;
            border-radius: 2px;
            border: 1px solid #ccc;
            border-color: red !important;
        }
        .selector-for-some-widget {
            box-sizing: content-box;
        }
        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }
        .profile-image {
            position: relative;
            width: 50%;
        }
        .profile-image:hover .user-img {
            opacity: 0.3;
        }

        .profile-image:hover .middle {
            opacity: 1;
        }

        .text {
            background-color: #4CAF50;
            color: white;
            font-size: 12px;
            padding: 12px 22px;
        }
        .bootstrap-tagsinput {
            width: 100%
        }
    </style>
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

             <!-- Navbar start -->
             @include('admin.layouts.nav-bar')
             <!-- Navbar end -->
             <!-- Sidebar chat start -->
             @include('admin.layouts.side-bar-chat')
             <!-- Sidebar chat end -->

             <div class="pcoded-main-container">
                 <div class="pcoded-wrapper">
                    <!-- Sidebar start -->
                    <sidebar-component></sidebar-component>
                    <!-- Sidebar end -->

                    <!-- Content start -->
                    @yield('content')
                    <!-- Content end -->
                </div>
            </div>

        </div>
    </div>


    <!-- Required Jquery -->
    <script type="text/javascript" src="/files/bower_components/jquery/js/jquery.min.js"></script>
    <script type="text/javascript" src="/files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/files/bower_components/popper.js/js/popper.min.js"></script>
    <script type="text/javascript" src="/files/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="/files/bower_components/modernizr/js/modernizr.js"></script>
    <script type="text/javascript" src="/files/bower_components/modernizr/js/css-scrollbars.js"></script>
    <!-- Date-dropper js -->
    <script type="text/javascript" src="/files/bower_components/datedropper/js/datedropper.min.js"></script>
    <!-- Custom js -->
    @stack('scripts')
    <script type="text/javascript" src="/js/admin-custom.js"></script>
    <script src="/files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
