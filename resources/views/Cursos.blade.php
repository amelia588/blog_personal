<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Cursos</h1>
        <ul>
            @foreach ($cursos as $curso)
                <li>{{ $curso }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>
