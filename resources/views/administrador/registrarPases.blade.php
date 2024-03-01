@extends('appAdmin')

@section('titulo')
    <h1>Registrar pases de salida</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Registrar pases de salida</li>
@stop

@section('contenido')
    <form action="{{ url('guardarP') }}" method="POST">
        @csrf
    <div>
        <label for="">Alumno</label>
        <select name="alumno_id" class="form-control" id="">
            <option value="">Selecciona un alumno:</option>
            @foreach($alumnos as $a)
            <option value="{{$a->id}}">{{$a->nombre}}</option>
            @endforeach
        </select>
    </div> 
        <div class="form-group">
            <label for="">Hora de salida</label>
            <input name="hora_salida" type="datetime-local" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Motivos</label>
            <input name="motivos" type="text" class="form-control">
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ asset('/home') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@stop
