@extends('templates.template')

@section('title')
    <h3 class="text-light">ASPIRANTES</h3>
@endsection

@section('content')
    <div class="row">
        <div class="col-12 text-end">
            <a href="{{route('aspirantes.create')}}" class="btn btn-primary btn-sm">Nuevo Aspirante</a>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mt-2">
            <div class="card">
                <div class="card-body">
                    <span class="bg-info rounded px-2 py-1 text-light">
                        <strong>Listado de Aspirantes</strong>
                    </span>
                </div>
            </div>
        </div>
    </div>
@endsection