<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('titulo', 'Biblioteca')</title>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container"><span class="navbar-brand">Biblioteca</span>
<div>

<a class="btn btn-outline-light btn-sm" href="{{route('libros.create') }}">Registrar libro</a>
<a class="btn btn-outline-light btn-sm" href="{{route('libros.index') }}">Ver libros</a>
</div>
    </div>
        </nav>
        <main class="container">
            @yield('contenido')
        </main>
</body>
</html>