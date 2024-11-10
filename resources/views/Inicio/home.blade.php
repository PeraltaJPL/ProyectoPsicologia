<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página Principal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/stylesHome.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/stylosVistas.css') }}">
  
</head>
<body>
  <!-- Barra lateral -->
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">INICIO</span>
      <span class="navbar-text text-white"><a href="#" class="links_Listas">Mayra Salazar García</a></span>
    </div>
  </nav>
  
  <div class="container-fluid">
    <div class="row">

      <!-- Sidebar -->
      <div id="sidebar" class="sidebar-collapsed col-md-2 bg-dark vh-100">
        <ul class="nav flex-column text-white">
          <li class="nav-item p-3"><a href="{{route('Inicio.home')}}" class="links_Listas">Inicio</a><i class="bi bi-house"></i></li>
          <li class="nav-item p-3"><a href="{{route('listaTests.aplicacionTest')}}" class="links_Listas">Tests</a><i class="bi bi-house"></i></li>
          <li class="nav-item p-3"><a href="#" class="links_Listas">Pacientes</a><i class="bi bi-person"></i></li>
          {{-- <li class="nav-item p-3"><a href="#" class="links_Listas">Usuarios</a><i class="bi bi-people"></i></li> --}}
          <li class="nav-item p-3"><a href="{{route('calendario.calendarioEventos')}}" class="links_Listas">Calendario de Eventos</a><i class="bi bi-calendar"></i></li>
          <li class="nav-item p-3"><a href="{{route('notas.notas')}}" class="links_Listas">Notas</a><i class="bi bi-card-text"></i></li>
          <li class="nav-item p-3"><a href="{{route('InicioSesion.inisioSesion')}}" class="links_Listas">Cerrar Sesión</a><i class="bi bi-box-arrow-right"></i></li>
        </ul>
      </div>

      <!-- Contenido principal -->
      <div class="col-md-10 bg-light p-4">
        <div class="row mb-4">
          <!-- Tarjeta Pacientes -->
          <div class="col-md-6">
            <div class="card text-center shadow-lg">
              <div class="card-body">
                <h5 class="card-title">PACIENTES</h5>
                <p><strong></strong></p>
                <a href="#" class="btn btn-info">Más detalles</a>
              </div>
            </div>
          </div>
          <!-- Tarjeta Usuarios -->
          {{-- <div class="col-md-3">
            <div class="card text-center shadow-lg">
              <div class="card-body">
                <h5 class="card-title">USUARIOS</h5>
                <p><strong></strong></p>
                <a href="#" class="btn btn-info">Más detalles</a>

              </div>
            </div>
          </div> --}}
          <!-- Eventos del Día -->
          <div class="col-md-6">
            <div class="card shadow-lg">
              <div class="card-body">
                <h5 class="card-title">EVENTOS EL DÍA DE HOY</h5>
                <table class="table">
                  <thead>
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
        <div class="row">
          <!-- Notas -->
          <div class="col-md-6">
            <div class="card shadow-lg">
              <div class="card-body">
                <h5 class="card-title">NOTAS</h5>
                <table class="table">
                  <thead>
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
            <div class="card shadow-lg">
              <div class="card-body">
                <h5 class="card-title">ÚLTIMOS 3 EVENTOS</h5>
                <table class="table">
                  <thead>
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

          <!-- Proximos 3 eventos -->
          <div class="col-md-6">
            <div class="card shadow-lg">
              <div class="card-body">
                <h5 class="card-title">PROXIMOS 3 EVENTOS</h5>
                <table class="table">
                  <thead>
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
