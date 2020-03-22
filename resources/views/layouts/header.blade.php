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

                    <div class="menu-right-content clearfix">
                        <div class="search-box-outer">
                            <div class="dropdown">
                                <button class="search-box-btn" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-search"></span></button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                    <li class="panel-outer">
                                        <div class="form-container">
                                            <form method="post" action="blog.html">
                                                <div class="form-group">
                                                    <input type="search" name="field-name" value="" placeholder="Search...." required="">
                                                    <button type="submit" class="search-btn"><span class="fas fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="cart-box-outer">
                            <a href="#">
                                <i class="fas fa-shopping-basket"></i>
                                <span class="number">2</span>
                            </a>
                        </div>
                        <div class="nav-btn nav-toggler navSidebar-button clearfix">
                            <span class="icon"></span>
                            <span class="icon"></span>
                            <span class="icon"></span>
                        </div>
                        <div class="btn-box"><a href="#">Started Now</a></div>
                    </div>
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