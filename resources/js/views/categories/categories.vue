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
                                        <h4>Categorias</h4>
                                        <span
                                            >En esta sección se encuentran todas
                                            las categorias</span
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <router-link
                                                :to="{ name: 'admin' }"
                                            >
                                                <i
                                                    class="feather icon-home"
                                                ></i>
                                            </router-link>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <router-link
                                                :to="{ name: 'categories' }"
                                                >categories</router-link
                                            >
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="page-body"
                        v-for="category in categories"
                        v-bind:key="category.id"
                        style="padding-bottom:10px;"
                    >
                         <div class="card">
                        <div class="card-header">
                            {{category.created_at}}
                        </div>
                        <div class="card-body">
                            <h5 class="card-title mb-3">{{category.name}}</h5>
                          <span class="btn btn-outline-primary" @click="deleteCategory(category.id)">eliminar</span>
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
            this.getCategories();

        },
        data(){

            return {
                modaldata:{},
               categories:[]
            }
        },

        methods:{
          
             async getCategories() {
                await Axios.get('/api/categories',{headers:{'Authorization':this.$session.get('Authorization'), 'Accept':'application/json'}}).then(res =>{
                    
                    this.categories = res.data;
                     console.log(this.categories);
                }).catch(err =>{
                    console.log(err);
                })
            },
              showModal(s) {
                this.modaldata=s
                this.$refs['modal-1'].show()
            },
            async deleteCategory(id) {
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
                .confirm("Está seguro de eliminar esta categoria?", options)
                .then(async function(dialog) {
                    await Axios.delete(`/api/categories/` + id, {
                        headers: {
                            Accept: "application/json",
                            Authorization: auth.$session.get("Authorization")
                        }
                    })
                        .then(res => {
                            auth.getCategories();
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

