<template>
    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
        <div class="sidebar">
            <div class="sidebar-search sidebar-widget">
                <div class="search-form">
                    <form action="#" method="post">
                        <div class="form-group">
                            <input
                                type="search"
                                name="search-field"
                                placeholder="Search Now"
                                required=""
                            />
                            <button type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="sidebar-categories sidebar-widget">
                <h3 class="sidebar-title">Categories</h3>
                <div class="widget-content">
                    <ul>
                        <li
                            v-for="category in categories"
                            v-bind:key="category.id"
                        >
                            <router-link
                                :to="{ name: 'blogcategory' }"
                                :class="{
                                    'active-cat':
                                        $root.$route.name == 'blogcategory'
                                }"
                                >{{ category.name }}
                                <span>(09)</span></router-link
                            >
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sidebar-post sidebar-widget">
                <h3 class="sidebar-title">Recent News</h3>
                <div class="widget-content">
                    <div class="post">
                        <figure class="image">
                            <a href="blog-details.html"
                                ><img src="images/resource/post-1.jpg" alt=""
                            /></a>
                        </figure>
                        <h5>
                            <a href="blog-single.html"
                                >Best website traffice Booster with great
                                tools.</a
                            >
                        </h5>
                        <span class="post-date">12 May, 2016</span>
                    </div>
                    <div class="post">
                        <figure class="image">
                            <a href="blog-details.html"
                                ><img src="images/resource/post-2.jpg" alt=""
                            /></a>
                        </figure>
                        <h5>
                            <a href="blog-single.html"
                                >Google take latest step & Catch the black
                                SEO</a
                            >
                        </h5>
                        <span class="post-date">11 May, 2016</span>
                    </div>
                    <div class="post">
                        <figure class="image">
                            <a href="blog-details.html"
                                ><img src="images/resource/post-3.jpg" alt=""
                            /></a>
                        </figure>
                        <h5>
                            <a href="blog-single.html"
                                >How to become a best sale marketer in a
                                year!</a
                            >
                        </h5>
                        <span class="post-date">10 May, 2016</span>
                    </div>
                </div>
            </div>
            <div class="sidebar-tags sidebar-widget">
                <h3 class="sidebar-title">Popular Tags</h3>
                <div class="widget-content">
                    <ul class="tag-list clearfix">
                        <li v-for="tag in tags" v-bind:key="tag.id">
                            <a href="#">{{ tag.name }}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sidebar-instagram sidebar-widget">
                <h3 class="sidebar-title">Instagram</h3>
                <div class="widget-content">
                    <div class="image-list clearfix">
                        <figure class="image">
                            <a href="#"
                                ><img
                                    src="images/resource/instagram-1.jpg"
                                    alt=""
                            /></a>
                        </figure>
                        <figure class="image">
                            <a href="#"
                                ><img
                                    src="images/resource/instagram-2.jpg"
                                    alt=""
                            /></a>
                        </figure>
                        <figure class="image">
                            <a href="#"
                                ><img
                                    src="images/resource/instagram-3.jpg"
                                    alt=""
                            /></a>
                        </figure>
                        <figure class="image">
                            <a href="#"
                                ><img
                                    src="images/resource/instagram-4.jpg"
                                    alt=""
                            /></a>
                        </figure>
                        <figure class="image">
                            <a href="#"
                                ><img
                                    src="images/resource/instagram-5.jpg"
                                    alt=""
                            /></a>
                        </figure>
                        <figure class="image">
                            <a href="#"
                                ><img
                                    src="images/resource/instagram-6.jpg"
                                    alt=""
                            /></a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Axios from "axios";
export default {
    mounted() {
        this.getTags();
        this.getCategories();
    },
    data() {
        return {
            tags: [],
            categories: []
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
        }
    }
};
</script>
