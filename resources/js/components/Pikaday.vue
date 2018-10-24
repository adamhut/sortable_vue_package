<template>
   <div class="min-h-screen text-black bg-grey-lighter p-8">
    <div class="bg-white rounded shadow-lg max-w-md mx-auto py-8 px-4">
        <pikaday-item v-model="form.body" :first-day="firstDay">
            <input type="text" class="bg-purple-white shadow rounded border-1 p-1" v-model="form.body">
        </pikaday-item>
    </div>
   </div>
</template>

<script>
    import  PikadayItem from './PikadayItem'
    export default {
        data() {
            return {
                firstDay: 0,
                form:{
                    body:'',
                },
            }
        },
        components:{
            PikadayItem,
        },
        




    }
</script>
