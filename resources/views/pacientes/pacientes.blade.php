<!-- resources/views/pacientes/pacientes.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/stylesPacientes.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/stylosVistas.css') }}">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark bg-gradient">
        <div class="container-fluid">
          <span class="navbar-brand mb-0 h1">PACIENTES ISIC</span>
          <span class="navbar-text text-white">
            <a href="#" class="links_Listas">
            <i class="bi bi-person-circle"></i> Mayra Salazar García
            </a>
          </span>
        </div>
      </nav>

    <div class="container-fluid">
        <div class="row">

            <div id="sidebar" class="sidebar sidebar-collapsed col-md-2 bg-dark vh-100">
                <ul class="nav flex-column text-white">
                    <li class="nav-item p-3">
                        <a href="{{route('Inicio.home')}}" class="links_Listas">
                        <i class="bi bi-house"></i> Inicio
                      </a>
                      </li>
                      <li class="nav-item p-3">
                        <a href="{{route('listaTests.aplicacionTest')}}" class="links_Listas">
                          <i class="bi bi-journal-text"></i> Tests
                        </a>
                      </li>
                      <li class="nav-item p-3 card-body bg-light bg-opacity-10 border rounded">
                        <a href="{{route('pacientes.grupos')}}" class="links_Listas">
                          <i class="bi bi-person"></i> Pacientes
                        </a>
                      </li>
                      <li class="nav-item p-3">
                        <a href="{{route('calendario.calendarioEventos')}}" class="links_Listas">
                          <i class="bi bi-calendar"></i> Calendario de Eventos
                        </a>
                      </li>
                      <li class="nav-item p-3">
                        <a href="{{route('notas.notas')}}" class="links_Listas">
                          <i class="bi bi-card-text"></i> Notas</a>
                      </li>
                      <li class="nav-item p-3">
                        <a href="{{route('InicioSesion.inisioSesion')}}" class="links_Listas">
                          <i class="bi bi-box-arrow-right"></i>Cerrar Sesión 
                        </a>
                      </li>
                </ul>
              </div>

            <div class="col-md-10 p-3">
              <h2>ISIC</h2
              <div class="container mt-5">
                <button onclick="openCreateModal()" class="btn btn-primary mb-3">
                    <i class="bi bi-plus-circle"></i> Crear Paciente
                </button>
                <table class="table table-bordered bg-primary bg-opacity-75 tabla_pacientes">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Número de Control</th>
                            <th>Carrera</th>
                            <th>Ciclo Escolar</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="bg-light">
                        @foreach($patients as $patient)
                        <tr>
                            <td>{{ $patient->name }}</td>
                            <td>{{ $patient->controlNumber }}</td>
                            <td>{{ $patient->career }}</td>
                            <td>{{ $patient->schoolCycle }}</td>
                            <td>
                                <button onclick="openEditModal({{ $patient->patientId }})" class="btn btn-warning btn-sm">Editar</button>
                                <form action="{{ route('pacientes.destroy', $patient->patientId) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

    
            </div>
        </div>
    </div>

            {{-- Modal para mostrar los formularios crear y editar paciente --}}
            <div class="modal fade" id="pacienteModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content" id="pacienteModalContent">
                    </div>
                </div>
            </div>

    {{-- Boostrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    {{-- Javascript --}}
    <script src="{{ asset('assets/js/pacientes.js') }}"></script>
    <script src="{{ asset('assets/js/ajustesVistas.js') }}"></script>
</body>
</html>
