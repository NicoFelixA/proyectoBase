@extends('app')

@section('titulo')
    <h1>Registrar pases de salida</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Registrar pases de salida</li>
@stop

@section('contenido')
    <form action="">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input name="nombre" type="text" class="form-control" value="{{ Auth::user()->name }}" readonly>
        </div>
        <div class="form-group">
            <label for="">Hora de salida</label>
            <input type="dateTime" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Motivos</label>
            <input type="text" class="form-control">
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ asset('/home') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@stop
