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
                    <div class="px-4 w-1/2">
                        <div class="w-40 bg-transistor-navy-dark text-transistor-navy-light mx-auto flex rounded overflow-hidden mb-4">
                            <span class="rounded py-1 text-transistor-navy-darker bg-white uppercase text-center w-1/2 text-xs tracking-wide font-bold">Monthly</span>
                            <span class="rounded py-1 uppercase text-center w-1/2 text-xs tracking-wide font-bold hover:bg-transistor-navy hover:text-white">Yearly</span>
                        </div>   
                        
                        <div class="border border-transistor-navy-dark bg-transistor-navy-dark rounded mb-4 px-6 py-4">
                            <div class="flex items-center -mx-4">
                                <div class="px-4 w-2/5 text-white">
                                    <h2 class="text-lg font-medium mb-2">Starter</h2>
                                    <div class="font-medium">
                                        <span class="text-3xl font-bold">$19</span>
                                        <span class="mx-1">/</span>
                                        <span>month</span>
                                    </div>
                                </div>
                                <div class="px-4 w-3/5">
                                    <ul class="list-reset text-sm font-medium  text-transistor-navy-lighter  ">
                                        <li class="mb-1">5,000 downloads / month</li>
                                        <li class="mb-1">Unlimited shows and episodes</li>
                                        <li>Analytics, teams, and more…</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="border border-transistor-navy-dark rounded mb-4 px-6 py-4 opacity-50 hover:opacity-100 hover:bg-transistor-navy-dark hover:pointer">
                            <div class="flex items-center -mx-4">
                                <div class="px-4 w-2/5 text-white">
                                    <h2 class="text-lg font-medium mb-2">Perfessional</h2>
                                    <div class="font-medium">
                                        <span class="text-3xl font-bold">$49</span>
                                        <span class="mx-1">/</span>
                                        <span>month</span>
                                    </div>
                                </div>
                                <div class="px-4 w-3/5">
                                    <ul class="list-reset text-sm font-medium  text-transistor-navy-lighter  ">
                                        <li class="mb-1">15,000 downloads / month</li>
                                        <li class="mb-1">Unlimited shows and episodes</li>
                                        <li>Analytics, teams, and more…</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="border border-transistor-navy-dark rounded px-6 py-4 opacity-50 hover:opacity-100 hover:bg-transistor-navy-dark hover:pointer">
                            <div class="flex items-center -mx-4">
                                <div class="px-4 w-2/5 text-white">
                                    <h2 class="text-lg font-medium mb-2">Small Business</h2>
                                    <div class="font-medium">
                                        <span class="text-3xl font-bold">$99</span>
                                        <span class="mx-1">/</span>
                                        <span>month</span>
                                    </div>
                                </div>
                                <div class="px-4 w-3/5">
                                    <ul class="list-reset text-sm font-medium  text-transistor-navy-lighter  ">
                                        <li class="mb-1">45,000 downloads / month</li>
                                        <li class="mb-1">Unlimited shows and episodes</li>
                                        <li>Analytics, teams, and more…</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="px-4 w-1/2">
                        <form action="#" class="">


                        </form>
                    </div>


                </div>

            </div>
        </div>
    </div>
    <script type="text/javascript" src="/js/rebuild-transistor.js"></script>
</body>
</html>