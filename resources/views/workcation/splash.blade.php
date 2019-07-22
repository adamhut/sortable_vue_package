<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--<link rel="stylesheet" href="https://unpkg.com/tailwindcss@0.5.2/dist/tailwind.min.css">-->
    <title>Testmonials Component</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="{{ asset('css/workcation.css') }}" rel="stylesheet">

</head>

<body class="antialiased">
    <div class="relative bg-gray-200">
        <div class="absolute inset-0 flex flex-col" aria-hidden="true">
            <div class="flex-1 bg-gray-100"></div>
            <div class="flex-1 bg-gray-200"></div>
            <div class="bg-repeat-x bg-center absolute inset-0"
                style="background-image: url(&quot;data:image/svg+xml,%3Csvg width='1440' height='190' viewBox='0 0 1440 190' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='%23F7FAFC' d='M1440 0H0v190h1440V0z'/%3E%3Cpath fill='%23EDF2F7' d='M1440 95s-202.82 45-360 45c-157.183 0-360-45-360-45S517.182 50 360 50C202.817 50 0 95 0 95v95h1440V95z'/%3E%3Cpath fill='%23E2E8F0' d='M1440 93.907l-.26.113-.11.05-.03.012v.003s-.01 0 .04.098c.05.108.15.336.36.817l-.41-.913v.003l-.03.012-.11.048-.44.192-.31.136c-.17.077-.38.165-.6.264l-.81.35a754.49 754.49 0 0 1-6.7 2.853c-5.85 2.459-14.38 5.971-25.1 10.187a1440.735 1440.735 0 0 1-86.85 30.916C1248.31 161.539 1158.43 184 1080 184c-78.43 0-168.315-22.461-238.64-44.952a1439.162 1439.162 0 0 1-86.849-30.916 1157.701 1157.701 0 0 1-25.102-10.187 707.198 707.198 0 0 1-7.745-3.307l-.472-.206-.204-.09-.437-.192-.11-.048-.027-.012-.007-.003s-.002-.001-.363.812l.274-.617c.086-.196.085-.197.085-.197l-.008-.003-.028-.013-.112-.05-.441-.193c-.39-.171-.97-.424-1.734-.755a717.813 717.813 0 0 0-6.715-2.86 1159.897 1159.897 0 0 0-25.146-10.204 1439.927 1439.927 0 0 0-86.971-30.96C528.868 26.54 438.749 4 359.999 4 281.25 4 191.131 26.539 120.751 49.047a1440.116 1440.116 0 0 0-86.971 30.96A1160.572 1160.572 0 0 0 8.634 90.21c-2.93 1.232-5.189 2.2-6.716 2.86-.763.33-1.343.584-1.733.755L0 93.907v2.186l.255-.113.147-.065S.405 95.914 0 95l.345.777c.06.137.062.136.062.136l.007-.003.137-.06.436-.192a717.078 717.078 0 0 1 8.421-3.603c5.847-2.459 14.376-5.971 25.103-10.187a1438.178 1438.178 0 0 1 86.849-30.915C191.685 28.46 281.566 6 359.999 6c78.434 0 168.315 22.461 238.639 44.953a1438.284 1438.284 0 0 1 86.85 30.915 1158.411 1158.411 0 0 1 25.102 10.187 707.198 707.198 0 0 1 8.421 3.603l.437.192.11.048.027.012.007.003s.002.001.408-.913l-.324.73c-.081.184-.08.185-.08.185l.008.003.028.013.112.05.441.193.303.133a241.676 241.676 0 0 0 1.431.622c1.526.66 3.785 1.628 6.715 2.86a1159.053 1159.053 0 0 0 25.146 10.204 1438.983 1438.983 0 0 0 86.971 30.959C911.131 163.461 1001.25 186 1080 186s168.87-22.539 239.25-45.048a1440.417 1440.417 0 0 0 86.97-30.959c10.74-4.222 19.29-7.74 25.15-10.204 2.92-1.232 5.18-2.2 6.71-2.86l.83-.36c.37-.16.67-.292.9-.395l.19-.081v-2.186z'/%3E%3Cpath fill='%23E2E8F0' d='M1440 93.976l-.21.046-.01.001.16.72-.1-.478-.03-.123c-.02-.068-.02-.096-.03-.109v-.009l-.01.002-.02.006-.55.12-1.73.376c-1.52.33-3.77.812-6.7 1.427-5.85 1.23-14.38 2.987-25.11 5.095-21.46 4.217-51.71 9.84-86.88 15.463C1248.45 127.76 1158.51 139 1080 139c-78.51 0-168.453-11.24-238.787-22.487a2518.4 2518.4 0 0 1-86.876-15.463 1959.635 1959.635 0 0 1-25.111-5.095 1199.575 1199.575 0 0 1-8.427-1.803l-.548-.12-.027-.006-.007-.002s-.002 0-.218.976c.216-.976.214-.977.214-.977l-.007-.001-.58-.128c-.389-.085-.969-.212-1.732-.377-1.526-.33-3.783-.814-6.712-1.43a1956.48 1956.48 0 0 0-25.137-5.1A2520.12 2520.12 0 0 0 599.1 71.513C528.73 60.26 438.669 49 359.999 49c-78.671 0-168.732 11.26-239.102 22.513a2520.176 2520.176 0 0 0-86.945 15.474 1960.39 1960.39 0 0 0-25.137 5.1A1190.033 1190.033 0 0 0 .37 93.895L0 93.976v2.048l.067-.015.14-.03.007-.002-.026-.123L0 95.002c.216.974.218.974.218.974l.144-.032.438-.096 1.727-.376c1.522-.33 3.776-.812 6.7-1.427 5.849-1.23 14.381-2.987 25.111-5.095a2517.66 2517.66 0 0 1 86.876-15.463C191.547 62.24 281.486 51 359.999 51c78.512 0 168.451 11.24 238.785 22.487A2518.293 2518.293 0 0 1 685.66 88.95a1959.635 1959.635 0 0 1 25.111 5.095 1199.575 1199.575 0 0 1 8.427 1.803l.548.12.027.006.007.002s.002 0 .2-.893l-.159.718c-.038.175-.037.176-.037.176l.008.001.579.128c.389.085.969.212 1.732.377 1.526.33 3.783.814 6.712 1.43a1952.92 1952.92 0 0 0 25.137 5.099 2518.171 2518.171 0 0 0 86.945 15.475C911.267 129.74 1001.33 141 1080 141c78.67 0 168.73-11.26 239.1-22.513a2519.232 2519.232 0 0 0 86.95-15.475c10.73-2.11 19.28-3.868 25.13-5.1a1059.51 1059.51 0 0 0 8.45-1.806l.37-.082v-2.048z'/%3E%3Cpath fill='%23E2E8F0' fill-rule='evenodd' clip-rule='evenodd' d='M0 96.006l.107-.012c.002 0 .002 0-.107-.992.11.992.11.992.112.992l2.31-.252c1.524-.165 3.778-.407 6.704-.714 5.85-.615 14.385-1.494 25.117-2.548a4862.202 4862.202 0 0 1 86.892-7.733C191.478 79.123 281.447 73.5 359.999 73.5c78.552 0 168.521 5.623 238.864 11.247a4861.657 4861.657 0 0 1 86.892 7.733 3742.387 3742.387 0 0 1 25.118 2.548 2286.348 2286.348 0 0 1 8.431.901l.583.065c.001 0 .002 0 .112-.994-.11.994-.109.994-.108.994h.007l2.31.253c1.525.165 3.781.407 6.709.714 5.854.616 14.393 1.495 25.131 2.55a4859.339 4859.339 0 0 0 86.928 7.736C911.337 112.873 1001.37 118.5 1080 118.5s168.66-5.627 239.02-11.253c35.19-2.813 65.46-5.626 86.93-7.736 10.74-1.055 19.28-1.934 25.13-2.55a2033.552 2033.552 0 0 0 8.44-.902l.48-.053v-2.012l-.1.011h-.01l.11.995-.09-.77-.02-.224-2.31.252c-1.53.165-3.78.407-6.71.714-5.85.615-14.38 1.494-25.11 2.548-21.47 2.11-51.73 4.921-86.9 7.733-70.34 5.624-160.31 11.247-238.86 11.247-78.55 0-168.522-5.623-238.865-11.247a4862.892 4862.892 0 0 1-86.892-7.733 3742.387 3742.387 0 0 1-25.118-2.548 2277.852 2277.852 0 0 1-8.43-.901l-.583-.065c-.002 0-.002 0-.113.994.111-.994.11-.994.108-.994h-.007l-.579-.065-1.73-.188c-1.525-.165-3.781-.407-6.709-.714a3745.292 3745.292 0 0 0-25.131-2.55 4864.24 4864.24 0 0 0-86.928-7.736C528.661 77.127 438.63 71.5 359.999 71.5s-168.662 5.627-239.023 11.253a4863.999 4863.999 0 0 0-86.928 7.736 3742.04 3742.04 0 0 0-25.132 2.55 2268.477 2268.477 0 0 0-8.44.902L0 93.994v2.012z'/%3E%3Cpath fill='%234FD1C5' d='M1440 93.947l-.17.055-.11.037-.03.009v.002s-.01.001.31.95l-.32-.948-.01.002-.13.046-.44.144-.61.2a873.156 873.156 0 0 1-7.81 2.503c-5.85 1.844-14.38 4.479-25.11 7.641a1777.105 1777.105 0 0 1-86.86 23.19C1248.38 144.647 1158.47 161.5 1080 161.5s-168.383-16.853-238.711-33.722a1777.81 1777.81 0 0 1-86.861-23.19 1402.035 1402.035 0 0 1-25.106-7.641 870.248 870.248 0 0 1-8.424-2.703l-.437-.144-.137-.046-.007-.002L720 95c.315-.949.313-.95.313-.95l-.007-.002-.029-.01-.111-.036-.441-.146-.55-.18-1.183-.385a862.55 862.55 0 0 0-6.713-2.145 1407.05 1407.05 0 0 0-25.143-7.652 1778.897 1778.897 0 0 0-86.96-23.216C528.8 43.397 438.71 26.5 360 26.5c-78.711 0-168.801 16.897-239.177 33.778a1778.72 1778.72 0 0 0-86.96 23.216A1405.413 1405.413 0 0 0 8.72 91.146a864.836 864.836 0 0 0-8.447 2.71l-.274.09v2.107l.166-.055.111-.037.029-.009.007-.002S.315 95.949 0 95c.315.949.317.948.317.948l.007-.002.137-.046.437-.144.478-.156c.338-.11.754-.247 1.248-.407a864.594 864.594 0 0 1 6.698-2.14 1404.557 1404.557 0 0 1 25.106-7.64 1776.958 1776.958 0 0 1 86.861-23.19C191.617 45.352 281.527 28.5 360 28.5c78.472 0 168.382 16.853 238.71 33.722a1777.138 1777.138 0 0 1 86.861 23.19 1404.185 1404.185 0 0 1 25.106 7.641 856.118 856.118 0 0 1 8.424 2.703l.437.144.137.046.007.002s.002 0 .318-.948c-.316.949-.314.95-.314.95l.007.002.029.01.111.036.441.146a412.648 412.648 0 0 0 1.733.565c1.526.495 3.785 1.221 6.713 2.145a1403.02 1403.02 0 0 0 25.143 7.652 1778.488 1778.488 0 0 0 86.96 23.216C911.199 146.603 1001.29 163.5 1080 163.5c78.71 0 168.8-16.897 239.18-33.778a1782.519 1782.519 0 0 0 86.96-23.216c10.74-3.166 19.28-5.804 25.14-7.652a766.601 766.601 0 0 0 8.45-2.71l.27-.09v-2.107z'/%3E%3C/svg%3E%0A&quot;);">
            </div>
        </div>
        <div class="relative max-w-5xl mx-auto">
            <div class="flex flex-col min-h-screen lg:flex-row lg:items-center lg:p-8">
                <div class="flex flex-col flex-grow bg-white lg:shadow-2xl lg:rounded-lg lg:overflow-hidden">
                    <div class="flex-grow flex flex-col justify-center p-12">
                        <div class="flex items-center">
                            <svg class="h-10 sm:h-12" viewBox="0 0 60 60" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M30 14c-7.2 0-11.7 3.6-13.5 10.8 2.7-3.6 5.85-4.95 9.45-4.05 2.054.514 3.522 2.004 5.147 3.653C33.744 27.09 36.808 30.2 43.5 30.2c7.2 0 11.7-3.6 13.5-10.8-2.7 3.6-5.85 4.95-9.45 4.05-2.054-.514-3.522-2.004-5.147-3.653C39.756 17.11 36.692 14 30 14zM16.5 30.2C9.3 30.2 4.8 33.8 3 41c2.7-3.6 5.85-4.95 9.45-4.05 2.054.514 3.522 2.004 5.147 3.653C20.244 43.29 23.308 46.4 30 46.4c7.2 0 11.7-3.6 13.5-10.8-2.7 3.6-5.85 4.95-9.45 4.05-2.054-.514-3.522-2.004-5.147-3.653C26.256 33.31 23.192 30.2 16.5 30.2z"
                                    fill="url(#logo-gradient)" />
                                <defs>
                                    <linearGradient id="logo-gradient" x1="1.5" y1="14" x2="57" y2="46"
                                        gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#2298BD" />
                                        <stop offset="1" stop-color="#0ED7B5" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <svg class="h-10 ml-4" viewBox="0 0 196 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="fill-current text-gray-800" clip-rule="evenodd"
                                    d="M13.996 28.652H9.284v9.12c0 2.432 1.596 2.394 4.712 2.242V43.7c-6.308.76-8.816-.988-8.816-5.928v-9.12H1.684V24.7H5.18v-5.104l4.104-1.216v6.32h4.712v3.952zM31.958 24.7h4.104v19h-4.104v-2.736c-1.444 2.014-3.686 3.23-6.65 3.23-5.168 0-9.462-4.37-9.462-9.994 0-5.662 4.294-9.994 9.462-9.994 2.964 0 5.206 1.216 6.65 3.192V24.7zm-6.004 15.58c3.42 0 6.004-2.546 6.004-6.08 0-3.534-2.584-6.08-6.004-6.08-3.42 0-6.004 2.546-6.004 6.08 0 3.534 2.584 6.08 6.004 6.08zm16.948-18.43c-1.444 0-2.622-1.216-2.622-2.622a2.627 2.627 0 0 1 2.622-2.622 2.627 2.627 0 0 1 2.622 2.622c0 1.406-1.178 2.622-2.622 2.622zM40.85 43.7v-19h4.104v19H40.85zm8.854 0V15.96h4.104V43.7h-4.104zm30.742-19h4.332l-5.966 19h-4.028l-3.952-12.806-3.99 12.806h-4.028l-5.966-19h4.332l3.686 13.11 3.99-13.11h3.914l3.952 13.11 3.724-13.11zm9.424-2.85c-1.444 0-2.622-1.216-2.622-2.622a2.627 2.627 0 0 1 2.622-2.622 2.627 2.627 0 0 1 2.622 2.622c0 1.406-1.178 2.622-2.622 2.622zM87.818 43.7v-19h4.104v19h-4.104zm18.848-19.494c4.256 0 7.296 2.888 7.296 7.828V43.7h-4.104V32.452c0-2.888-1.672-4.408-4.256-4.408-2.698 0-4.826 1.596-4.826 5.472V43.7h-4.104v-19h4.104v2.432c1.254-1.976 3.306-2.926 5.89-2.926zm26.752-7.106h4.104v26.6h-4.104v-2.736c-1.444 2.014-3.686 3.23-6.65 3.23-5.168 0-9.462-4.37-9.462-9.994 0-5.662 4.294-9.994 9.462-9.994 2.964 0 5.206 1.216 6.65 3.192V17.1zm-6.004 23.18c3.42 0 6.004-2.546 6.004-6.08 0-3.534-2.584-6.08-6.004-6.08-3.42 0-6.004 2.546-6.004 6.08 0 3.534 2.584 6.08 6.004 6.08zm23.864 3.914c-5.738 0-10.032-4.37-10.032-9.994 0-5.662 4.294-9.994 10.032-9.994 3.724 0 6.954 1.938 8.474 4.902l-3.534 2.052c-.836-1.786-2.698-2.926-4.978-2.926-3.344 0-5.89 2.546-5.89 5.966 0 3.42 2.546 5.966 5.89 5.966 2.28 0 4.142-1.178 5.054-2.926l3.534 2.014c-1.596 3.002-4.826 4.94-8.55 4.94zm15.314-14.25c0 3.458 10.222 1.368 10.222 8.398 0 3.8-3.306 5.852-7.41 5.852-3.8 0-6.536-1.71-7.752-4.446l3.534-2.052c.608 1.71 2.128 2.736 4.218 2.736 1.824 0 3.23-.608 3.23-2.128 0-3.382-10.222-1.482-10.222-8.284 0-3.572 3.078-5.814 6.954-5.814 3.116 0 5.7 1.444 7.03 3.952l-3.458 1.938c-.684-1.482-2.014-2.166-3.572-2.166-1.482 0-2.774.646-2.774 2.014zm17.518 0c0 3.458 10.222 1.368 10.222 8.398 0 3.8-3.306 5.852-7.41 5.852-3.8 0-6.536-1.71-7.752-4.446l3.534-2.052c.608 1.71 2.128 2.736 4.218 2.736 1.824 0 3.23-.608 3.23-2.128 0-3.382-10.222-1.482-10.222-8.284 0-3.572 3.078-5.814 6.954-5.814 3.116 0 5.7 1.444 7.03 3.952l-3.458 1.938c-.684-1.482-2.014-2.166-3.572-2.166-1.482 0-2.774.646-2.774 2.014z" />
                            </svg>
                        </div>
                        <div class="md:pl-16 pl-0">
                            <h1 class="sm:font-light text-2xl sm:text-3xl md:text-4xl text-gray-900 mt-6">Welcome to
                                your first Tailwind project!</h1>
                            <p class="sm:text-xl text-gray-600 mt-3 leading-relaxed">The file you're looking at is the
                                <span
                                    class="font-mono bg-gray-200 text-sm sm:text-base text-gray-700 subpixel-antialiased px-1 rounded">index.html</span>
                                file in the repository you just cloned. If you used <span
                                    class="font-mono bg-gray-200 text-sm sm:text-base text-gray-700 subpixel-antialiased px-1 rounded">npm
                                    run serve</span> to view this page, try editing that file to see this page
                                automatically update with your changes.</p>
                        </div>
                    </div>
                    <div class="bg-gray-100 border-t-2 border-gray-200">
                        <div class="flex flex-wrap">
                            <div
                                class="flex flex-col px-12 py-10 w-full sm:w-1/2 sm:border-r sm:border-b border-gray-200">
                                <div class="flex flex-grow">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="h-8 w-8 md:h-10 md:w-10 md:-my-1">
                                            <g>
                                                <path class="fill-current text-gray-400"
                                                    d="M12 21a2 2 0 0 1-1.41-.59l-.83-.82A2 2 0 0 0 8.34 19H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4a5 5 0 0 1 4 2v16z" />
                                                <path class="fill-current text-gray-700"
                                                    d="M12 21V5a5 5 0 0 1 4-2h4a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1h-4.34a2 2 0 0 0-1.42.59l-.83.82A2 2 0 0 1 12 21z" />
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="leading-relaxed flex flex-col ml-4 md:ml-6">
                                        <h2 class="font-medium text-gray-800 text-lg">Documentation</h2>
                                        <p class="text-gray-600 mt-1 text-sm md:text-base">Get familiar with Tailwind’s
                                            utility-first approach and start building awesome stuff.</p>
                                        <div class="pt-1 mt-auto">
                                            <a class="inline-flex items-center text-teal-600 hover:text-teal-800"
                                                href="https://tailwindcss.com/docs">
                                                <span class="text-sm md:text-base font-semibold">Explore the docs</span>
                                                <svg class="fill-current w-4 h-4 ml-2" viewBox="0 0 18 12"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M14.5858 7H1C0.447715 7 0 6.55228 0 6C0 5.44772 0.447715 5 1 5H14.5858L11.2929 1.70711C10.9024 1.31658 10.9024 0.683418 11.2929 0.292893C11.6834 -0.0976311 12.3166 -0.0976311 12.7071 0.292893L17.7071 5.29289C18.0976 5.68342 18.0976 6.31658 17.7071 6.70711L12.7071 11.7071C12.3166 12.0976 11.6834 12.0976 11.2929 11.7071C10.9024 11.3166 10.9024 10.6834 11.2929 10.2929L14.5858 7Z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex flex-col px-12 py-10 w-full sm:w-1/2 border-t-2 sm:border-t-0 sm:border-l sm:border-b border-gray-200">
                                <div class="flex flex-grow">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="h-8 w-8 md:h-10 md:w-10 md:-my-1">
                                            <path class="fill-current text-gray-400"
                                                d="M3 6l9 4v12l-9-4V6zm14-3v2c0 1.1-2.24 2-5 2s-5-.9-5-2V3c0 1.1 2.24 2 5 2s5-.9 5-2z" />
                                            <polygon class="fill-current text-gray-700"
                                                points="21 6 12 10 12 22 21 18" />
                                        </svg>
                                    </div>
                                    <div class="flex flex-col leading-relaxed ml-4 md:ml-6">
                                        <h2 class="font-medium text-gray-800 text-lg">Component Examples</h2>
                                        <p class="text-gray-600 mt-1 text-sm md:text-base">Browse pre-built components
                                            using Tailwind’s utility classes. </p>
                                        <div class="pt-1 mt-auto">
                                            <a class="inline-flex items-center text-teal-600 hover:text-teal-800"
                                                href="https://tailwindcss.com/components">
                                                <span class="text-sm md:text-base font-semibold">Browse examples</span>
                                                <svg class="fill-current w-4 h-4 ml-2" viewBox="0 0 18 12"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M14.5858 7H1C0.447715 7 0 6.55228 0 6C0 5.44772 0.447715 5 1 5H14.5858L11.2929 1.70711C10.9024 1.31658 10.9024 0.683418 11.2929 0.292893C11.6834 -0.0976311 12.3166 -0.0976311 12.7071 0.292893L17.7071 5.29289C18.0976 5.68342 18.0976 6.31658 17.7071 6.70711L12.7071 11.7071C12.3166 12.0976 11.6834 12.0976 11.2929 11.7071C10.9024 11.3166 10.9024 10.6834 11.2929 10.2929L14.5858 7Z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex flex-col px-12 py-10 w-full sm:w-1/2 border-t-2 sm:border-r sm:border-t border-gray-200">
                                <div class="flex flex-grow">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="h-8 w-8 md:h-10 md:w-10 md:-my-1">
                                            <path class="fill-current text-gray-400"
                                                d="M9 22c.19-.14.37-.3.54-.46L17.07 14H20a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H9zM4 2h4a2 2 0 0 1 2 2v14a4 4 0 1 1-8 0V4c0-1.1.9-2 2-2zm2 17.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                            <path class="fill-current text-gray-700"
                                                d="M11 18.66V7.34l2.07-2.07a2 2 0 0 1 2.83 0l2.83 2.83a2 2 0 0 1 0 2.83L11 18.66z" />
                                        </svg>
                                    </div>
                                    <div class="flex flex-col leading-relaxed ml-4 md:ml-6">
                                        <h2 class="font-medium text-gray-800 text-lg">Resources</h2>
                                        <p class="text-gray-600 mt-1 text-sm md:text-base">A collection of assets and
                                            resources to help supercharge your Tailwind workflow.</p>
                                        <div class="pt-1 mt-auto">
                                            <a class="inline-flex items-center text-teal-600 hover:text-teal-800"
                                                href="https://tailwindcss.com/resources">
                                                <span class="text-sm md:text-base font-semibold">Find resources</span>
                                                <svg class="fill-current w-4 h-4 ml-2" viewBox="0 0 18 12"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M14.5858 7H1C0.447715 7 0 6.55228 0 6C0 5.44772 0.447715 5 1 5H14.5858L11.2929 1.70711C10.9024 1.31658 10.9024 0.683418 11.2929 0.292893C11.6834 -0.0976311 12.3166 -0.0976311 12.7071 0.292893L17.7071 5.29289C18.0976 5.68342 18.0976 6.31658 17.7071 6.70711L12.7071 11.7071C12.3166 12.0976 11.6834 12.0976 11.2929 11.7071C10.9024 11.3166 10.9024 10.6834 11.2929 10.2929L14.5858 7Z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex flex-col px-12 py-10 w-full sm:w-1/2 border-t-2 sm:border-l sm:border-t border-gray-200">
                                <div class="flex flex-grow">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="h-8 w-8 md:h-10 md:w-10 md:-my-1">
                                            <path class="fill-current text-gray-400"
                                                d="M20.3 12.04l1.01 3a1 1 0 0 1-1.26 1.27l-3.01-1a7 7 0 1 1 3.27-3.27zM11 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                            <path class="fill-current text-gray-700"
                                                d="M15.88 17.8a7 7 0 0 1-8.92 2.5l-3 1.01a1 1 0 0 1-1.27-1.26l1-3.01A6.97 6.97 0 0 1 5 9.1a9 9 0 0 0 10.88 8.7z" />
                                        </svg>
                                    </div>
                                    <div class="flex flex-col leading-relaxed ml-4 md:ml-6">
                                        <h2 class="font-medium text-gray-800 text-lg">Community</h2>
                                        <p class="text-gray-600 mt-1 text-sm md:text-base">Connect and learn from other
                                            Tailwind users in the community.</p>
                                        <div class="pt-1 mt-auto">
                                            <a class="inline-flex items-center text-teal-600 hover:text-teal-800"
                                                href="https://tailwindcss.com/community">
                                                <span class="text-sm md:text-base font-semibold">Connect</span>
                                                <svg class="fill-current w-4 h-4 ml-2" viewBox="0 0 18 12"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M14.5858 7H1C0.447715 7 0 6.55228 0 6C0 5.44772 0.447715 5 1 5H14.5858L11.2929 1.70711C10.9024 1.31658 10.9024 0.683418 11.2929 0.292893C11.6834 -0.0976311 12.3166 -0.0976311 12.7071 0.292893L17.7071 5.29289C18.0976 5.68342 18.0976 6.31658 17.7071 6.70711L12.7071 11.7071C12.3166 12.0976 11.6834 12.0976 11.2929 11.7071C10.9024 11.3166 10.9024 10.6834 11.2929 10.2929L14.5858 7Z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- built fileddds will be auto injected -->
</body>

</html>