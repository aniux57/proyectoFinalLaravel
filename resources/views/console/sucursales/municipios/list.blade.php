@extends('layouts.console')

@section('title', 'Municipios')

@section('content')
    <h1>Listado de Municipios</h1>

    <a href="/municipios/create">Crear Departamento</a>

    <br><br>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Departamento</th>
            <th>Estado</th>
        </tr>
        @foreach ($municipios as $municipio)
            <tr>
                <td>{{ $municipio -> nombre }}</td>
                <td>{{ $municipio -> departamento -> nombre }}</td>
                <td>{{ $municipio -> getEstado() }}</td>
            </tr>
        @endforeach
    </table>
@endsection