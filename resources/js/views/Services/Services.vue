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
                                <div class="card card mb-3">
                                    <h5 class="card-header">{{service.created_at}}</h5>
                                            <div class="card-body">
                                                   
                                                <h5 class="card-title">{{service.service_name}}</h5>
                                                <p class="card-text">{{service.service_extract}}</p>

                                                <router-link :to="{ name: 'updateservice', params: { id: service.id }}">
                                                <span class="btn btn-outline-primary">Actualizar</span>
                                                </router-link>
                                                <span class="btn btn-outline-primary"  @click="showModal(service)">detalles</span>
                                                <span class="btn btn-outline-primary" @click="deleteService(service.id)">eliminar</span>
                                            </div>
                                </div>
                             </div>
                            </div>
                        </div>

                      

                            <b-modal ref="modal-1" hide-backdrop content-class="shadow" :title="modaldata.service_name" hide-footer>
                                
                                 <div  id="lightgallery" class="card-img-top mb-3" > 
                                     <img :src="modaldata.service_photo"  class="img-fluid width-100"  alt="" >
                                 </div>

                                <div class="modal-body">
                                    <p v-html="modaldata.service_body"></p>
                                </div>
                                <div class="modal-footer">
                                <p>{{modaldata.created_at}}</p>
                                </div>
                            </b-modal>
                        
             </div>
    
        </div>
    </div>
</template>

<script>
import Axios from "axios";
import Datepicker from 'vuejs-datepicker';
import { BModal, VBModal } from 'bootstrap-vue'
import { required, minLength, sameAs } from 'vuelidate/lib/validators'
    export default {
        components: {
            Datepicker,
            'b-modal': BModal
        },
        directives: {
            // Note that Vue automatically prefixes directive names with `v-`
            'b-modal': VBModal
        },

   
        mounted() {
            this.getServices();

        },
        data(){

            return {
                modaldata:{},
                services:[]
            }
        },

        methods:{
          
             async getServices() {
                await Axios.get('/api/services',{headers:{'Authorization':this.$session.get('Authorization'), 'Accept':'application/json'}}).then(res =>{
                    
                    this.services = res.data;
                     console.log(this.services);
                }).catch(err =>{
                    console.log(err);
                })
            },
              showModal(s) {
                this.modaldata=s
                this.$refs['modal-1'].show()
            },
            async deleteService(id) {
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
                .confirm("Está seguro de eliminar esteservicio?", options)
                .then(async function(dialog) {
                    await Axios.delete(`/api/service/` + id, {
                        headers: {
                            Accept: "application/json",
                            Authorization: auth.$session.get("Authorization")
                        }
                    })
                        .then(res => {
                            auth.getServices();
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

