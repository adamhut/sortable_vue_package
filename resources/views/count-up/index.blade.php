<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--<link rel="stylesheet" href="https://unpkg.com/tailwindcss@0.5.2/dist/tailwind.min.css">-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <title>Count Up</title>
    <link href="{{ asset('css/count-up.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body class="bg-grey-lightest">
    
    <div id="app" class="min-h-screen bg-grey-light font-sans flex justify-center items-center">
        <div class="flex">
           <div class="bg-grey rounded-lg p-4 mx-4">
              <count-up :to="11"></count-up>
           </div>
            <div class="bg-grey rounded-lg p-4 mx-4">
              <count-up :to="5"></count-up>
           </div>
            <div class="bg-grey rounded-lg p-4 mx-4">
              <count-up :to="1955"></count-up>
           </div>
        </div>
       
    </div>
    <script type="text/javascript" src="/js/count-up.js"></script>
</body>
</html>