<template>
    <div class="relative">
        <search-focus @keyup="focusSearch"></search-focus>
        <div class="relative">
            <input type="text" placeholder="Search (Press  &quot;/&quot; to focus)"
                class="bg-background-form border border-gray-500 rounded-full px-4 pl-10 py-2 outline-none focus:border-blue-500 w-72"
                v-model='query' 
                @blur="searchResultVisable=false" 
                @focus="searchResultVisable=true"
                @keydown.esc="searchResultVisable=false"
                @input="softReset"
                ref="search"
                @keyup="perforSearch"
                @keydown.up.prevent="highlightPrevious"
                @keydown.down.prevent="highlightNext"
            >
            <div class="absolute top-0 ml-3" style="top:10px">
                <svg fill="currentColor" class="text-gray-500 h-5 w-5" viewBox="0 0 24 24" width="24" height="24">
                    <path class="heroicon-ui"
                        d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z">
                    </path>
                </svg>
            </div>
            <div v-if="query.length > 0"
                class="absolute top-0 right-0 text-2xl mr-3 cursor-pointer text-gray-600 hover:text-gray-800"
                style="top:2px;" @click="reset">
                &times;
            </div>
        </div>
        <!--  <div class="absolute bg-white">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo adipisci nesciunt ut cum officia corrupti doloremque sapiente. Temporibus neque porro a est! Iusto, rem distinctio tempore nam, voluptatem accusantium, nostrum consectetur rerum perspiciatis placeat laudantium repellendus dolor minus consequatur aut.
            </div>
        -->
        <transition name="search-fade">
            <div class="absolute normal-case bg-white border border-gray-400 left-0 right-0 w-128 text-left mb-4 mt-2 rounded-lg shadow overflow-hidden z-10 overflow-y-auto"
                style="max-height:32rem"
                v-if="query.length > 0 && searchResultVisable">
                <div class="flex flex-col" ref="results">
                    <a 
                        v-for="(post,index) in searchResults"
                        :key="index"
                        :href="post.item.path" 
                        @mousedown.prevent="searchResultVisable=true "
                        class="border-b border-gray-400 text-xl cursor-pointer p-4 hover:bg-blue-100"
                        :class="{'bg-blue-100': index === highlightIndex}"
                        @keydown.enter="gotoLink()"
                    >
                        {{post.item.title}}
                        <span class="block font-normal text-sm my-1" v-text="post.item.summary"></span>
                    </a>
                    <div v-if="searchResults.lenght===0" class="font-normal w-full border-b border-gray-400 cursor-pointer p-4">
                        <p class="my-0">No results for '<strong>{{query}}</strong>'</p>
                    </div>
                </div>
            </div>
         </transition>
    </div>
</template>

<script>
    import SearchFocus from './SearchFocus';
    export default {
        data() {
            return {
                query: '',
                searchResultVisable: true,
                posts:[],
                searchResults:[],
                highlightIndex:0,
                options: {
                    shouldSort: true,
                    includeMatches: true,
                    threshold: 0.5,
                    location: 0,
                    distance: 500,
                    maxPatternLength: 32,
                    minMatchCharLength: 1,
                    keys: ['title', 'summary']
                }
            }
        },
        components:{
            SearchFocus,
        },
        created () {
            axios.get('/vue-serach-data').then(response=>{
                // console.log(response);
                this.posts =response.data;
            });
        },
        methods: {
            reset() {
                this.query='';
                this.highlightIndex=0;
            },
            softReset(){
                this.searchResultVisable = true;
                this.highlightIndex=0;
            },
            focusSearch(e){
                if(e.key==='/')
                {
                    this.$refs.search.focus();
                }
            },
            perforSearch(){
                this.$search(this.query, this.posts, this.options)
                    .then(results => {
                         this.searchResults = results
                    });
            },
            
            highlightPrevious(){
                if(this.highlightIndex > 0)
                {
                    this.highlightIndex = this.highlightIndex -1;
                    // return;
                    this.scrollIntoView();

                }
                
            },
            highlightNext(){
                 if(this.highlightIndex <  this.searchResults.length -1)
                 {
                      this.highlightIndex = this.highlightIndex +1;
                      this.scrollIntoView();
                      return ;
                 }
               
            },
            scrollIntoView(){
                this.$refs.results.children[this.highlightIndex].scrollIntoView({block:'nearest'});
            },
            gotoLink(){

                if(this.searchResults[this.highlightIndex])
                {
                    window.location = this.searchResults[this.highlightIndex].item.path;

                }
            }
        },
    }
</script>

<style scoped>
  .search-fade-enter-active, .search-fade-leave-active {
    transition: opacity .5s;
  }
  .search-fade-enter, .search-fade-leave-to {
    opacity: 0;
  }
</style>