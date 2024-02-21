@extends('app')

@section('titulo')
    <h1>Registrar Justificante</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Registrar Justificante</li>
@stop

@section('contenido')
    <form action="{{ url('guardarJustificante') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Nombre</label>
            <input name="nombre" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Fecha falta</label>
            <input name="fecha_falta"type="date" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Fecha hasta</label>
            <input name="fecha_hasta" type="date" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Motivos</label>
            <input  name="motivos" type="text" class="form-control">
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ asset('/home') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@stop
