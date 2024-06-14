@extends('app')

@section('titulo')
    <h1>Consultar Justificantes</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Consultar Justificantes</li>
@stop

@section('contenido')
    <div class="responsive-table">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Grupo</th>
                    <th>Fecha falta</th>
                    <th>Fecha hasta</th>
                    <th>Más</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($justificantes as $justificante)
                    <tr>
                        <td>{{ $justificante->alumno->nombre }}</td>
                        <td>{{ $justificante->alumno->grupo }}</td>
                        <td>{{ $justificante->fecha_falta }}</td>
                        <td>{{ $justificante->fecha_hasta }}</td>
                    
                        <td>
                            <!-- Reporte PDF -->
                            <a href="{{ url('reporte/pdf') }}/{{ $justificante->id }}" class="btn btn-secondary btn-sm">
                                <i class="far fa-file-pdf"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop
