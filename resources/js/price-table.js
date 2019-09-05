require('./bootstrap');

window.Vue = require('vue');
import ToggleButton from 'vue-js-toggle-button'

Vue.use(ToggleButton)

const app = new Vue({
    el: '#app',
    data: {
        monthly: false,
        plans: {
            hobby: {
                price: {
                    perYear: 15,
                    perMonth: 20,
                }
            },
            growth: {
                price: {
                    perYear: 25,
                    perMonth: 30,
                }
            },
            business: {
                price: {
                    perYear: 50,
                    perMonth: 60,
                }
            },
            enterprise: {
                price: {
                    perYear: 90,
                    perMonth: 120,
                }
            },
        }
    },
});