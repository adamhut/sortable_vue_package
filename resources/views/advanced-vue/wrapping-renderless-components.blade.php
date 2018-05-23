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
            <label class="form-label mb-2">Stacked Tag Input</label>
            <stacked-tag-input v-model="tags"></stacked-tag-input>
        </div>
        
        
        <div class="max-w-sm mx-auto card mt-8">
            <label class="form-label mb-2">Inline Tag Input</label>
            <inline-tag-input v-model="tags"></inline-tag-input>
        </div>
        <div class="max-w-sm mx-auto card mt-8">
            <label class="form-label mb-2">Original Tag Input</label>
            <tag-input v-model="tags"></tag-input>
        </div>
    </div>
    <!-- built files will be auto injected -->
    
    <script type="text/javascript" src="/js/wrapping-renderless-components.js"></script>
</body>
</html>