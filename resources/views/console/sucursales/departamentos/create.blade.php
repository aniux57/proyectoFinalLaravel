@extends('layouts.console')

@section('title', 'Departamentos')

@section('content')
    <h1>Creación de Departamento</h1>

    <form method="post" action="/departamentos">
        @csrf
        <input type="text" id="nombre" name="nombre" placeholder="Nombre">

        <input type="submit" value="Subir">
    </form>
@endsection
