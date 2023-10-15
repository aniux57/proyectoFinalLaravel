@extends('layouts.console')

@section('title', 'Sucursales')

@section('content')
    <h1>Creación de Sucursal</h1>

    <form method="post" action="/sucursales">
        @csrf
        <input type="text" id="nombre" name="nombre" placeholder="Nombre">
        <input type="text" id="direccion" name="direccion" placeholder="Direccion">
        <input type="text" id="referencias" name="referencias" placeholder="Referencias">
        <input type="text" id="telefonos" name="telefonos" placeholder="Telefonos">
        <input type="text" id="whatsapp" name="whatsapp" placeholder="WhatsApp">

        <select id="id_municipio" name="id_municipio">
            @foreach ($municipios as $municipio)
                <option value="{{ $municipio -> id }}">{{ $municipio -> nombre }}</option>
            @endforeach
        </select>

        <input type="submit" value="Crear">
    </form>
@endsection