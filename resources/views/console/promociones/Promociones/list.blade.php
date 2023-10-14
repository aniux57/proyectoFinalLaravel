@extends('layouts.console')

@section('title', 'Promociones')

@section('content')
    <h1>Listado de Promociones</h1>

    <a href="/promociones/create">Crear Promocion</a>

    <br><br>

    <table>
        <tr>
            <th>Indefinida</th>
            <th>Tipo Promocion</th>
            <th>Producto</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Estado</th>
        </tr>
        @foreach ($promociones as $promocion)
            <tr>
                <td>{{ $promocion -> indefinida }}</td>
                <td>{{ $promocion -> tipo_promocion -> nombre }}</td>
                <td>{{ $promocion -> producto ->nombre }}</td>
                <td>{{ $promocion -> fecha_inicio }}</td>
                <td>{{ $promocion -> fecha_fin }}</td>
                <td>{{ $promocion -> getEstado() }}</td>
            </tr>
        @endforeach
    </table>
@endsection