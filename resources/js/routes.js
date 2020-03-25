import admin from './components/Home.vue';
import Users from './components/Users.vue';
import Vue from 'vue';
import Router from 'vue-router';

Vue.use(Router);

export default new Router({
    routes: [
        {
        name: 'Inicio',
        path: '/admin',
        component: admin
    },
    {
        name: 'Usuarios',
        path: '/admin/users',
        component: Users
    }],
    linkExactActiveClass: 'active',
    mode: 'history'
});
