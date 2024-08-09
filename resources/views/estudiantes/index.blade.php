@extends('templates.template')

@section('title')
    <h3 class="text-light">ESTUDIANTES</h3>
@endsection

@section('content')
    <div class="row">
        <div class="col-12 text-end">
            <a href="{{ route('estudiantes.create') }}" class="btn btn-primary btn-sm">Nuevo Estudiante</a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            @foreach ($estudiantes as $estudiante)
                                <ul>
                                    <li>{{ $estudiante->cuenta }}</li>
                                    <li>{{ $estudiante->nombre . '' . $estudiante->apellidos }}</li>
                                    <li>{{ $estudiante->direccion }}</li>
                                    <li>{{ $estudiante->carrera->carrera }}</li>
                                    <li>{{ $estudiante->carrera->uv }}</li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
