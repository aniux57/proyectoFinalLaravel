@extends('layouts.console')

@section('title', 'Administradores')
@section('sub_title', 'Creación de Administrador')

@section('content')
<div class="row mb-3">
    <div class="col-lg-1 ps-0"></div>
        <div class="col-lg-10">
            <form method="post" action="/consola/admins">
                @csrf
                <br>

                @component('components.console.input')
                    @slot('label') Nombre @endslot
                    @slot('name') nombre @endslot
                    @slot('value') {{ Session::get('nombre', '') }} @endslot
                    @slot('required') Required @endslot
                @endcomponent

                @component('components.console.input')
                    @slot('label') Correo Electrónico @endslot
                    @slot('name') email @endslot
                    @slot('value') {{ Session::get('email', '') }} @endslot
                    @slot('required') Required @endslot
                @endcomponent

                @component('components.console.password')
                    @slot('label') Contraseña @endslot
                    @slot('name') password @endslot
                    @slot('value') {{ Session::get('password', '') }} @endslot
                    @slot('required') Required @endslot
                @endcomponent

                @component('components.console.btn_create') @endcomponent
            </form>
        </div>
    <div class="col-lg-1 ps-0"></div>
</div>
@endsection
