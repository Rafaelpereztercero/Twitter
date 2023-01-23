@extends('components.header')

@vite('resources/css/app.css')

<body>
    
    @section('navbar')
    @endsection
    
    <h1 class="  text-center text-[4rem] mt-[10%] text-black">POSTS</h1>
    
    @foreach ($posts as $post) 
    <div class=" rounded-lg bg-gray-800 ml-[15%] mt-[5%] w-[75%] p-10 mb-4">
        <div class="flex justify-between">
            <p class="text-white ml-[1rem] text-[2.4rem]">{{$post->title}}</p>
            <p class="text-gray-500 ml-[1rem] text-[1.4rem]">{{$post->user_id }}</p>
        </div>
        <div class="ml-[1%] mt-[3%]">
            <p class=" text-white ml-[1rem] text-[1.7rem]">{{$post->extract}}</p>

        </div>
        <div class="mt-[2%]">
            <p class="text-white ml-[1rem] text-[1rem]">
                {{$post->content}}
            </p>
        </div>
        <div class="mt-[5%] flex justify-between text-white">
        <div class="w-[20%]">
            <div class="w-[60%] flex justify-around items-center">
            <p class="">Privacy:</p>
            @if ($post->acceso  === False) 
                <p class="p-[1rem] bg-gray-400 rounded-lg">Private</p>
                
                
        
            @else
            <p class="p-[1rem] bg-gray-400 rounded-lg">Public </p>
            @endif
            </div>
            <div class=" mt-[15%] flex justify-between ">
                @if ($post->user_id == Auth::user()->id)
                <img class=" w-[2rem] bg-white rounded-lg"src="pen.svg">
                <img class="w-[2rem] bg-white rounded-lg" src="tr.svg">
                @endif
                @if ($post->comentable == True)
                <img class="w-[2rem] bg-white rounded-lg" src="comm.svg">
                @endif
            </div>
        </div>
            <p class="self-end text-[1.4rem]">{{$post->created_at}}</p>
        </div>
    </div>
    @endforeach
     



</body>

</html>
