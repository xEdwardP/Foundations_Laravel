@extends('templates.template')

@section('title')
    <h3 class="text-light">Asistencia</h3>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <small><strong>Datos Generales del Estudiante</strong></small>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-3 mt-2">
                            <label for="">
                                <small><strong>N° de Cuenta</strong></small>
                            </label>
                            <input type="text" name="cta" value="{{$estudiante->cuenta}}" class="form-control form-control-sm" readonly>
                        </div>

                        <div class="col-12 col-md-9 mt-2">
                            <label for="">
                                <small><strong>Nombre del Estudiante</strong></small>
                            </label>
                            <input type="text" name="nombre" value="{{$estudiante->nombre . ' ' . $estudiante->apellidos}}" class="form-control form-control-sm" readonly>
                        </div>

                        <div class="col-12 mt-2">
                            <label for="">
                                <small><strong>Direccion</strong></small>
                            </label>
                            <input type="text" name="direccion" value="{{$estudiante->direccion}}" class="form-control form-control-sm" readonly>
                        </div>

                        <div class="col-12 mt-2">
                            <label for="">
                                <small><strong>Carrera</strong></small>
                            </label>
                            <input type="text" name="carrera" value="{{$estudiante->carrera->carrera}}" class="form-control form-control-sm" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mt-2">
            <div class="card">
                <div class="card-header">
                    <small><strong>Listado de Solicitudes</strong></small>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-12 text-end">
                            <a href="" class="btn btn-primary btn-sm">Nueva Solicitud</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mt-2">
                            <table class="table table-sm table-bordered">
                                <thead class="text-center">
                                    <tr>
                                        <th><small><strong>REF</strong></small></th>
                                        <th><small><strong>ASUNTO</strong></small></th>
                                        <th><small><strong>ESTADO</strong></small></th>
                                        <th><small><strong>FECHA</strong></small></th>
                                        <th><small><strong>ACCIONES</strong></small></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($estudiante->asistencias as $asistencia)
                                        <tr class="text-center">
                                            <td class="{{$asistencia->estado == 'En Curso' ?  'text-warning' : 'text-success'}}"><small><strong>{{$asistencia->id}}</strong></small></td>
                                            <td class="{{$asistencia->estado == 'En Curso' ?  'text-warning' : 'text-success'}}"><small>{{$asistencia->asunto}}</small></td>
                                            <td><small class="px-2 py-1 rounded {{$asistencia->estado == 'En Curso' ?  'bg-warning' : 'bg-success'}}">{{$asistencia->estado}}</small></td>
                                            <td class="{{$asistencia->estado == 'En Curso' ?  'text-warning' : 'text-success'}}">{{$asistencia->created_at->diffForHumans()}}</td>
                                            <td class="text-center">
                                                @if ($asistencia->estado == "En Curso")
                                                    <a href="" class="btn btn-outline-info btn-sm">Editar</a>
                                                    <a href="" class="btn btn-outline-danger btn-sm">Eliminar</a>
                                                @endif
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