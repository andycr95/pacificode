<template>
    <nav class="pcoded-navbar">
        <div class="pcoded-inner-navbar main-menu">
            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu active pcoded-trigger">
                    <a href="javascript:void(0)">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <router-link :to="{name: 'home'}">
                                <span class="pcoded-mtext">Inicio</span>
                            </router-link>
                        </li>
                        <li class="">
                            <router-link :to="{name: 'users'}">
                                <span class="pcoded-mtext">Usuarios</span>
                            </router-link>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)">
                        <span class="pcoded-micon"><i class="feather icon-message-square"></i></span>
                        <span class="pcoded-mtext">Blog</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <router-link :to="{name: 'posts'}">
                                <span class="pcoded-mtext">posts</span>
                            </router-link>
                        </li>
                        <li class="">
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
                        <span class="pcoded-micon"><i class="feather icon-message-square"></i></span>
                        <span class="pcoded-mtext">Servicios</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <router-link :to="{name: 'services'}">
                                <span class="pcoded-mtext">servicios</span>
                            </router-link>
                        </li>
                        <li class="">
                            <router-link :to="{name: 'newservices'}">
                                <span class="pcoded-mtext">Nuevo servicios</span>
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
