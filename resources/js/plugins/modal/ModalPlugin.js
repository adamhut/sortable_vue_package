import Component from './Component';
import { Promise } from 'q';

let Plugin = {
    install:function(Vue,options={}){
        Vue.component('modal',Component);

        Plugin.events = new Vue();

        Vue.prototype.$modal={
            show(name,params={}){
                location.hash=name;

                //fire an event on the plugin an include the params
                Plugin.events.$emit('show',params);
            },
            
            hide(name){
                location.hash = '#';
            },
            dialog(message,params={}){

                if(typeof message ==='string')
                {
                    
                    params.message = message;
                } else {
                   
                    params = message;
                }
                return new Promise((resolve,reject) => {
                    this.show('dialog',params);

                    Plugin.events.$on('clicked', confirmed => {
                        resolve(confirmed);
                    })

                });

            }
        }
    }
}

export default Plugin;