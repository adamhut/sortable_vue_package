<template>
    <div class="relative">
        <button 
            class="relative z-10 block h-8 w-8 rounded-full overflow-hidden  border-2 border-gray-600 focus:outline-none focus:border-white"
            @click="isOpen=!isOpen"
        >
            <img class="h-full w-full object-cover" src="https://avatars0.githubusercontent.com/u/4724832?s=460&v=4" alt="my avatar">
        </button>
        <button 
            v-if="isOpen" 
            @click="isOpen = false" 
            tapindex="-1"
            class="fixed w-full h-full inset-0 bg-black opacity-50 cursor-default"
        ></button>
        <transition>
            <div v-if="isOpen" class="py-2 w-48 mt-2 shadow-xl bg-white rounded-lg absolute right-0">
                <a href="#" class="block py-2 px-4 text-gray-800 hover:bg-indigo-500 hover:text-white">Account Setting</a>
                <a href="#" class="block py-2 px-4 text-gray-800 hover:bg-indigo-500 hover:text-white">Support</a>
                <a href="#" class="block py-2 px-4 text-gray-800 hover:bg-indigo-500 hover:text-white">Sign Out</a>
            </div>
        </transition>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                isOpen:false,
            }
        },
        created() {
            const handleEscape =(e)=>{
                if(e.key =='Esc' || e.key =='Escape' )
                {
                    this.isOpen= false
                }
            }
            document.addEventListener('keydown',handleEscape);

            this.$once('hook:boforeDestroy',()=>{
                 document.removeEventListener('keydown',handleEscape);
            })
        },
        
    }
</script>

<style lang="scss" scoped>

</style>