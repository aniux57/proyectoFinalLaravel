@extends('layouts.console')

@section('title', 'Productos')

@section('content')
    <h1>Listado de Productos</h1>

<a href="/productos/create">Crear Producto</a>

    <br><br>

    <table>
        <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Especificaciones</th>
            <th>Precio Regular</th>
            <th>Estado</th>
        </tr>
        @foreach ($productos as $producto)
            <tr>
                <td>{{ $producto -> codigo }}</td>
                <td>{{ $producto -> nombre }}</td>
                <td>{{ $producto -> especificaciones }}</td>
                <td>{{ $producto -> precio_regular }}</td>
                <td>{{ $producto -> getEstado() }}</td>
            </tr>
        @endforeach
    </table>
@endsection