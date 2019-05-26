<template>
    <div class="dropdown relative" >
        <div class="dropdown-trigger " 
             @click="isOpen = !isOpen"
             aria-haspopup="true"
             :aria-expanded="isOpen"
        >
            <slot name="trigger"></slot>
        </div>
        <transition name="pop-out-quick">
            <ul class="dropdown-menu absolute bg-black text-white py-2 rounded shadow mt-2 z-10" :class="classes" v-show="isOpen">
                <slot></slot>
            </ul>
        </transition>
    </div>
</template>

<script>
    export default {
        props: ['classes'],
        data() {
            return {
                isOpen: false,
            }
        },
        watch: {
            isOpen(isOpen){
                document.addEventListener('click',this.closeIfClickOutsite)
            }
        },

        methods: {
            closeIfClickOutsite(event) {
               if(!event.target.closest('.dropdown'))
               {
                   this.isOpen = false;
                   document.removeEventListener('click',this.closeIfClickOutsite);
               }
            }
        },

    }
</script>

<style lang="scss" scoped>
    .pop-out-quick-enter-active,
    .pop-out-quick-leave-active {
        transition: all 0.4s;
    }

    .pop-out-quick-enter,
    .pop-out-quick-leave-active {
        opacity: 0;
        transform: translateY(-7px);
    }
    
</style>