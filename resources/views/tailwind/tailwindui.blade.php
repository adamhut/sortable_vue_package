<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--<link rel="stylesheet" href="https://unpkg.com/tailwindcss@0.5.2/dist/tailwind.min.css">-->
    <title>Tailwind Price Table Component</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="{{ asset('css/tailwind-pricetable.css') }}" rel="stylesheet">

</head>

<body class="bg-gray-200 font-sans">
    <div id="app" class="bg-gray-800 antialiased min-h-screen overflow-hidden">
        <div class="min-h-screen  w-3/5 p-16">
            <div class="py-6 px-16 ">
                <div>
                    <img src="/images/tailwind/logo.svg"  class="w-64" alt="">
                </div>
                <p class="mt-12 uppercase text-gray-500 font-semibold">
                    Coming Soon
                </p>
                <h1 class="text-5xl text-gray-100  font-semibold">
                    Inspiration, meet implementation.
                </h1>
                <p class="mt-4 text-2xl text-gray-500 tracking-wide">
                    Beautifully designed components and templates, hand-crafted using the CSS framework you already know and love.
                </p>
                <p class="mt-6 text-xl text-gray-100 tracking-wide">
                    Sign up for project updates, early previews, and to find out when it’s ready.
                </p>
                <div class="mt-8 flex">
                    <input class="block max-w-xs w-full bg-gray-200 rounded-lg shadow px-5 py-3 w-64  focus:outline-none focus:shadow-outline" type="text"  placeholder="Enter Your Email"/>
                    <button disabled="disabled" 
                        class="block tracking-wide ml-2 h-12 text-gray-300 bg-gray-700 rounded-lg py-3 px-5 uppercase font-semibold">
                        Subscribe
                    </button>
                </div>
                <div class="mt-12">
                    <div class="uppercase text-gray-500 font-semibold">
                        A Project By
                    </div>
                    <div class="mt-4 flex ">
                        <div class="flex">
                            <div>
                                <img src="/images/avatar.png" class="w-12 h-12 rounded-full border-2 border-gray-400" alt="">
                            </div>
                            <div class="ml-4 flex flex-col">
                                <span class="text-gray-200 font-semibold leading-tight">Adam Huang</span>
                                <span class="text-gray-600 leading-tight">Student of Tailwind CSS</span>
                            </div>
                        </div>
                        <div class="flex ml-6">
                            <div>
                                <img src="/images/avatar.png" class="w-12 h-12 rounded-full border-2 border-gray-400" alt="">
                            </div>
                            <div class="ml-4 flex flex-col">
                                <span class="text-gray-200 font-semibold leading-tight">Adam Huang</span>
                                <span class="text-gray-600 leading-tight">Student of Tailwind CSS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </divp>
        </divp>
    </div>
    <script type="text/javascript" src="/js/tailwind-pricetable.js"></script>
    <!-- built fileddds will be auto injected -->
</body>

</html>