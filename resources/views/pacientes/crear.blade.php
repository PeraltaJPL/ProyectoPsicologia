{{-- <h1>Hola</h1> --}}
<form id="pacienteForm" method="POST" action="{{ route('pacientes.store') }}">
    @csrf
    <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Crear Paciente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="mb-3">
            <label for="controlNumber" class="form-label">Número de Control</label>
            <input type="text" class="form-control" name="controlNumber" required>
        </div>
        <div class="mb-3">
            <label for="career" class="form-label">Carrera</label>
            <select class="form-control" name="career" required>
                <option value="" disabled selected>Selecciona una carrera</option>
                <option value="Industrial">Industrial</option>
                <option value="Gestión Empresarial">Gestión Empresarial</option>
                <option value="Industrias Alimenticias">Industrias Alimenticias</option>
                <option value="Sistemas Computacionales">Sistemas Computacionales</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="schoolCycle" class="form-label">Ciclo Escolar</label>
            <select class="form-control" name="schoolCycle" required>
                <option value="" disabled selected>Selecciona un ciclo escolar</option>
                <option value="Enero-Agosto">Enero-Agosto</option>
                <option value="Agosto-Diciembre">Agosto-Diciembre</option>
            </select>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" id="guardarPacienteBtn" disabled>Crear Paciente</button>
        
    </div>
</form>
