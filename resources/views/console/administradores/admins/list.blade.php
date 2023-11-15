@extends('layouts.tables')

@section('title', 'Administradores')
@section('sub_title', 'Listado de Administradores')

@section('action')
<a class="btn btn-primary btn-lg" href="/consola/admins/create">Crear Administrador</a>
@endsection

@section('content')
    <div class="table-responsive">
        <table id="zero_config" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administradores as $administrador)
                    <tr>
                        <td>{{ $administrador -> administrador -> nombre }}</td>
                        <td>{{ $administrador -> email }}</td>
                        <td>{{ $administrador -> getEstado() }}</td>
                        <td>
                            @component('components.console.btn_edit')
                                @slot('controller') admins @endslot
                                @slot('id') {{ $administrador -> id }} @endslot
                            @endcomponent
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
