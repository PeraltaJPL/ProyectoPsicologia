<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio de Sesión</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets/css/stylesInicioSesion.css') }}">

</head>
<body>

  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid justify-content-center">
      <span class="navbar-brand mb-0 h1 tituNav">AREA DE PSICOLOGÍA</span>
    </div>
  </nav>

  <form action="{{route('Inicio.home')}}" method="post"><!--Duda en la autentificacion-->
  @csrf
  <div class="container">
    <div class="row justify-content-center align-items-center vh-100">
      <div class="col-md-6">
        <div class="card p-4 shadow-lg">
          <div class="card-body text-center">
            <h1 class="h1 mb-4">Plataforma Académica ITSH</h1>

            <form>
              <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control text-center" id="usuario" placeholder="Escriba su número de control">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" name="password" class="form-control text-center" id="password" placeholder="********">
              </div>
              <a href="{{route('Inicio.home')}}" type="submit" class="btn btn-success">Entrar</a>
            </form>
            <div class="mt-3">
              <a href="#" class="text-muted">Olvidé mi contraseña</a>
            </div>
          </div>
        </div>
        <div class="text-center mt-4 logosFooter">
          <img src="{{asset('assets/images/logoSEP.png')}}" alt="SEP" class="img-fluid" width="300em" height="70em">
          <img src="{{asset('assets/images/logoTecNM.png')}}" alt="TecNM" class="img-fluid" width="150em" height="70em">
          <img src="{{asset('assets/images/logoEstado.png')}}" alt="Estado de Michoácan" class="img-fluid" width="55em" height="70em">
          <img src="{{asset('assets/images/logoITSH.png')}}" alt="ITSH" class="img-fluid" width="70em" height="70em">
        </div>
      </div>
    </div>
  </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
