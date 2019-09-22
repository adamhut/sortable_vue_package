<template>
    <header class="bg-gray-900 sm:flex sm:justify-between sm:px-4 sm:py-3 sm:items-center">
        <div class="flex items-center justify-between  px-4 py-3 sm:p-0">
            <div class="">
                <img class="h-8" src="/img/logo-inverted.svg" alt="workcation">
            </div>  
            <div class="sm:hidden">
                <button 
                    type="button" 
                    class="text-gray-500 block hover:text-white focus:text-white focus:outline-none"
                    @click="isOpen = !isOpen"
                >
                    <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                        <path v-if="isOpen" fill-rule="evenodd" d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"/>
                        <path v-if="!isOpen" fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                    </svg>
                </button>
            </div>
        </div>
        <div class="px-2 pt-2 pb-4 sm:p-0 sm:block sm:flex " :class="isOpen ? 'block':'hidden'">
            <a href="#" class="block  text-white font-semibold rounded px-2 py-1 hover:bg-gray-800">List Your Property</a>
            <a href="#" class="mt-1 block  text-white font-semibold rounded px-2 py-1 hover:bg-gray-800 sm:mt-0 sm:ml-2">Trip</a>
            <a href="#" class="mt-1 block  text-white font-semibold rounded px-2 py-1 hover:bg-gray-800 sm:mt-0 sm:ml-2">Messages</a>
        </div>
    </header>
</template>

<script>
    export default {
        data() {
            return {
                isOpen: false
            }
        },
    }
</script>

<style lang="scss" scoped>

</style>