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
        $questionsText = [
            1 => 'Me ayuda trazar o escribir a mano las palabras cuando tengo que aprenderlas de memoria.',
            2 => 'Recuerdo mejor un tema al escuchar una conferencia en vez de leer un libro de texto.',
            3 => 'Prefiero las clases que requieren una prueba sobre lo que se lee en el libro de texto.',
            4 => 'Me gusta comer bocados y mascar chicle, cuando estudio.',
            5 => 'Al prestar atención a una conferencia, puedo recordar las ideas principales sin anotarlas.',
            6 => 'Prefiero las instrucciones escritas sobre las orales.',
            7 => 'Yo resuelvo bien los rompecabezas y los laberintos.',
            8 => 'Prefiero las clases que requieran una prueba sobre lo que se presenta durante una conferencia.',
            9 => 'Me ayuda ver diapositivas y videos para comprender un tema.',
            10 => 'Recuerdo más cuando leo un libro que cuando escucho una conferencia.',
            11 => 'Por lo general, tengo que escribir los números del teléfono para recordarlos bien.',
            12 => 'Prefiero recibir las noticias escuchando la radio en vez de leerlas en un periódico.',
            13 => 'Me gusta tener algo como un bolígrafo o un lápiz en la mano cuando estudio.',
            14 => 'Necesito copiar los ejemplos de la pizarra del maestro para examinarlos más tarde.',
            15 => 'Prefiero las instrucciones orales del maestro a aquellas escritas en un examen o en la pizarra.',
            16 => 'Prefiero que un libro de texto tenga diagramas gráficos y cuadros porque me ayudan mejor a entender el material.',
            17 => 'Me gusta escuchar música al estudiar una obra, novela, etc.',
            18 => 'Tengo que apuntar listas de cosas que quiero hacer para recordarlas.',
            19 => 'Puedo corregir mi tarea examinándola y encontrando la mayoría de los errores.',
            20 => 'Prefiero leer el periódico en vez de escuchar las noticias.',
            21 => 'Puedo recordar los números de teléfono cuando los oigo.',
            22 => 'Gozo el trabajo que me exige usar la mano o herramientas.',
            23 => 'Cuando escribo algo, necesito leerlo en voz alta para oír como suena.',
            24 => 'Puedo recordar mejor las cosas cuando puedo moverme mientras estoy aprendiéndolas, por ej. caminar al estudiar, o participar en una actividad que me permita moverme, etc.',
        ];

        return view('listaTests.TestTiposDeAprendizaje.form', ['questionsText' => $questionsText]);
        // return view('listaTests.TestTiposDeAprendizaje.form');

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

        $testResult = TestResult::create([
            'patient_name' => $request->input('patient_name'),
            'career' => $request->input('career'),
            'date' => $request->input('date'),
            'location' => $request->input('location'),
            'visual_score' => $visualScore,
            'auditory_score' => $auditoryScore,
            'kinesthetic_score' => $kinestheticScore,
        ]);

        $questionsText = [
            1 => 'Me ayuda trazar o escribir a mano las palabras cuando tengo que aprenderlas de memoria.',
            2 => 'Recuerdo mejor un tema al escuchar una conferencia en vez de leer un libro de texto.',
            3 => 'Prefiero las clases que requieren una prueba sobre lo que se lee en el libro de texto.',
            4 => 'Me gusta comer bocados y mascar chicle, cuando estudio.',
            5 => 'Al prestar atención a una conferencia, puedo recordar las ideas principales sin anotarlas.',
            6 => 'Prefiero las instrucciones escritas sobre las orales.',
            7 => 'Yo resuelvo bien los rompecabezas y los laberintos.',
            8 => 'Prefiero las clases que requieran una prueba sobre lo que se presenta durante una conferencia.',
            9 => 'Me ayuda ver diapositivas y videos para comprender un tema.',
            10 => 'Recuerdo más cuando leo un libro que cuando escucho una conferencia.',
            11 => 'Por lo general, tengo que escribir los números del teléfono para recordarlos bien.',
            12 => 'Prefiero recibir las noticias escuchando la radio en vez de leerlas en un periódico.',
            13 => 'Me gusta tener algo como un bolígrafo o un lápiz en la mano cuando estudio.',
            14 => 'Necesito copiar los ejemplos de la pizarra del maestro para examinarlos más tarde.',
            15 => 'Prefiero las instrucciones orales del maestro a aquellas escritas en un examen o en la pizarra.',
            16 => 'Prefiero que un libro de texto tenga diagramas gráficos y cuadros porque me ayudan mejor a entender el material.',
            17 => 'Me gusta escuchar música al estudiar una obra, novela, etc.',
            18 => 'Tengo que apuntar listas de cosas que quiero hacer para recordarlas.',
            19 => 'Puedo corregir mi tarea examinándola y encontrando la mayoría de los errores.',
            20 => 'Prefiero leer el periódico en vez de escuchar las noticias.',
            21 => 'Puedo recordar los números de teléfono cuando los oigo.',
            22 => 'Gozo el trabajo que me exige usar la mano o herramientas.',
            23 => 'Cuando escribo algo, necesito leerlo en voz alta para oír como suena.',
            24 => 'Puedo recordar mejor las cosas cuando puedo moverme mientras estoy aprendiéndolas, por ej. caminar al estudiar, o participar en una actividad que me permita moverme, etc.',
        ];
    
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

        // return view('listaTests.TestTiposDeAprendizaje.results', compact('visualScore', 'auditoryScore', 'kinestheticScore'));
        return view('listaTests.TestTiposDeAprendizaje.results', [
            'testResult' => $testResult,
            'answers' => $answers,
            'questionsText' => $questionsText,
            'visualScore' => $visualScore,
            'auditoryScore' => $auditoryScore,
            'kinestheticScore' => $kinestheticScore,
        ]);

    }

    public function store(Request $request)
    {
        // Procesar y guardar los datos del formulario en la base de datos
        $testResult = new TestResult();
        $testResult->patient_name = $request->input('patient_name');
        $testResult->career = $request->input('career');
        $testResult->date = $request->input('date');
        $testResult->location = $request->input('location');

        $testResult->save();

        return redirect()->route('tests.results', ['id' => $testResult->id]);
    }

    


}
