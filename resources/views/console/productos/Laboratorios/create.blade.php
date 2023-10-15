@extends('layouts.console')

@section('title', 'Laboratorios')

@section('content')
    <h1>Creación de Laboratorios</h1>

    <form method="post" action="/laboratorios">
        @csrf
        <input type="text" id="nombre" name="nombre" placeholder="Nombre">
        <input type="text" id="descripcion" name="descripcion" placeholder="Descripcion">

        <input type="submit" value="Crear">
    </form>
@endsection
