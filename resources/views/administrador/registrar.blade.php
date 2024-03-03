@extends('appAdmin')

@section('titulo')
    <h1>Registrar Justificante</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Registrar Justificante</li>
@stop

@section('contenido')
    <form action="{{ url('guardar') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Alumno</label>
            <select name="alumno_id" class="form-control" id="">
                <option value="">Selecciona un alumno:</option>
                @foreach($alumnos as $a)
                    <option value="{{$a->id}}">{{$a->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Fecha falta</label>
            <input name="fecha_falta"type="date" class="form-control" value="2024-12-12">
        </div>
        <div class="form-group">
            <label for="">Fecha hasta</label>
            <input name="fecha_hasta" type="date" class="form-control" value="2024-12-12">
        </div>
        <div class="form-group">
            <label for="">Motivos</label>
            <input  name="motivos" type="text" class="form-control" value="Mal estar">
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ asset('/home') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@stop
