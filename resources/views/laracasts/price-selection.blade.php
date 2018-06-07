<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Price Plain</title>

  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    
    <link href="{{ asset('css/price-selection.css') }}" rel="stylesheet">
</head>
<body class="font-serief p-6">
    <div class="container mx-auto flex justify-between">
        @include('laracasts.plan',['plan'=>1,'name'=>'Monthly'])

        @include('laracasts.plan',['plan'=>2,'name'=>'Yearly'])

        @include('laracasts.plan',['plan'=>3,'name'=>'Liftime'])

        @include('laracasts.plan',['plan'=>4,'name'=>'Teams'])
    </div>
</body>
</html>