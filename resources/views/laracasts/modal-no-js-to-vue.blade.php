<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>modal</title>
    <link rel="stylesheet" href="{{asset('/css/laracasts-modal.css')}}">

    <style>
       
    </style>
</head>

<body>
    <div id="app" class="text-center">
        <h1 class="text-2xl font-bold mb-8">Modal</h1>
    
        <p>
            <a href="#cancel-modal" class="text-blue-500 underline">Open Modal</a>
        </p>
        
        <modal name="cancel-modal">
            <h1 class="font-bold text-xl mb-2">Leaving so Soon?</h1>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque asperiores laudantium debitis! Eaque doloremque quas debitis quae voluptatibus, saepe illo iusto accusamus deleniti beatae officia voluptates, accusantium possimus eligendi quidem?
            </p>

            <template v-slot:footer>
                <a class="bg-gray-500 py-2 px-4 rounded-lg text-white hover:bg-gray-600 mr-2" href="#">Cancel</a>
                <a class="bg-blue-500 py-2 px-4 rounded-lg text-white hover:bg-blue-600 mr-2" href="#confirm-cancel-modal">Confirm cancellation</a>
            </template>
        </modal>

        <modal name="confirm-cancel-modal">
            <h1 class="font-bold text-xl mb-2">Are you 100% sure?</h1>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque asperiores laudantium debitis! Eaque doloremque
                quas debitis quae voluptatibus, saepe illo iusto accusamus deleniti beatae officia voluptates, accusantium
                possimus eligendi quidem?
            </p>
        
            <template v-slot:footer>
                <button class="bg-gray-500 py-2 px-4 rounded-lg text-white hover:bg-gray-600 mr-2" @click="$modal.hide('hide-modal')">Cancel</button>
                <a class="bg-blue-500 py-2 px-4 rounded-lg text-white hover:bg-blue-600 mr-2" href="#">Yes</a>
            </template>
        </modal>
    </div>
<script src="{{asset('js/laracasts-modal.js')}}"></script>
</body>

</html>