@extends('layouts.portal')

@section('title', 'Inicio')
@section('inicio', 'active')

@section('content')
<!--    product-area-start-->
<div class="product-area">
    <img src="{!! asset('pharmacy/assets/img/homepage2/round-sheap.png') !!}" alt="" class="round-sheap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="quality-fl">
                    <div class="quality-text">
                        <h3>Farmacia y Droguería <br>
                            Hebreos</h3>
                        <h5>Surtimos medicamentos éticos y populares en todo el occidente de Guatemala.
                            Linea directa para más información 7760-3971.</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="qiality-pp">
                    <img src="{!! asset('pharmacy/assets/img/homepage2/pluse-sheap.png') !!}" alt="" class="pluse-sheap">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="single-quality">
                                <img src="{!! asset('pharmacy/assets/img/homepage2/q1.png') !!}" alt="">
                                <h4>Servicio a Domicilio</h4>
                                <p>Llamanos al 7760-3971 y con gusto te atenderemos.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-quality qb2">
                                <img src="{!! asset('pharmacy/assets/img/homepage2/q2.png') !!}" alt="">
                                <h4>Tu Mejor Opción</h4>
                                <p>Los mejores proveedores que puedas encontrar.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-quality qb3">
                                <img src="{!! asset('pharmacy/assets/img/homepage2/q3.png') !!}" alt="">
                                <h4>Covid-19</h4>
                                <p>Tu mejor aliado contra las enfermedades de hoy.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-quality qb4">
                                <img src="{!! asset('pharmacy/assets/img/homepage2/q4.png') !!}" alt="">
                                <h4>Lo que Buscas</h4>
                                <p>Encuentra todo lo que necesitas para tu salud y la de tu familia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--    product-area-end-->

<!--    featured-area-start-->
<div class="featured-area position-relative">
    <img src="{!! asset('pharmacy/assets/img/homepage2/pluse-2.png') !!}" alt="" class="pluse-2">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3>Productos Destacados</h3>
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

<!--    baner-area-start-->
<div class="baner-area doctor-background">
</div>
<!--    baner-area-end-->

<!--    view-area-start-->
<div class="view-area">
    <div class="container">
        <img src="{!! asset('pharmacy/assets/img/homepage2/round-sheap.png') !!}" class="home-slider-circle" alt="circle-shape">

        <div class="row">
            <div class="col-lg-12">
                <div class="section-title view-title">
                    <h3>Los Más Vistos</h3>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="view-slider owl-carousel">
                    @foreach ($productos as $producto)
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
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!--    view-area-end-->

<br><br><br>
@endsection
