<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página Principal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/stylesHome.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/stylosVistas.css') }}">
  
</head>
<body>
  <!-- Barra lateral -->
  <nav class="navbar navbar-dark bg-dark bg-gradient">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">INICIO</span>
      <span class="navbar-text text-white"><a href="#" class="links_Listas"><i class="bi bi-person-circle"></i> Mayra Salazar García</a></span>
    </div>
  </nav>
  
  <div class="container-fluid">
    <div class="row">

      <!-- Sidebar -->
      <div id="sidebar" class="sidebar sidebar-collapsed col-md-2 bg-dark">
        <ul class="nav flex-column text-white">
          <li class="nav-item p-3 card-body bg-light bg-opacity-10 border rounded"><i class="bi bi-house"></i><a href="{{route('Inicio.home')}}" class="links_Listas"> Inicio</a></li>
          <li class="nav-item p-3"><i class="bi bi-journal-text"></i><a href="{{route('listaTests.aplicacionTest')}}" class="links_Listas"> Tests</a></li>
          <li class="nav-item p-3"><i class="bi bi-person"></i><a href="{{route('pacientes.index')}}" class="links_Listas">Pacientes </a></li>
          {{-- <li class="nav-item p-3"><a href="#" class="links_Listas">Usuarios</a><i class="bi bi-people"></i></li> --}}
          <li class="nav-item p-3"><i class="bi bi-calendar"></i><a href="{{route('calendario.calendarioEventos')}}" class="links_Listas">Calendario de Eventos </a></li>
          <li class="nav-item p-3"><i class="bi bi-card-text"></i><a href="{{route('notas.notas')}}" class="links_Listas">Notas </a></li>
          <li class="nav-item p-3"><i class="bi bi-box-arrow-right"></i><a href="{{route('InicioSesion.inisioSesion')}}" class="links_Listas">Cerrar Sesión </a></li>
        </ul>
      </div>

      <!-- Contenido principal -->
      <div class="col-md-10 bg-light p-4">
        <div class="row mb-4">
          <!-- Tarjeta Pacientes -->
          <div class="col-md-6">
            <div class="card text-center shadow-lg">
              <div class="card-body">
                <h5 class="card-title">PACIENTES <i class="bi bi-person"></i></h5>
                <p><strong></strong></p>
                <a href="#" class="btn btn-info">Más detalles</a>
              </div>
            </div>
          </div>
          <!-- Eventos del Día -->
          <div class="col-md-6">
            <div class="card text-center shadow-lg">
              <div class="card-body">
                <h5 class="card-title">EVENTOS EL DÍA DE HOY <i class="bi bi-calendar"></i></h5>
                <table class="table">
                  <thead class="bg-primary bg-opacity-75">
                    <tr>
                      <th>Título</th>
                      <th>Descripción</th>
                      <th>Hora</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td colspan="3">No hay eventos el día de hoy</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Notas y últimos eventos -->
        <div class="row mb-4">
          <!-- Notas -->
          <div class="col-md-6">
            <div class="card text-center shadow-lg">
              <div class="card-body">
                <h5 class="card-title">NOTAS <i class="bi bi-card-text"></i></h5>
                <table class="table">
                  <thead class="bg-primary bg-opacity-75">
                    <tr>
                      <th>Título</th>
                      <th>Descripción</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td colspan="2">No hay eventos el día de hoy</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="text-end p-2">
                <a href="#" class="btn btn-info">Más detalles</a>
              </div>
            </div>
          </div>
          <!-- Últimos 3 eventos -->
          <div class="col-md-6">
            <div class="card text-center shadow-lg">
              <div class="card-body">
                <h5 class="card-title">ÚLTIMOS 3 EVENTOS <i class="bi bi-calendar-check"></i></h5>
                <table class="table">
                  <thead class="bg-primary bg-opacity-75">
                    <tr>
                      <th>Título</th>
                      <th>Descripción</th>
                      <th>Fecha</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td colspan="3">No hay eventos</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="row mb-4">
<!-- Proximos 3 eventos -->
          <div class="col-md-6">
            <div class="card text-center shadow-lg">
              <div class="card-body">
                <h5 class="card-title">PROXIMOS 3 EVENTOS <i class="bi bi-calendar3-week"></i></h5>
                <table class="table">
                  <thead class="bg-primary bg-opacity-75">
                    <tr>
                      <th>Título</th>
                      <th>Descripción</th>
                      <th>Fecha</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td colspan="3">No hay eventos</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('assets/js/ajustesVistas.js') }}"></script>
</body>
</html>
