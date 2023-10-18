<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>

    @yield('styles')

    <link href="{!! asset('pharmacy/assets/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link rel="shortcut icon" href="{!! asset('images/logo-icon.png') !!}">
    <link href="{!! asset('pharmacy/assets/css/all.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('pharmacy/assets/css/fontawesome.css') !!}" rel="stylesheet">
    <link href="{!! asset('pharmacy/assets/css/animate.css') !!}" rel="stylesheet">
    <link href="{!! asset('pharmacy/assets/css/owl.carousel.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('pharmacy/assets/css/icofont.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('pharmacy/assets/css/style.css') !!}" rel="stylesheet">
    <link href="{!! asset('pharmacy/assets/css/pharmacy.css') !!}" rel="stylesheet">
</head>
<body class="home">
<header class="header1">
    <div class="header-top-bar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="headr-bar-right">
                        <div class="serch-fl">
                            <a class="ccdda" href="#"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                    <div class="searchh ccfdf">
                        <form id="search"><input type="text" placeholder="Search"><button type="submit"
                                                                                          class="sbtn">Search Now</button>
                            <a href="javascript:void(0)" class="srch"><i class="far fa-search"></i></a></form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav id="main-navigation-wrapper"
         class="navbar navbar-default header-middle header-area header-middle position-relative">
        <div class="container">
            <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 navbar-header">
                <div class="header-logo">
                    <a href="/"><img src="{!! asset('images/logo_hebreos.png') !!}" alt=""></a>
                </div>
                <button type="button" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false"
                        class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span
                        class="icon-bar"></span><span class="icon-bar"></span><span
                        class="icon-bar"></span></button>
            </div>
            <div id="main-navigation" class="col-xl-9 col-lg-12 col-md-12 collapse navbar-collapse ">
                <ul class="nav navbar-nav">
                    <li class="dropdown ">
                        <a href="/" class="@yield('inicio')">Inicio</a>
                    </li>
                    <li class="dropdown">
                        <a href="" class="@yield('categorias')">Categorías</a><i class="fa fa-chevron-down"></i>
                        <ul class="dropdown-submenu">
                            @foreach ($categorias as $categoria)
                            <li><a href="/categoria/{{ $categoria -> id }}">{{ $categoria -> nombre }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="" class="@yield('laboratorios')">Laboratorios</a><i class="fa fa-chevron-down"></i>
                        <ul class="dropdown-submenu">
                            @foreach ($laboratorios as $laboratorio)
                            <li><a href="/laboratorio/{{ $laboratorio -> id }}">{{ $laboratorio -> nombre }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="dropdown"><a href="" class="@yield('promociones')">Promociones</a></li>
                    <li class="dropdown"><a href="/sucursales" class="@yield('sucursales')">Sucursales</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

@yield('content')

<!-- footer-area-start-->
<footer>
    <div class="footer-bottom">
        <div class="container">
            <p>2023 © all rights reserved by <a href="#">Universidad Mesoamericana</a></p>
        </div>
    </div>
    <a href="#" class="go-top"><i class="fas fa-arrow-up"></i></a>
</footer>
<!--    footer-bottom-area-end-->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{!! asset('pharmacy/assets/js/jquery.min.js') !!}"></script>
<script src="{!! asset('pharmacy/assets/js/popper.js') !!}"></script>
<script src="{!! asset('pharmacy/assets/js/jquery.sticky.js') !!}"></script>
<script src="{!! asset('pharmacy/assets/js/owl.carousel.min.js') !!}"></script>
<script src="{!! asset('pharmacy/assets/js/jquery.magnific-popup.min.js') !!}"></script>
<script src="{!! asset('pharmacy/assets/js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('pharmacy/assets/js/main.js') !!}"></script>

@yield('scripts')
</body>

</html>
