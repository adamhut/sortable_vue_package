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
import ConfirmDialog from './components/ConfirmDialog';
import ConfirmButton from './components/ConfirmButton';

import Modal from './plugins/modal/ModalPlugin';
Vue.use(Modal);


//Vue.component("UserSettingsForm", require("./components/UserSettingsForm.vue"));
// ue.component("UserSettingsForm", require("./components/advacned-vue/UserSettingsForm.vue"));

Vue.component('confirm-dialog', ConfirmDialog);
Vue.component('confirm-button', ConfirmButton);
// Vue.component('modal', Modal);

const app = new Vue({
    el: '#app',
    data: {

    },
    methods: {
        confirm(message){
            this.$modal.dialog(message)
                .then(confirmed =>{
                   
                    if(confirmed)
                    {
                        alert('proceed');
                    }else{
                      this.$modal.dialog('Okey,Canceled',{confirmButton:'Got it'});
                    }


                });
        },
    },

});
