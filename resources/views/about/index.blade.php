@extends('layouts.layout')

@section('Name_header')
    <div class="col-xl-12 text-center">
        <h1 class="text-center" style="font-weight: 400;font-style: normal;font-size: 4em;">Nosotros</h1>
        <p class="text-center">Inicio - Nosotros</p>
    </div>
@endsection

@section('content')

<section class="welcome_area p_120">
    <div class="container">
       
        
				<div class="row d-flex">
					<div class="col-md-5 order-md-last wrap-about align-items-stretch">
						<div class="wrap-about-border">
							
							<div class="text">
                                <img src="img/24.jpg" alt="" class="img-fluid mb-1">
								
							</div>
                        </div>
                        
					</div>
                    <div class="col-md-7 wrap-about pr-md-4 ftco-animate">
                        <h2 class="mb-4">¿Quienes Somos?</h2>
                        <p>Somos una empresa de desarrollo de aplicaciones móviles, expertos en creación de páginas web y desarrolladores web app. Ayudamos a crear sitios web con el mejor precio-calidad. 

                            Agencia de diseño especializada en desarrollar apps, diseño web y tiendas online..</p>            
                    </div>
                   
                </div>
       
    </div>

    

</section>

<section class="ftco-section ftco-counter">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2 d-flex">
        <div class="col-md-6 align-items-stretch d-flex">
            <img src="img/22.jpg" alt="" class="img-fluid mb-3">
                
        </div>
  <div class="col-md-6 heading-section ftco-animate pl-lg-5 pt-md-0 pt-5">
    <h2 class="mb-4">Bienvenidos A Pacificode</h2>
    <p>Somos PACIFICODE, un equipo de profesionales que brinda servicios
        a medida en desarrollo de software web y marketing digital.
        Tenemos más de 15 años de experiencia, un extenso portafolio de servicios y un gran número de amigos
        a quienes llamamos respetuosamente “Clientes”.
        Pensamos que la tecnología debe ser intuitiva, usable, práctica y sobre todo adaptable a las
        necesidades de su operación. La tecnología debe automatizar procesos,
        no volverlos más complicados.</p>  

        <p><a href="{{ route('contact')}}" class="btn btn-primary py-3 px-4">Contact us</a></p>

</div>

</div>	
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 style="font-weight: 600; font-size: 20px;">Mision</h3>
                <p>Contribuir con las organizaciones mediante la ejecución exitosa de proyectos de Desarrollo e Infraestructura de Software, 
                    entregando un resultado superior que nos permita construir relaciones de largo plazo con ellas..</p>
            </div>
            <div class="col-md-6">
                <h3 style="font-weight: 600; font-size: 20px;">Vision</h3>
                <p>Queremos ser una de las diez mejores empresas de consultoría y desarrollo de software de la Argentina,
                     y posicionarnos como la mejor opción para las empresas que requieren desarrollar soluciones a medida en 
                     la Argentina, en la región o en cualquier parte del mundo..</p>
            </div>
            
        </div>
    </div>
</section>







@endsection
