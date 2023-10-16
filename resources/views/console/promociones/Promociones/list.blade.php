@extends('layouts.tables')

@section('title', 'Promociones')
@section('sub_title', 'Listado de Promociones')

@section('action')
<a class="btn btn-primary btn-lg" href="/promociones/create">Crear Promocion</a>
@endsection

@section('content')
    <div class="table-responsive">
        <table id="zero_config" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Indefinida</th>
                    <th>Tipo Promocion</th>
                    <th>Producto</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($promociones as $promocion)
                    <tr>
                        <td>{{ $promocion -> getIndefinida() }}</td>
                        <td>{{ $promocion -> tipoPromocion -> nombre }}</td>
                        <td>{{ $promocion -> producto ->nombre }}</td>
                        <td>{{ $promocion -> fecha_inicio }}</td>
                        <td>{{ $promocion -> fecha_fin }}</td>
                        <td>{{ $promocion -> getEstado() }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
