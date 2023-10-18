@extends('layouts.tables')

@section('title', 'Tipo de Promociones')
@section('sub_title', 'Listado de Tipo de Promociones')

@section('action')
<a class="btn btn-primary btn-lg" href="/consola/tiposPromociones/create">Crear Tipo de Promocion</a>
@endsection

@section('content')
    <div class="table-responsive">
        <table id="zero_config" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Unidades</th>
                    <th>Descuento</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tipoPromociones as $tipoPromocion)
                    <tr>
                        <td>{{ $tipoPromocion -> nombre }}</td>
                        <td>{{ $tipoPromocion -> descripcion }}</td>
                        <td>{{ $tipoPromocion -> unidades }}</td>
                        <td>{{ $tipoPromocion -> descuento }}</td>
                        <td>{{ $tipoPromocion -> getEstado() }}</td>
                        <td>
                            @component('components.console.btn_edit')
                                @slot('controller') tiposPromociones @endslot
                                @slot('id') {{ $tipoPromocion -> id }} @endslot
                            @endcomponent
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
