
<script>
    import Pikaday from 'Pikaday'
    //import Pikaday from 'Pikaday'
    export default {
         props:{
            value:{
                require:true,
            },
        },
        data() {
            return {
                item: this.value,
            }
        },
        
        mounted(){
            let picker = new Pikaday({
                field: this.$el,
                onSelect: (date)=>{
                    console.log(picker.getMoment().format('YYYY-MM-DD'));
                    // /this.$emit('input');
                    // /field.value = picker.getMoment().toString();
                    this.item = picker.getMoment().format('YYYY-MM-DD');
                    this.$emit('input', this.item);
                },
            })


        },
    
        render(){        
            return this.$slots.default[0]   //

           /* return this.$scopedSlots.default({
                items:this.value,
                //itemClass :this.itemClass,
                //handleClass :this.handleClass
            });
            */
        }
    }
</script>

<style scoped>

</style>