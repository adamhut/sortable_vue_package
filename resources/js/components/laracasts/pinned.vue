<template>
    <div>
        <slot></slot>
    </div>
</template>

<script>
import {throttle} from 'lodash'
export default {
    mounted(){
        let el = this.$el;

        let originalOffsetY = this.$el.offsetTop;
        
        window.addEventListener(
            'scroll',
            throttle(function(){

                /* el.classList[
                    window.scrollY>= originalOffsetY?'add':'remove'
                ](
                    'fixed',
                    'w-full',
                    'pin-t',
                    'z-10'
                ) */

                if(window.scrollY>= originalOffsetY)
                {
                    el.classList.add(
                        'fixed',
                        'w-full',
                        'pin-t',
                        'z-10'
                    );
                }else{
                    el.classList.remove(
                        'fixed',
                        'w-full',
                        'pin-t',
                        'z-10'
                    );
                }
            },300)
        );
    },
}
</script>

<style scoped>

</style>