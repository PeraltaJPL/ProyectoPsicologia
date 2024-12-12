@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $test->name }}</h1>
    <p>{{ $test->description }}</p>
    @if($test->guide)
        <p><strong>Guía:</strong> {{ $test->guide }}</p>
    @endif

    <form action="{{ route('tests.submit', $test->testId) }}" method="POST">
        @csrf

        @foreach ($test->questions as $question)
            <div class="mb-4">
                <h4>{{ $loop->iteration }}. {{ $question->questionText }}</h4>

                @if ($question->type === 'multiple_choice')
                    @foreach ($question->options as $option)
                        <div class="form-check">
                            <input type="radio" 
                                   name="answers[{{ $question->questionId }}]" 
                                   id="option{{ $option->optionId }}" 
                                   value="{{ $option->optionId }}" 
                                   class="form-check-input" required>
                            <label for="option{{ $option->optionId }}" class="form-check-label">
                                {{ $option->optionText }}
                            </label>
                        </div>
                    @endforeach
                @else
                    <textarea 
                        name="answers[{{ $question->questionId }}]" 
                        class="form-control" 
                        rows="3" 
                        required></textarea>
                @endif
            </div>
        @endforeach

        <button type="submit" class="btn btn-primary">Enviar respuestas</button>
    </form>
</div>
@endsection
