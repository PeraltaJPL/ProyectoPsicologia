<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestResult;
use App\Models\Test;
use App\Models\Question;

class TestController extends Controller
{
    public function showForm()
    {
        return view('listaTests.TestTiposDeAprendizaje.form');

    }

    public function submitTest(Request $request)
    {
        $request->validate([
            'patient_name' => 'required|string|max:255',
            'career' => 'required|string|max:255',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
            // 'answers.*' => 'required|integer|min:1|max:5',
            'question1' => 'required|integer|min:1|max:5',
            'question2' => 'required|integer|min:1|max:5',
            'question3' => 'required|integer|min:1|max:5',
            'question4' => 'required|integer|min:1|max:5',
            'question5' => 'required|integer|min:1|max:5',
            'question6' => 'required|integer|min:1|max:5',
            'question7' => 'required|integer|min:1|max:5',
            'question8' => 'required|integer|min:1|max:5',
            'question9' => 'required|integer|min:1|max:5',
            'question10' => 'required|integer|min:1|max:5',
            'question11' => 'required|integer|min:1|max:5',
            'question12' => 'required|integer|min:1|max:5',
            'question13' => 'required|integer|min:1|max:5',
            'question14' => 'required|integer|min:1|max:5',
            'question15' => 'required|integer|min:1|max:5',
            'question16' => 'required|integer|min:1|max:5',
            'question17' => 'required|integer|min:1|max:5',
            'question18' => 'required|integer|min:1|max:5',
            'question19' => 'required|integer|min:1|max:5',
            'question20' => 'required|integer|min:1|max:5',
            'question21' => 'required|integer|min:1|max:5',
            'question22' => 'required|integer|min:1|max:5',
            'question23' => 'required|integer|min:1|max:5',
            'question24' => 'required|integer|min:1|max:5',

        ]);

        $answers = [];
        for ($i = 1; $i <= 24; $i++) {
            $answers[$i] = $request->input("question{$i}");
        }

        $visualQuestions = [1, 3, 6, 9, 10, 11, 14];
        $auditoryQuestions = [2, 5, 12, 15, 17, 21, 23];
        $kinestheticQuestions = [4, 7, 8, 13, 19, 22, 24];

        $visualScore = array_sum(array_intersect_key($answers, array_flip($visualQuestions)));
        $auditoryScore = array_sum(array_intersect_key($answers, array_flip($auditoryQuestions)));
        $kinestheticScore = array_sum(array_intersect_key($answers, array_flip($kinestheticQuestions)));

        TestResult::create([
            'patient_name' => $request->input('patient_name'),
            'career' => $request->input('career'),
            'date' => $request->input('date'),
            'location' => $request->input('location'),
            'visual_score' => $visualScore,
            'auditory_score' => $auditoryScore,
            'kinesthetic_score' => $kinestheticScore,
        ]);

        $testResult = TestResult::create([
            'patient_name' => $request->input('patient_name'),
            'career' => $request->input('career'),
            'date' => $request->input('date'),
            'location' => $request->input('location'),
            'visual_score' => $visualScore,
            'auditory_score' => $auditoryScore,
            'kinesthetic_score' => $kinestheticScore,
        ]);
    
        // Verifica que $testResult esté definido antes de usarlo
        if ($testResult) {
            // Guardar las respuestas individuales
            foreach ($answers as $questionId => $score) {
                Question::create([
                    'test_result_id' => $testResult->id,
                    'question_number' => $questionId,
                    'score' => $score,
                ]);
            }
        } else {
            // Manejar el caso donde $testResult no se crea correctamente
            return back()->withErrors(['error' => 'Error al guardar el resultado del test.']);
        }
        
        return view('listaTests.TestTiposDeAprendizaje.results', compact('visualScore', 'auditoryScore', 'kinestheticScore'));

    }

public function store(Request $request)
{
    // Procesar y guardar los datos del formulario en la base de datos
    $testResult = new TestResult();
    $testResult->patient_name = $request->input('patient_name');
    $testResult->career = $request->input('career');
    $testResult->date = $request->input('date');
    $testResult->location = $request->input('location');
    // Aquí puedes agregar los puntajes calculados y guardarlos si lo deseas
    // $testResult->visual_score = $visualScore;
    // $testResult->auditory_score = $auditoryScore;
    // $testResult->kinesthetic_score = $kinestheticScore;

    $testResult->save();

    return redirect()->route('tests.results', ['id' => $testResult->id]);
}


}
