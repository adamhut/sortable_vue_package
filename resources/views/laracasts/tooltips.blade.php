<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/tooltips.css') }}" rel="stylesheet">

    <style>
       

    </style>

</head>

<body>
    <div class="" id="app">
        <h1>option1</h1>
        <p>
            Hello there , <span data-tooltip="I am a tooltips" data-tooltip-placment="right">hover over me</span>
        </p>

        <h2>option 2</h2>
        <p>
            Hello there , <span v-tooltip:top="'here i sthe hoardcode value'">hover over me</span>
        </p>


        <h3>option 3</h3>
        <p>
            Hello there , <span data-tooltip-name="our-product-tooltip">learn about our products </span>
        </p>

        <tooltip name="our-product-tooltip" placement="left" offset="0,20">
            <div class="p-2 w-64">
                <h1 class="mb-4">our Product</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                </p>
            </div>
        </tooltip>



    </div>
</body>

</html>