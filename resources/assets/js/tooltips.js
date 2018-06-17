/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.directive('tooltip',{
    bind(elem,bindings){
        console.log(bindings);
        new PopperTooltip(elem, {
            placement: bindings.args || 'top',
            title: bindings.value,
        });
    },
});

import PopperTooltip from 'tooltip.js';

Vue.component("Tooltip", require("./components/laracasts/Tooltip.vue"));

const app = new Vue({
    el: '#app',
    
    mounted(){
        document.querySelectorAll(['data-tooltip']).forEach(elem=>{
            console.log(elem.dataset);
            new PopperTooltip(elem, {
                placement: elem.dataset.tooltipPlacement|| 'top',
                title:elem.dataset.tooltip,
            })

        });
    }

});
