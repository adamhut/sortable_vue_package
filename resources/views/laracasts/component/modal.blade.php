<div id="{{$name}}" class="overlay absolute top-0 bottom-0 right-0 left-0 flex justify-center items-center"
    style="background:rgba(0,0,0,.7)">
    <a href="#" class="absolute w-full h-full"></a>
    <div class="modal w-128 max-w-128 bg-white rounded-lg p-4 relative text-black  opacity-100 ">
        {{$slot}}
        <a href="#" class="absolute top-0 text-2xl text-gray-600 right-0 hover:no-underline" style="right:15px;">&times;</a>
    </div>
</div>