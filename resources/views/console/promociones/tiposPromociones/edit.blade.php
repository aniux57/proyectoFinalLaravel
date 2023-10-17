@extends('layouts.console')

@section('title', 'Tipos de Promociones')
@section('sub_title', 'Edición de Tipo de Promoción')

@section('content')
<div class="row mb-3">
    <div class="col-lg-1 ps-0"></div>
    <div class="col-lg-10">
        <form method="post" action="/tiposPromociones/{{ $tipo_promocion -> id }}">
            @csrf
            @method('PUT')
            <br>

            @component('components.console.input')
                @slot('label') Nombre @endslot
                @slot('name') nombre @endslot
                @slot('value') {{ Session::get('nombre', $tipo_promocion -> nombre) }} @endslot
                @slot('required') Required @endslot
            @endcomponent

            @component('components.console.input')
                @slot('label') Descripcion @endslot
                @slot('name') descripcion @endslot
                @slot('value') {{ Session::get('descripcion', $tipo_promocion -> descripcion) }} @endslot
                @slot('required') @endslot
            @endcomponent

            @component('components.console.number')
                @slot('label') Unidades @endslot
                @slot('name') unidades @endslot
                @slot('value') {{ Session::get('unidades', $tipo_promocion -> unidades) }} @endslot
                @slot('required') @endslot
            @endcomponent

            @component('components.console.number')
                @slot('label') Descuento @endslot
                @slot('name') descuento @endslot
                @slot('value') {{ Session::get('descuento', $tipo_promocion -> descuento) }} @endslot
                @slot('required') @endslot
            @endcomponent

            <div class="form-group row">
                <label class="col-md-2" for="disabledTextInput">Estado</label>
                <div class="col-md-10">
                    <select
                        class="select2 form-select shadow-none"
                        id="estado"
                        name="estado"
                        style="width: 100%; height:40px;"
                    >
                        <option value="1" @if($tipo_promocion -> estado == true) selected @endif>Activo</option>
                        <option value="0" @if($tipo_promocion -> estado != true) selected @endif>Inactivo</option>
                    </select>
                </div>
            </div>

            @component('components.console.btn_save') @endcomponent
        </form>
    </div>
    <div class="col-lg-1 ps-0"></div>
</div>

@endsection
