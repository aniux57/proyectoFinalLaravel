@extends('layouts.console')

@section('title', 'Departamentos')
@section('sub_title', 'Edición de Administrador')

@section('content')
<div class="row mb-3">
    <div class="col-lg-1 ps-0"></div>
    <div class="col-lg-10">
        <form method="post" action="/consola/admins/{{ $usuario-> id }}">
            @csrf
            @method('PUT')
            <br>

            @component('components.console.input')
                @slot('label') Nombre @endslot
                @slot('name') nombre @endslot
                @slot('value') {{ $usuario -> administrador -> nombre }} @endslot
                @slot('required') Required @endslot
            @endcomponent

            @component('components.console.input')
                @slot('label') Correo Electrónico @endslot
                @slot('name') email @endslot
                @slot('value') {{ $usuario -> email }} @endslot
                @slot('required') Required @endslot
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
                        <option value="1" @if($usuario -> estado == true) selected @endif>Activo</option>
                        <option value="0" @if($usuario -> estado != true) selected @endif>Inactivo</option>
                    </select>
                </div>
            </div>

            @component('components.console.btn_save') @endcomponent
        </form>
    </div>
    <div class="col-lg-1 ps-0"></div>
</div>
@endsection
