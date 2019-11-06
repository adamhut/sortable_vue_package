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
    <div id="app" class="">
        <header class="flex">
            <div class="flex-shrink-0 px-4 py-3 bg-gray-800">
                <button class="flex items-center">
                    <img src="/images/avatar.png"  class="h-10 w-10 rounded-full object-cover" alt="">
                    
                    <span class="ml-4 text-sm font-medium text-white ">Monica White</span>

                    <svg class="ml-10 h-6 w-6 stoke-current text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                    </svg>
                </button>
            </div>
            
            <div class="px-6 bg-gray-700 flex-1 flex items-center justify-between ">
                <nav class="flex items-center ">
                    <a href="#" class="inline-block px-3 py-2 bg-gray-800 rounded-lg leading-none text-sm font-medium text-white ">Mailbox</a>
                    <a href="#" class="inline-block px-3 py-2 rounded-lg leading-none text-sm font-medium text-white">Customers</a>
                    <a href="#" class="inline-block px-3 py-2 rounded-lg leading-none text-sm font-medium text-white">Reporting</a>
                    <a href="#" class="inline-block px-3 py-2 rounded-lg leading-none text-sm font-medium text-white">Manage</a>
                </nav>
            </div>
            <div class="bg-gray-700 ">
                <input type="text">asdfadsf
                <button>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M433.884 366.059C411.634 343.809 384 316.118 384 208c0-79.394-57.831-145.269-133.663-157.83A31.845 31.845 0 0 0 256 32c0-17.673-14.327-32-32-32s-32 14.327-32 32c0 6.75 2.095 13.008 5.663 18.17C121.831 62.731 64 128.606 64 208c0 108.118-27.643 135.809-49.893 158.059C-16.042 396.208 5.325 448 48.048 448H160c0 35.346 28.654 64 64 64s64-28.654 64-64h111.943c42.638 0 64.151-51.731 33.941-81.941zM224 472a8 8 0 0 1 0 16c-22.056 0-40-17.944-40-40h16c0 13.234 10.766 24 24 24z"/></svg>
                </button>
                <button>
               <svg class="h-6 w-6 bg-gray-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm2-13c0 .28-.21.8-.42 1L10 9.58c-.57.58-1 1.6-1 2.42v1h2v-1c0-.29.21-.8.42-1L13 9.42c.57-.58 1-1.6 1-2.42a4 4 0 1 0-8 0h2a2 2 0 1 1 4 0zm-3 8v2h2v-2H9z"/></svg>
                </button>
            </div>
            
        </header>
        <div>

        </div>
        <main>
            <div>

            </div>
            <div>

            </div>
        </main>
      
    </div>
   <script type="text/javascript" src="/js/tailwind-inbox.js"></script>
    <!-- built fileddds will be auto injected -->
</body>
</html>