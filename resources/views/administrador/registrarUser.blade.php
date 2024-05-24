@extends('appAdmin')


@section('titulo')
    <h1>Registrar Alumno</h1>
@stop
@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Registrar alumnos</li>
@stop

@section('contenido')
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<form action="{{ url('guardarUser') }}" method="POST">
    @csrf

    <h3>Información del Alumno</h3>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group col-md-4">
            <label for="paterno">Apellido Paterno</label>
            <input type="text" class="form-control" id="paterno" name="paterno" required>
        </div>
        <div class="form-group col-md-4">
            <label for="materno">Apellido Materno</label>
            <input type="text" class="form-control" id="materno" name="materno" required>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="curp">CURP</label>
            <input type="text" class="form-control" id="curp" name="curp" required>
        </div>
        <div class="form-group col-md-6">
            <label for="carrera">Carrera</label>
            <input type="text" class="form-control" id="carrera" name="carrera" required>
        </div>
    </div>

    <div class="form-row">
        
        <div class="form-group col-md-4">
            <label for="generacion">Generación</label>
            <input type="text" class="form-control" id="generacion" name="generacion" required>
        </div>
        <div class="form-group col-md-4">
            <label for="turno">Turno</label>
            <select class="form-control" id="turno" name="turno" required>
                <option value="matutino">Matutino</option>
                <option value="vespertino">Vespertino</option>
            </select>        </div>
        <div class="form-group col-md-4">
            <label for="numero_control">Número de Control</label>
            <input type="text" class="form-control" id="numero_control" name="numero_control" required>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="semestre">Semestre</label>
            <input type="number" class="form-control" id="semestre" name="semestre" required>
        </div>
        <div class="form-group col-md-2">
            <label for="grupo">Grupo</label>
            <input type="text" class="form-control" id="grupo" name="grupo" required>
        </div>
        <div class="form-group col-md-2">
            <label for="sexo">Sexo</label>
            <select class="form-control" id="sexo" name="sexo" required>
                <option value="H">Hombre</option>
                <option value="M">Mujer</option>
            </select>
    </div>
    </div><hr>

    <h3>Información del Padre o Madre</h3>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nombrePadre">Nombre del Padre/Madre</label>
            <input type="text" class="form-control" id="nombrePadre" name="nombrePadre" required>
        </div>
        <div class="form-group col-md-6">
            <label for="numeroPadre">Número de Teléfono</label>
            <input type="text" class="form-control" id="numeroPadre" name="numeroPadre" required>
        </div>
        
    </div>

    <button type="submit" class="btn btn-primary">Registrar Alumno</button>
</form>
@stop