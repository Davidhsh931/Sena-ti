<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Registrar Nota | Gestor de Notas</title>
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

    .form-card {
      background: var(--card);
      backdrop-filter: blur(18px);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      padding: 40px;
      width: 100%;
      max-width: 600px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .form-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.7);
    }

    h1 {
      font-size: 26px;
      font-weight: 700;
      color: var(--accent2);
      text-align: center;
      margin-bottom: 24px;
    }

    label {
      display: block;
      font-size: 14px;
      color: var(--muted);
      margin-bottom: 6px;
    }

    .input {
      width: 100%;
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.1);
      padding: 12px 14px;
      border-radius: 10px;
      color: var(--white);
      font-size: 15px;
      transition: all 0.25s ease;
      margin-bottom: 18px;
    }

    .input:focus {
      border-color: var(--accent);
      box-shadow: 0 0 12px rgba(139, 92, 246, 0.4);
      outline: none;
    }

    .btn {
      width: 100%;
      background: linear-gradient(90deg, var(--accent), var(--accent2));
      color: #0f172a;
      font-weight: 700;
      padding: 12px 14px;
      border-radius: 10px;
      border: none;
      cursor: pointer;
      font-size: 16px;
      transition: all 0.2s ease;
    }

    .btn:hover {
      transform: scale(1.03);
      box-shadow: 0 6px 18px rgba(139, 92, 246, 0.4);
    }

    .footer {
      text-align: center;
      margin-top: 16px;
      font-size: 13px;
      color: var(--muted);
    }

    @media(max-width:600px) {
      .form-card { padding: 28px; }
    }
  </style>
</head>

<body>
  <div class="form-card">
    <h1>Registrar Nueva Nota</h1>

    <form action="{{ route('notas.store') }}" method="POST">
      @csrf

      <div>
        <label for="estudiante_id">Estudiante ID</label>
        <input type="text" id="estudiante_id" name="estudiante_id" class="input" autocomplete="off" required>
      </div>

      <div>
        <label for="materia">Materia</label>
        <input type="text" id="materia" name="materia" class="input" autocomplete="off" required>
      </div>

      <div>
        <label for="nota">Nota</label>
        <input type="text" id="nota" name="nota" class="input" autocomplete="off" required>
      </div>

      <div>
        <label for="descripcion">Descripción</label>
        <input type="text" id="descripcion" name="descripcion" class="input" autocomplete="off">
      </div>

      <button type="submit" class="btn">Guardar Nota</button>
    </form>

    <p class="footer">© {{ date('Y') }} Gestor de Notas — Registro académico</p>
  </div>
</body>
</html>
