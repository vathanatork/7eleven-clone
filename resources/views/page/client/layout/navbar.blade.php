
{{-- header --}}
<section class='bg-white py-5 px-3 md:py-11 xl:px-40 flex justify-between items-center h-9 md:h-14 md:font-bold relative box-border'> 
    {{-- hamburger icon --}}
        <div class="header-logo md:hidden" data-hamberger>  
            <svg class="hover:stroke-orange-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
            <path strokeLinecap="round" strokeLinejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </div>
    {{-- logo --}}
    <div class="flex gap-7 items-center ">
        <div class="header-logo md:w-8 md:block" data-logo>
            <a href="/"><img src="https://www.7-eleven.com/assets/img/header/7e-logo-color.svg" alt="logo"></a>
        </div>
        {{-- mid head category --}}
        <div class='md:flex md:gap-5 hidden lg:text-xl md:text-md'>
            <div class='cursor-pointe '><a href="#">FOOD</a></div>
            <div class='cursor-pointe '><a href="#">DRINK</a></div>
            <div class='cursor-pointe '><a href="#">7REWARDS</a></div>
            <div class='cursor-pointer'><a href="#">Order7NOWDelivery</a></div>
            <div class='cursor-pointer'><a href="#">Shop7Collection</a></div>
        </div>
    </div>
    {{-- right aside icon --}}
    <div class='flex justify-between gap-3 md:flex' data-left-aside>
            {{-- location icon --}}
            <a href="#">
                <div class='flex items-center text-xs hover:text-orange-500'>
                    <div class="header-logo md:w-8">
                        <svg class="hover:stroke-orange-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path strokeLinecap="round" strokeLinejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                    </div>
                    <div>Find the store</div>
                </div>
            </a>
            {{-- location icon --}}
            <a href="#">
                <div class='header-logo md:w-8' data-modal-toggle="authentication-modal">
                    <svg class="hover:stroke-orange-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
            </a>  
    </div>    
</section>
@include('../page/client/layout/login')
{{-- slide nav --}}
<div class='bg-white pb-10 absolute lef-0 top-0 mt-2 pl-3 md:hidden hidden  md:px-40  md:text-lg' data-slide-nav>
    {{-- header category--}}
    <div class="flex justify-between w-screen pr-5 md:hidden">
        {{-- logo --}}
        <div class='w-5' data-logo><img src="https://www.7-eleven.com/assets/img/header/7e-logo-color.svg" alt="logo"></div>
        {{-- x icon --}}
        <div class='header-logo' data-xbtn>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" className="w-6 h-6">
                <path fillRule="evenodd" d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z" clipRule="evenodd" />
            </svg> 
        </div>
    </div>
    {{-- content category --}}
    <div class='mt-5 flex flex-col gap-5 text-md font-bold md:hidden' data-category>
        <div class='cursor-pointer'data-food>Food</div>
        <div class='cursor-pointer'data-drink>Drink</div>
        <div class='cursor-pointer'><a href="#">7REWARDS</a></div>
        <div class='cursor-pointer'><a href="#">Order7NOWDelivery</a></div>
        <div class='cursor-pointer'><a href="#">Shop7Collection</a></div>
    </div>
    @include('../page/client/layout/food')
    @include('../page/client/layout/drink')
</div>