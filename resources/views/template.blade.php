<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atencion a Gatitos</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container px-4 mx-auto">
        <header class="flex justify-between items-center px-4">
            <div class=" flex items-center flex-grow gap-4">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('image/black-cat.png') }}" class="h-16 w-15">
                </a>
                <form action="">
                    <input type="text" placeholder="buscar">
                </form>
            </div>

            @auth
            <a href="{{ route ('dashboard') }}">Dashboard</a>
                @else
            <a href="{{ route('login') }}">Login</a>
            @endauth

        </header>
        @yield('content')
    </div>

</body>
</html>