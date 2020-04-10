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
                                        <h4>Preguntas Frecuentes</h4>
                                        <span
                                            >En esta sección se encuentran todas
                                            las preguntas frecuentes</span
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
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
                                                :to="{ name: 'Answer' }"
                                                >responder las preguntas
                                                </router-link
                                            >
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                           <div class="page-body" style="padding-bottom:10px;">
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">correo</th>
                                        <th scope="col">nombre</th>
                                        <th scope="col">pregunta</th>
                                        <th scope="col">acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr  v-for="faq in faqs" v-bind:key="faq.id">
                                        <th >{{faq.id}}</th> 
                                        <td>{{faq.email}}</td>
                                         <td>{{faq.name}}</td>
                                        <td>{{faq.questions}}</td>
                                        <td>
                                             <a class="btn btn-xs btn-info" @click="showModal"><i class="fa fa-pencil"></i></a>
                                             <a class="btn btn-xs btn-danger" href="#"><i class="fa fa-pencil"></i></a>
                                        </td>
                                        </tr>
                                      
                                    </tbody>
                                </table>      
                         </div>
                         <b-modal ref="modal-1" hide-backdrop content-class="shadow" :title="modaldata.name" hide-footer>
                                <div class="col-md-12">
                                    <div style="border-top-color: #00a65a !important;position: relative;border-radius: 3px; background: #ffffff;border-top: 3px solid #d2d6de; margin-bottom: 20px;width: 100%; box-shadow: 0 1px 1px rgba(0,0,0,0.1);" class="box box-primary">
                                            <div class="box-header" style="color: #444;display: block;  padding: 10px; position: relative;border-bottom: 1px solid #f4f4f4;">
                                                    <div class="box-title" style="display: inline-block; font-size: 18px;  margin: 0; line-height: 1;">
                                                    responde una nueva pregunta
                                                    </div>
                                            </div>
                                            <div class="box-body" style="border-top-left-radius: 0;border-top-right-radius: 0;border-bottom-right-radius: 3px;border-bottom-left-radius: 3px;padding: 10px;">
                                                <div class="form-group">
                                                  
                                                      
                                                 </div>
                                               </div>
                                            <div class="form-group">
                                                <label for="">respuesta</label>
                                                <ckeditor :editor="editor" rows="15"  v-model="name"></ckeditor>
                                            </div>      
                                     </div>
                                </div>
                               
                               <div class="modal-footer">  
                                   <a @click="saveAnswer" style="color:white" class="btn btn-success">Guardar</a>
                               </div>
                         </b-modal>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
  import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
   import Axios from "axios";
   import toastr from "toastr";
   import Datepicker from 'vuejs-datepicker';
   import {en, es} from 'vuejs-datepicker/dist/locale'
   import moment from "moment";
   import { BModal, VBModal } from 'bootstrap-vue'
   import { required, minLength, sameAs } from 'vuelidate/lib/validators'
     import { BFormSelect, BFormSelectOption } from 'bootstrap-vue'

    export default {
        components: {
            Datepicker,
             'b-select': BFormSelect,
            'b-select-option': BFormSelectOption,
            'b-modal': BModal
        },
        directives: {
            // Note that Vue automatically prefixes directive names with `v-`
            'b-modal': VBModal
        },

   
        mounted() {
            this.getFaqs();

        },
        data(){

            return {
               
                editor: ClassicEditor,
                modaldata:{},
                name:null,
                faq_id:null,
                faqs:[]
            }
        },

        methods:{
          
             async getFaqs() {
                await Axios.get('/api/faqs',{headers:{'Authorization':this.$session.get('Authorization'), 'Accept':'application/json'}}).then(res =>{
                    
                    this.faqs = res.data;
                     console.log(this.faqs);
                }).catch(err =>{
                    console.log(err);
                })
            },
              showModal(s) {
                this.modaldata=s
                this.$refs['modal-1'].show()
            },
             async saveAnswer(e) {
                let me =this;
                let url = '/api/answer' //Ruta que hemos creado para enviar una usuario y guardarlo
                me.$v.$touch()
                if (me.$v.$invalid) {
                    me.submitStatus = 'ERROR'
                } else {
                    Axios.defaults.headers.post['Content-Type'] = 'multipart/form-data';
                    Axios.defaults.headers.post['Authorization'] = this.$session.get('Authorization');
                    await Axios.post(url,{ //estas variables son las que enviaremos para que crear el usuario
                        'name':me.name,
                        'faq_id':me.faq_id,
                       
                    }).then(function (res) {
                        me.clearForm()
                        toastr.success('Usuario registrado');
                        me.getUsers()
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
                }
                e.preventDefault();

            },
            async deleteFaq(id) {
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
                .confirm("Está seguro de eliminar esta pregunta?", options)
                .then(async function(dialog) {
                    await Axios.delete(`/api/faqs/` + id, {
                        headers: {
                            Accept: "application/json",
                            Authorization: auth.$session.get("Authorization")
                        }
                    })
                        .then(res => {
                            auth.getFaqs();
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

