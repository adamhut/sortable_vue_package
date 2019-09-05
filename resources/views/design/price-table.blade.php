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
    <link href="{{ mix('css/price-table.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body class="bg-gray-100 font-sans font-normal text-black antialiased">
    <div id="app" class="container mx-auto mt-16">
        <table class="w-full text-base mt-12 hidden lg:block">
            <thead class="">
                <tr>
                    <th class="w-1/5 px-4 py-6 text-left bg-gray-100 text-center font-normal align-top sticky top-0">
                        <div class="">
                            <span class="text-sm font-semibold"
                                :class="[monthly ?' text-gray-500':' text-gray-700']">Annually</span>
                            <toggle-button v-model="monthly" switch-color="#4199E1"
                                :color="{checked: '#CBD5E0', unchecked: '#CBD5E0'}" class="ml-2"></toggle-button>
                            <span class="ml-2 text-sm font-semibold"
                                :class="[monthly ?' text-gray-700':' text-gray-500']">Monthly</span>
                        </div>
                        <div class="text-blue-600 text-sm mt-4">Save Up to 30% by pay annually.

                        </div>

                    </th>
                    <th class="w-1/5 px-4 py-6 bg-gray-200 text-center border border-gray-400 font-normal sticky top-0">
                        <div class="uppercase tracking-wide font-bold text-gray-700">Hobby</div>
                        <div class="mt-3">
                            <span class="text-lg">$</span>
                            <span
                                class="font-bold text-4xl ml-1 text-gray-800">@{{ monthly ? plans.hobby.price.perMonth:plans.hobby.price.perYear}}</span>
                            <span class="ml-2 text-sm"> /month</span>
                        </div>
                        <div class="mt-3">
                            <a href="#"
                                class="bg-blue-500 text-white inline-block w-4/5 px-4 py-3 hover:bg-blue-700 rounded">Sign
                                up</a>
                        </div>
                    </th>
                    <th class="w-1/5 px-4 py-6 bg-gray-200 text-center border border-gray-400 font-normal sticky top-0">
                        <div class="uppercase tracking-wide font-bold text-gray-700">Growth</div>
                        <div class="mt-3">
                            <span class="text-lg">$</span>
                            <span
                                class="font-bold text-4xl ml-1 text-gray-800">@{{ monthly ? plans.growth.price.perMonth:plans.growth.price.perYear}}</span>
                            <span class="ml-2 text-sm"> /month</span>
                        </div>
                        <div class="mt-3">
                            <a href="#"
                                class="bg-blue-500 text-white inline-block w-4/5 px-4 py-3 hover:bg-blue-700 rounded">Sign
                                up</a>
                        </div>
                    </th>
                    <th class="w-1/5 px-4 py-6 bg-gray-200 text-center border border-gray-400 font-normal sticky top-0">
                        <div class="uppercase tracking-wide font-bold text-gray-700">Business</div>
                        <div class="mt-3">
                            <span class="text-lg">$</span>
                            <span
                                class="font-bold text-4xl ml-1 text-gray-800">@{{ monthly ? plans.business.price.perMonth:plans.business.price.perYear}}</span>
                            <span class="ml-2 text-sm"> /month</span>
                        </div>
                        <div class="mt-3">
                            <a href="#"
                                class="bg-blue-500 text-white inline-block w-4/5 px-4 py-3 hover:bg-blue-700 rounded">Sign
                                up</a>
                        </div>
                    </th>
                    <th class="w-1/5 px-4 py-6 bg-gray-200 text-center border border-gray-400 font-normal sticky top-0">
                        <div class="uppercase tracking-wide font-bold text-gray-700">Enterprice</div>
                        <div class="mt-3">
                            <span class="text-lg">$</span>
                            <span
                                class="font-bold text-4xl ml-1 text-gray-800">@{{ monthly ? plans.enterprise.price.perMonth:plans.enterprise.price.perYear}}</span>
                            <span class="ml-2 text-sm"> /month</span>
                        </div>
                        <div class="mt-3">
                            <a href="#"
                                class="bg-blue-500 text-white inline-block w-4/5 px-4 py-3 hover:bg-blue-700 rounded">Sign
                                up</a>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd:bg-white">
                    <td class="border border-gray-400 text-left px-4 py-6">Shipping Discount</td>
                    <td class="border border-gray-400 text-center px-4 py-6">$19</td>
                    <td class="border border-gray-400 text-center px-4 py-6">$29</td>
                    <td class="border border-gray-400 text-center px-4 py-6">$39</td>
                    <td class="border border-gray-400 text-center px-4 py-6">$49</td>
                </tr>
                <tr class="even:bg-gray-100">
                    <td class="border border-gray-400 text-left px-4 py-6">Print Shipping Labels</td>
                    <td class="border border-gray-400 text-center px-4 py-6">3</td>
                    <td class="border border-gray-400 text-center px-4 py-6">4</td>
                    <td class="border border-gray-400 text-center px-4 py-6">5</td>
                    <td class="border border-gray-400 text-center px-4 py-6">6</td>
                </tr>
                <tr class="odd:bg-white">
                    <td class="border border-gray-400 text-left px-4 py-6">Same Day Delivery</td>
                    <td class="border border-gray-400 text-center px-4 py-6">7</td>
                    <td class="border border-gray-400 text-center px-4 py-6">8</td>
                    <td class="border border-gray-400 text-center px-4 py-6">9</td>
                    <td class="border border-gray-400 text-center px-4 py-6">10</td>
                </tr>
                <tr class="even:bg-gray-100">
                    <td class="border border-gray-400 text-left px-4 py-6">Contributors</td>
                    <td class="border border-gray-400 text-center px-4 py-6">11</td>
                    <td class="border border-gray-400 text-center px-4 py-6">12</td>
                    <td class="border border-gray-400 text-center px-4 py-6">13</td>
                    <td class="border border-gray-400 text-center px-4 py-6">14</td>
                </tr>
                <tr class="odd:bg-white">
                    <td class="border border-gray-400 text-left px-4 py-6">API Calls</td>
                    <td class="border border-gray-400 text-center px-4 py-6">
                        <div class="text-lg font-semibold">1,000 calls</div>
                        <div class="text-xs">/ month</div>
                    </td>
                    <td class="border border-gray-400 text-center px-4 py-6">
                        <div class="text-lg font-semibold">5,000 calls</div>
                        <div class="text-xs">/ month</div>
                    </td>
                    <td class="border border-gray-400 text-center px-4 py-6">
                        <div class="text-lg font-semibold">10,000 calls</div>
                        <div class="text-xs">/ month</div>
                    </td>
                    <td class="border border-gray-400 text-center px-4 py-6">
                        <div class="text-lg font-semibold">50,000 calls</div>
                        <div class="text-xs">/ month</div>
                    </td>
                </tr>
                <tr class="bg-gray-200 border border-gray-400">
                    <td class="uppercase tracking-wide font-semibold px-4 py-6">More Features</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="odd:bg-white">
                    <td class="border border-gray-400 text-left px-4 py-6">Free Custom Domain</td>
                    <td class="border border-gray-400 text-center px-4 py-6">
                        <svg class="w-6 h-6 inline-block text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm4.3 7.61l-4.57 6a1 1 0 0 1-.79.39 1 1 0 0 1-.79-.38l-2.44-3.11a1 1 0 0 1 1.58-1.23l1.63 2.08 3.78-5a1 1 0 1 1 1.6 1.22z" />
                            </svg>

                    </td>
                    <td class="border border-gray-400 text-center px-4 py-6">
                        <svg class="w-6 h-6 inline-block text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm4.3 7.61l-4.57 6a1 1 0 0 1-.79.39 1 1 0 0 1-.79-.38l-2.44-3.11a1 1 0 0 1 1.58-1.23l1.63 2.08 3.78-5a1 1 0 1 1 1.6 1.22z" />
                            </svg>

                    </td>
                    <td class="border border-gray-400 text-center px-4 py-6">
                        <svg class="w-6 h-6 inline-block text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm4.3 7.61l-4.57 6a1 1 0 0 1-.79.39 1 1 0 0 1-.79-.38l-2.44-3.11a1 1 0 0 1 1.58-1.23l1.63 2.08 3.78-5a1 1 0 1 1 1.6 1.22z" />
                            </svg>

                    </td>
                    <td class="border border-gray-400 text-center px-4 py-6">
                        <svg class="w-6 h-6 inline-block text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm4.3 7.61l-4.57 6a1 1 0 0 1-.79.39 1 1 0 0 1-.79-.38l-2.44-3.11a1 1 0 0 1 1.58-1.23l1.63 2.08 3.78-5a1 1 0 1 1 1.6 1.22z" />
                            </svg>

                    </td>
                </tr>
                <tr class="even:bg-gray-100">
                    <td class="border border-gray-400 text-left px-4 py-6">SSL Security</td>
                    <td class="border border-gray-400 text-center px-4 py-6">
                        <svg class="w-6 h-6 inline-block text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm4.3 7.61l-4.57 6a1 1 0 0 1-.79.39 1 1 0 0 1-.79-.38l-2.44-3.11a1 1 0 0 1 1.58-1.23l1.63 2.08 3.78-5a1 1 0 1 1 1.6 1.22z" />
                            </svg>

                    </td>
                    <td class="border border-gray-400 text-center px-4 py-6">
                        <svg class="w-6 h-6 inline-block text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm4.3 7.61l-4.57 6a1 1 0 0 1-.79.39 1 1 0 0 1-.79-.38l-2.44-3.11a1 1 0 0 1 1.58-1.23l1.63 2.08 3.78-5a1 1 0 1 1 1.6 1.22z" />
                            </svg>

                    </td>
                    <td class="border border-gray-400 text-center px-4 py-6">
                        <svg class="w-6 h-6 inline-block text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm4.3 7.61l-4.57 6a1 1 0 0 1-.79.39 1 1 0 0 1-.79-.38l-2.44-3.11a1 1 0 0 1 1.58-1.23l1.63 2.08 3.78-5a1 1 0 1 1 1.6 1.22z" />
                            </svg>

                    </td>
                    <td class="border border-gray-400 text-center px-4 py-6">
                        <svg class="w-6 h-6 inline-block text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm4.3 7.61l-4.57 6a1 1 0 0 1-.79.39 1 1 0 0 1-.79-.38l-2.44-3.11a1 1 0 0 1 1.58-1.23l1.63 2.08 3.78-5a1 1 0 1 1 1.6 1.22z" />
                            </svg>

                    </td>
                </tr>
                <tr class="odd:bg-white">
                    <td class="border border-gray-400 text-left px-4 py-6">Unlimited Bandwidth and Storage</td>
                    <td class="border border-gray-400 text-center px-4 py-6"></td>
                    <td class="border border-gray-400 text-center px-4 py-6"></td>
                    <td class="border border-gray-400 text-center px-4 py-6">
                        <svg class="w-6 h-6 inline-block text-blue-500 fill-current" fill="" viewBox="0 0 24 24">
                            <path
                                d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm4.3 7.61l-4.57 6a1 1 0 0 1-.79.39 1 1 0 0 1-.79-.38l-2.44-3.11a1 1 0 0 1 1.58-1.23l1.63 2.08 3.78-5a1 1 0 1 1 1.6 1.22z" />
                            </svg>
                    </td>
                    <td class="border border-gray-400 text-center px-4 py-6">
                        <svg class="w-6 h-6 inline-block text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm4.3 7.61l-4.57 6a1 1 0 0 1-.79.39 1 1 0 0 1-.79-.38l-2.44-3.11a1 1 0 0 1 1.58-1.23l1.63 2.08 3.78-5a1 1 0 1 1 1.6 1.22z" />
                            </svg>
                    </td>
                </tr>
                <tr class="even:bg-gray-100">
                    <td class="border border-gray-400 text-left px-4 py-6">SEO Features for Site Visibility</td>
                    <td class="border border-gray-400 text-center px-4 py-6"></td>
                    <td class="border border-gray-400 text-center px-4 py-6"></td>
                    <td class="border border-gray-400 text-center px-4 py-6"></td>
                    <td class="border border-gray-400 text-center px-4 py-6">
                        <svg class="w-6 h-6 inline-block text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm4.3 7.61l-4.57 6a1 1 0 0 1-.79.39 1 1 0 0 1-.79-.38l-2.44-3.11a1 1 0 0 1 1.58-1.23l1.63 2.08 3.78-5a1 1 0 1 1 1.6 1.22z" />
                            </svg>
                    </td>
                </tr>
                <tr class="bg-gray-200 border border-gray-400">
                    <td class="uppercase tracking-wide font-semibold px-4 py-6">Marketing</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="odd:bg-white">
                    <td class="border border-gray-400 text-left px-4 py-6">Shipping Discount</td>
                    <td class="border border-gray-400 text-center px-4 py-6">
                        <svg class="w-6 h-6 inline-block text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm4.3 7.61l-4.57 6a1 1 0 0 1-.79.39 1 1 0 0 1-.79-.38l-2.44-3.11a1 1 0 0 1 1.58-1.23l1.63 2.08 3.78-5a1 1 0 1 1 1.6 1.22z" />
                            </svg>

                    </td>
                    <td class="border border-gray-400 text-center px-4 py-6">
                        <svg class="w-6 h-6 inline-block text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm4.3 7.61l-4.57 6a1 1 0 0 1-.79.39 1 1 0 0 1-.79-.38l-2.44-3.11a1 1 0 0 1 1.58-1.23l1.63 2.08 3.78-5a1 1 0 1 1 1.6 1.22z" />
                            </svg>

                    </td>
                    <td class="border border-gray-400 text-center px-4 py-6">
                        <svg class="w-6 h-6 inline-block text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm4.3 7.61l-4.57 6a1 1 0 0 1-.79.39 1 1 0 0 1-.79-.38l-2.44-3.11a1 1 0 0 1 1.58-1.23l1.63 2.08 3.78-5a1 1 0 1 1 1.6 1.22z" />
                            </svg>

                    </td>
                    <td class="border border-gray-400 text-center px-4 py-6">
                        <svg class="w-6 h-6 inline-block text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm4.3 7.61l-4.57 6a1 1 0 0 1-.79.39 1 1 0 0 1-.79-.38l-2.44-3.11a1 1 0 0 1 1.58-1.23l1.63 2.08 3.78-5a1 1 0 1 1 1.6 1.22z" />
                            </svg>

                    </td>
                </tr>
                <tr class="even:bg-gray-100">
                    <td class="border border-gray-400 text-left px-4 py-6">Print Shipping Labels</td>
                    <td class="border border-gray-400 text-center px-4 py-6">
                        <svg class="w-6 h-6 inline-block text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm4.3 7.61l-4.57 6a1 1 0 0 1-.79.39 1 1 0 0 1-.79-.38l-2.44-3.11a1 1 0 0 1 1.58-1.23l1.63 2.08 3.78-5a1 1 0 1 1 1.6 1.22z" />
                            </svg>

                    </td>
                    <td class="border border-gray-400 text-center px-4 py-6">
                        <svg class="w-6 h-6 inline-block text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm4.3 7.61l-4.57 6a1 1 0 0 1-.79.39 1 1 0 0 1-.79-.38l-2.44-3.11a1 1 0 0 1 1.58-1.23l1.63 2.08 3.78-5a1 1 0 1 1 1.6 1.22z" />
                            </svg>

                    </td>
                    <td class="border border-gray-400 text-center px-4 py-6">
                        <svg class="w-6 h-6 inline-block text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm4.3 7.61l-4.57 6a1 1 0 0 1-.79.39 1 1 0 0 1-.79-.38l-2.44-3.11a1 1 0 0 1 1.58-1.23l1.63 2.08 3.78-5a1 1 0 1 1 1.6 1.22z" />
                            </svg>

                    </td>
                    <td class="border border-gray-400 text-center px-4 py-6">
                        <svg class="w-6 h-6 inline-block text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm4.3 7.61l-4.57 6a1 1 0 0 1-.79.39 1 1 0 0 1-.79-.38l-2.44-3.11a1 1 0 0 1 1.58-1.23l1.63 2.08 3.78-5a1 1 0 1 1 1.6 1.22z" />
                            </svg>

                    </td>
                </tr>
                <tr class="odd:bg-white">
                    <td class="border border-gray-400 text-left px-4 py-6">Same Day Delivery</td>
                    <td class="border border-gray-400 text-center px-4 py-6">

                    </td>
                    <td class="border border-gray-400 text-center px-4 py-6">

                    </td>
                    <td class="border border-gray-400 text-center px-4 py-6">
                        <svg class="w-6 h-6 inline-block text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm4.3 7.61l-4.57 6a1 1 0 0 1-.79.39 1 1 0 0 1-.79-.38l-2.44-3.11a1 1 0 0 1 1.58-1.23l1.63 2.08 3.78-5a1 1 0 1 1 1.6 1.22z" />
                            </svg>

                    </td>
                    <td class="border border-gray-400 text-center px-4 py-6">
                        <svg class="w-6 h-6 inline-block text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm4.3 7.61l-4.57 6a1 1 0 0 1-.79.39 1 1 0 0 1-.79-.38l-2.44-3.11a1 1 0 0 1 1.58-1.23l1.63 2.08 3.78-5a1 1 0 1 1 1.6 1.22z" />
                            </svg>

                    </td>
                </tr>
                <tr class="even:bg-gray-100">
                    <td class="border border-gray-400 text-left px-4 py-6">Contributors</td>
                    <td class="border border-gray-400 text-center px-4 py-6">
                    </td>
                    <td class="border border-gray-400 text-center px-4 py-6">
                    </td>
                    <td class="border border-gray-400 text-center px-4 py-6">
                    </td>
                    <td class="border border-gray-400 text-center px-4 py-6">
                        <svg class="w-6 h-6 inline-block text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm4.3 7.61l-4.57 6a1 1 0 0 1-.79.39 1 1 0 0 1-.79-.38l-2.44-3.11a1 1 0 0 1 1.58-1.23l1.63 2.08 3.78-5a1 1 0 1 1 1.6 1.22z" />
                            </svg>

                    </td>
                </tr>
            </tbody>
        </table>
        <div class="mobile-table mx-8 mt-64 lg:hidden">
            <!-- Mobile Table Here-->
            <div class="text-center border border-gray-400 rounded text-base">
                <div class="bg-gray-300 px-4 py-4">
                    <div class="uppercase tracking-wide font-bold text-gray-700">Hobby</div>
                    <div class="mt-3">
                        <span class="text-lg">$</span>
                        <span
                            class="font-bold text-4xl ml-1 text-gray-800">@{{ monthly ? plans.hobby.price.perMonth:plans.hobby.price.perYear}}</span>
                        <span class="ml-2 text-sm"> /month</span>
                    </div>
                </div>
                <div class=" flex px-3 py-4 even:bg-gray-100">
                    <div class="text-left w-3/5">Shipping Discount</div>
                    <div class="text-center w-2/5">3</div>
                </div>
                <div class=" flex px-3 py-4 odd:bg-gray-200">
                    <div class="text-left w-3/5">Print Shipping Labels</div>
                    <div class="text-center w-2/5">5</div>
                </div>
                <div class=" flex px-3 py-4 even:bg-gray-100">
                    <div class="text-left w-3/5">Same Day Delivery</div>
                    <div class="text-center w-2/5">1</div>
                </div>
                <div class=" flex px-3 py-4 odd:bg-gray-200">
                    <div class="text-left w-3/5">Contributors</div>
                    <div class="text-center w-2/5">10</div>
                </div>
                <div class=" flex px-3 py-4 odd:bg-gray-200">
                    <div class="text-left w-3/5">API Calls</div>
                    <div class="text-center w-2/5">1,000 calls</div>
                </div>
                <div class="px-3 py-4 odd:bg-gray-200">
                    <ul class="leading-loose">
                        <li class="flex items-center text-gray-800">
                            <svg fill="currentColor" width="18" height="18" viewBox="0 0 18 18"><path d="M6.61 11.89L3.5 8.78 2.44 9.84 6.61 14l8.95-8.95L14.5 4l-7.89 7.89z" /></svg>
                            <span class="ml-2">Free Custom Domain</span>
                        </li>
                        <li class="flex items-center text-gray-800">
                            <svg fill="currentColor" width="18" height="18" viewBox="0 0 18 18"><path d="M6.61 11.89L3.5 8.78 2.44 9.84 6.61 14l8.95-8.95L14.5 4l-7.89 7.89z" /></svg>
                            <span class="ml-2">Same Day Delivery</span>
                        </li>
                        <li class="flex items-center text-gray-800">
                            <svg fill="currentColor" width="18" height="18" viewBox="0 0 18 18"><path d="M6.61 11.89L3.5 8.78 2.44 9.84 6.61 14l8.95-8.95L14.5 4l-7.89 7.89z" /></svg>        
                            <span class="ml-2">Contributors</span>
                        </li>
                        <li class="flex items-center text-gray-800">
                            <svg fill="currentColor" width="18" height="18" viewBox="0 0 18 18"><path d="M6.61 11.89L3.5 8.78 2.44 9.84 6.61 14l8.95-8.95L14.5 4l-7.89 7.89z" /></svg>
                            <span class="ml-2">SSL Security</span>
                        </li>
                    </ul>
                </div>
                <div class="my-3 odd:bg-gray-200 ">
                    <a href="#"
                        class="bg-blue-500 text-white inline-block w-64 px-4 py-3 hover:bg-blue-700 rounded">Sign
                        up</a>
                </div>
            </div>
        </div>
        <div class="mt-64">

        </div>

        <div class="mt-64">

        </div>
    </div>
    <script src="{{mix('/js/price-table.js')}}"></script>
</body>

</html>