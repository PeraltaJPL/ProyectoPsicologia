<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calendario Eventos</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- FullCalendar CSS -->
  <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/estilosCalendarios/sCalendarioE.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/stylosVistas.css') }}">
</head>
<body>
  <!-- Barra superior -->
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">Calendario de Eventos</span>
      <span class="navbar-text text-white">Mayra Salazar García | <a href="#" class="text-warning">Cerrar</a></span>
    </div>
  </nav>

  <!-- Sidebar -->
  <div id="sidebar" class="sidebar-collapsed col-md-2 bg-dark vh-100">
    <ul class="nav flex-column text-white">
      <li class="nav-item p-3"><a href="#" class="links_Listas">Inicio</a><i class="bi bi-house"></i></li>
      <li class="nav-item p-3"><a href="#" class="links_Listas">Tests</a><i class="bi bi-house"></i></li>
      <li class="nav-item p-3"><a href="#" class="links_Listas">Pacientes</a><i class="bi bi-person"></i></li>
      <li class="nav-item p-3"><a href="#" class="links_Listas">Usuarios</a><i class="bi bi-people"></i></li>
      <li class="nav-item p-3"><a href="#" class="links_Listas">Calendario de Eventos</a><i class="bi bi-calendar"></i></li>
      <li class="nav-item p-3"><a href="#" class="links_Listas">Notas</a><i class="bi bi-card-text"></i></li>
      <li class="nav-item p-3"><a href="#" class="links_Listas">Cerrar Sesión</a><i class="bi bi-box-arrow-right"></i></li>
    </ul>
  </div>

  <div class="container mt-5">
    <div id="calendar"></div>
  </div>

  <!-- FullCalendar and Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('assets/js/calEvento.js') }}"></script>
  <script src="{{ asset('assets/js/ajustesVistas.js') }}"></script>
</body>
</html>
