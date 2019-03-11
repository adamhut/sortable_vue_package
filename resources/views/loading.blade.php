<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
       <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

           

            .m-b-md {
                margin-bottom: 30px;
            }

            @-webkit-keyframes bubbles { 
                    33%: { -webkit-transform: translateY(10px); transform: translateY(10px); } 
                    66% { -webkit-transform: translateY(-10px); transform: translateY(-10px); } 
                    100% { -webkit-transform: translateY(0); transform: translateY(0); } 
            }
                
            @keyframes bubbles { 
                    33%: { -webkit-transform: translateY(10px); transform: translateY(10px); } 
                    66% { -webkit-transform: translateY(-10px); transform: translateY(-10px); } 
                    100% { -webkit-transform: translateY(0); transform: translateY(0); } 
            }
            .logo { 
                -webkit-animation:bubbles 0.6s 0.07s infinite ease-in-out; 
                animation:bubbles 0.6s 0.07s infinite ease-in-out;
                -webkit-animation-fill-mode:both; 
                animation-fill-mode:both;
            }
            /* @keyframes pulse_animation {
                0% { transform: scale(1); }
                30% { transform: scale(1); }
                40% { transform: scale(1.08); }
                50% { transform: scale(1); }
                60% { transform: scale(1); }
                70% { transform: scale(1.05); }
                80% { transform: scale(1); }
                100% { transform: scale(1); }
            }
            .logo { 
                -webkit-animation:pulse_animation 0.6s 0.07s infinite ease-in-out; 
                animation:pulse_animation 0.6s 0.07s infinite ease-in-out;
                -webkit-animation-fill-mode:both; 
                animation-fill-mode:both;
            }  */
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height bg-grey-darkest">
           
            <div class="content">
                <div class="title m-b-md">
                    <div class=""><img src="/img/logo.png" alt="" class="w-16 h-16 logo"><div>
                </div>
            </div>
        </div>
    </body>
</html>
