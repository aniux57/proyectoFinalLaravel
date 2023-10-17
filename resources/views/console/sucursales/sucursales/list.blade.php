@extends('layouts.tables')

@section('title', 'Sucursales')
@section('sub_title', 'Listado de Sucursales')

@section('action')
<a class="btn btn-primary btn-lg" href="/sucursales/create">Crear Sucursal</a>
@endsection

@section('content')
    <div class="table-responsive">
        <table id="zero_config" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Referencias</th>
                    <th>Teléfonos</th>
                    <th>Whatsapp</th>
                    <th>Latitud</th>
                    <th>Longitud</th>
                    <th>Municipio</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sucursales as $sucursal)
                    <tr>
                        <td>{{ $sucursal -> nombre }}</td>
                        <td>{{ $sucursal -> direccion }}</td>
                        <td>{{ $sucursal -> referencias }}</td>
                        <td>{{ $sucursal -> telefonos }}</td>
                        <td>{{ $sucursal -> whatsapp }}</td>
                        <td>{{ $sucursal -> latitud }}</td>
                        <td>{{ $sucursal -> longitud }}</td>
                        <td>{{ $sucursal -> municipio -> nombre }}</td>
                        <td>{{ $sucursal -> getEstado() }}</td>
                        <td>
                            @component('components.console.btn_edit')
                                @slot('controller') sucursales @endslot
                                @slot('id') {{ $sucursal -> id }} @endslot
                            @endcomponent
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
