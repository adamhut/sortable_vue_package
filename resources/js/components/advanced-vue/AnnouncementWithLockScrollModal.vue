<template>
  <div class="modal-backdrop" v-show="show">
    <!--<div class="modal" @keydown.esc="dismiss" tabindex="0" ref="modal">-->
    <div class="modal">
      <h1 class="text-center text-2xl font-bold mb-4">
        Exciting new features are here!
      </h1>
      <p class="text-center text-grey-darker mb-6">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At ut eligendi quod tempore totam explicabo sit consectetur architecto? Tempora, repellat est rem ut esse ab officia saepe ratione tempore. Obcaecati.
      </p>
      <div class="text-center">
        <button @click="dismiss" type="button" class="btn btn-blue">
          Dismiss
        </button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
    props: {
        show:{
            required:true,
        },
        preventBackgroundScrolling:{
            default:true,
        },
    },
   
    watch:{
        show:{
            immediate:true,
            handler:function(show){
                if(show){
                    this.preventBackgroundScrolling && document.body.style.setProperty('overflow','hidden');
                } else{
                    this.preventBackgroundScrolling && document.body.style.removeProperty('overflow');
                }
            }
        },

    },
    
    created(){
        const escapeHandler = (e)=>{
            if(e.key === 'Escape' && this.show && e.keyCode ===27 ){
                this.dismiss();
            }
        }
        document.addEventListener('keydown',escapeHandler);

        this.$once('hook:destroyed',()=>{
            document.removeEventListener('keydown',escapeHandler);
        })
    },
    /*
    destroyed(){
        document.removeEventListener('keydown',this.escapeHandler);
    },
    */
    methods: {
        dismiss() {
            this.$emit("close")
        }
    }
}
</script>


<style>
.modal:focus{
    outline:0;
}
.modal-open{
    max-height: 100vh;
    overflow: hidden;
}
</style>