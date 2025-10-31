<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Ver Estudiante | Gestor de Notas</title>
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
      align-items: center;
      justify-content: center;
      padding: 24px;
    }

    @keyframes gradientShift {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .card {
      background: var(--card);
      backdrop-filter: blur(18px);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      padding: 40px;
      width: 100%;
      max-width: 600px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
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

    .info {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 14px 20px;
    }

    .info p {
      background: rgba(255, 255, 255, 0.05);
      padding: 12px 16px;
      border-radius: 10px;
      font-size: 15px;
      border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .info strong {
      color: var(--accent);
      display: block;
      font-size: 13px;
      margin-bottom: 4px;
    }

    .btn {
      display: inline-block;
      margin-top: 30px;
      padding: 12px 18px;
      border-radius: 10px;
      background: linear-gradient(90deg, var(--accent), var(--accent2));
      color: #0f172a;
      font-weight: 700;
      text-decoration: none;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .btn:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 18px rgba(139, 92, 246, 0.4);
    }

    .footer {
      text-align: center;
      margin-top: 16px;
      font-size: 13px;
      color: var(--muted);
    }

    @media(max-width:600px) {
      .info { grid-template-columns: 1fr; }
    }
  </style>
</head>
<body>
  <div class="card">
    <h1>Detalles del Estudiante</h1>

    <div class="info">
      <p><strong>Código:</strong> {{ $estudiante->codigo }}</p>
      <p><strong>Nombres:</strong> {{ $estudiante->nombres }}</p>
      <p><strong>Primer Apellido:</strong> {{ $estudiante->pri_ape }}</p>
      <p><strong>Segundo Apellido:</strong> {{ $estudiante->seg_ape }}</p>
      <p><strong>DNI:</strong> {{ $estudiante->dni }}</p>
      <p><strong>Carrera:</strong> {{ $estudiante->carrera }}</p>
    </div>

    <div style="text-align:center;">
      <a href="{{ route('estudiantes.index') }}" class="btn">Volver</a>
    </div>

    <p class="footer">© {{ date('Y') }} Gestor de Notas — Perfil del estudiante</p>
  </div>
</body>
</html>