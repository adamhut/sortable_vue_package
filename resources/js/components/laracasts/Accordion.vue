<template>
    <div>
        <accordion-item
            v-for="(item ,index) in items"
            :item="items"
            :key="index"
            :is-open="activeItemIndex == index"
            @toggled="onToggle"
        >
        </accordion-item>
    </div>
</template>

<script>
import AccordionItem from './AccordionItem';
    export default {
        props: ['items'],
        components:{
            AccordionItem
        },
        data() {
            return {
                activeItemIndex: null,
            }
        },
       
        methods: {
            onToggle(index) {
                if(this.activeItemIndex == index)
                {
                    return (this.activeItemIndex = null);
                     
                }

                this.activeItemIndex = index;
            }   
        },
    }
</script>

<style scoped>

</style>