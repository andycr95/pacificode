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
        <div class="row justify-content-center mb-3 pb-2 d-flex">
        <div class="col-md-6 align-items-stretch d-flex">
            <img src="img/about/dise.jpg" alt="" class="img-fluid mb-3">
                
        </div>
        <div class="col-xl-6 col-lg-6">
            <div class="welcome_docmed_info">
                <h2>Bienvenidos A Pacificode</h2>
                <h3>Empresa Especializada En<br>
                    Apps y Páginas Web</h3>
                    <p>Somos PACIFICODE, un equipo de profesionales que brinda servicios
                        a medida en desarrollo de software web y marketing digital.
                        Tenemos más de 15 años de experiencia, un extenso portafolio de servicios y un gran número de amigos
                        a quienes llamamos respetuosamente “Clientes”.
                        Pensamos que la tecnología debe ser intuitiva, usable, práctica y sobre todo adaptable a las
                        necesidades de su operación. La tecnología debe automatizar procesos,
                        no volverlos más complicados.</p>  
                <ul>
                    <li> <i class="flaticon-right"></i> Desarrollo de aplicaciones multiplataforma </li>
                    <li> <i class="flaticon-right"></i> Diseño de páginas web.</li>
                    <li> <i class="flaticon-right"></i>Servicios de diseño web y apps para empresas. </li>
                    <li> <i class="flaticon-right"></i> Creación de Tiendas Online. </li>
                </ul>
                <a href="#" class="boxed-btn3-white-2">Learn More</a>
            </div>
        </div>

</div>	
    </div>
</section>




<hr>



<!-- business_expert_area_start  -->
<div class="business_expert_area py-5">
    <div class="business_tabs_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <ul class="nav" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                        aria-selected="true">Nuestra Mision</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                        aria-selected="false">Nuestra Vision</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                        aria-selected="false">Objetivo Principal</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="border_bottom">
                <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            
                                <div class="row align-items-center">
                                        <div class="col-xl-6 col-md-6">
                                            <div class="business_info">
                                                <div class="icon">
                                                    <i class="flaticon-first-aid-kit"></i>
                                                </div>
                                                <h3>Nuestra Mision</h3>
                                                <p>Contribuir con las organizaciones mediante la ejecución exitosa de proyectos de Desarrollo e Infraestructura de Software, 
                                                    entregando un resultado superior que nos permita construir relaciones de largo plazo con ellas..</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6">
                                            <div class="business_thumb">
                                                <img src="img/about/mision.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row align-items-center">
                                        <div class="col-xl-6 col-md-6">
                                            <div class="business_info">
                                                <div class="icon">
                                                    <i class="flaticon-first-aid-kit"></i>
                                                </div>
                                                <h3>Nuestra Vision</h3>
                                                <p>Queremos ser una de las diez mejores empresas de consultoría y desarrollo de software de la Argentina,
                                                    y posicionarnos como la mejor opción para las empresas que requieren desarrollar soluciones a medida en 
                                                    del mundo, en la región o en cualquier parte del mundo..</p>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6">
                                            <div class="business_thumb">
                                                <img src="img/about/vision.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="row align-items-center">
                                        <div class="col-xl-6 col-md-6">
                                            <div class="business_info">
                                                <div class="icon">
                                                    <i class="flaticon-first-aid-kit"></i>
                                                </div>
                                                <h3></h3>
                                                <p>Esteem spirit temper too say adieus who direct esteem.
                                                    It esteems luckily picture placing drawing. Apartments frequently or motionless on
                                                    reasonable projecting expression.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6">
                                            <div class="business_thumb">
                                                <img src="img/about/diseño.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                        </div>
                      </div>
        </div>
    </div>
</div>
<!-- business_expert_area_end  -->









@endsection
