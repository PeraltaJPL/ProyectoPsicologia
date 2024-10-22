<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calendario de Eventos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/stylesCalendario.css') }}">
</head>
<body>
  <!-- Barra superior -->
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">CALENDARIOS</span>
      <span class="navbar-text text-white">Mayra Salazar García</span>
    </div>
  </nav>
  
  <div class="container-fluid">
    <div class="row">
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

      <!-- Contenido principal -->
      <div class="col-md-10 bg-light p-4">
        <div class="row justify-content-center">
          <!-- Calendario de Consultas -->
          <div class="col-md-5">
            <div class="card text-center shadow-lg">
              <div class="card-body">
                <img src="https://www.gstatic.com/images/branding/product/1x/calendar_2020q4_48dp.png" alt="Icono Calendario" class="mb-3">
                <h5 class="card-title">CALENDARIO DE CONSULTAS</h5>
                <p>Gestión sobre las consultas médicas. Consulta horarios y detalles de tus próximas visitas.</p>
                <a href="#" class="btn btn-info">Continuar</a>
              </div>
            </div>
          </div>

          <!-- Calendario Personal -->
          <div class="col-md-5">
            <div class="card text-center shadow-lg">
              <div class="card-body">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4b/Calendar_font_awesome.svg/1024px-Calendar_font_awesome.svg.png" alt="Icono Calendario Personal" class="mb-3" style="width:48px;">
                <h5 class="card-title">CALENDARIO PERSONAL</h5>
                <p>Organiza eventos y fechas importantes. Mantén un registro de tus compromisos personales y citas.</p>
                <a href="#" class="btn btn-info">Continuar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
