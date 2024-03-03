<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
       

        .container {
            display: flex;
            justify-content: center; /* Centra horizontalmente */
            align-items: center; /* Centra verticalmente */
        }

        img {
            width: 200px; /* Ancho de la imagen */
            text-align: center; /* Alinea la imagen en el centro */
        }
    
    </style>
    <h2>Confirmar justificante de: {{$justificante->alumno->nombre}}</h2><hr>
    <h3>Le hemos enviado un código de verificación a su correo</h3>
    <h4>Datos del justificante:</h4>
    <h5>Grupo: {{$justificante->alumno->grupo}}</h5>
    <h5>Fecha falta:  {{$justificante->fecha_falta}}</h5>
    <h5>Fecha hasta: {{$justificante->fecha_hasta}}</h5>
    <h5>Motivos: {{$justificante->motivos}}</h5>


    <form action="{{url('verificar-codigo')}}" method="POST">
        @csrf
        <input type="hidden" name="justificante_id" value="{{ $justificante->id }}">
     
    <div style="text-align: center">
        <input type="text" name="codigo_verificacion" placeholder="Código de Verificación" maxlength="6">
        <button type="submit">Verificar</button></div>
    </form>
          <a href="">Reenviar código</a><br><br>
    <br><br>
    <div class="container">
    <img src="https://cetis96.edu.mx/img/logotipo/Logo-DGETI%20-%20CETis96.png" alt="">
    </div>
</body>
</html>
