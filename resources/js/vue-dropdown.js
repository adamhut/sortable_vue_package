/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import PortalVue from 'portal-vue';

Vue.use(PortalVue);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import SearchComponent from './components/SearchComponent';
Vue.component('SearchComponent', SearchComponent);
// Vue.component("DatePicker", require("./components/advanced-vue/DatePicker.vue"));


const app = new Vue({
    el: '#app',
    data: {
        date: '2018-04-12'
    },

});
