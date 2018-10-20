<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--<link rel="stylesheet" href="https://unpkg.com/tailwindcss@0.5.2/dist/tailwind.min.css">-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400im600m700|Open+Sans" rel="stylesheet">
    <title>Rebuild Lyften</title>
    <link href="{{ asset('css/rebuild-course-landing.css') }}" rel="stylesheet">
</head>
<body class="font-sans antialiased border-t-6 border-pink-laravel">
    <div class="bg-grey-lighter text-black">
        <div class="container mx-auto flex px-2">
            <div class="flex-1 pt-12 mr-12">
                <h1 class="text-4xl pb-10">Useful Laravel Packages</h1>
                <p class="pb-10 leading-loose tracking-wide">
                    A comprehensive video course teaching you how to use the most popular Laravel packages to jump-start your web applications.
                </p>
                <div class="font-bold mb-4">Coming Soon! Subscribe for updates and free previews.</div>
                <div class="flex">
                    <input type="email" class="flex-1 rounded rounded-r-none py-3 px-6 outline-none shadow border focus:border-pink-laravel" placeholder="Enter Email address"/>
                    <button type="button" 
                        class="flex-2 uppercase bg-pink-laravel text-white rounded rounded-l-none py-3 px-8 font-semibold tracking-wide shadow">Subscribe
                    </button>
                    
                </div>
            </div>
            <div class="flex-1 pt-16 flex justify-end">
                <img src="/images/course-landing/macbook.svg" alt="">
            </div>
        </div>
    </div><!-- End header-->

</body>
</html>