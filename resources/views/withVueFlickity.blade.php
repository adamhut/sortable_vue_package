<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@0.5.2/dist/tailwind.min.css">
    <title>Renderless Sortable Component</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <noscript>
        <strong>We're sorry but sortable-component doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
    </noscript>
    <div id="app">
        <carousel>
            <div>
            <img src="https://placeimg.com/640/480/any">
            <img src="https://placeimg.com/640/480/any?2">
            <img src="https://placeimg.com/640/480/any?3">
            <img src="https://placeimg.com/640/480/any?4">
            <img src="https://placeimg.com/640/480/any?5">
           </div>
        </carousel>

        <h2>another one</h2>

        <div style="width:500px;height:500px;">
            <carousel>
                <div>
                <img src="https://placeimg.com/640/480/any">
                <img src="https://placeimg.com/640/480/any?2">
                <img src="https://placeimg.com/640/480/any?3">
                <img src="https://placeimg.com/640/480/any?4">
                <img src="https://placeimg.com/640/480/any?5">
               </div>
            </carousel>

        </div>
    </div>
    <!-- built fileddds will be auto injected -->
    
    <script type="text/javascript" src="/js/app.js"></script>
</body>
</html>