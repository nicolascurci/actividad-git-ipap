<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sitio con Poncho')</title>

    <!-- CSS de Poncho -->
    <link rel="stylesheet" href="<?= asset('css/poncho.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/icono-arg.css') ?>">

    <style>
        body {
            padding-top: 4rem;
        }
    </style>
</head>
<body>

    <!-- Barra superior simple -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="icono-arg-casa-blanca"></i> Mi Proyecto
            </a>
        </div>
    </nav>

    <!-- Contenido dinámico -->
    <main class="container mt-4">
        @yield('content')
    </main>

    <!-- Pie de página -->
    <footer class="bg-light text-center text-muted py-4 mt-5">
        <small>© <?= date('Y') ?> Mi Proyecto con Poncho</small>
    </footer>

    <!-- JS -->
    <script src="<?= asset('js/jquery.min.js') ?>"></script>
    <script src="<?= asset('js/poncho.min.js') ?>"></script>
</body>
</html>