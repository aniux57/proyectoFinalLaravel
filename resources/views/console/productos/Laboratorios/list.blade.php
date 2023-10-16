@extends('layouts.tables')

@section('title', 'Laboratorios')
@section('sub_title', 'Listado de Laboratorios')

@section('action')
<a class="btn btn-primary btn-lg" href="/laboratorios/create">Crear Laboratorio</a>
@endsection

@section('content')
    <div class="table-responsive">
        <table id="zero_config" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($laboratorios as $laboratorio)
                    <tr>
                        <td>{{ $laboratorio -> nombre }}</td>
                        <td>{{ $laboratorio -> descripcion }}</td>
                        <td>{{ $laboratorio -> getEstado() }}</td>
                        <td>
                            @component('components.console.btn_edit')
                                @slot('controller') laboratorios @endslot
                                @slot('id') {{ $laboratorio -> id }} @endslot
                            @endcomponent
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
