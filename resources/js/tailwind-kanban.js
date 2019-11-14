require('./bootstrap');

window.Vue = require('vue');


//Vue.component("UserSettingsForm", require("./components/UserSettingsForm.vue"));
// ue.component("UserSettingsForm", require("./components/advacned-vue/UserSettingsForm.vue"));


const app = new Vue({
    el: '#app',
    data: {
        sidebarOpen: false,

    },
    methods: {
        name() {

        }
    },
});