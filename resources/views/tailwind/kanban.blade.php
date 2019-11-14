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

    <link href="{{ asset('css/tailwind-kanban.css') }}" rel="stylesheet">

</head>
<body class="bg-white antialiased">
    <div class="h-screen flex">
        <div class="w-64 px-8 py-4 bg-gray-100 border-r border-gray-200">
            
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="2 2 47.06 39" class="icon h-8 w-8 fill-current text-yellow-900"><path d="M25.58,35.45c-7.75,0-14-5.64-14-12.59,0-.26,0-.51,0-.77a11.39,11.39,0,0,1,.52-2.73c1.69-5.25,7.08-9.1,13.48-9.1a15.74,15.74,0,0,1,1.79.1,15.09,15.09,0,0,1,5,1.45,10.3,10.3,0,0,0-3.78-5.89A14.49,14.49,0,0,0,20.3,3.29H1.89v19.5h0v19.5H20.15a15.73,15.73,0,0,0,2.1-.14h0l.53-.09.3-.06.13,0L24,41.8l.09,0,.44-.12.08,0a10.75,10.75,0,0,0,7.51-7c.07-.23.14-.46.2-.7a14.81,14.81,0,0,1-2.05.82A15.46,15.46,0,0,1,25.58,35.45Z" transform="translate(-1.89 -3.29)" class="cls-1"></path><path d="M28.39,27h0Z" transform="translate(-1.89 -3.29)" class="cls-2"></path><path d="M34.15,29.71a5.9,5.9,0,0,0-1.54-1.17A8.62,8.62,0,0,1,34.15,29.71Z" transform="translate(-1.89 -3.29)" class="cls-2"></path><path d="M34.79,31.18" transform="translate(-1.89 -3.29)" class="cls-1"></path><path d="M34.79,32.36v5.31a5.68,5.68,0,0,0,.4,2.16l.14.31,0,0a3.9,3.9,0,0,0,3.34,2.1h9.36V32.19a5.77,5.77,0,0,0-2.94-5.29,12.12,12.12,0,0,0-1.34-.72,9.48,9.48,0,0,0-1.95-.65.45.45,0,0,1-.42-.43.43.43,0,0,1,.26-.39l.27,0a8.81,8.81,0,0,0,5.17-3.21,11.89,11.89,0,0,0,1.1-2.17,10.1,10.1,0,0,0-2.7-11.4c-2.76-2.46-7.74-4.59-16.06-4.59,0,0,5.8,2.37,6.67,8.3a6.94,6.94,0,0,1-.38,3.57l-.1.23v0a6.56,6.56,0,0,1-5.9,3.6H25.93A4.37,4.37,0,0,0,21.4,23s0,0,0,.06a3.74,3.74,0,0,0,1.3,2.73,4.42,4.42,0,0,0,1.9,1h0a4.84,4.84,0,0,0,1.09.14h0l1.23,0a10.89,10.89,0,0,1,1.43.15h.06a12.12,12.12,0,0,1,4.15,1.48l0,0a4.09,4.09,0,0,1,2.1,3A6.11,6.11,0,0,1,34.79,32.36Z" transform="translate(-1.89 -3.29)" class="cls-1"></path><path d="M27,26.9a13.86,13.86,0,0,1,1.43.15A10.89,10.89,0,0,0,27,26.9Z" transform="translate(-1.89 -3.29)" class="cls-3"></path></svg>
            
            <nav class="mt-8">
                <h2 class="text-xs text-gray-600 font-semibold uppercase tracking-wider">Issues</h2>
                
                <div class="mt-2">
                    <a 
                        href="#" 
                        class=" flex justify-between items-center px-3 py-2 rounded-lg bg-gray-200 " 
                    >
                        <span class="text-sm font-medium text-gray-900">All</span>
                        <span class="text-xs text-gray-700 font-semibold">36</span>
                    </a>
                    <a 
                        href="#" 
                        class=" flex justify-between items-center px-3 py-2 rounded-lg hover:bg-gray-200 " 
                    >
                        <span class="text-sm font-medium text-gray-700">Assign to me</span>
                        <span class="text-xs text-gray-700 font-semibold">2</span>
                    </a>
                    <a 
                        href="#" 
                        class=" flex justify-between items-center px-3 py-2 rounded-lg hover:bg-gray-200 " 
                    >
                        <span class="text-sm font-medium text-gray-700">Created by me</span>
                        <span class="text-xs text-gray-700 font-semibold">1</span>
                    </a>
                    <a 
                        href="#" 
                        class=" flex justify-between items-center px-3 py-2 rounded-lg hover:bg-gray-200 " 
                    >
                        <span class="text-sm font-medium text-gray-700">Archieved</span>
                        
                    </a>
                </div>
            </nav>
        </div>
        <div class="flex-1 min-w-0 bg-white  ">
            <div class="border-b-2 border-gray-200"></div>
            <div class=""></div>
        </div>

    </div>
</body>
</html>