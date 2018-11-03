
require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import App from './views/App'
import Home from './views/Home'
import NotFound from './views/NotFound'
import About from './views/About'
import Article from './views/Article'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/notfound',
            name: 'notfound',
            component: NotFound,
        },
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/about',
            name: 'about',
            component: About,
        },
        {
            path: '/*',
            name: 'article',
            component: Article,
        },
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});