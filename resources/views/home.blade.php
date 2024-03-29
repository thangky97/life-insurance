@extends('layouts.client.master')

@section('title', 'Trang chủ')

@section('content')

    <!-- ABOUT US
                                                                                                                ================================================== -->
    <div id="about" style="margin-top: 5rem">
        <div class="container">
            <div class="row align-items-center about-style3">
                <div class="col-lg-7 col-xl-6 mb-1-9 mb-sm-6 mb-lg-0 wow fadeIn" data-wow-delay="200ms">
                    <div class="pe-md-6 pe-lg-1-9 position-relative text-center text-sm-start">
                        <img src="{{ asset('client/img/content/about-06.jpg') }}" class="mb-sm-15 border-radius-5"
                            alt="...">
                        <img src="{{ asset('client/img/content/about-07.jpg') }}"
                            class="position-absolute bottom-0 end-0 bg-white p-2 border-radius-5 d-none d-sm-block"
                            alt="...">
                        <img src="{{ asset('client/img/content/about-08.jpg') }}"
                            class="position-absolute top-5 right-5 border-radius-5 d-none d-sm-block" alt="...">
                        <div
                            class="bg-white border-primary-color border border-width-3 p-4 border-radius-10 about-quote ani-left-right d-none d-sm-block">
                            <p class="mb-0 text-dark">" “Khách hàng
                                là trên hết” - Dai-ichi Life cam kết trở thành
                                người bạn đồng hành đáng tin cậy trọn đời của khách hàng."
                                {{-- <span class="fw-bold">- Triết lý kinh doanh</span> --}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-6 wow fadeIn" data-wow-delay="400ms">
                    <div class="ps-xl-7">
                        <h2 class="display-22 display-sm-18 display-md-16 display-lg-14 display-xl-10 mb-lg-1-6">Dai-ichi
                            Life</h2>
                        <p class="mb-1-9 font-weight-600">Chúc tôi sẽ cung cấp giải pháp và tạo ra giá trị bền vững!</p>
                        <div class="horizontaltab tab-style1 clearfix">
                            <ul class="resp-tabs-list hor_1">
                                <li><span>01.</span> Sứ mệnh</li>
                                <li><span>02.</span> Tầm nhìn</li>
                            </ul>
                            <div class="resp-tabs-container hor_1 p-0">
                                <div>
                                    Dai-ichi Life Insurance là cung cấp sự bảo vệ tài chính cho khách hàng, đáp ứng nhu cầu
                                    cá nhân và tạo ra giá trị bền vững trong lĩnh vực bảo hiểm nhân thọ.
                                </div>
                                <div>
                                    Dai-ichi Life là trở thành một công ty bảo hiểm nhân thọ hàng đầu, được công nhận về
                                    chất lượng dịch vụ và sự đổi mới, và mang lại giá trị thực cho khách hàng và cộng đồng.
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 mt-md-0">
                            <a href="about.html" class="border-bottom display-30 font-weight-600 text-primary">Read More <i
                                    class="ti-arrow-right align-middle display-31"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SERVICE
                                                                                                                ================================================== -->
    <section id="service" class="bg-light" style="padding: 70px 0">
        <div class="container">
            <div class="text-center mb-2-1 wow fadeIn" data-wow-delay="100ms">
                <h2 class="display-22 display-sm-18 display-md-16 display-lg-14 w-lg-50 mx-auto mb-0">Các gói bảo hiểm
                </h2>
            </div>
            <div class="row mt-n1-9">
                @forelse ($listService as $item)
                    <div class="col-md-6 col-xl-3 mt-1-9 wow fadeIn" data-wow-delay="200ms">
                        <div class="card card-style5">
                            <div class="card-body">
                                {{-- <div class="position-relative">
                                    <img src="{{ asset($item->thumbnail) ? '' . Storage::url($item->thumbnail) : $item->service_name }}"
                                        alt="service" style="height: 150px">
                                </div> --}}
                                <div class="card-image position-relative">
                                    <img src="{{ asset($item->thumbnail) ? '' . Storage::url($item->thumbnail) : $item->service_name }}"
                                        class="card-img-top" alt="...">
                                </div>
                                <h3 class="h4 mt-4" style="height: 4rem"><a
                                        href="{{ route('route_FrontEnd_Service_Detail', ['id' => $item->id]) }}">
                                        @php
                                            $limitedMessage = Str::limit($item->service_name, 34, '...');
                                        @endphp
                                        <span>{!! nl2br(e($limitedMessage)) !!}</span>
                                    </a>
                                </h3>
                                <p class="mb-4">
                                    @php
                                        $limitedDescription = Str::limit($item->description, 48, '...');
                                    @endphp
                                    <span>{!! $limitedDescription !!}</span>
                                </p>
                                <a href="{{ route('route_FrontEnd_Service_Detail', ['id' => $item->id]) }}"
                                    class="border-bottom display-30 font-weight-600">Xem thêm <i
                                        class="ti-arrow-right align-middle display-31"></i></a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center text-danger" style="padding-top: 30px">
                        <p colspan="12" style="color: red !important">Không có dịch vụ</p>
                    </div>
                @endforelse
            </div>
        </div>
        <div class="round-shape-one top-n10 left-90 d-none d-md-block"></div>
    </section>

    <!-- WHY CHOOSE US
                                                                                                                ================================================== -->
    <section class="bg-white why-us-02 bg-img" data-background="img/content/why-us-02.jpg"
        style="padding: 30px 0; padding-bottom: 80px">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 wow fadeIn" data-wow-delay="200ms">
                    <div class="pe-xl-2-9">
                        <h2 class="display-22 display-sm-18 display-md-16 display-lg-14 display-xl-10 mb-1-9">Câu hỏi
                            thường gặp
                        </h2>

                        <div id="accordion" class="accordion-style style1">
                            @foreach ($questions as $index => $ques)
                                <div class="card mb-3">
                                    <div class="card-header" id="heading{{ $index }}">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{ $index }}" aria-expanded="false"
                                                aria-controls="collapse{{ $index }}">{{ '0' . $index + 1 }}.
                                                {{ $ques->title }} </button>
                                        </h5>
                                    </div>
                                    <div id="collapse{{ $index }}" class="collapse"
                                        aria-labelledby="heading{{ $index }}" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            {{ $ques->content }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeIn d-none d-xl-block" data-wow-delay="400ms">
                    <div class="ps-xxl-1-9 text-center">
                        <img src="{{ asset('client/img/content/why-us-03.jpg') }}" class="border-radius-5" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION
                                                                                                                ================================================== -->
    <section class="bg-img cover-background primary-overlay" data-overlay-dark="8"
        data-background="{{ asset('client/img/bg/bg5.jpg') }}">
        <div class="container">
            <div class="row justify-content-center wow fadeIn" data-wow-delay="200ms">
                <div class="col-lg-7 text-center">
                    {{-- <img src="{{ asset('client/img/icons/icon-14.png') }}" class="extra-icon-circle mb-4" alt="..."> --}}
                    <h2 class="text-white display-18 display-sm-15 display-md-10 display-lg-6 mb-0">Cố vấn chuyên nghiệp và
                        đáng tin cậy cho bảo hiểm của bạn</h2>
                </div>
            </div>
        </div>
        <div
            class="bg-secondary p-14 d-inline-block rounded-circle position-absolute left-n5 bottom-n15 ani-top-bottom z-index-1 d-none d-md-block">
        </div>
        <div class="banner-shape1 d-none d-md-block"></div>
        <img src="{{ asset('client/img/content/shape10.png') }}"
            class="position-absolute right-5 top-10 z-index-3 ani-left-right d-none d-md-block" alt="...">
    </section>

    <section>
        <div class="container mb-4">
            <div class="row">
                <div class="col-md-4 col-column">
                    <div class="border-column">
                        <h3 class="mb-3 h3-column display-27">BẢO VỆ TOÀN DIỆN</h3>
                        <p class="display-30 content-column">- Chương trình bảo vệ sức khỏe toàn diện cho gia đình bạn, bảo
                            vệ tài chính và cung cấp dịch vụ y tế tốt nhất cho gia đình thân yêu </br>
                            - Phạm vi bảo vệ không giới hạn giúp bạn luôn có được sự chăm sóc y tế tốt nhất từ những Y- Bác
                            Sỹ
                            đến từ những Bệnh VIện tốt nhất Việt Nam</p>
                    </div>
                </div>
                <div class="col-md-4 col-column">
                    <div class="border-column">
                        <h3 class="mb-3 h3-column display-27">DỊCH VỤ TỐT NHẤT</h3>
                        <p class="display-30 content-column">- Dịch vụ chăm sóc sức khỏe đến từ những Bệnh Viện tốt nhất,
                            giúp bạn luôn an tâm về đội ngũ Y - Bác Sỹ cùng những thiết bị y tế và dịch vụ chăm sóc sứ khỏe
                            hoàn hảo nhất </br>
                            - Không giới hạn về bệnh, giúp bạn luôn vững tin với thẻ Dai-Ichi Life Care.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="border-column">
                        <h3 class="mb-3 h3-column display-27">CHI PHÍ LINH HOẠT</h3>
                        <p class="display-30 content-column">- Sản phẩm tối ưu tài chính cho cả gia đình </br>
                            - Các gói sản phẩm hấp dẫn đáp ứng mọi nhu cầu của khách hàng </br>
                            - Chi phí y tế với trẻ em chỉ bằng 30%, người lớn chỉ bằng 80% thị trường.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-column">
                    <div class="border-column">
                        <h3 class="mb-3 h3-column display-27">CHỦ ĐỘNG BẢO VỆ</h3>
                        <p class="display-30 content-column">- Phí đóng linh hoạt, thời gian chủ động, Dai-Ichi Life vẫn
                            luôn
                            đồng hành bảo vệ bạn đem lại sự vững tâm kể cả khi bạn gặp khó khăn về tài chính </br>
                            - Tự do điều chỉnh số lượng thành viên tham gia hợp đồng, tự do thay đổi mức phí bảo hiểm hàng
                            năm.</p>
                    </div>
                </div>
                <div class="col-md-4 col-column">
                    <div class="border-column">
                        <h3 class="mb-3 h3-column display-27">TẬN TÂM – NHANH CHÓNG</h3>
                        <p class="display-30 content-column">- Thanh toán 100% viện phí theo hóa đơn thực tế tại TẤT CẢ các
                            bệnh viện công và quốc tế toàn cầu. </br>
                            - Giải quyết quyền lợi bảo hiểm nhanh chóng trong 1 tuần. </br>
                            - Hưởng dịch vụ chăm sóc Y Tế đến từ những Trung Tâm- Bệnh Viện chất lượng 5 *.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="border-column">
                        <h3 class="mb-3 h3-column display-27">BẢO VỆ LÂU DÀI</h3>
                        <p class="display-30 content-column">- Được bảo vệ theo đúng các điều- điều khoản của hợp đồng, bảo
                            vệ hỗ trợ lâu dài cho đến lúc đáo hạn </br>
                            - Dai-Ichi Life cam kết đem lại dịch vụ chăm sóc sức khỏe tốt nhất bảo vệ bạn, giúp bạn thêm An
                            Tâm – Thịnh Vượng</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Biểu phí
                                                                                                                ================================================== -->
    <section id="Cacgoi" style="margin-top: -4rem">
        <div class="container">
            <div class="text-center mb-2-1 wow fadeIn" data-wow-delay="100ms">
                <span class="text-muted text-uppercase small letter-spacing-4 d-block mb-3 font-weight-600">Các gói cơ
                    bản</span>
                <h2 class="display-22 display-sm-18 display-md-16 display-lg-14 w-lg-50 mx-auto mb-0">Mức phí tiêu biểu<h2>
            </div>
            <div class="row mt-n1-9 gx-xl-5 align-items-center">
                <div class="col-md-6 col-lg-4 mt-1-9 wow fadeIn" data-wow-delay="200ms">
                    <div class="card card-style6 text-center">
                        <div class="card-body py-2-9 px-2-3">
                            <h3 class="price-title">Phổ thông</h3>
                            <h4 class="price-label price-label-home2">45.000đ</h4>
                            <ul class="list-style4">
                                <li><a href="#!">Quyền lợi tử vong: 500 tr - 1 tỉ</a></li>
                                <li><a href="#!">Bảo hiểm tai nạn: 200 tr - 400 tr</a></li>
                                <li><a href="#!">Bảo hiểm Bệnh Hiểm Nghèo: 200 - 400 tr</a></li>
                                <li><a href="#!">3 tr/1 ngày tiền giường bệnh</a></li>
                                <li><a href="#!">Bảo lãnh 100% viện phí</a></li>
                                <li><a href="#!">1 tấm thẻ Dai-ichi Life ( thanh toán 100% viện phí)</a></li>
                                <li><a href="#!">Đóng phí 15 năm bảo vệ trọn đời</a></li>
                            </ul>
                            <a href="contact.html" class="butn-style2 butn-style2-home2 mt-1-9">Đăng ký</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-1-9 wow fadeIn" data-wow-delay="400ms">
                    <div class="card card-style6 text-center bg-secondary">
                        <div class="card-body py-2-9 px-2-3">
                            <h3 class="price-title-home">Cao cấp</h3>
                            <h4 class="price-label-home">100.000đ</h4>
                            <ul class="list-style4">
                                <li><a href="#!">Quyền lợi tử vong: 2 tỉ - 3 tỉ</a></li>
                                <li><a href="#!">Bảo hiểm tai nạn: 800 tr - 1,6 tỉ</a></li>
                                <li><a href="#!">Bảo hiểm Bệnh Hiểm Nghèo: 500 tr - 1 tỉ</a></li>
                                <li><a href="#!">3 tr/1 ngày tiền giường bệnh</a></li>
                                <li><a href="#!">Bảo lãnh 100% viện phí</a></li>
                                <li><a href="#!">4 tấm thẻ Dai-ichi Life ( thanh toán 100% viện phí)</a></li>
                                <li><a href="#!">Đóng phí 15 năm bảo vệ trọn đời</a></li>
                            </ul>
                            <a href="contact.html" class="butn-style2 butn-style2-home white mt-1-9">Đăng ký</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-1-9 wow fadeIn" data-wow-delay="600ms">
                    <div class="card card-style6 text-center">
                        <div class="card-body py-2-9 px-2-3">
                            <h3 class="price-title">Đặc biệt</h3>
                            <h4 class="price-label price-label-home2">70.000đ</h4>
                            <ul class="list-style4">
                                <li><a href="#!">Quyền lợi tử vong: 1 tỉ - 1,8 tỉ</a></li>
                                <li><a href="#!">Bảo hiểm tai nạn: 500 tr - 1 tỉ</a></li>
                                <li><a href="#!">Bảo hiểm Bệnh Hiểm Nghèo: 300 - 600 tr</a></li>
                                <li><a href="#!">3 tr/1 ngày tiền giường bệnh</a></li>
                                <li><a href="#!">Bảo lãnh 100% viện phí</a></li>
                                <li><a href="#!">2 tấm thẻ Dai-ichi Life ( thanh toán 100% viện phí)</a></li>
                                <li><a href="#!">Đóng phí 15 năm bảo vệ trọn đời</a></li>
                            </ul>
                            <a href="contact.html" class="butn-style2 butn-style2-home2 mt-1-9">Đăng ký</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS
                                                                                                                ================================================== -->
    {{-- <section class="bg-img cover-background left-overlay-dark" data-overlay-dark="90"
        data-background="{{ asset('client/img/bg/bg-06.jpg') }}">
        <div class="container">
            <div class="row align-items-center wow fadeIn" data-wow-delay="200ms">
                <div class="col-lg-7">
                    <div>
                        <div class="position-relative">
                            <img src="{{ asset('client/img/icons/quote.png') }}"
                                class="mb-4 position-absolute left-n10 top-n15 opacity2" alt="...">
                            <h2 class="text-primary mb-1-9 h1">Testimonials</h2>
                        </div>
                        <div class="testimonial-carousel-02 owl-theme owl-carousel">
                            <div>
                                <p class="mb-1-9 display-29 display-md-28 display-lg-27 display-xl-25 text-white">"Your
                                    company is truly upstanding and is behind its product 100%. We've used insurance for the
                                    last five years. It fits our needs perfectly. Nice work on your insurance. It's
                                    incredible."</p>
                                <h4 class="text-white opacity7 font-weight-500 h5">- Jai Erskine</h4>
                            </div>
                            <div>
                                <p class="mb-1-9 display-29 display-md-28 display-lg-27 display-xl-25 text-white">"I made
                                    back the purchase price in just 48 hours! No matter where you go, You won't regret it.
                                    Insurance is great. I'd be lost without insurance. Thanks guys, keep up the good work!"
                                </p>
                                <h4 class="text-white opacity7 font-weight-500 h5">- Georgia Holden</h4>
                            </div>
                            <div>
                                <p class="mb-1-9 display-29 display-md-28 display-lg-27 display-xl-25 text-white">
                                    "Insurance should be nominated for service of the year. I love insurance. Insurance is
                                    the most valuable business resource we have EVER purchased. I will refer everyone I
                                    know."</p>
                                <h4 class="text-white opacity7 font-weight-500 h5">- Luke Petrie</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- KHÁCH HÀNG SỬ DỤNG --}}
    <section style="margin-top: -4rem">
        <div class="container">
            <div class="text-center mb-2-9 wow fadeIn title-style1 white" data-wow-delay="100ms">
                <h2 class="display-22 display-sm-18 display-md-16 mb-0">Khách hàng tin tưởng sử dụng</h2>
            </div>
        </div>
        <div class="container-fluid px-0">
            <div class="owl-theme owl-carousel portfolio-carousel-02">
                @foreach ($customerUse as $item)
                    <div class="portfolio-style03">
                        <img src="{{ asset($item->customer_photo) ? '' . Storage::url($item->customer_photo) : '' }}"
                            class="rounded" alt="...">
                        <div class="overlay-box">
                            <div class="content">
                                <h3 class="mb-2 h4"><a href="#!">{{ $item->customer_name }}</a></h3>
                                <span class="font-weight-600">{{ $item->job }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- BLOG
                                                                                                                ================================================== -->
    <section id="new" class="bg-light">
        <div class="container position-relative z-index-2">
            <div class="text-center mb-2-1 wow fadeIn" data-wow-delay="100ms">
                <h2 class="display-22 display-sm-18 display-md-16 display-lg-14 w-lg-50 mx-auto mb-0">Tin tức
                </h2>
            </div>
            <div class="row gx-xl-5 mt-n1-9 wow fadeIn" data-wow-delay="900ms">
                @forelse ($news as $new)
                    <div class="col-md-6 col-lg-4 mt-1-9 wow fadeIn" data-wow-delay="200ms">
                        <article class="card card-style7 border-radius-5 border-0 h-100">
                            <div class="card-image position-relative">
                                <img src="{{ asset($new->images_news) ? '' . Storage::url($new->images_news) : $new->title }}"
                                    class="card-img-top" alt="...">
                            </div>
                            <div class="card-body p-1-9 position-relative">
                                <h3 class="h4" style="height: 4rem"><a
                                        href="{{ route('route_FrontEnd_News_Detail', ['id' => $new->id]) }}">
                                        @php
                                            $limitedMessage = Str::limit($new->title, 44, '...');
                                        @endphp
                                        <span>{!! nl2br(e($limitedMessage)) !!}</span>
                                    </a>
                                </h3>
                                <p>
                                    @php
                                        $limitedMessage = Str::limit($new->sort_content, 35, '...');
                                    @endphp
                                    <span>{!! $limitedMessage !!}</span>
                                </p>
                                <a href="{{ route('route_FrontEnd_News_Detail', ['id' => $new->id]) }}"
                                    class="text-secondary text-primary-hover font-weight-600">Đọc
                                    thêm <i class="ti-arrow-right ms-2 align-middle display-30"></i></a>
                            </div>
                        </article>
                    </div>
                @empty
                    <div class="text-center text-danger" style="padding-top: 30px">
                        <p colspan="12" style="color: red !important">Không có dịch vụ</p>
                    </div>
                @endforelse
            </div>
        </div>
        <img src="{{ asset('client/img/content/shape4.png') }}"
            class="position-absolute top-5 right-5 ani-top-bottom d-none d-md-block" alt="...">
    </section>

    <!-- PARTNER
                                                                                                            ================================================== -->
    <section id="partner" class="bg-light" style="padding-top: 0px">
        <div class="container">
            <div class="text-center mb-2-1 wow fadeIn" data-wow-delay="100ms">
                <h2 class="display-22 display-sm-18 display-md-16 display-lg-14 w-lg-50 mx-auto mb-0">Đối tác
                </h2>
            </div>
            <div class="clients-carousel owl-carousel owl-theme">
                <img src="{{ asset('client/img/partner/01.jpg') }}" alt="...">
                <img src="{{ asset('client/img/partner/02.jpg') }}" alt="...">
                <img src="{{ asset('client/img/partner/03.jpg') }}" alt="...">
                <img src="{{ asset('client/img/partner/04.jpg') }}" alt="...">
                <img src="{{ asset('client/img/partner/05.jpg') }}" alt="...">
                <img src="{{ asset('client/img/partner/06.jpg') }}" alt="...">
                <img src="{{ asset('client/img/partner/07.jpg') }}" alt="...">
                <img src="{{ asset('client/img/partner/08.jpg') }}" alt="...">
            </div>
        </div>
    </section>

@endsection

@section('script')
    <script>
        var accordionItems = document.getElementsByClassName('btn btn-link');

        for (var i = 0; i < accordionItems.length; i++) {
            accordionItems[i].addEventListener('click', function() {
                var currentCollapse = this.getAttribute('data-bs-target');
                var isExpanded = this.getAttribute('aria-expanded');

                // Đóng tất cả các accordion items trước khi mở item mới
                var allCollapseItems = document.getElementsByClassName('collapse show');
                for (var j = 0; j < allCollapseItems.length; j++) {
                    allCollapseItems[j].classList.remove('show');
                }

                // Mở/collapse accordion item tương ứng
                if (isExpanded === 'true') {
                    document.querySelector(currentCollapse).classList.remove('show');
                } else {
                    document.querySelector(currentCollapse).classList.add('show');
                }
            });
        }
    </script>
@endsection()
