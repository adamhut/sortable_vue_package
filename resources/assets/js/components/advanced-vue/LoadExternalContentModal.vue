<template>
    <modal-dialog :show="show" @close="cancel">
      <h1 class="text-center text-2xl font-bold mb-4">
        Are you sure?
      </h1>
      <p class="text-center text-grey-darker mb-6">
        <div>
            <div v-for="contact in contacts" :key="contact.id" class="flex items-center spaced-y-6">
                <img :src="contact.picture.medium" class="h-12 w-12 rounded-full block mr-2" alt="">
                <div>
                <div class="font-bold">
                    <slot :contact="contact"></slot>
                </div>
                <div class="text-grey-dark">
                    {{ contact.email }}
                </div>
                </div>
            </div>
        </div>
      </p>
      <div class="text-center">
        <button @click="cancel" type="button" class="btn btn-grey mr-4">
          Cancel
        </button>
        <button @click="confirmDelete" type="button" class="btn btn-red">
          Delete it
        </button>
      </div>
    </modal-dialog>
</template>

<script>
import ModalDialog from './ModalDialog'

export default {
    components:{
        ModalDialog,
    },
    
    props: ["show", "accountId"],
    
    data() {
        return {
             contacts: [],
        }
    },
    watch: {
       /*
       accountId(){
           if(this.accountId==5)
           {
                console.log(this.accountId);
                 this.updateValue();

                console.log(this.accountId);
            }
        
       }*/
        accountId: {
            immediate: true,
            handler(){
                console.log(this.accountId);
                console.log(this);
                if(this.accountId==5)
                {
                    this.updateValue();
                }
            }
        }
    },
    created(){
        console.log(this);
    },
    methods: {
        updateValue(){
            console.log(1);
            fetch('/contacts.json')
                .then(response=>response.json())
                .then(contacts=>{
                           this.contacts = contacts;
                });
        },
        cancel() {
            this.$emit("close")
        },


        confirmDelete() {
            console.log(`Deleting account ${this.accountId}...`)
            this.$emit("close")
        }
    },
}
</script>
