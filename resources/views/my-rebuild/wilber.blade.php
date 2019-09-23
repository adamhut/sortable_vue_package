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

    <link href="{{ asset('css/my-rebuild-wilber.css') }}" rel="stylesheet">

</head>

<body>
    <noscript>
        <strong>
            We're sorry but sortable-component doesn't work properly without JavaScript enabled. Please enable it to
            continue.
        </strong>
    </noscript>
    <div id="app" class="font-sans text-gray-800 ">
        <header class="border-t-4 border-blue-700 bg-white z-10 absolute w-full shadow-md">
            <nav class="container mx-auto px-8 flex flex-wrap justify-between items-center py-2">
                <div>
                    <a href="/" class="font-bold text-xl flex items-end">
                        <img src="/images/vue-dropdown/logo.png" alt="logo" class="w-10">
                        {{-- <span>vue.js Search</span> --}}
                    </a>
                </div>
                <div class="block lg:hidden">
                    <button
                        class="flex items-center px-3 py-2 border rounded border-gray-500 hover:text-gray-600 hover:border-gray-600">
                        <svg class="current-color h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" fill="gray" /></svg>
                    </button>
                </div>
                <ul
                    class="uppercase tracking-wide font-semibold font-b w-full block flex-grow lg:flex lg:flex-initial lg:w-auto items-center mt-8 lg:mt-0">



                    <li class="mr-8 mb-6 lg:mb-0">
                        <a href="/#about" class="text-teal-700 hover:text-gray-600">About</a>

                    </li>
                    <li class="mr-8 mb-6 lg:mb-0">
                        <a href="/#about" class="text-teal-700 hover:text-gray-600">Another</a>
                    </li>
                    <li class="mr-8 mb-6 lg:mb-0">

                    </li>

                    <li class="mr-8 mb-6 lg:mb-0">
                        <a href="" class="flex items-center">
                            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path class="heroicon-ui"
                                    d="M15 19a3 3 0 0 1-6 0H4a1 1 0 0 1 0-2h1v-6a7 7 0 0 1 4.02-6.34 3 3 0 0 1 5.96 0A7 7 0 0 1 19 11v6h1a1 1 0 0 1 0 2h-5zm-4 0a1 1 0 0 0 2 0h-2zm0-12.9A5 5 0 0 0 7 11v6h10v-6a5 5 0 0 0-4-4.9V5a1 1 0 0 0-2 0v1.1z" />
                                </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" 
                            class="flex items-center"
                        >
                            <img src="/images/avatar.png" alt="avatar" class="w-8 h-8 rounded-full">
                            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                height="24">
                                <path class="heroicon-ui"
                                    d="M15.3 9.3a1 1 0 0 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 1.4-1.4l3.3 3.29 3.3-3.3z">
                                </path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="bg-gray-100 min-h-screen pt-80 lg:pt-40 text-lg">
fadsf
            <wilber-card></wilber-card>

        </div>

    </div>
    <!-- built fileddds will be auto injected -->

    <script type="text/javascript" src="/js/my-rebuild-wilber.js"></script>
</body>

</html>