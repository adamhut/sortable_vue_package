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


//Vue.component("AnnouncementModal", require("./components/advanced-vue/AnnouncementModal.vue"));
//Vue.component("TagInput", require("./components/advanced-vue/TagInput.vue"));
Vue.component("InlineTagInput", require("./components/advanced-vue/InlineTagInput.vue"));
Vue.component("StackedTagInput", require("./components/advanced-vue/StackedTagInput.vue"));

const app = new Vue({
    el: '#app',
    data: {
        tags: ['awesome', 'excellent', 'amazing'],
    },
    methods: {

    },

});
