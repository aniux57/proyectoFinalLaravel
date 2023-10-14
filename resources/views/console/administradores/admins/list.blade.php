@extends('layouts.console')

@section('title', 'Administradores')

@section('content')
    <h1>Listado de Administradores</h1>

    <a href="/admins/create">Crear Administrador</a>

    <br><br>

    <table>
        <tr>
            <th>Nombre</th>
        </tr>
        @foreach ($administradores as $administrador)
            <tr>
                <td>{{ $administrador -> nombre }}</td>
            </tr>
        @endforeach
    </table>
@endsection