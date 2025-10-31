<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Notas</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body>
        <h1 class="text-3xl font-bold underline">
            Notas Edit
        </h1>
        <br>

        <form action="{{ route('notas.update', $notas->id) }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">

        
            @csrf

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Estudiante
                </label>
                <input type="text" name="estudiante_id" value="{{ $notas->estudiante_id }}" autocomplete="off" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Materia
                </label>
                <input type="text" name="materia" value="{{ $notas->materia }}" autocomplete="off" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">                

            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Nota
                </label>
                <input type="text" name="nota" value="{{ $notas->nota }}" autocomplete="off" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">                
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Descripcion
                </label>
                <input type="text" name="descripcion" value="{{ $notas->descripcion }}" autocomplete="off" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">                

            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Guardar
                </button>
            </div>
        </form>

    </body>
</html>