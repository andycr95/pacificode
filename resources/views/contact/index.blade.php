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
        <form action="{{route('createContact')}}"  method="post">
          @csrf
            <div class="form-group">
              <input type="text" class="form-control" name="nombre" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="email" placeholder="Your Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="tema" placeholder="Subject">
            </div>
            <div class="form-group">
              <textarea   cols="30" rows="7" name="mensaje" class="form-control" placeholder="Message"></textarea>
            </div>
           
            <button type="submit" class="btn btn-success"><i class="fa fa-save fa-2x"></i> Guardar</button>
            
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
