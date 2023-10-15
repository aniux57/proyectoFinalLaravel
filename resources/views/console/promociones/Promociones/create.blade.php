@extends('layouts.console')

@section('title', 'Promociones')

@section('content')
    <h1>Creación de Promociones</h1>

    <form method="post" action="/Promociones">
        @csrf
        <input type="text" id="nombre" name="nombre" placeholder="Nombre">
        <input type="date" id="fecha_inicio" name="fecha_inicio" placeholder="Fecha Inicio">
        <input type="date" id="fecha_fin" name="fecha_fin" placeholder="Fecha Fin">

        <select id="id_tipo_promocion" name="id_tipo_promocion">
            @foreach ($tiposPromociones as $tipoPromocion)
                <option value="{{ $tipoPromocion -> id }}">{{ $tipoPromocion -> nombre }}</option>
            @endforeach
        </select>

        <select id="id_producto" name="id_producto">
            @foreach ($productos as $producto)
                <option value="{{ $producto -> id }}">{{ $producto -> nombre }}</option>
            @endforeach
        </select>

        <input type="submit" value="Crear">
    </form>
@endsection