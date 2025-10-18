<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Notas</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 p-6">

    <h1 class="text-3xl font-bold mb-6">Detalle de la Nota</h1>

    <div class="bg-white p-6 rounded shadow-md max-w-md mx-auto">
        
        <p><strong>ESTUDIANTE ID:</strong> {{ $notas->estudiante_id }}</p>
        <p><strong>MATERIA:</strong> {{ $notas->materia }}</p>
        <p><strong>NOTA:</strong> {{ $notas->nota }}</p>

    </div>

</body>
</html>