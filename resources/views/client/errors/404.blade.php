<?php
  $setting = DB::table('setting_home')->get();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- metas -->
    <meta charset="utf-8" />
    <meta name="author" content="Website Design Templates" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="keywords" content="Insurance Agency HTML Template" />
    <meta name="description" content="Lifest - Insurance Agency HTML Template" />

    <!-- title  -->
    <title>Lỗi 404</title>

    <!-- favicon -->
    {{-- {{ asset($lg->logo) ? '' . Storage::url($lg->logo) : '' }} --}}
    @foreach ($setting as $favicon)
        <link rel="shortcut icon" href="{{ asset($favicon->favicon) ? '' . Storage::url($favicon->favicon) : '' }}">
    @endforeach
    @foreach ($setting as $favicon)
        <link rel="apple-touch-icon" href="{{ asset($favicon->favicon) ? '' . Storage::url($favicon->favicon) : '' }}">
    @endforeach
    @foreach ($setting as $favicon)
        <link rel="apple-touch-icon" sizes="72x72"
            href="{{ asset($favicon->favicon) ? '' . Storage::url($favicon->favicon) : '' }}">
    @endforeach
    @foreach ($setting as $favicon)
        <link rel="apple-touch-icon" sizes="114x114"
            href="{{ asset($favicon->favicon) ? '' . Storage::url($favicon->favicon) : '' }}">
    @endforeach

    <!-- plugins -->
    <link rel="stylesheet" href="{{ asset('client/css/plugins.css') }}">

    <!-- search css -->
    <link rel="stylesheet" href="{{ asset('client/search/search.css') }}">

    <!-- quform css -->
    <link rel="stylesheet" href="{{ asset('client/quform/css/base.css') }}">

    <!-- theme core css -->
    <link href="{{ asset('client/css/styles.css') }}" rel="stylesheet">

</head>

<body>

    <!-- PAGE LOADING
    ================================================== -->
    <div id="preloader"></div>

<div class="d-flex align-items-center position-relative min-vh-100 bg-white">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-9 col-lg-6 text-center my-5">
                <img src="{{ asset('client/img/content/error.png') }}" class="mb-4 mb-md-4 mb-lg-7" alt="...">
                <h1 class="mb-4">404, Page Not Found</h1>
                <p class="w-sm-90 w-md-85 mx-auto mb-4 opacity8">This page is incidentally inaccessible because of
                    support. We will back very before long much obliged for your understanding</p>
                <div class="div-error">
                    <a href="/" class="butn-error">Quay lại trang chủ</a>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('client/img/content/shape6.png') }}" class="position-absolute bottom-5 ani-left-right right-20 d-none d-md-block"
        alt="...">
    <img src="{{ asset('client/img/content/shape7.png') }}" class="position-absolute bottom-35 left-5 ani-move d-none d-sm-block"
        alt="...">
    <img src="{{ asset('client/img/content/shape9.png') }}" class="position-absolute top-5 left-35 ani-top-bottom d-none d-sm-block"
        alt="...">
    <img src="{{ asset('client/img/content/shape5.png') }}" class="position-absolute top-30 right-15 ani-top-bottom d-none d-md-block"
        alt="...">
    <img src="{{ asset('client/img/content/shape8.png') }}" class="position-absolute top-35 left-30 d-none d-lg-block" alt="...">
</div>

<!-- BUY TEMPLATE
    ================================================== -->
    <div class="buy-theme alt-font d-none d-lg-inline-block"><a href="https://themeforest.net/item/lifest-insurance-agency-html-template/35437741" target="_blank"><i class="fas fa-cart-plus"></i><span>Buy Template</span></a></div>

    <div class="all-demo alt-font d-none d-lg-inline-block"><a href="https://themeforest.net/user/websitedesigntemplates" target="_blank"><i class="far fa-envelope"></i><span>Quick Question?</span></a></div>

    <!-- SCROLL TO TOP
    ================================================== -->
    <a href="#!" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>

    <!-- all js include start -->

    <!-- jQuery -->
    <script src="{{ asset('client/js/jquery.min.js') }}"></script>

    <!-- popper js -->
    <script src="{{ asset('client/js/popper.min.js') }}"></script>

    <!-- bootstrap -->
    <script src="{{ asset('client/js/bootstrap.min.js') }}"></script>

    <!-- jquery -->
    <script src="{{ asset('client/js/core.min.js') }}"></script>

    <!-- Search -->
    <script src="{{ asset('client/search/search.js') }}"></script>

    <!-- custom scripts -->
    <script src="{{ asset('client/js/main.js') }}"></script>

    <!-- form plugins js -->
    <script src="{{ asset('client/quform/js/plugins.js') }}"></script>

    <!-- form scripts js -->
    <script src="{{ asset('client/quform/js/scripts.js') }}"></script>

    <!-- all js include end -->

</body>

</html>