<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
   <!-- <link rel="stylesheet" href="https://unpkg.com/tailwindcss@0.5.2/dist/tailwind.min.css">-->
    <title>CSS for Backend Developer</title>
    <link href="{{ asset('css/design/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container m-auto pb-4 pt-2">
            <div class="header-top">
                <h1 class="text-white">Xcast</h1>
                <a  class="text-white" href="#">Sign In</a>
            </div>

            <nav class="flex justify-center">
                <a href="#" class="px-4 no-underline uppercase opacity-50 text-white hover:opacity-100">Catalog</a>
                <a href="#" class="px-4 no-underline uppercase opacity-50 text-white hover:text-green">Series</a>
                <a href="#" class="px-4 no-underline uppercase opacity-50 text-white hover:text-green">PodCast</a>
                <a href="#" class="px-4 no-underline uppercase opacity-50 text-white hover:text-green">Discussions</a>
            </nav>
        </div>
    </header>

    <div class="section">
        <div class="container m-auto">
            <div class="row flex justify-between row -ml-6 -mr-6">
                <div class="col flex-1 p-2">
                    <div class="box">
                        show call out Test
                    </div>
                </div>
                <div class="col flex-1 p-2">
                    <div class="box">
                        show call out Test
                    </div>
                </div>
                <div class="col flex-1 p-2" >
                    <div class="box">
                        show call out Test
                    </div>
                </div>
                <div class="col flex-1 p-2">
                    <div class="box">
                        show call out Test
                    </div>
                </div>
            </div>

            <div class="row flex justify-between row -ml-6 -mr-6">
                <div class="col flex-1 p-2">
                    <div class="box">
                        show call out Test
                    </div>
                </div>
                <div class="col flex-1 p-2">
                    <div class="box">
                        show call out Test
                    </div>
                </div>
            </div>

            <div class="row flex justify-between row -ml-6 -mr-6">
                <div class="col flex-1 p-2">
                    <div class="box">
                        show call out Test
                    </div>
                </div>
                <div class="col flex-1 p-2">
                    <div class="box">
                        show call out Test
                    </div>
                </div>
                <div class="col flex-1 p-2" >
                    <div class="box">
                        show call out Test
                    </div>
                </div>
                <div class="col flex-1 p-2">
                    <div class="box">
                        show call out Test
                    </div>
                </div>
                <div class="col flex-1 p-2">
                    <div class="box">
                        show call out Test
                    </div>
                </div>
                <div class="col flex-1 p-2">
                    <div class="box">
                        show call out Test
                    </div>
                </div>
            </div>

            <div class="row flex justify-between row -ml-6 -mr-6">
                <div class="col flex-1 p-2">
                    <div class="box">
                        show call out Test
                    </div>
                </div>
                <div class="col flex-1 p-2">
                    <div class="box">
                        show call out Test
                    </div>
                </div>
                <div class="col flex-1 p-2">
                    <div class="box">
                        show call out Test
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- built fileddds will be auto injected -->
    
    <script type="text/javascript" src="/js/app.js"></script>
</body>
</html>