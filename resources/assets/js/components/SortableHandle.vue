

<script>
    export default {
        //props:['handle-class'],

        inject:['handleClass'],
        render(){
            return this.$slots.default[0];
        },

        mounted(){
             this.$el.classList.add(this.handleClass);

        }

    }   
</script>

<style scoped>

</style>