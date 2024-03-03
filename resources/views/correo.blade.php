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
            text-align: center;
            padding: 20px;
            margin-bottom: 0; /* Elimina el margen inferior */
        }
        .preview-message p {
            margin: 0;
            font-size: 16px;
            color: #333;
        }
        h2{
            text-align: center;
            color: black
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
        h1{
            background-color: 	#7f1e1e;
            color: white;
            text-align: center;
            margin-bottom: 0; /* Elimina el margen inferior */
        }
        button{
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            color: #fff;
            background-color: #5f707a;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-align: center
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
            <h2 >Datos del Justificante</h2>
            <div class="datos">
                <p>Nombre: {{ $alumno->nombre }}</p>
                <p>Grupo: {{ $alumno->grupo }}</p>
                <p>Fecha de faltas: {{ $justificante->fecha_falta . ' al ' . $justificante->fecha_hasta }}</p>
                <p>Motivos: {{  $justificante->motivos }}</p>            
            </div><br><br>
        </div>
        <form>
            <a href="{{ url('/MostrarVerificacion')}}/{{$justificante->id}}" type="submit" class="btn btn-primary">Aceptar</a>
            <a href="#" class="btn btn-danger">Rechazar</a>
        </form>
        
    </div>

</body>
</html>
