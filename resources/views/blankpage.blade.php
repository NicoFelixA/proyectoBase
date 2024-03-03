@extends('appAdmin')

@section('titulo')
    <h1>Centro de estudios tecnológicos industrial y de servicios No.107</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Blank page</li>
@stop

@section('contenido')
    <style>
        .codigo-input {
            display: flex;
            justify-content: center; /* Centra los elementos horizontalmente */
            align-items: center; /* Centra los elementos verticalmente */
        }

        .codigo-input input[type="text"] {
            width: 4em; /* Ancho de cada campo */
            height: 6em; /* Altura de cada campo */
            text-align: center; /* Para centrar el número en cada campo */
            margin: 0 1em; /* Espacio entre cada campo */
            border: 2px solid #ccc; /* Borde */
            border-radius: 5px; /* Bordes redondeados */
        }
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
    <h4>Confirmar justificante de: Nicolás Félix</h4><hr>
    <h6>Le hemos enviado un código de verificación a su correo</h6>
    <form action="">
        <div class="codigo-input">
            <input type="text" id="codigo1" name="codigo1" maxlength="1" pattern="[0-9]" required>
            <input type="text" id="codigo2" name="codigo2" maxlength="1" pattern="[0-9]" required>
            <input type="text" id="codigo3" name="codigo3" maxlength="1" pattern="[0-9]" required>
            <input type="text" id="codigo4" name="codigo4" maxlength="1" pattern="[0-9]" required>
            <input type="text" id="codigo5" name="codigo5" maxlength="1" pattern="[0-9]" required>
            <input type="text" id="codigo6" name="codigo6" maxlength="1" pattern="[0-9]" required>
          </div>
          <a href="">Reenviar código</a><br><br>
          <input class="btn btn-primary"type="submit" value="Enviar">
    </form><br><br>
    <div class="container">
    <img src="https://cetis96.edu.mx/img/logotipo/Logo-DGETI%20-%20CETis96.png" alt="">
    </div>
@stop
