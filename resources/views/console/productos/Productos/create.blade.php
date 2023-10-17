@extends('layouts.forms')

@section('title', 'Sucursales')
@section('sub_title', 'Creación de Producto')

@section('content')
<div class="row mb-3">
    <div class="col-lg-1 ps-0"></div>
    <div class="col-lg-10">
        <form method="post" action="/productos">
            @csrf
            <br>
            @component('components.console.input')
                @slot('label') Código @endslot
                @slot('name') codigo @endslot
                @slot('value') {{ Session::get('codigo', '') }} @endslot
                @slot('required') Required @endslot
            @endcomponent

            @component('components.console.input')
                @slot('label') Nombre @endslot
                @slot('name') nombre @endslot
                @slot('value') {{ Session::get('nombre', '') }} @endslot
                @slot('required') Required @endslot
            @endcomponent

            @component('components.console.textarea')
                @slot('label') Especificaciones @endslot
                @slot('name') especificaciones @endslot
                @slot('value') {{ Session::get('especificaciones', '') }} @endslot
                @slot('required') Required @endslot
            @endcomponent

            @component('components.console.number')
                @slot('label') Precio Regular @endslot
                @slot('name') precio_regular @endslot
                @slot('value') {{ Session::get('precio_regular', '') }} @endslot
                @slot('required') Required @endslot
            @endcomponent

            <div class="form-group row">
                <label class="col-md-2" for="disabledTextInput">Laboratorio</label>
                <div class="col-md-10">
                    <select
                        class="select2 form-select shadow-none"
                        id="id_laboratorio"
                        name="id_laboratorio"
                        style="width: 100%; height:40px;"
                    >
                        <option value="-1" selected>Seleccionar</option>
                        @foreach ($laboratorios as $laboratorio)
                            <option value="{{ $laboratorio -> id }}">{{ $laboratorio -> nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            @component('components.console.btn_create') @endcomponent
        </form>
    </div>
    <div class="col-lg-1 ps-0"></div>
</div>
@endsection
