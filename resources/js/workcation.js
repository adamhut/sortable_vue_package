/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import PortalVue from 'portal-vue';

Vue.use(PortalVue);
// import VueFuse from 'vue-fuse'

// Vue.use(VueFuse)
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import SiteHeader from './components/SiteHeader';

import SearchFilters from './components/SearchFilters';
import WorkcationCard from './components/WorkcationCard';
import PropertyCard from './components/PropertyCard';
import WorkcationCards from './components/WorkcationCards';

Vue.component('SiteHeader', SiteHeader);
Vue.component('SearchFilters', SearchFilters);
Vue.component('WorkcationCard', WorkcationCard);
Vue.component('PropertyCard', PropertyCard);
Vue.component('WorkcationCards', WorkcationCards);
// Vue.component("DatePicker", require("./components/advanced-vue/DatePicker.vue"));

const app = new Vue({
    el: '#app',
    data: {
        date: '2018-04-12',
        locations:[
            {
                title: 'Los Angeles',
                description: "Live like the stars in these luxurious Southern California estates.",
                properties: [{
                        imageUrl: "https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-1.2.1&auto=format&fit=crop&w=1650&q=80",
                        beds: 3,
                        baths: 2,
                        title: 'Modern home in the city center',
                        price: 140000,
                        reviewCount: 34,
                        rating: 2,

                    },
                    {
                        imageUrl: "https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-1.2.1&auto=format&fit=crop&w=1650&q=80",
                        beds: 3,
                        baths: 2,
                        title: 'Modern home in the city center',
                        price: 140000,
                        reviewCount: 34,
                        rating: 3,

                    },
                    {
                        imageUrl: "https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-1.2.1&auto=format&fit=crop&w=1650&q=80",
                        beds: 3,
                        baths: 2,
                        title: 'Modern home in the city center',
                        price: 140000,
                        reviewCount: 34,
                        rating: 4,

                    },
                    {
                        imageUrl: "https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-1.2.1&auto=format&fit=crop&w=1650&q=80",
                        beds: 3,
                        baths: 2,
                        title: 'Modern home in the city center',
                        price: 140000,
                        reviewCount: 34,
                        rating: 5,

                    }
                ],
            }, 
            {
                title: 'Phoenix',
                description: "Escape the cold and enjoy great weather without breaking the bank.",
                properties: [
                    {
                    imageUrl: 'https://images.unsplash.com/photo-1447958272669-9c562446304f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80',
                    beds: 3,
                    baths: 2,
                    title: "Modern home in city center",
                    price: 190000,
                    reviewCount: 34,
                    rating: 4,
                    },
                    {
                    imageUrl: 'https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80',
                    beds: 4,
                    baths: 1,
                    title: "Quiet living outside the city",
                    price: 175000,
                    reviewCount: 12,
                    rating: 3,
                    },
                    {
                    imageUrl: 'https://images.unsplash.com/photo-1472224371017-08207f84aaae?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                    beds: 5,
                    baths: 4,
                    title: "Renovated apartment uptown",
                    price: 200000,
                    reviewCount: 54,
                    rating: 5,
                    },
                    {
                    imageUrl: 'https://images.unsplash.com/photo-1484154218962-a197022b5858?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                    beds: 3,
                    baths: 2,
                    title: "Family home in the suburbs",
                    price: 115000,
                    reviewCount: 34,
                    rating: 4,
                    },
                ]
            },
            {
                title: 'Dallas',
                description: "Experience Texas living in these awesome ranch-style homes.",
                properties: [{
                            imageUrl: 'https://images.unsplash.com/photo-1471231681582-352356ab45a0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80',
                            beds: 3,
                            baths: 2,
                            title: "Modern home in city center",
                            price: 190000,
                            reviewCount: 34,
                            rating: 4,
                        },
                        {
                            imageUrl: 'https://images.unsplash.com/photo-1533779283484-8ad4940aa3a8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80',
                            beds: 4,
                            baths: 1,
                            title: "Quiet living outside the city",
                            price: 175000,
                            reviewCount: 12,
                            rating: 3,
                        },
                        {
                            imageUrl: 'https://images.unsplash.com/photo-1432303492674-642e9d0944b2?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                            beds: 5,
                            baths: 4,
                            title: "Renovated apartment uptown",
                            price: 200000,
                            reviewCount: 54,
                            rating: 5,
                        },
                        {
                            imageUrl: 'https://images.unsplash.com/photo-1560185007-c5ca9d2c014d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                            beds: 3,
                            baths: 2,
                            title: "Family home in the suburbs",
                            price: 115000,
                            reviewCount: 34,
                            rating: 4,
                        },
                    ]

            }
        ]
        
    },

});
