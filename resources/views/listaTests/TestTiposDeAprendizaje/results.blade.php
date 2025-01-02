<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados del Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/stylesHome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/stylosVistas.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <!-- Barra superior -->
    <nav class="navbar navbar-dark bg-dark bg-gradient">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Resultados</span>
            <span class="navbar-text text-white">
                <a href="{{ route('perfil.perfil') }}" class="links_Listas">
                    {{ $user->username ?? $user->name ?? 'Usuario' }}
                </a>
            </span>
        </div>
    </nav>
    <div class="container p-5">
    <h1>Resultados del Test</h1>
    <p><strong>Nombre del paciente:</strong> {{ $testResult->patient_name }}</p>
    <p><strong>Carrera:</strong> {{ $testResult->career }}</p>
    <p><strong>Fecha:</strong> {{ $testResult->date }}</p>
    <p><strong>Ubicación:</strong> {{ $testResult->location }}</p>

    <h2>Respuestas:</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Pregunta</th>
                <th>Respuesta</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($answers as $questionNumber => $answer)
            <tr>
                <td>{{ $questionNumber }}</td>
                <td>{{ $questionsText[$questionNumber] }}</td>
                <td>{{ $answer }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Estilos de Aprendizaje</h2>
    <canvas id="learningStylesChart"></canvas>
    <script>
        const ctx = document.getElementById('learningStylesChart').getContext('2d');
        const chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Visual', 'Auditivo', 'Kinestésico'],
                datasets: [{
                    label: 'Puntajes',
                    data: [{{ $visualScore }}, {{ $auditoryScore }}, {{ $kinestheticScore }}],
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: false },
                },
            }
        });
    </script>
    {{-- <canvas id="learningStylesChart"></canvas>
    <script>
        const ctx = document.getElementById('learningStylesChart').getContext('2d');
        const chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Visual', 'Auditivo', 'Kinestésico'],
                datasets: [{
                    label: 'Puntajes',
                    data: [{{ $visualScore }}, {{ $auditoryScore }}, {{ $kinestheticScore }}],
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: false },
                },
            }
        });
    </script> --}}
    </div>
</body>
</html>
