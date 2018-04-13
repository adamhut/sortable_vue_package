
<script>
    import Pikaday from 'Pikaday'
    //import Pikaday from 'Pikaday'
    export default {
         props:{
            minDate: {},
            maxDate: {},
            defaultDate: {},
            value:{
                require:true,
            },
            format: {
                default: 'YYYY-MM-DD',
                type: String
            },
            firstDay: {
                default: 1,
                type: Number
            },
            calendarIcon: {
                default: true,
                type: Boolean
            },
            itemClass:{
                    default:'date-picker'
            },
            
        },
        data() {
            return {
               // item: this.value,

               currentDate:'',
            }
        },
         watch: {
            minDate (newMinDate) {
                this.picker.setMinDate(newMinDate)
                if (this.currentDate < newMinDate) {
                    this.picker.setDate('1970-01-01', true)
                }
            },
            maxDate (newMaxDate) {
                this.picker.setMaxDate(newMaxDate)
                if (this.currentDate > newMaxDate) {
                    this.picker.setDate(newMaxDate)
                }
            }
        },
        mounted(){
           this.picker = new Pikaday({
                field: this.$el,
                format: this.format,
                firstDay:this.firstDay,
                onSelect: (date)=>{
                   // console.log(date),
                    this.currentDate = this.picker.getMoment().toDate();
                    //console.log(picker.getMoment().format('YYYY-MM-DD'));
                    // /this.$emit('input');
                    // /field.value = picker.getMoment().toString();
                    //this.item =;
                    this.$emit('input',  this.picker.getMoment().format('YYYY-MM-DD'));
                },
            })
            this.currentDate = this.defaultDate;
            this.$el.classList.add(this.itemClass);
            if(this.calendarIcon)
            {
                 this.$el.classList.add('calendar-icon');
            }
        },
    
        render(){        
            return this.$slots.default[0]   //
            /*
            return this.$scopedSlots.default({
                items:this.value,
                //itemClass :this.itemClass,
                //handleClass :this.handleClass
            });
            */           
        }
    }
</script>

<style src="pikaday/css/pikaday.css"></style>
<style scoped>
input.date-picker.calendar-icon {
  background-image: url(/static/calendar.png);
  background-repeat: no-repeat;
  background-position: right;
}
.date-picker {
 /* width: 150px;
  margin-right: 0;
  margin-left: 0;
  border: 1px solid #ccc;
  padding: 9px 0;
  line-height: 1.1;
  color: #444;
  border-radius: 3px;
  text-indent: 13px;
  cursor: pointer;
  */
}
</style>