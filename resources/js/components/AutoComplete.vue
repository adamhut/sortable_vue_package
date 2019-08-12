<template>
    <div class="flex flex-col items-center">
        <div class="absolute inset-0 z-0" @click="modal=false"></div>
        <input 
            type="text" 
            class="bg-gray-300 rounded px-4 py-2 z-10" 
            v-model="state"
            autocomplete="off"
            @input="filterStates()"
            @focus="modal = true"
        >
        <div v-if="filteredStates && modal" class="relative z-10">
            <ul class="w-48 bg-gray-800 text-white">
                <li v-for="filteredState in filteredStates" 
                    class="px-2 py-2 border-b cursor-pointer" 
                    @click="setState(filteredState)">
                    {{filteredState}}
                </li>
            </ul>
        </div>

    </div>
</template>

<script>
    export default {
        data() {
            return {
                modal:false,
                state:'',
                states:[
                    'Alabama','Alaska','Arizona','Arkansas','California','Colorado','Connecticut','Delaware','District of Columbia','Florida','Georgia','Hawaii','Idaho','Illinois','Indiana','Iowa','Kansas','Kentucky','Louisiana','Maine','Montana','Nebraska','Nevada','New Hampshire','New Jersey','New Mexico','New York','North Carolina','North Dakota','Ohio','Oklahoma','Oregon','Maryland','Massachusetts','Michigan','Minnesota','Mississippi','Missouri','Pennsylvania','Rhode Island','South Carolina','South Dakota','Tennessee','Texas','Utah','Vermont','Virginia','Washington','West Virginia','Wisconsin','Wyoming'
                ],
                filteredStates:[],
            }
        },
        mounted() {
            this.filterStates();
        },
        computed: {
            
        },
        watch: {
            state(){
                this.filterStates();
            }
        },
        methods: {
            filterStates() {
                if(this.state.length==0)
                {
                    this.filteredStates = this. states;
                }
                this.filteredStates = this.states.filter(state=>{
                    return state.toLowerCase().startsWith(this.state);
                });
            },
            setState(state){
                this.state= state;
                this.modal = false
            }
        },
    }
</script>

<style lang="scss" scoped>

</style>