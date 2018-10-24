<template>
    <portal to="modals" v-if="show">
        <div class="modal-backdrop">
            <div class="modal">
                <slot></slot>
            </div>
        </div>
    </portal>
</template>

<script>
    export default {
        props: ['show'],

        watch:{
            show:{
                immediate:true,
                handler:function(show){
                    if(show){
                        this.preventBackgroundScrolling && document.body.style.setProperty('overflow','hidden');
                    } else{
                        !this.preventBackgroundScrolling && document.body.style.removeProperty('overflow');
                    }
                }
            },
        },
        created(){
            const escapeHandler = (e)=>{
                if(e.key === 'Escape' && this.show){
                    this.cancel();
                }
            }

            document.addEventListener('keydown',escapeHandler);

            this.$once('hook:destroyed',()=>{
                document.removeEventListener('keydown',escapeHandler);
            })
        },
        methods: {
            cancel() {
                this.$emit("close");
            },
        },
    }
</script>

<style scoped>

</style>