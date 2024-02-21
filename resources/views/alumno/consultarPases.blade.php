@extends('app')

@section('titulo')
    <h1>Consultar pases de salida</h1>
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
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Grupo</th>
                    <th>Fecha salida</th>
                    <th>Opciones</th>
                    <th>Más</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumnos as $a)
                <tr>
                    <td>{{ $a->id }}</td>
                    <td>{{ $a->nombre }}</td>
                    <td>{{ $a->grupo }}</td>
                    <td>{{ $a->fecha_salida }}</td>
                    <td>
                        <form action="{{ route('elemento.eliminar', $a->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <!-- Eliminar -->
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fas fa-times"></i>
                            </button>
                        
                        <!-- Aceptar -->
                        <a href="" class="btn btn-success btn-sm">
                            <i class="fa fa-check"></i>
                        </a>
                    </td>
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