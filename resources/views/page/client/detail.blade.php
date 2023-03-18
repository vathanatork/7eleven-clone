@extends('../page/client/layout/app')

@section("content")

{{-- main product --}}
<section class="lg:px-40 md:px-10 px-5 py-10  text-gray-700 body-font overflow-hidden bg-white">
    <div class="sm:flex-row justify-center w-full h-96 flex flex-col gap-8">
        <div class='sm:w-1/3 sm:h-full w-full flex justify-center'>
            <img class='sm:w-full sm:h-full sm:object-right w-full object-cover object-center'src="{!!asset('img/'.$product->image)!!}" alt="image product">
        </div>
        <div class='sm:items-start flex flex-col gap-3 justify-center items-center'>
            <h3 class='font-semibold text-3xl'>{{$product->category->Name}}</h3>
            <h1 class='font-bold text-4xl'>{{$product->title}}</h1>
            <p class='font-semibold text-3xl'>{{$product->description}}</p>
            <p class='text-3xl text-blue-700'>{{$product->price}}$</p>
            <a href="#"><button class='bg-7eleven text-white flex justify-center items-center rounded-lg py-2 px-3'>Buy now</button></a>
        </div>
    </div>
</section>

@endsection