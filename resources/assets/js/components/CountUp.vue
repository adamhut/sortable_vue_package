<template>
    <span v-text="count">

    </span>
</template>

<script>
    import inView from 'in-viewport';

    export default {
        props: {
            to: {
                type: Number,
                default: 0
            },
        },

        data() {
            return {
                count: 0,
                interval:null,
            }
        },

        mounted() {
            inView(this.$el,()=>{
                this.interval= setInterval(this.tick,20);
                //console.log('I am visable');
            });
        },
        computed: {
            increment() {
                return  Math.ceil(this.to/20);
            }
        },

        methods: {
            tick() {
                if(this.count + this.increment >= this.to)
                {
                    this.count = this.to;
                    
                    return clearInterval(this.interval);
                }
                
                return this.count += this.increment;

            },
        },
    }
</script>

<style scoped>

</style>