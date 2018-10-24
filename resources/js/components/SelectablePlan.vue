<template>     
       <div class="w-48 
                    bg-white 
                    rounded-lg 
                    shadow-md 
                    p-6 
                    cursor-pointer 
                    hover:bg-green-lightest
                    mb-8 
                    outline-none 
                    focus:outline-none 
                    focus:shadow-outline-green" 
                    :class="{'bg-green-lightest shadow-outline-green' : isActive}"
                tabindex="0"
                @click="updateActivePlan"
                @keydown.space="updateActivePlan"
        >
            <div class="flex justify-between items-center mb-3">
                <h1 class="uppercase text-base tracking-wide text-blue-darker my-2" v-text="plan.name"></h1>
                <div v-if="isActive">
                    <svg class="w-6 h-6" viewBox="0 0 200 200" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="checkmark-outline" fill-rule="nonzero">
                                <path d="M31.1442786,171.840796 C5.2779518,146.858262 -5.09578082,109.862896 4.01023318,75.0738981 C13.1162472,40.2848999 40.2848999,13.1162472 75.0738981,4.01023318 C109.862896,-5.09578082 146.858262,5.2779518 171.840796,31.1442786 C209.549474,70.1869539 209.010186,132.247241 170.628714,170.628714 C132.247241,209.010186 70.1869539,209.549474 31.1442786,171.840796 Z" id="Shape" fill="#97EBDC"></path>
                                <polygon id="Path" fill="#00836D" points="66.6666667 89.4527363 89.5522388 112.437811 132.338308 69.6517413 146.268657 83.7810945 89.5522388 140.298507 52.7363184 103.482587 66.6666667 89.3532338"></polygon>
                            </g>
                        </g>
                    </svg>
                </div>
            </div><!--End Box Header Section-->
            <div class="mb-1 font-semibold text-blue-darker">
                <span class="text-4xl mr-2" v-text="plan.gigs"></span>
                <span class="text-2xl">GB</span>
            </div>
            <div>
                <span class="text-xl text-blue-alternate tracking-tight">$</span><span class="text-xl font-semibold text-blue-darker" v-text="plan.dollars"></span>
                <span class="text-xl  text-blue-alternate mx-1">/</span>
                <span class="text-xl text-blue-alternate">mo</span>
            </div>

        </div><!-- End of BOX-->

        



</template>

<script>
    export default {
        model:{
            prop:'activePlan',
            event:'planActive'
        },
        props:{
             plan: {
                type: Object,
                default: {},
            },
            activePlan:{
                type: String,
                default: '',
            }
        },
        computed: {
            isActive() {
                return this.activePlan== this.plan.name; 
            }
        },
        methods: {
            updateActivePlan() {
                
                this.$emit('planActive',this.plan.name);
            }
        },
    
    }
</script>

<style scoped>

</style>