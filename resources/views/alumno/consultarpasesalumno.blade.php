<!-- consultarpasesalumno.blade.php -->

@extends('app')

@section('titulo')
    <h1>Consultar Pases de salida</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Consultar Pases de salida</li>
@stop

@section('contenido')
    <div class="responsive-table">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Grupo</th>
                    <th>Fecha salida</th>
                    <th>Más</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pases as $pase)
                    <tr>
                        <td>{{ $pase->alumno->nombre }}</td> <!-- Asegúrate de acceder correctamente a la relación -->
                        <td>{{ $pase->alumno->grupo }}</td>
                        <td>{{ $pase->hora_salida }}</td>
                        <td>
                            <!-- Reporte PDF -->
                            <a href="{{ url('reporte/pdf') }}/{{ $pase->id }}" class="btn btn-secondary btn-sm">
                                <i class="far fa-file-pdf"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop
