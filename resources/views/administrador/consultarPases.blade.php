@extends('appAdmin')

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
                    <th>Hora salida</th>
                    <th>Opciones</th>
                    <th>Más</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pases as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nombre }}</td>
                    <td>{{ $p->hora_salida }}</td>
                    <td>{{ $p->motivos }}</td>
                    <td>
                        <form action="{{ route('elemento.eliminar', $p->id) }}" method="POST">
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
                        <a href="{{ url('reporte/pdfPase') }}/{{ $p->id }}" class="btn btn-secondary btn-sm">
                            <i class="far fa-file-pdf"></i>
                        </a></form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop