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
           
            
            <button type="submit" class="btn btn-outline-success">enviar</button>
            
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

<hr>

<section id="about">
  <div class="container mb-3">
  
    <p class="about-title">Hoy en día es prácticamente imposible vivir sin una página web que te ayude a promocionar tu negocio.
       Una decisión importante al respecto es la relativa a crear la web por tu cuenta o contratar a un experto que sepa lo que hace
        y te entregue el trabajo a medida..</p>
    <div class="row">
      <div class="col-md-6 about">
        <img src="img/26.jpg" alt="" class="img-fluid mb-1">
        
        <ul>
          <li>
            <a href="#" class="text-decoration-none">Conoce nuestra compañia</a>
          </li>
          <li>
            <a href="#" class="text-decoration-none">Nuestros servicios</a>
          </li>
          <li>
            <a href="#" class="text-decoration-none">Hecha un vistaso nuestro blog</a>
          </li>
          
        </ul>
      </div>
        <div class="col-md-6">
          
            <div>
              <div class="accordion" id="accordionExample">
                <div class="text">
                  <h4>Preguntas mas frecuentes</h4>
                </div>
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        ¿Cuánto cuesta desarrollar una app?
                      </button>
                    </h2>
                  </div>
              
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                      No existe un presupuesto para crear una app exacto, sin previo estudio. 
                      Para realizar un presupuesto para aplicaciones móviles en android o iPhone detallado,
                       comenzamos con el estudio personalizado de la idea de cada cliente. Todas las apps web son diferentes,
                        por lo que es necesario detallar todas y cada una de las aplicaciones o funciones que llevaría su proyecto
                         web y nuestro equipo de programadores revisará cada punto.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        ¿Cuánto cuesta diseñar una página web?
                      </button>
                    </h2>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <p>
                          Un diseñador web profesional estimará un coste siguiendo la idea a desarrollar. En nuestra agencia de diseño web AppDesign,
                          ofrecemos el mejor precio del mercado con la calidad que se merece. Utilizamos las últimas herramientas en diseño web y desarrollo a medida.
                         Te detallaremos los pasos que realizamos, ya que detrás de cada presupuesto de app web hay un estudio y trabajo realizado por nuestro equipo que nos gustaría compartir con nuestros clientes.
                        </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Pasos para presupuestar tu página web, app móvil o desarrollo personalizado
                      </button>
                    </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                      <p>
                        Tras recibir el formulario con todos los detalles de parte del cliente, realizamos un estudio de la competencia, 
                        tanto para el diseño de una página web como el desarrollo de aplicaciones móviles. Si por ejemplo nuestro cliente 
                        necesita una landing page en base a un negocio de una asesoría online en Madrid, buscamos las principales posiciones 
                        en buscadores de las empresas de la competencia, ya que estas empresas funcionan y la finalidad será construir una web 
                        rentable para nuestros clientes, con un diseño actual y optimizado. Esto también nos ayudará a mejorar tu idea,
                         dando asesoramiento y aportando ideas que podrían ser útiles para tus futuros clientes potenciales.
                      </p>
                      <p>
                        El siguiente que realizamos en nuestra agencia es analizar el código de la web de ejemplo que nos ha enviado el cliente, 
                        un diseño ya sea de la competencia o de cualquier otra web a la que el cliente le gusta, analizamos el código para ver si 
                        está actualizada a día de hoy ya que muchos de las web de ejemplo que nos envían no vienen con estructura responsive,
                         que hace adaptar el tamaño de la pantalla para dispositivos móviles y tablets, algo que está penalizando Google desde hace unos años.
                          Hoy en día todos nuestros diseños montan este tipo de programación.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            
        </div>
    </div>
  </div>
</section>




@endsection
