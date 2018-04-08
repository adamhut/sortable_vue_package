

<script>
    export default {
       // props:['item-class'],

        inject:['itemClass'],
        render(){
            return this.$slots.default[0];
        },

        mounted(){
            this.$el.classList.add(this.itemClass);
        }

    }   
</script>

<style scoped>

</style>