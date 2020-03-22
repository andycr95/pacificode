 <!-- main header -->
 <header class="main-header style-four">
    <div class="outer-container">
        <div class="container">
            <div class="main-box clearfix">
                <div class="logo-box pull-left">
                    <figure class="logo"><a href="index.html"><img src="images/logo-4.png" alt=""></a></figure>
                </div>
                <div class="menu-area pull-right clearfix">
                    <!--Mobile Navigation Toggler-->
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

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="container clearfix">
            <figure class="logo-box"><a href="index.html"><img src="images/small-logo.png" alt=""></a></figure>
            <div class="menu-area">
                <nav class="main-menu clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->
