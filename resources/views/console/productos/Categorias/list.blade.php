@extends('layouts.tables')

@section('title', 'Categorias')
@section('sub_title', 'Listado de Categorias')

@section('action')
<a class="btn btn-primary btn-lg" href="/categorias/create">Crear Categoría</a>
@endsection

@section('content')
    <div class="table-responsive">
        <table id="zero_config" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria -> nombre }}</td>
                        <td>{{ $categoria -> descripcion }}</td>
                        <td>{{ $categoria -> getEstado() }}</td>
                        <td>
                            @component('components.console.btn_edit')
                                @slot('controller') categorias @endslot
                                @slot('id') {{ $categoria -> id }} @endslot
                            @endcomponent
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
