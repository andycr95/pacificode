import admin from './views/Home.vue';
import Users from './views/Users/Users.vue';
import Services from './views/Services/Services.vue';
import Profile from './views/Users/Profile.vue';
import Posts from './views/Posts/Posts.vue';
import NewPosts from './views/Posts/NewPost.vue';
import Projects from './views/Projects/Projects.vue';
import NewProjects from './views/Projects/NewProject.vue';
import Vue from 'vue';
import Router from 'vue-router';

Vue.use(Router);

export default new Router({
    routes: [
        {
            name: 'home',
            path: '/admin',
            component: admin,
        },

        {
            name: 'users',
            path: '/admin/users',
            component: Users,
        },
        {
            path: '/admin/user/:id',
            name: 'user',
            component: Profile
        },
        {
            name: 'posts',
            path: '/admin/posts',
            component: Posts
        },
        {
            name: 'newpost',
            path: '/admin/posts/create',
            component: NewPosts
        },
        {
            name: 'services',
            path: '/admin/services',
            component: Services
        },
        {
            name: 'projects',
            path: '/admin/projects',
            component: Projects
        },
        {
            name: 'newprojects',
            path: '/admin/projects/create',
            component: NewProjects
        }
    ],
    linkExactActiveClass: 'active',
    mode: 'history'
});
