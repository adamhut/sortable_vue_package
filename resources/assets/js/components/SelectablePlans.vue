<template>
    <div>
        <div class="md:w-custom mx-auto py-8 md:flex md:justify-between md:flex-wrap"> 
            <selectable-plan
                v-for="(plan,index) in plans"
                :key="index" 
                :plan="plan"
                v-model="activePlan"
            >
            </selectable-plan>
        </div>
        <input type="radio" id="one" value="One" v-model="picked">
        <input type="radio" id="two" value="Two" v-model="picked">
        <label for="two">Two</label>
        <br>
        <span>Picked: {{ picked }}</span>
      
    </div>
</template>

<script>
import SelectablePlan from './SelectablePlan';

    export default {
        data(){
            return{
                plans:[
                    {
                        name:'Hobby',
                        gigs:'10',
                        dollars:'10',
                    },
                    {
                        name:'Stater',
                        gigs:'15',
                        dollars:'15',
                    },
                    {
                        name:'Silver',
                        gigs:'20',
                        dollars:'20',
                    },
                    {
                        name:'Pro',
                        gigs:'40',
                        dollars:'40',
                    },
                ],
                picked:'',
                activePlan:'',
            };
            
        },
        components:{
            SelectablePlan,
        },
        // methods: {
        //     udpateActivePlan(plan) {
        //         this.activePlan= plan;
        //     }
        // },
    }
</script>

<style scoped>

</style>