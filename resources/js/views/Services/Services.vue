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
                    <div class="page-body">
                        <div class="card">
                            <div class="card-block">
                              
                                <div class="table-responsive dt-responsive">
                                    <table class="table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Extracto</th>
                                                
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <tr v-for="service in services" v-bind:key="service.id">
                                               <td><p>{{service.service_name}}</p></td>
                                               <td><p>{{service.service_extract}}</p></td>
                                               
                                           </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Extracto</th>
                                                
                                               
                                            </tr>
                                        </tfoot>
                                    </table>
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
