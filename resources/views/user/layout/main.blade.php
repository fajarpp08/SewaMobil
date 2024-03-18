<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Rental Mobil</title>
    <link rel="icon" href="{{ asset('assets-admin/img/car-rent-logo-web.png') }}" type="image/png">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets-user/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-user/css/splide.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-user/css/slimselect.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-user/css/main.css') }}">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="{{ asset('icon/favicon-32x32.png') }}" sizes="32x32">
    <link rel="apple-touch-icon" href="{{ asset('icon/favicon-32x32.png') }}">

    <meta name="description" content="Car rental HTML Template">
    <meta name="keywords" content="">
    <meta name="author" content="Dmitry Volkov">

</head>

<body>
    <!-- header -->
    @include('user.layout.header')
    <!-- end header -->

    <!-- main content -->
    @yield('content')
    <!-- end main content -->

    <!-- footer -->
    @include('user.layout.footer')
    <!-- end footer -->

    <!-- JS -->
    <script src="{{ asset('assets-user/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets-user/js/splide.min.js') }}"></script>
    <script src="{{ asset('assets-user/js/slimselect.min.js') }}"></script>
    <script src="{{ asset('assets-user/js/smooth-scrollbar.js') }}"></script>
    <script src="{{ asset('assets-user/js/main.js') }}"></script>
</body>

</html>
