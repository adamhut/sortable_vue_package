<template>
    <div>
        <plan-card name="Starter" monthly="19" :selected="true"></plan-card>
        <plan-card name="Perfessional" monthly="49"  :selected="false"></plan-card>
        <plan-card name="Small Business" monthly="99"  :selected="false"></plan-card>      
    </div>
</template>

<script>
    import PlanCard from './PlanCard';
    export default {
        props: [],
        components:{
            PlanCard,
        }
    }
</script>

<style scoped>

</style>