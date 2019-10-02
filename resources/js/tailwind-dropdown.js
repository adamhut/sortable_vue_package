require('./bootstrap');

window.Vue = require('vue');
import Dropdown from './components/tailwind/Dropdown';

//Vue.component("UserSettingsForm", require("./components/UserSettingsForm.vue"));
// ue.component("UserSettingsForm", require("./components/advacned-vue/UserSettingsForm.vue"));

Vue.component('dropdown', Dropdown);

const app = new Vue({
    el: '#app',
    data: {


    },
});