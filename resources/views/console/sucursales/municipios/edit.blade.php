@extends('layouts.console')

@section('title', 'Municipios')
@section('sub_title', 'Edición de Municipio')

@section('content')
<div class="row mb-3">
    <div class="col-lg-1 ps-0"></div>
    <div class="col-lg-10">
        <form method="post" action="/municipios/{{ $municipio -> id }}">
            @csrf
            @method('PUT')
            <br>

            @component('components.console.input')
                @slot('label') Nombre @endslot
                @slot('name') nombre @endslot
                @slot('value') {{ $municipio -> nombre }} @endslot
                @slot('required') Required @endslot
            @endcomponent

            <div class="form-group row">
                <label class="col-md-2" for="disabledTextInput">Departamento</label>
                <div class="col-md-10">
                    <select
                        class="select2 form-select shadow-none"
                        id="id_departamento"
                        name="id_departamento"
                        style="width: 100%; height:40px;"
                    >
                        <option value="-1" selected>Seleccionar</option>
                        @foreach ($departamentos as $departamento)
                            <option value="{{ $departamento -> id }}" @if($municipio -> id_departamento == $departamento -> id) selected @endif>{{ $departamento -> nombre }}</option>
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
                        <option value="1" @if($municipio -> estado == true) selected @endif>Activo</option>
                        <option value="0" @if($municipio -> estado != true) selected @endif>Inactivo</option>
                    </select>
                </div>
            </div>

            @component('components.console.btn_save') @endcomponent
        </form>
    </div>
    <div class="col-lg-1 ps-0"></div>
</div>
@endsection
