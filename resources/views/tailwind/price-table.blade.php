<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--<link rel="stylesheet" href="https://unpkg.com/tailwindcss@0.5.2/dist/tailwind.min.css">-->
    <title>Tailwind Price Table Component</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="{{ asset('css/tailwind-pricetable.css') }}" rel="stylesheet">

</head>

<body class="bg-gray-200 font-sans">
    <div id="app" class="bg-gray-200 antialiased min-h-screen xl:flex xl:flex-col xl:h-screen">
        <div class="bg-gray-200">
            <div class="max-w-screen-xl mx-auto py-10 px-6 ">
                <h1 class="text-2xl font-semibold text-center text-gray-900 leading-tight lg:text-4xl">Pricing build for businesses
                    of
                    All sizes</h1>
                <p class="mt-2 text-center text-gray-600 lg:text-3xl">Try free for 14 days, no Credit Card Required </p>

                <div class="mt-10 max-w-md mx-auto lg:hidden">
                    <!--Start Basic Plan-->
                    <div class="bg-white rounded-lg   shadow-md">
                        <div class="px-5 py-5">
                            <h2 class="font-medium text-gray-900 text-center">Basic</h2>
                            <div class="mt-1 text-center">
                                <span class="text-3xl font-semibold text-gray-900">$9</span>
                                <span class="text-gray-600">/mo</span>
                            </div>
                            <p class="mt-2  w-56  mx-auto text-center text-sm text-gray-600 ">All the basics for
                                starting a
                                new business.</p>
                            <a href="#"
                                class="max-w-xs mx-auto mt-4 block px-3 py-2 text-sm text-center font-semibold text-white bg-gray-800 rounded-lg hover:bg-gray-700">
                                Buy Basic
                            </a>
                        </div>
                        <div>
                            <table class="w-full ">
                                <tr>
                                    <th colspan="2" class="px-5 py-2 border-t-2 border-gray-200 bg-gray-100 text-xs text-left text-gray-700 font-semibold uppercase
                                     tracking-wide">
                                        Features
                                    </th>
                                </tr>
                                <tr>
                                    <td
                                        class="px-5 py-5 border-t-2 border-r-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                        Unlimited storage space
                                    </td>
                                    <td class="px-5 py-5 border-t-2 border-gray-200">
                                        <svg class="mx-auto h-6 w-6 fill-current text-green-700"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-5 py-5 border-t-2 border-r-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                        Unlimited uploads
                                    </td>
                                    <td class="px-5 py-5 border-t-2 border-gray-200 ">
                                        <svg class="mx-auto h-6 w-6 fill-current text-green-700"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-5 py-5 border-t-2 border-r-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                        Additional Team Member
                                    </td>
                                    <td class="px-5 py-5 border-t-2 border-gray-200 ">
                                        <svg class="mx-auto h-6 w-6 fill-current text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path d="M0 10h24v4h-24z" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-5 py-5 border-t-2 border-r-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                        API Access
                                    </td>
                                    <td class="px-5 py-5 border-t-2 border-gray-200 ">
                                        <svg class="mx-auto h-6 w-6 fill-current text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path d="M0 10h24v4h-24z" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-5 py-5 border-t-2 border-r-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                        Dedicated support rep
                                    </td>
                                    <td class="px-5 py-5 border-t-2 border-gray-200 ">
                                        <svg class="mx-auto h-6 w-6 fill-current text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path d="M0 10h24v4h-24z" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <th colspan="2"
                                        class="px-5 py-2 border-t-2 border-gray-200 bg-gray-100 text-xs text-left text-gray-700 font-semibold uppercase tracking-wide">
                                        Payments
                                    </th>
                                </tr>

                                <tr>
                                    <td class="px-5 py-5 border-t-2 border-r-2 border-gray-200 text-sm text-gray-900 ">
                                        Fraud analysis
                                    </td>
                                    <td class="px-5 py-5 border-t-2 border-gray-200">
                                        <svg class="mx-auto h-6 w-6 fill-current text-green-700"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-5 py-5 border-t-2 border-r-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                        Online credit card rates
                                    </td>
                                    <td
                                        class="px-5 py-5 border-t-2 border-gray-200 text-xs text-gray-700 text-center whitespace-no-wrap">
                                        2.9% + 30 &#162;
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-5 py-5 border-t-2 border-r-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                        In-person credit card rates
                                    </td>
                                    <td
                                        class="px-5  py-5 border-t-2 border-gray-200 text-xs text-gray-700 text-center whitespace-no-wrap">
                                        2.7% + 30 &#162;
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-5 py-5 border-t-2 border-r-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                        Additional fee using all Payment provider
                                    </td>
                                    <td
                                        class="px-5  py-5 border-t-2 border-gray-200  text-xs text-gray-700 text-center whitespace-no-wrap">
                                        2.0%
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="border-t-2 border-gray-200 px-5 py-5">
                                <a href="#"
                                    class="max-w-xs mx-auto  block px-3 py-2 text-sm text-center font-semibold text-white bg-gray-800 rounded-lg hover:bg-gray-700">
                                    Buy Basic
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--End Basic Plan-->
                    <!--Start Essential Plan-->
                    <div class="mt-8  bg-white rounded-lg   shadow-md">
                        <div class="px-5 py-5 font-medium text-gray-900 text-center">Essential</h2>
                            <div class="mt-1 text-center">
                                <span class="text-3xl font-semibold text-gray-900">$29</span>
                                <span class="text-gray-600">/mo</span>
                            </div>
                            <p class="mt-2  w-56  mx-auto text-center text-sm text-gray-600 ">Everything ytou need for a
                                growing bussiness</p>
                            <a href="#"
                                class="mt-4 max-w-xs mx-auto block px-3 py-2 text-sm text-center font-semibold text-white bg-gray-800 rounded-lg hover:bg-gray-700">
                                Buy Essential
                            </a>
                        </div>
                        <div>
                            <table class="w-full ">
                                <tr>
                                    <th colspan="2" class="px-5 py-2 border-t-2 border-gray-200 bg-gray-100 text-xs text-left text-gray-700 font-semibold uppercase
                                     tracking-wide">
                                        Features
                                    </th>
                                </tr>
                                <tr>
                                    <td
                                        class="px-5 py-5 border-t-2 border-r-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                        Unlimited storage space
                                    </td>
                                    <td class="px-5 py-5 border-t-2 border-gray-200">
                                        <svg class="mx-auto h-6 w-6 fill-current text-green-700"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-5 py-5 border-t-2 border-r-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                        Unlimited uploads
                                    </td>
                                    <td class="px-5 py-5 border-t-2 border-gray-200 ">
                                        <svg class="mx-auto h-6 w-6 fill-current text-green-700"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-5 py-5 border-t-2 border-r-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                        Additional Team Member
                                    </td>
                                    <td class="px-5 py-5 border-t-2 border-gray-200 ">
                                        <svg class="mx-auto h-6 w-6 fill-current text-green-700"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-5 py-5 border-t-2 border-r-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                        API Access
                                    </td>
                                    <td class="px-5 py-5 border-t-2 border-gray-200 ">
                                        <svg class="mx-auto h-6 w-6 fill-current text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path d="M0 10h24v4h-24z" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-5 py-5 border-t-2 border-r-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                        Dedicated support rep
                                    </td>
                                    <td class="px-5 py-5 border-t-2 border-gray-200 ">
                                        <svg class="mx-auto h-6 w-6 fill-current text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path d="M0 10h24v4h-24z" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <th colspan="2"
                                        class="px-5 py-2 border-t-2 border-gray-200 bg-gray-100 text-xs text-left text-gray-700 font-semibold uppercase tracking-wide">
                                        Payments
                                    </th>
                                </tr>

                                <tr>
                                    <td class="px-5 py-5 border-t-2 border-r-2 border-gray-200 text-sm text-gray-900 ">
                                        Fraud analysis
                                    </td>
                                    <td class="px-5 py-5 border-t-2 border-gray-200">
                                        <svg class="mx-auto h-6 w-6 fill-current text-green-700"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-5 py-5 border-t-2 border-r-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                        Online credit card rates
                                    </td>
                                    <td
                                        class="px-5 py-5 border-t-2 border-gray-200 text-xs text-gray-700 text-center whitespace-no-wrap">
                                        2.6% + 30 &#162;
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-5 py-5 border-t-2 border-r-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                        In-person credit card rates
                                    </td>
                                    <td
                                        class="px-5  py-5 border-t-2 border-gray-200 text-xs text-gray-700 text-center whitespace-no-wrap">
                                        2.5% + 30 &#162;
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-5 py-5 border-t-2 border-r-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                        Additional fee using all Payment provider
                                    </td>
                                    <td
                                        class="px-5  py-5 border-t-2 border-gray-200  text-xs text-gray-700 text-center whitespace-no-wrap">
                                        1.0%
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="border-t-2 border-gray-200 px-5 py-5">
                                <a href="#"
                                    class="max-w-xs mx-auto block px-3 py-2 text-sm text-center font-semibold text-white bg-gray-800 rounded-lg hover:bg-gray-700">
                                    Buy Essential
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--End Essential Plan-->
                    <!--Start Premium Plan-->
                    <div class="mt-8  bg-white rounded-lg   shadow-md">
                        <div class="px-5 py-5 font-medium text-gray-900 text-center">Premium</h2>
                            <div class="mt-1 text-center">
                                <span class="text-3xl font-semibold text-gray-900">$59</span>
                                <span class="text-gray-600">/mo</span>
                            </div>
                            <p class="mt-2  w-56  mx-auto text-center text-sm text-gray-600 ">Advanced featured for
                                scaling
                                your business.</p>
                            <a href="#"
                                class="mt-4 max-w-xs mx-auto block px-3 py-2 text-sm text-center font-semibold text-white bg-gray-800 rounded-lg hover:bg-gray-700">
                                Buy Premium
                            </a>
                        </div>
                        <div>
                            <table class="w-full ">
                                <tr>
                                    <th colspan="2" class="px-5 py-2 border-t-2 border-gray-200 bg-gray-100 text-xs text-left text-gray-700 font-semibold uppercase
                                     tracking-wide">
                                        Features
                                    </th>
                                </tr>
                                <tr>
                                    <td
                                        class="px-5 py-5 border-t-2 border-r-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                        Unlimited storage space
                                    </td>
                                    <td class="px-5 py-5 border-t-2 border-gray-200">
                                        <svg class="mx-auto h-6 w-6 fill-current text-green-700"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-5 py-5 border-t-2 border-r-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                        Unlimited uploads
                                    </td>
                                    <td class="px-5 py-5 border-t-2 border-gray-200 ">
                                        <svg class="mx-auto h-6 w-6 fill-current text-green-700"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-5 py-5 border-t-2 border-r-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                        Additional Team Member
                                    </td>
                                    <td class="px-5 py-5 border-t-2 border-gray-200 ">
                                        <svg class="mx-auto h-6 w-6 fill-current text-green-700"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-5 py-5 border-t-2 border-r-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                        API Access
                                    </td>
                                    <td class="px-5 py-5 border-t-2 border-gray-200 ">
                                        <svg class="mx-auto h-6 w-6 fill-current text-green-700"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-5 py-5 border-t-2 border-r-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                        Dedicated support rep
                                    </td>
                                    <td class="px-5 py-5 border-t-2 border-gray-200 ">
                                        <svg class="mx-auto h-6 w-6 fill-current text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path d="M0 10h24v4h-24z" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <th colspan="2"
                                        class="px-5 py-2 border-t-2 border-gray-200 bg-gray-100 text-xs text-left text-gray-700 font-semibold uppercase tracking-wide">
                                        Payments
                                    </th>
                                </tr>

                                <tr>
                                    <td class="px-5 py-5 border-t-2 border-r-2 border-gray-200 text-sm text-gray-900 ">
                                        Fraud analysis
                                    </td>
                                    <td class="px-5 py-5 border-t-2 border-gray-200">
                                        <svg class="mx-auto h-6 w-6 fill-current text-green-700"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-5 py-5 border-t-2 border-r-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                        Online credit card rates
                                    </td>
                                    <td
                                        class="px-5 py-5 border-t-2 border-gray-200 text-xs text-gray-700 text-center whitespace-no-wrap">
                                        2.4% + 30 &#162;
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-5 py-5 border-t-2 border-r-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                        In-person credit card rates
                                    </td>
                                    <td
                                        class="px-5  py-5 border-t-2 border-gray-200 text-xs text-gray-700 text-center whitespace-no-wrap">
                                        2.4% + 0 &#162;
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-5 py-5 border-t-2 border-r-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                        Additional fee using all Payment provider
                                    </td>
                                    <td
                                        class="px-5  py-5 border-t-2 border-gray-200  text-xs text-gray-700 text-center whitespace-no-wrap">
                                        0.5%
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="border-t-2 border-gray-200 px-5 py-5">
                                <a href="#"
                                    class="max-w-xs mx-auto block px-3 py-2 text-sm text-center font-semibold text-white bg-gray-800 rounded-lg hover:bg-gray-700">
                                    Buy Premium
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--End Premium Plan-->
                    <!--Start Enterprice Plan-->
                    <div class="mt-8  bg-white rounded-lg   shadow-md">
                        <div class="px-5 py-5 font-medium text-gray-900 text-center">Enterprice</h2>
                            <div class="mt-1 text-center">
                                <span class="text-3xl font-semibold text-gray-900">$299</span>
                                <span class="text-gray-600">/mo</span>
                            </div>
                            <p class="mt-2 w-56 mx-auto text-center text-sm text-gray-600 ">All featured for scaling
                                your
                                business.</p>
                            <a href="#"
                                class="mt-4 max-w-xs mx-auto block px-3 py-2 text-sm text-center font-semibold text-white bg-gray-800 rounded-lg hover:bg-gray-700">
                                Buy Enterprice
                            </a>
                        </div>
                        <div>
                            <table class="w-full ">
                                <tr>
                                    <th colspan="2" class="px-5 py-2 border-t-2 border-gray-200 bg-gray-100 text-xs text-left text-gray-700 font-semibold uppercase
                                     tracking-wide">
                                        Features
                                    </th>
                                </tr>
                                <tr>
                                    <td
                                        class="px-5 py-5 border-t-2 border-r-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                        Unlimited storage space
                                    </td>
                                    <td class="px-5 py-5 border-t-2 border-gray-200">
                                        <svg class="mx-auto h-6 w-6 fill-current text-green-700"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-5 py-5 border-t-2 border-r-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                        Unlimited uploads
                                    </td>
                                    <td class="px-5 py-5 border-t-2 border-gray-200 ">
                                        <svg class="mx-auto h-6 w-6 fill-current text-green-700"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-5 py-5 border-t-2 border-r-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                        Additional Team Member
                                    </td>
                                    <td class="px-5 py-5 border-t-2 border-gray-200 ">
                                        <svg class="mx-auto h-6 w-6 fill-current text-green-700"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-5 py-5 border-t-2 border-r-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                        API Access
                                    </td>
                                    <td class="px-5 py-5 border-t-2 border-gray-200 ">
                                        <svg class="mx-auto h-6 w-6 fill-current text-green-700"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-5 py-5 border-t-2 border-r-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                        Dedicated support rep
                                    </td>
                                    <td class="px-5 py-5 border-t-2 border-gray-200 ">
                                        <svg class="mx-auto h-6 w-6 fill-current text-green-700"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <th colspan="2"
                                        class="px-5 py-2 border-t-2 border-gray-200 bg-gray-100 text-xs text-left text-gray-700 font-semibold uppercase tracking-wide">
                                        Payments
                                    </th>
                                </tr>

                                <tr>
                                    <td class="px-5 py-5 border-t-2 border-r-2 border-gray-200 text-sm text-gray-900 ">
                                        Fraud analysis
                                    </td>
                                    <td class="px-5 py-5 border-t-2 border-gray-200">
                                        <svg class="mx-auto h-6 w-6 fill-current text-green-700"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-5 py-5 border-t-2 border-r-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                        Online credit card rates
                                    </td>
                                    <td
                                        class="px-5 py-5 border-t-2 border-gray-200 text-xs text-gray-700 text-center whitespace-no-wrap">
                                        2.4% + 30 &#162;
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-5 py-5 border-t-2 border-r-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                        In-person credit card rates
                                    </td>
                                    <td
                                        class="px-5  py-5 border-t-2 border-gray-200 text-xs text-gray-700 text-center whitespace-no-wrap">
                                        2.4% + 0 &#162;
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-5 py-5 border-t-2 border-r-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                        Additional fee using all Payment provider
                                    </td>
                                    <td
                                        class="px-5  py-5 border-t-2 border-gray-200  text-xs text-gray-700 text-center whitespace-no-wrap">
                                        0.5%
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="border-t-2 border-gray-200 px-5 py-5">
                                <a href="#"
                                    class="max-w-xs mx-auto block px-3 py-2 text-sm text-center font-semibold text-white bg-gray-800 rounded-lg hover:bg-gray-700">
                                    Buy Enterprice
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--End Enterprice Plan-->
                </div>
                <!--start of DeskTop Price table-->
                <div class="hidden lg:block lg:mt-16 bg-white rounded-lg shadow-lg">
                    {{-- <p>Desktop Pricing Table!</p> --}}
                    <table class="w-full">
                        <colgroup>
                            <col class="w-1/5 xl:w-1/3">
                            <col class="w-1/5 xl:w-1/6">
                            <col class="w-1/5 xl:w-1/6">
                            <col class="w-1/5 xl:w-1/6">
                            <col class="w-1/5 xl:w-1/6">
                        </colgroup>
                        <tbody>
                            <tr>
                                <td></td>
                                <td class="border-l-2 border-gray-200 align-top">
                                    <div class="px-5 pt-5">
                                        <h2 class="font-medium text-gray-900 text-center">Basic</h2>
                                        <div class="mt-1 text-center">
                                            <span class="text-3xl font-semibold text-gray-900">$9</span>
                                            <span class="text-gray-600">/mo</span>
                                        </div>
                                        <p class="mt-2  mx-auto text-center text-sm text-gray-600">All the basics for
                                            starting a new business.</p>
                                        {{-- <a href="#"
                                            class="max-w-xs mx-auto mt-4 block px-3 py-2 text-sm text-center font-semibold text-white bg-gray-800 rounded-lg hover:bg-gray-700">
                                            Buy Basic
                                        </a> --}}
                                    </div>
                                </td>
                                <td class="border-l-2 border-gray-200 align-top">
                                    <div class="px-5 pt-5">
                                        <h2 class="font-medium text-gray-900 text-center">Essential</h2>
                                        <div class="mt-1 text-center">
                                            <span class="text-3xl font-semibold text-gray-900">$29</span>
                                            <span class="text-gray-600">/mo</span>
                                        </div>
                                        <p class="mt-2  mx-auto text-center text-sm text-gray-600 ">Everything ytou
                                            need for a growing bussiness</p>
                                        {{-- <a href="#"
                                            class="mt-4 max-w-xs mx-auto block px-3 py-2 text-sm text-center font-semibold text-white bg-gray-800 rounded-lg hover:bg-gray-700">
                                            Buy Essential
                                        </a> --}}
                                    </div>
                                </td>
                                <td class="border-l-2 border-gray-200 align-top">
                                    <div class="px-5 pt-5">
                                        <h2 class="font-medium text-gray-900 text-center">Premium</h2>
                                        <div class="mt-1 text-center">
                                            <span class="text-3xl font-semibold text-gray-900">$59</span>
                                            <span class="text-gray-600">/mo</span>
                                        </div>
                                        <p class="mt-2 mx-auto text-center text-sm text-gray-600 ">Advanced featured
                                            for scaling your business.</p>
                                        {{-- <a href="#"
                                            class="mt-4 max-w-xs mx-auto block px-3 py-2 text-sm text-center font-semibold text-white bg-gray-800 rounded-lg hover:bg-gray-700">
                                            Buy Premium
                                        </a> --}}
                                    </div>
                                </td>
                                <td class="border-l-2 border-gray-200 align-top">
                                    <div class="px-5 pt-5 font-medium text-gray-900 text-center">
                                        <h2 class="font-medium text-gray-900 text-center">Enterprice</h2>
                                        <div class="mt-1 text-center">
                                            <span class="text-3xl font-semibold text-gray-900">$299</span>
                                            <span class="text-gray-600">/mo</span>
                                        </div>
                                        <p class="mt-2 mx-auto text-center text-sm text-gray-600 ">All featured for
                                            scaling your business.</p>
                                        {{-- <a href="#"
                                            class="mt-4 max-w-xs mx-auto block px-3 py-2 text-sm text-center font-semibold text-white bg-gray-800 rounded-lg hover:bg-gray-700">
                                            Buy Enterprice
                                        </a> --}}
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-l-2 border-gray-200"></td>
                                <td class="border-l-2 border-gray-200">
                                    <div class=" px-5 py-5">
                                        <a href="#"
                                            class="max-w-xs mx-auto block px-3 py-2 text-sm text-center font-semibold text-white bg-gray-800 rounded-lg hover:bg-gray-700">
                                            Buy Enterprice
                                        </a>
                                    </div>
                                </td>
                                <td class="border-l-2 border-gray-200">
                                    <div class=" px-5 py-5">
                                        <a href="#"
                                            class="max-w-xs mx-auto block px-3 py-2 text-sm text-center font-semibold text-white bg-gray-800 rounded-lg hover:bg-gray-700">
                                            Buy Enterprice
                                        </a>
                                    </div>
                                </td>
                                <td class="border-l-2 border-gray-200">
                                    <div class=" px-5 py-5">
                                        <a href="#"
                                            class="max-w-xs mx-auto block px-3 py-2 text-sm text-center font-semibold text-white bg-gray-800 rounded-lg hover:bg-gray-700">
                                            Buy Enterprice
                                        </a>
                                    </div>
                                </td>
                                <td class="border-l-2 border-gray-200">
                                    <div class=" px-5 py-5">
                                        <a href="#"
                                            class="max-w-xs mx-auto block px-3 py-2 text-sm text-center font-semibold text-white bg-gray-800 rounded-lg hover:bg-gray-700">
                                            Buy Enterprice
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5"
                                    class="px-5 py-2 border-t-2 border-gray-200 bg-gray-100 text-xs text-left text-gray-700 font-semibold uppercase tracking-wide">
                                    Features
                                </td>
                            </tr>
                            <tr>
                                <td class="px-5 py-5 border-t-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                    Unlimited storage space
                                </td>
                                <td class="px-5 py-5 border-t-2 border-l-2 border-gray-200">
                                    <svg class="mx-auto h-6 w-6 fill-current text-green-700"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                    </svg>
                                </td>
                                <td class="px-5 py-5 border-t-2 border-l-2 border-gray-200">
                                    <svg class="mx-auto h-6 w-6 fill-current text-green-700"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                    </svg>
                                </td>
                                <td class="px-5 py-5 border-t-2 border-l-2 border-gray-200">
                                    <svg class="mx-auto h-6 w-6 fill-current text-green-700"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                    </svg>
                                </td>
                                <td class="px-5 py-5 border-t-2 border-l-2 border-gray-200">
                                    <svg class="mx-auto h-6 w-6 fill-current text-green-700"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                    </svg>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-5 py-5 border-t-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                    Unlimited uploads
                                </td>
                                <td class="px-5 py-5 border-t-2 border-l-2 border-gray-200 ">
                                    <svg class="mx-auto h-6 w-6 fill-current text-green-700"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                    </svg>
                                </td>
                                <td class="px-5 py-5 border-t-2 border-l-2 border-gray-200 ">
                                    <svg class="mx-auto h-6 w-6 fill-current text-green-700"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                    </svg>
                                </td>
                                <td class="px-5 py-5 border-t-2 border-l-2 border-gray-200 ">
                                    <svg class="mx-auto h-6 w-6 fill-current text-green-700"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                    </svg>
                                </td>
                                <td class="px-5 py-5 border-t-2 border-l-2 border-gray-200 ">
                                    <svg class="mx-auto h-6 w-6 fill-current text-green-700"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                    </svg>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-5 py-5 border-t-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                    Additional Team Member
                                </td>
                                <td class="px-5 py-5 border-t-2 border-l-2 border-gray-200 ">
                                    <svg class="mx-auto h-6 w-6 fill-current text-gray-400"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M0 10h24v4h-24z" />
                                    </svg>
                                </td>
                                <td class="px-5 py-5 border-t-2 border-l-2 border-gray-200 ">
                                    <svg class="mx-auto h-6 w-6 fill-current text-green-700"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                    </svg>
                                </td>
                                <td class="px-5 py-5 border-t-2 border-l-2 border-gray-200 ">
                                    <svg class="mx-auto h-6 w-6 fill-current text-green-700"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                    </svg>
                                </td>
                                <td class="px-5 py-5 border-t-2 border-l-2 border-gray-200 ">
                                    <svg class="mx-auto h-6 w-6 fill-current text-green-700"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                    </svg>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-5 py-5 border-t-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                    API Access
                                </td>
                                <td class="px-5 py-5 border-t-2 border-l-2 border-gray-200 ">
                                    <svg class="mx-auto h-6 w-6 fill-current text-gray-400"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M0 10h24v4h-24z" />
                                    </svg>
                                </td>
                                <td class="px-5 py-5 border-t-2 border-l-2 border-gray-200 ">
                                    <svg class="mx-auto h-6 w-6 fill-current text-gray-400"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M0 10h24v4h-24z" />
                                    </svg>
                                </td>
                                <td class="px-5 py-5 border-t-2 border-l-2 border-gray-200 ">
                                    <svg class="mx-auto h-6 w-6 fill-current text-green-700"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                    </svg>
                                </td>
                                <td class="px-5 py-5 border-t-2 border-l-2 border-gray-200 ">
                                    <svg class="mx-auto h-6 w-6 fill-current text-green-700"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                    </svg>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-5 py-5 border-t-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                    Dedicated support rep
                                </td>
                                <td class="px-5 py-5 border-t-2 border-l-2 border-gray-200 ">
                                    <svg class="mx-auto h-6 w-6 fill-current text-gray-400"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M0 10h24v4h-24z" />
                                    </svg>
                                </td>
                                <td class="px-5 py-5 border-t-2 border-l-2 border-gray-200 ">
                                    <svg class="mx-auto h-6 w-6 fill-current text-gray-400"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M0 10h24v4h-24z" />
                                    </svg>
                                </td>
                                <td class="px-5 py-5 border-t-2 border-l-2 border-gray-200 ">
                                    <svg class="mx-auto h-6 w-6 fill-current text-gray-400"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M0 10h24v4h-24z" />
                                    </svg>
                                </td>
                                <td class="px-5 py-5 border-t-2 border-l-2 border-gray-200 ">
                                    <svg class="mx-auto h-6 w-6 fill-current text-green-700"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                    </svg>
                                </td>
                            </tr>
                            <tr>
                                <th colspan="5"
                                    class="px-5 py-2 border-t-2 border-gray-200 bg-gray-100 text-xs text-left text-gray-700 font-semibold uppercase tracking-wide">
                                    Payments
                                </th>
                            </tr>

                            <tr>
                                <td class="px-5 py-5 border-t-2 border-gray-200 text-sm text-gray-900 ">
                                    Fraud analysis
                                </td>
                                <td class="px-5 py-5 border-t-2 border-l-2 border-gray-200">
                                    <svg class="mx-auto h-6 w-6 fill-current text-green-700"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                    </svg>
                                </td>
                                <td class="px-5 py-5 border-t-2 border-l-2 border-gray-200">
                                    <svg class="mx-auto h-6 w-6 fill-current text-green-700"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                    </svg>
                                </td>
                                <td class="px-5 py-5 border-t-2 border-l-2 border-gray-200">
                                    <svg class="mx-auto h-6 w-6 fill-current text-green-700"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                    </svg>
                                </td>
                                <td class="px-5 py-5 border-t-2 border-l-2 border-gray-200">
                                    <svg class="mx-auto h-6 w-6 fill-current text-green-700"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                    </svg>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-5 py-5 border-t-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                    Online credit card rates
                                </td>
                                <td
                                    class="px-5 py-5 border-t-2 border-l-2 border-gray-200 text-xs text-gray-700 text-center whitespace-no-wrap">
                                    2.9% + 30 &#162;
                                </td>
                                <td
                                    class="px-5 py-5 border-t-2 border-l-2 border-gray-200 text-xs text-gray-700 text-center whitespace-no-wrap">
                                    2.7% + 30 &#162;
                                </td>
                                <td
                                    class="px-5 py-5 border-t-2 border-l-2 border-gray-200 text-xs text-gray-700 text-center whitespace-no-wrap">
                                    2.5% + 30 &#162;
                                </td>
                                <td
                                    class="px-5 py-5 border-t-2 border-l-2 border-gray-200 text-xs text-gray-700 text-center whitespace-no-wrap">
                                    2.3% + 30 &#162;
                                </td>
                            </tr>
                            <tr>
                                <td class="px-5 py-5 border-t-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                    In-person credit card rates
                                </td>
                                <td
                                    class="px-5  py-5 border-t-2 border-l-2 border-gray-200 text-xs text-gray-700 text-center whitespace-no-wrap">
                                    2.7% + 0 &#162;
                                </td>
                                <td
                                    class="px-5  py-5 border-t-2 border-l-2 border-gray-200 text-xs text-gray-700 text-center whitespace-no-wrap">
                                    2.5% + 0 &#162;
                                </td>
                                <td
                                    class="px-5  py-5 border-t-2 border-l-2 border-gray-200 text-xs text-gray-700 text-center whitespace-no-wrap">
                                    2.4% + 0 &#162;
                                </td>
                                <td
                                    class="px-5  py-5 border-t-2 border-l-2 border-gray-200 text-xs text-gray-700 text-center whitespace-no-wrap">
                                    2.3% + 0 &#162;
                                </td>
                            </tr>
                            <tr>
                                <td class="px-5 py-5 border-t-2 border-gray-200 text-xs text-gray-800 font-semibold ">
                                    Additional fee using all Payment provider
                                </td>
                                <td
                                    class="px-5  py-5 border-t-2 border-l-2 border-gray-200  text-xs text-gray-700 text-center whitespace-no-wrap">
                                    2.0%
                                </td>
                                <td
                                    class="px-5  py-5 border-t-2 border-l-2 border-gray-200  text-xs text-gray-700 text-center whitespace-no-wrap">
                                    1.0%
                                </td>
                                <td
                                    class="px-5  py-5 border-t-2 border-l-2 border-gray-200  text-xs text-gray-700 text-center whitespace-no-wrap">
                                    0.5%
                                </td>
                                <td
                                    class="px-5  py-5 border-t-2 border-l-2 border-gray-200  text-xs text-gray-700 text-center whitespace-no-wrap">
                                    0.5%
                                </td>
                            </tr>
                            <tr>
                                <td class="border-t-2 border-l-2 border-gray-200"></td>
                                <td class="border-t-2 border-l-2 border-gray-200">
                                    <div class=" px-5 py-5">
                                        <a href="#"
                                            class="max-w-xs mx-auto block px-3 py-2 text-sm text-center font-semibold text-white bg-gray-800 rounded-lg hover:bg-gray-700">
                                            Buy Enterprice
                                        </a>
                                    </div>
                                </td>
                                <td class="border-t-2 border-l-2 border-gray-200">
                                    <div class=" px-5 py-5">
                                        <a href="#"
                                            class="max-w-xs mx-auto block px-3 py-2 text-sm text-center font-semibold text-white bg-gray-800 rounded-lg hover:bg-gray-700">
                                            Buy Enterprice
                                        </a>
                                    </div>
                                </td>
                                <td class="border-t-2 border-l-2 border-gray-200">
                                    <div class=" px-5 py-5">
                                        <a href="#"
                                            class="max-w-xs mx-auto block px-3 py-2 text-sm text-center font-semibold text-white bg-gray-800 rounded-lg hover:bg-gray-700">
                                            Buy Enterprice
                                        </a>
                                    </div>
                                </td>
                                <td class="border-t-2 border-l-2 border-gray-200">
                                    <div class=" px-5 py-5">
                                        <a href="#"
                                            class="max-w-xs mx-auto block px-3 py-2 text-sm text-center font-semibold text-white bg-gray-800 rounded-lg hover:bg-gray-700">
                                            Buy Enterprice
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!--end of DeskTop Price table-->
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="/js/tailwind-pricetable.js"></script>
    <!-- built fileddds will be auto injected -->
</body>
</html>