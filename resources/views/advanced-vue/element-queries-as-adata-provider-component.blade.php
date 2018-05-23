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
        <div class="min-h-screen bg-grey-darker p-4">
            <div style="width: 420px" class="mx-auto border-l border-r border-dashed border-grey-dark py-4 mb-4">
                <profile-card></profile-card>
            </div>
            <div style="width: 300px" class="border-l border-r border-dashed border-grey-dark py-4 mx-auto">
                <profile-card></profile-card>
            </div>
        </div>
    </div>

    <!-- built files will be auto injected -->
    <script type="text/javascript" src="/js/element-queries-as-adata-provider-component.js"></script>
</body>
</html>