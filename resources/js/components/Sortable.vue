<template>
  <div class="text-black bg-grey-lighter p-8">
    <div class="bg-white rounded shadow-lg max-w-md mx-auto py-8 px-4">
        <sortable-list v-model="todoItems" item-class="todo-item" handle-class="bcr-handle">
            <ul class="list-reset" slot-scope="{ items }">
                <sortable-item v-for='todo in items' :key="todo.id"  >
                    <sortable-handle>
                        <div class="bg-white px-4">
                            <div class="flex items-center border-b border-grey-lighter">
                                <div class="flex-grow flex items-center py-4">
                                    <input type="checkbox" class="mr-3" v-model="todo.complete">
                                    {{todo.description}}
                                </div>
                                <svg class="ml-2 h-4 w-4 cursor-move text-grey hover:text-grey-darkest" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path fill-rule="evenodd" d="M14 4h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1zM8 4h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1zm6 6h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1zm-6 0h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1zm6 6h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1zm-6 0h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1z"/></svg>
                            </div>
                        </div>
                    </sortable-handle>
                </sortable-item>
            </ul>
        </sortable-list>
    </div>
  </div>
  
</template>

<script>

    import SortableList from './SortableList';
    import SortableItem from './SortableItem';
    import SortableHandle from './SortableHandle';

    export default {
        props:['todos'],    
        data() {
            return {
                todoItems: {},
            }
        },
        created(){
            this.todoItems = this.todos;
        },
        components:{
            SortableList,
            SortableItem,
            SortableHandle,
        },
    }
</script>

<style scoped>

</style>
