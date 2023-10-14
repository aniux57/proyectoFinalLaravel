@extends('layouts.console')

@section('title', 'Clientes')

@section('content')
    <h1>Listado de Clientes</h1>

<a href="/clientes/create">Crear Cliente</a>

    <br><br>

    <table>
        <tr>
            <th>Nombres</th>
            <th>Recibir Noticias</th>
            <th>Recibir Promociones</th>
            <th>Recibir Categoria Favorita</th>
            <th>Recibir lavoratorio favorito</th>
            <th>Recibir producto favorito</th>
            <th>Verificado</th>
            <th>Estado</th>
        </tr>
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
            </tr>
        @endforeach
    </table>
@endsection