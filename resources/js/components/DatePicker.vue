<template>
    <div>
        <input 
            class="hidden" 
            type="text" 
            id="datepicker-trigger" 
            placeholder="Select dates"
            :value="formatDates(dateOne, dateTwo)"
        >
        <AirbnbStyleDatepicker 
            :trigger-element-id="'datepicker-trigger'" 
            :mode="'single'" 
            :inline="true"
            :monthsToShow="1" 
            :date-one="dateOne" 
            @date-one-selected="val => { dateOne = val }" 
        />
    </div>
</template>

<script>
 import format from 'date-fns/format'
    export default {
        data() {
            return {
                dateFormat: 'YYYY-MM-DD',
                dateOne: '',
                dateTwo: '',
            }
        },
        methods: {
            formatDates(dateOne, dateTwo) {
                let formattedDates = ''
                if (dateOne) {
                    formattedDates = format(dateOne, this.dateFormat)
                }
                if (dateTwo) {
                    formattedDates += ' - ' + format(dateTwo, this.dateFormat)
                }
                return formattedDates;
            }
        },
    }
</script>

<style>
  .asd__days-legend {
    width: 288px !important;
  }
  .asd__wrapper--datepicker-open {
    width: 288px !important;
  }
  .asd__month {
    width: 295px !important;
  }
</style>