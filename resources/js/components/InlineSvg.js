class Svg{

    constructor(name){        
        let svg = require('../images/badges/' + name);
        
        let div = document.createElement('div');
        div.innerHTML = svg;
        
        let fragment = document.createDocumentFragment();
        fragment.appendChild(div);

        this.svg = fragment.querySelector('svg');
    }

    classes(classes){
        if(classes)
        {
            this.svg.classList.add(classes);
        }
        return this;
    }

    width(width){
        if (width)
        {
            this.svg.setAttribute('width', width);
        }

        
        return this;
    }

    height(height){
        if(height)
        {
            this.svg.setAttribute('height', height);
        }
        return this;
    }

    getHtml(){

        return this.svg.outerHTML;
    }

}

export default{
    
    props:['name','classes','width','height'],

    render(h){
        
        // let svg = require('../images/badges/'+this.name);

        // let fragment = document.createDocumentFragment();

        // let div = document.createElement('div');

        // div.innerHTML = svg;

        // fragment.appendChild(div);

        // fragment.querySelector('svg').classList.add(this.classes);

        // fragment.querySelector('svg').setAttribute('width', this.width);
        
        // fragment.querySelector('svg').setAttribute('height', this.height);

        // svg = svg.replace('<svg ',`<svg class="${classes}" `)

        return h('div',{
            domProps:{
                // innerHTML:fragment.querySelector('svg').outerHTML,
                innerHTML: new Svg(this.name)
                                .classes(this.classes)
                                .width(this.width)
                                .height(this.height)
                                .getHtml();
            }
        })

    }
}