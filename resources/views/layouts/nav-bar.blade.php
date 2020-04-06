<nav class="main-menu navbar-expand-md navbar-light">
    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
        <ul class="navigation clearfix">
            <li {{ request()->is('servicios') ? 'class=current' : ''}}><a href="/">Inicio</a></li>
            <li class="dropdown"><a href="{{route('services')}}">Servicios</a>
               
                
            
            </li>
            <li {{ request()->is('portfolio') ? 'class=current' : ''}} ><a href="{{route('portfolio')}}">Portafolio</a></li>
            <li {{ request()->is('about') ? 'class=current' : ''}}><a href="{{route('about')}}">Nosotros</a></li>
            <li {{ request()->is('blogs') ? 'class=current' : ''}}><a href="{{route('blogs')}}">Blog</a></li>
            <li {{ request()->is('contact') ? 'class=current' : ''}}><a href="{{route('contact')}}">Contácto</a></li>
        </ul>
    </div>
</nav>
