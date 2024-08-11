@extends('templates.template')

@section('title')
    <h3 class="text-light">ESTUDIANTES</h3>
@endsection

@section('content')
    <div class="row">
        <div class="col-12 text-end my-2">
            <a href="{{ route('estudiantes.create') }}" class="btn btn-primary btn-sm me-1">Nuevo Estudiante</a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <span class="bg-info rounded px-2 py-1 text-light">
                        <strong>Listado de Estudiantes</strong>
                    </span>

                    <div class="row px-1 mt-2">
                        <div class="col-12">

                            <table class="table table-sm table-bordered">
                                <thead>
                                    <tr>
                                        <th><small><strong>CUENTA</strong></small></th>
                                        <th><small><strong>NOMBRE DEL ESTUDIANTE</strong></small></th>
                                        <th><small><strong>DIRECCION</strong></small></th>
                                        <th><small><strong>CARRERA</strong></small></th>
                                        <th><small><strong>ACCIONES</strong></small></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($estudiantes as $estudiante)
                                        <tr>
                                            <td><small>{{$estudiante->cuenta}}</small></td>
                                            <td><small>{{$estudiante->nombre . ' ' . $estudiante->apellidos}}</small></td>
                                            <td><small>{{$estudiante->direccion}}</small></td>
                                            <td><small>{{$estudiante->carrera->carrera}}</small></td>
                                            <td>
                                                <a href="{{route('estudiantes.edit', $estudiante->cuenta)}}" class="btn btn-outline-warning btn-sm">
                                                    <span>Editar</span>
                                                </a>
                                                <a href="{{route('estudiantes.show', $estudiante->cuenta)}}" class="btn btn-outline-danger btn-sm">
                                                    <span>Eliminar</span>
                                                </a>
                                                <a href="{{route('asistencias.index', $estudiante->cuenta)}}" class="btn btn-outline-info btn-sm">
                                                    <span>Asistencias</span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
