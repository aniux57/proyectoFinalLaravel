@extends('layouts.forms')

@section('title', 'Sucursales')
@section('sub_title', 'Edición de Sucursal')

@section('content')
<div class="row mb-3">
    <div class="col-lg-1 ps-0"></div>
    <div class="col-lg-10">
        <form method="post" action="/consola/sucursales/{{ $sucursal -> id }}">
            @csrf
            @method('PUT')
            <br>

            @component('components.console.input')
                @slot('label') Nombre @endslot
                @slot('name') nombre @endslot
                @slot('value') {{ $sucursal -> nombre }} @endslot
                @slot('required') Required @endslot
            @endcomponent

            @component('components.console.input')
                @slot('label') Direccion @endslot
                @slot('name') direccion @endslot
                @slot('value') {{ $sucursal -> direccion }} @endslot
                @slot('required') Required @endslot
            @endcomponent

            @component('components.console.input')
                @slot('label') Referencias @endslot
                @slot('name') referencias @endslot
                @slot('value') {{ $sucursal -> referencias }} @endslot
                @slot('required') @endslot
            @endcomponent

            @component('components.console.input')
                @slot('label') Telefonos @endslot
                @slot('name') telefonos @endslot
                @slot('value') {{ $sucursal -> telefonos }} @endslot
                @slot('required') @endslot
            @endcomponent

            @component('components.console.input')
                @slot('label') WhatsApp @endslot
                @slot('name') whatsapp @endslot
                @slot('value') {{ $sucursal -> whatsapp }} @endslot
                @slot('required') @endslot
            @endcomponent

            @component('components.console.number')
                @slot('label') Latitud @endslot
                @slot('name') latitud @endslot
                @slot('value') {{ $sucursal -> latitud }} @endslot
                @slot('required') Required @endslot
            @endcomponent

            @component('components.console.number')
                @slot('label') Longitud @endslot
                @slot('name') longitud @endslot
                @slot('value') {{ $sucursal -> longitud }} @endslot
                @slot('required') Required @endslot
            @endcomponent

            <div class="form-group row">
                <label class="col-md-2" for="disabledTextInput">Municipio</label>
                <div class="col-md-10">
                    <select
                        class="select2 form-select shadow-none"
                        id="id_municipio"
                        name="id_municipio"
                        style="width: 100%; height:40px;"
                    >
                        @foreach ($municipios as $municipio)
                            <option value="{{ $municipio -> id }}" @if($sucursal -> id_municipio == $municipio -> id) selected @endif>{{ $municipio -> nombre }}</option>
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
                        <option value="1" @if($sucursal -> estado == true) selected @endif>Activo</option>
                        <option value="0" @if($sucursal -> estado != true) selected @endif>Inactivo</option>
                    </select>
                </div>
            </div>

            @component('components.console.btn_save') @endcomponent
        </form>
    </div>
    <div class="col-lg-1 ps-0"></div>
</div>
@endsection
