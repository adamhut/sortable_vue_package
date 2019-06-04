<template>
    <div :id="name" 
        class="overlay "
        style="background:rgba(0,0,0,.7)"
    >
        <a href="#" class="absolute w-full h-full"></a>
        <div class="modal w-128 max-w-128 bg-white rounded-lg p-4 relative text-black  opacity-100 ">
            <slot></slot>
            <footer class=" flex mt-6 justify-end">
                <slot name="footer"></slot>
            </footer>
            <a href="#" class="absolute top-0 text-2xl text-gray-600 right-0 hover:no-underline" style="right:15px;">&times;</a>
        </div>

    </div>
</template>

<script>
    export default {
        props: ['name'],
        data() {
            return {
                key: 1
            }
        },
        methods: {
            hide(name) {
                
            }
        },
    }
</script>

<style lang="scss" scoped>
    .overlay {
        @apply .absolute .inset-0 .flex .justify-center .items-center;
        visibility: hidden;
        transition: opacity 1.3s;
        opacity: 0;
    }

    .overlay:target {
        visibility: visible;
        opacity: 1;
    }


    footer:empty{
        @apply hidden;
    }
</style>