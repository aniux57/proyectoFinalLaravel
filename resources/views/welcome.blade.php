<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pharmacy - Medics || Clinic & Pharmacy HTML5 Template</title>
    <link href="{!! asset('pharmacy/assets/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link rel="shortcut icon" href="{!! asset('pharmacy/assets/img/favicon.png') !!}">
    <link href="{!! asset('pharmacy/assets/css/all.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('pharmacy/assets/css/fontawesome.css') !!}" rel="stylesheet">
    <link href="{!! asset('pharmacy/assets/css/animate.css') !!}" rel="stylesheet">
    <link href="{!! asset('pharmacy/assets/css/owl.carousel.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('pharmacy/assets/css/icofont.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('pharmacy/assets/css/style.css') !!}" rel="stylesheet">
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
                    <a href="/"><img src="{!! asset('pharmacy/assets/img/homepage2/site-logo.png') !!}" alt=""></a>
                </div>
                <button type="button" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false"
                        class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span
                        class="icon-bar"></span><span class="icon-bar"></span><span
                        class="icon-bar"></span></button>
            </div>
            <div id="main-navigation" class="col-xl-9 col-lg-12 col-md-12 collapse navbar-collapse ">
                <ul class="nav navbar-nav">
                    <li class="dropdown ">
                        <a href="/" class="active">Inicio</a>
                    </li>
                    <li class="dropdown">
                        <a href="">Categorías</a><i class="fa fa-chevron-down"></i>
                        <ul class="dropdown-submenu">
                            @foreach ($categorias as $categoria)
                            <li><a href="">{{ $categoria -> nombre }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="">Laboratorios</a><i class="fa fa-chevron-down"></i>
                        <ul class="dropdown-submenu">
                            @foreach ($laboratorios as $laboratorio)
                            <li><a href="">{{ $laboratorio -> nombre }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="dropdown"><a href="shop-detail.html">Promociones</a></li>
                    <li class="dropdown"><a href="contact.html">Sucursales</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!--    product-area-start-->
<div class="product-area">
    <img src="{!! asset('pharmacy/assets/img/homepage2/round-sheap.png') !!}" alt="" class="round-sheap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="quality-fl">
                    <div class="quality-text">
                        <span>24/7 Available</span>
                        <h3>Best Quality <br>
                            Pharmacy Store</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, Lorem ipsum dolor sit
                            amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua. Lorem ipsum dolor sit amet,</p>
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
                                <h4>Online Pharmacy</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipi- scing elit</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-quality qb2">
                                <img src="{!! asset('pharmacy/assets/img/homepage2/q2.png') !!}" alt="">
                                <h4>Medicine Supply</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipi- scing elit</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-quality qb3">
                                <img src="{!! asset('pharmacy/assets/img/homepage2/q3.png') !!}" alt="">
                                <h4>Covid-19 Medical Supply</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-quality qb4">
                                <img src="{!! asset('pharmacy/assets/img/homepage2/q4.png') !!}" alt="">
                                <h4>Medical Equipment</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing </p>
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
                    <h3>Featured Products</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="featured-teb">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                               role="tab" aria-controls="pills-home" aria-selected="true">All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                               role="tab" aria-controls="pills-profile" aria-selected="false">Medical Equipment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                               role="tab" aria-controls="pills-contact" aria-selected="false">Medicine & Health</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab2" data-toggle="pill" href="#pills-contact2"
                               role="tab" aria-controls="pills-contact2" aria-selected="false">Personal Care</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab3" data-toggle="pill" href="#pills-contact3"
                               role="tab" aria-controls="pills-contact3" aria-selected="false">Baby Care</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                             aria-labelledby="pills-home-tab">
                            <div class="inner-featured">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f7.png') !!}" alt="">
                                                </div>
                                                <span>-20% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>Face Mask</h3>
                                                <h4>$45.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f1.png') !!}" alt="">
                                                </div>
                                                <span>-20% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>Thermometer</h3>
                                                <h4>$45.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f2.png') !!}" alt="">
                                                </div>
                                                <span>-20% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>Vitamin D</h3>
                                                <h4>$25.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f3.png') !!}" alt="">
                                                </div>
                                                <span>-10% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>Sugar Monitor</h3>
                                                <h4>$45.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f4.png') !!}" alt="">
                                                </div>
                                                <span>-20% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>Hand Sanitizer</h3>
                                                <h4>$30.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f5.png') !!}" alt="">
                                                </div>
                                                <span>-20% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>Vitamin C</h3>
                                                <h4>$45.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f6.png') !!}" alt="">
                                                </div>
                                                <span>-20% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>BP Monitor</h3>
                                                <h4>$45.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f7.png') !!}" alt="">
                                                </div>
                                                <span>-20% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>Face Mask</h3>
                                                <h4>$45.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                             aria-labelledby="pills-profile-tab">
                            <div class="inner-featured">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f1.png') !!}" alt="">
                                                </div>
                                                <span>-20% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>Thermometer</h3>
                                                <h4>$45.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-4">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f2.png') !!}" alt="">
                                                </div>
                                                <span>-20% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>Vitamin D</h3>
                                                <h4>$25.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f3.png') !!}" alt="">
                                                </div>
                                                <span>-10% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>Sugar Monitor</h3>
                                                <h4>$45.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f4.png') !!}" alt="">
                                                </div>
                                                <span>-20% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>Hand Sanitizer</h3>
                                                <h4>$30.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f5.png') !!}" alt="">
                                                </div>
                                                <span>-20% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>Vitamin C</h3>
                                                <h4>$45.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f6.png') !!}" alt="">
                                                </div>
                                                <span>-20% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>BP Monitor</h3>
                                                <h4>$45.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f7.png') !!}" alt="">
                                                </div>
                                                <span>-20% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>Face Mask</h3>
                                                <h4>$45.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f8.png') !!}" alt="">
                                                </div>
                                                <span>-20% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>Disposable Face Mask</h3>
                                                <h4>$45.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                             aria-labelledby="pills-contact-tab">
                            <div class="inner-featured">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f7.png') !!}" alt="">
                                                </div>
                                                <span>-20% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>Face Mask</h3>
                                                <h4>$45.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-4">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f2.png') !!}" alt="">
                                                </div>
                                                <span>-20% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>Vitamin D</h3>
                                                <h4>$25.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f3.png') !!}" alt="">
                                                </div>
                                                <span>-10% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>Sugar Monitor</h3>
                                                <h4>$45.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f4.png') !!}" alt="">
                                                </div>
                                                <span>-20% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>Hand Sanitizer</h3>
                                                <h4>$30.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f5.png') !!}" alt="">
                                                </div>
                                                <span>-20% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>Vitamin C</h3>
                                                <h4>$45.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f6.png') !!}" alt="">
                                                </div>
                                                <span>-20% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>BP Monitor</h3>
                                                <h4>$45.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f7.png') !!}" alt="">
                                                </div>
                                                <span>-20% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>Face Mask</h3>
                                                <h4>$45.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f8.png') !!}" alt="">
                                                </div>
                                                <span>-20% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>Disposable Face Mask</h3>
                                                <h4>$45.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact2" role="tabpanel"
                             aria-labelledby="pills-contact-tab2">
                            <div class="inner-featured">
                                <div class="row">

                                    <div class="col-lg-3 col-md-4">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f2.png') !!}" alt="">
                                                </div>
                                                <span>-20% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>Vitamin D</h3>
                                                <h4>$25.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f1.png') !!}" alt="">
                                                </div>
                                                <span>-20% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>Thermometer</h3>
                                                <h4>$45.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f3.png') !!}" alt="">
                                                </div>
                                                <span>-10% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>Sugar Monitor</h3>
                                                <h4>$45.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f4.png') !!}" alt="">
                                                </div>
                                                <span>-20% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>Hand Sanitizer</h3>
                                                <h4>$30.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f5.png') !!}" alt="">
                                                </div>
                                                <span>-20% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>Vitamin C</h3>
                                                <h4>$45.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f6.png') !!}" alt="">
                                                </div>
                                                <span>-20% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>BP Monitor</h3>
                                                <h4>$45.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f7.png') !!}" alt="">
                                                </div>
                                                <span>-20% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>Face Mask</h3>
                                                <h4>$45.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f8.png') !!}" alt="">
                                                </div>
                                                <span>-20% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>Disposable Face Mask</h3>
                                                <h4>$45.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact3" role="tabpanel"
                             aria-labelledby="pills-contact-tab3">
                            <div class="inner-featured">
                                <div class="row">

                                    <div class="col-lg-3 col-md-4">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f2.png') !!}" alt="">
                                                </div>
                                                <span>-20% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>Vitamin D</h3>
                                                <h4>$25.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f3.png') !!}" alt="">
                                                </div>
                                                <span>-10% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>Sugar Monitor</h3>
                                                <h4>$45.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f1.png') !!}" alt="">
                                                </div>
                                                <span>-20% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>Thermometer</h3>
                                                <h4>$45.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f4.png') !!}" alt="">
                                                </div>
                                                <span>-20% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>Hand Sanitizer</h3>
                                                <h4>$30.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f5.png') !!}" alt="">
                                                </div>
                                                <span>-20% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>Vitamin C</h3>
                                                <h4>$45.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f6.png') !!}" alt="">
                                                </div>
                                                <span>-20% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>BP Monitor</h3>
                                                <h4>$45.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f7.png') !!}" alt="">
                                                </div>
                                                <span>-20% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>Face Mask</h3>
                                                <h4>$45.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="single-featured">
                                            <div class="singl-top position-relative">
                                                <div class="feet-img">
                                                    <img src="{!! asset('pharmacy/assets/img/homepage2/f8.png') !!}" alt="">
                                                </div>
                                                <span>-20% </span>
                                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                        View</a></div>
                                            </div>
                                            <div class="fecure-containt">
                                                <h3>Disposable Face Mask</h3>
                                                <h4>$45.00</h4>
                                                <a href="#" class="theme-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--    featured-area-end-->

<!--    baner-area-start-->
<div class="baner-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="baner-containt">
                    <h4>Shop Online <br>
                        or In store Get
                    </h4>
                    <a href="#">FREE</a>
                    <h3> <span>Delivery</span> <br>
                        at Your Door</h3>
                </div>
            </div>
        </div>
    </div>
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
                    <div class="single-featured">
                        <div class="singl-top position-relative">
                            <div class="feet-img">
                                <img src="{!! asset('pharmacy/assets/img/homepage2/f1.png') !!}" alt="">
                            </div>
                            <span>-20% </span>
                            <a class="love" href="#"><i class="far fa-heart"></i></a>
                            <div class="fetured-btn"><a href="#" class="theme-btn">Quick View</a></div>
                        </div>
                        <div class="fecure-containt">
                            <h3>Thermometer</h3>
                            <h4>$45.00</h4>
                            <a href="#" class="theme-btn">Add to Cart</a>
                        </div>
                    </div>
                    <div class="single-featured">
                        <div class="singl-top position-relative">
                            <div class="feet-img">
                                <img src="{!! asset('pharmacy/assets/img/homepage2/f2.png') !!}" alt="">
                            </div>
                            <span>-20% </span>
                            <a class="love" href="#"><i class="far fa-heart"></i></a>
                            <div class="fetured-btn"><a href="#" class="theme-btn">Quick View</a></div>
                        </div>
                        <div class="fecure-containt">
                            <h3>Vitamin D</h3>
                            <h4>$45.00</h4>
                            <a href="#" class="theme-btn">Add to Cart</a>
                        </div>
                    </div>
                    <div class="single-featured">
                        <div class="singl-top position-relative">
                            <div class="feet-img">
                                <img src="{!! asset('pharmacy/assets/img/homepage2/f3.png') !!}" alt="">
                            </div>
                            <span>-20% </span>
                            <a class="love" href="#"><i class="far fa-heart"></i></a>
                            <div class="fetured-btn"><a href="#" class="theme-btn">Quick View</a></div>
                        </div>
                        <div class="fecure-containt">
                            <h3>Sugar Monitor</h3>
                            <h4>$45.00</h4>
                            <a href="#" class="theme-btn">Add to Cart</a>
                        </div>
                    </div>
                    <div class="single-featured">
                        <div class="singl-top position-relative">
                            <div class="feet-img">
                                <img src="{!! asset('pharmacy/assets/img/homepage2/f4.png') !!}" alt="">
                            </div>
                            <span>-20% </span>
                            <a class="love" href="#"><i class="far fa-heart"></i></a>
                            <div class="fetured-btn"><a href="#" class="theme-btn">Quick View</a></div>
                        </div>
                        <div class="fecure-containt">
                            <h3>Hand Sanitizer</h3>
                            <h4>$45.00</h4>
                            <a href="#" class="theme-btn">Add to Cart</a>
                        </div>
                    </div>
                    <div class="single-featured">
                        <div class="singl-top position-relative">
                            <div class="feet-img">
                                <img src="{!! asset('pharmacy/assets/img/homepage2/f5.png') !!}" alt="">
                            </div>
                            <span>-20% </span>
                            <a class="love" href="#"><i class="far fa-heart"></i></a>
                            <div class="fetured-btn"><a href="#" class="theme-btn">Quick View</a></div>
                        </div>
                        <div class="fecure-containt">
                            <h3>Vitamin C</h3>
                            <h4>$45.00</h4>
                            <a href="#" class="theme-btn">Add to Cart</a>
                        </div>
                    </div>
                    <div class="single-featured">
                        <div class="singl-top position-relative">
                            <div class="feet-img">
                                <img src="{!! asset('pharmacy/assets/img/homepage2/f6.png') !!}" alt="">
                            </div>
                            <span>-20% </span>
                            <a class="love" href="#"><i class="far fa-heart"></i></a>
                            <div class="fetured-btn"><a href="#" class="theme-btn">Quick View</a></div>
                        </div>
                        <div class="fecure-containt">
                            <h3>BP Monitor</h3>
                            <h4>$45.00</h4>
                            <a href="#" class="theme-btn">Add to Cart</a>
                        </div>
                    </div>
                    <div class="single-featured">
                        <div class="singl-top position-relative">
                            <div class="feet-img">
                                <img src="{!! asset('pharmacy/assets/img/homepage2/f7.png') !!}" alt="">
                            </div>
                            <span>-20% </span>
                            <a class="love" href="#"><i class="far fa-heart"></i></a>
                            <div class="fetured-btn"><a href="#" class="theme-btn">Quick View</a></div>
                        </div>
                        <div class="fecure-containt">
                            <h3>Face Mask</h3>
                            <h4>$45.00</h4>
                            <a href="#" class="theme-btn">Add to Cart</a>
                        </div>
                    </div>
                    <div class="single-featured">
                        <div class="singl-top position-relative">
                            <div class="feet-img">
                                <img src="{!! asset('pharmacy/assets/img/homepage2/f8.png') !!}" alt="">
                            </div>
                            <span>-20% </span>
                            <a class="love" href="#"><i class="far fa-heart"></i></a>
                            <div class="fetured-btn"><a href="#" class="theme-btn">Quick View</a></div>
                        </div>
                        <div class="fecure-containt">
                            <h3>Disposable Face Mask</h3>
                            <h4>$45.00</h4>
                            <a href="#" class="theme-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--    view-area-end-->

<br><br><br>

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
</body>

</html>
