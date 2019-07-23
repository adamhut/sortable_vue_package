<template>
    <div>
        <ul class="flex mb-4 border-b border-gray-400" role="tablist">
            <li 
                v-for="(tab,index) in tabs" 
                class=" px-4 py-2 bg-white"
                :class="{'border border-b-0  border-gray-400 rounded-t-lg -mb-px' : tab.isActive }"
               
            >
                <button 
                    type="button"
                    v-text="tab.title"
                    :class="{'font-bold' : tab.isActive}"
                    class="focus:outline-none"
                    role="tab"
                    aria-selected="tab.isActive"
                    @click="activeTab =tab"
                >
                </button>
            </li>
        </ul>

        <slot></slot>
    </div>
</template>

<script>
    export default {
        

        data() {
            return {
                tabs:[],
                activeTab: null
            }
        },

        mounted() {
            console.log(this);

            this.tabs = this.$children;

            this.setInitialActiveTab();

           
        },

        watch: {
            activeTab(activeTab){
                this.tabs.map(tab => (tab.isActive = tab == activeTab));
            }
        },  
        methods: {
            
            setInitialActiveTab() {
                this.activeTab  =  this.$children.find(tab=> tab.active == true) || this.tabs[0];
                
                //this.tabs[0].show = true;

            }
        },
    }
</script>

<style lang="scss" scoped>

</style>