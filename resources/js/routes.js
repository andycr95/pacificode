import admin from "./views/Home.vue";
import Users from "./views/Users/Users.vue";
import Services from "./views/Services/Services.vue";
import NewServices from "./views/Services/NewServices.vue";
import UpdateServices from "./views/Services/UpdateServices.vue";
import Profile from "./views/Users/Profile.vue";
import Testimonies from "./views/Testimonies/Testimonies.vue";
import NewTestimony from "./views/Testimonies/NewTestimony.vue";
import Posts from "./views/Posts/Posts.vue";
import Post from "./views/Posts/UpdatePost.vue";
import NewPosts from "./views/Posts/NewPost.vue";
import Projects from "./views/Projects/Projects.vue";
import NewProjects from "./views/Projects/NewProject.vue";
import UpdateProject from "./views/Projects/UpdateProject.vue";
import FeatureService from "./views/Services/FeatureService.vue";
import Vue from "vue";
import Router from "vue-router";

export default new Router({
    routes: [
        {
            name: "home",
            path: "/admin",
            component: admin
        },

        {
            name: "users",
            path: "/admin/users",
            component: Users
        },
        {
            path: "/admin/user/:id",
            name: "user",
            component: Profile
        },
        {
            name: "posts",
            path: "/admin/posts",
            component: Posts
        },
        {
            name: "newpost",
            path: "/admin/posts/create",
            component: NewPosts
        },
        {
            name: "updatepost",
            path: "/admin/post/:id",
            component: Post
        },
        {
            name: "services",
            path: "/admin/services",
            component: Services
        },
        {
            name: "projects",
            path: "/admin/projects",
            component: Projects
        },
        {
            name: "newservice",
            path: "/admin/services/create",
            component: NewServices
        },
        {
            name: "updateservice",
            path: "/admin/services/updateService/:id",
            component: UpdateServices
        },
        {
            name: "newprojects",
            path: "/admin/projects/create",
            component: NewProjects
        },
        {
            name: "updateproject",
            path: "/admin/projects/:id",
            component: UpdateProject
        },
        
        {
            name: "servicefeatures",
            path: "/admin/service_features/create",
            component: FeatureService
        },{
            name: "testimonies",
            path: "/admin/testimonies",
            component:Testimonies
        },
        {
            name: "newtestimony",
            path: "/admin/testimonies/create",
            component: NewTestimony
        },
    ],
    linkExactActiveClass: "active",
    mode: "history"
});
