<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title')</title>

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->

    @yield('styles')

    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{!! asset('matrix/dist/css/style.min.css') !!}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<body>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
     data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header" data-logobg="skin5">

                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <a class="navbar-brand" href="/reportes">
                    <!-- Logo icon -->
                    <b class="logo-icon ps-2">
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="{!! asset('matrix/assets/images/logo-icon.png') !!}" alt="homepage" class="light-logo" />

                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="{!! asset('matrix/assets/images/logo-text.png') !!}" alt="homepage" class="light-logo" />

                            </span>
                    <!-- Logo icon -->
                    <!-- <b class="logo-icon"> -->
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <!-- <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                    <!-- </b> -->
                    <!--End Logo icon -->
                </a>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Toggle which is visible on mobile only -->
                <!-- ============================================================== -->
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                        class="ti-menu ti-close"></i></a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-start me-auto">
                    <li class="nav-item d-none d-lg-block">
                        <a
                            class="nav-link sidebartoggler waves-effect waves-light"
                            href="javascript:void(0)"
                            data-sidebartype="mini-sidebar">
                            <i class="mdi mdi-menu font-24"></i>
                        </a>
                    </li>

                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav" class="pt-4">
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link"
                           href="/reportes"
                           aria-expanded="false"
                        >
                            <i class="mdi mdi-window-restore"></i>
                            <span class="hide-menu">Reportes</span>
                        </a>
                    </li>
                </ul>

                <ul id="sidebarnav" class="pt-4">
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link"
                           href="/categorias"
                           aria-expanded="false"
                        >
                            <i class="mdi mdi-library-books"></i>
                            <span class="hide-menu">Categorías</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link"
                           href="/laboratorios"
                           aria-expanded="false"
                        >
                            <i class="mdi mdi-hospital"></i>
                            <span class="hide-menu">Laboratorios</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link"
                           href="/productos"
                           aria-expanded="false"
                        >
                            <i class="mdi mdi-hexagon-multiple"></i>
                            <span class="hide-menu">Productos</span>
                        </a>
                    </li>
                </ul>

                <ul id="sidebarnav" class="pt-4">
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link"
                           href="/tiposPromociones"
                           aria-expanded="false"
                        >
                            <i class="mdi mdi-format-list-bulleted-type"></i>
                            <span class="hide-menu">Tipos de Promociones</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link"
                           href="/promociones"
                           aria-expanded="false"
                        >
                            <i class="mdi mdi-creation"></i>
                            <span class="hide-menu">Promociones</span>
                        </a>
                    </li>
                </ul>

                <ul id="sidebarnav" class="pt-4">
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link"
                           href="/departamentos"
                           aria-expanded="false"
                        >
                            <i class="mdi mdi-map"></i>
                            <span class="hide-menu">Departamentos</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link"
                           href="/municipios"
                           aria-expanded="false"
                        >
                            <i class="mdi mdi-map-marker-circle"></i>
                            <span class="hide-menu">Municipios</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link"
                           href="/sucursales"
                           aria-expanded="false"
                        >
                            <i class="mdi mdi-map-marker-radius"></i>
                            <span class="hide-menu">Sucursales</span>
                        </a>
                    </li>
                </ul>

                <ul id="sidebarnav" class="pt-4">
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link"
                           href="/clientes"
                           aria-expanded="false"
                        >
                            <i class="mdi mdi-human-male-female"></i>
                            <span class="hide-menu">Clientes</span>
                        </a>
                    </li>
                </ul>

                <ul id="sidebarnav" class="pt-4">
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link"
                           href="/roles"
                           aria-expanded="false"
                        >
                            <i class="mdi mdi-worker"></i>
                            <span class="hide-menu">Roles</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link"
                           href="/admins"
                           aria-expanded="false"
                        >
                            <i class="mdi mdi-account-settings-variant"></i>
                            <span class="hide-menu">Administradores</span>
                        </a>
                    </li>
                </ul>

                <ul id="sidebarnav" class="pt-4">
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link"
                           href="#"
                           aria-expanded="false"
                        >
                            <i class="mdi mdi-exit-to-app"></i>
                            <span class="hide-menu">Cambiar Contraseña</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link"
                           href="#"
                           aria-expanded="false"
                        >
                            <i class="mdi mdi-view-dashboard"></i>
                            <span class="hide-menu">Cerrar Sesión</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h1 class="page-title">@yield('sub_title')</h1>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            @yield('action')
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            @if(Session::has('message'))
                                <div class="alert {{ Session::get('alert-class') }}" role="alert">
                                    {{ Session::get('message') }}
                                </div>
                            @endif

                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
            All Rights Reserved by Matrix-admin. Designed and Developed by <a
                href="https://www.wrappixel.com">WrapPixel</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->


<!-- All Jquery -->

<!-- ============================================================== -->
<script src="{!! asset('matrix/assets/libs/jquery/dist/jquery.min.js') !!}"></script>

<!-- Bootstrap tether Core JavaScript -->
<script src="{!! asset('matrix/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') !!}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{!! asset('matrix/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') !!}"></script>
<script src="{!! asset('matrix/assets/extra-libs/sparkline/sparkline.js') !!}"></script>
<!--Wave Effects -->
<script src="{!! asset('matrix/dist/js/waves.js') !!}"></script>
<!--Menu sidebar -->
<script src="{!! asset('matrix/dist/js/sidebarmenu.js') !!}"></script>
<!--Custom JavaScript -->
<script src="{!! asset('matrix/dist/js/custom.min.js') !!}"></script>

@yield('scripts')

</body>
</html>
