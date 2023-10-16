@extends('layouts.forms')

@section('title', 'Sucursales')
@section('sub_title', 'Creación de Sucursal')

@section('content')
<div class="row mb-3">
    <div class="col-lg-1 ps-0"></div>
    <div class="col-lg-10">
        <form method="post" action="/sucursales">
            @csrf
            <br>
            @component('components.console.input')
                @slot('label') Nombre @endslot
                @slot('name') nombre @endslot
                @slot('required') Required @endslot
            @endcomponent

            @component('components.console.input')
                @slot('label') Direccion @endslot
                @slot('name') direccion @endslot
            @slot('required') Required @endslot
            @endcomponent

            @component('components.console.input')
                @slot('label') Referencias @endslot
                @slot('name') referencias @endslot
                @slot('required') @endslot
            @endcomponent

            @component('components.console.input')
                @slot('label') Telefonos @endslot
                @slot('name') telefonos @endslot
                @slot('required') Required @endslot
            @endcomponent

            @component('components.console.input')
                @slot('label') WhatsApp @endslot
                @slot('name') whatsapp @endslot
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
                        <option value="-1" selected>Seleccionar</option>
                        @foreach ($municipios as $municipio)
                            <option value="{{ $municipio -> id }}">{{ $municipio -> nombre }}</option>
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
