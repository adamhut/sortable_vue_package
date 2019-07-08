/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import PortalVue from 'portal-vue';
import VModal from 'vue-js-modal'
import VueFuse from 'vue-fuse'
import VueI18n from 'vue-i18n'

Vue.use(VModal);
Vue.use(PortalVue);
Vue.use(VueFuse);
Vue.use(VueI18n);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import SearchComponent from './components/SearchComponent';
import DropdownMenu from './components/DropdownMenu';
import MegaMenu from './components/MegaMenu';
import ModalLogin from './components/ModalLogin';
import ModalRegister from './components/ModalRegister';

//import { translations } from './translations.js'

// const translations = {
//     en: {
//         message: {
//             hello: 'hello world'
//         },
//         'Result': 'Result'
//     },
//     ja: {
//         message: {
//             hello: 'こんにちは、世界'
//         },
//         'Result': '結果'
//     }
// }

// export const i18n = new VueI18n({
//     locale: 'ja', // set locale
//     translations, // set locale messages
// })

const translations = {
    en: {
        message: {
            hello: 'hello world'
        }
    },
    ja: {
        message: {
            hello: 'こんにちは、世界'
        }
    }
}

// Create VueI18n instance with options
const i18n = new VueI18n({
    locale: 'ja', // set locale
    messages:translations, // set locale messages
})

Vue.component('SearchComponent', SearchComponent);
Vue.component('DropdownMenu', DropdownMenu);
Vue.component('MegaMenu', MegaMenu);
Vue.component('ModalLogin', ModalLogin);
Vue.component('ModalRegister', ModalRegister);
// Vue.component("DatePicker", require("./components/advanced-vue/DatePicker.vue"));

const app = new Vue({
    el: '#app',
    data: {
        date: '2018-04-12'
    },
    
    i18n,
});
