<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idiomas</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Idiomas</h1>
        <ul>
            @foreach ($idiomas as $idioma)
                <li>{{ $idioma }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>