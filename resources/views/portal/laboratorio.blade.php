@extends('layouts.portal')

@section('title', 'Laboratorios')
@section('laboratorios', 'active')

@section('content')
<!--    featured-area-start-->
<div class="featured-area position-relative">
    <img src="{!! asset('pharmacy/assets/img/homepage2/pluse-2.png') !!}" alt="" class="pluse-2">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3>Productos de {{ $laboratorio -> nombre }}</h3>
                    <br>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="featured-teb">
                    <div class="row">
                        @foreach ($productos as $producto)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-featured">
                                <div class="singl-top position-relative">
                                    <div class="feet-img">
                                        <img src="/images/{{ $producto -> imagen }}" alt="">
                                    </div>
                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                    <div class="fetured-btn"><a href="{{ $producto -> id }}" class="theme-btn">Ver Detalle</a></div>
                                </div>
                                <div class="fecure-containt">
                                    <h3>{{ $producto -> nombre }}</h3>
                                    <h4>Q{{ $producto -> precio_regular }}</h4>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!--    featured-area-end-->
@endsection