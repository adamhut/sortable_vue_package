<template>
    <div class="mb-8 flex">
        <div class="mr-4">
                <span class="border border-solid border-grey-dark rounded-full w-6 h-6 flex justify-center items-center text-xs text-grey-dark leading-none cursor-pointer"  
                    @click="toggle"
                >
                    <svg v-if="isOpen" xmlns="http://www.w3.org/2000/svg" width="12" height="16" viewBox="0 0 12 16" class="fill-current">
                        <path d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"/>
                    </svg>
                    <svg v-else xmlns="http://www.w3.org/2000/svg" width="12" height="16" viewBox="0 0 12 16" class="fill-current">
                        <path d="M12 9H7v5H5V9H0V7h5V2h2v5h5z"/>
                    </svg>   
                </span>           
            </div>
        <div class="leading-loose">
            <h3 v-text="item.quesiton" 
                class="font-bold text-2xl mb-3 text-black cursor-pointer leading-none"
                @click="toggle"
            >
            </h3>

            <div v-html="item.answer" v-show="isOpen"></div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['item','isOpen'],
        methods: {
            toggle() {
                this.$emit('toggled',this.$vnode.key);
            }
        },
    }
</script>

<style scoped>

</style>