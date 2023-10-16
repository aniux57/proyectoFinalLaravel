@extends('layouts.forms')

@section('title', 'Categorias')
@section('sub_title', 'Creación de Categorias')

@section('content')
    <form method="post" action="/categorias">
        @csrf
        <input type="text" id="nombre" name="nombre" placeholder="Nombre">
        <input type="text" id="descripcion" name="descripcion" placeholder="Descripcion">

        <input type="submit" value="Crear">
    </form>
@endsection
