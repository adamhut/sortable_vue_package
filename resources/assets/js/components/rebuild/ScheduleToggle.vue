<template>
     <div class="w-40 bg-transistor-navy-dark text-transistor-navy-light mx-auto flex rounded overflow-hidden mb-4">
        <button type="button" 
            @click="select('monthly')" 
            class="focus:outline-none focus:shadow-outline rounded py-1 uppercase text-center w-1/2 text-xs tracking-wide font-bold"
            :class="[isMonthly? 'bg-white text-transistor-navy-darker':'hover:text-white hover:bg-transistor-navy text-transistor-navy-light']"
        >
            Monthly
        </button>
        <button type="button" 
            @click="select('yearly')" 
            class="focus:outline-none focus:shadow-outline rounded py-1 uppercase text-center w-1/2 text-xs tracking-wide font-bold  "
            :class="[isYearly? 'bg-white text-transistor-navy-darker':'hover:text-white hover:bg-transistor-navy text-transistor-navy-light']"
        >
            Yearly
        </button>
    </div>
</template>

<script>
    export default {
        props:['value'],
        data() {
            return {
                
            }
        },
        computed: {
            isMonthly() {
                return this.value === 'monthly';
            },
            isYearly(){
                return this.value === 'yearly';
            }
        },
        methods:{
            select(schedule){
                this.$emit('input',schedule);
            }
        }
    }
</script>

<style scoped>

</style>