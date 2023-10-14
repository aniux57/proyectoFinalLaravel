@extends('layouts.console')

@section('title', 'Roles')

@section('content')
    <h1>Listado de Roles</h1>

<a href="/roles/create">Crear Rol</a>

    <br><br>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Estado</th>
            <th>Permiso</th>
        </tr>
        @foreach ($roles as $rol)
            <tr>
                <td>{{ $rol -> nombre }}</td>
                <td>{{ $rol -> permiso -> id }}</td>	
                <td>{{ $rol -> getEstado() }}</td>
            </tr>
        @endforeach
    </table>
@endsection