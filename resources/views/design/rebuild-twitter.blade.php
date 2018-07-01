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
    <link href="{{ asset('css/rebuild-twitter.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body class="bg-grey-light font-sans">
    <div class="bg-white navbar">
        <div class="container mx-auto flex flex-col lg:flex-row items-center justify-between py-4">
            <nav class="w-full lg:w-2/5 ">
                <a href="#" class="text-sm text-grey-darker mr-6 font-semibold pb-4 hover:text-teal border-b-2 border-solid border-transparent hover:border-teal">
                    <i class="fa fa-home fa-lg"></i> Home
                </a>
                <a href="#" class="text-sm text-grey-darker mr-6 font-semibold pb-4 hover:text-teal border-b-2 border-solid border-transparent hover:border-teal">
                    <i class="fa fa-bolt fa-lg"></i> Moment
                </a>
                <a href="#" class="text-sm text-grey-darker mr-6 font-semibold pb-4 hover:text-teal border-b-2 border-solid border-transparent hover:border-teal">
                    <i class="fa fa-bell fa-lg"></i> Notification
                </a>
                <a href="#" class="text-sm text-grey-darker mr-6 font-semibold pb-4 hover:text-teal border-b-2 border-solid border-transparent hover:border-teal">
                    <i class="fa fa-envelope fa-lg"></i> Messages
                </a>
            </nav>
            <div class="w-full lg:w-1/5 text-center my-4 lg:my-0">
                <a href="#"><i class="fa fa-twitter fa-lg text-teal"></i></a>
            </div>
            <div class="w-full lg:w-2/5 flex flex-col lg:flex-row lg:justify-end">
                <div class="mr-4 relative">
                    <input type="text" class="rounded-full text-greyh-8 px-4 py-2 text-xs w-48 bg-grey-lighter" placeholder="Search"/>
                    <span class="flex items-center absolute pin-r pin-y mr-3"><i class="fa fa-search text-sm"></i></span>
                </div>
                <div class="mr-4">
                    <a href="#"><img src="/images/twitter/avatar.jpg" alt="" class="h-8 w-8 rounded-full"/></a>
                </div>
                <div>
                    <button class="bg-teal hover:bg-teal-dark text-white font-medium py-2 px-4 rounded-full" >Tweet</button>
                </div>
            </div>
        </div><!-- end container-->
    </div><!-- End navbar-->

    <div class="hero h-128 bg-cover">
        
    </div><!--end Hero-->

    <div class="bg-white shadow tweet-summary">
        <div class="container mx-auto flex flex-col lg:flex-row items-center lg:relative">
            <div class="w-full lg:w-1/4 text-center">
                <img src="/images/twitter/tailwind_logo.jpg" alt="log" class="rounded-full h-48 w-38 lg:absolute lg:pin-l lg:pin-t lg:-mt-24">
            </div>
            <div class="w-full lg:w-1/2 text-center">
                <ul class="list-reset flex ">
                    <li class="text-center py-3 px-4 border-b-2 border-solid border-teal">
                        <a href="#" class="text-grey-darker">
                            <div class="text-sm font-bold tracking-tight mb-1">Tweet</div>
                            <div class="text-lg tracking-tight font-bold text-teal">98</div>
                        </a>
                    </li>
                    <li class="text-center py-3 px-4 border-b-2 border-solid border-transparent hover:border-teal">
                        <a href="#" class="text-grey-darker ">
                            <div class="text-sm font-bold tracking-tight mb-1">Following</div>
                            <div class="text-lg tracking-tight font-bold text-grey-darker hover:text-teal">4</div>
                        </a>
                    </li>
                    <li class="text-center py-3 px-4 border-b-2 border-solid border-transparent hover:border-teal">
                        <a href="#" class="text-grey-darker ">
                            <div class="text-sm font-bold tracking-tight mb-1">Follower</div>
                            <div class="text-lg tracking-tight font-bold text-grey-darker hover:text-teal">6,390</div>
                        </a>
                    </li>
                    <li class="text-center py-3 px-4 border-b-2 border-solid border-transparent hover:border-teal">
                        <a href="#" class="text-grey-darker ">
                            <div class="text-sm font-bold tracking-tight mb-1">Likes</div>
                            <div class="text-lg tracking-tight font-bold text-grey-darker hover:text-teal">19</div>
                        </a>
                    </li>
                    <li class="text-center py-3 px-4 border-b-2 border-solid border-transparent hover:border-teal">
                        <a href="#" class="text-grey-darker">
                            <div class="text-sm font-bold tracking-tight mb-1">Moments</div>
                            <div class="text-lg tracking-tight font-bold text-grey-darker hover:text-teal">1</div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="w-full lg:w-1/4 flex my-4 lg:my-0 lg:justify-end items-center">
                <div class="mr-6">
                    <button class="bg-teal hover:bg-teal-dark text-white font-medium py-2 px-4 rounded-full hover:bg-teal-darker">Following</button>
                </div>
                <div>
                    <a href="#" class="text-grey-dark"><i class="fa fa-ellipsis-v fa-lg"></i></a>
                </div>
            </div>
        </div><!--end container-->
    </div><!--end tweet-summary-->
    
    <div class="container mx-auto flex flex-col lg:flex-row  mt-3 text-sm leading-normal">
        <div class="w-full lg:w-1/4 pr-6 mt-8 mb-4">
             <h1>
                 <a href="#" class="text-black">
                     Tailwind CSS
                 </a>
            </h1>
            <a href="#" class="text-grey-darker mb-4">@tailwindcss</a>

            <div class="mb-4">
                A utility-first CSS framework for rapid UI development. By <a href="#">@adamwathan</a>, <a href="#">@reinink</a>, <a href="#">@davidhemphill</a>,
                and <a href="#">@steveschoger</a>.
            </div>

            <div class="mb-2">
                <i class="fa fa-link fa-lg text-grey-darker mr-1"></i> <a href="#">tailwindcss.com</a>
            </div>
            <div class="mb-4">
                <i class="fa fa-calendar fa-lg text-grey-darker mr-1"></i> <span class="text-grey-dark">Joined August 2017</span>
            </div>
            <div class="mb-4">
                <button class="bg-teal hover:bg-teal-dark text-white font-medium py-2 px-4 rounded-full hover:bg-teal-darker w-full">Tweet to Tailwind CSS</button>
            </div>

            <div class="mb-4">
                <i class="fa fa-user fa-lg text-grey-darker mr-1"></i> <a href="#">20 Followers you know</a>
            </div>
            <div class="mb-4">
                <a href="#"><img src="/images/twitter/follower01.jpg" class="rounded-full w-12 h-12 bg-transparent" alt=""></a>
                <a href="#"><img src="/images/twitter/follower02.jpg" class="rounded-full w-12 h-12 bg-transparent" alt=""></a>
                <a href="#"><img src="/images/twitter/follower03.jpg" class="rounded-full w-12 h-12 bg-transparent" alt=""></a>
                <a href="#"><img src="/images/twitter/follower04.jpg" class="rounded-full w-12 h-12 bg-transparent" alt=""></a>
                <a href="#"><img src="/images/twitter/follower05.jpg" class="rounded-full w-12 h-12 bg-transparent" alt=""></a>
                <a href="#"><img src="/images/twitter/follower06.jpg" class="rounded-full w-12 h-12 bg-transparent" alt=""></a>
                <a href="#"><img src="/images/twitter/follower07.jpg" class="rounded-full w-12 h-12 bg-transparent" alt=""></a>
                <a href="#"><img src="/images/twitter/follower08.jpg" class="rounded-full w-12 h-12 bg-transparent" alt=""></a>
                <a href="#"><img src="/images/twitter/follower09.jpg" class="rounded-full w-12 h-12 bg-transparent" alt=""></a>
                <a href="#"><img src="/images/twitter/follower10.jpg" class="rounded-full w-12 h-12 bg-transparent" alt=""></a>
            </div>
            <div class="mb-4">
                <i class="fa fa-picture-o fa-lg text-grey-darker mr-1"></i> <a href="#">Photos and Videos</a>
            </div>
            <div class="mb-4">
                <a href="#"><img src="/images/twitter/photo1.jpg" class="rounded w-16 h-16 mr-1 mb-1 bg-transparent" alt=""></a>
                <a href="#"><img src="/images/twitter/photo2.jpg" class="rounded w-16 h-16 mr-1 mb-1 bg-transparent" alt=""></a>
                <a href="#"><img src="/images/twitter/photo3.jpg" class="rounded w-16 h-16 mr-1 mb-1 bg-transparent" alt=""></a>
                <a href="#"><img src="/images/twitter/photo4.jpg" class="rounded w-16 h-16 mr-1 mb-1 bg-transparent" alt=""></a>
                <a href="#"><img src="/images/twitter/photo5.jpg" class="rounded w-16 h-16 mr-1 mb-1 bg-transparent" alt=""></a>
            </div>

        </div>
        <div class="w-full lg:w-1/2 bg-white mb-4">
            <div class="p-3 text-lg font-bold border-b border-solid border-grey-light">
                <a href="#" class="text-black mr-6"> Tweets</a>
                <a href="#" class="mr-6 text-teal">Tweet &amp; Replies</a>
                <a href="#" class="mr-6 text-teal">Media</a>
            </div>
            <div class="Tweet flex border-b border-solid border-grey-light">
                <div class="w-1/8 text-right pl-0 pt-3">
                    <div><i class="fa fa-thumb-tack text-teal mr-2"></i></div>
                    <div>
                        <a href="#">
                            <img src="/images/twitter/avatar_tailwind.jpg" alt="" class="rounded-full w-12 h-12">
                        </a>
                    </div>
                </div>
                <div class="w-7/8 p-3 pl-0">
                    <a href="#" class="text-grey-darker">Tailwind CSS Retweeted</a>
                    <div class="flex justify-between">
                        <div>
                            <span class="font-bold"><a href="#" class="text-black">Tailwind CSS</a></span>
                            <span class="text-grey-dark">@tailwindcss</span>
                            <span class="text-grey-dark">&middot;</span>
                            <span class="text-grey-dark">15 Dec 2017</span>
                        </div>
                        <div>
                            <a href="#" class="text-grey-dark hover:text-teal"><i class="fa fa-chevron-down"></i></a>
                        </div>
                    </div>
                    <div>
                        <div class="mb-4">
                            <p class="mb-6">🎉 Tailwind CSS v0.4.0 is out!</p>
                            <p class="mb-6">Makes `apply` more useful when using !important utilities, and includes an improved default color palette:</p>
                            <p class="mb-4"><a href="#">github.com/tailwindcss/ta...</a></p>
                            <p><a href="#"><img src="/images/twitter/tweet1.jpg" alt="tweet image" class="border border-solid border-grey-light rounded-sm"></a></p>
                        </div>
                    </div>
                    <div class="pb-2">
                        <span class="mr-8"><a href="#" class="text-grey-dark hover:no-underline hover:text-blue-light">
                                <i class="fa fa-comment fa-lg mr-2"></i> 9</a></span>
                        <span class="mr-8"><a href="#" class="text-grey-dark hover:no-underline hover:text-green"><i class="fa fa-retweet fa-lg mr-2"></i> 29</a></span>
                        <span class="mr-8"><a href="#" class="text-grey-dark hover:no-underline hover:text-red"><i class="fa fa-heart fa-lg mr-2"></i> 135</a></span>
                        <span class="mr-8"><a href="#" class="text-grey-dark hover:no-underline hover:text-teal"><i class="fa fa-envelope fa-lg mr-2"></i></a></span>
                    </div>
                </div>
            </div><!--end Tweet-->
            <div class="flex border-b border-solid border-grey-light">
            
                <div class="w-1/8 text-right pl-3 pt-3">
                    <div><i class="fa fa-retweet text-grey-dark mr-2"></i></div>
                    <div><a href="#"><img src="/images/twitter/avatar_adam.jpg" alt="avatar" class="rounded-full h-12 w-12 mr-2"></a></div>
                </div>
            
                <div class="w-7/8 p-3 pl-0">
                    <div class="text-xs text-grey-dark">Tailwind CSS Retweeted</div>
                    <div class="flex justify-between">
                        <div>
                            <span class="font-bold"><a href="#" class="text-black">Adam Wathan</a></span>
                            <span class="text-grey-dark">@adamwathan</span>
                            <span class="text-grey-dark">&middot;</span>
                            <span class="text-grey-dark">7 Dec 2017</span>
                        </div>
                        <div>
                            <a href="#" class="text-grey-dark hover:text-teal"><i class="fa fa-chevron-down"></i></a>
                        </div>
                    </div>
                    <div>
                        <div class="mb-4">
                            <p class="mb-6">💥 Check out this Slack clone built with <a href="#">@tailwindcss</a> using no custom CSS and just the default
                                configuration:</p>
                            <p class="mb-4"><a href="#">https://codepen.io/adamwathan/pen/JOQWVa...</a></p>
                            <p class="mb-6">(based on some work <a href="#">@Killgt</a> started for <a href="#">tailwindcomponents.com</a> !)</p>
                            <p><a href="#"><img src="/images/twitter/tweet2.jpg" alt="tweet image" class="border border-solid border-grey-light rounded-sm"></a></p>
                        </div>
                        <div class="pb-2">
                            <span class="mr-8"><a href="#" class="text-grey-dark hover:no-underline hover:text-blue-light"><i class="fa fa-comment fa-lg mr-2"></i> 19</a></span>
                            <span class="mr-8"><a href="#" class="text-grey-dark hover:no-underline hover:text-green"><i class="fa fa-retweet fa-lg mr-2"></i> 56</a></span>
                            <span class="mr-8"><a href="#" class="text-grey-dark hover:no-underline hover:text-red"><i class="fa fa-heart fa-lg mr-2"></i> 247</a></span>
                            <span class="mr-8"><a href="#" class="text-grey-dark hover:no-underline hover:text-teal"><i class="fa fa-envelope fa-lg mr-2"></i></a></span>
                        </div>
            
                        <div><a href="#">Show this thread</a></div>
                    </div>
                </div>
            </div><!--end Tweet-->
            
            <div class="flex border-b border-solid border-grey-light">
            
                <div class="w-1/8 text-right pl-3 pt-3">
                    <div><a href="#"><img src="/images/twitter/avatar_tailwind.jpg" alt="avatar" class="rounded-full h-12 w-12 mr-2"></a></div>
                </div>
            
                <div class="w-7/8 p-3 pl-0">
                    <div class="flex justify-between">
                        <div>
                            <span class="font-bold"><a href="#" class="text-black">Tailwind CSS</a></span>
                            <span class="text-grey-dark">@tailwindcss</span>
                            <span class="text-grey-dark">&middot;</span>
                            <span class="text-grey-dark">1 Dec 2017</span>
                        </div>
                        <div>
                            <a href="#" class="text-grey-dark hover:text-teal"><i class="fa fa-chevron-down"></i></a>
                        </div>
                    </div>
                    <div>
                        <div class="mb-4">
                            <p class="mb-6">🎉 Tailwind CSS v0.3.0 is here!</p>
                            <p class="mb-4">Enable/disable modules, focus and group-hover variants, new utilities, and more.</p>
                            <p class="mb-4">Learn more in our upgrade guide:</p>
                            <p class="mb-6"><a href="#">github.com/tailwind/ta...</a></p>
                            <p><a href="#"><img src="/images/twitter/tweet3.jpg" alt="tweet image" class="border border-solid border-grey-light rounded-sm"></a></p>
                        </div>
                        <div class="pb-2">
                            <span class="mr-8"><a href="#" class="text-grey-dark hover:no-underline hover:text-blue-light"><i class="fa fa-comment fa-lg mr-2"></i> 6</a></span>
                            <span class="mr-8"><a href="#" class="text-grey-dark hover:no-underline hover:text-green"><i class="fa fa-retweet fa-lg mr-2"></i> 74</a></span>
                            <span class="mr-8"><a href="#" class="text-grey-dark hover:no-underline hover:text-red"><i class="fa fa-heart fa-lg mr-2"></i> 206</a></span>
                            <span class="mr-8"><a href="#" class="text-grey-dark hover:no-underline hover:text-teal"><i class="fa fa-envelope fa-lg mr-2"></i></a></span>
                        </div>
                    </div>
                </div>
            </div><!--end Tweet--><!--end Tweet-->
            
            <div class="flex border-b border-solid border-grey-light">
            
                <div class="w-1/8 text-right pl-3 pt-3">
                    <div><i class="fa fa-retweet text-grey-dark mr-2"></i></div>
                    <div><a href="#"><img src="/images/twitter/avatar_egghead.jpg" alt="avatar" class="rounded-full h-12 w-12 mr-2"></a></div>
                </div>
            
                <div class="w-7/8 p-3 pl-0">
                    <div class="text-xs text-grey-dark">Tailwind CSS Retweeted</div>
                    <div class="flex justify-between">
                        <div>
                            <span class="font-bold"><a href="#" class="text-black">egghead.io</a></span>
                            <span class="text-grey-dark">@eggheadio</span>
                            <span class="text-grey-dark">&middot;</span>
                            <span class="text-grey-dark">29 Nov 2017</span>
                        </div>
                        <div>
                            <a href="#" class="text-grey-dark hover:text-teal"><i class="fa fa-chevron-down"></i></a>
                        </div>
                    </div>
                    <div>
                        <div class="mb-4">
                            <p class="mb-6">Create a Responsive Card Component by Composing Tailwind's Utility Classes - <a href="#">#html</a> lesson
                                by <a href="#">@simonswiss</a></p>
                            <div class="flex border border-solid border-grey-light rounded">
                                <div class="w-1/4">
                                    <img src="/images/twitter/tweet4.jpg" alt="image">
                                </div>
                                <div class="w-3/4 p-3">
                                    <div class="font-bold mb-1">egghead Lesson: Abstract utility classes to ...</div>
                                    <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus voluptate tempore itaque culpa
                                        hic qui nostrum, minus harum cupiditate a voluptatibus.
                                        <div class="text-grey-dark">egghead.io</div>
                                </div>
                            </div>
            
                        </div>
                        <div class="pb-2">
                            <span class="mr-8"><a href="#" class="text-grey-dark hover:no-underline hover:text-blue-light"><i class="fa fa-comment fa-lg mr-2"></i> 2</a></span>
                            <span class="mr-8"><a href="#" class="text-grey-dark hover:no-underline hover:text-green"><i class="fa fa-retweet fa-lg mr-2"></i> 8</a></span>
                            <span class="mr-8"><a href="#" class="text-grey-dark hover:no-underline hover:text-red"><i class="fa fa-heart fa-lg mr-2"></i> 24</a></span>
                            <span class="mr-8"><a href="#" class="text-grey-dark hover:no-underline hover:text-teal"><i class="fa fa-envelope fa-lg mr-2"></i></a></span>
                        </div>
                    </div>
                </div>
            </div><!--end Tweet-->
        </div>
        <div class="w-full lg:w-1/4 pl-4">
            <div class="bg-white p-3 mb-3 who-to-follow">
                <div class="who-to-follow-title">
                    <span class="text-lg font-bold">Who to follow</span>
                    <span>&middot;</span>
                    <span><a href="#" class="text-xs">Refresh</a></span>
                    <span>&middot;</span>
                    <span><a href="#" class="text-xs">View All</a></span>
                </div><!-- end who-to-follow-title-->

                <div class="flex border-b border-solid border-grey-light suggest-to-follow">
                    <div class="py-2">
                        <a href="#"><img src="/images/twitter/follow1.jpg" alt="follow1" class="rounded-full h-12 w-12"></a>
                    </div>
                    <div class="pl-2 py-2 w-full">
                        <div class="flex justify-between mb-1">
                            <div>
                                <a href="#" class="font-bold text-black">Nuxt.js</a> <a href="#" class="text-grey-dark">@nuxt_js</a>
                            </div>
                
                            <div>
                                <a href="#" class="text-grey hover:text-grey-dark"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div>
                            <button class="bg-transparent text-xs hover:bg-teal text-teal font-semibold hover:text-white py-2 px-6 border border-teal hover:border-transparent rounded-full">Follow</button>
                        </div>
                    </div>
                </div><!-- end suggest-to-follow-->
                <div class="flex border-b border-solid border-grey-light suggest-to-follow">
                    <div class="py-2">
                        <a href="#"><img src="/images/twitter/follow2.jpg" alt="follow1" class="rounded-full h-12 w-12"></a>
                    </div>
                    <div class="pl-2 py-2 w-full">
                        <div class="flex justify-between mb-1">
                            <div>
                                <a href="#" class="font-bold text-black">Laracon EU</a> <a href="#" class="text-grey-dark">@LaraconEU</a>
                            </div>
                
                            <div>
                                <a href="#" class="text-grey hover:text-grey-dark"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div>
                            <button class="bg-transparent text-xs hover:bg-teal text-teal font-semibold hover:text-white py-2 px-6 border border-teal hover:border-transparent rounded-full">
                                                    Follow
                                                </button>
                        </div>
                    </div>
                </div><!-- end suggest-to-follow-->
                
                <div class="flex border-b border-solid border-grey-light suggest-to-follow">
                    <div class="py-2">
                        <a href="#"><img src="/images/twitter/follow3.jpg" alt="follow1" class="rounded-full h-12 w-12"></a>
                    </div>
                    <div class="pl-2 py-2 w-full">
                        <div class="flex justify-between mb-1">
                            <div>
                                <a href="#" class="font-bold text-black">Laracon US</a> <a href="#" class="text-grey-dark">@LaraconUS</a>
                            </div>
                
                            <div>
                                <a href="#" class="text-grey hover:text-grey-dark"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div>
                            <button class="bg-transparent text-xs hover:bg-teal text-teal font-semibold hover:text-white py-2 px-6 border border-teal hover:border-transparent rounded-full">
                                                    Follow
                                                </button>
                        </div>
                    </div>
                </div><!-- end suggest-to-follow-->
                
                <div class="flex border-b border-solid border-grey-light suggest-to-follow">
                    <div class="py-4">
                        <a href="#" class=" p-1"><img src="/images/twitter/outlook.png" alt="follow1" class="rounded h-6 w-6"></a>
                    </div>
                    <div class="pl-2 py-2 w-full">
                        <div class="flex justify-between">
                            <div>
                                <a href="#" class="font-bold text-black">Find people you know</a>
                            </div>
                        </div>
                        <div class="text-xs">
                            Import your contacts from Outlook
                        </div>
                    </div>
                </div><!--end suggest-to-follow-->

                <div class="pt-2">
                    <a href="#" class="text-xs">Connect other address book</a>
                </div>

            </div><!-- end who to follow-->

            <div class="bg-white p-3 mb-3 trends-for-you">
                <div class="trends-for-you-title">
                    <span class="text-lg font-bold">Trends For You</span>
                    <span>&middot;</span>
                    <span><a href="#" class="text-xs">Change</a></span>
                </div><!-- end trends-for-you-title-->

                <div class="mb-3 leading-tight sugges-trending">
                    <div><h3><a href="#">#FamiliesBelongTogether</a></h3></div>
                    <span class="text-grey-darker">
                        People rally against the separation of immigrant families in the US
                    </span>
                </div><!-- end suggest-trending-->

                <div class="mb-3 leading-tight suggest-trending">
                    <div><a href="#" class="font-bold">#ByeBye2017</a></div>
                    <div><a href="#" class="text-grey-dark text-xs">21.7K Tweets</a></div>
                </div><!-- end suggest-trending-->
                
                <div class="mb-3 leading-tight suggest-trending">
                    <div><a href="#" class="font-bold">#SomeHashTag</a></div>
                    <div><a href="#" class="text-grey-dark text-xs">45K Tweets</a></div>
                </div><!-- end suggest-trending-->
                
                <div class="mb-3 leading-tight suggest-trending">
                    <div><a href="#" class="font-bold">Something Trending</a></div>
                    <div><a href="#" class="text-grey-dark text-xs">36K Tweets</a></div>
                </div><!-- end suggest-trending-->
                
                <div class="mb-3 leading-tight suggest-trending">
                    <div><a href="#" class="font-bold">#ColdAF</a></div>
                    <div><a href="#" class="text-grey-dark text-xs">100K Tweets</a></div>
                </div><!-- end suggest-trending-->

            </div><!-- end trends-for-you-->
            <div class="mb-3 text-xs">
                <span class="mr-2"><a href="#" class="text-grey-darker">&copy; 2018 Twitter</a></span>
                <span class="mr-2"><a href="#" class="text-grey-darker">About</a></span>
                <span class="mr-2"><a href="#" class="text-grey-darker">Help Center</a></span>
                <span class="mr-2"><a href="#" class="text-grey-darker">Terms</a></span>
                <span class="mr-2"><a href="#" class="text-grey-darker">Privacy policy</a></span>
                <span class="mr-2"><a href="#" class="text-grey-darker">Cookies</a></span>
                <span class="mr-2"><a href="#" class="text-grey-darker">Ads info</a></span>
            </div>
        </div>   
    </div>
</body>
</html>