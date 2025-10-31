{{--Modelo
Controlador
Vista

Estudiantes

<br>

{{ $estudiantes }} --}}


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestor de Notas | Estudiantes</title>
  <style>
    :root {
      --bg: #0a0a0f;
      --card: rgba(255, 255, 255, 0.07);
      --accent: #8b5cf6;
      --accent2: #0ea5e9;
      --muted: #a1a1aa;
      --white: #f8fafc;
      --radius: 14px;
      --shadow: 0 8px 32px rgba(0, 0, 0, 0.6);
      font-family: 'Inter', system-ui, sans-serif;
    }

    html, body {
      height: 100%;
      margin: 0;
      background: linear-gradient(-45deg, #0f172a, #1e1b4b, #3b0764, #450a0a);
      background-size: 400% 400%;
      animation: gradientShift 12s ease infinite;
      color: var(--white);
      display: flex;
      justify-content: center;
      padding: 40px;
    }

    @keyframes gradientShift {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .container {
      width: 100%;
      max-width: 1100px;
      background: var(--card);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      backdrop-filter: blur(18px);
      padding: 30px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .container:hover {
      transform: translateY(-4px);
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.7);
    }

    h1 {
      font-size: 28px;
      font-weight: 700;
      color: var(--accent2);
      text-align: center;
      margin-bottom: 24px;
    }

    .btn {
      display: inline-flex;
      align-items: center;
      background: linear-gradient(90deg, var(--accent), var(--accent2));
      color: #0f172a;
      font-weight: 700;
      padding: 10px 16px;
      border-radius: 10px;
      border: none;
      text-decoration: none;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .btn:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 18px rgba(139, 92, 246, 0.4);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
      color: var(--white);
    }

    th, td {
      padding: 12px 16px;
      text-align: left;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    th {
      background: rgba(255, 255, 255, 0.08);
      color: var(--accent2);
      font-weight: 600;
    }

    tr:hover {
      background: rgba(255, 255, 255, 0.05);
    }

    .action-btn {
      padding: 6px 12px;
      border-radius: 8px;
      font-weight: 600;
      font-size: 14px;
      text-decoration: none;
      color: #0f172a;
      transition: all 0.2s ease;
    }

    .view { background: linear-gradient(90deg, #0ea5e9, #38bdf8); }
    .edit { background: linear-gradient(90deg, #facc15, #fbbf24); }
    .delete { background: linear-gradient(90deg, #ef4444, #dc2626); }

    .view:hover, .edit:hover, .delete:hover {
      transform: scale(1.05);
      box-shadow: 0 4px 10px rgba(255,255,255,0.15);
    }

    .top-actions {
      display: flex;
      justify-content: flex-end;
      margin-bottom: 20px;
    }

    .top-actions .btn svg {
      width: 18px;
      height: 18px;
      margin-right: 6px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Gestor de Estudiantes</h1>

    <div class="top-actions">
      <a href="{{ route('estudiantes.create') }}" class="btn" title="Crear nuevo estudiante">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"
             xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 4v16m8-8H4"></path>
        </svg>
        Nuevo Estudiante
      </a>
    </div>

    <table>
      <thead>
        <tr>
          <th>Código</th>
          <th>Nombres</th>
          <th>Primer Apellido</th>
          <th>Segundo Apellido</th>
          <th>DNI</th>
          <th>Carrera</th>
          <th>Ver</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($estudiantes as $estudiante)
          <tr>
            <td>{{ $estudiante->codigo }}</td>
            <td>{{ $estudiante->nombres }}</td>
            <td>{{ $estudiante->pri_ape }}</td>
            <td>{{ $estudiante->seg_ape }}</td>
            <td>{{ $estudiante->dni }}</td>
            <td>{{ $estudiante->carrera }}</td>
            <td>
              <a href="{{ route('estudiantes.ver', $estudiante->id) }}" class="action-btn view">Ver</a>
            </td>
            <td>
              <a href="{{ route('estudiantes.edit', $estudiante->id) }}" class="action-btn edit">Editar</a>
            </td>
            <td>
              <a href="{{ route('estudiantes.delete', $estudiante->id) }}" class="action-btn delete">Eliminar</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>
