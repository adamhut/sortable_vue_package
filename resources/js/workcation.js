/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import PortalVue from 'portal-vue';

Vue.use(PortalVue);
// import VueFuse from 'vue-fuse'

// Vue.use(VueFuse)
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import SiteHeader from './components/SiteHeader';

import SearchFilters from './components/SearchFilters';
import WorkcationCard from './components/WorkcationCard';
import WorkcationCards from './components/WorkcationCards';

Vue.component('SiteHeader', SiteHeader);
Vue.component('SearchFilters', SearchFilters);
Vue.component('WorkcationCard', WorkcationCard);
Vue.component('WorkcationCards', WorkcationCards);
// Vue.component("DatePicker", require("./components/advanced-vue/DatePicker.vue"));

const app = new Vue({
    el: '#app',
    data: {
        date: '2018-04-12'
    },

});
