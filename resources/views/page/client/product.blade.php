@extends('../page/client/layout/app')

@section('content')

<section class="md:mt-20 mt-10">
        {{-- hero image --}}
        <section class="w-full ">
            <div class="lg:mt-20 lg:h-96 md:h-64 w-full h-52 relative">
                <img src="https://www.7-eleven.com/_next/image?url=https%3A%2F%2Fimages.contentstack.io%2Fv3%2Fassets%2Fbltbb619fd5c667ba2d%2Fblt43126539357ecc2e%2F60cbae74610188558e3b40b0%2FSite2.0-Coffee-Hero-Mobile-Compressed.jpg&w=750&q=75" class="w-full h-full object-cover" alt="image">
                {{-- category on image --}}
                <div class="lg:bottom-20 lg:px-10 lg:left-10 lg:h-28 lg:text-5xl md:left-7 md:px-10 md:bottom-5 md:translate-y-0 md:-translate-x-0 absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2 px-10 h-14 bg-black text-white flex justify-center items-center font-bold text-2xl">
                    {{$products[0]->Name}}
                </div>
                {{-- qoute bar --}}
                <div class="lg:w-full lg:mx-10 lg:h-24 lg:justify-start lg:text-2xl md:absolute md:w-5/6 md:left-1/2 md:-translate-x-1/2 md:-bottom-16 md:p-10 bg-gray-200 flex justify-center items-center w-full h-10 text-based text-center p-14  font-bold">
                    <p >There's over 3000 ways to caffeinate at our in-store coffee bars.</p>
                </div>
            </div>
            
        </section>

        {{-- filter --}}
        <section class="mt-36 md:hidden">
            <!-- drawer init and toggle -->
            <div class="text-center">
                <button class="overflow-y-auto w-5/6 text-white hover:text-black bg-black hover:bg-white border border-black font-bold  text-md px-5 py-2.5 mr-2 mb-2 " type="button" data-drawer-target="drawer-top-example" data-drawer-show="drawer-top-example" data-drawer-placement="top" aria-controls="drawer-top-example">
                Sort & Filter
                </button>
            </div>
            
            <!-- drawer component -->
            <div id="drawer-top-example" class="fixed top-0 left-0 right-0 z-40 w-full p-4 transition-transform -translate-y-full bg-white dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-top-label">
                <ul class="space-y-2">
                    <li>
                        <label  class="flex items-center w-full p-2 text-1xl font-bold text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example">
                            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-black-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
                            </svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap">Sort By</span>
                        </label>
                        <ul class="py-2 space-y-2">
                            <li>
                                <a href="{!!url('/store/sort/newest')!!}" class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Newest</a>
                            </li>
                            <li>
                                <a href="{!!url('/store/sort/a-z')!!}" class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Product Name(A-Z)</a>
                            </li>
                            <li>
                                <a href="{!!url('/store/sort/z-a')!!}" class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Product Name(Z-A)</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <label type="button" class="flex items-center w-full p-2 text-1xl font-bold  text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-examples">
                            <svg class="flex-shrink-0 w-6 h-6 text-black-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                            </svg>                      
                            <span class="flex-1 ml-3 text-left whitespace-nowrap">Category</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </label>
                        <ul id="dropdown-examples" class="hidden py-2 space-y-2">
                            @foreach ($categories as $category)
                            <li>
                                <a href="{!!url('/store')!!}/{{$category->Name}}" class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{$category->Name}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </section>

        {{-- product card --}}
        <section class='md:mt-28 my-10 flex'>
            {{-- sort and filter --}}
            <div class="py-4 px-2 md:px-1 xoverflow-y-auto w-80 hidden md:block">
                <div>  
                    <form action="/store/search" method="POST">   
                        @csrf
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search Product</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            </div>
                            <input type="search" name="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Product" required>
                            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                        </div>
                    </form>
                </div>
                <ul class="space-y-2">
                    <li>
                        <label  class="flex items-center w-full p-2 text-1xl font-bold text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example">
                            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-black-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
                            </svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap">Sort By</span>
                        </label>
                        <ul class="py-2 space-y-2">
                            <li>
                                <a href="{!!url('/store/sort/newest')!!}" class="flex items-center w-full md:pl-4 p-2 md:text-sm text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Newest</a>
                            </li>
                            <li>
                                <a href="{!!url('/store/sort/a-z')!!}" class="flex items-center w-full md:pl-4 p-2 md:text-sm text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Product Name(A-Z)</a>
                            </li>
                            <li>
                                <a href="{!!url('/store/sort/z-a')!!}" class="flex items-center w-full md:pl-4 p-2 md:text-sm text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Product Name(Z-A)</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <label type="button" class="flex items-center w-full p-2 text-1xl font-bold  text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-exampless">
                            <svg class="flex-shrink-0 w-6 h-6 text-black-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                            </svg>                      
                            <span class="flex-1 ml-3 text-left whitespace-nowrap">Category</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </label>
                        <ul id="dropdown-exampless" class="hidden py-2 space-y-2">
                            @foreach ($categories as $category)
                            <li>
                                <a href="{!!url('/store')!!}/{{$category->Name}}" class="flex items-center w-full md:pl-4 p-2 md:text-sm text-base font-normal text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">{{$category->Name}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
            
                {{-- card wrap --}}
            <section>
                <div class='lg:px-5 md:grid-cols-3 md:px-11 grid grid-cols-2 px-3 grid-flow-row gap-3'>
                    @foreach ($products as $product)
                        {{-- product 1 --}}
                        <div class="w-full">
                            <div class="w-full h-vw bg-gray-100">
                                <a href="{!!url('/store/detail')!!}/{{$product->id}}">
                                    <img class="w-full h-full object-cover" src="{!!asset('img/'.$product->image)!!}" alt="product image" />
                                </a>
                            </div>
                            <div class="pb-5 text-left">
                                {{-- link --}}
                                <a href="{!!url('/store/detail')!!}/{{$product->id}}" class='hover:underline font-bold'>{{$product->title}}</a>
                            </div>
                        </div> 
                    @endforeach   
                </div>
            </section>
            
        </section>
        <section class='my-10'>
            <div class='w-full flex justify-center'>{{$products->links()}}</div>
        </section>

</section>


@endsection