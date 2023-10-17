@extends('layouts.forms')

@section('title', 'Departamentos')
@section('sub_title', 'Creación de Departamento')

@section('content')
<div class="row mb-3">
    <div class="col-lg-1 ps-0"></div>
    <div class="col-lg-10">
        <form method="post" action="/departamentos">
            @csrf
            <br>

            @component('components.console.input')
                @slot('label') Nombre @endslot
                @slot('name') nombre @endslot
                @slot('value') {{ Session::get('nombre', '') }} @endslot
                @slot('required') Required @endslot
            @endcomponent

            @component('components.console.btn_create') @endcomponent
        </form>
    </div>
    <div class="col-lg-1 ps-0"></div>
</div>
@endsection
