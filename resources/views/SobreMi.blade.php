<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Mí</title>
    <!-- Enlace a Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Agrega aquí tus estilos personalizados si es necesario */
        <style>
    /* Estilos generales */
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        color: #333;
        line-height: 1.6;
    }

    /* Estilos para el contenedor principal */
    .container {
        background-color: #fff;
        padding: 2rem;
        border-radius: 0.5rem;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* Estilos para los títulos */
    h1, h2 {
        color: #0056b3;
    }

    /* Estilo para la descripción personal */
    .personal-description {
        background-color: #e9ecef;
        border-left: 4px solid #0056b3;
        padding: 1rem;
        margin-top: 2rem;
        font-style: italic;
    }

    /* Estilo para hacer que el texto sea más legible */
    p {
        font-size: 1.1rem;
    }

    /* Estilo para la sección de datos personales */
    .personal-data {
        margin-bottom: 1rem;
    }
</style>

    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Sobre Mí</h1>
        <p>Nombre: {{ $nombre }}</p>
        <p>Edad: {{ $edad }}</p>
        
        <!-- Agregar tu descripción personal aquí -->
        <div class="my-4">
            <h2>Descripción Personal</h2>
            <p>Estudiante en desarrollar la nueva información tecnológica, creativa, empática, comprometida, responsable, sé trabajar en equipo, me interesa el área de programación, Web designer y App developer; soy apasionada por lo que me gusta, estoy en constante crecimiento y aprendizaje.</p>
        </div>
    </div>

    <!-- Enlace a Bootstrap JS y Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
