@extends('layouts.tables')

@section('title', 'Administradores')
@section('sub_title', 'Listado de Administradores')

@section('action')
<a class="btn btn-primary btn-lg" href="/admins/create">Crear Administrador</a>
@endsection

@section('content')
    <div class="table-responsive">
        <table id="zero_config" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administradores as $administrador)
                    <tr>
                        <td>{{ $administrador -> nombre }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
