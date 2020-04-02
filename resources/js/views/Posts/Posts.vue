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
                                        <h4>Posts</h4>
                                        <span
                                            >En esta sección se encuentran todos
                                            los posts del blog</span
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <router-link :to="{ name: 'home' }">
                                                <i
                                                    class="feather icon-home"
                                                ></i>
                                            </router-link>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <router-link :to="{ name: 'posts' }"
                                                >Posts</router-link
                                            >
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-body">
                        <div class="row">
                            <div
                                v-for="post in posts"
                                :key="post.id"
                                style="padding-bottom:10px;"
                                class="col-md-4"
                            >
                                <div>
                                    <div class="bg-white p-relative">
                                        <div class="card-block">
                                            <div class="wall-elips">
                                                <span
                                                    class="dropdown-toggle addon-btn text-muted f-right wall-dropdown"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="true"
                                                    role="tooltip"
                                                ></span>
                                                <div
                                                    class="dropdown-menu dropdown-menu-right b-none services-list"
                                                >
                                                    <router-link
                                                        class="dropdown-item"
                                                        :to="{
                                                            name: 'updatepost',
                                                            params: {
                                                                id: post.id
                                                            }
                                                        }"
                                                        >Actualizar
                                                        post</router-link
                                                    >
                                                    <a
                                                        class="dropdown-item"
                                                        @click="
                                                            deletePost(post.id)
                                                        "
                                                        >Eliminar post</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div
                                                    class="media-left media-middle friend-box"
                                                >
                                                    <router-link
                                                        :to="{
                                                            name: 'user',
                                                            params: {
                                                                id: post.user.id
                                                            }
                                                        }"
                                                    >
                                                        <img
                                                            class="media-object img-radius m-r-20"
                                                            :src="
                                                                post.user
                                                                    .photo_profile
                                                            "
                                                            alt="user_photo"
                                                        />
                                                    </router-link>
                                                </div>
                                                <div class="media-body">
                                                    <div
                                                        class="chat-header"
                                                        v-text="post.user.name"
                                                    ></div>
                                                    <div
                                                        class="f-13 text-muted"
                                                        v-text="post.created_at"
                                                    ></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            id="lightgallery"
                                            class="lightgallery-popup"
                                        >
                                            <img
                                                :src="post.post_photo"
                                                class="img-fluid width-100"
                                                alt=""
                                            />
                                        </div>
                                        <div class="card-block">
                                            <div class="timeline-details">
                                                <div
                                                    class="chat-header"
                                                    v-text="post.post_title"
                                                ></div>
                                                <p
                                                    class="text-muted"
                                                    v-html="post.post_extract"
                                                ></p>
                                            </div>
                                        </div>
                                        <div
                                            class="card-block b-b-theme b-t-theme social-msg"
                                        >
                                            <a href="#">
                                                <i
                                                    class="icofont icofont-heart-alt text-muted"
                                                ></i>
                                                <span class="b-r-theme"
                                                    >Likes (20)</span
                                                >
                                            </a>
                                            <a href="#">
                                                <i
                                                    class="icofont icofont-comment text-muted"
                                                ></i>
                                                <span class="b-r-theme"
                                                    >Comentarios (25)</span
                                                >
                                            </a>
                                            <a href="#">
                                                <i
                                                    class="icofont icofont-share text-muted"
                                                ></i>
                                                <span>Compartido (10)</span>
                                            </a>
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
import Axios from "axios";
import Toastr from "toastr";
export default {
    mounted() {
        this.getPosts();
    },
    data() {
        return {
            posts: [],
            pagination: {}
        };
    },
    methods: {
        async getPosts() {
            await Axios.get(`/api/posts`)
                .then(res => {
                    this.posts = res.data.data;
                    this.pagination = res.data;
                    delete this.pagination.data;
                })
                .catch(err => {
                    console.log(err);
                });
        },
        async deletePost(id) {
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
                .confirm("Está seguro de eliminar este post?", options)
                .then(async function(dialog) {
                    await Axios.delete(`/api/post/` + id, {
                        headers: {
                            Accept: "application/json",
                            Authorization: auth.$session.get("Authorization")
                        }
                    })
                        .then(res => {
                            auth.getPosts();
                            Toastr.info(res.data);
                        })
                        .catch(err => {
                            console.log(err);
                        });
                });
        }
    }
};
</script>
