window.axios = require('axios'); 
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Vue = require('vue');

import VueRouter from 'vue-router';
import App from"./views/App";

Vue.use(VueRouter);

import Home from "./pages/Home";
import About from "./pages/About";
import Contacts from "./pages/Contacts";
import Posts from "./pages/Posts";
import NotFound from "./pages/NotFound";
import SinglePost from "./pages/SinglePost";


const router= new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/about',
            name: 'about',
            component: About
        },
        {
            path: '/contacts',
            name: 'contacts',
            component: Contacts
        },
        {
            path: '/posts',
            name: 'posts',
            component: Posts
        },
        {
            path: '/not-found',
            name: 'not-found',
            component: NotFound
        },
        {
            path: '/posts/:id',
            name: 'single-post',
            component: SinglePost
        }


    ]
});


const app = new Vue({
    el: '#root',
    render: h => h(App),
    router
});


