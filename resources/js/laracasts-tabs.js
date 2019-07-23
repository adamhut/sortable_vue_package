/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


// Vue.use(PortalVue);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import Tabs from './components/Tabs';

import Tab from './components/Tab';

//Vue.component("UserSettingsForm", require("./components/UserSettingsForm.vue"));
// ue.component("UserSettingsForm", require("./components/advacned-vue/UserSettingsForm.vue"));
Vue.component('tabs', Tabs);
Vue.component('tab', Tab);
// Vue.component('modal', Modal);

const app = new Vue({
    el: '#app',
    data: {

    },
    methods: {
    
    },

});
