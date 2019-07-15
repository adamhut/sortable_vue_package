<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--<link rel="stylesheet" href="https://unpkg.com/tailwindcss@0.5.2/dist/tailwind.min.css">-->
    <title>Testmonials Component</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="{{ asset('css/workcation.css') }}" rel="stylesheet">

</head>
<body class="bg-gray-200">
    <div id="app" class="bg-gray-200 antialiased min-h-screen xl:flex xl:flex-col ">
        <site-header class="xl:flex-shrink-0"></site-header>
        <div class="xl:flex xl:flex-1">
            <search-filters></search-filters>
            <main class="py-6 xl:flex-1 xl:overflow-x-hidden">
                <div class="px-4">
                    <h3 class="text-gray-900 text-xl">Los Angeles</h3>
                    
                    <p class="text-gray-600">Live like the  stars in these luxurious Southern California escapes. </p>
                </div>
                <div class="mt-6 sm:overflow-x-auto">
                    <div class="px-4 sm:inline-flex sm:-mx-2 sm:pb-8">
                        <workcation-card></workcation-card>                
                        <workcation-card></workcation-card>
                        <workcation-card></workcation-card>
                        <workcation-card></workcation-card>
                    </div>
                </div>
            </main>
        </div>        
    </div>
   <script type="text/javascript" src="/js/workcation.js"></script>
    <!-- built fileddds will be auto injected -->
</body>
</html>