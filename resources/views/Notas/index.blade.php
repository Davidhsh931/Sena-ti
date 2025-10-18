{{--Modelo
Controlador
Vista

Notas

<br>

{{ $notas }} --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Notas</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 p-6">
  <div class="max-w-6xl mx-auto">

    <h1 class="text-3xl font-bold underline mb-6">
      Notas
    </h1>

    <div class="mb-4">
      <a href="{{ route('Notas.create') }}"
        class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
        Nuevo
      </a>
    </div>

    <div class="overflow-x-auto bg-white shadow-md rounded-xl">
      <table class="w-full text-left table-auto min-w-max">
        <thead>
          <tr>
            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">ID_Estudiante</th>
            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">Materia</th>
            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">Nota</th>
            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">Ver</th>
            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">Editar</th>
            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">Eliminar</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($notas as $nota)
          <tr class="hover:bg-blue-100">
            <td class="py-2 px-4 border-b border-gray-300">{{ $nota->estudiante_id }}</td>
            <td class="py-2 px-4 border-b border-gray-300">{{ $nota->materia }}</td>
            <td class="py-2 px-4 border-b border-gray-300">{{ $nota->nota }}</td>

            <td class="py-2 px-4 border-b border-gray-300">
                                <a href="{{ route('Notas.ver', $nota->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Ver
                                </a>
                            </td>
                            <td class="py-2 px-4 border-b border-gray-300">
                                <a href="{{ route('Notas.edit', $nota->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                                    Editar
                                </a>
                            </td>
                            <td class="py-2 px-4 border-b border-gray-300">
                                <a href="{{ route('Notas.delete', $nota->id) }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                    Eliminar
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
