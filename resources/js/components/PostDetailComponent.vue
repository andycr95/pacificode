<template>
    <div class="container">
        <div class="row">
            <div v-for="post in post" v-bind:key="post.id" class="col-lg-12 col-md-12 col-sm-12 content-side">
                <div class="blog-single-content">
                    <div class="post-details">
                        <figure class="image-box"><img :src="post.post_photo" alt=""></figure>
                        <div class="inner-box">
                            <div class="upper-box">
                                <div class="post-date"><i class="fas fa-calendar-alt"></i>January 09, 2019</div>
                                <h3>{{post.post_title}}</h3>
                                <div class="text">{{post.post_body}}</div>
                            </div>
                            <div class="lower-box clearfix">
                                <div class="left-content pull-left">
                                    <figure class="admin-image"><img :src="post.user.photo_profile" alt=""></figure>
                                    <span class="admin-name">by {{post.user.name}}</span>
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
                    <div class="author-box">
                        <div class="author-inner">
                            <figure class="author-thumb"><img style="width:130px" :src="post.user.photo_profile" alt=""></figure>
                            <div class="inner">
                                <h4>{{post.user.name}}</h4>
                                <div class="text">
                                    {{post.user.description}}
                                </div>
                                <ul class="social-links clearfix">
                                    <li><a v-bind:href="post.user.facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a v-bind:href="post.user.linkedin"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a v-bind:href="post.user.twitter"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="comments-area">
                        <div class="sec-title"><h2>Comments (03)</h2></div>
                        <div class="comment-box">
                            <div class="comment">
                                <figure class="author-thumb"><img src="images/resource/comment-1.png" alt=""></figure>
                                <div class="comment-inner">
                                    <div class="comment-info">
                                        <h5 class="name">Rayan Collins</h5>
                                        <span class="date">October 6, 2019</span>
                                    </div>
                                    <div class="text">It’s no secret that the digital industry is booming. From exciting startups to global brands, companies are reaching out.</div>
                                    <div class="replay-btn"><a href="#">Reply</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comments-form-area">
                        <div class="sec-title"><h2>Leave Reply Comments</h2></div>
                        <form action="#" method="post" class="comment-form default-form">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Comment"></textarea>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="name" placeholder="Name" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Mail Address" required="">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="website" placeholder="Webstie (optional)">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button type="submit" class="theme-btn-two">Post now</button>
                                </div>
                            </div>
                        </form>
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
            this.getPost()
        },
        data(){
            return {
                post: {}
            }
        },
        methods: {
            async getPost() {
                await Axios.get("/api/post/"+this.$route.query.id).then(res =>{
                    this.post = res.data
                }).catch(err =>{
                    console.log(err);
                })
            },
            goTo(e){
                location.href =`/blogs/${e}`;

            }
        }
    }
</script>
