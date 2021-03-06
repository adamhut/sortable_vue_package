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
    <div id="app" class="bg-gray-200 antialiased min-h-screen xl:flex xl:flex-col xl:h-screen">
        <site-header class="xl:flex-shrink-0"></site-header>
        <div class="xl:flex xl:flex-1 xl:overflow-y-hidden">
            <search-filters></search-filters>
            <main class="py-6 xl:flex-1 xl:overflow-x-hidden">
                <div v-for="(location, i) in locations" :class="{'mt-6': i > 0}">
                    <div class="px-4 xl:px-8">
                        <h3 class="text-gray-900 text-xl">@{{ location.title }}</h3>
                        <p class="text-gray-600">@{{ location.description }}</p>
                    </div>
                    <div class="mt-6 sm:overflow-x-auto">
                        <div class="px-4 sm:inline-flex sm:pb-8 xl:px-8">
                        <div v-for="(property, i) in location.properties" :class="{'mt-10 sm:ml-4': i > 0 }" class="sm:mt-0 sm:w-80 sm:flex-shrink-0">
                            <property-card :property="property"/>
                        </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="px-4">
                    <h3 class="text-gray-900 text-xl">Los Angeles</h3>
                    
                    <p class="text-gray-600">Live like the  stars in these luxurious Southern California escapes. </p>
                </div>
                <div class="mt-6 sm:overflow-x-auto">
                    <div class="px-4 sm:inline-flex sm:-mx-2 sm:pb-8">
                        <div v-for="(property,i) in properties" :class="{'mt-10 sm:ml-4':i > 1}" class="sm:mt-0 sm:w-80 sm:flex-shrink-0 sm:px-2 ">
                            <property-card :property="property"></property-card>
                        </div>
                        <workcation-card></workcation-card>                
                        <workcation-card></workcation-card>
                        <workcation-card></workcation-card>
                        <workcation-card></workcation-card>
                    </div>
                </div> --}}
            </main>
        </div>        
    </div>
   <script type="text/javascript" src="/js/workcation.js"></script>
    <!-- built fileddds will be auto injected -->
</body>
</html>