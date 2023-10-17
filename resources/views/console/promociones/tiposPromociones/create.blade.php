@extends('layouts.forms')

@section('title', 'Tipos de Promociones')
@section('sub_title', 'Creación de Tipo de Promocion')

@section('content')
<div class="row mb-3">
    <div class="col-lg-1 ps-0"></div>
    <div class="col-lg-10">
        <form method="post" action="/tiposPromociones">
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

            @component('components.console.number')
                @slot('label') Unidades @endslot
                @slot('name') unidades @endslot
                @slot('value') {{ Session::get('unidades', '') }} @endslot
                @slot('required') @endslot
            @endcomponent

            @component('components.console.number')
                @slot('label') Descuento @endslot
                @slot('name') descuento @endslot
                @slot('value') {{ Session::get('descuento', '') }} @endslot
                @slot('required') @endslot
            @endcomponent

            @component('components.console.btn_create') @endcomponent
        </form>
    </div>
    <div class="col-lg-1 ps-0"></div>
</div>
@endsection
