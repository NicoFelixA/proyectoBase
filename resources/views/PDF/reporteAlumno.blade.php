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
        <div class=>
            <h1 >Centro De Estudios Tecnológicos Industrial Y De Servicios 107</h1><hr>
            <h3 >Datos del Justificante</h3>
            <div class="datos">
                <p>Nombre: {{ $justificantes->alumno->nombre }}</p>
                <p>Grupo: {{ $justificantes->alumno->grupo }}</p>
                <p>Fecha de faltas: {{ $justificantes->fecha_falta . ' al ' . $justificantes->fecha_hasta }}</p>
                <p>Motivos: {{  $justificantes->motivos }}</p>            
                <p>Estatus: {{  $justificantes->estatus }}</p>            
            </div><br><br><br><br><br>
        </div>
        <div class="imagen">
            <img src="{{ asset('images/frame.png') }}" width="">
        </div>
    </div>
</body>
</html>
