@extends('layouts.forms')

@section('title', 'Productos')
@section('sub_title', 'Edición de Producto')

@section('content')
<div class="row mb-3">
    <div class="col-lg-1 ps-0"></div>
    <div class="col-lg-10">
        <form method="post" action="/consola/productos/{{ $producto -> id }}">
            @csrf
            @method('PUT')
            <br>

            @component('components.console.input')
                @slot('label') Código @endslot
                @slot('name') codigo @endslot
                @slot('value') {{ $producto -> codigo }} @endslot
                @slot('required') Required @endslot
            @endcomponent

            @component('components.console.input')
                @slot('label') Nombre @endslot
                @slot('name') nombre @endslot
                @slot('value') {{ $producto -> nombre }} @endslot
                @slot('required') Required @endslot
            @endcomponent

            @component('components.console.textarea')
                @slot('label') Especificaciones @endslot
                @slot('name') especificaciones @endslot
                @slot('value') {{ $producto -> especificaciones }} @endslot
                @slot('required') Required @endslot
            @endcomponent

            @component('components.console.number')
                @slot('label') Precio Regular @endslot
                @slot('name') precio_regular @endslot
                @slot('value') {{ $producto -> precio_regular }} @endslot
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
                            <option value="{{ $laboratorio -> id }}" @if($producto -> id_laboratorio == $laboratorio -> id) selected @endif>{{ $laboratorio -> nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-2" for="disabledTextInput">Estado</label>
                <div class="col-md-10">
                    <select
                        class="select2 form-select shadow-none"
                        id="estado"
                        name="estado"
                        style="width: 100%; height:40px;"
                    >
                        <option value="1" @if($producto -> estado == true) selected @endif>Activo</option>
                        <option value="0" @if($producto -> estado != true) selected @endif>Inactivo</option>
                    </select>
                </div>
            </div>

            @component('components.console.btn_save') @endcomponent
        </form>
    </div>
    <div class="col-lg-1 ps-0"></div>
</div>
@endsection
