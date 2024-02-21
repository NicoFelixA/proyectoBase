<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte PDF Generico</title>
    <style>
    </style>
</head>
<body>
    <div class="container">
        <div class="col-6">
            <h1>Datos del justificante</h1><hr>
            <h5>ID: {{ $alumno->id }}</h5>
            <h5>Nombre: {{ $alumno->nombre }}</h5>
            <h5>Edad: {{ $alumno->edad }}</h5>
            @if ($alumno->sexo == 0)
                <h5>Sexo: Femenino</h5>
            @else
                <h5>Sexo: Masculino</h5>
            @endif
        </div>
        <div class="col-6">
            <img src="{{ asset('images/QR') }}" width="200px">
        </div>
    </div>
</body>
</html>
