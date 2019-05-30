<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>modal</title>
    <link rel="stylesheet" href="{{asset('/css/smooth-scroll.css')}}">

    <style>
        .overlay{
            visibility: hidden;
        }

        .overlay:target{
            visibility: visible;
        }
        
    </style>
</head>
<body>
    <a href="#join-modal">Join</a>


    

    @component('laracasts.component.modal',['name'=>'join-modal'])
        <h1 class="text-3xl font-bold"> Pick a Plan</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur aperiam quidem perspiciatis totam animi in
            cumque possimus nostrum quam suscipit quos quisquam culpa, rerum, ratione iste illum voluptas molestiae
            dolorem?
        </p>
        
    @endcomponent
</body>
</html>