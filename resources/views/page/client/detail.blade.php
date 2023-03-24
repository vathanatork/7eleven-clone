@extends('../page/client/layout/app')

@section("content")

{{-- main product --}}
<section class="bg-7elven-gray xl:px-40 lg:px-10 md:flex md:px-5 md:mt-32 mt-20 ">
    {{-- titlte --}}
    <div class="md:hidden font-bold px-5">
        <h2 class="text-md uppercase">< {{$product->category->Name}}</h2>
        <h1 class="text-2xl">{{$product->title}}</h1>
    </div>
    {{-- image --}}
    <div class="w-full h-fit">
        <img class="w-full h-full object-cover" src="{!!asset('img/'.$product->image)!!}" alt="image">
    </div>
    {{-- description --}}
    <div class=" lg:gap-8 md:shrink-1 md:items-start px-5 py-5 font-normal flex flex-col items-center gap-6">
        {{-- titlte --}}
        <div class="xs:hidden md:block font-bold">
            <h2 class="lg:text-2xl text-md uppercase">< {{$product->category->Name}}</h2>
            <h1 class="xl:text-5xl lg:text-5xl text-3xl">{{$product->title}}</h1>
        </div>
        {{-- description --}}
        <p class="xl:max-w-5xl xl:text-3xl lg:max-w-3xl lg:text-2xl  md:font-semibold md:text-md max-w-3xl">{{$product->description}}</p>
        <a href="#"><button class="bg-7eleven font-bold text-white px-5 py-2 rounded-3xl">Order Now</button></a>
    </div>

</section>

@endsection