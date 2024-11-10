function initFormValidation() { //Función para inicializar la validación del formulario crear.blade.php
    // Se obtiene el formulario de paciente y el boton guardar
    const pacienteForm = document.getElementById('pacienteForm');
    const guardarPacienteBtn = document.getElementById('guardarPacienteBtn');

    if (pacienteForm) {
        // Se obtiene los campos de entrada del formulario
        const nombreInput = pacienteForm.querySelector('input[name="name"]');
        const controlNumberInput = pacienteForm.querySelector('input[name="controlNumber"]');
        const careerSelect = pacienteForm.querySelector('select[name="career"]');
        const schoolCycleSelect = pacienteForm.querySelector('select[name="schoolCycle"]');

        // Función para validar que todos los campos esten completos
        function validarFormulario() {
            if (
                nombreInput.value.trim() !== '' &&
                controlNumberInput.value.trim() !== '' &&
                careerSelect.value !== '' &&
                schoolCycleSelect.value !== ''
            ) {
                guardarPacienteBtn.disabled = false;
            } else {
                guardarPacienteBtn.disabled = true;
            }
        }

        // Añade eventos para cada campo, para ejecutar la validación cuando se cambien
        nombreInput.addEventListener('input', validarFormulario);
        controlNumberInput.addEventListener('input', validarFormulario);
        careerSelect.addEventListener('change', validarFormulario);
        schoolCycleSelect.addEventListener('change', validarFormulario);

        // Ejecutar la validación inicial
        validarFormulario();
    }
}

// Función para abrir el modal de crear.blade.php
function openCreateModal() {
    fetch('/pacientes/crear')
        .then(response => response.text())
        .then(html => {
            document.getElementById('pacienteModalContent').innerHTML = html;
            let pacienteModal = new bootstrap.Modal(document.getElementById('pacienteModal'));
            pacienteModal.show();
            initFormValidation(); // Llamar a la validación del formulario
        })
        .catch(error => console.error('Error al cargar el formulario de creación:', error));
}

// Función para abrir el modal de edit.blade.php
function openEditModal(patientId) {
    fetch(`/pacientes/${patientId}/edit`)
        .then(response => response.text())
        .then(html => {
            document.getElementById('pacienteModalContent').innerHTML = html;
            let pacienteModal = new bootstrap.Modal(document.getElementById('pacienteModal'));
            pacienteModal.show();
            initFormValidation(); // Llamar a la validación del formulario
        })
        .catch(error => console.error('Error al cargar el formulario de edición:', error));
}
