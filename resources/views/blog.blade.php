<!-- resources/views/layouts/blog.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Blog Personal')</title> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .hero {
            background-color: #f8f9fa; /* Elige un color de fondo adecuado */
            padding: 2rem;
            margin-bottom: 2rem;
            border-radius: 0.5rem;
        }
        .subscribe-form {
            max-width: 320px;
            margin-top: 1rem;
        }
        .navbar-nav .nav-link {
            color: #505050; /* Elige un color adecuado para los enlaces */
        }
        /* Estilos adicionales personalizados van aquí */
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('blog') }}">stories.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('SobreMi') }}">Sobre Mi</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('Ocupacion') }}">Ocupación</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('Idioma') }}">Idiomas</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('Expresionprofesional') }}">Expresión Profesional</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('Cursos') }}">Cursos</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="hero text-center">
        <h1>Hello, I'm Amelia</h1>
        <p>Welcome to my blog</p>
        <p>Don't miss out on the latest news about me </p>
        <form class="subscribe-form">
            <input type="email" class="form-control" placeholder="Enter your email">
            <button type="submit" class="btn btn-primary mt-2">Subscribe</button>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


