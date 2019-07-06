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
    <div id="app" class="bg-gray-200 antialiased min-h-screen">
        <site-header></site-header>
        
        <search-filters></search-filters>
        
        <main class="px-4 py-6">
            
            <h3 class="text-gray-900 text-xl">Los Angeles</h3>
            
            <p class="text-gray-600">Live like the  stars in these luxurious Southern California escapes. </p>

            <div class="mt-6">
                <div>
                    <div>
                        <img class="rounded-lg shadow-md h-64" src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-1.2.1&auto=format&fit=crop&w=1650&q=80" alt="">
                    </div>
                    <div class="relative px-4 -mt-16">
                        <div class="bg-white rounded-lg px-4 py-4 shadow-lg">
                            <div class="flex ">
                                <span class="bg-teal-200 text-teal-800 font-semibold uppercase tracking-wide text-xs rounded-full px-2 py-1 leading-none inline-block ">Plus</span>
                                <div class="text-xs text-gray-600 font-semibold uppercase tracking-wide ml-2">
                                    3 beds &bull; 2 Baths
                                </div>
                            </div>
                            <h4 class="mt-1 text-gray-900 font-semibold text-lg">Modern home in the city center</h4>
                            <div class="mt-1">
                                <span class="text-gray-900 ">$1,400</span><span class="ml-1 text-gray-600 text-sm">/wk</span>
                            </div>
                            <div class="mt-2 text-sm text-gray-600 flex items-center">
                                <svg class="h-4 w-4 fill-current text-teal-500" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"/></svg>
                                <svg class="h-4 w-4 fill-current text-teal-500" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"/></svg>
                                <svg class="h-4 w-4 fill-current text-teal-500" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"/></svg>
                                <svg class="h-4 w-4 fill-current text-teal-500" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"/></svg>
                                <svg class="h-4 w-4 fill-current text-teal-500" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"/></svg>
                                <span class="ml-2">34 reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
   <script type="text/javascript" src="/js/workcation.js"></script>
    <!-- built fileddds will be auto injected -->
</body>
</html>