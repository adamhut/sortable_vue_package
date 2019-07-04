<template>
    <div>
        <a href="/#login" class="text-copy-primary hover:text-gray-600" @click.prevent="show">Register</a>
        <modal name="modal-register" @opened="opened">
            <div class="px-10 py-8">
                <h2 class="mb-4 uppercase tracking-wide text-xl">Login</h2>
                <form action="#" method="post">
                    <div class="form-group mt-4">
                        <label for="email" class="block font-normal uppercase tracking-wide text-xs mb-1">
                            Email
                        </label>
                        <input type="email" 
                            id="email" 
                            name="email" 
                            class="border px-4 py-2 w-full rounded bg-gray-100"
                            ref="email" 
                            @keydown.shift.tab.prevent=""
                        >
                    </div>
                    <div class="form-group mt-4">
                        <label for="password"
                            class="block font-normal uppercase tracking-wide text-xs mb-1"
                        >
                            Password
                        </label>
                        <input type="password" 
                            id="password" 
                            name="password"
                            class="border px-4 py-2 w-full rounded bg-gray-100"
                        >
                    </div>
                    
                    <div class="form-group mt-4">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded w-full"
                        >
                            Register
                        </button>
                    </div>
                </form>
                <div class="text-sm font-normal text-center mt-4">
                    <p>Already have an account? 
                        <a href="#" 
                            class="text-blue-600 hover:text-blue-800"
                            @click.prevent="showLogin" 
                            @keydown.tab.exact.prevent=""
                        >
                            Login
                        </a>
                    </p>
                </div>
            </div>

        </modal>
    </div>
</template>

<script>
    export default {

        mounted() {
            
        },

        methods: {
            show() {
                this.$modal.show('modal-register');
            },
            hide() {
                this.$modal.hide('modal-register');
            },
            opened(){
                this.refs.email.focus();
            },
            showLogin(){

                this.$modal.hide('modal-register');
                this.$modal.show('modal-login');
            }
        },
    }
</script>

<style lang="scss" scoped>

</style>