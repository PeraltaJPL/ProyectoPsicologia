<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil de Usuario</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/stylesProfile.css') }}">
</head>
<body>

  <!-- Navbar -->
  {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Mi Aplicación</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <span class="navbar-text text-white">
              <a href="perfil.html" class="links_Listas text-decoration-none text-white">
                <i class="bi bi-person-circle"></i> Mayra Salazar García
              </a>
            </span>
          </li>
        </ul>
      </div>
    </div>
  </nav> --}}

  <!-- Perfil -->
  <div class="profile-container">
    <div class="text-center">
      <img src="https://via.placeholder.com/150" alt="Foto de Perfil" class="profile-image">
      <h2>Mayra Salazar García</h2>
      <p class="text-muted">Psicóloga</p>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-6">
        <h5>Información Personal</h5>
        <p><strong>Nombre:</strong> Mayra Salazar García</p>
        <p><strong>Correo Electrónico:</strong> mayra.salazar@example.com</p>
        <p><strong>Teléfono:</strong> +52 123 456 7890</p>
      </div>
      <div class="col-md-6">
        <h5>Opciones</h5>
        <button class="btn btn-primary w-100 edit-btn">Editar Información</button>
        <button class="btn btn-secondary w-100 mt-2 edit-btn">Agregar Imagen</button>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
