@extends('layouts.console')

@section('title', 'Tipo de Promociones')

@section('content')
    <h1>Listado de Tipo de Promociones</h1>

    <a href="/tiposPromociones/create">Crear Tipo de Promocion</a>

    <br><br>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Unidades</th>
            <th>Descuento</th>
            <th>Estado</th>
        </tr>
        @foreach ($tipoPromociones as $tipoPromocion)
            <tr>
                <td>{{ $tipoPromocion -> nombre }}</td>
                <td>{{ $tipoPromocion -> descripcion }}</td>
                <td>{{ $tipoPromocion -> unidades }}</td>
                <td>{{ $tipoPromocion -> descuento }}</td>
                <td>{{ $tipoPromocion -> getEstado() }}</td>
            </tr>
        @endforeach
    </table>
@endsection
