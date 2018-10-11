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
    <div id="app" class="min-h-screen bg-transistor-navy-darker font-sans antialiased leading-tight">
        <div class="container mx-auto px-6">
            <header class="flex justify-between  items-center pt-8">
                <div>
                    <img  class="block h-12" src="/img/transistor_logo.svg" alt="">
                </div>
                <div>
                    <a href="#" class="font-medimum no-underline text-white hover:underline">Sign in</a>
                </div>
            </header>
            <div class="">

                <h1 class=" text-white font-normal text-center pt-12 pb-16">Start your podcast today:</h1>

                <div class="-mx-4  flex flex-wrap">
                    <div class="w-1/2">
                        <plan-selector :schedule="schedule" @change-schedule="schedule = $event" :selectedPlan="selectedPlan" @select="selectedPlan= $event"></plan-selector>
                    </div>
                
                    <div class="px-4 w-1/2 pt-10">
                        <form action="#" class="">
                            <input type="text" placeholder="Your Name" class="bg-transistor-navy-dark px-4 py-4 rounded block w-full text-white font-medium text-xl text-center focus:bc-transistor-navy focus:outline-none mb-4">
                           <input type="email" 
                                 placeholder="Your Eamil" 
                                class="bg-transistor-navy-dark px-4 py-4 rounded block w-full text-white font-medium text-xl text-center focus:bc-transistor-navy focus:outline-none mb-4"
                            >
                           <input type="password" 
                                placeholder="Setup Your Password" 
                                class="bg-transistor-navy-dark px-4 py-4 rounded block w-full text-white font-medium
                        text-xl text-center focus:bc-transistor-navy focus:outline-none mb-4"
                            >                            
                            <input type="password" 
                                placeholder="Card Number" 
                                class="bg-transistor-navy-dark px-4 py-4 rounded block w-full text-white font-medium
                                                    text-xl text-center focus:bc-transistor-navy focus:outline-none mb-4"
                            >

                            <button disabled="disabled" class="w-full bg-transistor-yellow rounded block uppercase px-4 py-4 font-black text-transistor-yellow-dark border-b-2 border-transistor-yellow-dark mb-4">Create My Account</button>
                            <p class="text-white font-bold text-center text-sm"> Includes a 14 day trial before billing begins </p>
                        </form>

                    </div>


                </div>

            </div>
        </div>
    </div>
    <script type="text/javascript" src="/js/rebuild-transistor.js"></script>
</body>
</html>