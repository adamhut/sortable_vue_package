

<script>
import contacts from './contacts.json'
export default {
    props: [],
    data() {
        return {
            contacts
        }
    },
    render(createElement) {
        return createElement('div',{},[
            createElement('h1',{},'Your Contact'),
            createElement('ul',{},this.contacts.map(contact=>{
                return createElement('li',{},`${contact.name.first} ${contact.name.last} `)
            }))
        ]);

      return createElement('ul',{},this.contacts.map(contact=>{
          return createElement('li',{},`${contact.name.first} ${contact.name.last} `)
      }));
    //return  createElement(element,attributes, children)
    //return createElement('ul')
  }
}
</script>
