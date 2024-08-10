@extends('templates.template')

@section('title')
    <h3 class="text-light">ESTUDIANTES</h3>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('estudiantes.update' , $estudiante->cuenta)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <label for="">
                                    <small>
                                        <strong>CUENTA</strong>
                                    </small>
                                </label>
                                <input type="text" name="cuenta" class="form-control form-control-sm" required maxlength="9" readonly value="{{$estudiante->cuenta}}">
                            </div>

                            <div class="row">
                                <div class="col-12 col-md-6 mt-2">
                                    <label for="">
                                        <small>
                                            <strong>NOMBRE</strong>
                                        </small>
                                    </label>
                                    <input type="text" name="nombre" class="form-control form-control-sm" required maxlength="100" value="{{$estudiante->nombre}}">
                                </div>
                                <div class="col-12 col-md-6 mt-2">
                                    <label for="">
                                        <small>
                                            <strong>APELLIDOS</strong>
                                        </small>
                                    </label>
                                    <input type="text" name="apellidos" class="form-control form-control-sm" required maxlength="100" value="{{$estudiante->apellidos}}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 mt-2">
                                    <label for="">
                                        <small>
                                            <strong>DIRECCION</strong>
                                        </small>
                                    </label>
                                    <input type="text" name="direccion" class="form-control form-control-sm" required maxlength="100" value="{{$estudiante->direccion}}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 mt-2">
                                    <label for="">
                                        <small>
                                            <strong>CARRERA</strong>
                                        </small>
                                    </label>
                                    <select name="carrera" id="" class="form-control form-control-sm">
                                        <option value="">SELECCIONAR CARRERA</option>
                                        @foreach($carreras as $carrera)
                                            <option value="{{$carrera->id}}" {{$carrera->id == $estudiante->carrera_id ? 'selected' : ''}}>{{$carrera->carrera}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 my-3">
                                    <button type="submit" class="btn btn-success">Registrar</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection