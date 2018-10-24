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


Vue.component("SearchSelect", require("./components/advanced-vue/SearchSelect.vue"));



const app = new Vue({
    el: '#app',
    data: {
       selectedBand: null,
        bands: [
            "Anthrax",
            "Dark Angel",
            "Death Angel",
            "Destruction",
            "Exodus",
            "Flotsam and Jetsam",
            "Kreator",
            "Megadeth",
            "Metallica",
            "Overkill",
            "Sepultura",
            "Slayer",
            "Testament"
        ],
    },
    methods:{
        applySearchFilter (search, options) {
            return options.filter(option => {
                return option.toLowerCase().startsWith(search.toLowerCase());
            });
        }
    },

});
