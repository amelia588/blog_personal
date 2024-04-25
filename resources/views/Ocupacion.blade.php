<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ocupación</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
    .card-img-top {
        width: 100%; /* Asegura que la imagen ocupe todo el ancho de la tarjeta */
        border-top-left-radius: calc(0.25rem - 1px); /* Coincide con el border-radius de la tarjeta de Bootstrap */
        border-top-right-radius: calc(0.25rem - 1px); /* Coincide con el border-radius de la tarjeta de Bootstrap */
        object-fit: cover; /* Asegura que la imagen cubra el espacio asignado sin distorsionarse */
        object-position: center; /* Centra la imagen dentro de su contenedor */
        height: 200px; /* Altura fija para todas las imágenes para mantener la uniformidad */
    }

    .card {
        transition: transform 0.3s ease-in-out; /* Transición suave para el efecto de hover */
    }

    .card:hover {
        transform: translateY(-5px); /* Eleva ligeramente la tarjeta al pasar el ratón por encima */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Sombra más pronunciada en el estado hover */
    }

    /* Estilos adicionales para los textos dentro de las tarjetas para mejorar legibilidad */
    .card-title {
        color: #333; /* Color oscuro para el título para mejorar contraste */
        font-size: 1.25rem; /* Tamaño ligeramente mayor para el título */
    }

    .card-text {
        color: #555; /* Color más claro para la descripción */
    }
</style>
</head>
<body>
    <div class="container mt-5">
    <h2 class="mb-4">Mis Habilidades</h2>
    <div class="row">
        <!-- Tarjeta para 'Sentido de innovación' -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://files.oaiusercontent.com/file-DIsfnfSWVcFvQIUIQQ6QTq00?se=2024-04-25T18%3A14%3A54Z&sp=r&sv=2021-08-06&sr=b&rscc=max-age%3D31536000%2C%20immutable&rscd=attachment%3B%20filename%3D7516898d-1e35-48d9-ad56-188c442d83fe.webp&sig=/xrQzdYFf8JIzaoLrdGXft2f3aNgvm2JMUyXI4S%2B7vE%3D" class="card-img-top" alt="Sentido de innovación">
                <div class="card-body">
                    <h5 class="card-title">Sentido de innovación</h5>
                    <p class="card-text">Descripción corta sobre la innovación.</p>
                </div>
            </div>
        </div>

        <!-- Tarjeta para 'Administrador de Base de Datos' -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="imagen-base-de-datos.jpg" class="card-img-top" alt="Administrador de Base de Datos">
                <div class="card-body">
                    <h5 class="card-title">Administrador de Base de Datos</h5>
                    <p class="card-text">Descripción corta sobre bases de datos.</p>
                </div>
            </div>
        </div>

        <!-- Más tarjetas para el resto de habilidades... -->
    </div>
</div>

</body>
</html>

