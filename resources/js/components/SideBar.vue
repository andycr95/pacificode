<template>
    <nav class="pcoded-navbar">
        <div class="pcoded-inner-navbar main-menu">
            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu" :class="{ 'pcoded-trigger': $route.name == 'users', 'pcoded-trigger': $route.name == 'home'}" >
                    <a href="javascript:void(0)">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li :class="{ 'pcoded-trigger': $route.name == 'home'}">
                            <router-link :to="{name: 'home'}">
                                <span class="pcoded-mtext">Inicio</span>
                            </router-link>
                        </li>
                        <li :class="{ 'pcoded-trigger': $route.name == 'users'}">
                            <router-link :to="{name: 'users'}">
                                <span class="pcoded-mtext">Usuarios</span>
                            </router-link>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu" :class="{ 'pcoded-trigger': $route.name == 'posts', 'pcoded-trigger': $route.name == 'newpost'}">
                    <a href="javascript:void(1)">
                        <span class="pcoded-micon"><i class="feather icon-message-square"></i></span>
                        <span class="pcoded-mtext">Blog</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li :class="{ 'active': $route.name == 'posts'}">
                            <router-link :to="{name: 'posts'}" >
                                <span class="pcoded-mtext">posts</span>
                            </router-link>
                        </li>
                        <li  :class="{ 'active': $route.name == 'newpost'}" >
                            <router-link :to="{name: 'newpost'}">
                                <span class="pcoded-mtext">Nuevo post</span>
                            </router-link>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)">
                        <span class="pcoded-micon"><i class="ti-world"></i></span>
                        <span class="pcoded-mtext">Servicios</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <router-link :to="{name: 'services'}">
                                <span class="pcoded-mtext">servicios</span>
                            </router-link>
                        </li>
                        <li class="">
                            <router-link :to="{name: 'newservice'}">
                                <span class="pcoded-mtext">Nuevo servicios</span>
                            </router-link>
                        </li>
                         <li class="">
                            <router-link :to="{name: 'servicefeatures'}">
                                <span class="pcoded-mtext">Nueva caracteristica</span>
                            </router-link>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)">
                        <span class="pcoded-micon"><i class="ti-briefcase"></i></span>
                        <span class="pcoded-mtext">Portfolio</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <router-link :to="{name: 'projects'}">
                                <span class="pcoded-mtext">proyectos</span>
                            </router-link>
                        </li>
                        <li class="">
                            <router-link :to="{name: 'newprojects'}">
                                <span class="pcoded-mtext">Nuevo proyecto</span>
                            </router-link>
                        </li>
                    </ul>
                </li>
            </ul>
              <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)">
                        <span class="pcoded-micon"><i class="ti-comments-smiley"></i></span>
                        <span class="pcoded-mtext">Testimonios</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <router-link :to="{name: 'testimonies'}">
                                <span class="pcoded-mtext">testimonios</span>
                            </router-link>
                        </li>
                        <li class="">
                            <router-link :to="{name: 'newtestimony'}">
                                <span class="pcoded-mtext">Nuevo testimonio</span>
                            </router-link>
                        </li>
                    </ul>
                </li>
            </ul>
             <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)">
                        <span class="pcoded-micon"><i class="ti-layout-grid2"></i></span>
                        <span class="pcoded-mtext">Categorias</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <router-link :to="{name: 'categories'}">
                                <span class="pcoded-mtext">Categorias</span>
                            </router-link>
                        </li>
                        <li class="">
                            <router-link :to="{name: 'newcategory'}">
                                <span class="pcoded-mtext">Nueva Categoria</span>
                            </router-link>
                             
                        </li>
                    </ul>
                </li>
            </ul>

             <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)">
                        <span class="pcoded-micon"><i class="ti-help-alt"></i></span>
                        <span class="pcoded-mtext">preguntas</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <router-link :to="{name: 'faqs'}">
                                <span class="pcoded-mtext">Reguntas</span>
                            </router-link>
                        </li>
                          <li class="">
                            <router-link :to="{name: 'answer'}">
                                <span class="pcoded-mtext">Respuestas</span>
                            </router-link>
                        </li>
                      
                    </ul>
                </li>
            </ul>
             
        </div>
    </nav>
</template>

<script>
    export default {
        mounted() {
        }
    }
</script>
