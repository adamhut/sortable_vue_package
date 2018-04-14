<script>
    import Flickity from 'flickity';
    import 'flickity/dist/flickity.min.css';

    export default {
        props: {
            wrapAround: {
                type: Boolean,
                default: true,
            },
            autoPlay:{
                type: Boolean,
                default: false,
            }
        },
        mounted(){
            new Flickity( this.$el, {
                    // options
                    wrapAround: this.wrapAround,
                    autoPlay: this.autoPlay,
                    cellAlign:'left',
                    contain :true,
            });
        },
        render(){
            return this.$slots.default[0];
        },
    }
</script>

<style scoped>

</style>