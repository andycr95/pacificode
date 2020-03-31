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
                                        <h4>crear un nuevo servicio</h4>
                                        <span>En esta sección se crearan los servicios</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <router-link :to="{name: 'admin'}"><i class="feather icon-home"></i> </router-link>
                                        </li>
                                        <li class="breadcrumb-item"><router-link :to="{name: 'services'}">Sevicios</router-link>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Nuevo servicio</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div style="border-top-color: #00a65a !important;position: relative;border-radius: 3px; background: #ffffff;border-top: 3px solid #d2d6de; margin-bottom: 20px;width: 100%; box-shadow: 0 1px 1px rgba(0,0,0,0.1);" class="box box-primary">
                                    <div class="box-header" style="color: #444;display: block;  padding: 10px; position: relative;border-bottom: 1px solid #f4f4f4;">
                                        <div class="box-title" style="display: inline-block; font-size: 18px;  margin: 0; line-height: 1;">
                                            Crear un servicio
                                        </div>
                                    </div>
                                    <div class="box-body" style="border-top-left-radius: 0;border-top-right-radius: 0;border-bottom-right-radius: 3px;border-bottom-left-radius: 3px;padding: 10px;">
                                        <div class="form-group">
                                          <label for="title-service">Titulo del servicio</label>
                                          <input type="text" class="form-control" name="name-service" v-model="service_name" aria-describedby="emailHelpId" placeholder="ingresa el titulo del servicio">
                                        </div>
                                        <div class="form-group">
                                          <label for="">Extracto del servicio</label>
                                          <textarea class="form-control" name="extract-service" v-model="service_extract" rows="5" placeholder="ingresa un extracto del servicio"></textarea>
                                        </div>
                                        <div class="form-group">
                                          <label for="">Contenido del servicio</label>
                                          <ckeditor :editor="editor" rows="15"  v-model="service_body"></ckeditor>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-md-4">
                                <div style="border-top-color: #00a65a;position: relative;border-radius: 3px; background: #ffffff;border-top: 3px solid #d2d6de; margin-bottom: 20px;width: 100%; box-shadow: 0 1px 1px rgba(0,0,0,0.1);">
                                    <div style="color: #444;display: block;  padding: 10px; position: relative;border-bottom: 1px solid #f4f4f4;">
                                        <div style="display: inline-block; font-size: 18px;  margin: 0; line-height: 1;">
                                            Adicionales
                                        </div>
                                    </div>
                                    <div style="border-top-left-radius: 0;border-top-right-radius: 0;border-bottom-right-radius: 3px;border-bottom-left-radius: 3px;padding: 10px;">
                                        <div class="form-group">
                                            <img v-if="show_photo" style="width:100%" v-bind:src="service_photo" alt="" srcset="">
                                          <label for="image-service">Imagen principal del servicio</label>
                                          <input type="file" class="form-control-file"  name="service-post" v-on:change="onImageChange" placeholder="" aria-describedby="fileHelpId">
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label for="category_service"></label>
                                            <div class="form-group">
                                                <label for="tags-post">Categorías</label>
                                                <b-select v-model="category_service" :options="categories" class="form-control" style="width:100%" value-field="id" text-field="name"></b-select>
                                            </div>
                                        </div>
                                        <hr>
                                       
                                    </div>
                                    <div style="padding: 0 5px 10px;">
                                        <button type="button" style="padding:5px;background-color: #3c8dbc; border-color: #367fa9;" @click="saveService" class="btn btn-primary btn-lg btn-block">Guardar servicio</button>
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
    import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
    import Axios from 'axios';
   import { BFormSelect, BFormSelectOption } from 'bootstrap-vue'
    export default {
        components: {
            'b-select': BFormSelect,
            'b-select-option': BFormSelectOption
        },
        mounted() {
           
            this.getCategories()
        },
        data(){
            return {
                editor: ClassicEditor,
                service_body: '',
                service_photo:null,
                show_photo:false,
                categories: [],
                category_service:null,
                service_extract:null,
                service_title:null
            }
        },
        methods: {
          
            getCategories(){
                Axios.get('/api/categories').then(res =>{
                    this.categories = res.data
                })
            },
            onImageChange(e){
                let input = e.target;
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    let vm = this;
                    reader.onload = e => {
                        this.previewImageUrl = e.target.result;
                        vm.post_photo = e.target.result;
                        vm.show_photo = true;
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            },
            async saveService(e) {
                let me =this;
                let url = '/api/service' //Ruta que hemos creado para enviar una usuario y guardarlo
                this.$v.$touch()
                if (this.$v.$invalid) {
                    this.submitStatus = 'ERROR'
                } else {
                    console.log(this.$session.get('Authorization'));
                    Axios.defaults.headers.post['Content-Type'] = 'multipart/form-data';
                    Axios.defaults.headers.post['Authorization'] = this.$session.get('Authorization');
                    await Axios.post(url,{ //estas variables son las que enviaremos para que crear el usuario
                    'service_name':this.service_name,
                    'service_photo':this.service_photo,
                    'service_extract':this.service_extract,
                    'service_body':this.service_body,
                    'category_service':this.category_service,
                    }).then(function (res) {
                        console.log(res);
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
