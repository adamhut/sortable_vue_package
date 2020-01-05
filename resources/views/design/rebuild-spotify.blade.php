<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--<link rel="stylesheet" href="https://unpkg.com/tailwindcss@0.5.2/dist/tailwind.min.css">-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <title>Rebuild Resolute</title>
    <link href="{{ asset('css/tailwind-spotify.css') }}" rel="stylesheet">
</head>

<body class="">
    <div class="flex flex-col h-screen max-h-screen">
        
        <div class="bg-blue-500 flex-1 flex overflow-y-hidden">
            <!-- Start of Side Bar-->
            <div class="sidebar bg-red-500 flex-none w-48 flex flex-col justify-between">
                <div>
                    one 
                </div>
                <div class="overflow-y-auto">
                    two 
                </div>
                <div>
                    three
                </div>
                side bar
            </div>
            <!-- End of Side Bar-->
            <!-- Start of Content-->
            <div class="content-area bg-red-300 flex-1 overflow-y-auto">
                content
            </div>            
            <!-- Start of Content-->
        </div>

        <div class="bg-blue-200">bottom</div>

    </div>
</body>

</html>