@extends('templates.template')

@section('title')
    <h3 class="text-light">MI EMPRESA</h3>
@endsection

@section('content')
    <div class="row">
        <div class="col-12 mt-2">
            <div class="card">
                <div class="card-header">
                    <small><strong>Informacion General de la Empresa</strong></small>
                </div>

                <div class="card-body">
                    <form action="{{ route('mi-empresa.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-12 col-md-3 mt-2">
                                <label for="">
                                    <small><strong>RTN</strong></small>
                                </label>
                                <input type="text" name="rtn" class="form-control form-control-sm" required maxlength="13">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6 mt-2">
                                <label for="">
                                    <small><strong>NOMBRE O RAZON SOCIAL</strong></small>
                                </label>
                                <input type="text" name="nombre_razon" class="form-control form-control-sm" required maxlength="255">
                            </div>

                            <div class="col-12 col-md-6 mt-2">
                                <label for="">
                                    <small><strong>ESLOGAN</strong></small>
                                </label>
                                <input type="text" name="eslogan" class="form-control form-control-sm" required maxlength="255">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mt-2">
                                <label for="">
                                    <small>
                                        <strong>DIRECCION</strong>
                                    </small>
                                </label>
                                <input type="text" name="direccion" class="form-control form-control-sm" required maxlength="255">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mt-2">
                                <label for="">
                                    <small>
                                        <strong>TELEFONOS</strong>
                                    </small>
                                </label>
                                <input type="text" name="telefonos" class="form-control form-control-sm" required maxlength="200">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mt-2">
                                <label for="">
                                    <small>
                                        <strong>PROPIETARIO</strong>
                                    </small>
                                </label>
                                <input type="text" name="propietario" class="form-control form-control-sm" required maxlength="200">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6 mt-2">
                                <label for="">
                                    <small>
                                        <strong>CORREO</strong>
                                    </small>
                                </label>
                                <input type="text" name="correo" class="form-control form-control-sm" required maxlength="200">
                            </div>

                            <div class="col-12 col-md-6 mt-2">
                                <label for="">
                                    <small>
                                        <strong>SITIO WEB</strong>
                                    </small>
                                </label>
                                <input type="text" name="website" class="form-control form-control-sm" maxlength="200">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6 mt-2">
                                <label for="">
                                    <small>
                                        <strong>LOGOTIPO PRINCIPAL</strong>
                                    </small>
                                </label>
                                <input type="file" name="logo_1" class="form-control form-control-sm">
                            </div>

                            <div class="col-12 col-md-6 mt-2">
                                <label for="">
                                    <small>
                                        <strong>LOGOTIPO SECUNDARIO</strong>
                                    </small>
                                </label>
                                <input type="file" name="logo_2" class="form-control form-control-sm">
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
