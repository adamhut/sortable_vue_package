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

    <link href="{{ asset('css/tailwind-inbox.css') }}" rel="stylesheet">

</head>
<body class="bg-gray-200">
    <div id="app" class="h-screen flex flex-col">
        <header class="flex">
            <div class="w-64 flex-shrink-0 px-4 py-3 bg-gray-800">
                <button class="block w-full flex  items-center">
                    <img src="/images/avatar.png"  class="h-10 w-10 rounded-full object-cover" alt="">
                    
                    <span class="ml-4 mr-2 text-sm font-medium text-white ">Monica White</span>

                    <svg class="ml-auto h-6 w-6 stoke-current text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                    </svg>
                </button>
            </div>
            
            <div class="px-6 bg-gray-700 flex-1 flex items-center justify-between ">
                <nav class="flex items-center ">
                    <a href="#" class="inline-block px-3 py-2 bg-gray-800 hover:bg-gray-600 rounded-lg leading-none text-sm font-medium text-white ">Mailbox</a>
                    <a href="#" class="ml-2 inline-block px-3 py-2 hover:bg-gray-600 rounded-lg leading-none text-sm font-medium text-white">Customers</a>
                    <a href="#" class="ml-2 inline-block px-3 py-2 hover:bg-gray-600 rounded-lg leading-none text-sm font-medium text-white">Reporting</a>
                    <a href="#" class="ml-2 inline-block px-3 py-2 hover:bg-gray-600 rounded-lg leading-none text-sm font-medium text-white">Manage</a>
                </nav>
           
                <div class="bg-gray-700 flex items-center">
                    <div class="relative py-1 w-64">
                        <span class="absolute inset-y-0 left-0 pl-2 flex items-center">
                            <svg class=" fill-current w-6 h-6 text-gray-500 " xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 3h16a2 2 0 012 2v14a2 2 0 01-2 2H4a2 2 0 01-2-2V5c0-1.1.9-2 2-2zm16 4V5H4v2h16zm0 2H4v10h16V9z"/>
                            </svg>
                        </span>
                        <input 
                            type="text" 
                            class="w-full pr-4 pl-10 py-2 leading-tight block bg-gray-900 rounded-lg text-sm placeholder-gray-400 text-white focus:bg-white focus:text-gray-800 focus:placeholder-gray-600 focus:outline-none" 
                            placeholder="Serach" 
                        />
                    </div>
                    <button class="ml-5 text-gray-400 hover:text-gray-200 ">
                        <svg class=" fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 3h16a2 2 0 012 2v14a2 2 0 01-2 2H4a2 2 0 01-2-2V5c0-1.1.9-2 2-2zm16 4V5H4v2h16zm0 2H4v10h16V9z"/>
                        </svg>
                    </button>
                    <button class="ml-4 text-gray-400 hover:text-gray-200">
                    <svg class="ml-2 fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 3h16a2 2 0 012 2v14a2 2 0 01-2 2H4a2 2 0 01-2-2V5c0-1.1.9-2 2-2zm16 4V5H4v2h16zm0 2H4v10h16V9z"/>
                    </svg>
                    </button>
                </div>
             </div>

        </header>
        <div class="flex-1 flex-shrink-0 flex">
            <div class="w-64 bg-gray-100">
                <nav>
                    
                </nav>
            </div>
            <main class="bg-gray-200">
                <div>

                </div>
                <div>

                </div>
            </main>
        </div>
    </div>
   <script type="text/javascript" src="/js/tailwind-inbox.js"></script>
    <!-- built fileddds will be auto injected -->
</body>
</html>