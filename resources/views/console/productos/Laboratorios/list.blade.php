@extends('layouts.console')

@section('title', 'Laboratorios')

@section('content')
    <h1>Listado de Laboratorios</h1>

    <a href="/laboratorios/create">Crear Categoría</a>

    <br><br>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Estado</th>
        </tr>
        @foreach ($laboratorios as $laboratorio)
            <tr>
                <td>{{ $laboratorio -> nombre }}</td>
                <td>{{ $laboratorio -> descripcion }}</td>
                <td>{{ $laboratorio -> getEstado() }}</td>
            </tr>
        @endforeach
    </table>
@endsection
