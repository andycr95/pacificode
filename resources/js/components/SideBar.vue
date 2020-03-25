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
                            <router-link :to="{name: 'Inicio'}">
                                <span class="pcoded-mtext">Inicio</span>
                            </router-link>
                        </li>
                        <li class="">
                            <router-link :to="{name: 'Usuarios'}">
                                <span class="pcoded-mtext">Usuarios</span>
                            </router-link>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu active pcoded-trigger">
                    <a href="javascript:void(0)">
                        <span class="pcoded-micon"><i class="feather icon-message-square"></i></span>
                        <span class="pcoded-mtext">Blog</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="active">
                            <router-link :to="{name: 'Usuarios'}">
                                <span class="pcoded-mtext">posts</span>
                            </router-link>
                        </li>
                        <li class="">
                            <a href="dashboard-crm.htm">
                                <span class="pcoded-mtext">Nuevo post</span>
                            </a>
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
            console.log('Sidebar mounted.')
        }
    }
</script>
