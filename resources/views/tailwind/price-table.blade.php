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
<body class="bg-gray-200">
    <div id="app" class="bg-gray-200 antialiased min-h-screen xl:flex xl:flex-col xl:h-screen">
        <div class="py-10 px-6 bg-gray-200">
            <h1 class="text-2xl font-semibold text-gray-900 leading-tight">Pricing build for businesses of All sizes</h1>    
            <p class="mt-4 text-gray-600">Try free for 14 days, no Credit Card Required </p>

            <div class="mt-10">
                <div class="bg-white rounded-lg shadow-md">
                    <div class="px-5 py-5">
                        <h2 class="font-medium text-gray-900 text-center">Basic</h2>
                        <div class="mt-1 text-center">
                            <span class="text-3xl font-semibold text-gray-900">$9</span>
                            <span class="text-gray-600">/mo</span>
                        </div>
                        <p class="mt-2  w-56  mx-auto text-center text-sm text-gray-600">All the basics for starting a new business.</p>
                        <a href="#" class="mt-4 block px-3 py-2 text-sm text-center font-semibold text-white bg-gray-800 rounded-lg hover:bg-gray-700">
                            Buy Basic
                        </a>
                    </div>
                    <div>
                        <table>
                            <thead>
                                <th colspan="2"></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Unlimited storage space</td>
                                    <td>
                                        <svg class="h-6 w-6 fill-current text-green-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"/>
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Other Feature</td>
                                    <td>
                                        <svg class="h-6 w-6 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path d="M0 10h24v4h-24z"/>
                                        </svg>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div> 
    </div>
   <script type="text/javascript" src="/js/tailwind-pricetable.js"></script>
    <!-- built fileddds will be auto injected -->
</body>
</html>