@extends('appAdmin')

@section('titulo')
    <h1>Consultar Justificantes Aceptados</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Consultar Justificantes Aceptados</li>
@stop

@section('contenido')
    <div class="responsive-table">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Grupo</th>
                    <th>Fecha falta</th>
                    <th>Fecha hasta</th>
                    <th>Motivos</th>
                    <th>Ver PDF</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aceptados as $a)
<tr>
    <td>{{ $a->id }}</td>
    <td>{{ $a->alumno->nombre }}</td>
    <td>{{ $a->alumno->grupo }}</td>
    <td>{{ $a->fecha_falta }}</td>
    <td>{{ $a->fecha_hasta }}</td>
    <td>{{ $a->motivos }}</td>
    <td>
        <!-- Reporte PDF -->
        <a href="{{ url('reporte/pdf') }}/{{ $a->id }}" class="btn btn-secondary btn-sm">
            <i class="far fa-file-pdf"></i>
        </a></form>
    </td>
</tr>
@endforeach

            </tbody>
        </table>
    </div>
@stop
