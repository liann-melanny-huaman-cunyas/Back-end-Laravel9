<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Casa de gatos</title>
</head>
<body>

    <header>
        <a href="{{ route ('home') }}">Home</a>
        <a href="{{ route ('gato') }}">Gatitos del mes</a>
    </header>

    <hr>
    @yield('content')
</body>
</html>