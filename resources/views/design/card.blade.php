<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
   <!-- <link rel="stylesheet" href="https://unpkg.com/tailwindcss@0.5.2/dist/tailwind.min.css">-->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <title>CSS for Backend Developer</title>
    <link href="{{ asset('css/design/card.css') }}" rel="stylesheet">
</head>
<body>
   
    <div class="card">
        <!--left-->
        <div class="card-left">
            <a href="#" class="card-skill-button">
                PHP
            </a>

             <img src="./images/thumbnail.png" alt="" style="width:100px;">

             <span class="card-difficulty">
                 Intermediate Difficulty
            </span>

        </div>
        <!--right-->
        <div class="card-right">
            <h3 class="card-title">
                <a href="#">
                    Testing Jargon
                </a>
            </h3>

            <p class="card-excerpt">
                There is some good in this world, and it’s worth fighting for.<br/>

                Twenty years from now you will be more disappointed by the things that you didn’t do than by the ones you did do.
            </p>

            <div class="card-meta">
                <div>
                    <img src="./images/book.png" alt="" style="width:25px;">
                    5 lesson 
                </div>
                <div>
                    <img src="./images/clock.png" alt="" style="width:25px;">
                    53:10 min
                </div>
            </div>
        </div>
    </div>
    <!-- built fileddds will be auto injected -->
    
    <script type="text/javascript" src="/js/app.js"></script>
</body>
</html>