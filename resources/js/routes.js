import admin from './views/Home.vue';
import Users from './views/Users.vue';
import Profile from './views/Profile.vue';
import Posts from './views/Posts.vue';
import PostsB from './views/PostsComponent.vue';
import NewPosts from './views/NewPost.vue';
import Vue from 'vue';
import Router from 'vue-router';

Vue.use(Router);

export default new Router({
    routes: [
        {
        name: 'home',
        path: '/admin',
        component: admin,
        children: [

        ]
    },
    {
        name: 'users',
        path: '/admin/users',
        component: Users,
    },{
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
        name: 'blogs',
        path: '/blogs',
        component: PostsB
    }],
    linkExactActiveClass: 'active',
    mode: 'history'
});
