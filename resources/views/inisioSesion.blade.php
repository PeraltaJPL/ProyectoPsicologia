<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio de Sesión</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center align-items-center vh-100">
      <div class="col-md-6">
        <div class="card p-4 shadow-lg">
          <div class="card-body text-center">
            <h1 class="h4 mb-4">Plataforma Académica ITSH</h1>
            <form>
              <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="usuario" placeholder="Escriba su número de control">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" placeholder="********">
              </div>
              <button type="submit" class="btn btn-success w-100">Entrar</button>
            </form>
            <div class="mt-3">
              <a href="#" class="text-muted">Olvidé mi contraseña</a>
            </div>
          </div>
        </div>
        <div class="text-center mt-4">
          <!-- <img src="logos.png" alt="logos" class="img-fluid">
          <img src="logos.png" alt="logos" class="img-fluid">
          <img src="logos.png" alt="logos" class="img-fluid">
          <img src="logos.png" alt="logos" class="img-fluid"> -->
        </div>
      </div>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
