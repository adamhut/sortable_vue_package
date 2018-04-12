<template>
   <div class="min-h-screen text-black bg-grey-lighter p-8">
    <div class="bg-white rounded shadow-lg max-w-md mx-auto py-8 px-4">
        <pikaday-item v-model="adate">
            <input type="text" class="mr-3" v-model="adate">
        </pikaday-item>
    </div>
   </div>
</template>

<script>
    import  PikadayItem from './PikadayItem'
    export default {
        data() {
            return {
                adate: '2018-04-12'
            }
        },
        components:{
            PikadayItem,
        },


    }
</script>

<style scoped>

</style>