@extends('layouts.tables')

@section('title', 'Categorias')
@section('sub_title', 'Listado de Categorias')

@section('content')

    <a href="/categorias/create">Crear Categoría</a>

    <br><br>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Estado</th>
        </tr>
        @foreach ($categorias as $categoria)
            <tr>
                <td>{{ $categoria -> nombre }}</td>
                <td>{{ $categoria -> descripcion }}</td>
                <td>{{ $categoria -> getEstado() }}</td>
            </tr>
        @endforeach
    </table>
@endsection
