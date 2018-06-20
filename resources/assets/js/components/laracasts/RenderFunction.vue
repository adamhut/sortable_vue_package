
<script>
    export default {
        data() {
            return {
                name: 'John Doe'
            }
        },

        render(element){
            
            return element('div',{attr:{id:'foobar'}}, [
                element('h1',this.name),
                element('h2',this.name)
            ]);
            
            
            return element("h1",{class:"bg-green"},this.name);



            return element("h1",{style:['width=300px;'],class:"bg-green"},"hello world");
        }
    }
</script>

