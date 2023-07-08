<?php
$footer = DB::table('setting_home')->get();
$listMenuService = DB::table('services')->paginate(4);
$newsFooter = DB::table('news')->paginate(3);
?>

<footer class="footer-style2 pt-0 overflow-hidden position-relative">
    <div class="container pb-0">
        <div class="row mt-n1-9 mb-6 mb-md-8">
            <div class="col-sm-6 col-lg-4 pe-5 mt-1-9 wow fadeIn" data-wow-delay="200ms">
                <div class="footer-top">
                    <h3 class="mb-1-9 h4">Liên hệ</h3>
                    <ul class="footer-list ps-0">
                        <li><a href="#!"><i class="fas fa-map-marker-alt me-2"></i>Địa Chỉ: Trụ sở Dai-ichi miền Bắc:
                                Số 195 Khâm
                                Thiên, Phường Thổ Quan, Quận Đống Đa, TP Hà Nội</a></li>
                        <li><a href="tel:0353693509"><i class="fas fa-phone-alt me-2"></i>Điện Thoại:
                                @foreach ($footer as $phone)
                                    {{ $phone->support_phone_number }}
                                @endforeach
                            </a></li>
                        <li><a href="#!"><i class="fas fa-envelope me-2"></i>Email:
                                @foreach ($footer as $email)
                                    {{ $email->support_email }}
                                @endforeach
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-2 mt-1-9 wow fadeIn" data-wow-delay="350ms">
                <h3 class="h4 mb-1-9">Dịch vụ</h3>
                <ul class="footer-list ps-0">
                    @foreach ($listMenuService as $menu)
                        <li><a
                                href="{{ route('route_FrontEnd_Service_Detail', ['id' => $menu->id]) }}">{{ $menu->service_name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-sm-6 col-lg-3 mt-1-9 wow fadeIn" data-wow-delay="500ms">
                <h3 class="h4 mb-1-9">Bài viết gần đây</h3>
                @forelse ($newsFooter as $new)
                    <div class="d-flex mb-1-9">
                        <div class="flex-shrink-0 image-hover">
                            <img src="{{ asset($new->images_news) ? '' . Storage::url($new->images_news) : $new->title }}"
                                class="rounded" alt="Bài viết" style="height: 70px">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h4 class="text-white mb-2 h6 h6-footer"><a
                                    href="{{ route('route_FrontEnd_News_Detail', ['id' => $new->id]) }}">{{ $new->title }}</a>
                            </h4>
                            {{-- <small class="text-white opacity7">8 Jan, 2022</small> --}}
                        </div>
                    </div>
                @empty
                    <div class="text-center text-danger" style="padding-top: 30px">
                        <p colspan="12" style="color: red !important">Không có dịch vụ</p>
                    </div>
                @endforelse
            </div>
            <div class="col-sm-6 col-lg-3 mt-1-9 wow fadeIn" data-wow-delay="650ms">
                <h3 class="h4 mb-1-9">Tư vấn</h3>
                <form action="{{ route('route_FrontEnd_Contact_Footer_Create') }}" method="post"
                    enctype="multipart/form-data" onsubmit="return validateForm()">
                    @csrf
                    <div class="quform-elements">

                        <div class="row">

                            <!-- Begin Text input element -->
                            <div class="col-md-12">
                                <div class="quform-element">
                                    <div class="quform-input">
                                        <input class="form-control form-control-footer" type="text"
                                            name="contact_name" placeholder="Họ tên" />
                                        @error('contact_name')
                                            <div>
                                                <p class="text-white">{{ $message }}</p>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- End Text input element -->

                            <!-- Begin Text input element -->
                            <div class="col-md-12">
                                <div class="quform-element">
                                    <div class="quform-input">
                                        <input class="form-control form-control-footer" type="text"
                                            name="phone_number" placeholder="Số điện thoại" />
                                        @error('phone_number')
                                            <div>
                                                <p class="text-white">{{ $message }}</p>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- End Text input element -->

                            <!-- Begin Text input element -->
                            <div class="col-md-12">
                                <div class="quform-element">
                                    <div class="quform-input">
                                        <input class="form-control form-control-footer" type="text" name="message"
                                            placeholder="Nội dung tư vấn" />
                                        @error('message')
                                            <div>
                                                <p class="text-white">{{ $message }}</p>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- End Text input element -->

                            <!-- Begin Submit button -->
                            <div class="col-md-12">
                                <div class="quform-submit-inner">
                                    <button class="butn-style2 butn-style2-footer white border-0 w-100 "
                                        type="submit" id="sa-success">Nhận tư vấn</button>
                                </div>
                                <div class="quform-loading-wrap text-center"><span class="quform-loading"></span></div>
                            </div>
                            <!-- End Submit button -->

                        </div>

                    </div>

                </form>
            </div>
        </div>
        <div class="row bg-white border-radius-5 p-4 bg-opacity-10 align-items-center wow fadeIn"
            data-wow-delay="250ms">
            <div class="col-md-4 mb-4 mb-md-0 text-center text-md-start">
                <div class="footer-logo text-center text-md-start mx-auto mx-lg-0">
                    @foreach ($footer as $lg)
                        <img src="{{ asset($lg->logo) ? '' . Storage::url($lg->logo) : '' }}" alt="logo"
                            style="height: 70px">
                    @endforeach
                </div>
            </div>
            <div class="col-md-8">
                <div class="text-center text-md-end">
                    <ul class="footer-nav m-0 p-0">
                        <li><a href="/">Trang chủ</a></li>
                        <li><a href="/#service">Dịch vụ</a></li>
                        <li><a href="/#about">Giới thiệu</a></li>
                        <li><a href="/#partner">Đối tác</a></li>
                        <li><a href="/#new">Bài viết</a></li>
                        <li><a href="{{ route('route_FrontEnd_Contact') }}">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="py-1-9 py-md-2-9 wow fadeIn" data-wow-delay="300ms">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="text-white mb-0">&copy; <span class="current-year"></span> DAI-ICHi LIFE <a href="#!"
                            class="text-primary text-white-hover"> - Gắn bó lâu dài</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
