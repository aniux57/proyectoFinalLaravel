@extends('layouts.console')

@section('title', 'Sucursales')

@section('content')
    <h1>Creación de Sucursal</h1>

    <form method="post" action="/municipios">
        @csrf
        <input type="text" id="nombre" name="nombre" placeholder="Nombre">

        <select id="id_departamento" name="id_departamento">
            @foreach ($departamentos as $departamento)
                <option value="{{ $departamento -> id }}">{{ $departamento -> nombre }}</option>
            @endforeach
        </select>

        <input type="submit" value="Subir">
    </form>
@endsection
