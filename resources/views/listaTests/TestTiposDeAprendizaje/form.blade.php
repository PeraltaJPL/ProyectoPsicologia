<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test Psicologicos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/stylesHome.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/stylosVistas.css') }}">
</head>

<body>
  <!-- Barra superior -->
  <nav class="navbar navbar-dark bg-dark bg-gradient">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">Test de Estilos de Aprendizaje</span>
      <span class="navbar-text text-white">
        <a href="{{ route('perfil.perfil') }}" class="links_Listas">
          {{ $user->username ?? $user->name ?? 'Usuario' }}
        </a>
      </span>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">

    <div class="container p-5">
      <h1>Test de Estilos de Aprendizaje</h1>
      <form action="{{ route('tests.store') }}" method="POST">
        @csrf
        <!-- Campos del formulario -->
        <div class="mb-3">
            <label for="patient_name" class="form-label">Nombre del Paciente</label>
            <input type="text" name="patient_name" id="patient_name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="career" class="form-label">Carrera</label>
            <input type="text" name="career" id="career" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Fecha</label>
            <input type="date" name="date" id="date" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Lugar</label>
            <input type="text" name="location" id="location" class="form-control" required>
        </div>
        <!-- Preguntas -->
        <h2>Preguntas</h2>
        @foreach ($questionsText as $number => $text)
          <div class="mb-3">
            <label for="question{{ $number }}" class="form-label">
              Pregunta {{ $number }}: {{ $text }}
            </label>
            <select name="question{{ $number }}" id="question{{ $number }}" class="form-select" required>
              <option value="1">Nunca</option>
              <option value="2">Raramente</option>
              <option value="3">Ocasionalmente</option>
              <option value="4">Usualmente</option>
              <option value="5">Siempre</option>
            </select>
          </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
    
    </div>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('assets/js/ajustesVistas.js') }}"></script>
</body>

</html>