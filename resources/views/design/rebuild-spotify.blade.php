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
    <div class="flex flex-col h-screen max-h-screen text-sm text-gray-200">
        
        <div class="bg-gray-900-spotify flex-1 flex overflow-y-hidden">
            <!-- Start of Side Bar-->
            <div class="bg-gray-900-spotify flex-none w-48 flex flex-col justify-between sidebar-spotify font-semibold">
                <!-- Start of Side Bar Top-->
                <ul  class="py-6">
                    <li class="border-l-4 border-green-600">
                        <a href="#" class="flex items-center mx-4 mt-4 ">
                            <svg class="fill-current text-white group-hover:text-white h-6 w-6" viewBox="0 0 24 24" width="24" height="24">
                                <path
                                    d="M13 20v-5h-2v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-7.59l-.3.3a1 1 0 11-1.4-1.42l9-9a1 1 0 011.4 0l9 9a1 1 0 01-1.4 1.42l-.3-.3V20a2 2 0 01-2 2h-3a2 2 0 01-2-2zm5 0v-9.59l-6-6-6 6V20h3v-5c0-1.1.9-2 2-2h2a2 2 0 012 2v5h3z" />
                            </svg>
                            <span class="ml-2 text-white">Home</span>
                        </a>
                    </li>
                    <li class="border-l-4 border-transparent">
                        <a href="#" class="flex items-center hover:text-white mx-4 mt-4 group">
                            <svg class="fill-current text-gray-400 h-6 w-6 group-hover:text-white" width="24" height="24">
                                <path fill="none" d="M15 5.414V7h1.586z" />
                                <path fill="none" d="M14 9a1 1 0 01-1-1V4H9v12h9V9h-4z" />
                                <path
                                    d="M20 17V8h-.009a.996.996 0 00-.284-.707l-5-5A.99.99 0 0014 2.01V2H8a1 1 0 00-1 1v14a1 1 0 001 1h11a1 1 0 001-1zM15 5.414L16.586 7H15V5.414zM9 16V4h4v4a1 1 0 001 1h4v7H9z" />
                                <path d="M3 8v13a1 1 0 001 1h12v-2H5V8H3z" /></svg>
                            <span class="ml-2 group-hover:text-white">Browse</span>
                        </a>
                    </li>
                    <li class="border-l-4 border-transparent">
                        <a href="#" class="flex items-center hover:text-white mx-4 mt-4 group">
                            <svg class="fill-current text-gray-400 h-6 w-6 group-hover:text-white" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <g data-name="radio">
                                        <path
                                            d="M12 8a3 3 0 00-1 5.83 1 1 0 000 .17v6a1 1 0 002 0v-6a1 1 0 000-.17A3 3 0 0012 8zm0 4a1 1 0 111-1 1 1 0 01-1 1zM3.5 11a6.87 6.87 0 012.64-5.23 1 1 0 10-1.28-1.54A8.84 8.84 0 001.5 11a8.84 8.84 0 003.36 6.77 1 1 0 101.28-1.54A6.87 6.87 0 013.5 11z" />
                                        <path
                                            d="M16.64 6.24a1 1 0 00-1.28 1.52A4.28 4.28 0 0117 11a4.28 4.28 0 01-1.64 3.24A1 1 0 0016 16a1 1 0 00.64-.24A6.2 6.2 0 0019 11a6.2 6.2 0 00-2.36-4.76zM8.76 6.36a1 1 0 00-1.4-.12A6.2 6.2 0 005 11a6.2 6.2 0 002.36 4.76 1 1 0 001.4-.12 1 1 0 00-.12-1.4A4.28 4.28 0 017 11a4.28 4.28 0 011.64-3.24 1 1 0 00.12-1.4z" />
                                        <path
                                            d="M19.14 4.23a1 1 0 10-1.28 1.54A6.87 6.87 0 0120.5 11a6.87 6.87 0 01-2.64 5.23 1 1 0 001.28 1.54A8.84 8.84 0 0022.5 11a8.84 8.84 0 00-3.36-6.77z" />
                                    </g>
                                </g>
                            </svg>
                            <span class="ml-2 group-hover:text-white2">Radio</span>
                        </a>
                    </li>
                </ul>
                <!-- End of Side Bar Top-->
                <!-- Start of Side Bar Middle-->
                <div class="px-5 mt-2 overflow-y-auto flex-1 sidebar-spotify">
                    <h3 class="uppercase tracking-widest text-gray-500 font-normal text-xs">Your Library</h3>
                    <ul class="leading-loose">
                        <li class="truncate"><a href="#" class="hover:text-white">Made For You</a></li>
                        <li class="truncate"><a href="#" class="hover:text-white">Recently Played</a></li>
                        <li class="truncate"><a href="#" class="hover:text-white">Liked Songs</a></li>
                        <li class="truncate"><a href="#" class="hover:text-white">Albums</a></li>
                        <li class="truncate"><a href="#" class="hover:text-white">Artists</a></li>
                        <li class="truncate"><a href="#" class="hover:text-white">Podcasts</a></li>
                    </ul>
                    <h3 class="mt-6 uppercase tracking-widest text-gray-500 font-normal text-xs">Playlists</h3>
                    <ul class="leading-extra-loose mb-6">
                        <li class="truncate"><a href="#" class="hover:text-white">Acoustic Hits</a></li>
                        <li class="truncate"><a href="#" class="hover:text-white">Acoustic Covers</a></li>
                        <li class="truncate"><a href="#" class="hover:text-white">Discover Weekly</a></li>
                        <li class="truncate"><a href="#" class="hover:text-white">Hot Hits Canada</a></li>
                        <li class="truncate"><a href="#" class="hover:text-white">90's Hip-Hop Don't Stop Long Text</a></li>
                        <li class="truncate"><a href="#" class="hover:text-white">90s Smash Hits</a></li>
                        <li class="truncate"><a href="#" class="hover:text-white">TGIF</a></li>
                        <li class="truncate"><a href="#" class="hover:text-white">mint Canada</a></li>
                        <li class="truncate"><a href="#" class="hover:text-white">Hip-Hop Central</a></li>
                        <li class="truncate"><a href="#" class="hover:text-white">R&amp;B Right Now</a></li>
                        <li class="truncate"><a href="#" class="hover:text-white">I Love My '90s R&amp;B</a></li>
                        <li class="truncate"><a href="#" class="hover:text-white">Are &amp; Be</a></li>
                        <li class="truncate"><a href="#" class="hover:text-white">Today's Top Hits</a></li>
                        <li class="truncate"><a href="#" class="hover:text-white">Get Turnt</a></li>
                        <li class="truncate"><a href="#" class="hover:text-white">iTunes</a></li>
                    </ul>
                </div>
                <!-- Start of Side Bar Middle-->
                <div class="border-t border-gray-800 h-16 py-2 flex items-center group">
                    <svg class="fill-current text-gray-600 w-8 h-8 group-hover:text-white" viewBox="0 0 24 24" width="24" height="24">
                        <path class="heroicon-ui"
                            d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z" />
                    </svg>
                    <a href="#" class="font-normal text-gray-500 ml-2 group-hover:text-white">New Playlist</a>
                </div>
            </div>
            <!-- End of Side Bar-->
            <!-- Start of Content-->
            <div class="content-area bg-gray-800-spotify flex-1 overflow-y-auto content-spotify">
               
            </div>            
            <!-- Start of Content-->
        </div>
 
        <div class="bg-gray-700-spotify flex-none h-24 px-4  flex items-center justify-between">
            <div class="flex items-center ">
                <a href="#">
                    <img src="/images/spotify/albumcover01.jpg" alt="album cover" class="w-16 h-16 object-cover">
                </a>
                <div class="ml-3">
                    <div>
                        <a href="#" class=" hover:underline">Name  of Song</a>
                    </div>
                    <div>
                        <a href="#" class="text-xs text-gray-500 hover:underline hover:text-white">Artist Name</a>
                    </div>
                </div>
            </div>
            <div class="player-controls flex flex-col justify-center">
                <div class="flex justify-center">
                    <button>
                        <svg class="fill-current text-gray-400 hover:text-white h-4 w-4" viewBox="0 0 20 20">
                            <path
                                d="M6.59 12.83L4.4 15c-.58.58-1.59 1-2.4 1H0v-2h2c.29 0 .8-.2 1-.41l2.17-2.18 1.42 1.42zM16 4V1l4 4-4 4V6h-2c-.29 0-.8.2-1 .41l-2.17 2.18L9.4 7.17 11.6 5c.58-.58 1.59-1 2.41-1h2zm0 10v-3l4 4-4 4v-3h-2c-.82 0-1.83-.42-2.41-1l-8.6-8.59C2.8 6.21 2.3 6 2 6H0V4h2c.82 0 1.83.42 2.41 1l8.6 8.59c.2.2.7.41.99.41h2z" />
                            </svg>
                    </button>
                    <button class="ml-8">
                        <svg class="fill-current text-gray-400 hover:text-white h-6 w-6" viewBox="0 0 20 20">
                            <path d="M4 5h3v10H4V5zm12 0v10l-9-5 9-5z" /></svg>
                    </button>
                    <button class="ml-8">
                        <svg class="fill-current text-gray-400 hover:text-white h-8 w-8" viewBox="0 0 20 20">
                            <path
                                d="M2.93 17.07A10 10 0 1117.07 2.93 10 10 0 012.93 17.07zm12.73-1.41A8 8 0 104.34 4.34a8 8 0 0011.32 11.32zM7 6l8 4-8 4V6z" />
                            </svg>
                    </button>
                    <button class="ml-8">
                        <svg class="fill-current text-gray-400 hover:text-white h-6 w-6" viewBox="0 0 20 20">
                            <path d="M13 5h3v10h-3V5zM4 5l9 5-9 5V5z" /></svg>
                    </button>
                    <button class="ml-8">
                        <svg class="fill-current text-gray-400 hover:text-white h-4 w-4" viewBox="0 0 24 24" width="24" height="24">
                            <path
                                d="M5.41 16H18a2 2 0 002-2 1 1 0 012 0 4 4 0 01-4 4H5.41l2.3 2.3a1 1 0 01-1.42 1.4l-4-4a1 1 0 010-1.4l4-4a1 1 0 111.42 1.4L5.4 16zM6 8a2 2 0 00-2 2 1 1 0 01-2 0 4 4 0 014-4h12.59l-2.3-2.3a1 1 0 111.42-1.4l4 4a1 1 0 010 1.4l-4 4a1 1 0 01-1.42-1.4L18.6 8H6z" />
                            </svg>
                    </button>
                </div>
                <div class="max-w-full mt-3 flex items-center justify-center">
                    <div class="text-xs text-gray-500">1:20</div>
                    <div class="h-1 ml-3 w-full bg-gray-500 rounded-lg relative xl:w-152">
                        <div></div>
                    </div>
                    <div class="ml-3 text-xs text-gray-500">3:20</div>
                </div>
            </div>
            <div class="volume-controls flex items-center">
                <button>
                    <svg class="fill-current text-gray-400 hover:text-white h-6 w-6" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M15 6H3v2h12V6zm0 4H3v2h12v-2zM3 16h8v-2H3v2zM17 6v8.18c-.31-.11-.65-.18-1-.18-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3V8h3V6h-5z" />
                        </svg>
                </button>
                <button class="ml-4">
                    <svg class="fill-current text-gray-400 hover:text-white h-5 w-5" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                            d="M3 6h18V4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h4v-2H3V6zm10 6H9v1.78c-.61.55-1 1.33-1 2.22s.39 1.67 1 2.22V20h4v-1.78c.61-.55 1-1.34 1-2.22s-.39-1.67-1-2.22V12zm-2 5.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM22 8h-6c-.5 0-1 .5-1 1v10c0 .5.5 1 1 1h6c.5 0 1-.5 1-1V9c0-.5-.5-1-1-1zm-1 10h-4v-8h4v8z" />
                        </svg>
                </button>
                <button class="ml-4">
                    <svg class="fill-current text-gray-400 hover:text-white h-5 w-5" width="24" height="24" viewBox="0 0 24 24">
                        <path
                            d="M3 9v6h4l5 5V4L7 9H3zm13.5 3A4.5 4.5 0 0014 7.97v8.05c1.48-.73 2.5-2.25 2.5-4.02zM14 3.23v2.06c2.89.86 5 3.54 5 6.71s-2.11 5.85-5 6.71v2.06c4.01-.91 7-4.49 7-8.77s-2.99-7.86-7-8.77z" />
                        <path d="M0 0h24v24H0z" fill="none" /></svg>
                </button>
                <div class="bg-gray-500 rounded-lg w-20 h-1 ml-3"></div>
                <button class="ml-4">
                    <svg class="fill-current text-gray-400 hover:text-white h-4 w-4" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7" /></svg>
                </button>
            </div>
        </div>

    </div>
</body>

</html>