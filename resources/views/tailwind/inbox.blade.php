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
        <div class="flex-1 flex-shrink-0 flex overflow-hidden">
            <div class="w-64 p-6 bg-gray-100 overflow-y-auto">
                <nav>
                    <h2 class="text-sm uppercase font-semibold text-gray-600 tracking-wide">
                        Mail Boxes
                    </h2>
                    <div class="mt-3">
                        <a href="#" class="-mx-3 px-3 py-2 text-sm font-medium flex items-center justify-between bg-gray-200 rounded-lg">
                            <span class="inline-flex">
                            <svg class="fill-current w-6 h-6 text-gray-700" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M5 3h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5c0-1.1.9-2 2-2zm0 10v6h14v-6h-2.38l-1.45 2.9a2 2 0 01-1.79 1.1h-2.76a2 2 0 01-1.8-1.1L7.39 13H5zm14-2V5H5v6h2.38a2 2 0 011.8 1.1l1.44 2.9h2.76l1.45-2.9a2 2 0 011.79-1.1H19z"/>
    </svg>
                                <span class="ml-2 text-gray-900 ">Inbox</span>
                            
                            </span>
                            <span class="inline-block w-9 text-center py-1 text-xs leading-none font-semibold  text-gray-700 bg-gray-300  rounded-full ">6</span>
                        </a>
                        <a href="#" class="-mx-3 mt-2 px-3 py-2 text-sm font-medium flex items-center justify-between hover:bg-gray-200 rounded-lg">
                            <span class="inline-flex">
                            <svg class="fill-current w-6 h-6 text-gray-500" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M5 3h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5c0-1.1.9-2 2-2zm0 10v6h14v-6h-2.38l-1.45 2.9a2 2 0 01-1.79 1.1h-2.76a2 2 0 01-1.8-1.1L7.39 13H5zm14-2V5H5v6h2.38a2 2 0 011.8 1.1l1.44 2.9h2.76l1.45-2.9a2 2 0 011.79-1.1H19z"/>
    </svg>
                                <span class="ml-2 text-gray-700 ">Flagged</span>
                            
                            </span>
                        </a>
                        <a href="#" class="-mx-3 mt-2 px-3 py-2 text-sm font-medium flex items-center justify-between hover:bg-gray-200 rounded-lg">
                            <span class="inline-flex">
                            <svg class="fill-current w-6 h-6 text-gray-500" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M5 3h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5c0-1.1.9-2 2-2zm0 10v6h14v-6h-2.38l-1.45 2.9a2 2 0 01-1.79 1.1h-2.76a2 2 0 01-1.8-1.1L7.39 13H5zm14-2V5H5v6h2.38a2 2 0 011.8 1.1l1.44 2.9h2.76l1.45-2.9a2 2 0 011.79-1.1H19z"/>
    </svg>
                                <span class="ml-2 text-gray-700 ">Drafts</span>
                            
                            </span>
                            <span class="inline-block w-9 text-center py-1 text-xs leading-none font-semibold  text-gray-700 bg-gray-300  rounded-full ">2</span>
                        </a>
                        <a href="#" class="-mx-3 mt-2 px-3 py-2 text-sm font-medium flex items-center justify-between hover:bg-gray-200 rounded-lg">
                            <span class="inline-flex">
                            <svg class="fill-current w-6 h-6 text-gray-500" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M5 3h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5c0-1.1.9-2 2-2zm0 10v6h14v-6h-2.38l-1.45 2.9a2 2 0 01-1.79 1.1h-2.76a2 2 0 01-1.8-1.1L7.39 13H5zm14-2V5H5v6h2.38a2 2 0 011.8 1.1l1.44 2.9h2.76l1.45-2.9a2 2 0 011.79-1.1H19z"/>
    </svg>
                                <span class="ml-2 text-gray-700 ">Assigned</span>
                            </span>
                            <span class="inline-block w-9 text-center py-1 text-xs leading-none font-semibold  text-gray-700 bg-gray-300  rounded-full ">1</span>
                        </a>
                        <a href="#" class="-mx-3 mt-2 px-3 py-2 text-sm font-medium flex items-center justify-between hover:bg-gray-200 rounded-lg">
                            <span class="inline-flex">
                            <svg class="fill-current w-6 h-6 text-gray-500" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M5 3h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5c0-1.1.9-2 2-2zm0 10v6h14v-6h-2.38l-1.45 2.9a2 2 0 01-1.79 1.1h-2.76a2 2 0 01-1.8-1.1L7.39 13H5zm14-2V5H5v6h2.38a2 2 0 011.8 1.1l1.44 2.9h2.76l1.45-2.9a2 2 0 011.79-1.1H19z"/>
    </svg>
                                <span class="ml-2 text-gray-700 ">Closed</span>
                            
                            </span>
                        </a>
                        <a href="#" class="-mx-3 mt-2 px-3 py-2 text-sm font-medium flex items-center justify-between hover:bg-gray-200 rounded-lg">
                            <span class="inline-flex">
                            <svg class="fill-current w-6 h-6 text-gray-500" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M5 3h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5c0-1.1.9-2 2-2zm0 10v6h14v-6h-2.38l-1.45 2.9a2 2 0 01-1.79 1.1h-2.76a2 2 0 01-1.8-1.1L7.39 13H5zm14-2V5H5v6h2.38a2 2 0 011.8 1.1l1.44 2.9h2.76l1.45-2.9a2 2 0 011.79-1.1H19z"/>
    </svg>
                                <span class="ml-2 text-gray-700 ">Junk</span>
                            </span>
                        </a>
                    </div>
                    <h2 class="mt-8 text-sm uppercase font-semibold text-gray-600 tracking-wide">
                       Folders
                    </h2>
                    <div class="mt-4">
                        <a class="block text-gray-700 font-medium text-sm" href="#">Refunds</a>
                        <a class="mt-4 block text-gray-700 font-medium text-sm" href="#">Discounts</a>
                        <a class="mt-4 block text-gray-700 font-medium text-sm" href="#">Bugs</a>
                    </div>
                </nav>
            </div>
            <!-- Start of Main section -->
            <main class="flex-1 flex bg-gray-200 ">
                <!-- Start of Main section Left -->
                <div 
                    class="flex flex-col w-full max-w-xs flex-grow  border-l border-r border-gray-300"
                >
                    <div 
                        class="px-4 py-2 flex items-center flex-shrink-0 justify-between border-b border-gray-300"
                    >
                        <button class="flex items-center text-xs font-semibold text-gray-600">
                            Sorted by Date
                            <svg class="ml-1 h-6 w-6 fill-current text-gray-500" viewBox="0 0 24 24">
                                <path
                                    d="M7.293 9.293a1 1 0 011.414 0L12 12.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                />
                            </svg>
                        </button>
                        <button>
                            <svg class="h-6 w-6 fill-current text-gray-500" viewBox="0 0 24 24">
                            <path
                                d="M16 3H3a1 1 0 000 2h13a1 1 0 100-2zm-4 4H3a1 1 0 000 2h9a1 1 0 100-2zm-9 4h6a1 1 0 110 2H3a1 1 0 110-2zm9.293.293l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L18 10.414V20a1 1 0 11-2 0v-9.586l-2.293 2.293a1 1 0 01-1.414-1.414z"
                            />
                            </svg>
                        </button>
                    </div>
                    <div 
                        class="flex-1 overflow-y-auto"
                    >
                        <a href="#" class="px-6 pt-3 pb-4 block bg-white ">
                            <div class="w-full flex items-center justify-between">
                                <span class="text-sm font-semibold text-gray-900"
                                >
                                    Gloria Ronetson
                                </span>
                                <span class="text-sm font-semibold text-gray-600"
                                >
                                    2 days ago
                                </span>
                            </div>
                            <p class="mt-1 text-sm text-gray-900">
                                Refund
                            </p>
                            <p class="mt-1 text-sm text-gray-600">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus expedita rerum modi...
                            </p>
                        </a>
                        <a href="#" class="px-6 pt-3 pb-4 block bg-white border-t border-gray-400">
                            <div class="w-full flex items-center justify-between">
                                <span class="text-sm font-semibold text-gray-900"
                                >
                                    Gloria Ronetson
                                </span>
                                <span class="text-sm font-semibold text-gray-600"
                                >
                                    2 days ago
                                </span>
                            </div>
                            <p class="mt-1 text-sm text-gray-900">
                                Refund
                            </p>
                            <p class="mt-1 text-sm text-gray-600">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus expedita rerum modi...
                            </p>
                        </a>
                         <a href="#" class="px-6 pt-3 pb-4 block bg-white border-t border-gray-400">
                            <div class="w-full flex items-center justify-between">
                                <span class="text-sm font-semibold text-gray-900"
                                >
                                    Gloria Ronetson
                                </span>
                                <span class="text-sm font-semibold text-gray-600"
                                >
                                    2 days ago
                                </span>
                            </div>
                            <p class="mt-1 text-sm text-gray-900">
                                Refund
                            </p>
                            <p class="mt-1 text-sm text-gray-600">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus expedita rerum modi...
                            </p>
                        </a>
                         <a href="#" class="px-6 pt-3 pb-4 block bg-white border-t border-gray-400">
                            <div class="w-full flex items-center justify-between">
                                <span class="text-sm font-semibold text-gray-900"
                                >
                                    Gloria Ronetson
                                </span>
                                <span class="text-sm font-semibold text-gray-600"
                                >
                                    2 days ago
                                </span>
                            </div>
                            <p class="mt-1 text-sm text-gray-900">
                                Refund
                            </p>
                            <p class="mt-1 text-sm text-gray-600">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus expedita rerum modi...
                            </p>
                        </a>
                         <a href="#" class="px-6 pt-3 pb-4 block bg-white border-t border-gray-400">
                            <div class="w-full flex items-center justify-between">
                                <span class="text-sm font-semibold text-gray-900"
                                >
                                    Gloria Ronetson
                                </span>
                                <span class="text-sm font-semibold text-gray-600"
                                >
                                    2 days ago
                                </span>
                            </div>
                            <p class="mt-1 text-sm text-gray-900">
                                Refund
                            </p>
                            <p class="mt-1 text-sm text-gray-600">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus expedita rerum modi...
                            </p>
                        </a>
                         <a href="#" class="px-6 pt-3 pb-4 block bg-white border-t border-gray-400">
                            <div class="w-full flex items-center justify-between">
                                <span class="text-sm font-semibold text-gray-900"
                                >
                                    Gloria Ronetson
                                </span>
                                <span class="text-sm font-semibold text-gray-600"
                                >
                                    2 days ago
                                </span>
                            </div>
                            <p class="mt-1 text-sm text-gray-900">
                                Refund
                            </p>
                            <p class="mt-1 text-sm text-gray-600">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus expedita rerum modi...
                            </p>
                        </a>
                         <a href="#" class="px-6 pt-3 pb-4 block bg-white border-t border-gray-400">
                            <div class="w-full flex items-center justify-between">
                                <span class="text-sm font-semibold text-gray-900"
                                >
                                    Gloria Ronetson
                                </span>
                                <span class="text-sm font-semibold text-gray-600"
                                >
                                    2 days ago
                                </span>
                            </div>
                            <p class="mt-1 text-sm text-gray-900">
                                Refund
                            </p>
                            <p class="mt-1 text-sm text-gray-600">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus expedita rerum modi...
                            </p>
                        </a>
                         <a href="#" class="px-6 pt-3 pb-4 block bg-white border-t border-gray-400">
                            <div class="w-full flex items-center justify-between">
                                <span class="text-sm font-semibold text-gray-900"
                                >
                                    Gloria Ronetson
                                </span>
                                <span class="text-sm font-semibold text-gray-600"
                                >
                                    2 days ago
                                </span>
                            </div>
                            <p class="mt-1 text-sm text-gray-900">
                                Refund
                            </p>
                            <p class="mt-1 text-sm text-gray-600">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus expedita rerum modi...
                            </p>
                        </a>
                    </div>
                </div>
                <!-- End of Main section Left -->
                <!-- Start of Main section Right -->
                <div class="flex-1 w-0">
                    <div>
                        <!-- inbox items -->
                        <div class="py-5 px-4  flex items-center justify-between bg-gray-100 border-b border-gray-300">
                            <div class="flex items-center">
                                <button>
                                    <svg class="h-6 w-6 fill-current text-gray-600" viewBox="0 0 24 24">
                                    <path
                                        d="M9.707 3.293a1 1 0 010 1.414L5.414 9H13a9 9 0 019 9v2a1 1 0 11-2 0v-2a7 7 0 00-7-7H5.414l4.293 4.293a1 1 0 01-1.414 1.414l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 0z"
                                    />
                                    </svg>
                                </button>
                                <button class="ml-6">
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none">
                                    <circle class="fill-current text-gray-600" cx="7" cy="7" r="1" />
                                    <path
                                        class="stroke-current text-gray-600"
                                        d="M12 3H7a4 4 0 00-4 4v5c0 .512.195 1.024.586 1.414l7 7a2 2 0 002.828 0l7-7a2 2 0 000-2.828l-7-7A1.993 1.993 0 0012 3z"
                                        stroke-width="2"
                                    />
                                    </svg>
                                </button>
                                <button class="ml-6">
                                    <svg class="h-6 w-6 fill-current text-gray-600" viewBox="0 0 24 24">
                                    <path
                                        d="M12 4a8 8 0 00-6.598 12.526A14.943 14.943 0 0112 15c2.366 0 4.606.548 6.598 1.526A8 8 0 0012 4zm5.199 14.08A12.954 12.954 0 0012 17c-1.85 0-3.607.386-5.199 1.08A7.968 7.968 0 0012 20c1.985 0 3.8-.723 5.199-1.92zM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12zm10-4a2 2 0 100 4 2 2 0 000-4zm-4 2a4 4 0 118 0 4 4 0 01-8 0z"
                                    />
                                    </svg>
                                </button>
                                <button class="ml-6">
                                    <svg class="h-6 w-6 fill-current text-gray-600" viewBox="0 0 24 24">
                                    <path
                                        d="M5 6a1 1 0 00-1 1v10a1 1 0 001 1h14a1 1 0 001-1V9a1 1 0 00-1-1h-6.414l-2-2H5zM2 7a3 3 0 013-3h6.414l2 2H19a3 3 0 013 3v8a3 3 0 01-3 3H5a3 3 0 01-3-3V7zm10 2a1 1 0 011 1v3.586l1.293-1.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 111.414-1.414L11 13.586V10a1 1 0 011-1z"
                                    />
                                    </svg>
                                </button>
                                <button class="ml-6">
                                    <svg class="h-6 w-6 fill-current text-gray-600" viewBox="0 0 24 24">
                                    <path
                                        d="M7 12a2 2 0 11-4 0 2 2 0 014 0zm7 0a2 2 0 11-4 0 2 2 0 014 0zm5 2a2 2 0 100-4 2 2 0 000 4z"
                                    />
                                    </svg>
                                </button>
                            </div>
                            <div class="flex items-center">
                                <button>
                                    <svg
                                    class="h-6 w-6 text-gray-600"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    fill="none"
                                    >
                                    <path
                                        d="M19 9l-7 7-7-7"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    </svg>
                                </button>
                                <button class="ml-2">
                                    <svg
                                    class="h-6 w-6 text-gray-600"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    >
                                    <path
                                        d="M5 16l7-7 7 7"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="px-5 py-4 bg-white flex items-center justify-between "> 
                            <h3 class="text-xl text-gray-900 truncate">
                                Re: Student Discount?
                            </h3>
                            <div class="flex-shrink-0">
                                <span class="ml-2">#1428</span>
                                <span class="ml-2 px-2 py-1 text-sm leading-none text-green-900 font-semibold bg-green-200 rounded-full ">Active</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <article></article>
                        <article></article>
                        <article></article>
                    </div>                    
                </div>  
                <!-- End of Main section Right -->
            </main>
            <!-- End of Main section -->
        </div>
    </div>
   <script type="text/javascript" src="/js/tailwind-inbox.js"></script>
    <!-- built fileddds will be auto injected -->
</body>
</html>