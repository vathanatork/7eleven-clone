<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- tailwind iject --}}
    @vite('./public/css/app.css')
    {{-- font awsome --}}
    <script src="https://kit.fontawesome.com/84b6c7fae4.js" crossorigin="anonymous"></script>
    {{-- unicon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@3.0.6/css/line.css">
    {{-- alpin.js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- title --}}
    <title>7-eleven</title>
</head>
<body class='h-screen overflow-x-hidden bg-7elven-gray'>
    {{-- header --}}
    @include('../page/client/layout/navbar')
        
    
    
    @yield('content')

    @include('../page/client/layout/footer') 

    @if(session()->has('success'))
        <div x-data="{show :true}"
             x-init="setTimeout(()=> show=false ,4000)"
             x-show ="show"
             class='fixed bg-blue-500 z-40 text-white py-3 px-4 rounded-xl bottom-3 right-3 text-xs'>
            <p>{{session('success')}}</p>
        </div>
    @endif

    @if (count($errors) > 0)
    <!-- Form Error List -->
        <div class="fixed bg-red-500 z-40 text-white py-3 px-4 rounded-xl bottom-3 right-3 text-xs">
            <strong>Somthing Wrong!!!</strong>
            <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{!! $error !!}</li>
                @endforeach
            </ul>
        </div>
    @endif

<script src="{{asset('js/app.js')}}"></script>
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>
</html>