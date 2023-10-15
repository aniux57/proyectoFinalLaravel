@extends('layouts.console')

@section('title', 'Categorias')

@section('content')
    <h1>Creación de Categorias</h1>

    <form method="post" action="/categorias">
        @csrf
        <input type="text" id="nombre" name="nombre" placeholder="Nombre">
        <input type="text" id="descripcion" name="descripcion" placeholder="Descripcion">

        <input type="submit" value="Crear">
    </form>
@endsection
