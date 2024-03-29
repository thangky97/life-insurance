<?php
$setting = DB::table('setting_home')->get();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- metas -->
    <meta charset="utf-8" />
    <meta name="author" content="Website Design By Thang" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="keywords" content="Bảo hiểm nhân thọ" />
    <meta name="description" content="Bảo hiểm nhân thọ - Hưng Dai-Ichi" />

    <!-- title  -->
    <title>@yield('title')</title>

    @foreach ($setting as $lg)
        <meta property="og:image" content="{{ asset($lg->logo) ? '' . Storage::url($lg->logo) : '' }}">
    @endforeach
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

    {{-- Config css --}}
    <link rel="stylesheet" href="{{ asset('client/config/style.css') }}">

    <!-- search css -->
    <link rel="stylesheet" href="{{ asset('client/search/search.css') }}">

    <!-- quform css -->
    <link rel="stylesheet" href="{{ asset('client/quform/css/base.css') }}">

    <!-- theme core css -->
    <link href="{{ asset('client/css/styles.css') }}" rel="stylesheet">

    <!-- Sweet Alert-->
    <link href="{{ asset('client/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- PAGE LOADING
    ================================================== -->
    {{-- <div id="preloader"></div> --}}

    <!-- MAIN WRAPPER
    ================================================== -->
    <div class="main-wrapper">

        <!-- HEADER
        ================================================== -->
        @include('layouts.client.header')

        <!-- BANNER
        ================================================== -->
        @include('layouts.client.banner')

        <!-- Content
        ================================================== -->
        @yield('content')

        <!-- FOOTER
        ================================================== -->
        @include('layouts.client.footer')

        <div class="social-button">
            <div class="social-button-content">
                @foreach ($setting as $phone)
                    <a href="tel:{{ str_replace(' ', '', $phone->support_phone_number) }}" class="call-icon"
                        rel="nofollow">
                        <i class="fas fa-phone-alt" aria-hidden="true"></i>
                        <div class="animated alo-circle"></div>
                        <div class="animated alo-circle-fill alo-circle-fill-call"></div>
                        <span>Hotline:
                            {{ $phone->support_phone_number }}
                        </span>
                    </a>
                @endforeach
                {{-- <a href="sms:0981481368" class="sms">
                  <i class="fa fa-weixin" aria-hidden="true"></i>
                  <span>SMS: 0353 693 509</span>
                </a> --}}
                @foreach ($setting as $link)
                    <a href="{{ $link->link_facebook }}" class="mes">
                        <i class="fab fa-facebook-messenger" aria-hidden="true"></i>
                        <span>Nhắn tin Facebook</span>
                    </a>
                @endforeach
                @foreach ($setting as $link)
                    <a href="{{ $link->link_zalo }}" class="zalo">
                        <i class="fas fa-phone-square-alt" aria-hidden="true"></i>
                        <span>Zalo: {{ $link->support_phone_number }}</span>
                    </a>
                @endforeach
            </div>

            <a class="user-support">
                <i class="fas fa-user-ninja" aria-hidden="true"></i>
                <div class="animated alo-circle"></div>
                <div class="animated alo-circle-fill"></div>
            </a>
        </div>

    </div>

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

    <!-- Sweet Alerts js -->
    <script src="{{ asset('client/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- Sweet alert init js-->
    <script src="{{ asset('client/assets/js/pages/sweet-alerts.init.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.user-support').click(function(event) {
                $('.social-button-content').slideToggle();
            });
        });
    </script>

    <script>
        function navigateToURL(element) {
            var url = element.getAttribute('href');
            window.location.href = url;
        }
    </script>

    <script>
        function validateForm() {
            var contactName = document.getElementsByName('contact_name')[0].value;
            var phoneNumber = document.getElementsByName('phone_number')[0].value;
            var message = document.getElementsByName('message')[0].value;

            if (contactName === '' || phoneNumber === '' || message === '') {
                showAlert('Vui lòng nhập đầy đủ thông tin', 'alert');
                return false;
            } else {
                // showAlert('Gửi thông tin thành công', 'success');
                return true;
            }
        }

        function showAlert(message, type) {
            var alertElement = document.createElement('div');
            alertElement.className = 'alert ' + type;
            alertElement.innerText = message;

            var form = document.querySelector('form');
            form.insertBefore(alertElement, form.firstChild);
        }
    </script>

</body>

</html>
