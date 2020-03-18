<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white transparency border-bottom border-light" id="transmenu">
    <div class="container"><a class="navbar-brand text-success" href="#header">&nbsp;PACIFICODE</a><button data-toggle="collapse" class="navbar-toggler collapsed" data-target="#navcol-1"><span></span><span></span><span></span></button>
        <div class="collapse navbar-collapse"
            id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link" href="#">Inicio</a></li>
                <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Servicios</a>
                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Diseño y publicidad</a><a class="dropdown-item" role="presentation" href="#">Software a la medida</a><a class="dropdown-item" role="presentation" href="#">Desarrollo web</a><a class="dropdown-item" role="presentation" href="#">Desarrollo de aplicaciones híbridas</a><a class="dropdown-item" role="presentation" href="#">Asesorias tecnológicas</a></div>
                </li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('about')}}">Nosotros</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('project')}}">Portafolio</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('blogs')}}">Blog</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('contact')}}">Contacto</a></li>
            </ul>
        </div>
    </div>
</nav>
