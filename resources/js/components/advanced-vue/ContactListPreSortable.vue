<template>
   <div class="contact-list" slot-scope="{ items: contacts }">
                        <div class="contact-list-item">
                            <div class="contact-list-contact">
                                <img :src="contact.avatar" class="contact-list-avatar" alt="">
                                <div>
                                    <div class="contact-list-name">
                                        @{{ contact.name }}
                                    </div>
                                    <div class="contact-list-email">
                                        @{{ contact.email }}
                                    </div>
                                </div>
                            </div>
                            <svg class="contact-list-handle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path fill-rule="evenodd" d="M14 4h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1zM8 4h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1zm6 6h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1zm-6 0h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1zm6 6h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1zm-6 0h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1z"/></svg>
                        </div>
                    </div>
</template>

<script>
    export default {
        props:['contacts'],
        data() {
            return {
                contacts: [],
            }
        },   
    }
</script>

<style scoped>

</style>