<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--<link rel="stylesheet" href="https://unpkg.com/tailwindcss@0.5.2/dist/tailwind.min.css">-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <title>Rebuild Meetup</title>
    <link href="{{ mix('css/price-table.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body class="bg-gray-100 font-sans font-normal text-black">
    <div id="app" class="container mx-auto mt-16">
        <table class="w-full text-base mt-12">
            <thead class="">
                <tr>
                    <th class="w-1/5 px-4 py-6 text-left bg-gray-100 text-center font-normal align-top">
                        #

                    </th>
                    <th class="w-1/5 px-4 py-6 bg-gray-200 text-center border border-gray-400 font-normal">
                        <div class="uppercase tracking-wide font-bold text-gray-700">Hobby</div>
                        <div class="mt-3">
                            <span class="text-lg">$</span>
                            <span class="font-bold text-4xl ml-1 text-gray-800">15</span>
                            <span class="ml-2 text-sm"> /month</span>
                        </div>
                        <div class="mt-3">
                            <a href="#" class="bg-blue-500 text-white inline-block w-4/5 px-4 py-3 hover:bg-blue-700 rounded">Sign up</a>
                        </div>
                    </th>
                    <th class="w-1/5 px-4 py-6 bg-gray-200 text-center border border-gray-400 font-normal">
                        <div class="uppercase tracking-wide font-bold text-gray-700">Growth</div>
                        <div class="mt-3">
                            <span class="text-lg">$</span>
                            <span class="font-bold text-4xl ml-1 text-gray-800">25</span>
                            <span class="ml-2 text-sm"> /month</span>
                        </div>
                        <div class="mt-3">
                            <a href="#" class="bg-blue-500 text-white inline-block w-4/5 px-4 py-3 hover:bg-blue-700 rounded">Sign up</a>
                        </div>
                    </th>
                    <th class="w-1/5 px-4 py-6 bg-gray-200 text-center border border-gray-400 font-normal">
                        <div class="uppercase tracking-wide font-bold text-gray-700">Business</div>
                        <div class="mt-3">
                            <span class="text-lg">$</span>
                            <span class="font-bold text-4xl ml-1 text-gray-800">50</span>
                            <span class="ml-2 text-sm"> /month</span>
                        </div>
                        <div class="mt-3">
                            <a href="#" class="bg-blue-500 text-white inline-block w-4/5 px-4 py-3 hover:bg-blue-700 rounded">Sign up</a>
                        </div>
                    </th>
                    <th class="w-1/5 px-4 py-6 bg-gray-200 text-center border border-gray-400 font-normal">
                        <div class="uppercase tracking-wide font-bold text-gray-700">Enterprice</div>
                        <div class="mt-3">
                            <span class="text-lg">$</span>
                            <span class="font-bold text-4xl ml-1 text-gray-800">90</span>
                            <span class="ml-2 text-sm"> /month</span>
                        </div>
                        <div class="mt-3">
                            <a href="#" class="bg-blue-500 text-white inline-block w-4/5 px-4 py-3 hover:bg-blue-700 rounded">Sign up</a>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John</td>
                    <td>Simith</td>
                    <td>john@smith.com</td>
                    <td>Canada</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jane</td>
                    <td>Simith</td>
                    <td>jane@smith.com</td>
                    <td>Canada</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Joe</td>
                    <td>Simith</td>
                    <td>joe@smith.com</td>
                    <td>Canada</td>
                </tr>
            </tbody>

        </table>
       
    </div>
    <script src="{{mix('/js/price-table.js')}}"></script>
</body>

</html>