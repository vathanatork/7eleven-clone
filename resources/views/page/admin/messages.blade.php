
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
<body>
    <main class="md:px-60 px-2 m-10">
        <h1 class='text-xl font-bold mb-5'>Client Messages</h1>
        <section >
            @foreach ($messages as $message)
                <div class='mb-5'>
                    <p class="text-red-700 text-md">{{$message->name}}</p>
                    <p class="p-2 bg-gray-200 rounded-lg text-black">{{$message->message}}</p>
                    <a class="text-md text-blue-800 mt-2" href="{!!url('/message/read')!!}/{{$message->id}}">read</a>
                </div>
            @endforeach
        </section>
    </main>

    <script src="{{asset('js/app.js')}}"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

</body>
</html>
