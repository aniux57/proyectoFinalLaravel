@extends('layouts.tables')

@section('title', 'Departamentos')
@section('sub_title', 'Listado de Departamentos')

@section('action')
<a class="btn btn-primary btn-lg" href="/consola/departamentos/create">Crear Departamento</a>
@endsection

@section('content')
    <div class="table-responsive">
        <table id="zero_config" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($departamentos as $departamento)
                    <tr>
                        <td>{{ $departamento -> nombre }}</td>
                        <td>{{ $departamento -> getEstado() }}</td>
                        <td>
                            @component('components.console.btn_edit')
                                @slot('controller') departamentos @endslot
                                @slot('id') {{ $departamento -> id }} @endslot
                            @endcomponent
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
