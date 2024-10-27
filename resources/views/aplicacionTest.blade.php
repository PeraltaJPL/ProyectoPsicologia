<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calendario de Eventos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="{{ asset('assets/css/stylesCalendario.css') }}"> -->
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
      <div class="col-md-2 bg-dark">
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

      <!-- Contenido principal -->
      <div class="col-md-10 bg-light p-4">
        <div class="row justify-content-center">
          <!-- Calendario de Consultas -->
          <div class="col-md-5 py-2">
            <div class="card text-center shadow-lg">
              <div class="card-body">
                <img src="" alt="" class="mb-3">
                <h5 class="card-title">Test 1</h5>
                <p>Descripción.</p>
                <a href="#" class="btn btn-info">Continuar</a>
              </div>
            </div>
          </div>

          <!-- Calendario Personal -->
          <div class="col-md-5 py-2">
            <div class="card text-center shadow-lg">
              <div class="card-body">
                <img src="" alt="" class="mb-3">
                <h5 class="card-title">Test 2</h5>
                <p>Descripción.</p>
                <a href="#" class="btn btn-info">Continuar</a>
              </div>
            </div>
          </div>

          <div class="col-md-5 py-2">
            <div class="card text-center shadow-lg">
              <div class="card-body">
                <img src="" alt="" class="mb-3">
                <h5 class="card-title">Test 3</h5>
                <p>Descripción.</p>
                <a href="#" class="btn btn-info">Continuar</a>
              </div>
            </div>
          </div>

          <div class="col-md-5 py-2">
            <div class="card text-center shadow-lg">
              <div class="card-body">
                <img src="" alt="" class="mb-3">
                <h5 class="card-title">Test 4</h5>
                <p>Descripción.</p>
                <a href="#" class="btn btn-info">Continuar</a>
              </div>
            </div>
          </div>

          <div class="col-md-5 py-2">
            <div class="card text-center shadow-lg">
              <div class="card-body">
                <img src="" alt="" class="mb-3">
                <h5 class="card-title">Test 5</h5>
                <p>Descripción.</p>
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
