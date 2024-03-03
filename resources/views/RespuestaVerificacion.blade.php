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
        h1{
            text-align: center;
        }
        .container{
            text-align: center;
        }
        img{
            width: 200px;
        }
    </style>
    @if($respuesta==1)
     <h1>Se aceptó el justificante</h1>
    @elseif($respuesta==0)
      <h1>Se rechazó el justificante</h1>
    @else
        <h1>Ocurrio un error</h1>
    @endif
    <hr><br><br>
    <div class="container">
        <img src="https://cetis96.edu.mx/img/logotipo/Logo-DGETI%20-%20CETis96.png" alt="">
        </div></body>
</html>