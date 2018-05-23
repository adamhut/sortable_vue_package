<template>
    <renderless-tag-input :tags="tags" @update="(newTag)=>$emit('update',newTag)" :remove-on-backspace="false">
        <div class="stacked-tag-input" slot-scope="{tags,removeTag,addTag,removeButtonEvents,inputProps,inputEvents}">
            <div class="stacked-tag-input-form">
                <input type="text" 
                    class="form-input" 
                    placeholder="Add Tag.."
                    v-bind="inputProps"
                    v-on="inputEvents"
                >
                <button class="btn btn-indigo"
                    @click="addTag"
                >   
                    Add Tag
                </button>
            </div>
            <ul class="stacked-tag-list">
                <li v-for="tag in tags" :key="tag">
                    @{{tag}}
                    <button type="button" 
                        class="stacked-tag-link"
                        v-on="removeButtonEvents(tag)"
                    >
                        Remove
                    </button>
                </li>
            </ul>
        </div>
    </renderless-tag-input> 
</template>

<script>
    import RenderlessTagInput from './RenderlessTagInput'
    export default {
        components:{
            RenderlessTagInput,
        },
        model:{
            prop:'tags',
            event:'update',
        },
        props:{
            tags:{
                required:true,  
            },
        },
    }
</script>

<style scoped>

</style>