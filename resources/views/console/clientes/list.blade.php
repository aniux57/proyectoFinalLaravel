@extends('layouts.tables')

@section('title', 'Clientes')
@section('sub_title', 'Listado de Clientes')

@section('action')
<a class="btn btn-primary btn-lg" href="/clientes/create">Crear Cliente</a>
@endsection

@section('content')
    <div class="table-responsive">
        <table id="zero_config" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nombres</th>
                    <th>Recibir Noticias</th>
                    <th>Recibir Promociones</th>
                    <th>Recibir Categoria Favorita</th>
                    <th>Recibir lavoratorio favorito</th>
                    <th>Recibir producto favorito</th>
                    <th>Verificado</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente -> nombres }}</td>
                        <td>{{ $cliente -> getRecibirNoticias() }}</td>
                        <td>{{ $cliente -> getRecibirPromociones() }}</td>
                        <td>{{ $cliente -> getRecibirFavCategoria() }}</td>
                        <td>{{ $cliente -> getRecibirFavLaboratorio() }}</td>
                        <td>{{ $cliente -> getRecibirFavProducto() }}</td>
                        <td>{{ $cliente -> getVerificado() }}</td>
                        <td>{{ $cliente -> getEstado() }}</td>
                        <td>
                            @component('components.console.btn_edit')
                                @slot('controller') clientes @endslot
                                @slot('id') {{ $cliente -> id }} @endslot
                            @endcomponent
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
