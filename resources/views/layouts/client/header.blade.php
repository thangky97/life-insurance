<?php
$header = DB::table('setting_home')->get();
$listMenuService = DB::table('services')->where('status', '=', 1)->get();
?>

<header class="header-style2">
    <div class="top-bar bg-secondary">
        <div class="container-fluid px-lg-1-6 px-xl-2-5 px-xxl-2-9">
            <div class="row">
                <div class="col-md-9 col-xs-12">
                    <div class="top-bar-info">
                        <ul class="ps-0 phone-header">
                            <li><a href="tel:0353693509"><i class="ti-mobile"></i>
                                    @foreach ($header as $phone)
                                        {{ $phone->support_phone_number }}
                                    @endforeach
                                </a></li>
                            <li class="d-none d-sm-inline-block"><i class="ti-email"></i>
                                @foreach ($header as $email)
                                    {{ $email->support_email }}
                                @endforeach
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 d-none d-md-block">
                    <ul class="top-social-icon ps-0">
                        @foreach ($header as $link)
                            <li><a href="{{ $link->link_facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                        @endforeach
                        @foreach ($header as $link)
                            <li><a href="{{ $link->link_zalo }}"><i class="fab fa-instagram"></i></a></li>
                        @endforeach
                        {{-- <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="navbar-default border-bottom border-color-light-white">

        <!-- start top search -->
        {{-- <div class="top-search bg-primary">
            <div class="container-fluid px-sm-1-6 px-lg-2-9">
                <form class="search-form" action="https://lifesthtml.websitelayout.net/search.html" method="GET"
                    accept-charset="utf-8">
                    <div class="input-group">
                        <span class="input-group-addon cursor-pointer">
                            <button class="search-form_submit fas fa-search text-white" type="submit"></button>
                        </span>
                        <input type="text" class="search-form_input form-control" name="s" autocomplete="off"
                            placeholder="Type & hit enter...">
                        <span class="input-group-addon close-search mt-1"><i class="fas fa-times"></i></span>
                    </div>
                </form>
            </div>
        </div> --}}
        <!-- end top search -->

        <div class="container-fluid px-sm-2-9">
            <div class="row align-items-center">
                <div class="col-12 col-lg-12">
                    <div class="menu_area alt-font">
                        <nav class="navbar navbar-expand-lg navbar-light p-0">

                            <div class="navbar-header navbar-header-custom">
                                <!-- start logo -->
                                @foreach ( $header as $lg )
                                <a href="/" class="navbar-brand logodefault"><img id="logo"
                                    src="{{ asset($lg->logo) ? '' . Storage::url($lg->logo) : '' }}" alt="logo"></a>
                                @endforeach
                                <!-- end logo -->
                            </div>

                            <div class="navbar-toggler"></div>

                            <!-- start menu area -->
                            <ul class="navbar-nav ms-auto" id="nav" style="display: none;">
                                <li><a href="/">Trang chủ</a></li>
                                <li>
                                    <a href="{{ route('route_FrontEnd_Service') }}">Dịch vụ</a>
                                    <ul>
                                        @foreach ($listMenuService as $menu)
                                            <li><a
                                                    href="{{ route('route_FrontEnd_Service_Detail', ['id' => $menu->id]) }}">{{ $menu->service_name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{ route('route_FrontEnd_News') }}">Tin tức</a></li>
                                <li><a href="{{ route('route_FrontEnd_Introduce') }}">Giới thiệu</a></li>
                                <li><a href="{{ route('route_FrontEnd_Contact') }}">Liên hệ</a></li>
                            </ul>
                            <!-- end menu area -->

                            <!-- start attribute navigation -->
                            <div class="attr-nav align-items-lg-center ms-lg-auto">
                                <ul>
                                    {{-- <li class="search"><a href="#"><i class="fas fa-search"></i></a></li> --}}
                                    <li class="d-none d-xl-inline-block"><a
                                            href="{{ route('route_FrontEnd_Contact') }}"
                                            class="butn-style2 md text-white">Liên hệ</a></li>
                                </ul>
                            </div>
                            <!-- end attribute navigation -->

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
