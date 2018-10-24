<script>
export default {
  props: ["tag"],
  data() {
    return {}
  },
  render(createElement) {
    //return  createElement(element,attributes, children)
   
    return createElement(
      this.tag,
      {
        attrs: {
          //class: "btn btn-blue"
        },
        on: {
          click: () => alert("Clicked!")
        }
      },
      [
           this.$slots.default,
           this.$slots.slot_a,
           this.$scopedSlots.default({
               subject:'universe'
           })
      ]
    )
  }
}
</script>
