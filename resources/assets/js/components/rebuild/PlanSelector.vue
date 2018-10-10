<template>
    <div>
        <plan-card @select="selectPlan('Starter')" :schedule="schedule" name="Starter" monthly="19" yearly="190" :selected="selectedPlan === 'Starter'" :features="[
            '5,000 downloads / month',
            'Unlimited shows and episodes',
            'Analytics, teams, and more…',
        ]">
            
        </plan-card>
        <plan-card @select="selectPlan('Perfessional')" :schedule="schedule" name="Perfessional" monthly="49" yearly="490"  :selected="selectedPlan === 'Perfessional'" :features="[
            '15,000 downloads / month',
            'Unlimited shows and episodes',
            'Analytics, teams, and more…',
        ]">
           
        </plan-card>
        <plan-card @select="selectPlan('Small Business')" :schedule="schedule" name="Small Business" monthly="99" yearly="990" :selected="selectedPlan === 'Small Business'"  :features="[
            '45,000 downloads / month',
            'Unlimited shows and episodes',
            'Analytics, teams, and more…',
        ]">
        </plan-card>      
    </div>
</template>

<script>
    import PlanCard from './PlanCard';
    export default {
        props: ['schedule','selectedPlan'],
        components:{
            PlanCard,
        },
        data() {
            return {
                //selectedPlan: 'Starter',
            }
        },
        methods(){
            selectPlan(plan){
                this.selectedPlan = plan
            }
        }
        
    }
</script>

<style scoped>

</style>