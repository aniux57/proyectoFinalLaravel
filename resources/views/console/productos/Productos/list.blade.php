@extends('layouts.tables')

@section('title', 'Productos')
@section('sub_title', 'Listado de Productos')

@section('action')
<a class="btn btn-primary btn-lg" href="/productos/create">Crear Producto</a>
@endsection

@section('content')
    <div class="table-responsive">
        <table id="zero_config" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Especificaciones</th>
                    <th>Precio Regular</th>
                    <th>Laboratorio</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td>{{ $producto -> codigo }}</td>
                        <td>{{ $producto -> nombre }}</td>
                        <td>{{ $producto -> especificaciones }}</td>
                        <td>{{ $producto -> precio_regular }}</td>
                        <td>{{ $producto -> laboratorio -> nombre }}</td>
                        <td>{{ $producto -> getEstado() }}</td>
                        <td>
                            @component('components.console.btn_edit')
                                @slot('controller') productos @endslot
                                @slot('id') {{ $producto -> id }} @endslot
                            @endcomponent
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
