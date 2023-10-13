@extends('layouts.console')

@section('title', 'Departamentos')

@section('content')
    <h1>Listado de Departamentos</h1>

    <a href="/departamentos/create">Crear Departamento</a>

    <br><br>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Estado</th>
        </tr>
        @foreach ($departamentos as $departamento)
            <tr>
                <td>{{ $departamento -> nombre }}</td>
                <td>{{ $departamento -> getEstado() }}</td>
            </tr>
        @endforeach
    </table>
@endsection
