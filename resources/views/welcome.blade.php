<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('saludos') }}">Saludos</a>
    <br>
    <a href="{{ route('bienvenidos') }}">Bienvenidos</a>
    <br>
    <a href="{{ route('dudoso') }}">Dudosos</a>
    <br>
    <a href="{{ route('estudiantes.index') }}">Estudiantes</a>
    <br>
    <a href="{{ route('Notas.index') }}">Notas</a>
</body>
</html>