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
    <div class="h-screen flex overflow-hidden" id="app"> 
        {{-- <div :class="sidebarOpen ? 'block ':'hidden' " class="inset-0 fixed bg-black opacity-50 transition-opacity lg:hidden" ></div> --}}
        <!--Start of left hand side Nav-->
        <div class="fixed z-30 inset-y-0 left-0 hidden lg:block lg:static lg:inset-auto lg:translate-x-0 w-64 px-8 py-4 bg-gray-100 border-r border-gray-200 overflow-auto relative" :class="[sidebarOpen ?  'translate-x-0 ease-out transition-medium':'-translate-x-full ease-in transition-medium']">      
            <div class="-mx-3 pl-3 pr-1 flex items-center justify-between ">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="2 2 47.06 39" class="icon h-8 w-8 fill-current text-yellow-900"><path d="M25.58,35.45c-7.75,0-14-5.64-14-12.59,0-.26,0-.51,0-.77a11.39,11.39,0,0,1,.52-2.73c1.69-5.25,7.08-9.1,13.48-9.1a15.74,15.74,0,0,1,1.79.1,15.09,15.09,0,0,1,5,1.45,10.3,10.3,0,0,0-3.78-5.89A14.49,14.49,0,0,0,20.3,3.29H1.89v19.5h0v19.5H20.15a15.73,15.73,0,0,0,2.1-.14h0l.53-.09.3-.06.13,0L24,41.8l.09,0,.44-.12.08,0a10.75,10.75,0,0,0,7.51-7c.07-.23.14-.46.2-.7a14.81,14.81,0,0,1-2.05.82A15.46,15.46,0,0,1,25.58,35.45Z" transform="translate(-1.89 -3.29)" class="cls-1"></path><path d="M28.39,27h0Z" transform="translate(-1.89 -3.29)" class="cls-2"></path><path d="M34.15,29.71a5.9,5.9,0,0,0-1.54-1.17A8.62,8.62,0,0,1,34.15,29.71Z" transform="translate(-1.89 -3.29)" class="cls-2"></path><path d="M34.79,31.18" transform="translate(-1.89 -3.29)" class="cls-1"></path><path d="M34.79,32.36v5.31a5.68,5.68,0,0,0,.4,2.16l.14.31,0,0a3.9,3.9,0,0,0,3.34,2.1h9.36V32.19a5.77,5.77,0,0,0-2.94-5.29,12.12,12.12,0,0,0-1.34-.72,9.48,9.48,0,0,0-1.95-.65.45.45,0,0,1-.42-.43.43.43,0,0,1,.26-.39l.27,0a8.81,8.81,0,0,0,5.17-3.21,11.89,11.89,0,0,0,1.1-2.17,10.1,10.1,0,0,0-2.7-11.4c-2.76-2.46-7.74-4.59-16.06-4.59,0,0,5.8,2.37,6.67,8.3a6.94,6.94,0,0,1-.38,3.57l-.1.23v0a6.56,6.56,0,0,1-5.9,3.6H25.93A4.37,4.37,0,0,0,21.4,23s0,0,0,.06a3.74,3.74,0,0,0,1.3,2.73,4.42,4.42,0,0,0,1.9,1h0a4.84,4.84,0,0,0,1.09.14h0l1.23,0a10.89,10.89,0,0,1,1.43.15h.06a12.12,12.12,0,0,1,4.15,1.48l0,0a4.09,4.09,0,0,1,2.1,3A6.11,6.11,0,0,1,34.79,32.36Z" transform="translate(-1.89 -3.29)" class="cls-1"></path><path d="M27,26.9a13.86,13.86,0,0,1,1.43.15A10.89,10.89,0,0,0,27,26.9Z" transform="translate(-1.89 -3.29)" class="cls-3"></path></svg>
                </span>
                <button class="lg:hidden text-gray-700" @click="sidebarOpen = false">
                    <svg class="w-6 h-6 " fill="currentColor" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" >
                        <polygon fill="#010101" points="77.6,21.1 49.6,49.2 21.5,21.1 19.6,23 47.6,51.1 19.6,79.2 21.5,81.1 49.6,53 77.6,81.1 79.6,79.2   51.5,51.1 79.6,23 "/>
                    </svg>
                </button>
            </div>
            
            <nav class="mt-8">
                <h2 class="text-xs text-gray-600 font-semibold uppercase tracking-wider">Issues</h2>
                
                <div class="mt-2 -mx-3">
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

                <h2 class="text-xs mt-8 text-gray-600 font-semibold uppercase tracking-wider">Tags</h2>
                
                <div class="mt-2 -mx-3">
                    <a 
                        href="#" 
                        class=" flex justify-between items-center px-3 py-2 rounded-lg bg-gray-200 " 
                    >
                        <span class="text-sm font-medium text-gray-900">Bug</span>
                        
                    </a>
                    <a 
                        href="#" 
                        class=" flex justify-between items-center px-3 py-2 rounded-lg hover:bg-gray-200 " 
                    >
                        <span class="text-sm font-medium text-gray-700">Freture Request</span>
                       
                    </a>
                    <a 
                        href="#" 
                        class=" flex justify-between items-center px-3 py-2 rounded-lg hover:bg-gray-200 " 
                    >
                        <span class="text-sm font-medium text-gray-700">Marketing</span>
                     
                    </a>
                    <a 
                        href="#" 
                        class=" flex justify-between items-center px-3 py-2 rounded-lg hover:bg-gray-200 " 
                    >
                       <span class="text-sm font-medium text-gray-700">V2.0</span>
                    </a>
                    <a 
                        href="#" 
                        class=" flex justify-between items-center px-3 py-2 rounded-lg hover:bg-gray-200 " 
                    >
                        <span class="text-sm font-medium text-gray-700">Enhancement</span>
                       
                    </a>
                    <a 
                        href="#" 
                        class=" flex justify-between items-center px-3 py-2 rounded-lg hover:bg-gray-200 " 
                    >
                        <span class="text-sm font-medium text-gray-700">Design</span>
                    </a>
                </div>
                
                <button 
                    class="mt-3 flex justify-between items-center py-2 text-sm font-medium text-gray-600" 
                >
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" 
                            class="fill-current h-4 w-4 " 
                            viewBox="0 0 24 24"
                        >
                            <path stroke="currentColor" d="M24 10h-10v-10h-4v10h-10v4h10v10h4v-10h10z"/>
                        </svg>
                    </span>
                    <span class="ml-1">New Projects</span>    
                 </button>
            </nav>
        </div><!--End of left hand side Nav-->
        
        <!--Start of right hand side-->
        <div class="flex-1 min-w-0 bg-white flex flex-col overflow-hidden">
            <!--Start Top header-->
            <div class="sm:border-b-2 border-gray-200 flex-shrink-0 ">
                <header class="">
                    <div class="px-6">
                    <!--Start Top header Top Section-->
                    <div class="flex justify-between items-center border-b border-gray-200 py-2">
                        <div class="flex-1 flex min-w-0">
                                <button class="block lg:hidden text-gray-600" @click="sidebarOpen = true">
                                    <svg class="h-6 w-6" fill="currentColor" version="1.1" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z" />
                                    </svg>
                                </button>
                                <div class="ml-4 lg:ml-0 relative w-64 flex-shrink-1 ">
                                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                                        <svg class="h-5 w-5 fill-current text-gray-600" viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z"
                                        />
                                            {{-- <path 
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                                            /> --}}
                                        </svg>
                                    </span>
                                    <input 
                                        type="text" 
                                        class="block w-full  pr-4 pl-10 py-2 rounded border border-gray-400 text-sm text-gray-900 placeholder-gray-600 focus:outline-none" 
                                        placeholder="Serach" 
                                    />
                                </div>
                           
                        </div>
                        <div class="ml-6 lg:ml-0 flex p-1 items-center flex-shrink-0">
                            <button>
                                <svg class="h-6 w-6 fill-current text-gray-500" viewBox="0 0 24 24">
                                        <path
                                        d="M9.018 4.665a3 3 0 015.964 0A7 7 0 0119 11v3.159c0 .273.109.535.302.729l1.405 1.405A1 1 0 0120 18H4a1 1 0 01-.707-1.707l1.405-1.405c.193-.194.302-.456.302-.73V11a7 7 0 014.018-6.335zM12 4a1 1 0 00-1 1v1.049l-.667.235A5.002 5.002 0 007 11v3.159c0 .669-.221 1.315-.623 1.841h11.246A3.032 3.032 0 0117 14.159V11a5.002 5.002 0 00-3.333-4.716L13 6.05V5a1 1 0 00-1-1zM10 18a2 2 0 004 0h2a4 4 0 11-8 0h2z"
                                        />
                                </svg>
                            </button>
                            <button class=" ml-6 ">
                            <img class="h-8 w-8 rounded-full object-cover"
                                src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&&auto=format&fit=facearea&facepad=2&w=144&h=144&q=80"
                                alt="" />
                            </button>
                        </div>
                    </div>
                    <!--End Top header Top Section-->
                    
                    <!--Start Top header Bottom Section-->
                    <div class="py-2 flex items-center justify-between">
                        <div class="sm:flex sm:items-center">
                            <h2 class="text-2xl font-semibold text-gray-900 leading-tight">All Issues </h2>
                            <div class="mt-1 flex items-center sm:ml-6 sm:mt-0 ">
                                <span class="-ml-2 rounded-full border-2 border-white">
                                <img class="h-6 w-6 rounded-full object-cover"
                                    src="https://images.unsplash.com/photo-1444146644393-241099c1593d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=144&h=144&q=80"
                                    alt="" />
                                </span>

                                <span class="-ml-2 rounded-full border-2 border-white">
                                    <img class="h-6 w-6 rounded-full object-cover"
                                    src="https://images.unsplash.com/photo-1485203535145-9eb0f2707965?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=144&h=144&q=80"
                                    alt="" />
                                </span>
                                <span class="-ml-2 rounded-full border-2 border-white">
                                    <img class="h-6 w-6 rounded-full object-cover"
                                    src="https://images.unsplash.com/photo-1470441623172-c47235e287ee?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=144&h=144&q=80"
                                    alt="" />
                                </span>
                                <span class="-ml-2 rounded-full border-2 border-white">
                                    <img class="h-6 w-6 rounded-full object-cover"
                                    src="https://images.unsplash.com/photo-1486583474878-b16d8f2749b1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=144&h=144&q=80"
                                    alt="" />
                                </span>
                                <span class="-ml-2 rounded-full border-2 border-white">
                                    <img class="h-6 w-6 rounded-full object-cover"
                                    src="https://images.unsplash.com/photo-1541931636029-106c1a2ec056?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=144&h=144&q=80"
                                    alt="" />
                                </span>
                           </div>                            
                        </div>
                        <div class="flex">
                            <span class="hidden sm:inline-flex p-1 bg-gray-200 border border-gray-300 rounded-lg ">
                                <button class="px-2 py-1 rounded">
                                    <svg class="h-6 w-6 fill-current text-gray-600" viewBox="0 0 24 24">
                                        <path
                                            d="M9.707 3.293a1 1 0 010 1.414L5.414 9H13a9 9 0 019 9v2a1 1 0 11-2 0v-2a7 7 0 00-7-7H5.414l4.293 4.293a1 1 0 01-1.414 1.414l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 0z" />
                                    </svg>                                   
                                </button>
                                <button class="bg-white px-2 py-1 py-1 bg-white rounded shadow">
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none">
                                        <circle class="fill-current text-gray-600" cx="7" cy="7" r="1" />
                                        <path class="stroke-current text-gray-600"
                                            d="M12 3H7a4 4 0 00-4 4v5c0 .512.195 1.024.586 1.414l7 7a2 2 0 002.828 0l7-7a2 2 0 000-2.828l-7-7A1.993 1.993 0 0012 3z"
                                            stroke-width="2" />
                                    </svg>
                                </button>
                            </span>
                            <button 
                                class="ml-5 px-3 py-1 flex items-center py-2 text-sm font-medium text-whtie bg-gray-800 hover:bg-gray-700 rounded-lg"
                            >
                                <span class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current h-4 w-4 text-white " viewBox="0 0 24 24">
                                        <path stroke="currentColor" d="M24 10h-10v-10h-4v10h-10v4h10v10h4v-10h10z" />
                                    </svg>
                                </span>
                                <span class="ml-2 text-white">New Projects</span>
                            </button>
                        </div>    
                    </div>
                    </div>
                    <div class="flex p-1 px-4 bg-gray-200 border-b border-t border-gray-300 sm:hidden ">
                      
                                <button class="w-1/2 inline-flex items-center justify-center px-2 py-1 rounded">
                                    <svg class="h-6 w-6 fill-current text-gray-600" viewBox="0 0 24 24">
                                        <path
                                            d="M9.707 3.293a1 1 0 010 1.414L5.414 9H13a9 9 0 019 9v2a1 1 0 11-2 0v-2a7 7 0 00-7-7H5.414l4.293 4.293a1 1 0 01-1.414 1.414l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 0z" />
                                    </svg>         
                                    <span class="ml-2 text-sm font-medium text-gray-600 leading-none">List</span>                          
                                </button>
                                <button class="w-1/2 inline-flex items-center justify-center  bg-white px-2 py-1 py-1 bg-white rounded shadow">
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none">
                                        <circle class="fill-current text-gray-600" cx="7" cy="7" r="1" />
                                        <path class="stroke-current text-gray-600"
                                            d="M12 3H7a4 4 0 00-4 4v5c0 .512.195 1.024.586 1.414l7 7a2 2 0 002.828 0l7-7a2 2 0 000-2.828l-7-7A1.993 1.993 0 0012 3z"
                                            stroke-width="2" />
                                    </svg>
                                    <span class="ml-2 text-sm font-medium text-gray-600 leading-none">Board</span>
                                </button>
                         
                    </div>
                    <!--End Top header bottom Section-->
                </header>
            </div>
            <!--End Top header-->
            <!--Start of main Section-->
            <div class="overflow-auto flex-1">
                <main class="p-3 h-full inline-flex overflow-hidden">
                    <div class="flex-shrink-0 flex flex-col w-80 bg-gray-100 rounded-lg">
                        <h3 class="px-3 pt-3 pb-1 flex-shrink-0 text-sm font-medium text-gray-700">Backlog</h3>
                        <div class="overflow-y-auto min-h-0 flex-1">
                            <ul class="pt-1 pb-3 px-3">
                                <li class="">
                                    <a href="#" class="p-4 block bg-white rounded shadow">
                                        <div class="flex justify-between ">
                                            <p class="text-sm font-medium text-gray-900 leading-none">
                                                Add discount code to chekcout page
                                            </p>
                                            <span>
                                                <img class="h-5 w-5 rounded-full object-cover"
                                                    src="https://images.unsplash.com/photo-1444146644393-241099c1593d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=144&h=144&q=80"
                                                    alt="" />
                                            </span>
                                            </span>
                                        </div>
                                        <div class="flex justify-between items-baseline">
                                            <div class="text-sm text-gray-600">
                                                <time datetime="2019-09-14">Sep 14</time>
                                            </div>
                                            <div class="mt-2">
                                                <span class="inline-flex items-center bg-teal-100 rounded px-2 py-1 leading-tight">
                                                    <svg viewBox="0 0 8 8" fill="currentColor" class="h-2 w-2 text-teal-500">
                                                        <circle cx="4" cy="4" r=3>
                                                        </circle>
                                                    </svg>
                                                    <span class="ml-2 text-teal-900 text-xs font-medium">Feature Request</span>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                
                                
                                
                                <li class="mt-3">
                                    <a href="#" class="p-4 block bg-white rounded shadow">
                                        <div class="flex justify-between ">
                                            <p class="text-sm font-medium text-gray-900 leading-none">
                                                Add discount code to chekcout page
                                            </p>
                                            <span>
                                                <img class="h-5 w-5 rounded-full object-cover"
                                                    src="https://images.unsplash.com/photo-1444146644393-241099c1593d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=144&h=144&q=80"
                                                    alt="" />
                                            </span>
                                            </span>
                                        </div>
                                        <div class="flex justify-between items-baseline">
                                            <div class="text-sm text-gray-600">
                                                <time datetime="2019-09-14">Sep 14</time>
                                            </div>
                                            <div class="mt-2">
                                                <span class="inline-flex items-center bg-purple-100 rounded px-2 py-1 leading-tight">
                                                    <svg viewBox="0 0 8 8" fill="currentColor" class="h-2 w-2 text-purple-500">
                                                        <circle cx="4" cy="4" r=3>
                                                        </circle>
                                                    </svg>
                                                    <span class="ml-2 text-purple-900 text-xs font-medium">Design</span>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mt-3">
                                    <a href="#" class="p-4 block bg-white rounded shadow">
                                        <div class="flex justify-between ">
                                            <p class="text-sm font-medium text-gray-900 leading-none">
                                                Add discount code to chekcout page
                                            </p>
                                            <span>
                                                <img class="h-5 w-5 rounded-full object-cover"
                                                    src="https://images.unsplash.com/photo-1444146644393-241099c1593d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=144&h=144&q=80"
                                                    alt="" />
                                            </span>
                                            </span>
                                        </div>
                                        <div class="flex justify-between items-baseline">
                                            <div class="text-sm text-gray-600">
                                                <time datetime="2019-09-14">Sep 14</time>
                                            </div>
                                            <div class="mt-2">
                                                <span class="inline-flex items-center bg-teal-100 rounded px-2 py-1 leading-tight">
                                                    <svg viewBox="0 0 8 8" fill="currentColor" class="h-2 w-2 text-teal-500">
                                                        <circle cx="4" cy="4" r=3>
                                                        </circle>
                                                    </svg>
                                                    <span class="ml-2 text-teal-900 text-xs font-medium">Feature Request</span>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mt-3">
                                    <a href="#" class="p-4 block bg-white rounded shadow">
                                        <div class="flex justify-between ">
                                            <p class="text-sm font-medium text-gray-900 leading-none">
                                                Add discount code to chekcout page
                                            </p>
                                            <span>
                                                <img class="h-5 w-5 rounded-full object-cover"
                                                    src="https://images.unsplash.com/photo-1444146644393-241099c1593d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=144&h=144&q=80"
                                                    alt="" />
                                            </span>
                                            </span>
                                        </div>
                                        <div class="flex justify-between items-baseline">
                                            <div class="text-sm text-gray-600">
                                                <time datetime="2019-09-14">Sep 14</time>
                                            </div>
                                            <div class="mt-2">
                                                <span class="inline-flex items-center bg-teal-100 rounded px-2 py-1 leading-tight">
                                                    <svg viewBox="0 0 8 8" fill="currentColor" class="h-2 w-2 text-teal-500">
                                                        <circle cx="4" cy="4" r=3>
                                                        </circle>
                                                    </svg>
                                                    <span class="ml-2 text-teal-900 text-xs font-medium">Feature Request</span>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mt-3">
                                    <a href="#" class="p-4 block bg-white rounded shadow">
                                        <div class="flex justify-between ">
                                            <p class="text-sm font-medium text-gray-900 leading-none">
                                                Add discount code to chekcout page
                                            </p>
                                            <span>
                                                <img class="h-5 w-5 rounded-full object-cover"
                                                    src="https://images.unsplash.com/photo-1444146644393-241099c1593d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=144&h=144&q=80"
                                                    alt="" />
                                            </span>
                                            </span>
                                        </div>
                                        <div class="flex justify-between items-baseline">
                                            <div class="text-sm text-gray-600">
                                                <time datetime="2019-09-14">Sep 14</time>
                                            </div>
                                            <div class="mt-2">
                                                <span class="inline-flex items-center bg-teal-100 rounded px-2 py-1 leading-tight">
                                                    <svg viewBox="0 0 8 8" fill="currentColor" class="h-2 w-2 text-teal-500">
                                                        <circle cx="4" cy="4" r=3>
                                                        </circle>
                                                    </svg>
                                                    <span class="ml-2 text-teal-900 text-xs font-medium">Feature Request</span>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="ml-3 flex-shrink-0 flex flex-col w-80 bg-gray-100 rounded-lg">
                        <h3 class="px-3 pt-3 pb-1 flex-shrink-0 text-sm font-medium text-gray-700">In Progress</h3>
                        <div class="overflow-y-auto min-h-0 flex-1">
                            <ul class="pt-1 pb-3 px-3">
                                <li class="">
                                    <a href="#" class="p-4 block bg-white rounded shadow">
                                        <div class="flex justify-between ">
                                            <p class="text-sm font-medium text-gray-900 leading-none">
                                                Add discount code to chekcout page
                                            </p>
                                            <span>
                                                <img class="h-5 w-5 rounded-full object-cover"
                                                    src="https://images.unsplash.com/photo-1444146644393-241099c1593d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=144&h=144&q=80"
                                                    alt="" />
                                            </span>
                                            </span>
                                        </div>
                                        <div class="flex justify-between items-baseline">
                                            <div class="text-sm text-gray-600">
                                                <time datetime="2019-09-14">Sep 14</time>
                                            </div>
                                            <div class="mt-2">
                                                <span class="inline-flex items-center bg-teal-100 rounded px-2 py-1 leading-tight">
                                                    <svg viewBox="0 0 8 8" fill="currentColor" class="h-2 w-2 text-teal-500">
                                                        <circle cx="4" cy="4" r=3>
                                                        </circle>
                                                    </svg>
                                                    <span class="ml-2 text-teal-900 text-xs font-medium">Feature Request</span>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mt-3">
                                    <a href="#" class="p-4 block bg-white rounded shadow">
                                        <div class="flex justify-between ">
                                            <p class="text-sm font-medium text-gray-900 leading-none">
                                                Add discount code to chekcout page
                                            </p>
                                            <span>
                                                <img class="h-5 w-5 rounded-full object-cover"
                                                    src="https://images.unsplash.com/photo-1444146644393-241099c1593d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=144&h=144&q=80"
                                                    alt="" />
                                            </span>
                                            </span>
                                        </div>
                                        <div class="flex justify-between items-baseline">
                                            <div class="text-sm text-gray-600">
                                                <time datetime="2019-09-14">Sep 14</time>
                                            </div>
                                            <div class="mt-2">
                                                <span class="inline-flex items-center bg-teal-100 rounded px-2 py-1 leading-tight">
                                                    <svg viewBox="0 0 8 8" fill="currentColor" class="h-2 w-2 text-teal-500">
                                                        <circle cx="4" cy="4" r=3>
                                                        </circle>
                                                    </svg>
                                                    <span class="ml-2 text-teal-900 text-xs font-medium">Feature Request</span>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mt-3">
                                    <a href="#" class="p-4 block bg-white rounded shadow">
                                        <div class="flex justify-between ">
                                            <p class="text-sm font-medium text-gray-900 leading-none">
                                                Add discount code to chekcout page
                                            </p>
                                            <span>
                                                <img class="h-5 w-5 rounded-full object-cover"
                                                    src="https://images.unsplash.com/photo-1444146644393-241099c1593d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=144&h=144&q=80"
                                                    alt="" />
                                            </span>
                                            </span>
                                        </div>
                                        <div class="flex justify-between items-baseline">
                                            <div class="text-sm text-gray-600">
                                                <time datetime="2019-09-14">Sep 14</time>
                                            </div>
                                            <div class="mt-2">
                                                <span class="inline-flex items-center bg-teal-100 rounded px-2 py-1 leading-tight">
                                                    <svg viewBox="0 0 8 8" fill="currentColor" class="h-2 w-2 text-teal-500">
                                                        <circle cx="4" cy="4" r=3>
                                                        </circle>
                                                    </svg>
                                                    <span class="ml-2 text-teal-900 text-xs font-medium">Feature Request</span>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mt-3">
                                    <a href="#" class="p-4 block bg-white rounded shadow">
                                        <div class="flex justify-between ">
                                            <p class="text-sm font-medium text-gray-900 leading-none">
                                                Add discount code to chekcout page
                                            </p>
                                            <span>
                                                <img class="h-5 w-5 rounded-full object-cover"
                                                    src="https://images.unsplash.com/photo-1444146644393-241099c1593d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=144&h=144&q=80"
                                                    alt="" />
                                            </span>
                                            </span>
                                        </div>
                                        <div class="flex justify-between items-baseline">
                                            <div class="text-sm text-gray-600">
                                                <time datetime="2019-09-14">Sep 14</time>
                                            </div>
                                            <div class="mt-2">
                                                <span class="inline-flex items-center bg-teal-100 rounded px-2 py-1 leading-tight">
                                                    <svg viewBox="0 0 8 8" fill="currentColor" class="h-2 w-2 text-teal-500">
                                                        <circle cx="4" cy="4" r=3>
                                                        </circle>
                                                    </svg>
                                                    <span class="ml-2 text-teal-900 text-xs font-medium">Feature Request</span>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mt-3">
                                    <a href="#" class="p-4 block bg-white rounded shadow">
                                        <div class="flex justify-between ">
                                            <p class="text-sm font-medium text-gray-900 leading-none">
                                                Add discount code to chekcout page
                                            </p>
                                            <span>
                                                <img class="h-5 w-5 rounded-full object-cover"
                                                    src="https://images.unsplash.com/photo-1444146644393-241099c1593d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=144&h=144&q=80"
                                                    alt="" />
                                            </span>
                                            </span>
                                        </div>
                                        <div class="flex justify-between items-baseline">
                                            <div class="text-sm text-gray-600">
                                                <time datetime="2019-09-14">Sep 14</time>
                                            </div>
                                            <div class="mt-2">
                                                <span class="inline-flex items-center bg-teal-100 rounded px-2 py-1 leading-tight">
                                                    <svg viewBox="0 0 8 8" fill="currentColor" class="h-2 w-2 text-teal-500">
                                                        <circle cx="4" cy="4" r=3>
                                                        </circle>
                                                    </svg>
                                                    <span class="ml-2 text-teal-900 text-xs font-medium">Feature Request</span>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mt-3">
                                    <a href="#" class="p-4 block bg-white rounded shadow">
                                        <div class="flex justify-between ">
                                            <p class="text-sm font-medium text-gray-900 leading-none">
                                                Add discount code to chekcout page
                                            </p>
                                            <span>
                                                <img class="h-5 w-5 rounded-full object-cover"
                                                    src="https://images.unsplash.com/photo-1444146644393-241099c1593d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=144&h=144&q=80"
                                                    alt="" />
                                            </span>
                                            </span>
                                        </div>
                                        <div class="flex justify-between items-baseline">
                                            <div class="text-sm text-gray-600">
                                                <time datetime="2019-09-14">Sep 14</time>
                                            </div>
                                            <div class="mt-2">
                                                <span class="inline-flex items-center bg-teal-100 rounded px-2 py-1 leading-tight">
                                                    <svg viewBox="0 0 8 8" fill="currentColor" class="h-2 w-2 text-teal-500">
                                                        <circle cx="4" cy="4" r=3>
                                                        </circle>
                                                    </svg>
                                                    <span class="ml-2 text-teal-900 text-xs font-medium">Feature Request</span>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mt-3">
                                    <a href="#" class="p-4 block bg-white rounded shadow">
                                        <div class="flex justify-between ">
                                            <p class="text-sm font-medium text-gray-900 leading-none">
                                                Add discount code to chekcout page
                                            </p>
                                            <span>
                                                <img class="h-5 w-5 rounded-full object-cover"
                                                    src="https://images.unsplash.com/photo-1444146644393-241099c1593d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=144&h=144&q=80"
                                                    alt="" />
                                            </span>
                                            </span>
                                        </div>
                                        <div class="flex justify-between items-baseline">
                                            <div class="text-sm text-gray-600">
                                                <time datetime="2019-09-14">Sep 14</time>
                                            </div>
                                            <div class="mt-2">
                                                <span class="inline-flex items-center bg-teal-100 rounded px-2 py-1 leading-tight">
                                                    <svg viewBox="0 0 8 8" fill="currentColor" class="h-2 w-2 text-teal-500">
                                                        <circle cx="4" cy="4" r=3>
                                                        </circle>
                                                    </svg>
                                                    <span class="ml-2 text-teal-900 text-xs font-medium">Feature Request</span>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mt-3">
                                    <a href="#" class="p-4 block bg-white rounded shadow">
                                        <div class="flex justify-between ">
                                            <p class="text-sm font-medium text-gray-900 leading-none">
                                                Add discount code to chekcout page
                                            </p>
                                            <span>
                                                <img class="h-5 w-5 rounded-full object-cover"
                                                    src="https://images.unsplash.com/photo-1444146644393-241099c1593d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=144&h=144&q=80"
                                                    alt="" />
                                            </span>
                                            </span>
                                        </div>
                                        <div class="flex justify-between items-baseline">
                                            <div class="text-sm text-gray-600">
                                                <time datetime="2019-09-14">Sep 14</time>
                                            </div>
                                            <div class="mt-2">
                                                <span class="inline-flex items-center bg-teal-100 rounded px-2 py-1 leading-tight">
                                                    <svg viewBox="0 0 8 8" fill="currentColor" class="h-2 w-2 text-teal-500">
                                                        <circle cx="4" cy="4" r=3>
                                                        </circle>
                                                    </svg>
                                                    <span class="ml-2 text-teal-900 text-xs font-medium">Feature Request</span>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="ml-3 flex-shrink-0 flex flex-col w-80 bg-gray-100 rounded-lg">
                        <h3 class="px-3 pt-3 pb-1 flex-shrink-0 text-sm font-medium text-gray-700">Ready for Review</h3>
                        <div class="overflow-y-auto min-h-0 flex-1">
                            <ul class="pt-1 pb-3 px-3">
                                <li class="">
                                    <a href="#" class="p-4 block bg-white rounded shadow">
                                        <div class="flex justify-between ">
                                            <p class="text-sm font-medium text-gray-900 leading-none">
                                                Add discount code to chekcout page
                                            </p>
                                            <span>
                                                <img class="h-5 w-5 rounded-full object-cover"
                                                    src="https://images.unsplash.com/photo-1444146644393-241099c1593d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=144&h=144&q=80"
                                                    alt="" />
                                            </span>
                                            </span>
                                        </div>
                                        <div class="flex justify-between items-baseline">
                                            <div class="text-sm text-gray-600">
                                                <time datetime="2019-09-14">Sep 14</time>
                                            </div>
                                            <div class="mt-2">
                                                <span class="inline-flex items-center bg-teal-100 rounded px-2 py-1 leading-tight">
                                                    <svg viewBox="0 0 8 8" fill="currentColor" class="h-2 w-2 text-teal-500">
                                                        <circle cx="4" cy="4" r=3>
                                                        </circle>
                                                    </svg>
                                                    <span class="ml-2 text-teal-900 text-xs font-medium">Feature Request</span>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                
                                
                                
                                
                               
                                <li class="mt-3">
                                    <a href="#" class="p-4 block bg-white rounded shadow">
                                        <div class="flex justify-between ">
                                            <p class="text-sm font-medium text-gray-900 leading-none">
                                                Add discount code to chekcout page
                                            </p>
                                            <span>
                                                <img class="h-5 w-5 rounded-full object-cover"
                                                    src="https://images.unsplash.com/photo-1444146644393-241099c1593d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=144&h=144&q=80"
                                                    alt="" />
                                            </span>
                                            </span>
                                        </div>
                                        <div class="flex justify-between items-baseline">
                                            <div class="text-sm text-gray-600">
                                                <time datetime="2019-09-14">Sep 14</time>
                                            </div>
                                            <div class="mt-2">
                                                <span class="inline-flex items-center bg-teal-100 rounded px-2 py-1 leading-tight">
                                                    <svg viewBox="0 0 8 8" fill="currentColor" class="h-2 w-2 text-teal-500">
                                                        <circle cx="4" cy="4" r=3>
                                                        </circle>
                                                    </svg>
                                                    <span class="ml-2 text-teal-900 text-xs font-medium">Feature Request</span>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mt-3">
                                    <a href="#" class="p-4 block bg-white rounded shadow">
                                        <div class="flex justify-between ">
                                            <p class="text-sm font-medium text-gray-900 leading-none">
                                                Add discount code to chekcout page
                                            </p>
                                            <span>
                                                <img class="h-5 w-5 rounded-full object-cover"
                                                    src="https://images.unsplash.com/photo-1444146644393-241099c1593d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=144&h=144&q=80"
                                                    alt="" />
                                            </span>
                                            </span>
                                        </div>
                                        <div class="flex justify-between items-baseline">
                                            <div class="text-sm text-gray-600">
                                                <time datetime="2019-09-14">Sep 14</time>
                                            </div>
                                            <div class="mt-2">
                                                <span class="inline-flex items-center bg-teal-100 rounded px-2 py-1 leading-tight">
                                                    <svg viewBox="0 0 8 8" fill="currentColor" class="h-2 w-2 text-teal-500">
                                                        <circle cx="4" cy="4" r=3>
                                                        </circle>
                                                    </svg>
                                                    <span class="ml-2 text-teal-900 text-xs font-medium">Feature Request</span>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="ml-3 flex-shrink-0 flex flex-col w-80 bg-gray-100 rounded-lg">
                        <h3 class="px-3 pt-3 pb-1 flex-shrink-0 text-sm font-medium text-gray-700">Done</h3>
                        <div class="overflow-y-auto min-h-0 flex-1">
                            <ul class="pt-1 pb-3 px-3">
                                <li class="">
                                    <a href="#" class="p-4 block bg-white rounded shadow">
                                        <div class="flex justify-between ">
                                            <p class="text-sm font-medium text-gray-900 leading-none">
                                                Add discount code to chekcout page
                                            </p>
                                            <span>
                                                <img class="h-5 w-5 rounded-full object-cover"
                                                    src="https://images.unsplash.com/photo-1444146644393-241099c1593d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=144&h=144&q=80"
                                                    alt="" />
                                            </span>
                                            </span>
                                        </div>
                                        <div class="flex justify-between items-baseline">
                                            <div class="text-sm text-gray-600">
                                                <time datetime="2019-09-14">Sep 14</time>
                                            </div>
                                            <div class="mt-2">
                                                <span class="inline-flex items-center bg-teal-100 rounded px-2 py-1 leading-tight">
                                                    <svg viewBox="0 0 8 8" fill="currentColor" class="h-2 w-2 text-teal-500">
                                                        <circle cx="4" cy="4" r=3>
                                                        </circle>
                                                    </svg>
                                                    <span class="ml-2 text-teal-900 text-xs font-medium">Feature Request</span>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>                                
                                <li class="mt-3">
                                    <a href="#" class="p-4 block bg-white rounded shadow">
                                        <div class="flex justify-between ">
                                            <p class="text-sm font-medium text-gray-900 leading-none">
                                                Add discount code to chekcout page
                                            </p>
                                            <span>
                                                <img class="h-5 w-5 rounded-full object-cover"
                                                    src="https://images.unsplash.com/photo-1444146644393-241099c1593d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=144&h=144&q=80"
                                                    alt="" />
                                            </span>
                                            </span>
                                        </div>
                                        <div class="flex justify-between items-baseline">
                                            <div class="text-sm text-gray-600">
                                                <time datetime="2019-09-14">Sep 14</time>
                                            </div>
                                            <div class="mt-2">
                                                <span class="inline-flex items-center bg-teal-100 rounded px-2 py-1 leading-tight">
                                                    <svg viewBox="0 0 8 8" fill="currentColor" class="h-2 w-2 text-teal-500">
                                                        <circle cx="4" cy="4" r=3>
                                                        </circle>
                                                    </svg>
                                                    <span class="ml-2 text-teal-900 text-xs font-medium">Feature Request</span>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mt-3">
                                    <a href="#" class="p-4 block bg-white rounded shadow">
                                        <div class="flex justify-between ">
                                            <p class="text-sm font-medium text-gray-900 leading-none">
                                                Add discount code to chekcout page
                                            </p>
                                            <span>
                                                <img class="h-5 w-5 rounded-full object-cover"
                                                    src="https://images.unsplash.com/photo-1444146644393-241099c1593d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=144&h=144&q=80"
                                                    alt="" />
                                            </span>
                                            </span>
                                        </div>
                                        <div class="flex justify-between items-baseline">
                                            <div class="text-sm text-gray-600">
                                                <time datetime="2019-09-14">Sep 14</time>
                                            </div>
                                            <div class="mt-2">
                                                <span class="inline-flex items-center bg-teal-100 rounded px-2 py-1 leading-tight">
                                                    <svg viewBox="0 0 8 8" fill="currentColor" class="h-2 w-2 text-teal-500">
                                                        <circle cx="4" cy="4" r=3>
                                                        </circle>
                                                    </svg>
                                                    <span class="ml-2 text-teal-900 text-xs font-medium">Feature Request</span>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mt-3">
                                    <a href="#" class="p-4 block bg-white rounded shadow">
                                        <div class="flex justify-between ">
                                            <p class="text-sm font-medium text-gray-900 leading-none">
                                                Add discount code to chekcout page
                                            </p>
                                            <span>
                                                <img class="h-5 w-5 rounded-full object-cover"
                                                    src="https://images.unsplash.com/photo-1444146644393-241099c1593d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=144&h=144&q=80"
                                                    alt="" />
                                            </span>
                                            </span>
                                        </div>
                                        <div class="flex justify-between items-baseline">
                                            <div class="text-sm text-gray-600">
                                                <time datetime="2019-09-14">Sep 14</time>
                                            </div>
                                            <div class="mt-2">
                                                <span class="inline-flex items-center bg-teal-100 rounded px-2 py-1 leading-tight">
                                                    <svg viewBox="0 0 8 8" fill="currentColor" class="h-2 w-2 text-teal-500">
                                                        <circle cx="4" cy="4" r=3>
                                                        </circle>
                                                    </svg>
                                                    <span class="ml-2 text-teal-900 text-xs font-medium">Feature Request</span>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mt-3">
                                    <a href="#" class="p-4 block bg-white rounded shadow">
                                        <div class="flex justify-between ">
                                            <p class="text-sm font-medium text-gray-900 leading-none">
                                                Add discount code to chekcout page
                                            </p>
                                            <span>
                                                <img class="h-5 w-5 rounded-full object-cover"
                                                    src="https://images.unsplash.com/photo-1444146644393-241099c1593d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=144&h=144&q=80"
                                                    alt="" />
                                            </span>
                                            </span>
                                        </div>
                                        <div class="flex justify-between items-baseline">
                                            <div class="text-sm text-gray-600">
                                                <time datetime="2019-09-14">Sep 14</time>
                                            </div>
                                            <div class="mt-2">
                                                <span class="inline-flex items-center bg-teal-100 rounded px-2 py-1 leading-tight">
                                                    <svg viewBox="0 0 8 8" fill="currentColor" class="h-2 w-2 text-teal-500">
                                                        <circle cx="4" cy="4" r=3>
                                                        </circle>
                                                    </svg>
                                                    <span class="ml-2 text-teal-900 text-xs font-medium">Feature Request</span>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mt-3">
                                    <a href="#" class="p-4 block bg-white rounded shadow">
                                        <div class="flex justify-between ">
                                            <p class="text-sm font-medium text-gray-900 leading-none">
                                                Add discount code to chekcout page
                                            </p>
                                            <span>
                                                <img class="h-5 w-5 rounded-full object-cover"
                                                    src="https://images.unsplash.com/photo-1444146644393-241099c1593d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=144&h=144&q=80"
                                                    alt="" />
                                            </span>
                                            </span>
                                        </div>
                                        <div class="flex justify-between items-baseline">
                                            <div class="text-sm text-gray-600">
                                                <time datetime="2019-09-14">Sep 14</time>
                                            </div>
                                            <div class="mt-2">
                                                <span class="inline-flex items-center bg-teal-100 rounded px-2 py-1 leading-tight">
                                                    <svg viewBox="0 0 8 8" fill="currentColor" class="h-2 w-2 text-teal-500">
                                                        <circle cx="4" cy="4" r=3>
                                                        </circle>
                                                    </svg>
                                                    <span class="ml-2 text-teal-900 text-xs font-medium">Feature Request</span>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </main>                
            </div>
            
            <!--End Of main Section-->
        </div>
        <!--End of right hand side-->

    </div>
    <script type="text/javascript" src="/js/tailwind-kanban.js"></script>
</body>
</html>