<template>
    <div class="flex" style="min-height:500px">
        <div>

        </div>

        <!--right-->
        <div class="w-2/5 bg-grey-lighter text-center-flex items-center p-10">
            <div>
                <img class="rounded-full mb-2" src="" alt="">

                <p class="text-black font-bold text-xs mb-6">
                
                </p> 
                <p class="text-grey-dark mb-8">

                </p>
                
                <a href="/testimonials" class="bg-blue rounded-full text-white font-bold text-xs py-3 px-8 uppercase">
                testimonials
                </a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
        },        

        data() {
            return {
                testimonials: []
            }
        },
        created(){
            axios.get('api/testimonials')
                .then((testimonials)=>{
                    console.log(testimonials);
                })
        }
    }
</script>

<style scoped>

</style>