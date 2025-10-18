<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Estudiante</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 p-6">

    <h1 class="text-3xl font-bold mb-6">Detalles del Estudiante</h1>

    <div class="bg-white p-6 rounded shadow-md max-w-md mx-auto">
        
        <p><strong>Código:</strong> {{ $estudiante->codigo }}</p>
        <p><strong>Nombres:</strong> {{ $estudiante->nombres }}</p>
        <p><strong>Primer Apellido:</strong> {{ $estudiante->pri_ape }}</p>
        <p><strong>Segundo Apellido:</strong> {{ $estudiante->seg_ape }}</p>
        <p><strong>DNI:</strong> {{ $estudiante->dni }}</p>

    </div>

</body>
</html>