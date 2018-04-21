<template>
    <div class="flex" style="min-height:500px">
        <div class="w-3/4 bg-grey-lightest p-8 flex flex-warp justify-center items-center">
            <a :href="testimonial.link"
               :id="`testimonial-${++index}`"
               class="p-4"
               target="_blank"
               v-for="(testimonial,index) in testimonials"
               @mouseover="updateFeaturedTestimonial(testmonial)"
               @mouseout="clearTimer"
            >
                <img :src="`/images/reviews/${testimonial.avatar}`" 
                     :alt="testimonial.name"
                     class="is-circle w-12 border-2 border-solid hover:border-blue-darker"
                     :class="featuredTestmonial.id === testimonial.id ?'border-blue-darker':'border-transparent'"
                >
            </a>

        </div>

        <!--right-->
        <div class="w-2/5 bg-grey-lighter text-center-flex items-center p-10 justify-center">
            <div>
                <img class="rounded-full mb-2" 
                :src="`/images/reviews/${featuredTestimonial.avatar}`" 
                :alt="featuredTestimonial.name">

                <p class="text-black font-bold text-xs mb-6" v-text="featuredTestimonial.name">     
                </p> 
                <p class="text-grey-dark mb-8" v-text="featuredTestimonial.body"></p>
                
                <a href="/testimonials" class="bg-blue rounded-full text-white font-bold text-xs py-3 px-8 uppercase">
                testimonials
                </a>
            </div>
        </div>
    </div>
</template>

<script>
import _ from 'lodash';
    export default {
        props: {
        },        

        data() {
            return {
                testimonials: [],
                featruedTestimonials: {},
                timer:null,
            }
        },
        created(){
            axios.get('api/testimonials')
                .then((testimonials)=>{
                    this.testimonials = testimonials;
                    this.featruedTestimonials = testimonials[0];
                })
        },
        methods: {
            updateFeaturedTestimonial(testimonial) {
                /*
                _.debounce(function(testmonial){
                    this.featuredTestimonial = testimonial;
                },200);
                  */  
               
                this.timer = setTimeout(() => {
                     this.featuredTestimonial = testimonial;
                }, 2000);
            },
            clearTimer(){
                clearTimeout(this.timer);
            }
        },
    }
</script>

<style scoped>

</style>