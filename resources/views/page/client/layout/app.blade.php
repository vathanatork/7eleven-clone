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
    {{-- title --}}
    <title>7-eleven</title>
</head>
<body class='h-screen overflow-x-hidden'>
    {{-- header --}}
    @include('../page/client/layout/navbar')

    @yield('content')

    @include('../page/client/layout/footer') 

<script src="{{asset('js/app.js')}}"></script>
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>
</html>