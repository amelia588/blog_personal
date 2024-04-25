<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expresión Profesional</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Expresión Profesional</h1>
        <div>
            <h2>Experiencia Laboral</h2>
            @if(!empty($experiencias))
                <ul>
                    @foreach ($experiencias as $experiencia)
                        <li>
                            <strong>{{ $experiencia['empresa'] }}</strong> - {{ $experiencia['periodo'] }}
                            <br>
                            Rol: {{ $experiencia['rol'] }}
                            <br>
                            Descripción: {{ $experiencia['descripcion'] }}
                        </li>
                    @endforeach
                </ul>
            @else
                <p>No se ha encontrado información sobre la experiencia laboral.</p>
            @endif
        </div>
    </div>
</body>
</html>
