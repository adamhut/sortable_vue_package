<template>
    <div>
        <selectable-plan></selectable-plan>
        <input type="radio" id="one" value="One" v-model="picked">
        <label for="one">One</label>
        <br>
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
                picked:'',
            }
            
        },
        components:{
            SelectablePlan,
        },
    }
</script>

<style scoped>

</style>