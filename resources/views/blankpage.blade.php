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
    <form action="/verificar-codigo" method="POST">
        @csrf
        @foreach ($justificantes as $justificante)
        <input type="hidden" name="justificante_id" value="{{ $justificante->id }}">
    @endforeach 
    <div style="text-align: center">
        <input type="text" name="codigo_verificacion" placeholder="Código de Verificación" maxlength="6">
        <button type="submit">Verificar</button></div>
    </form>
          <a href="">Reenviar código</a><br><br>
    <br><br>
    <div class="container">
    <img src="https://cetis96.edu.mx/img/logotipo/Logo-DGETI%20-%20CETis96.png" alt="">
    </div>
@stop
