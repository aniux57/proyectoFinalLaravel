@extends('layouts.portal')

@section('title', 'Categorias')
@section('categorias', 'active')

@section('content')
<!--    featured-area-start-->
<div class="shop-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="zoom-img">
                        <img src="/images/{{ $producto -> fotografia }}" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="zoom-containt">
                        <div class="zoom-containt-top">
                            <h3>{{ $producto -> nombre }}</h3>
                            <span> Precio Regular: {{ $producto -> precio_regular }}</span>
                        </div>
                        <div class="zoom-containt-bottom">
                        @foreach($ingredientes as $ingrediente)
                            <p>{{ $ingrediente -> nombre }}</p>
                        @endforeach
                    <div class="descriptionp">
                        <h3>Especificaciones</h3>
                        <p>{{ $producto -> especificaciones }}</p>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--    featured-area-end-->
@endsection
