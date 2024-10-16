<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página Principal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="stylesHome.css">
  <link rel="stylesheet" href="{!! asset('css/stylesHome.css') !!}">
  <link rel="stylesheet" href="{{asset('./../css/styles.css')}}">

  
</head>
<body>
  <!-- Barra lateral -->
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">INICIO</span>
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
        <div class="row mb-4">
          <!-- Tarjeta Pacientes -->
          <div class="col-md-3">
            <div class="card text-center shadow-lg">
              <div class="card-body">
                <h5 class="card-title">PACIENTES</h5>
                <p><strong></strong></p>
                <a href="#" class="btn btn-info">Más detalles</a>
              </div>
            </div>
          </div>
          <!-- Tarjeta Usuarios -->
          <div class="col-md-3">
            <div class="card text-center shadow-lg">
              <div class="card-body">
                <h5 class="card-title">USUARIOS</h5>
                <p><strong></strong></p>
                <a href="#" class="btn btn-info">Más detalles</a>
              </div>
            </div>
          </div>
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
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
