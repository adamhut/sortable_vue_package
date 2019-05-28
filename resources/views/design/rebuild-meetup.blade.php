<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--<link rel="stylesheet" href="https://unpkg.com/tailwindcss@0.5.2/dist/tailwind.min.css">-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <title>Rebuild Meetup</title>
    <link href="{{ mix('css/rebuild-meetup.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body class="bg-gray-200 font-sans font-normal text-black">
    <div id="app">
        <header class="bg-white flex flex-col lg:flex-row  items-center justify-between p-4">
            <div class="w-32">
                <a href="#" class="">
                    <img src="/images/meetup/logo.svg" alt="logo" />
                </a>
            </div>
            <ul class="flex items-center justify-center text-sm text-gray-600">
                <li class="border-r border-gray-500 pr-4 mr-4">
                    <a href="#" class="text-red-600 font-bold hover:text-red-800">Start a Meeting</a>
                </li>
                <li class="mr-6">
                    <a href="#" class="hover:text-red-400">Explore</a>
                </li>
                <li class="mr-6">
                    <a href="#" class="hover:text-red-400">Messages</a>
                </li>
                <li class="mr-6 relative">
                    <a href="#" class="hover:text-red-400">Notifications</a>
                    <div class="absolute w-2 h-2 rounded-full bg-green-500 top-0" style="right:-10px"></div>
                </li>
                <li>
                    <a href="#" class="flex items-center">
                        <img src="https://avatars0.githubusercontent.com/u/4724832?s=460&v=4" alt="avatar"
                            class="rounded-full h-8 w-8">
                        <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            width="24" height="24">
                            <path class="heroicon-ui"
                                d="M15.3 9.3a1 1 0 0 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 1.4-1.4l3.3 3.29 3.3-3.3z">
                            </path>
                        </svg>
                    </a>
                </li>
            </ul>
        </header>
        <!-- Start of Hero-->
        <section class="bg-meetup-blue text-center pt-8 pb-20">
            <div class="text-white text-4xl font-bold">
                Find your next event
            </div>
            <div class="text-gray-400">
                <span class="mr-2">41 events in your group</span>
                <span class="">&middot; 3,981 events near you</span>
            </div>
        </section><!-- End of Hero-->

        <div class="container mx-auto px-8 xl:px-40 mb-6">
            <div class="bg-gray-900 text-white flex flex-col lg:flex-row items-center justify-between p-3 -mt-8">
                <div class="flex flex-col lg:flex-row  items-center ">
                    <span class="relative">
                        <input type="text" placeholder="Search" class="text-gray-400 rounded px-2 py-3 w-72">
                        <span class="absolute right-0 top-0 mr-3" style="top:10px">
                            <svg class="text-gray-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24" width="24" height="24">
                                <path class="heroicon-ui"
                                    d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z">
                                </path>
                            </svg>
                        </span>
                    </span>
                    <span class="ml-4">
                        within <a href="#" class="border-b border-gray-500 hover:border-gray-100">50 miles</a> of <a
                            href="#" class="border-b border-gray-500   hover:border-gray-100">Mississauga, Ontario</a>
                    </span>
                </div>
                <div class="flex items-center">
                    <button class="border-l border-t border-b border-gray-700 px-6 py-2">Groups</button>
                    <button
                        class="border-r border-t border-b border-gray-700 bg-gray-700 text-white px-6 py-2">Calendar</button>
                </div>
            </div>
        </div><!-- End of Container-->
        <div class="container mx-auto xl:px-40 flex flex-col flex-col-reverse lg:flex-row">
            <div class="w-full lg:w-7/10">
                <div class="pl-3 upppercase font-bold text-sm py-2 pb-4">
                    Saturday, May 25
                </div>
                <div class="events border border-gray-400 bg-white mb-8">
                    <div class="event border-b border-gray-400 flex p-4">
                        <div class="w-16 mr-4 text-gray-600 "><a href="#" class="">6:00PM</a></div>
                        <div>
                            <div class="uppercase font-bold text-gray-700 text-sm"><a href="#">Mississauga .NET user
                                    group</a></div>
                            <div class="font-bold text-gray-800 text-xl"><a href="#">Visual Studio 2019 Launch Party</a>
                            </div>
                            <div class="text-gray-600">31 .NET coders going</div>
                        </div>
                    </div>

                    <div class="event border-b border-gray-400 flex p-4">
                        <div class="w-16 mr-4 text-gray-600 "><a href="#" class="">6:00PM</a></div>
                        <div>
                            <div class="uppercase font-bold text-gray-700 text-sm"><a href="#">Mississauga .NET user
                                    group</a></div>
                            <div class="font-bold text-gray-800 text-xl"><a href="#">Visual Studio 2019 Launch Party</a>
                            </div>
                            <div class="text-gray-600">31 .NET coders going</div>
                        </div>
                    </div>

                    <div class="event border-b-0 border-gray-400 flex p-4">
                        <div class="w-16 mr-4 text-gray-600 "><a href="#" class="">7:00PM</a></div>
                        <div>
                            <div class="uppercase font-bold text-gray-700 text-sm"><a href="#">Mississauga .NET user
                                    group</a></div>
                            <div class="font-bold text-gray-800 text-xl"><a href="#">Visual Studio 2019 Launch Party</a>
                            </div>
                            <div class="text-gray-600">31 .NET coders going</div>
                        </div>
                    </div>
                </div>
                <!--end of Events-->

                <div class="pl-3 upppercase font-bold text-sm py-2 pb-4">
                    Monday, May 27
                </div>
                <div class="events border border-gray-400 bg-white mb-8">
                    <div class="event border-b border-gray-400 flex p-4">
                        <div class="w-16 mr-4 text-gray-600 "><a href="#" class="">8:00PM</a></div>
                        <div>
                            <div class="uppercase font-bold text-gray-700 text-sm"><a href="#">Mississauga .NET user
                                    group</a></div>
                            <div class="font-bold text-gray-800 text-xl"><a href="#">Visual Studio 2019 Launch Party</a>
                            </div>
                            <div class="text-gray-600">31 .NET coders going</div>
                        </div>
                    </div>

                    <div class="event border-b border-gray-400 flex p-4">
                        <div class="w-16 mr-4 text-gray-600 "><a href="#" class="">7:00PM</a></div>
                        <div>
                            <div class="uppercase font-bold text-gray-700 text-sm"><a href="#">Mississauga .NET user
                                    group</a></div>
                            <div class="font-bold text-gray-800 text-xl"><a href="#">Visual Studio 2019 Launch Party</a>
                            </div>
                            <div class="text-gray-600">31 .NET coders going</div>
                        </div>
                    </div>

                    <div class="event border-b-0 border-gray-400 flex p-4">
                        <div class="w-16 mr-4 text-gray-600 "><a href="#" class="">8:00PM</a></div>
                        <div>
                            <div class="uppercase font-bold text-gray-700 text-sm"><a href="#">Mississauga .NET user
                                    group</a></div>
                            <div class="font-bold text-gray-800 text-xl"><a href="#">Visual Studio 2019 Launch Party</a>
                            </div>
                            <div class="text-gray-600">31 .NET coders going</div>
                        </div>
                    </div>
                </div>
                <!--end of Events-->

                <div class="hoststuff border-t border-b border-gray-400 py-8 mb-8">
                    <div class="text-center font-bold text-black text-2xl"> Host events in Mississauga</div>
                    <div class="text-center mb-8">Can't find what you're looking for? Create a Meetup group to start
                        hosting local events.</div>

                    <div class="flex -mx-2 mb-4">
                        <div class="w-1/2 mx-2 rounded bg-white shadow mb-4">
                            <div class="px-6 py-4">
                                <div class="font-bold"><a href="#">Usability</a></div>
                                <div class="text-gray-700 mb-1">593 Follow this topic</div>
                                <div><a href="#" class="text-teal-600 hover:underline">Host events</a></div>
                            </div>
                        </div>
                        <div class="w-1/2 mx-2 rounded bg-white shadow mb-4">
                            <div class="px-6 py-4">
                                <div class="font-bold"><a href="#">Web Development</a></div>
                                <div class="text-gray-700 mb-1">11,079 follow this topic</div>
                                <div><a href="#" class="text-teal-600 hover:underline">Host events</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="flex -mx-2">
                        <div class="w-1/2 mx-2 rounded bg-white shadow mb-4">
                            <div class="px-6 py-4">
                                <div class="font-bold"><a href="#">Technology</a></div>
                                <div class="text-gray-700 mb-1">100 Follow this topic</div>
                                <div><a href="#" class="text-teal-600 hover:underline">Host events</a></div>
                            </div>
                        </div>
                        <div class="w-1/2 mx-2 rounded bg-white shadow mb-4">
                            <div class="px-6 py-4">
                                <div class="font-bold"><a href="#">PHP</a></div>
                                <div class="text-gray-700 mb-1">11,079 follow this topic</div>
                                <div><a href="#" class="text-teal-600 hover:underline">Host events</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of hoststuff-->

                <div class="pl-3 upppercase font-bold text-sm py-2 pb-4">
                    Wednesday, May 29
                </div>
                <div class="events border border-gray-400 bg-white mb-8">
                    <div class="event border-b border-gray-400 flex p-4">
                        <div class="w-16 mr-4 text-gray-600 "><a href="#" class="">8:00PM</a></div>
                        <div>
                            <div class="uppercase font-bold text-gray-700 text-sm"><a href="#">Mississauga .NET user
                                    group</a></div>
                            <div class="font-bold text-gray-800 text-xl"><a href="#">Visual Studio 2019 Launch Party</a>
                            </div>
                            <div class="text-gray-600">31 .NET coders going</div>
                        </div>
                    </div>

                    <div class="event border-b border-gray-400 flex p-4">
                        <div class="w-16 mr-4 text-gray-600 "><a href="#" class="">7:00PM</a></div>
                        <div>
                            <div class="uppercase font-bold text-gray-700 text-sm"><a href="#">Mississauga .NET user
                                    group</a></div>
                            <div class="font-bold text-gray-800 text-xl"><a href="#">Visual Studio 2019 Launch Party</a>
                            </div>
                            <div class="text-gray-600">31 .NET coders going</div>
                        </div>
                    </div>

                    <div class="event border-b-0 border-gray-400 flex p-4">
                        <div class="w-16 mr-4 text-gray-600 "><a href="#" class="">8:00PM</a></div>
                        <div>
                            <div class="uppercase font-bold text-gray-700 text-sm"><a href="#">Mississauga .NET user
                                    group</a></div>
                            <div class="font-bold text-gray-800 text-xl"><a href="#">Visual Studio 2019 Launch Party</a>
                            </div>
                            <div class="text-gray-600">31 .NET coders going</div>
                        </div>
                    </div>
                </div>
                <!--end of Events-->

            </div>
            <!--End of Content Left-->

            <div class="w-full lg:w-3/10 ml-6">
                <div class="pt-2 pb-4"> &nbsp;</div>
                <div class="border border-gray-400 bg-white text-sm mb-4">
                    <div class="border-b border-gray-400 flex">
                        <div class="px-4 py-2">
                            <a href="#">All upcoming events</a>
                        </div>
                    </div>
                    <div class="border-b border-gray-400 flex font-bold bg-purple-100 text-purple-700">
                        <div class="border-l-4 border-purple-700 px-4 py-2  ">
                            <a href="#" class="">Your group s and suggestions</a>
                        </div>
                    </div>
                    <div class="border-b border-gray-400 flex ">
                        <div class="px-4 py-2">
                            <a href="#">All upcoming events</a>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="px-4 py-2">
                            <a href="#">All upcoming events</a>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end mb-4">
                    <button class="bg-white rounded px-4 py-1 text-sm border border-gray-400">Today</button>
                </div>

                <div class="calendar mb-4 datepicker-trigger w-full">
                    <date-picker></date-picker>

                </div><!-- End of Calendar-->
                <div class="flex lg:justify-center mb-8">
                    <a href="#" class="flex">
                        <svg class="mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            width="24" height="24">
                            <path class="heroicon-ui"
                                d="M19 6.41L8.7 16.71a1 1 0 1 1-1.4-1.42L17.58 5H14a1 1 0 0 1 0-2h6a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0V6.41zM17 14a1 1 0 0 1 2 0v5a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7c0-1.1.9-2 2-2h5a1 1 0 0 1 0 2H5v12h12v-5z">
                            </path>
                        </svg>
                        <span>Export to...</span>
                    </a>
                </div><!-- End of Export To-->
            </div>
            <!--End of Content Right-->
        </div><!-- End of Container-->
        <footer class="bg-gray-900 text-white">
            <div class="container mx-auto px-8 xl:px-40 py-8">
                <div class="flex items-center justify-between border-b border-gray-700 pb-4 mb-4">
                    <div><a href="#" class="font-bold">Start a new group</a></div>
                    <div><a href="#">Logout</a></div>
                </div>
                <div class="links mb-8">
                    <ul class="flex">
                        <li class="mr-4"><a href="#">Help</a></li>
                        <li class="mr-4"><a href="#">About Us</a></li>
                        <li class="mr-4"><a href="#">Meetup Pro</a></li>
                        <li class="mr-4"><a href="#">Jobs</a></li>
                        <li class="mr-4"><a href="#">Apps</a></li>
                        <li class="mr-4"><a href="#">API</a></li>
                        <li class="mr-4"><a href="#">Topics</a></li>
                        <li class="mr-4"><a href="#">Browse Cities</a></li>
                        <li class="mr-4"><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="social mb-6">
                    <div>Follow us</div>
                    <div>Lazy to put social icons here</div>
                </div>

                <div class="copyright text-sm text-gray-400 mb-4">
                    &copy; 2019 Meetup
                </div>

                <div class="privacy">
                    <ul class="flex">
                        <li class="mr-4"><a href="#">Privacy</a></li>
                        <li class="mr-4"><a href="#">Terms</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
    <script src="{{mix('/js/meetup.js')}}"></script>
</body>

</html>