<template>
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="page-wrapper">
                    <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <div class="d-inline">
                                        <h4>Servicios</h4>
                                        <span>En esta sección se encuentran todos los Servicios del sistema</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Servicios</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-body"  v-for="service in services" v-bind:key="service.id">
                        <div class="card" >
                            <div class="card-block" >
                              <div class="card">
                                <h5 class="card-header">{{service.created_at}}</h5>
                                <div class="card-body">
                                    <h5 class="card-title">{{service.service_name}}</h5>
                                     <p class="card-text">{{service.service_extract}}</p>
                                     <router-link :to="{ name: 'updateservice', params: { id: service.id }}">
                                         
                                     <span class="btn btn-outline-primary">Actualizar</span>
                                    </router-link>
                                    <router-link :to="{ name: 'updateservice', params: { id: service.id }}">
                                     <span class="btn btn-outline-primary">Actualizar</span>
                                    </router-link>
                                  <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                       detalles
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade"  id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">{{service.service_name}}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>{{service.service_body}}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                  <!-- end modal -->
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
    export default {
        mounted() {
            this.getServices();

        },
        data(){

            return {
                services:[]
            }
        },

        methods:{
            showModal(){

            },
             async getServices() {
                await Axios.get('/api/services',{headers:{'Authorization':this.$session.get('Authorization'), 'Accept':'application/json'}}).then(res =>{
                    
                    this.services = res.data;
                     console.log(this.services);
                }).catch(err =>{
                    console.log(err);
                })
            }
        }
    }
</script>
