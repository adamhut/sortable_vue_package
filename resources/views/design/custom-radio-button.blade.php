<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--<link rel="stylesheet" href="https://unpkg.com/tailwindcss@0.5.2/dist/tailwind.min.css">-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <title>Custom Radio Button</title>
    <link href="{{ asset('css/custom-radio-button.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
    <div class="min-h-screen bg-grey-light font-sans" id="app">
        <div class="mx-auto container md:w-custom">
            <div class="md:flex md:justify-between  pb-6 pt-8 items-end border-b-2 border-grey">
                <div class="text-2xl text-blue-darker md:mb-0 mb-4">
                    Change Plans
                </div>

                <div>
                    <a href="#" class="no-underline text-blue-darker hover:underline">Cancel Your Plan</a>
                </div>

            </div>
        </div>
        <selectable-plans></selectable-plans>
    </div>
    <script type="text/javascript" src="/js/custom-radio-button.js"></script>
</body>
</html>