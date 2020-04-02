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
                                        <h4>Projects</h4>
                                        <span>En esta sección se encuentran todos los proyectos del portafolio</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <router-link :to="{name: 'admin'}"> <i class="feather icon-home"></i> </router-link>
                                        </li>
                                        <li class="breadcrumb-item"><router-link :to="{name: 'projects'}">Projects</router-link>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-body" v-for="p in projects" v-bind:key="p.id" style="padding-bottom:10px;">
                        <div class="row">
                            <div class="col-md-12">
                                <div>
                                    <div class="bg-white p-relative">
                                        <div class="card-block">
                                            <div class="wall-elips">
                                              <span class="dropdown-toggle addon-btn text-muted f-right wall-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip"></span>
                                              <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                <router-link class="dropdown-item":to="{name: 'updateproject',params: {id: p.id}}">Actualizar Proyecto</router-link>
                                                <a class="dropdown-item" @click="deleteProject(p.id)">Eliminar Proyecto</a>
                                              </div>
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
                                                    <div class="chat-header">{{p.project_autor}}</div>
                                                    <div class="f-13 text-muted">{{p.created_at}}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="lightgallery" class="lightgallery-popup">
                                          <a href="">
                                              <img :src="p.project_photo" class="img-fluid width-100" alt="">
                                          </a>
                                        </div>
                                        <div class="card-block">
                                            <div class="timeline-details">
                                                <div class="chat-header">{{p.project_title}}</div>
                                                <p class="text-muted">{{p.project_extract}}</p>
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
import Axios from "axios";
import Toastr from "toastr";
    export default {
        mounted() {
          this.getProjects()
        },
        data(){
            return {
                projects:[],
                pagination: {}
            }
        },
        methods:{
             async getProjects() {
                await Axios.get('/api/projects').then(res =>{

                 this.projects = res.data;
                  console.log(this.projects);
             }).catch(err =>{
                 console.log(err);
             })
          },async deleteProject(id) {
              let options = {
                  html: false,
                  loader: false,
                  reverse: false,
                  cancelText: "Cancelar",
                  animation: "zoom",
                  type: "fade",
                  clicksCount: 3,
                  backdropClose: true,
                  customClass: ""
              };
              let auth = this;
              this.$dialog
                  .confirm("Está seguro de eliminar este proyecto?", options)
                  .then(async function(dialog) {
                      await Axios.delete(`/api/project/` + id, {
                          headers: {
                              Accept: "application/json",
                              Authorization: auth.$session.get("Authorization")
                          }
                      }).then(res => {
                              auth.getProjects();
                              Toastr.info(res.data);
                          })
                          .catch(err => {
                              console.log(err);
                          });
                  });
                }
              }
            }
</script>
