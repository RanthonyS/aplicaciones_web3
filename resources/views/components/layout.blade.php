<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Mi Aplicación' }}</title>
</head>
<body>
    <nav>
        <a href="/">Inicio</a>
        <a href="/crear">Ingresar Notas</a>
        <a href="/editar">Editar Notas</a>
        <a href="/mostrar">Mostrar Notas</a>
        <a href="/eliminar">Eliminar Notas</a>
    </nav>
        {{ $slot }}
   
</body>
</html>
