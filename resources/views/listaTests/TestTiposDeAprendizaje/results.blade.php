@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Resultados de: {{ $test->name }}</h1>

    <ul>
        @foreach ($test->questions as $question)
            <li>
                <strong>{{ $question->questionText }}</strong>
                <br>
                <span>Tu respuesta: 
                    @if ($question->type === 'multiple_choice')
                        {{ $question->options->firstWhere('optionId', $answers[$question->questionId])->optionText ?? 'No respondida' }}
                    @else
                        {{ $answers[$question->questionId] ?? 'No respondida' }}
                    @endif
                </span>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('tests.show', $test->testId) }}" class="btn btn-secondary">Regresar al test</a>
</div>
@endsection
