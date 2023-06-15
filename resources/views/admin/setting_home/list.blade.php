@extends('layouts.admin.master')

@section('title', 'Quản lý trang chủ')

@section('content')

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h6 class="page-title">Nội dung hệ thống</h6>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div id="msg-box">
                    <?php //Hiển thị thông báo thành công
                    ?>
                    @if (Session::has('success'))
                        <div class="alert alert-success solid alert-dismissible fade show">
                            <span><i class="mdi mdi-check"></i></span>
                            <strong>{{ Session::get('success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                            </button>
                        </div>
                    @endif
                    <?php //Hiển thị thông báo lỗi
                    ?>
                    @if (Session::has('error'))
                        <div class="alert alert-danger solid alert-end-icon alert-dismissible fade show">
                            <span><i class="mdi mdi-help"></i></span>
                            <strong>{{ Session::get('errors') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                            </button>
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                            </button>
                        </div>
                    @endif
                </div>
                <div class="row">

                    <div class="col-xl-3 col-md-6">
                        <div class="card directory-card">
                            <div class="card-body">
                                <div class="d-flex" style="margin-bottom: 1.25rem">
                                    <div class="flex-shrink-0">
                                        @foreach ($setting as $favi)
                                            <img src="{{ asset($favi->favicon) ? '' . Storage::url($favi->favicon) : '' }}"
                                                alt="" class="img-fluid img-thumbnail rounded-circle avatar-lg">
                                        @endforeach
                                    </div>
                                    <div class="flex-grow-1 ms-4 mt-4">
                                        <h5 class="text-primary font-size-18 mb-1">Favicon</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- end cardbody -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-3 col-md-6">
                        <div class="card directory-card">
                            <div class="card-body">
                                <div class="d-flex" style="margin-bottom: 1.25rem">
                                    <div class="flex-shrink-0">
                                        @foreach ($setting as $lg)
                                            <img src="{{ asset($lg->logo) ? '' . Storage::url($lg->logo) : '' }}"
                                                alt="" class="img-fluid img-thumbnail rounded-circle avatar-lg">
                                        @endforeach
                                    </div>
                                    <div class="flex-grow-1 ms-4 mt-4">
                                        <h5 class="text-primary font-size-18 mb-1">Logo</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- end cardbody -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <div class="card directory-card">
                            <div class="card-body">
                                <div class="d-flex" style="margin-bottom: 2rem">
                                    <ul class="list-unstyled social-links mb-0">
                                        <li><a href="#" class="btn-primary"><i class="mdi mdi-email-outline"></i></a>
                                        </li>
                                        <li><a href="#" class="btn-info"><i class="mdi mdi-phone"></i></a></li>
                                    </ul>
                                    @foreach ($setting as $item)
                                        <ul class="flex-grow-1 ms-3 list-unstyled social-links mb-0 ms-auto"
                                            style="margin-top: 0.25rem">
                                            <li>
                                                @if ($item->support_email)
                                                    <p style="font-size: 13px">{{ $item->support_email }}</p>
                                                @else
                                                    <p style="font-size: 13px">Không có Email</p>
                                                @endif
                                            </li>
                                            <li>
                                                @if ($item->support_phone_number)
                                                    <p style="font-size: 13px; margin-bottom: 0.65rem">
                                                        {{ $item->support_phone_number }}</p>
                                                @else
                                                    <p style="font-size: 13px; margin-bottom: 0.65rem">Không có số điện
                                                        thoại</p>
                                                @endif
                                            </li>
                                        </ul>
                                    @endforeach
                                </div>
                            </div>
                            <!-- end cardbody -->
                        </div>
                        <!-- end card -->
                    </div>

                    <!-- end col -->
                    <div class="col-xl-3 col-md-6">
                        <div class="card directory-card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <ul class="list-unstyled social-links mb-0">
                                        <li><a href="#" class="btn-primary"><i class="mdi mdi-facebook"></i></a></li>
                                        <li><a href="#" class="btn-info"><i class="mdi mdi-twitter"></i></a></li>
                                        <li><a href="#" class="btn-info"><i class="mdi mdi-instagram"></i></a></li>
                                    </ul>
                                    @foreach ($setting as $item)
                                        <ul class="flex-grow-1 ms-3 list-unstyled social-links mb-0 ms-auto"
                                            style="margin-top: 0.25rem">
                                            <li>
                                                @if ($item->link_facebook)
                                                    <p style="font-size: 13px; margin-bottom: 0.65rem">
                                                        {{ $item->link_facebook }}</p>
                                                @else
                                                    <p style="font-size: 13px; margin-bottom: 0.65rem">Không có Facebook</p>
                                                @endif
                                            </li>
                                            <li>
                                                @if ($item->link_zalo)
                                                    <p style="font-size: 13px">{{ $item->link_zalo }}</p>
                                                @else
                                                    <p style="font-size: 13px">Không có Zalo</p>
                                                @endif
                                            </li>
                                            <li>
                                                @if ($item->link_instagram)
                                                    <p class="mb-0" style="font-size: 13px">{{ $item->link_instagram }}
                                                    </p>
                                                @else
                                                    <p class="mb-0" style="font-size: 13px">Không có Instagram</p>
                                                @endif
                                            </li>
                                        </ul>
                                    @endforeach

                                </div>
                            </div>
                            <!-- end cardbody -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                    {{-- <div class="col-xl-4 col-md-6">
                    <div class="card directory-card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <img src="assets/images/users/user-9.jpg" alt=""
                                        class="img-fluid img-thumbnail rounded-circle avatar-lg">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="text-primary font-size-18 mb-1">Adam V. Acker</h5>
                                    <p class="font-size-12 mb-2">Creative Director</p>
                                    <p class="mb-0">Adam@veltrix.com</p>
                                </div>
                                <ul class="list-unstyled social-links ms-auto">
                                    <li><a href="#" class="btn-primary"><i class="mdi mdi-facebook"></i></a>
                                    </li>
                                    <li><a href="#" class="btn-info"><i class="mdi mdi-twitter"></i></a></li>
                                </ul>
                            </div>
                            <hr>
                            <p class="mb-0"><b>Intro : </b>At vero eos et accusamus et iusto odio dignissimos ducimus
                                qui blanditiis atque corrupti quos dolores et... <a href="#"
                                    class="text-primary"> Read More</a></p>
                        </div>
                        <!-- end cardbody -->
                    </div>
                    <!-- end card -->
                </div>
                
                <div class="col-xl-4 col-md-6">
                    <div class="card directory-card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <img src="assets/images/users/user-10.jpg" alt=""
                                        class="img-fluid img-thumbnail rounded-circle avatar-lg">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="text-primary font--size18 mb-1">Stanley M. Dyke</h5>
                                    <p class="font-size-12 mb-2">Creative Director</p>
                                    <p class="mb-0">Stanley@veltrix.com</p>
                                </div>
                                <ul class="list-unstyled social-links ms-auto">
                                    <li><a href="#" class="btn-primary"><i class="mdi mdi-facebook"></i></a>
                                    </li>
                                    <li><a href="#" class="btn-info"><i class="mdi mdi-twitter"></i></a></li>
                                </ul>
                            </div>
                            <hr>
                            <p class="mb-0"><b>Intro : </b>At vero eos et accusamus et iusto odio dignissimos ducimus
                                qui blanditiis atque corrupti quos dolores et... <a href="#"
                                    class="text-primary"> Read More</a></p>
                        </div>
                        <!-- end cardbody -->
                    </div>
                    <!-- end card -->
                </div> --}}
                    <!-- end col -->

                </div>
                <!-- end row -->
                <div class="text-center">
                    <a href="{{ route('route_BackEnd_Setting_Home_Edit', 1) }}"
                        class="btn btn-primary waves-effect waves-light me-1">Cập nhật</a>
                </div>
            </div> <!-- container-fluid -->
        </div>
    </div>

@endsection
