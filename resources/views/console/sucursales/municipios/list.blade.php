@extends('layouts.tables')

@section('title', 'Municipios')
@section('sub_title', 'Listado de Municipios')

@section('action')
<a class="btn btn-primary btn-lg" href="/municipios/create">Crear DeparMunicipiotamento</a>
@endsection

@section('content')
    <div class="table-responsive">
        <table id="zero_config" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Departamento</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($municipios as $municipio)
                    <tr>
                        <td>{{ $municipio -> nombre }}</td>
                        <td>{{ $municipio -> departamento -> nombre }}</td>
                        <td>{{ $municipio -> getEstado() }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
