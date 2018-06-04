<template>
     <input :value="value" 
        type="text" 
        ref="input"  
        class="form-input" 
        placeholder="input a date" 
    />
</template>

<script>
    import Pikaday from 'Pikaday';
    import 'pikaday/css/pikaday.css';

    export default {
        props: {
            value: {
                required:true,
                type: String,
                default:'' 
            },
            format: {
                default: 'YYYY-MM-DD',
            },
            options:{
                default:{}
            }

        },
       
        mounted(){
            const picker = new Pikaday({
                //field: this.$el,
                field:this.$refs.input,
                format: this.format,
                //firstDay:this.firstDay,
                onSelect: (date)=>{
                   // this.currentDate = this.picker.getMoment().toDate();
                   // this.$emit('input',  this.picker.getMoment().format('YYYY-MM-DD'));
                   this.$emit('input',picker.toString());
                  
                },
                ...this.options,
            })
        }
    }
</script>

<style scoped>

</style>