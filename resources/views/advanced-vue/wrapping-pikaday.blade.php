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
            <div class="card">
                <label class="block">
                <span class="form-label mb-2">Select a date</span>
                    <date-picker 
                        v-model="date" 
                        format="YYYY-MM-DD" 
                        :options="{firstDay:1}"
                        ></date-picker>
                </label>
            </div>
            </div>
        </div>
    </div>
    <!-- built files will be auto injected -->

    <script type="text/javascript" src="/js/wrapping-pikaday.js"></script>
</body>
</html>