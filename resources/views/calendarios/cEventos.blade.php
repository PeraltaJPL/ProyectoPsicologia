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
  <link rel="stylesheet" href="../../css/estilosCalendarios/sCalendarioE.css">
</head>
<body>
  <!-- Barra superior -->
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">Calendario Personal</span>
      <span class="navbar-text text-white">Mayra Salazar García | <a href="#" class="text-warning">Cerrar</a></span>
    </div>
  </nav>
  
  <!-- Sidebar -->
  <div class="col-md-2 bg-dark vh-100">
    <ul class="nav flex-column text-white">
      <li class="nav-item p-3"><i class="bi bi-house"></i> Inicio</li>
      <li class="nav-item p-3"><i class="bi bi-house"></i> Tests</li>
      <li class="nav-item p-3"><i class="bi bi-person"></i> Pacientes</li>
      <li class="nav-item p-3"><i class="bi bi-people"></i> Usuarios</li>
      <li class="nav-item p-3"><i class="bi bi-calendar"></i> Calendario de Eventos</li>
      <li class="nav-item p-3"><i class="bi bi-card-text"></i> Notas</li>
      <li class="nav-item p-3"><i class="bi bi-box-arrow-right"></i> Cerrar Sesión</li>
    </ul>
  </div>

  <div class="container mt-5">
    <div id="calendar"></div>
  </div>

  <!-- FullCalendar and Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../js/calEvento.js"></script>
</body>
</html>
