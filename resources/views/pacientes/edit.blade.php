<!-- resources/views/pacientes/edit.blade.php -->
<form id="pacienteForm" method="POST" action="{{ route('pacientes.update', $patient->patientId) }}">
    @csrf
    @method('PUT')
    <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Editar Paciente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="name" value="{{ $patient->name }}" required>
        </div>
        <div class="mb-3">
            <label for="controlNumber" class="form-label">Número de Control</label>
            <input type="text" class="form-control" name="controlNumber" value="{{ $patient->controlNumber }}" required>
        </div>
        <div class="mb-3">
            <label for="career" class="form-label">Carrera</label>
            <select class="form-control" name="career" required>
                <option value="" disabled>Selecciona una carrera</option>
                <option value="Industrial" {{ $patient->career == 'Industrial' ? 'selected' : '' }}>Industrial</option>
                <option value="Gestión Empresarial" {{ $patient->career == 'Gestión Empresarial' ? 'selected' : '' }}>Gestión Empresarial</option>
                <option value="Industrias Alimenticias" {{ $patient->career == 'Industrias Alimenticias' ? 'selected' : '' }}>Industrias Alimenticias</option>
                <option value="Sistemas Computacionales" {{ $patient->career == 'Sistemas Computacionales' ? 'selected' : '' }}>Sistemas Computacionales</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="schoolCycle" class="form-label">Ciclo Escolar</label>
            <select class="form-control" name="schoolCycle" required>
                <option value="" disabled>Selecciona un ciclo escolar</option>
                <option value="Enero-Agosto" {{ $patient->schoolCycle == 'Enero-Agosto' ? 'selected' : '' }}>Enero-Agosto</option>
                <option value="Agosto-Diciembre" {{ $patient->schoolCycle == 'Agosto-Diciembre' ? 'selected' : '' }}>Agosto-Diciembre</option>
            </select>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar Paciente</button>
    </div>
</form>
