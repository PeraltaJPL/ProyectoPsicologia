<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PacientesController extends Controller
{
    // Mostrar todos los pacientes
    public function index()
    {
        $patients = Patient::all();
        return view('pacientes.pacientes', compact('patients'));
    }

    // Mostrar formulario para crear un nuevo paciente
    public function create()
    {
        return view('pacientes.crear');
    }

    // Guardar un nuevo paciente
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'controlNumber' => 'required|string|max:50|unique:patients',
            'career' => 'nullable|string|max:100',
            'schoolCycle' => 'nullable|string|max:50',
        ]);

        Patient::create($request->all());

        return redirect()->route('pacientes.index')->with('success', 'Paciente creado exitosamente');
    }

    // Mostrar formulario para editar un paciente existente
    public function edit($id)
    {
        $patient = Patient::findOrFail($id);
        return view('pacientes.edit', compact('patient'));
    }

    // Actualizar un paciente existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'controlNumber' => 'required|string|max:50|unique:patients,controlNumber,' . $id . ',patientId',
            'career' => 'nullable|string|max:100',
            'schoolCycle' => 'nullable|string|max:50',
        ]);

        $patient = Patient::findOrFail($id);
        $patient->update($request->all());

        return redirect()->route('pacientes.index')->with('success', 'Paciente actualizado exitosamente');
    }

    // Eliminar un paciente
    public function destroy($id)
    {
        $patient = Patient::findOrFail($id);
        $patient->delete();

        return redirect()->route('pacientes.index')->with('success', 'Paciente eliminado exitosamente');
    }
}
