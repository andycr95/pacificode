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
                                    <h4>crear un nuevo testimonio</h4>
                                    <span>En esta sección se crearan los testimonios</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <router-link :to="{name: 'admin'}"><i class="feather icon-home"></i> </router-link>
                                    </li>
                                    <li class="breadcrumb-item"><router-link :to="{name: 'testimonies'}">Testimonios</router-link>
                                    </li>
                                    <li class="breadcrumb-item"><router-link :to="{name: 'newtestimony'}">Testimonios</router-link>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
           

                <b-modal ref="modal-1" hide-backdrop content-class="shadow" :title="modaldata.testimony_name" hide-footer>
                    
                        <div  id="lightgallery" class="card-img-top mb-3" > 
                            <img :src="modaldata.testimony_photo"  class="img-fluid width-100"  alt="" >
                            <p class="mb-3" v-html="modaldata.testimony_extract"></p>
                        </div>
                        

                    <div class="modal-body">
                        <p v-html="modaldata.testimony_body"></p>
                    </div>
                    <div class="modal-footer">
                    <p>{{modaldata.created_at}}</p>
                    </div>
                </b-modal>

                <div class="page-body">
                    <div class="card-block">
                        <div class="card "  v-for="testimony in testimonies" v-bind:key="testimony.id">
                            <div class="card-header text-center">
                                {{testimony.created_at}}
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{testimony.testimony_extract}}</h5>
                                <p class="card-text">{{testimony.testimony_body}}</p>
                                <a href="#" class="btn btn-primary">actualiar</a>
                                  <a href="#" class="btn btn-primary">eliminar</a>
                            </div>
                            <div class="card-footer text-muted">
                                testimony.updated_at
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
            this.getTestimonies();

        },
        data(){

            return {
                modaldata:{},
                testimonies:[]
            }
        },

        methods:{
            showModal(s) {
                this.modaldata=s
                this.$refs['modal-1'].show()
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
