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
                                        <span
                                            >En esta sección se realizar posts
                                            para el blog</span
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <router-link :to="{ name: 'home' }"
                                                ><i
                                                    class="feather icon-home"
                                                ></i>
                                            </router-link>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <router-link :to="{ name: 'posts' }"
                                                >Posts</router-link
                                            >
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#!">Nuevo post</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div
                                    style="border-top-color: #00a65a !important;position: relative;border-radius: 3px; background: #ffffff;border-top: 3px solid #d2d6de; margin-bottom: 20px;width: 100%; box-shadow: 0 1px 1px rgba(0,0,0,0.1);"
                                    class="box box-primary"
                                >
                                    <div
                                        class="box-header"
                                        style="color: #444;display: block;  padding: 10px; position: relative;border-bottom: 1px solid #f4f4f4;"
                                    >
                                        <div
                                            class="box-title"
                                            style="display: inline-block; font-size: 18px;  margin: 0; line-height: 1;"
                                        >
                                            Crear un post
                                        </div>
                                    </div>
                                    <div
                                        class="box-body"
                                        style="border-top-left-radius: 0;border-top-right-radius: 0;border-bottom-right-radius: 3px;border-bottom-left-radius: 3px;padding: 10px;"
                                    >
                                        <div class="form-group">
                                            <label for="title-post"
                                                >Titulo del post</label
                                            >
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="title-post"
                                                v-model="post_title"
                                                aria-describedby="emailHelpId"
                                                placeholder="ingresa el titulo del post"
                                            />
                                        </div>
                                        <div class="form-group">
                                            <label for=""
                                                >Extracto del post</label
                                            >
                                            <textarea
                                                class="form-control"
                                                name="extract-post"
                                                v-model="post_extract"
                                                rows="5"
                                                placeholder="ingresa un extracto del post"
                                            ></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for=""
                                                >Contenido del post</label
                                            >
                                            <vue-editor
                                                id="editor"
                                                useCustomImageHandler
                                                @image-added="handleImageAdded"
                                                v-model="post_body"
                                            >
                                            </vue-editor>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div
                                    style="border-top-color: #00a65a;position: relative;border-radius: 3px; background: #ffffff;border-top: 3px solid #d2d6de; margin-bottom: 20px;width: 100%; box-shadow: 0 1px 1px rgba(0,0,0,0.1);"
                                >
                                    <div
                                        style="color: #444;display: block;  padding: 10px; position: relative;border-bottom: 1px solid #f4f4f4;"
                                    >
                                        <div
                                            style="display: inline-block; font-size: 18px;  margin: 0; line-height: 1;"
                                        >
                                            Adicionales
                                        </div>
                                    </div>
                                    <div
                                        style="border-top-left-radius: 0;border-top-right-radius: 0;border-bottom-right-radius: 3px;border-bottom-left-radius: 3px;padding: 10px;"
                                    >
                                        <div class="form-group">
                                            <img
                                                v-if="show_photo"
                                                style="width:100%"
                                                v-bind:src="post_photo"
                                                alt=""
                                                srcset=""
                                            />
                                            <label for="image-post"
                                                >Imagen principal del
                                                post</label
                                            >
                                            <input
                                                type="file"
                                                class="form-control-file"
                                                name="image-post"
                                                v-on:change="onImageChange"
                                                placeholder=""
                                                aria-describedby="fileHelpId"
                                            />
                                        </div>
                                        <hr />
                                        <div class="form-group">
                                            <label for="category_post"></label>
                                            <div class="form-group">
                                                <label for="tags-post"
                                                    >Categorías</label
                                                >
                                                <b-select
                                                    v-model="category_post"
                                                    :options="categories"
                                                    class="form-control"
                                                    style="width:100%"
                                                    value-field="id"
                                                    text-field="name"
                                                ></b-select>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="form-group">
                                            <label for="tags-post">Tags</label>
                                            <div class="form-group">
                                                <b-select
                                                    v-model="tagsSelected"
                                                    :options="tags"
                                                    multiple
                                                    class="form-control"
                                                    :select-size="4"
                                                    style="width:100%"
                                                    value-field="id"
                                                    text-field="name"
                                                ></b-select>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding: 0 5px 10px;">
                                        <button
                                            type="button"
                                            style="padding:5px;background-color: #3c8dbc; border-color: #367fa9;"
                                            @click="savePost"
                                            class="btn btn-primary btn-lg btn-block"
                                        >
                                            Guardar post
                                        </button>
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
import { VueEditor } from "vue2-editor";
import Axios from "axios";
import Toastr from "toastr";
import { BFormSelect, BFormSelectOption } from "bootstrap-vue";
export default {
    components: {
        "b-select": BFormSelect,
        "b-select-option": BFormSelectOption,
        "vue-editor": VueEditor
    },
    mounted() {
        this.getTags();
        this.getCategories();
    },
    data() {
        return {
            post_body: "",
            tags: [],
            tagsSelected: [],
            post_photo: null,
            show_photo: false,
            categories: [],
            category_post: null,
            post_extract: null,
            post_title: null
        };
    },
    methods: {
        getTags() {
            Axios.get("/api/tags").then(res => {
                this.tags = res.data;
            });
        },
        getCategories() {
            Axios.get("/api/categories").then(res => {
                this.categories = res.data;
            });
        },
        onImageChange(e) {
            let input = e.target;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                let vm = this;
                reader.onload = e => {
                    this.previewImageUrl = e.target.result;
                    vm.post_photo = e.target.result;
                    vm.show_photo = true;
                };
                reader.readAsDataURL(input.files[0]);
            }
        },
        async savePost(e) {
            let me = this;
            let url = "/api/post"; //Ruta que hemos creado para enviar una usuario y guardarlo
            this.$v.$touch();
            if (this.$v.$invalid) {
                this.submitStatus = "ERROR";
            } else {
                Axios.defaults.headers.post["Content-Type"] =
                    "multipart/form-data";
                Axios.defaults.headers.post[
                    "Authorization"
                ] = this.$session.get("Authorization");
                await Axios.post(url, {
                    //estas variables son las que enviaremos para que crear el usuario
                    post_title: this.post_title,
                    post_photo: this.post_photo,
                    user_id: this.$session.get("user_id"),
                    post_extract: this.post_extract,
                    post_body: this.post_body,
                    category_post: this.category_post,
                    tags: this.tagsSelected
                })
                    .then(function(res) {
                        Toastr.success("Post registrado");
                        me.$router.push("/admin/posts");
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
            }
            e.preventDefault();
        },
        handleImageAdded: function(
            file,
            Editor,
            cursorLocation,
            resetUploader
        ) {
            var reader = new FileReader();
            let image;
            reader.onload = file => {
                this.previewImageUrl = file.result;
                image = file.result;
            };
            reader.readAsDataURL(file);

            console.log(image);
        }
    },
    validations: {}
};
</script>
