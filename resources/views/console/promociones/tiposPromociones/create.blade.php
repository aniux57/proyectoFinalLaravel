@extends('layouts.console')

@section('title', 'Tipos de Promociones')

@section('content')
    <h1>Creación de Tipos de Promociones</h1>

    <form method="post" action="/tiposPromociones">
        @csrf
        <input type="text" id="nombre" name="nombre" placeholder="Nombre">
        <input type="text" id="descripcion" name="descripcion" placeholder="Descripcion">
        <input type="text" id="unidades" name="unidades" placeholder="Unidades">
        <input type="text" id="descuento" name="descuento" placeholder="Descuento">

        <input type="submit" value="Crear">
    </form>
@endsection