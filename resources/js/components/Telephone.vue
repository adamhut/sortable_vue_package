<template>
    <div class=" mt-6">
        <input 
            type="text" 
            class="w-64text-2xl bg-gray-300 py-2 px-3 rounded-lg focus:outline-none" 
            placeholder="(XXX) XXX-XXXX"
            v-model="number"
        >

    </div>
</template>

<script>
    export default {
        data() {
            return {
                number: ''
            }
        },
    }
</script>

<style lang="scss" scoped>

</style>