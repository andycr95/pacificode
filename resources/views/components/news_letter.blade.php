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
                        <div class="sec-title"><h2>Suscríbete a nuestro boletín</h2></div>
                        <div class="text">Te sorprenderás con nuestros servicios de la más alta calidad, anímate ya. </div>

                        <form action="{{route('createSuscripcion')}}" method="post" class="subscribe-form">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Introduce tu correo electrónico" required="">
                                <button type="submit" class="theme-btn-two">Suscribirse</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- subscribe-style-five end -->
