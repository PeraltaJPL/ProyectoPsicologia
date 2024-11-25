<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PacientesController extends Controller
{
    // Muestra la lista de pacientes de una carrera especifica
    public function index(Request $request)
    {
        $career = $request->query('career'); // Obtiene la carrera que se envia en la url
        $patients = Patient::where('career', $career)->get(); // Busca los pacientes que pertenecen a esa carrera
        return view('pacientes.pacientes', compact('patients', 'career')); // Envia los datos a la vista
    }

    // Crear un nuevo patient
    public function create(Request $request)
    {
        $career = $request->query('career'); // Obtiene la carrera desde la url
        return view('pacientes.crear', compact('career')); 
    }

    // Guarda los datos de un nuevo paciente en la base de datos
    public function store(Request $request)
    {
        $patient = new Patient(); // Crea un nuevo paciente
        // Se le asigna los parametros (*Nota, existe una forma de validar desde el controllador, verificar.)
        $patient->name = $request->name; 
        $patient->controlNumber = $request->controlNumber; 
        $patient->career = $request->career; 
        $patient->schoolCycle = $request->schoolCycle; 
        $patient->save(); // Guarda el paciente en la base de datos

        // Regresa a la lista de pacientes de esa carrera con un mensaje de exito
        return redirect()->route('pacientes.index', ['career' => $patient->career])
            ->with('success', 'Paciente registrado con exito.');
    }

    // Muestra un formulario para editar los datos de un paciente
    public function edit($patientId)
    {
        $patient = Patient::findOrFail($patientId); // Busca el paciente por su id, si no existe, muestra error
        return view('pacientes.edit', compact('patient')); // Manda los datos del paciente a la vista
    }

    // Actualiza los datos de un paciente en la base de datos
    public function update(Request $request, $patientId)
    {
        $patient = Patient::find($patientId); // Busca el paciente por su id
        $patient->name = $request->name; 
        $patient->controlNumber = $request->controlNumber; 
        $patient->career = $request->career; 
        $patient->schoolCycle = $request->schoolCycle; 
        $patient->save(); // Guarda los cambios

        // Regresa a la lista de pacientes de la carrera con un mensaje de exito
        return redirect()->route('pacientes.index', ['career' => $patient->career])
            ->with('success', 'Paciente actualizado con éxito.');
    }

    // Elimina un paciente de la base de datos
    public function destroy(string $patientId, Request $request)
    {
        $patient = Patient::findOrFail($patientId); // Busca el paciente por su id, si no existe, muestra error
        $patient->delete(); // Elimina el paciente

        // Regresa a la lista de pacientes de esa carrera con un mensaje de exito
        return redirect()
            ->route('pacientes.index', ['career' => $request->career]) // Mantiene el filtro de carrera
            ->with('success', 'Paciente eliminado con éxito.');
    }
}
