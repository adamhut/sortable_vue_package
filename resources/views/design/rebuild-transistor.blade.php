<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--<link rel="stylesheet" href="https://unpkg.com/tailwindcss@0.5.2/dist/tailwind.min.css">-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <title>Rebuild Transistor</title>
    <link href="{{ asset('css/rebuild-transistor.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
    <div id="app" class="min-h-screen bg-transistor-navy-darker font-sans antialiased">
        <div class="container mx-auto px-6">
            <header class="flex justify-between  items-center pt-8">
                <div>
                    <img  class="block h-12" src="/img/transistor_logo.svg" alt="">
                </div>
                <div>
                    <a href="#" class="font-medimum no-underline text-white hover:underline">Sign in</a>
                </div>
            </header>
            <div class="pt-16">
                <h1 class="text-white font-normal text-center">Start your podcast today:</h1>

                <div class="-mx-4  flex flex-wrap">
                    <div class="px-4 w-1/2">
                        first
                    </div>
                    <div class="px-4 w-1/2">
                        second
                    </div>


                </div>

            </div>
        </div>
    </div>
    <script type="text/javascript" src="/js/rebuild-transistor.js"></script>
</body>
</html>