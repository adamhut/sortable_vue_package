<template>
    <div>
        <a 
            class="text-transparent-50 hover:text-white"
            @click="$modal.show('contact-support-modal')" 
        >
        Support
        </a>
        <modal 
            name="contact-support-modal"
            height="auto"
            width="100%"
            :pivotY="1"
            classes="bg-white rounded-none shadow-inner "   
        >
            <div class="py-6 container mx-auto">
                <h1 class="text-center text-2xl">have a Question?</h1>
                <form 
                    autocomplete="off"
                    class="p-8 lg:w-1/2 md:mx-auto"
                    @submit.prevent="contactSupport"
                    @keydown="submitted = false"
                >
                    <div class="control">
                        <input 
                            type="text"
                            name="name"
                            id="name"
                            class="input is-minimal"
                            placeholder="what is your name"
                            v-model="message.name"
                            @keydown="delete error.name"
                            required
                        />
                        <span 
                            class="text-xs text-red pt-2" 
                            v-text="error.name[0]"
                            v-if="error.name"
                        ></span>
                    </div>
                    <div class="control">
                        <input 
                            type="text"
                            name="email"
                            id="email"
                            class="input is-minimal"
                            placeholder="what is your email"
                            v-model="message.email"
                            required
                             @keydown="delete error.email"
                        />
                        <span 
                            class="text-xs text-red pt-2" 
                            v-text="error.email[0]"
                            v-if="error.email"
                        ></span>
                    </div>
                    <div class="control">
                        <textarea 
                            type="text"
                            name="question"
                            id="body"
                            class="textarea is-minimal"
                            placeholder="what is your question"
                            v-model="message.question"
                            required
                             @keydown="delete error.question"
                        >
                        </textarea>
                        <span 
                            class="text-xs text-red pt-2" 
                            v-text="error.question[0]"
                            v-if="error.question"
                        ></span>
                    </div>
                    <div class="control">
                        <input 
                            type="text"
                            name="verification"
                            id="verification"
                            class="input is-minimal"
                            placeholder="what is 1 + 4?"
                            v-model="message.verification"
                            required
                            @keydown="delete error.verification"
                        />
                        <span 
                            class="text-xs text-red pt-2" 
                            v-text="error.verification[0]"
                            v-if="error.verification"
                        ></span>
                    </div>
                    <div class="flex justify-end">
                        <a 
                            class="button is-default mr-4 py-1"
                            @click="cancel"
                        >
                            Cancel
                        </a>
                        <button class="button is-blue py-1" type="submit" :disabled="submitted">Sent</button>
                    </div>
                </form> 
                contact content
            </div>
        </modal>
    </div>

</template>

<script>
    
    export default {
        data() {
            return {
                message: {},
                errors:{},
                submitted:false,
            }
        },
        methods: {
            cancel(){
                this.$modal.hide('contact-support-modal');
                this.resetForm();
            },
            contactSupport() {
                this.submitted = true;
                axios
                    .post('/contact',this.message)
                    .catch(errors =>{
                        this.errors =errors.response.data.errors;

                    })
                    .then(()=>{
                      
                        this.resetForm();
                        this.$modal.hide('contact-support-modal');
                        swal('Thanks! we will be in touch soon.');
                    });
            },
            resetForm(){
                this.message = {};
                this.submitted = false;
            }
        },
    }
</script>

<style scoped>

</style>