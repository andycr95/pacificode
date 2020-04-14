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
                                        <h4>Nuevo proyecto</h4>
                                        <span>En esta sección se añaden proyectos al portafolio</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <router-link :to="{name: 'admin'}"><i class="feather icon-home"></i> </router-link>
                                        </li>
                                        <li class="breadcrumb-item"><router-link :to="{name: 'projects'}">Proyectos</router-link>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Nuevo proyecto</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div style="border-top-color: #00a65a !important;position: relative;border-radius: 3px; background: #ffffff;border-top: 3px solid #d2d6de; margin-bottom: 20px;width: 100%; box-shadow: 0 1px 1px rgba(0,0,0,0.1);" class="box box-danger">
                                    <div class="box-header" style="color: #444;display: block;  padding: 10px; position: relative;border-bottom: 1px solid #f4f4f4;">
                                        <div class="box-title" style="display: inline-block; font-size: 18px;  margin: 0; line-height: 1;">
                                            Guardar proyecto
                                        </div>
                                    </div>
                                    <div class="box-body" style="border-top-left-radius: 0;border-top-right-radius: 0;border-bottom-right-radius: 3px;border-bottom-left-radius: 3px;padding: 10px;">
                                        <div class="form-group">
                                          <label for="title-project">T&iacute;tulo del proyecto</label>
                                          <input type="text" class="form-control" name="title-project" v-model="project_title" aria-describedby="emailHelpId" placeholder="ingresa el titulo del proyecto">
                                        </div>
                                        <div class="form-group">
                                          <label for="customer-project">Nombre del cliente</label>
                                          <input type="text" class="form-control" name="customer-project" v-model="project_customer" aria-describedby="emailHelpId" placeholder="ingrese el nombre del cliente">
                                        </div>
                                        <div class="form-group">
                                            <label for="project_autor"></label>
                                            <div class="form-group">
                                                <label for="tags-post">Nombre del autor</label>
                                                <b-select v-model="project_autor" :options="users" class="form-control" style="width:100%" value-field="id" text-field="name"></b-select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                          <label for="link-project">Link del proyecto</label>
                                          <input type="url" class="form-control" name="link-project" v-model="project_link" aria-describedby="emailHelpId" placeholder="https://www.example.com">
                                        </div>
                                        <div class="form-group">
                                            <label for="birth_date">Fecha de creaci&oacute;n</label>
                                            <datepicker class="form-control" :format="customFormatter" :language="es" v-model="project_date" :bootstrap-styling="true">
                                            </datepicker>
                                        </div>
                                        <div class="form-group">
                                          <label for="extract-project">Descripci&oacute;n del proyecto</label>
                                          <textarea class="form-control" name="extract-project" v-model="project_extract" rows="5" placeholder="ingresa una descripcion del proyecto"></textarea>
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
                                            <img v-if="show_photo" style="width:100%" v-bind:src="project_photo" alt="" srcset="">
                                          <label for="image-post">Imagen principal del proyecto</label>
                                          <input type="file" class="form-control-file"  name="image-post" v-on:change="onImageChange(0, $event)" placeholder="" aria-describedby="fileHelpId">
                                        </div>
                                        <div class="form-group">
                                            <img v-if="show_photo2" style="width:100%" v-bind:src="project_photo2" alt="" srcset="">
                                          <label for="image-post">Imagen alterna del proyecto</label>
                                          <input type="file" class="form-control-file"  name="image-post" v-on:change="onImageChange(1, $event)" placeholder="" aria-describedby="fileHelpId">
                                        </div>
                                        <div class="form-group">
                                            <img v-if="show_photo3" style="width:100%" v-bind:src="project_photo3" alt="" srcset="">
                                          <label for="image-post">Imagen alterna del proyecto</label>
                                          <input type="file" class="form-control-file"  name="image-post" v-on:change="onImageChange(2, $event)" placeholder="" aria-describedby="fileHelpId">
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label for="category_post"></label>
                                            <div class="form-group">
                                                <label for="tags-post">Categor&iacute;as</label>
                                                <b-select v-model="project_category" :options="categories" class="form-control" style="width:100%" value-field="id" text-field="name"></b-select>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding: 0 5px 10px;">
                                        <button type="button" style="padding:5px;background-color: #3c8dbc; border-color: #367fa9;" @click="saveProject" class="btn btn-primary btn-lg btn-block">Guardar Proyecto</button>
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
    import Datepicker from 'vuejs-datepicker';
    import {en, es} from 'vuejs-datepicker/dist/locale';
    import moment from "moment";
    import { BFormSelect, BFormSelectOption } from 'bootstrap-vue';
    import Toastr from "toastr"
    export default {
        components: {
            Datepicker,
            'b-select': BFormSelect,
            'b-select-option': BFormSelectOption
        },
        mounted() {
            this.getCategories();
            this.getUsers();
        },
        data(){
            return {
                categories: [],
                users:[],
                project_category:null,
                project_photo:null,
                show_photo:false,
                show_photo2:false,
                show_photo3:false,
                project_extract:null,
                project_date:null,
                project_link:null,
                project_autor:null,
                project_customer:null,
                project_title:null,
                es: es
            }
        },
        methods: {
            getCategories(){
                Axios.get('/api/categories').then(res =>{
                    this.categories = res.data;
                })
            },
            async getUsers(){
                await Axios.get('/api/user',{headers:{'Authorization':this.$session.get('Authorization'), 'Accept':'application/json'}}).then(res =>{
                    this.users = res.data;
                    console.log(res.data);
                }).catch(err =>{
                    console.log(err);
                })
            },
            customFormatter(date) {
                return moment(date).format('YYYY-MM-DD');
            },
            onImageChange(n,e){
                 let input = e.target;
                 if (input.files && input.files[0]) {
                     var reader = new FileReader();
                     let vm = this;
                     reader.onload = e => {
                         this.previewImageUrl = e.target.result;
                         if (n == 0) {
                           vm.project_photo = e.target.result;
                           vm.show_photo = true;
                         } else if ( n == 1){
                           vm.project_photo2 = e.target.result;
                           vm.show_photo2 = true;
                         } else {
                           vm.project_photo3 = e.target.result;
                           vm.show_photo3 = true;
                         }

                     }
                     reader.readAsDataURL(input.files[0]);
                 }
            },
            async saveProject(e) {
                let me =this;
                let url = '/api/project' //Ruta que hemos creado para enviar un proyecto y guardarlo
                this.$v.$touch()
                if (this.$v.$invalid) {
                    this.submitStatus = 'ERROR'
                } else {
                    console.log(this.$session.get('Authorization'));
                    Axios.defaults.headers.post['Content-Type'] = 'multipart/form-data';
                    Axios.defaults.headers.post['Authorization'] = this.$session.get('Authorization');
                    await Axios.post(url,{ //estas variables son las que enviaremos para guardar el proyecto
                    'project_title':me.project_title,
                    'project_customer':me.project_customer,
                    'project_autor':me.project_autor,
                    'project_link':me.project_link,
                    'project_date':me.customFormatter(me.project_date),
                    'project_extract':me.project_extract,
                    'project_photo':me.project_photo,
                    'project_photo2':me.project_photo2,
                    'project_photo3':me.project_photo3,
                    'project_category':me.project_category,
                    }).then(function (res) {
                        Toastr.info(res.data);
                        me.$router.push("/admin/projects");

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
