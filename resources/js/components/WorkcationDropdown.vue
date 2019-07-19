<template>
    <div class="relative">
        <button 
            @click="toggle" 
            type="button"
            class="block focus:outline-none"
            @focus="buttonHasFocus = true" 
            @blur="buttonHasFocus = false"
        >
            <slot name="trigger" :hasfocus="buttonHasFocus" :isOpen="isOpen"></slot>
        </button>
        <div :class="[isOpen ? 'block':'hidden']">
            <button @click="isOpen=false" v-if="isOpen"
                class="block fixed opacity-0 inset-0 cursor-default w-full h-full z-30 focus:outline-none"
                type="button"></button>
            <div class="z-40 absolute right-0 ">
                <slot name="dropdown"></slot>
            </div>
        </div>
    </div>
</template>

<script>
   export default {
        
        data() {
            return {
                buttonHasFocus:false,
                isOpen: false,
                isOpen:false,
            }
        },
        mounted() {
            const onEscape = (e)=>{
                if(!this.isOpen ||  e.key!=='Escape'){
                    return;
                }

                this.isOpen = false;
            }

            document.addEventListener('keydown',onEscape);

            this.$on('hook:destroyed',()=>{
                document.removeEventListener('keydown',onEscape);
            }) ;  
        },


        methods: {
            toggle() {
                this.isOpen = !this.isOpen
            },
            toggle(){
                this.isOpen = !this.isOpen;
            }
        },
    }
</script>

<style lang="scss" scoped>

</style>