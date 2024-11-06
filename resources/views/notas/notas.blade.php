<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notas</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/stylesNotas.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/stylosVistas.css') }}">
</head>
<body>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <span class="navbar-brand mb-0 h1">Notas</span>
          <span class="navbar-text text-white">Mayra Salazar García</span>
        </div>
    </nav>

  <div class="container-fluid">
    <div class="row">

      <!-- Sidebar -->
      <div id="sidebar" class="sidebar-collapsed bg-dark vh-100">
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
      <div class="col-md-10 p-3">

        <div class="container mt-5">
          <!-- Botón para agregar nota -->
          <button id="agregarNotaBtn" class="btn btn-primary mb-3">
            <i class="bi bi-plus-circle"></i> Agregar Nota
          </button>

          <!-- Tabla de notas -->
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Título</th>
                <th>Descripción</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody id="notasTable">
              <!-- Ejemplo de una fila de nota -->
              <tr>
                <td>Reportes</td>
                <td>Generar reportes correspondientes</td>
                <td>
                  <button class="btn btn-info btn-sm editarBtn">Editar</button>
                  <button class="btn btn-danger btn-sm eliminarBtn">Eliminar</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal para agregar/editar nota -->
  <div class="modal fade" id="notaModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLabel">Agregar Nota</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="notaForm">
            <div class="mb-3">
              <label for="titulo" class="form-label">Título</label>
              <input type="text" class="form-control" id="titulo" required>
            </div>
            <div class="mb-3">
              <label for="descripcion" class="form-label">Descripción</label>
              <textarea class="form-control" id="descripcion" rows="3" required></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" id="guardarNotaBtn">Guardar Nota</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Iconos de Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
  <script src="{{ asset('assets/js/notas.js') }}"></script>
  <script src="{{ asset('assets/js/ajustesVistas.js') }}"></script>
</body>
</html>
