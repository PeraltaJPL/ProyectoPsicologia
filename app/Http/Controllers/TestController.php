<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\Question;

class TestController extends Controller
{
    public function index()
    {
        $tests = Test::all(); // Obtiene todos los tests
        // dd($tests); // Verifica que los datos se obtienen correctamente
        return view('listaTests.aplicacionTest', compact('tests'));
    }

    // Muestra el test en la vista
    public function show($id)
    {
        // Encuentra el test por ID con preguntas y opciones
        $test = Test::with('questions.options')->findOrFail($id);

        // Retorna la vista con los datos del test
        return view('tests.show', compact('test'));
    }

    // Procesa las respuestas enviadas por el usuario
    public function submit(Request $request, $id)
    {
        $test = Test::findOrFail($id);
        $answers = $request->input('answers'); // Respuestas enviadas

        // Validación simple (asegúrate de ajustar según los requisitos)
        foreach ($test->questions as $question) {
            if (!isset($answers[$question->questionId])) {
                return back()->with('error', 'Responde todas las preguntas.');
            }
        }

        // Aquí puedes almacenar las respuestas o procesarlas
        // Por ahora solo retornaremos las respuestas al usuario
        return view('tests.results', [
            'test' => $test,
            'answers' => $answers
        ]);
    }
}
