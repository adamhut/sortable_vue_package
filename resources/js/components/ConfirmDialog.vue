<template>
    <modal name="dialog">
        {{params.message}}
        <template v-slot:footer>
            <button 
                class="bg-gray-500 hover:bg-gray-600 py-2 px-4 text-white rounded-lg mr-2" 
                @click.prevent="handleClick(false)"
                v-text="params.cancelButton"
            >
            </button>
            <button 
                class="bg-blue-500 hover:bg-blue-600 py-2 px-4 text-white rounded-lg" 
                @click.prevent="handleClick(true)"
                 v-text="params.confirmButton"
            >
            </button>
        </template>
    </modal>
</template>

<script>
    import Modal from '../plugins/modal/ModalPlugin';

    export default {
        data() {
            return {
                params:{
                    message: 'are you sure?',
                    confirmButton:'Continue',
                    cancelButton : 'Cancel',

                },

            }
        },
        beforeMount() {
            // listen for that event
            //fetch the param 
            // and assign it to the data object
            Modal.events.$on('show',params => {
                // this.message = params.message;
                Object.assign(this.params,params);
            });
        },
        methods: {
            handleClick(confirmed) {
                Modal.events.$emit('clicked',confirmed);

                this.$modal.hide();
            }
        },
    }
</script>

<style lang="scss" scoped>


</style>