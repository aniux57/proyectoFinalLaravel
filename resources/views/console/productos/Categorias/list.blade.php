@extends('layouts.console')

@section('title', 'Categorias')

@section('content')
    <h1>Listado de Categorias</h1>

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
                <td>{{ $sucursal -> nombre }}</td>
                <td>{{ $sucursal -> descripcion }}</td>
                <td>{{ $sucursal -> getEstado() }}</td>
            </tr>
        @endforeach
    </table>
@endsection
