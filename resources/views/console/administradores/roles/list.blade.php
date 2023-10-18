@extends('layouts.tables')

@section('title', 'Roles')
@section('sub_title', 'Listado de Roles')

@section('action')
<a class="btn btn-primary btn-lg" href="/consola/roles/create">Crear Rol</a>
@endsection

@section('content')
    <div class="table-responsive">
        <table id="zero_config" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th>Permiso</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $rol)
                    <tr>
                        <td>{{ $rol -> nombre }}</td>
                        <td>{{ $rol -> permiso -> id }}</td>
                        <td>{{ $rol -> getEstado() }}</td>
                        <td>
                            @component('components.console.btn_edit')
                                @slot('controller') roles @endslot
                                @slot('id') {{ $rol -> id }} @endslot
                            @endcomponent
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
