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
    <title>@yield('title')</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('client/img/logos/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('client/img/logos/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('client/img/logos/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('client/img/logos/apple-touch-icon-114x114.png') }}">

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
               <a href="tel:0981481368" class="call-icon" rel="nofollow">
                <i class="fas fa-phone-alt" aria-hidden="true"></i>
                  <div class="animated alo-circle"></div>
                  <div class="animated alo-circle-fill  "></div>
                   <span>Hotline: 0353 693 509</span>
                </a>
                {{-- <a href="sms:0981481368" class="sms">
                  <i class="fa fa-weixin" aria-hidden="true"></i>
                  <span>SMS: 0353 693 509</span>
                </a> --}}
                <a href="https://www.facebook.com/Ngocthang.net/" class="mes">
                  <i class="fab fa-facebook-messenger" aria-hidden="true"></i>
                  <span>Nhắn tin Facebook</span>
                </a>
                <a href="http://zalo.me/0353693509" class="zalo">
                  <i class="fas fa-phone-square-alt" aria-hidden="true"></i>
                  <span>Zalo: 0353 693 509</span>
                </a>
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
    
    <script>
        $(document).ready(function(){
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

</body>


<!-- Mirrored from lifesthtml.websitelayout.net/index-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jun 2023 09:13:21 GMT -->

</html>
