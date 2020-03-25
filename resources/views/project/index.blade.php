@extends('layouts.layout')

@section('name_page')

      <div class="content-box clearfix">
          <div class="title-box pull-left">
              <h1>Portfolio</h1>
              <p>Reach out to the world’s most reliable IT services.</p>
          </div>
          <ul class="bread-crumb pull-right">
              <li>Testimonial</li>
              <li><a href="/">Home</a></li>
          </ul>
      </div>

@endsection

@section('content')

<!-- portfolio-section -->
    <section class="portfolio-section">
        <div class="container">
            <div class="sortable-masonry">
                <div class="filters">
                    <ul class="filter-tabs filter-btns centred clearfix">
                        <li class="active filter" data-role="button" data-filter=".all">All</li>
                        <li class="filter" data-role="button" data-filter=".design">Design</li>
                        <li class="filter" data-role="button" data-filter=".branding">Branding</li>
                        <li class="filter" data-role="button" data-filter=".graphic">Graphic</li>
                    </ul>
                </div>
                <div class="items-container row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 masonry-item small-column all graphic design branding">
                        <div class="portfolio-block-one">
                            <div class="image-box">
                                <figure class="image"><img src="images/gallery/projects-01.jpg" alt=""></figure>
                                <div class="content-box">
                                    <div class="inner">
                                        <div class="title">Photo. Ui - Ux</div>
                                        <h3><a href="portfolio-details.html">Logo Design</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 masonry-item small-column all design">
                        <div class="portfolio-block-one">
                            <div class="image-box">
                                <figure class="image"><img src="images/gallery/p2.jpg" alt=""></figure>
                                <div class="content-box">
                                    <div class="inner">
                                        <div class="title">Photo. Ui - Ux</div>
                                        <h3><a href="portfolio-details.html">Logo Design</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 masonry-item small-column all graphic branding">
                        <div class="portfolio-block-one">
                            <div class="image-box">
                                <figure class="image"><img src="images/gallery/p3.jpg" alt=""></figure>
                                <div class="content-box">
                                    <div class="inner">
                                        <div class="title">Photo. Ui - Ux</div>
                                        <h3><a href="portfolio-details.html">Logo Design</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 masonry-item small-column all branding">
                        <div class="portfolio-block-one">
                            <div class="image-box">
                                <figure class="image"><img src="images/gallery/p4.jpg" alt=""></figure>
                                <div class="content-box">
                                    <div class="inner">
                                        <div class="title">Photo. Ui - Ux</div>
                                        <h3><a href="portfolio-details.html">Logo Design</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 masonry-item small-column all graphic design branding">
                        <div class="portfolio-block-one">
                            <div class="image-box">
                                <figure class="image"><img src="images/gallery/p5.jpg" alt=""></figure>
                                <div class="content-box">
                                    <div class="inner">
                                        <div class="title">Photo. Ui - Ux</div>
                                        <h3><a href="portfolio-details.html">Logo Design</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 masonry-item small-column all design graphic">
                        <div class="portfolio-block-one">
                            <div class="image-box">
                                <figure class="image"><img src="images/gallery/p6.jpg" alt=""></figure>
                                <div class="content-box">
                                    <div class="inner">
                                        <div class="title">Photo. Ui - Ux</div>
                                        <h3><a href="portfolio-details.html">Logo Design</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio-section end -->
    <!-- subscribe-style-five -->
    <section class="subscribe-style-five">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                  <div id="image_block_38">
                      <div class="image-box">
                          <div class="bg-layer" style="background-image: url(images/icons/user-icon.png);"></div>
                          <figure class="image float-bob-y clearfix"><img src="images/resource/newsletter.png" alt=""></figure>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                  <div id="content_block_41">
                      <div class="content-box">
                          <div class="sec-title"><h2>Subscribe our Newsletter</h2></div>
                          <div class="text">Subscribe now! and receive all the information about our services, projects, blogs, human talent and much more. You just have to enter your email, come on animate.</div>
                          <form action="#" method="post" class="subscribe-form">
                              <div class="form-group">
                                  <input type="email" name="email" placeholder="Enter Your Email" required="">
                                  <button type="submit" class="theme-btn-two">Subscribe Now</button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
    <!-- subscribe-style-five end -->

@endsection
