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
            <label class="form-label mb-2">Renderless Tag Input</label>
            <renderless-tag-input v-model="tags">
                <div class="tag-input" slot-scope="{tags,removeTag,inputProps,inputEvents}">
                    <span v-for="tag in tags" :key="tag" class="tag-input-tag">
                        <span>@{{tag}}</span>
                        <button 
                            type="button" 
                            class="tag-input-remove"
                            @click="removeTag(tag)"
                        >&times;</button>
                    </span>
                    <input 
                        class="tag-input-text" 
                        placeholder="Add tag..."
                        v-bind="inputProps"
                        v-on="inputEvents"
                    >
                </div>
                {{--
                    <div class="tag-input" slot-scope="{}">
                        <span class="tag-input-tag">
                            <span>sample tag</span>
                            <button type="button" class="tag-input-remove"
                            >&times;</button>
                        </span>
                        <input class="tag-input-text" placeholder="Add tag..."
                        >
                    </div>
                    --}}
                    
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