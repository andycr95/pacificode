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
                                        <h4>Nuevo posts</h4>
                                        <span>En esta sección se realizar posts para el blog</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <router-link :to="{name: 'admin'}"><i class="feather icon-home"></i> </router-link>
                                        </li>
                                        <li class="breadcrumb-item"><router-link :to="{name: 'posts'}">Posts</router-link>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Nuevo post</a>
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
                                            Crear un post
                                        </div>
                                    </div>
                                    <div class="box-body" style="border-top-left-radius: 0;border-top-right-radius: 0;border-bottom-right-radius: 3px;border-bottom-left-radius: 3px;padding: 10px;">
                                        <div class="form-group">
                                          <label for="title-post">Titulo del post</label>
                                          <input type="text" class="form-control" name="title-post" aria-describedby="emailHelpId" placeholder="ingresa el titulo del post">
                                        </div>
                                        <div class="form-group">
                                          <label for="">Extracto del post</label>
                                          <textarea class="form-control" name="extract-post" rows="5" placeholder="ingresa un extracto del post"></textarea>
                                        </div>
                                        <div class="form-group">
                                          <label for="">Contenido del post</label>
                                          <ckeditor :editor="editor" rows="15" v-model="editorData" :config="editorConfig"></ckeditor>
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
                                            <img v-if="show_photo" style="width:100%" v-bind:src="post_photo" alt="" srcset="">
                                          <label for="image-post">Imagen principal del post</label>
                                          <input type="file" class="form-control-file" name="image-post" v-on:change="onImageChange" placeholder="" aria-describedby="fileHelpId">
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                          <label for="category_post"></label>
                                          <select class="form-control" name="category_post" id="">
                                            <option>Selecciona una opción</option>
                                            <option>Categoria 1</option>
                                            <option>Categoria 2</option>
                                            <option>Categoria 3</option>
                                          </select>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label for="tags-post">Tags</label>
                                            <v-select class="style-chooser" placeholder="Choose a Styling Option" :options="['Components', 'CSS / Variables', 'Slots']"/>
                                        </div>
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
    export default {
        mounted() {
            this.getTags()
        },
        data(){
            return {
                editor: ClassicEditor,
                editorData: '',
                editorConfig: {
                    // The configuration of the editor.
                },
                tags: [],
                post_photo:null,
                show_photo:false,
            }
        },
        methods: {
            getTags(){
                Axios.get('/api/tags').then(res =>{
                    this.tags = res.data
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
            }
        }
    }
</script>
