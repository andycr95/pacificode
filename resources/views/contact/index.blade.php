@extends('layouts.layout')

@section('Name_header')
    
@endsection

@section('content')



  <!-- Mobile Menu  -->
  <div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>
    
    <nav class="menu-box">
        <div class="nav-logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>Chicago 12, Melborne City, USA</li>
                <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                <li><a href="mailto:info@example.com">info@example.com</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                <li><a href="#"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div><!-- End Mobile Menu -->


<!-- page-title -->
<section class="page-title" style="background-image: url(images/background/pagetitle-bg.png);">
    <div class="anim-icons">
        <div class="icon icon-1"><img src="images/icons/anim-icon-17.png" alt=""></div>
        <div class="icon icon-2 rotate-me"><img src="images/icons/anim-icon-18.png" alt=""></div>
        <div class="icon icon-3 rotate-me"><img src="images/icons/anim-icon-19.png" alt=""></div>
        <div class="icon icon-4"></div>
    </div>
    <div class="container">
        <div class="content-box clearfix">
            <div class="title-box pull-left">
                <h1>Contact Us</h1>
                <p>Reach out to the world’s most reliable IT services.</p>
            </div>
            <ul class="bread-crumb pull-right">
                <li>Contact Us</li>
                <li><a href="index.html">Home</a></li>
            </ul>
        </div>
    </div>
</section>
<!-- page-title end -->


<!-- contact-section -->
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-12 col-sm-12 offset-lg-1 big-column">
                <div class="info-content centred">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                            <div class="single-info-box">
                                <figure class="icon-box"><img src="images/icons/info-icon-1.png" alt=""></figure>
                                <h2>Phone</h2>
                                <div class="text">Start working with Landrick that can provide everything</div>
                                <div class="phone"><a href="tel:0665184575181">(+066) 518 - 457 - 5181</a></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                            <div class="single-info-box">
                                <figure class="icon-box"><img src="images/icons/info-icon-2.png" alt=""></figure>
                                <h2>E-mail</h2>
                                <div class="text">Start working with Landrick that can provide everything</div>
                                <div class="phone"><a href="mailto:info@example.com">info@example.com</a></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                            <div class="single-info-box">
                                <figure class="icon-box"><img src="images/icons/info-icon-3.png" alt=""></figure>
                                <h2>Address</h2>
                                <div class="text">25 Bedford St. New York City. New Yark</div>
                                <div class="phone"><a href="#">View on Google map</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="image-container">
                    <figure class="image-box"><img src="images/resource/contact-1.png" alt=""></figure>
                </div>
                <div class="contact-form-area">
                    <div class="sec-title center"><h2>Contact us</h2></div>
                    <div class="form-inner">
                        <form method="post" action="sendemail.php" id="contact-form" class="default-form"> 
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 column">
                                    <div class="form-group">
                                        <i class="fas fa-user"></i>
                                        <input type="text" name="username" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 column">
                                    <div class="form-group">
                                        <i class="fas fa-envelope"></i>
                                        <input type="email" name="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 column">
                                    <div class="form-group">
                                        <i class="fas fa-file"></i>
                                        <input type="text" name="subject" placeholder="Subject" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 column">
                                    <div class="form-group">
                                        <i class="fas fa-phone"></i>
                                        <input type="text" name="phone" placeholder="Phone" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 column">
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Write here message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 column">
                                    <div class="form-group message-btn centred">
                                        <button type="submit" class="theme-btn-two" name="submit-form">Submit Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-section end -->


<!-- map-section -->
<section class="map-section">
    <div class="google-map-area">
        <div 
            class="google-map" 
            id="contact-google-map" 
            data-map-lat="40.712776" 
            data-map-lng="-74.005974" 
            data-icon-path="images/icons/map-marker.png"  
            data-map-title="Brooklyn, New York, United Kingdom" 
            data-map-zoom="12" 
            data-markers='{
                "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","images/icons/map-marker.png"]
            }'>

        </div>
    </div>
</section>
<!-- map-section end -->



@endsection
