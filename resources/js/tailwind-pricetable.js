require('./bootstrap');

window.Vue = require('vue');
import Navbar from './components/tailwind/Navbar';

//Vue.component("UserSettingsForm", require("./components/UserSettingsForm.vue"));
// ue.component("UserSettingsForm", require("./components/advacned-vue/UserSettingsForm.vue"));

Vue.component('navbar', Navbar);

const app = new Vue({
    el: '#app',
    data: {


    },
});