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
		<div class="opacity-60 h-px mb-8" style="
			background: linear-gradient(to right, 
				rgba(141, 121, 121, 0) 0%,
				rgb(242, 131, 131) 30%,
				rgb(242, 131, 131) 70%,
				rgba(141, 121, 121 ,0) 100%
			);
		">

		</div>

		@yield('content')

		<p class="py-16">
			<img src="{{ asset('image/black-cat.png') }}" class="h-12 mx-auto">
		</p>
    </div>

</body>
</html>