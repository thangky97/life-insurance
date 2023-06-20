@extends('layouts.client.master')

@section('title', 'Liên hệ')

@section('content')

    <!-- CONTACT FORM
                                ================================================== -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-xl-4 mb-2-9 mb-lg-0">
                    <div class="pe-lg-3 mt-n1-9">
                        <div class="card card-style4 mt-1-9">
                            <div class="card-body p-1-6 p-sm-1-9">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 icon-box">
                                        <i
                                            class="ti-location-pin text-primary text-primary-contact z-index-9 display-8 position-relative"></i>
                                        <div class="box-circle primary"></div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="h5">Địa chỉ</h4>
                                        <span>Hà Nội.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-style4 mt-1-9">
                            <div class="card-body p-1-6 p-sm-1-9">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 icon-box">
                                        <i
                                            class="ti-mobile text-primary text-primary-contact z-index-9 display-8 position-relative"></i>
                                        <div class="box-circle primary"></div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="h5">Số điện thoại</h4>
                                        <span class="d-block">
                                            @foreach ($support as $phone)
                                                {{ $phone->support_phone_number }}
                                            @endforeach
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-style4 mt-1-9">
                            <div class="card-body p-1-6 p-sm-1-9">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 icon-box">
                                        <i
                                            class="ti-email text-primary text-primary-contact z-index-9 display-8 position-relative"></i>
                                        <div class="box-circle primary"></div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="h5">Email</h4>
                                        <span class="d-block">
                                            @foreach ($support as $email)
                                                {{ $email->support_email }}
                                            @endforeach
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-8">
                    <div class="ps-xl-3">
                        <h2 class="h3 mb-4">Liên hệ</h2>
                        @if (Session::has('success'))
                            <div class="alert alert-success solid alert-dismissible fade show">
                                <span><i class="fas fa-check"></i></span>
                                <strong>{{ Session::get('success') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                </button>
                            </div>
                        @endif
                        <form action="{{ route('route_FrontEnd_Contact_Create') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="quform-elements">
                                <div class="row">
                                    <!-- Begin Name -->
                                    <div class="col-md-12">
                                        <div class="quform-element form-group">
                                            <label for="name">Tên của bạn <span class="text-danger">*</span></label>
                                            <div class="quform-input">
                                                <input class="form-control" type="text" name="contact_name"
                                                    placeholder="Nhập tên..." />
                                                @error('contact_name')
                                                    <div>
                                                        <p class="text-danger">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Name -->

                                    <!-- Begin Phone -->
                                    <div class="col-md-12">
                                        <div class="quform-element form-group">
                                            <label for="phone">Số điện thoại <span class="text-danger">*</span></label>
                                            <div class="quform-input">
                                                <input class="form-control" type="text" name="phone_number"
                                                    placeholder="Nhập số điện thoại..." />
                                                @error('phone_number')
                                                    <div>
                                                        <p class="text-danger">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Phone -->

                                    <!-- Begin Title -->
                                    {{-- <div class="col-md-12">
                                        <div class="quform-element form-group">
                                            <label for="subject">Tiêu đề <span >*</span></label>
                                            <div class="quform-input">
                                                <input class="form-control" id="subject" type="text" name="subject"
                                                    placeholder="Nhập tiêu đề..." />
                                            </div>
                                        </div>
                                    </div> --}}
                                    <!-- End Title -->


                                    <!-- Begin Content -->
                                    <div class="col-md-12">
                                        <div class="quform-element form-group">
                                            <label for="message">Nội dung <span class="text-danger">*</span></label>
                                            <div class="quform-input">
                                                <textarea class="form-control h-auto" id="message" name="message" rows="3" placeholder="..."></textarea>
                                                @error('message')
                                                    <div>
                                                        <p class="text-danger">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Content -->

                                    <!-- Begin Submit button -->
                                    <div class="col-md-12">
                                        <div class="quform-submit-inner">
                                            <button class="butn border-0" type="submit">Gửi</button>
                                        </div>
                                        <div class="quform-loading-wrap text-start"><span class="quform-loading"></span>
                                        </div>
                                    </div>
                                    <!-- End Submit button -->

                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MAP
                                ================================================== -->
    <iframe class="map" id="gmap_canvas"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d251638.01203291898!2d105.61890356375363!3d9.779269644652011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a052094d3f5cff%3A0x841b44a689ca0e8a!2zQuG6o28gaGnhu4NtIG5ow6JuIHRo4buNIERhaSBJY2hpIExpZmU!5e0!3m2!1svi!2s!4v1686630621474!5m2!1svi!2s"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>


@endsection
