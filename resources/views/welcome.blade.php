<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Panel principal | Gestor de notas</title>
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
    }

    /* Fondo animado */
    body {
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
      border-radius: var(--radius);
      padding: 40px;
      box-shadow: var(--shadow);
      text-align: center;
      max-width: 400px;
      width: 100%;
      backdrop-filter: blur(20px);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card:hover {
      transform: translateY(-4px);
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.7);
    }

    h1 {
      font-size: 26px;
      color: var(--accent);
      margin-bottom: 20px;
    }

    a {
      display: block;
      background: linear-gradient(90deg, var(--accent), var(--accent2));
      color: #0f172a;
      font-weight: 700;
      padding: 12px;
      border-radius: 10px;
      text-decoration: none;
      margin: 10px 0;
      transition: all 0.25s ease;
    }
    a:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 18px rgba(139, 92, 246, 0.4);
    }

    .footer {
      margin-top: 20px;
      font-size: 12px;
      color: #9ca3af;
    }
  </style>
</head>

<body>
  <main class="card">
    <h1>Gestor de Notas 🌌</h1>

    <a href="{{ route('saludos') }}">Saludos</a>
    <a href="{{ route('bienvenidos') }}">Bienvenidos</a>
    <a href="{{ route('dudoso') }}">Dudosos</a>
    <a href="{{ route('estudiantes.index') }}">Estudiantes</a>
    <a href="{{ route('notas.index') }}">Notas</a>

    <p class="footer">© {{ date('Y') }} Gestor de notas</p>
  </main>
</body>
</html>
