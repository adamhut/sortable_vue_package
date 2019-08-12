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

    <link href="{{ asset('css/coders-tape.css') }}" rel="stylesheet">

</head>

<body class="bg-gray-200">
    <div id="app" class="bg-gray-200 antialiased min-h-screen flex justify-center mt-16">
        <auto-complete></auto-complete>
    </div>
    <script type="text/javascript" src="/js/coders-tape.js"></script>
    <!-- built fileddds will be auto injected -->
</body>

</html>