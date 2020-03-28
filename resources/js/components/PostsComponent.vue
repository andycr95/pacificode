<template>
    <div class="container">
        <div class="row"  v-if="posts.length > 0">
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="blog-content">
                    <div v-for="post in posts" v-bind:key="post.id" class="single-blog-content">
                        <div class="inner-box">
                            <figure class="image-box"><a href="blog-single.html"><img v-bind:src="post.post_photo" alt=""></a></figure>
                            <div class="lower-content">
                                <div class="upper-box">
                                    <div class="post-date"><i class="fas fa-calendar-alt"></i>{{post.created_at}}</div>
                                    <h3><a @click="goTo(post.id)">{{post.post_title}}</a></h3>
                                    <div class="text">{{post.post_extract}}</div>
                                </div>
                                <div class="lower-box clearfix">
                                    <div class="left-content pull-left">
                                        <figure class="admin-image"><img :src="post.user.photo_profile" alt=""></figure>
                                        <span class="admin-name">Por {{post.user.name}}</span>
                                    </div>
                                    <ul class="right-content pull-right">
                                        <li><a href="#">30 &nbsp;<i class="far fa-comments"></i></a></li>
                                        <li class="share">
                                            <a href="#"><i class="fas fa-share-alt"></i></a>
                                            <ul class="social-links">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div v-if="pagination.last_page > 1" class="pagination-wrapper centred">
                        <ul class="pagination">
                            <li><a href="#"><i class="fas fa-angle-left"></i></a></li>
                            <li v-for="page in pagination.last_page" @click="getPosts" v-bind:key="page"><router-link :to="{'path':'/blogs', query:{'page':page}}" :class="{ 'active': $route.query.page == page, 'active': !$route.query.page && page == 1 }" >{{page}}</router-link></li>
                            <li><a href="#"><i class="fas fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <side-bar-blog></side-bar-blog>
        </div>
        <div class="row" v-else>
            <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                <div class="blog-content" >
                    <div class="single-blog-content">
                        <div class="inner-box">
                            <div class="lower-content">
                                <div class="upper-box">
                                    <h3>No hay publicaciones...</h3>
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
    import Axios from 'axios'
    import SideBarBlog from "./SideBarBlog";
    export default {
        components: {
            'side-bar-blog':SideBarBlog
        },
        mounted() {
            this.getPosts()
        },
        data(){
            return {
                posts: [],
                pagination: {}
            }
        },
        methods: {
            async getPosts() {
                await Axios.get(`/api/posts?page=${this.$route.query.page || 1}`).then(res =>{
                    this.posts = res.data.data
                    this.pagination = res.data
                    delete this.pagination.data
                }).catch(err =>{
                    console.log(err);
                })
            },
            goTo(e){
                location.href =`/blog?id=${e}`;

            }
        }
    }
</script>
