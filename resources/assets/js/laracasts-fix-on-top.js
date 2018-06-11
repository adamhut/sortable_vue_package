/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VModal from 'vue-js-modal'

import PortalVue from 'portal-vue';

Vue.use(PortalVue);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


Vue.component("Accordion", require("./components/advanced-vue/Accordion.vue"));

const app = new Vue({
    el: '#app',
    data: {
        accountId: 7,
        showAnnouncement: true,
    },
    methods: {

    },
    mounted(){
        let originalOffsetY = this.$refs['series-banner-meat'].offsetTop;

        
        window.addEventListener(
            'scroll',
            throttle(function(){

                if(window.scrollY>= originalOffsetY)
                {
                    this.$refs['series-banner-meat'].classList.add(
                        'fixed',
                        'w-full',
                        'pin-t',
                        'z-10'
                    );
                }else{
                    this.$refs['series-banner-meat'].classList.remove(
                        'fixed',
                        'w-full',
                        'pin-t',
                        'z-10'
                    );
                }
            },300)
        );
    },

});
