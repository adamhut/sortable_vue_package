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

Vue.component("ContactListPreSortable", require("./components/advanced-vue/ContactListPreSortable.vue"));
Vue.component("SortableList", require("./components/advanced-vue/SortableList.vue"));
Vue.component("SortableItem", require("./components/advanced-vue/SortableItem.vue"));
Vue.component("SortableHandle", require("./components/advanced-vue/SortableHandle.vue"));



const app = new Vue({
    el: '#app',
    data: {
        contacts: [
            {
                id: 1,
                name: "Alfreda Ferreira",
                email: "alfreda.ferreira@example.com",
                avatar: "https://randomuser.me/api/portraits/med/women/6.jpg"
            },
            {
                id: 2,
                name: "Leevi Wirtanen",
                email: "leevi.wirtanen@example.com",
                avatar: "https://randomuser.me/api/portraits/med/men/19.jpg"
            },
            {
                id: 3,
                name: "Kaitlin Sutton",
                email: "kaitlin.sutton@example.com",
                avatar: "https://randomuser.me/api/portraits/med/women/2.jpg"
            },
            {
                id: 4,
                name: "Alice Wilson",
                email: "alice.wilson@example.com",
                avatar: "https://randomuser.me/api/portraits/med/women/62.jpg"
            },
            {
                id: 5,
                name: "Etienne Roy",
                email: "etienne.roy@example.com",
                avatar: "https://randomuser.me/api/portraits/med/men/4.jpg"
            }
        ]
    },

});
