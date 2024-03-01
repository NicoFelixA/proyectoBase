<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Correo Justificante</title>
    <style>
        .preview-message {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
            text-align: center;
        }
        .preview-message p {
            margin: 0;
            font-size: 16px;
            color: #333;
        }
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
    <div class="preview-message">
        <p>Tu hijo(a) está solicitando un justificante - Abre este correo para aceptar o rechazarlo</p>
    </div>

    <div class="container">
        <div>
            <h1 >Centro De Estudios Tecnológicos Industrial Y De Servicios 107</h1><hr>
            <h3 >Datos del Justificante</h3>
            <div class="datos">
                <p>Nombre: {{ $justificante->alumno->nombre }}</p>
                <p>Grupo: {{ $justificante->alumno->grupo }}</p>
                <p>Fecha de faltas: {{ $justificante->fecha_falta . ' al ' . $justificante->fecha_hasta }}</p>
                <p>Motivos: {{  $justificante->motivos }}</p>            
            </div><br><br><br><br><br>
        </div>
        
    </div>
</body>
</html>