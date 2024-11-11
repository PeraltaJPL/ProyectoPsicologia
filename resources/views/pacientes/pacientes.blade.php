<!-- resources/views/pacientes/pacientes.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/stylesPacientes.css') }}">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Pacientes</span>
        </div>
    </nav>

    <div class="container mt-5">
        <button onclick="openCreateModal()" class="btn btn-primary mb-3">
            <i class="bi bi-plus-circle"></i> Crear Paciente
        </button>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Número de Control</th>
                    <th>Carrera</th>
                    <th>Ciclo Escolar</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
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
</body>
</html>
