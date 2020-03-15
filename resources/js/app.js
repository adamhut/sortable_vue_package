wenb
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

Vue.component('sortable', require('./components/Sortable.vue'));
Vue.component("pikaday", require("./components/Pikaday.vue"));
Vue.component("carousel", require("./components/Carousel.vue"));

Vue.component('sortable', require('./components/Sortable.vue'));
Vue.component("pikaday", require("./components/Pikaday.vue"));
Vue.component("carousel", require("./components/Carousel.vue"));



Vue.component("testimonials", require("./components/Testimonials.vue"));

Vue.component("example", require("./components/ExampleComponent.vue"));


const app = new Vue({
    el: '#app',
    data: {
      todos: [
        { id: 1, description: "Get travel insurance", complete: false },
        { id: 2, description: "Pay hydro bill", complete: false },
        { id: 3, description: "Record podcast with Taylor", complete: false },
        { id: 4, description: "Design Twitter card for new landing page", complete: false },
        { id: 5, description: "Update credit card for Typekit subscription", complete: false },
      ],
    },

});
