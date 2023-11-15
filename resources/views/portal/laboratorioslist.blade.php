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
                    <h3>Laboratorios</h3>
                    <br>
                </div>
            </div>
        </div>

        <div class="row">
    <div class="col-lg-12">
        <div class="featured-teb">
            <div class="row">
                @foreach ($laboratorios as $laboratorio)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-featured">
                            <div class="singl-top position-relative">
                                <div class="feet-img">
                                    <img src="/images/{{ $laboratorio -> fotografia }}" alt="">
                                </div>
                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                <div class="fetured-btn"><a href="/laboratorio/{{ $laboratorio -> id }}" class="@yield('laboratorio')">Ver Productos</a></div>
                            </div>
                            <div class="fecure-containt">
                                <h3>{{ $laboratorio -> nombre }}</h3>
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
