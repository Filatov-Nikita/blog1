
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Axios from 'axios';
Vue.prototype.$http = Axios.create({
    baseURL: 'http://js.dmitrylavrik.ru/api/',
    crossDomain:true,
    headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
    }
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
import {store} from './store';
const app = new Vue({
    el: '#app',
    store
});
