<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@0.5.2/dist/tailwind.min.css">
    <title>CodeSandbox Vue</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app"  class="min-h-screen bg-grey-darker p-8">
        
        <div class="max-w-sm mx-auto card mt-8">
                <label class="form-label mb-2">Renderless Stacked Layout</label>
                <renderless-tag-input v-model="tags" :remove-on-backspace="false">
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
            </div>
        

        <div class="max-w-sm mx-auto card mt-8">
            <label class="form-label mb-2">Renderless Tag Input</label>
            <renderless-tag-input v-model="tags">
                <div class="tag-input" slot-scope="{tags,removeTag,removeButtonEvents,inputProps,inputEvents}">
                    <span v-for="tag in tags" :key="tag" class="tag-input-tag">
                        <span>@{{tag}}</span>
                        <button 
                        type="button" 
                        class="tag-input-remove"
                        v-on="removeButtonEvents(tag)"
                        >&times;</button>
                    </span>
                    <input 
                    class="tag-input-text" 
                    placeholder="Add tag..."
                    v-bind="inputProps"
                    v-on="inputEvents"
                    >
                </div>
            </renderless-tag-input>
        </div>
        <div class="max-w-sm mx-auto card mt-8">
            <label class="form-label mb-2">Original Tag Input</label>
            <tag-input v-model="tags"></tag-input>
        </div>
    </div>
<!-- built files will be auto injected -->

<script type="text/javascript" src="/js/getting-started-with-renderless-ui-components.js"></script>
</body>
</html>