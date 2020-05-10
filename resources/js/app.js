require('./bootstrap');
import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuex from 'vuex';
import {routes} from './routes.js';
import MainApp from './components/MainApp.vue';
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import store from './vuex/store';

Vue.use(VueRouter)
Vue.use(Vuex)

Vue.use(BootstrapVue)

Vue.use(IconsPlugin)


const router = new VueRouter({
    routes,
    mode: 'history'
});


const app = new Vue({
    el: '#app',
    router,
    store,
    components: {
        MainApp
    }
})