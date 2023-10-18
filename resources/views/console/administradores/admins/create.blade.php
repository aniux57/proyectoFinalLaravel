@extends('layouts.console')

@section('title', 'Administradores')

@section('content')
    <h1>Creación de Administradores</h1>

    <form method="post" action="/consola/admins">
        @csrf
        <input type="text" id="nombre" name="nombre" placeholder="Nombre">

        <input type="submit" value="Crear">
    </form>
@endsection
