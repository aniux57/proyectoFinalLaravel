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
                        <img src="/images/{{ $promocion -> fotografia }}" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="zoom-containt">
                        <div class="zoom-containt-top">
                            <h1>{{ $promocion->tipoPromocion->nombre }}</h1>
                            <h3>Fecha de Inicio</h3><span>{{ $promocion->fecha_inicio }}</span>
                            <h3>Fecha de Fin</h3><span>{{ $promocion->fecha_fin }}</span>
                            <h3>Descuento</h3><span>{{ $promocion->tipoPromocion->descuento }}%</span>
                            <span> </span>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-12">
                </div>
            </div>
            </div>
        </div>
    </div>
<!--    featured-area-end-->
@endsection
