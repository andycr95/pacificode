<template>
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-header start -->
                    <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <div class="d-inline">
                                        <h4>Posts</h4>
                                        <span>En esta sección se encuentran todos los posts del blog</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <router-link :to="{name: 'admin'}"> <i class="feather icon-home"></i> </router-link>
                                        </li>
                                        <li class="breadcrumb-item"><router-link :to="{name: 'posts'}">Posts</router-link>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div>
                                    <div class="bg-white p-relative">
                                        <div class="input-group wall-elips">
                                            <span class="dropdown-toggle addon-btn text-muted f-right wall-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip"></span>
                                            <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                <a class="dropdown-item" href="#">Remove tag</a>
                                                <a class="dropdown-item" href="#">Report Photo</a>
                                                <a class="dropdown-item" href="#">Hide From Timeline</a>
                                                <a class="dropdown-item" href="#">Blog User</a>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="media">
                                                <div class="media-left media-middle friend-box">
                                                    <a href="#">
                                                        <img class="media-object img-radius m-r-20" src="/files/assets/images/avatar-2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="chat-header">Josephin Doe</div>
                                                    <div class="f-13 text-muted">Hace 50 minutos</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="lightgallery" class="lightgallery-popup">
                                            <div class="" data-responsive="/files/assets/images/timeline/img1.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="/files/assets/images/timeline/img1.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                                                <a href="">
                                                    <img src="/files/assets/images/timeline/img1.jpg" class="img-fluid width-100" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="timeline-details">
                                                <div class="chat-header">Nuevas herramientas de desarrollo web</div>
                                                <p class="text-muted">lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                                    laboris nisi ut aliquip ex ea </p>
                                            </div>
                                        </div>
                                        <div class="card-block b-b-theme b-t-theme social-msg">
                                            <a href="#">
                                                <i class="icofont icofont-heart-alt text-muted"></i>
                                                <span class="b-r-theme">Likes (20)</span>
                                            </a>
                                            <a href="#">
                                                <i class="icofont icofont-comment text-muted"></i>
                                                <span class="b-r-theme">Comentarios (25)</span>
                                            </a>
                                            <a href="#">
                                                <i class="icofont icofont-share text-muted"></i>
                                                <span>Compartido (10)</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {

        },
        data(){
            return {
                ok:null
            }
        },
    }
</script>
