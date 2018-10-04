<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--<link rel="stylesheet" href="https://unpkg.com/tailwindcss@0.5.2/dist/tailwind.min.css">-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <title>Rebuild Lyften</title>
    <link href="{{ asset('css/rebuild-lyften.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body class="bg-grey-lighter font-sans font-normal text-black">
    <header>  <!-- start header-->
        <div class="container mx-auto px-6">
            <div class="flex items-center pt-6">
                <div class="lg:w-1/4 xl:w-1/5 pl-6 pr-6 lg:pr-8">
                    <div class="flex items-center">
                        
                        <svg class="fill-current w-24 h-24" xmlns="http://www.w3.org/2000/svg" width="405" height="200" viewBox="0 0 405 200"><path fill="#7EC479" d="M70.79 169.804c-7.014 2.214-14.992 1.35-21.252-2.56-12.413-7.71-24.847-15.402-37.28-23.078-4.795-2.91-8.317-7.798-9.647-13.232-.81-3.436-.574-6.993-.588-10.494 0-13.175 0-26.35-.007-39.524-.058-7.238 3.78-14.382 9.947-18.2 12.564-7.782 25.15-15.53 37.698-23.336 3.55-2.214 7.676-3.328 11.816-3.716l3.838-.106c4.14.388 8.266 1.502 11.816 3.716 12.55 7.806 25.135 15.554 37.698 23.338 6.167 3.817 10.005 10.96 9.947 18.2-.007 13.174-.007 26.348-.007 39.523-.014 3.5.223 7.058-.59 10.494-1.33 5.433-4.85 10.32-9.645 13.23-12.433 7.677-35.785 23.135-43.742 25.744z"/>
                            <path fill="#fff" d="M62.07 130.65c1.48 2.75 2.7 2.172 4.66 2.623 2.49.264 4.54 1.778 6.408 3.38-2.314-.447-4.63-1.07-7.033-1.602 1.604 1.958 3.028 4.01 3.83 6.41-2.94-1.693-7.112-5.786-8.543-6.23-.82-.247-3.082.058-4.15 3.403-1.7-2.076 1.83-4.916 1.294-8.837-.088-2.402-1.525-3.33-2.274-5.902-1.473-1.358-3.623-1.473-5.434-2.148-3.17 3.62-6.533 8.4-3.888 13.31 1.882 3.488 3.436 2.76 5.924 3.325 3.17.338 5.773 2.264 8.15 4.3-2.942-.565-5.884-1.355-8.942-2.036 2.037 2.49 3.85 5.09 4.867 8.15-3.735-2.15-6.906-5.434-10.866-7.135-3.733-.11-5.886 3.395-8.49 5.326.452-4.87 5.548-8.036 4.867-13.016-.11-3.06-.34-7.022-3.847-8.15-6.34-2.602-11.884-7.693-14.148-14.26-2.83-8.263-2.376-17.885 2.038-25.58 5.66-10.07 17.657-14.712 28.75-15.957 12.45-.453 23.31 7.017 33.385 13.468 3.738.567 8.152-.45 10.98 2.83 3.962 3.735 2.943 9.507 2.943 14.373 3.622 9.963 9.62 19.354 10.185 30.106-1.13-.793-2.04-1.813-2.376-3.172-3.282-8.825-6.34-18.556-14.374-24.105-5.32-3.28-11.43.34-17.09.224-4.753 0-8.376 3.396-12.226 5.548-.226 4.868-1.922 9.396-4.865 13.127.002 0-1.818 4.373.264 8.23z"/>
                            <g fill="#3B3B3B">
                                <path d="M135.948 59.394c0-3.272 2.573-5.842 5.845-5.842s5.842 2.57 5.842 5.842v75.968c0 3.272-2.57 5.842-5.842 5.842s-5.845-2.57-5.845-5.842V59.394zM174.79 135.48L152.7 91.183c-1.4-2.803-.232-6.31 2.69-7.83 2.803-1.4 6.308-.232 7.83 2.688l18.114 36.23 18.115-36.346c1.517-2.803 5.025-3.972 7.945-2.57 2.806 1.518 3.974 5.026 2.573 7.946l-31.44 62.993c-5.023 9.7-14.607 16.128-26.177 16.128-3.27 0-5.844-2.57-5.844-5.842 0-3.27 2.573-5.844 5.845-5.844 6.312 0 12.74-4.088 15.193-8.648l7.247-14.61zM226.47 135.362c0 3.272-2.572 5.842-5.844 5.842-3.272 0-5.842-2.57-5.842-5.842v-64.28c0-9.7 7.83-17.53 17.53-17.53 4.792 0 9.233 1.987 12.388 5.143 2.337 2.337 2.337 6.075 0 8.298-2.22 2.337-5.962 2.337-8.298 0-1.168-1.17-2.57-1.754-4.09-1.754-3.273 0-5.843 2.686-5.843 5.84V82.77h13.792c3.272 0 5.842 2.573 5.842 5.845s-2.57 5.842-5.842 5.842h-13.79v40.907zM250.57 65.24c0-3.273 2.574-5.846 5.846-5.846 3.272 0 5.842 2.573 5.842 5.845v17.528h9.35c3.272 0 5.842 2.573 5.842 5.845s-2.57 5.842-5.842 5.842h-9.35v29.22c0 3.155 2.573 5.84 5.845 5.84 1.518 0 2.92-.582 4.088-1.753 2.34-2.337 6.08-2.337 8.3 0 2.336 2.223 2.336 5.962 0 8.298-3.157 3.156-7.597 5.143-12.388 5.143-9.7 0-17.532-7.83-17.532-17.53V65.24zM296.18 117.83c2.336 6.897 8.88 11.687 16.48 11.687 4.79 0 9.23-1.987 12.386-5.143 2.22-2.22 5.962-2.22 8.298 0 2.22 2.337 2.22 5.962 0 8.298-5.492 5.26-12.622 8.532-20.685 8.532-16.248 0-29.22-12.972-29.22-29.216 0-16.247 12.972-29.22 29.22-29.22 16.243 0 29.216 12.973 29.216 29.22 0 3.156-2.57 5.842-5.845 5.842h-39.85zm32.957-11.687c-2.337-6.894-8.88-11.687-16.477-11.687-7.6 0-14.143 4.793-16.597 11.687h33.074zM346.564 88.613c0-3.272 2.573-5.845 5.845-5.845 3.27 0 5.84 2.573 5.84 5.845 5.027-3.625 10.986-5.845 17.533-5.845 16.244 0 29.216 12.972 29.216 29.22v23.373c0 3.273-2.57 5.843-5.846 5.843-3.272 0-5.842-2.57-5.842-5.842v-23.373c0-9.7-7.83-17.532-17.53-17.532s-17.53 7.832-17.53 17.532v23.374c0 3.273-2.57 5.843-5.843 5.843s-5.846-2.57-5.846-5.842V88.614z"/>
                             </g>
                        </svg>
                    </div>
                </div>
                <div class="lg:w-3/4 xl:w-4/5 pl-6 pr-6 lg:pr-8" >
                    <nav class="flex justify-end">   <!--start of Nav-->
                        <ul class="flex flex-row justify-end mr-4">
                            <li class="list-reset px-2 text-grey">
                                <a href="#" class="uppercase text-grey-dark no-underline text-sm hover:text-grey-darker">
                                    project  
                                </a>
                            </li>
                            <li class="list-reset px-2 text-grey">
                                <a href="#" class="uppercase text-grey-dark no-underline text-sm hover:text-grey-darker">
                                    journal  
                                </a>
                            </li>
                            <li class="list-reset px-2 text-grey">
                                <a href="#" class="uppercase text-grey-dark no-underline text-sm hover:text-grey-darker">
                                    portofilo  
                                </a>
                            </li>
                            <li class="list-reset px-2 text-grey">
                                <a href="#" class="uppercase text-grey-dark no-underline text-sm hover:text-grey-darker">
                                    resume 
                                </a>
                            </li>
                        </ul>
                        <div class="flex justify-end items-center text-grey">
                            <a class="block flex items-center text-grey hover:text-grey-darker mr-6" href="https://github.com/tailwindcss/tailwindcss">
                            <svg class="fill-current w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>GitHub</title><path d="M10 0a10 10 0 0 0-3.16 19.49c.5.1.68-.22.68-.48l-.01-1.7c-2.78.6-3.37-1.34-3.37-1.34-.46-1.16-1.11-1.47-1.11-1.47-.9-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.9 1.52 2.34 1.08 2.91.83.1-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.94 0-1.1.39-1.99 1.03-2.69a3.6 3.6 0 0 1 .1-2.64s.84-.27 2.75 1.02a9.58 9.58 0 0 1 5 0c1.91-1.3 2.75-1.02 2.75-1.02.55 1.37.2 2.4.1 2.64.64.7 1.03 1.6 1.03 2.69 0 3.84-2.34 4.68-4.57 4.93.36.31.68.92.68 1.85l-.01 2.75c0 .26.18.58.69.48A10 10 0 0 0 10 0"></path></svg>
                            </a>
                            <a class="block flex items-center text-grey hover:text-grey-darker mr-6" href="https://twitter.com/tailwindcss">
                            <svg class="fill-current w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Twitter</title><path d="M6.29 18.25c7.55 0 11.67-6.25 11.67-11.67v-.53c.8-.59 1.49-1.3 2.04-2.13-.75.33-1.54.55-2.36.65a4.12 4.12 0 0 0 1.8-2.27c-.8.48-1.68.81-2.6 1a4.1 4.1 0 0 0-7 3.74 11.65 11.65 0 0 1-8.45-4.3 4.1 4.1 0 0 0 1.27 5.49C2.01 8.2 1.37 8.03.8 7.7v.05a4.1 4.1 0 0 0 3.3 4.03 4.1 4.1 0 0 1-1.86.07 4.1 4.1 0 0 0 3.83 2.85A8.23 8.23 0 0 1 0 16.4a11.62 11.62 0 0 0 6.29 1.84"></path></svg>
                            </a>
                            <a class="block flex items-center text-grey hover:text-grey-darker" href="https://join.slack.com/t/tailwindcss/shared_invite/enQtMjc2NTA1NTg0NTEyLTY4ZTg1YWFjM2NjMTRkMmNkMTA4MGNiZTFmNDYyYTJhNjNkY2QxODQwODE4MWRiZDFlNzdmOGI0MmQ1M2EzZmQ">
                            <svg class="fill-current w-4 h-4" viewBox="0 0 126 126" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>Slack</title><g><path d="M68.186 51.784l-16.688 5.59 5.399 16.12 16.688-5.59-5.399-16.12z"></path><path fill-rule="evenodd" d="M45.343 5.243c43-12.9 61.6-2.9 74.5 40.1 12.9 43 2.9 61.6-40.1 74.5-43 12.9-61.6 2.9-74.5-40.1-12.9-43-2.9-61.6 40.1-74.5zm44.7 70.7l8.1-2.7c3.4-1.1 5.2-4.8 4.1-8.2-1.1-3.4-4.8-5.2-8.2-4.1l-8.1 2.7-5.4-16.1 8.1-2.7c3.4-1.1 5.2-4.8 4.1-8.2-1.1-3.4-4.8-5.2-8.2-4.1l-8.1 2.7-2.8-8.4c-1.1-3.4-4.8-5.2-8.2-4.1-3.4 1.1-5.2 4.8-4.1 8.2l2.8 8.4-16.7 5.6-2.8-8.4c-1.1-3.4-4.8-5.2-8.2-4.1-3.4 1.1-5.2 4.8-4.1 8.2l2.8 8.4-8.1 2.7c-3.4 1.1-5.2 4.8-4.1 8.2.9 2.6 3.4 4.3 6 4.4.7.1 1.5-.1 2.2-.3l8.1-2.7 5.4 16.1-8.1 2.7c-3.4 1.1-5.2 4.8-4.1 8.2.9 2.6 3.4 4.3 6 4.4.7.1 1.5-.1 2.2-.3l8.1-2.7 2.8 8.4c.9 2.6 3.4 4.3 6 4.4.7.1 1.5-.1 2.2-.3 3.4-1.1 5.2-4.8 4.1-8.2l-2.8-8.4 16.7-5.6 2.8 8.4c.9 2.6 3.4 4.3 6 4.4.7.1 1.5-.1 2.2-.3 3.4-1.1 5.2-4.8 4.1-8.2l-2.8-8.4z"></path></g></svg>
                            </a>
                        </div>
                    </nav>  <!--End of Nav-->
                    
                    <div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </header> <!-- End Of Header-->
    <div class="container  mx-auto px-6 ">
        <div class="flex flex-wrap -mx-6 relative">
            <div class="w-full lg:w-xs flex-none px-6 mb-8"><!-- start with side menu-->
                <div class="sticky pin-t ">
                    <div class="border-b">
                        <a href="#" 
                            class="no-underline font-semibold text-green-dark px-4 py-3 block">
                            General
                        </a>
                    </div>
                    <div class="border-b">
                        <a href="#" 
                            class="no-underline font-semibold text-green-light px-4 py-3 block hover:text-green-dark">
                            Basic Usage
                        </a>
                    </div>
                    <div class="border-b">
                        <a href="#" 
                            class="no-underline font-semibold text-green-light px-4 py-3 block hover:text-green-dark">
                            Artisan Commands
                        </a>
                    </div>
                    <div class="border-b">
                        <a href="#" 
                            class="no-underline font-semibold text-green-light px-4 py-3 block hover:text-green-dark">
                            Methods
                        </a>
                    </div>
                    <div class="border-b">
                        <a href="#" 
                            class="no-underline font-semibold text-green-light px-4 py-3 block hover:text-green-dark">
                            Services
                        </a>
                    </div>
                    <div class="border-b">
                        <a href="#" 
                            class="no-underline font-semibold text-green-light px-4 py-3 block hover:text-green-dark">
                            Updgrade
                        </a>
                    </div>
                </div>
            </div><!-- end Of the side menu-->
            <div class="px-6 flex-1">
                <div class="breadcurmb">   
                    <span class="text-sm px-2 text-green">Project</span>
                    <span>
                        <svg class="fill-current" width="6px" height="10px" viewBox="0 0 6 10" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-311.000000, -90.000000)" fill="#82909E" fill-rule="nonzero">
                                    <path d="M317.292893,92.2928932 C317.683418,91.9023689 318.316582,91.9023689 318.707107,92.2928932 C319.097631,92.6834175 319.097631,93.3165825 318.707107,93.7071068 L314.707107,97.7071068 C314.316582,98.0976311 313.683418,98.0976311 313.292893,97.7071068 L309.292893,93.7071068 C308.902369,93.3165825 308.902369,92.6834175 309.292893,92.2928932 C309.683418,91.9023689 310.316582,91.9023689 310.707107,92.2928932 L314,95.5857864 L317.292893,92.2928932 Z" transform="translate(314.000000, 95.000000) rotate(-90.000000) translate(-314.000000, -95.000000) "></path>
                                </g>
                            </g>
                        </svg>    
                    </span>
                    <span class="text-sm px-2 text-green">Laravel Geoip</span>
                    <span>
                        <svg class="fill-current" width="6px" height="10px" viewBox="0 0 6 10" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-311.000000, -90.000000)" fill="#82909E" fill-rule="nonzero">
                                    <path d="M317.292893,92.2928932 C317.683418,91.9023689 318.316582,91.9023689 318.707107,92.2928932 C319.097631,92.6834175 319.097631,93.3165825 318.707107,93.7071068 L314.707107,97.7071068 C314.316582,98.0976311 313.683418,98.0976311 313.292893,97.7071068 L309.292893,93.7071068 C308.902369,93.3165825 308.902369,92.6834175 309.292893,92.2928932 C309.683418,91.9023689 310.316582,91.9023689 310.707107,92.2928932 L314,95.5857864 L317.292893,92.2928932 Z" transform="translate(314.000000, 95.000000) rotate(-90.000000) translate(-314.000000, -95.000000) "></path>
                                </g>
                            </g>
                        </svg>
                    </span>
                    <span class="text-sm px-2 text-grey-darker">Get Started</span>
                </div><!-- End Of Breadcrumb-->
                <div class="content-title mt-4"><!-- Start Of Content Title-->
                    <div class="flex justify-between items-center">
                        <div class="text-4xl font-bold">
                            Get Started
                        </div>
                        <div>
                            <a href="#" class="bg-blue-light no-underline py-1 px-2 text-xs text-white rounded tracking-tight hover:bg-blue">edit this page</a>
                        </div>
                    </div>
                </div><!-- End Of Content Title-->
                <div class="badge-row mt-4"><!-- start Of Badge Row-->
                    <div class="flex">
                        <a href="#" class="no-underline text-xs text-white tracking-tight flex items-center  mr-2">
                            <span class="bg-grey-darker py-1 px-2 rounded-bl rounded-tl">build</span>
                            <span class="bg-green py-1 px-2 rounded-br rounded-tr">Passing</span>
                        </a>
                         <a href="#" class="no-underline text-xs text-white tracking-tight flex  mr-2">
                            <span class="bg-grey-darker py-1 px-2 rounded-bl rounded-tl">stable</span>
                            <span class="bg-blue py-1 px-2 rounded-br rounded-tr">1.0.8</span>
                        </a>
                         <a href="#" class="no-underline text-xs text-white tracking-tight flex  mr-2">
                            <span class="bg-grey-darker py-1 px-2 rounded-bl rounded-tl">download</span>
                            <span class="bg-blue-dark py-1 px-2 rounded-br rounded-tr">872.2 k</span>
                        </a>
                         <a href="#" class="no-underline text-xs text-white tracking-tight flex  mr-2">
                            <span class="bg-grey-darker py-1 px-2 rounded-bl rounded-tl">patreon</span>
                            <span class="bg-yellow-darker  py-1 px-2 rounded-br rounded-tr">donate</span>
                        </a>
                         <a href="#" class="no-underline text-xs text-white tracking-tight flex  mr-2">
                            <span class="bg-grey-darker py-1 px-2 rounded-bl rounded-tl">gratipay</span>
                            <span class="bg-yellow-darker py-1 px-2 rounded-br rounded-tr">donate</span>
                        </a>
                         <a href="#" class="no-underline text-xs text-white tracking-tight flex  mr-2">
                            <span class="bg-grey-darker py-1 px-2 rounded-bl rounded-tl">flattr</span>
                            <span class="bg-yellow-darker py-1 px-2 rounded-br rounded-tr">donate</span>
                        </a>
                         <a href="#" class="no-underline text-xs text-white tracking-tight flex">
                            <span class="bg-grey-darker py-1 px-2 rounded-bl rounded-tl">donate</span>
                            <span class="bg-green-dark py-1 px-2 rounded-br rounded-tr">PayPal</span>
                        </a>
                    </div>
                </div><!-- end Of Badge Row-->
                <div class="content mt-4"> <!-- start of Content-->
                    <div class="text-3xl font-bold">
                        Installation
                    </div>
                    <ul>
                        <li class="mt-2">
                            <a href="#" class="text-green no-underline hover:underline">GeoIP for Laravel 5 on Packagist</a>
                        </li>
                        <li class="mt-2">
                            <a href="#" class="text-green no-underline hover:underline">GeoIP for Laravel 5 on GitHub</a>
                        </li>
                        <li class="mt-2">
                            <a href="#" class="text-green no-underline hover:underline">Laravel 5.0/Pre-5.5 PHP Installation</a>
                        </li>
                        <li class="mt-2">
                            <a href="#" class="text-green no-underline hover:underline">Laravel 4 Installation</a>
                        </li>
                    </ul>
                    <div class="text-2xl mt-4">
                        Composer
                    </div>
                    <br/>
                    <p>
                        From the command line run:
                    </p>
                    <div class="w-full bg-grey-light p-4 text-grey-darkest text-sm rounded-sm mt-4">
                        $ composer require torann/geoip
                    </div>

                    <div class="text-2xl mt-4">
                        Laravel
                    </div>
                    <p>
                        Once installed you need to register the service provider with the application. Open up 
                        <span class="bg-grey-light rounded py-1 px-1">config/app.php</span> and find the <span class="bg-grey-light rounded py-1 px-1">providers</span> key.
                    </p>
                    <div class="w-full bg-grey-light p-4 text-grey-darkest text-sm rounded-sm mt-4">
                        <span class="text-blue-dark"> 'providers'</span> <span class="text-red">=></span>  [ <br><br>

                            <div class="pl-4 mb-4">
                                \<span class="text-blue">Torann</span>
                                \<span class="text-blue">GeoIP</span>
                                \<span class="text-blue">GeoIPServiceProvider::class,</span>
                            </div>

                        ]   
                    </div>
                    <p>
                        This package also comes with an optional facade, which provides an easy way to call the the class. Open up 
                        <span class="bg-grey-light rounded py-1 px-1">config/app.php</span>
                        and find the aliases key.
                    </p>

                    <div class="w-full bg-grey-light p-4 text-grey-darkest text-sm rounded-sm mt-4">
                        <span class="text-blue-dark"> 'aliases'</span> <span class="text-red">=></span> [ <br><br>
                    
                        <div class="pl-4 mb-4">
                            <span class="text-blue-dark"> 'GeoIP'</span> <span class="text-red">=></span>
                            \<span class="text-blue">Torann</span> \
                            <span class="text-blue">GeoIP</span> \
                            <span class="text-blue">Facades</span> \
                            <span class="text-blue">GeoIP::class,</span>
                        </div>
                        ]
                    </div>

                    <div class="text-2xl mt-4">
                        Publish the configurations
                    </div>
                    <p>
                        Run this on the command line from the root of your project:
                    </p>

                    <div class="w-full bg-grey-light p-4 text-grey-darkest text-sm rounded-sm mt-4">
                        php artisan vendor:publish --provider <span class="text-red-dark"> = </span>
                        <span class="text-blue-dark">"Torann\GeoIP\GeoIPServiceProvider"</span> --tag<span class="text-red-dark"> = </span>config
                    </div>
                    <div class="text-3xl mt-4">
                        Configuration
                    </div>
                    <p class="">
                        Quick breakdown of the two main options in the configuration file. To find out more simple open the <span class="bg-grey-light rounded py-1 px-1">config/geoip.php</span> file.
                    </p>
                    <div class="text-2xl mt-4">
                        Service Configuration
                    </div>
                    <p class="mt-2">
                        To simplify and keep things clean, all third party composer packages, that are needed for a service, are installed separately.
                    </p>
                    <p class="mt-2">
                        For further configuration options checkout the <a href="#" class="text-green no-underline hover:underline">services</a> page.
                    </p>

                    <div class="text-2xl mt-4">
                      Caching Configuration
                    </div>
                    <p class="mt-2">
                        GeoIP uses Laravel's default caching to store queried IP locations. This is done to reduce the number of calls made to the
                        selected service, as some of them are rate limited.
                    </p>
                    
                    <div class="text-xl">
                        Options:
                    </div>
                    <ul>
                        <li class="mt-2"><span class="bg-grey-light rounded py-1 px-1 text-sm">all</span> all location are cached</li>
                        <li class="mt-2"><span class="bg-grey-light rounded py-1 px-1 text-sm">some</span> cache only the requesting user</li>
                        <li class="mt-2"><span class="bg-grey-light rounded py-1 px-1 text-sm">none</span> caching is completely disable</li>
                    </ul>
                    
                </div> <!-- End of Content-->
            </div>
           
        </div>
        <div class="mt-8 border-t border-grey-light w-full py-4 text-center"><!--footer-->
            
            <a class="mx-auto text-grey-darker">
                Copyright © 2008-2017 Lyften. Built using <a href="#" class="text-green no-underline hover:underline">Skosh</a>.
            </span>
            
        </div>
        <!-- end of footer-->
    </div>
</body>
</html>