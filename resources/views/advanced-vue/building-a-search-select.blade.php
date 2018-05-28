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
            <div class="max-w-sm mx-auto bg-white rounded shadow-lg p-8">
                <div class="mb-4">
                    <label class="form-label mb-2">Favorite Thrash Band</label>
                    <search-select 
                        v-model="selectedBand" 
                        :options="bands"
                        :filter-function="applySearchFilter"
                    >
                    </search-selec0>
                </div>
                <div class="text-right">
                    <button type="button" class="btn btn-blue">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- built files will be auto injected -->
    
    <script type="text/javascript" src="/js/building-a-search-select.js"></script>
</body>

</html>

