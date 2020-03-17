@extends('layouts.layout')

@section('Name_header')
    <div class="col-xl-12 text-center">
        <h1 class="text-center" style="font-weight: 400;font-style: normal;font-size: 4em;">Contactanos</h1>
        <p class="text-center">Inicio - Contatanos</p>
    </div>
@endsection

@section('content')



  <section class="ftco-section contact-section">
    <div class="container">
      <div class="row d-flex mb-5 contact-info justify-content-center">
          <div class="col-md-8">
              <div class="row mb-5">
                
              </div>
        </div>
      </div>
          <!--Section: Contact v.1-->


        </section>





  <section class="ftco-section contact-section ftco-degree-bg">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
        <div class="col-md-12 mb-4">
          <h2 class="h4">Contact Information</h2>
        </div>
        <div class="w-100"></div>
        <div class="col-md-3">
          <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
        </div>
        <div class="col-md-3">
          <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
        </div>
        <div class="col-md-3">
          <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
        </div>
        <div class="col-md-3">
          <p><span>Website</span> <a href="#">yoursite.com</a></p>
        </div>
      </div>
      <div class="row block-9">
        <div class="col-md-6 pr-md-5">
          <form action="#">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Subject">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="col-12 col-md-6 col-xl-7 text-left flex-grow-1 flex-shrink-1 flex-fill justify-content-start align-items-center align-content-center" style="padding-left: 0;padding-right: 0;margin: 0;">
            <div class="text-left" style="padding-top: 50px;"><a data-bs-hover-animate="pulse" class="btn btn-sm animated-button victoria-one" href="#">CONTÁCTANOS<i class="fa fa-angle-double-right"></i></a></div>
            </div> 
            </form>
        
        </div>

        <div class="col-md-6" >
           <!--Google map-->
  <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 300px">
    <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
      style="border:0" allowfullscreen></iframe>
  </div>
  
  <!--Google Maps-->
        </div>
      </div>
    </div>
  </section>



@endsection
