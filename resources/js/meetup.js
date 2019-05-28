/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');



// Vue.use(PortalVue);
// see docs for available options


 import AirbnbStyleDatepicker from 'vue-airbnb-style-datepicker';
 import 'vue-airbnb-style-datepicker/dist/vue-airbnb-style-datepicker.min.css'
 const datepickerOptions = {
     colors: {
         selected: '#1F24CC',
         inRange: '#66e2da',
         selectedText: '#fff',
         text: '#565a5c',
         inRangeBorder: '#33dacd',
         disabled: '#fff',
         hoveredInRange: '#67f6ee'
     },
 }

 Vue.use(AirbnbStyleDatepicker, datepickerOptions)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import DatePicker from './components/DatePicker';

//Vue.component("UserSettingsForm", require("./components/UserSettingsForm.vue"));
//Vue.component("UserSettingsForm", require("./components/advacned-vue/UserSettingsForm.vue"));




Vue.component('DatePicker', DatePicker);

const app = new Vue({
    el: '#app',
    data: {
       
    },
    

});
