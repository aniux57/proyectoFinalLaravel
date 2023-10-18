@extends('layouts.console')

@section('title', 'Categorias')
@section('sub_title', 'Edición de Categoria')

@section('content')
<div class="row mb-3">
    <div class="col-lg-1 ps-0"></div>
    <div class="col-lg-10">
        <form method="post" action="/consola/categorias/{{ $categoria -> id }}">
            @csrf
            @method('PUT')
            <br>

            @component('components.console.input')
                @slot('label') Nombre @endslot
                @slot('name') nombre @endslot
                @slot('value') {{ $categoria -> nombre }} @endslot
                @slot('required') Required @endslot
            @endcomponent

            @component('components.console.input')
                @slot('label') Descripcion @endslot
                @slot('name') descripcion @endslot
                @slot('value') {{ $categoria -> descripcion }} @endslot
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
                        <option value="1" @if($categoria -> estado == true) selected @endif>Activo</option>
                        <option value="0" @if($categoria -> estado != true) selected @endif>Inactivo</option>
                    </select>
                </div>
            </div>

            @component('components.console.btn_save') @endcomponent
        </form>
    </div>
    <div class="col-lg-1 ps-0"></div>
</div>
@endsection
