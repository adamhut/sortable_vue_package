<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
   <!-- <link rel="stylesheet" href="https://unpkg.com/tailwindcss@0.5.2/dist/tailwind.min.css">-->
    <title>Renderless Sortable Component</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <noscript>
        <strong>We're sorry but sortable-component doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
    </noscript>
    <div id="app" class="min-h-screen  text-black bg-grey-lighter p-8">
        <sortable :todos="todos"></sortable>
    
       
        <div class="bg-white rounded shadow-lg max-w-md mx-auto py-8 px-4">
            <div class="mb-2">
                <div class="form-switch inline-block align-middle">
                    <input type="checkbox" name="1" id="1" class="form-switch-checkbox" />
                    <label class="form-switch-label" for="1"></label>
                </div>
                <label class="text-xs text-grey-dark" for="1">Default</label>
            </div>
        </div>
    </div>   
    
    <!-- built fileddds will be auto injected -->
    
    <script type="text/javascript" src="/js/app.js"></script>
</body>
</html>