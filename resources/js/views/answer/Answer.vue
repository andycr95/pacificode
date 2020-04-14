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
                                        <h4>en estas secion se responden las preguntas</h4>
                                     
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <router-link :to="{name: 'admin'}"><i class="feather icon-home"></i> </router-link>
                                        </li>
                                        <li class="breadcrumb-item"><router-link :to="{name: 'faqs'}">Sevicios</router-link>
                                        </li>
                                      
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div style="border-top-color: #00a65a !important;position: relative;border-radius: 3px; background: #ffffff;border-top: 3px solid #d2d6de; margin-bottom: 20px;width: 100%; box-shadow: 0 1px 1px rgba(0,0,0,0.1);" class="box box-primary">
                                        <div class="box-header" style="color: #444;display: block;  padding: 10px; position: relative;border-bottom: 1px solid #f4f4f4;">
                                            <div class="box-title" style="display: inline-block; font-size: 18px;  margin: 0; line-height: 1;">
                                            responde una nueva pregunta
                                            </div>
                                        </div>
                                        <div class="box-body" style="border-top-left-radius: 0;border-top-right-radius: 0;border-bottom-right-radius: 3px;border-bottom-left-radius: 3px;padding: 10px;">
                                            <div class="form-group">
                                                <label for="category_service"></label>
                                                    <div class="form-group">
                                                        <label for="tags-post">pregunta</label>
                                                        <b-select v-model="faq_id" :options="faqs" class="form-control" style="width:100%" value-field="id" text-field="questions"></b-select>
                                                    </div>
                                                </div>
                                           </div>
                                            <div class="form-group">
                                                <label for="">respuesta</label>
                                                <ckeditor :editor="editor" rows="15"  v-model="name"></ckeditor>
                                            </div>
                                           
                                                <div style="padding: 0 5px 10px;">
                                                    <button type="button" style="padding:5px;background-color: #3c8dbc; border-color: #367fa9;" @click="saveAnswer" class="btn btn-primary btn-lg btn-block">Guardar respuesta</button>
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
    import toastr from "toastr";
    import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
    import Axios from 'axios';
    import { BFormSelect, BFormSelectOption } from 'bootstrap-vue'
    export default {
        components: {
            'b-select': BFormSelect,
            'b-select-option': BFormSelectOption
        },
        mounted() {

            this.getFaqs()
        },
        data(){
            return {
                editor: ClassicEditor,
                name: null,
               faq_id:null,
                faqs: [],
               
            }
        },
        methods: {

            getFaqs(){
                Axios.get('/api/faqs').then(res =>{
                    this.faqs = res.data
                })
            },
           
            async saveAnswer(e) {
                let me =this;
                let url = '/api/answer' //Ruta que hemos creado para enviar una usuario y guardarlo
                this.$v.$touch()
                if (this.$v.$invalid) {
                    this.submitStatus = 'ERROR'
                } else {
                    console.log(this.$session.get('Authorization'));
                    Axios.defaults.headers.post['Content-Type'] = 'multipart/form-data';
                    Axios.defaults.headers.post['Authorization'] = this.$session.get('Authorization');
                    await Axios.post(url,{ //estas variables son las que enviaremos para que crear el usuario
                    'name':this.name,
                    'faq_id':this.faq_id,
                    }).then(function (res) {
                        console.log(res);
                        toastr.success('respuesta guardada');
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
                }
                e.preventDefault();

            },
        },
        validations: {

        }
    }
</script>
