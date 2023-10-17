@extends('layouts.forms')

@section('title', 'Categorias')
@section('sub_title', 'Creación de Categoria')

@section('content')
<div class="row mb-3">
    <div class="col-lg-1 ps-0"></div>
    <div class="col-lg-10">
        <form method="post" action="/categorias">
            @csrf
            <br>

            @component('components.console.input')
                @slot('label') Nombre @endslot
                @slot('name') nombre @endslot
                @slot('value') {{ Session::get('nombre', '') }} @endslot
                @slot('required') Required @endslot
            @endcomponent

            @component('components.console.input')
                @slot('label') Descripcion @endslot
                @slot('name') descripcion @endslot
                @slot('value') {{ Session::get('descripcion', '') }} @endslot
                @slot('required') @endslot
            @endcomponent

            @component('components.console.btn_create') @endcomponent
        </form>
    </div>
    <div class="col-lg-1 ps-0"></div>
</div>
@endsection
