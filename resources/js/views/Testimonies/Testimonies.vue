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
                                        <h4>Testimonios</h4>
                                        <span>En esta sección se encuentran todos los testimonios</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Testimonios</a>
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
                                           <tr v-for="testimonies in testimonies" v-bind:key="testimonies.id">
                                               <td><p>{{testimonies.testimony_name}}</p></td>
                                               <td><p>{{testimonies.testimony_extract}}</p></td>
                                              
                                               
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
            this.getTestimonies();

        },
        data(){

            return {
                testimonies:[]
            }
        },

        methods:{
            showModal(){

            },
             async getTestimonies() {
                await Axios.get('/api/testimonies',{headers:{'Authorization':this.$session.get('Authorization'), 'Accept':'application/json'}}).then(res =>{
                    
                    this.testimonies = res.data;
                     console.log(this.testimonies);
                }).catch(err =>{
                    console.log(err);
                })
            }
        }
    }
</script>
