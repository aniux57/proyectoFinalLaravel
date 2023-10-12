@extends('layouts.console')

@section('title', 'Sucursales')

@section('content')
    <h1>Listado de Sucursales</h1>

    <br>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Referencias</th>
            <th>Teléfonos</th>
            <th>Whatsapp</th>
            <th>Municipio</th>
            <th>Estado</th>
        </tr>
        @foreach ($sucursales as $sucursal)
            <tr>
                <td>{{ $sucursal -> nombre }}</td>
                <td>{{ $sucursal -> direccion }}</td>
                <td>{{ $sucursal -> referencias }}</td>
                <td>{{ $sucursal -> telefonos }}</td>
                <td>{{ $sucursal -> whatsapp }}</td>
                <td>{{ $sucursal -> municipio -> nombre }}</td>
                <td>{{ $sucursal -> getEstado() }}</td>
            </tr>
        @endforeach
    </table>
@endsection
