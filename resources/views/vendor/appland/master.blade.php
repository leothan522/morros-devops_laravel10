<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ config('app.name') }} - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/appland/assets/vendor/aos/aos.css') }}{{--assets/vendor/aos/aos.css--}}" rel="stylesheet">
    <link href="{{ asset('vendor/appland/assets/vendor/bootstrap/css/bootstrap.min.css') }}{{--assets/vendor/bootstrap/css/bootstrap.min.css--}}" rel="stylesheet">
    <link href="{{ asset('vendor/appland/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}{{--assets/vendor/bootstrap-icons/bootstrap-icons.css--}}" rel="stylesheet">
    <link href="{{ asset('vendor/appland/assets/vendor/boxicons/css/boxicons.css') }}{{--assets/vendor/boxicons/css/boxicons.min.css--}}" rel="stylesheet">
    <link href="{{ asset('vendor/appland/assets/vendor/glightbox/css/glightbox.min.css') }}{{--assets/vendor/glightbox/css/glightbox.min.css--}}" rel="stylesheet">
    <link href="{{ asset('vendor/appland/assets/vendor/swiper/swiper-bundle.min.css') }}{{--assets/vendor/swiper/swiper-bundle.min.css--}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('vendor/appland/assets/css/style.css') }}{{--assets/css/style.css--}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Appland - v4.9.0
    * Template URL: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    @livewireStyles
</head>

<body>

<!-- ======= Header ======= -->
    @include('vendor.appland.components.header')
<!-- End Header -->

<!-- ======= Hero Section ======= -->
    @include('vendor.appland.components.hero_section')
<!-- End Hero -->

<main id="main">

    @yield('main')

</main><!-- End #main -->

<!-- ======= Footer ======= -->
    @include('vendor.appland.components.footer')
<!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('vendor/appland/assets/vendor/aos/aos.js') }}{{--assets/vendor/aos/aos.js--}}"></script>
<script src="{{ asset('vendor/appland/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}{{--assets/vendor/bootstrap/js/bootstrap.bundle.min.js--}}"></script>
<script src="{{ asset('vendor/appland/assets/vendor/glightbox/js/glightbox.min.js') }}{{--assets/vendor/glightbox/js/glightbox.min.js--}}"></script>
<script src="{{ asset('vendor/appland/assets/vendor/swiper/swiper-bundle.min.js') }}{{--assets/vendor/swiper/swiper-bundle.min.js--}}"></script>
<script src="{{ asset('vendor/appland/assets/vendor/php-email-form/validate.js') }}{{--assets/vendor/php-email-form/validate.js--}}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('vendor/appland/assets/js/main.js') }}{{--assets/js/main.js--}}"></script>
@livewireScripts
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<x-livewire-alert::scripts />
@include('sweetalert::alert')
</body>

</html>
