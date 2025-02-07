@extends('appAdmin')

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
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Grupo</th>
                    <th>Fecha falta</th>
                    <th>Fecha hasta</th>
                    <th>Motivos</th>
                    <th>Estatus</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($justificantes as $j)
                <tr>
                    <td>{{ $j->id }}</td>
                    <td>{{ $j->alumno->nombre }}</td>
                    <td>{{ $j->alumno->grupo }}</td>
                    <td>{{ $j->fecha_falta }}</td>
                    <td>{{ $j->fecha_hasta }}</td>
                    <td>{{ $j->motivos }}</td>
                    <td>{{ $j->estatus }}</td>
                    <td>
                        <form action="{{ route('elemento.eliminar', $j->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fas fa-times"></i>
                            </button>
                        </form>

                        <form action="{{ route('elemento.aceptar', $j->id) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-success btn-sm">
                                <i class="fa fa-check"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop
