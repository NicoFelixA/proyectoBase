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
            <h1>Datos del pase de salida</h1><hr>
            <h5>ID: {{ $alumno->id }}</h5>
            <h5>Nombre: {{ $alumno->nombre }}</h5>
            <h5>Fecha de salida: {{ $alumno->fecha_salida }}</h5>
            <h5>Motivos: {{  $alumno->motivos }}</h5>            
        </div>
        <div class="col-6">
            <img src="{{ asset('images/QR') }}" width="200px">
        </div>
    </div>
</body>
</html>
