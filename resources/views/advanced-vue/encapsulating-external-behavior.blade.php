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
    <div id="app">
        <div>
            <div class="min-h-screen flex items-center justify-center">
                <button 
                    @click="modalOpen = true" 
                    type="button" 
                    class="btn btn-blue"
                >Open Modal</button>
            </div>
            
            <announcement-modal
                :show="modalOpen"
                @close="modalOpen = false"
            ></announcement-modal>
        </div>
    </div>
    <!-- built files will be auto injected -->
    
    <script type="text/javascript" src="/js/encapsulating-external-behavior.js"></script>
</body>
</html>