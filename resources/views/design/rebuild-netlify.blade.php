<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--<link rel="stylesheet" href="https://unpkg.com/tailwindcss@0.5.2/dist/tailwind.min.css">-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <title>Rebuild Youtube</title>
    <link href="{{ asset('css/rebuild-netlify.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body class="font-sans leading-tight bg-grey-lighter text-grey-darkest">
    <header class="bg-black antialiased pb-32">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-center pt-4 pb-2 border-b-2 border-grey-darkest">
                
                <div class="flex flex-wrap items-center text-xl font-semibold antialisased">
                    <svg class="mb-2 block h-10 w-10 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40">
                        <defs>
                            <radialGradient id="svg-logomark-gradient" cy="0%" r="100.11%" fx="50%" fy="0%" gradientTransform="matrix(0 .9989 -1.152 0 .5 -.5)">
                                <stop offset="0%" stop-color="#20C6B7"/>
                                <stop offset="100%" stop-color="#4D9ABF"/>
                            </radialGradient>
                        </defs>
                        <path fill="url(#svg-logomark-gradient)" d="M28.589 14.135l-.014-.006c-.008-.003-.016-.006-.023-.013a.11.11 0 0 1-.028-.093l.773-4.726 3.625 3.626-3.77 1.604a.083.083 0 0 1-.033.006h-.015c-.005-.003-.01-.007-.02-.017a1.716 1.716 0 0 0-.495-.381zm5.258-.288l3.876 3.876c.805.806 1.208 1.208 1.355 1.674.022.069.04.138.054.209l-9.263-3.923a.728.728 0 0 0-.015-.006c-.037-.015-.08-.032-.08-.07 0-.038.044-.056.081-.071l.012-.005 3.98-1.684zm5.127 7.003c-.2.376-.59.766-1.25 1.427l-4.37 4.369-5.652-1.177-.03-.006c-.05-.008-.103-.017-.103-.062a1.706 1.706 0 0 0-.655-1.193c-.023-.023-.017-.059-.01-.092 0-.005 0-.01.002-.014l1.063-6.526.004-.022c.006-.05.015-.108.06-.108a1.73 1.73 0 0 0 1.16-.665c.009-.01.015-.021.027-.027.032-.015.07 0 .103.014l9.65 4.082zm-6.625 6.801l-7.186 7.186 1.23-7.56.002-.01c.001-.01.003-.02.006-.029.01-.024.036-.034.061-.044l.012-.005a1.85 1.85 0 0 0 .695-.517c.024-.028.053-.055.09-.06a.09.09 0 0 1 .029 0l5.06 1.04zm-8.707 8.707l-.81.81-8.955-12.942a.424.424 0 0 0-.01-.014c-.014-.019-.029-.038-.026-.06.001-.016.011-.03.022-.042l.01-.013c.027-.04.05-.08.075-.123l.02-.035.003-.003c.014-.024.027-.047.051-.06.021-.01.05-.006.073-.001l9.921 2.046a.164.164 0 0 1 .076.033c.013.013.016.027.019.043a1.757 1.757 0 0 0 1.028 1.175c.028.014.016.045.003.078a.238.238 0 0 0-.015.045c-.125.76-1.197 7.298-1.485 9.063zm-1.692 1.691c-.597.591-.949.904-1.347 1.03a2 2 0 0 1-1.206 0c-.466-.148-.869-.55-1.674-1.356L8.73 28.73l2.349-3.643c.011-.018.022-.034.04-.047.025-.018.061-.01.091 0a2.434 2.434 0 0 0 1.638-.083c.027-.01.054-.017.075.002a.19.19 0 0 1 .028.032L21.95 38.05zM7.863 27.863L5.8 25.8l4.074-1.738a.084.084 0 0 1 .033-.007c.034 0 .054.034.072.065a2.91 2.91 0 0 0 .13.184l.013.016c.012.017.004.034-.008.05l-2.25 3.493zm-2.976-2.976l-2.61-2.61c-.444-.444-.766-.766-.99-1.043l7.936 1.646a.84.84 0 0 0 .03.005c.049.008.103.017.103.063 0 .05-.059.073-.109.092l-.023.01-4.337 1.837zM.831 19.892a2 2 0 0 1 .09-.495c.148-.466.55-.868 1.356-1.674l3.34-3.34a2175.525 2175.525 0 0 0 4.626 6.687c.027.036.057.076.026.106-.146.161-.292.337-.395.528a.16.16 0 0 1-.05.062c-.013.008-.027.005-.042.002H9.78L.831 19.891zm5.68-6.403l4.491-4.491c.422.185 1.958.834 3.332 1.414 1.04.44 1.988.84 2.286.97.03.012.057.024.07.054.008.018.004.041 0 .06a2.003 2.003 0 0 0 .523 1.828c.03.03 0 .073-.026.11l-.014.021-4.56 7.063c-.012.02-.023.037-.043.05-.024.015-.058.008-.086.001a2.274 2.274 0 0 0-.543-.074c-.164 0-.342.03-.522.063h-.001c-.02.003-.038.007-.054-.005a.21.21 0 0 1-.045-.051l-4.808-7.013zm5.398-5.398l5.814-5.814c.805-.805 1.208-1.208 1.674-1.355a2 2 0 0 1 1.206 0c.466.147.869.55 1.674 1.355l1.26 1.26-4.135 6.404a.155.155 0 0 1-.041.048c-.025.017-.06.01-.09 0a2.097 2.097 0 0 0-1.92.37c-.027.028-.067.012-.101-.003-.54-.235-4.74-2.01-5.341-2.265zm12.506-3.676l3.818 3.818-.92 5.698v.015a.135.135 0 0 1-.008.038c-.01.02-.03.024-.05.03a1.83 1.83 0 0 0-.548.273.154.154 0 0 0-.02.017c-.011.012-.022.023-.04.025a.114.114 0 0 1-.043-.007l-5.818-2.472-.011-.005c-.037-.015-.081-.033-.081-.071a2.198 2.198 0 0 0-.31-.915c-.028-.046-.059-.094-.035-.141l4.066-6.303zm-3.932 8.606l5.454 2.31c.03.014.063.027.076.058a.106.106 0 0 1 0 .057c-.016.08-.03.171-.03.263v.153c0 .038-.039.054-.075.069l-.011.004c-.864.369-12.13 5.173-12.147 5.173-.017 0-.035 0-.052-.017-.03-.03 0-.072.027-.11a.76.76 0 0 0 .014-.02l4.482-6.94.008-.012c.026-.042.056-.089.104-.089l.045.007c.102.014.192.027.283.027.68 0 1.31-.331 1.69-.897a.16.16 0 0 1 .034-.04c.027-.02.067-.01.098.004zm-6.246 9.185l12.28-5.237s.018 0 .035.017c.067.067.124.112.179.154l.027.017c.025.014.05.03.052.056 0 .01 0 .016-.002.025L25.756 23.7l-.004.026c-.007.05-.014.107-.061.107a1.729 1.729 0 0 0-1.373.847l-.005.008c-.014.023-.027.045-.05.057-.021.01-.048.006-.07.001l-9.793-2.02c-.01-.002-.152-.519-.163-.52z"/>
                    </svg>
                    
                    <a href="#" class="mb-2 inline-flex whitespace-no-wrap items-center px-1 py-2 text-grey-dark no-underline rounded hover:bg-black-20 hover:text-white">
                        <span>Adam Huang</span>
                        <svg class="fill-current ml-2 w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
                    </a>
                    
                    <a href="#" class="mb-2 inline-flex  whitespace-no-wrap items-center px-1 py-2 text-white no-underline rounded hover:bg-black-20 hover:text-white">
                        eleated-stonebraker-70896a
                    </a>
                    
                </div>
                
                <div class="flex-no-shrink">
                    <button type="button" class="">
                        <img src="https://avatars0.githubusercontent.com/u/4724832?s=460&v=4" alt="" 
                        class="rounded-full block h-10 w-10 border-2 border-grey-darker hover:bolder-white">
                    </button>
                </div>
            </div>
            <nav class="flex flex-wrap py-2 font-semibold antialisased ">
                <a href="#" class="text-grey-dark text-md no-underline mb-2 mr-2 pr-2 py-2 rounded  hover:bg-black-20 hover:text-white">Overview</a>
                <a href="#" class="text-grey-dark text-md no-underline mb-2 mr-2 px-2 py-2 rounded  hover:bg-black-20 hover:text-white">Deploys</a>
                <a href="#" class="text-grey-dark text-md no-underline mb-2 mr-2 px-2 py-2 rounded  hover:bg-black-20 hover:text-white">Functions</a>
                <a href="#" class="text-grey-dark text-md no-underline mb-2 mr-2 px-2 py-2 rounded  hover:bg-black-20 hover:text-white">Indentity</a>
                <a href="#" class="text-grey-dark text-md no-underline mb-2 mr-2 px-2 py-2 rounded  hover:bg-black-20 hover:text-white">Forms</a>
                <a href="#" class="text-grey-dark text-md no-underline mb-2 mr-2 px-2 py-2 rounded  hover:bg-black-20 hover:text-white">Split Testing</a>
                <a href="#" class="text-white text-md no-underline mb-2 mr-2 px-2  py-2 rounded  hover:bg-black-20 hover:text-white">Setting</a>
            </nav>
        </div>
    </header>
    <div class="container mx-auto px-6 -mt-24">
        <div class="mb-16">
            <div class="max-w-lg flex bg-white rounded-lg shadow p-6">
                <div class="flex-1">
                    <h1 class="text-xl font-semibold mb-2">Settings for elated-stonebraker-70896a</h1>
                    <p class="mb-3">
                        <a href="#" class="text-grey-dark no-underline inline-block border-b">tailwindcss.com</a>
                    </p>
                    <p class="text-grey-dark mb-3">Deploys from GitHub. Owned by Adam Wathan</p>
                    <p class="text-grey-dark mb-3">Last update on Jul 11 (2 days ago)</p>
                </div>
                <div class="hidden xl:block">
                    <a href="#" class="block rounded overflow-hidden relative">
                        <img class="block w-48" src="https://353a23c500dde3b2ad58-c49fe7e7355d384845270f4a7a0a7aa1.ssl.cf2.rackcdn.com/5b4661a867610c32ae4783f7/screenshot.png" alt="">
                        <div class="absolute pin bg-black-20 opacity-100 hover:opacity-0"></div>
                    </a>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap -mx-6 relative">   
            <div class="w-full lg:w-xs flex-none px-6 mb-8">
                <div class="sticky pin-t bg-white border rounded">
                    <div class="border-b">
                        <a href="#" class="hover:bg-grey-lighter no-underline font-semibold text-grey-dark px-4 py-3 block border-l-2 border-teal-dark">General</a>
                    </div>
                    <div class="border-b">
                        <a href="#" class="hover:bg-grey-lighter text-sm no-underline bg-grey-lightest text-black pl-6 pr-4 py-3 block">Site details</a>
                    </div>    
                    <div class="border-b">
                        <a href="#" class="hover:bg-grey-lighter text-sm no-underline bg-grey-lightest text-grey-dark pl-6 pr-4 py-3 block">Site Administrators</a>
                    </div>
                    <div class="border-b">
                        <a href="#" class="hover:bg-grey-lighter text-sm no-underline bg-grey-lightest text-grey-dark pl-6 pr-4 py-3 block">Danger zone</a>
                    </div>
                    <div class="border-b">
                        <a href="#" class="hover:bg-grey-lighter no-underline text-grey-dark px-4 py-3 block border-l-2 border-transparent">Build & Display</a>
                    </div>
                    <div class="border-b">
                        <a href="#" class="hover:bg-grey-lighter no-underline text-grey-dark px-4 py-3 block border-l-2 border-transparent">Domain Management</a>
                    </div>
                    <div class="border-b">
                        <a href="#" class="hover:bg-grey-lighter no-underline text-grey-dark px-4 py-3 block border-l-2 border-transparent">Functions Identity</a>
                    </div>
                    <div class="border-b">
                        <a href="#" class="hover:bg-grey-lighter no-underline text-grey-dark px-4 py-3 block border-l-2 border-transparent">Forms</a>
                    </div>
                    <div class="border-b">
                        <a href="#" class="hover:bg-grey-lighter no-underline text-grey-dark px-4 py-3 block border-l-2 border-transparent">Access Control</a>
                    </div>
                </div>
            </div>
            <div class="px-6 flex-1">
                <div class="mb-6">
                    <h2 class="text-2xl font-semibold mb-2">Site details</h2>
                    <p class="text-grey-dark">General Information about your site</p>
                </div>
                <div class="bg-white rounded-lg shadow p-6 mb-6">
                    <h3 class="text-xl font-semibold mb-2 pb-3 border-b-2 border-grey-lighter">Site Information</h3>
                    <div class="-mx-6 mb-6">
                        <table class="table-fixed w-full">
                            <tr>
                                <td class="w-1/4 px-6 py-2">
                                    Site Name:
                                </td>
                                <td class="w-3/4 text-black font-semibold px-6 py-2">
                                    <a href="#" class="text-black font-semibold no-underline border-b hover:border-black">
                                        elated-stonebraker-70896a
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-grey-lightest w-1/4 px-6 py-2">
                                    Owner:
                                </td>
                                <td class="bg-grey-lightest w-3/4 text-black font-semibold px-6 py-2">
                                    
                                    Adam Huang
                                    
                                </td>
                            </tr>
                            <tr>
                                <td class="w-1/4 px-6 py-2">
                                    Repository:
                                </td>
                                <td class="w-3/4 text-black font-semibold px-6 py-2">
                                    <a href="#" class="text-black font-semibold no-underline border-b hover:border-black">github.com/tailwindcss/docs</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-grey-lightest w-1/4 px-6 py-2">
                                    API ID:
                                </td>
                                <td class="bg-grey-lightest w-3/4 text-black font-semibold px-6 py-2">
                                    42999d0e-b846-4039-bfb5-5b3a1cd68a3b
                                </td>
                            </tr>
                            <tr>
                                <td class="w-1/4 px-6 py-2">
                                    Created At:
                                </td>
                                <td class="w-3/4 text-black font-semibold px-6 py-2">
                                    Mar 4 at 1:14 PM
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-grey-lightest w-1/4 px-6 py-2">
                                    Last update:
                                </td>
                                <td class="bg-grey-lightest w-3/4 text-black font-semibold px-6 py-2">
                                    Jul 11 at 4:00 PM
                                </td>
                            </tr>
                        </table>
                    </div>
                    
                    <div>
                        <button type="button" class="border shadow px-4 py-2 font-medium text-grey-darker rounded">
                            Change Site Name
                        </button>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-6 mb-6">
                    <div class="max-w-md">
                        <h3 class="text-xl font-semibold pb-3 border-b-2 border-grey-lighter mb-6">Add-ons</h3>
                        <p class="font-semibold leading-normal mb-2">This site is not using any add-ons</p>
                        <p class="text-grey-dark leading-normal mb-4">Take your static site further with rich add-ons built right into your dashboard. Automatically upgrade tiers as your usage grows, paying only for what you use.</p>
                        <p class="text-grey-dark leading-normal">
                            <a href="#" class="text-teal-dark font-semibold no-underline group">
                                <span class="group-hover:underline">Learn more about pricing and usage</span>
                                <svg class="inline-block h-3 w-3 ml-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9"/></svg>
                            </a>
                        </p>
                    </div>
                </div>
                
                <div class="mb-12">
                    <div class="mb-6">
                        <h2 class="text-2xl font-semibold mb-2">Site administrators</h2>
                        <p class="text-grey-dark">Collaborate with others on this site</p>
                    </div>
                    <div class="bg-white rounded-lg shadow p-8 mb-6 flex">
                        <div class="max-w-sm">
                            <h3 class="text-xl font-semibold mb-6">Team collaboration</h3>
                            <p class="text-grey-dark leading-normal mb-4">Transfer your site to a team to activate collaboration features like multi-level administrator roles and visitor access control.</p>
                            <p class="text-grey-dark leading-normal mb-6">
                                <a href="#" class="text-teal-dark font-semibold no-underline group">
                                    <span class="group-hover:underline">Learn more about our pricing</span>
                                    <svg class="inline-block h-3 w-3 ml-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9"/></svg>
                                </a>
                            </p>
                            <div>
                                <button type="button" class="leading-normal border border-transparent bg-teal-dark hover:bg-teal shadow px-4 py-2 font-medium text-white rounded">Transfer site to a new team</button>
                            </div>
                        </div>
                        <div class="hidden xl:block flex-1 ml-6">
                            <img class="block" src="./img/collaboration.svg" alt="">
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow p-6 mb-6">
                        <h3 class="text-xl font-semibold pb-3 border-b-2 border-grey-lighter mb-6">Administrators</h3>
                        <div class="mb-8">
                            <div class="flex items-center">
                                <img class="h-8 w-8 rounded-full block mr-4" src="https://avatars2.githubusercontent.com/u/4323180?v=4" alt="">
                                <div>
                                    <span class="font-semibold mr-1">Adam Wathan</span>
                                    <span class="text-sm text-grey-dark">&lt;adam@example.com&gt;</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="button" class="leading-normal hover:bg-grey-lighter border shadow px-4 py-2 font-medium text-grey-darkest rounded">Add administrators</button>
                        </div>
                    </div>    
                </div>

                <div class="mb-12">
                    <div class="mb-6">
                        <h2 class="text-2xl font-semibold mb-2">Danger zone</h2>
                        <p class="text-grey-dark">Irreversible and destructive actions. Tread lightly</p>
                    </div>
                    <div class="bg-white rounded-lg shadow p-6 mb-6">
                        <h3 class="text-xl font-semibold pb-3 border-b-2 border-grey-lighter mb-6">Delete site</h3>
                        <p class="text-grey-dark leading-normal mb-4">Once you delete a site, there is no going back.</p>
                        <div>
                            <button type="button" class="leading-normal border border-transparent bg-red-light hover:bg-red shadow px-6 py-2 font-medium text-white rounded">Delete this site</button>
                        </div>
                    </div>
                </div>
                
                </div>  
            </div>
        </div>
        <div class="bg-black">  
            <div class="container mx-auto px-6 py-8">
                <div class="-mx-2 mb-2">
                    <a href="#" class="inline-block text-grey-dark text-md no-underline mb-2 mr-2 pr-2 py-2 rounded  hover:bg-black-20 hover:text-white">Docs</a>
                    <a href="#" class="inline-block text-grey-dark text-md no-underline mb-2 mr-2 px-2 py-2 rounded  hover:bg-black-20 hover:text-white">Pricing</a>
                    <a href="#" class="inline-block text-grey-dark text-md no-underline mb-2 mr-2 px-2 py-2 rounded  hover:bg-black-20 hover:text-white">Support</a>
                    <a href="#" class="inline-block text-grey-dark text-md no-underline mb-2 mr-2 px-2 py-2 rounded  hover:bg-black-20 hover:text-white">News</a>
                    <a href="#" class="inline-block text-grey-dark text-md no-underline mb-2 mr-2 px-2 py-2 rounded  hover:bg-black-20 hover:text-white">Terms</a>
                </div>
                <div>
                    <p class="text-xm">&copy; 2018 Netlify</p>
                </div>  
                
            </div>
            
        </div>
    </body>
    </html>