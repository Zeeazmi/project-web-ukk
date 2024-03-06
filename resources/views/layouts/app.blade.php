<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.bootstrapget.com/demos/templatemonster/discover-dark-admin-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Mar 2024 12:44:25 GMT -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Discover - Dark Bootstrap 5 Admin Template - Bootstrap Gallery</title>

    <!-- Meta -->
    <meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery/">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="{{ asset('images/favicon.svg') }}" />

    <!-- *************
   ************ CSS Files *************
  ************* -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/bootstrap/bootstrap-icons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.min.css') }}" />

    <!-- *************
   ************ Vendor Css Files *************
  ************ -->

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/overlay-scroll/OverlayScrollbars.min.css') }}" />

    <!-- NO UI Slider CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/nouislider/css/nouislider.css') }}" />
</head>

<body>
    <!-- Page wrapper start -->
    <div class="page-wrapper">

        <!-- Main container start -->
        <div class="main-container">

            <!-- Sidebar wrapper start -->
            {{-- @include('layouts.sidebar') --}}
            <!-- Sidebar wrapper end -->

            <!-- App container starts -->
            <div class="app-container">

                <!-- App header starts -->
                <!-- App header ends -->

                <!-- Toggle buttons start -->
                <div class="d-flex">
                    <button class="btn btn-primary btn-sm me-3 toggle-sidebar" id="toggle-sidebar">
                        <i class="bi bi-list fs-5"></i>
                    </button>
                    {{-- <button class="btn btn-light btn-sm me-3 pin-sidebar" id="pin-sidebar">
                        <i class="bi bi-list fs-5"></i>
                    </button> --}}
                </div>
                <!-- Toggle buttons end -->

                <!-- App brand start -->
                <div class="app-brand-sm">
                    <a href="index.html" class="d-lg-none d-md-block">
                        <img src="{{ asset('assets/images/logo-sm.svg') }}" class="logo" alt="Bootstrap Gallery">
                    </a>
                </div>
                <!-- App brand end -->

                <!-- App body starts -->
                @include('layouts.sidebar')
                <main class="main-content position-relative border-radius-lg ">
                    @include('layouts.header')
                    <div class="container-fluid py-4">
                        @yield('content')
                        @include('layouts.footer')
                    </div>
                </main>
                <!-- App body ends -->

                <!-- App footer start -->

                <!-- App footer end -->

            </div>
            <!-- App container ends -->

        </div>
        <!-- Main container end -->

    </div>
    <!-- Page wrapper end -->

    <!-- *************
   ************ JavaScript Files *************
  ************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- *************
   ************ Vendor Js Files *************
  ************* -->

    <!-- Overlay Scroll JS -->
    <script src="{{ asset('assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/overlay-scroll/custom-scrollbar.js') }}"></script>

    <!-- Apex Charts -->
    <script src="{{ asset('assets/vendor/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/dash1/visitors.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/dash1/sales.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/dash1/orders.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/dash1/sparkline.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/dash1/tasks.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/dash1/qone.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/dash1/qtwo.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/dash1/profit.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/dash1/users.js') }}"></script>

    <!-- No UI Slider JS -->
    <script src="{{ asset('assets/vendor/nouislider/js/nouislider.js') }}"></script>

    <!-- Mapael JS -->
    <script src="{{ asset('assets/js/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/mapael/jquery.mapael.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/mapael/maps/world_countries.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/mapael/custom/population.js') }}"></script>

    <!-- Custom JS files -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Date Range JS -->
    <script src="{{ asset('assets/vendor/daterange/daterange.js') }}"></script>
    <script src="{{ asset('assets/vendor/daterange/custom-daterange.js') }}"></script>

    @stack('script')
</body>
