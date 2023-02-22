<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h1> Gatitos traviesos</h1>

        <h3>
            <strong>
                {{ $post }}
            </strong>
        </h3>

        @if ($post === 'afrodita')
            <br>
            <strong> enano </strong>
        @elseif ($post === 'albafica')
            <strong> gigante </strong>
        @else
            <strong> CASSIE </strong>
        @endif
</body>
</html>