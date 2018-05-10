<!DOCTYPE html>
<html class="h-full">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@0.5.2/dist/tailwind.min.css">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <title>CSS for Backend Developer</title>
    <style>
    .text-inherit{
        color:inherit;
    }
    </style>
</head>
<body class="flex justify-center items-center h-full">
   
    <div class="card flex rounded border shadow-md" style="width:475px; height:258px;">
        <!--left-->
        <div class="card-left flex flex-col justify-between rounded p-6 items-center text-center text-white shadow-md"
             style="background: linear-gradient(to bottom, #21c8f6, #637bff);">
            <a href="#" class="card-skill-button no-underline  text-sm rounded-full px-6 py-1 text-inherit bg-grey-dark">
                PHP
            </a>

             <img src="./images/thumbnail.png" alt="" style="width:100px;">

             <span class="card-difficulty text-xs">
                 Intermediate Difficulty
            </span>

        </div>
        <!--right-->
        <div class="card-right flex flex-col text-grey-darker  p-6">
            <h3 class="card-title text-black font-light text-3xl mb-3">
                <a href="#" class="no-underline text-inherit">
                    Testing Jargon
                </a>
            </h3>

            <p class="card-excerpt flex-1">
                There is some good in this world, and it’s worth fighting for.<br/>

                Twenty years from now you will be more disappointed by the things that you didn’t do than by the ones you did do.
            </p>

            <div class="card-meta flex text-sm">
                <div class="flex items-center mr-4">
                    <img src="./images/book.png" alt="" class="mr-2" style="width:25px;">
                    5 lesson 
                </div>
                <div class="flex items-center">
                    <img src="./images/clock.png" alt="" class="mr-2" style="width:25px;">
                    53:10 min
                </div>
            </div>
        </div>
    </div>
    <!-- built fileddds will be auto injected -->
    
   
</body>
</html>