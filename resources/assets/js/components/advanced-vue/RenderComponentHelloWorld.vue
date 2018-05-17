<script>
import PrimaryButton from './PrimaryButton'
import ToggleInput from '../ToggleInput'
export default {
  props: ["tag"],
  data() {
    return {
        toggled:true,
    }
  },
  render(createElement) {
    //return  createElement(element,attributes, children)
    /*return createElement(PrimaryButton,{
        nativeOn:{
            click:()=>alert('click')
        }
    },'Hello world2');
     */
    return createElement(ToggleInput,{
        props:{
            value:this.toggled,
        },
        on:{
            input:(newValue)=>this.toggled = newValue
        }
    });
  }
}
</script>
