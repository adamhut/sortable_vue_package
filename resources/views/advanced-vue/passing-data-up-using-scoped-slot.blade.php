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
        <div class="min-h-screen bg-grey-darker p-8">
            <div class="max-w-sm mx-auto">
                <contact-list :pseudo-slot="({contact})=>contact.name.first" >
                  
                    <a  slot-scope="{contact}" :href="`/contacts/${contact.id}`">
                            @{{contact.name.first}}
                    </a>
                </contact-list>
            </div>
        </div>
    </div>
    <!-- built files will be auto injected -->
    
    <script type="text/javascript" src="/js/passing-data-up-using-scoped-slot.js"></script>
</body>
</html>