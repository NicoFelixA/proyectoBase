<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte PDF Generico</title>
    <style>
        h1{
            text-align: center;
        }
        h3{
            text-align: center;
        }
        .datos{
            font-size: 20px;
        }
        .imagen{
            text-align: center;
        }
        *{
            margin: 15px;
        }
        
        
    </style>
</head>
<body>
    <div class="container">
        <img src="images/banner.jpg" alt="">
        <h1 >Centro De Estudios Tecnológicos Industrial Y De Servicios 107</h1><hr>
            <h3 >Datos del Justificante</h3>
            <div class="datos">
                <p>Nombre: {{ $pases->alumno->nombre }}</p>
                <p>Grupo: {{ $pases->alumno->grupo }}</p>
                <p>Hora de salida: {{ $pases->hora_salida}}</p>
            </div><br><br><br><br><br>
        <div class="imagen">
            <img src="{{ asset('images/framePase.png') }}" width="200px">
        </div>
    </div>
</body>
</html>
