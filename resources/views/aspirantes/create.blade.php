@extends('templates.template')

@section('title')
    <h3 class="text-light">ASPIRANTES</h3>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <span class="bg-info rounded px-2 py-1 text-light">Registrar Nuevo Aspirante</span>

                    <form action="{{route('aspirantes.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-4 col-lg-3 mt-2">
                                <label for="">
                                    <small>
                                        <strong>DNI:</strong>
                                    </small>
                                </label>
                                <input type="text" name="dni" class="form-control" required maxlength="13">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mt-2">
                                <label for="">
                                    <small>
                                        <strong>NOMBRE</strong>
                                    </small>
                                </label>
                                <input type="text" name="nombre" class="form-control" required maxlength="200">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6 mt-2">
                                <label for="">
                                    <small>
                                        <strong>DEPARTAMENTO</strong>
                                    </small>
                                </label>
                                <select name="depto" class="form-control" required>
                                    <option value="">SELECCIONAR DEPARTAMENTO</option>
                                    <option value="COPAN">COPAN</option>
                                    <option value="LEMPIRA">LEMPIRA</option>
                                    <option value="SANTA_BARBARA">SANTA BARBARA</option>
                                </select>
                            </div>

                            <div class="col-12 col-md-6 mt-2">
                                <label for="">
                                    <small>
                                        <strong>MUNICIPIO</strong>
                                    </small>
                                </label>
                                <select name="munic" class="form-control" required>
                                    <option value="">SELECCIONAR MUNICIPIO</option>
                                    <option value="SRC">SANTA ROSA DE COPAN</option>
                                    <option value="GRACIAS_LEMPIRA">GRACIAS LEMPIRA</option>
                                    <option value="OCOTEPEQUE">OCOTEPEQUE</option>
                                    <option value="SANTA_BARBARA">SANTA BARBARA</option>
                                </select>
                            </div>

                            <div class="col-12 col-md-6 mt-2">
                                <label for="">
                                    <small>
                                        <strong>COMUNIDAD</strong>
                                    </small>
                                </label>
                                <input type="text" name="comunidad" class="form-control" required maxlength="200">
                            </div>

                            <div class="col-12 col-md-6 mt-2">
                                <label for="">
                                    <small>
                                        <strong>BARRIO/COLONIA</strong>
                                    </small>
                                </label>
                                <input type="text" name="barrio" class="form-control" required maxlength="200">
                            </div>

                            <div class="col-12 col-md-3 mt-2">
                                <label for="">
                                    <small>
                                        <strong>INGRESO MENSUAL</strong>
                                    </small>
                                </label>
                                <input type="number" name="ingresomensual" class="form-control" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 my-3">
                                <button type="submit" class="btn btn-success">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection