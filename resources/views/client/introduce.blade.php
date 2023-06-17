@extends('layouts.client.master')

@section('title', 'Giới thiệu')

@section('content')

    <!-- ABOUT US
            ================================================== -->
    <section class="pb-0">
        <div class="container">
            <div class="row about-style2">
                <div class="col-lg-6 mb-1-9 mb-lg-0 wow fadeIn" data-wow-delay="200ms">
                    <div class="pe-xl-1-9 mb-md-2-9 position-relative">
                        <div class="text-end about-img1 position-relative image-hover">
                            <img src="{{ asset('client/img/content/about-03.jpg') }}" class="rounded" alt="...">
                        </div>
                        <img src="{{ asset('client/img/content/about-04.jpg') }}"
                            class="position-absolute bottom-n10 start-0 d-none d-md-block rounded" alt="...">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="400ms">
                    <div class="ps-xl-2-3">
                        <h2 class="h1 mb-1-6">Chúng tôi ở đây để hỗ trợ bạn</h2>
                        <p class="mb-1-9 lead font-weight-600">"If you want real marketing that works and
                            effective implementation - Lifest got you covered."</p>
                        <div class="row mt-n4 mb-1-6 mb-lg-1-9">
                            <div class="col-sm-6 mt-4">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('client/img/icons/icon-01.png') }}" alt="...">
                                    </div>
                                    <div class="flex-grow-1 ms-4">
                                        <h4 class="mb-0 display-26">Nhiều dịch vụ</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-4">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('client/img/icons/icon-02.png') }}" alt="...">
                                    </div>
                                    <div class="flex-grow-1 ms-4">
                                        <h4 class="mb-0 display-26">Hỗ trợ mọi thời gian</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="mb-1-9 pb-1-6 border-bottom">There are many variations of passages of Lorem Ipsum availa
                            ble, but the majority have suffered alteration in some form by injected humour, or randomised.
                        </p>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('client/img/avatar/avatar-01.jpg') }}" class="w-55px rounded-circle" alt="...">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h4 class="mb-0 h5">Liên hệ: 0353 693 509</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="d-inline-block p-3 border border-width-2 border-primary-color bottom-10 right-10 ani-move position-absolute rounded-circle d-none d-sm-block">
        </div>
    </section>

    <!-- COUNTER
            ================================================== -->
    <section>
        <div class="container">
            <div class="row mt-n1-9">
                <div class="col-md-6 col-lg-3 mt-1-9">
                    <div class="counter-style1 h-100">
                        <span class="icon-box">
                            <span class="dotted dots1"></span>
                            <span class="dotted dots2"></span>
                        </span>
                        <h3 class="display-16 display-md-14 display-xl-10 mb-0 text-secondary"><span
                                class="countup">114.000</span>+</h3>
                        <p class="mb-0 font-weight-600 text-secondary">Nhân viên tư vấn tài chính</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mt-1-9">
                    <div class="counter-style1 h-100">
                        <span class="icon-box">
                            <span class="dotted dots1"></span>
                            <span class="dotted dots2"></span>
                        </span>
                        <h3 class="display-16 display-md-14 display-xl-10 mb-0 text-secondary"><span
                                class="countup">1.800</span></h3>
                        <p class="mb-0 font-weight-600 text-secondary">Nhân viên</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mt-1-9">
                    <div class="counter-style1 h-100">
                        <span class="icon-box">
                            <span class="dotted dots1"></span>
                            <span class="dotted dots2"></span>
                        </span>
                        <h3 class="display-16 display-md-14 display-xl-10 mb-0 text-secondary countup">300</h3>
                        <p class="mb-0 font-weight-600 text-secondary">Văn phòng và đại lý</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mt-1-9">
                    <div class="counter-style1 h-100">
                        <span class="icon-box">
                            <span class="dotted dots1"></span>
                            <span class="dotted dots2"></span>
                        </span>
                        <h3 class="display-16 display-md-14 display-xl-10 mb-0 text-secondary"><span
                                class="countup">22.000</span>B</h3>
                        <p class="mb-0 font-weight-600 text-secondary">Tổng doanh thu 2022</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US
            ================================================== -->
    <section class="p-0 bg-secondary">
        <div class="container">
            <div class="row align-items-stretch">
                <div class="col-lg-6 py-8 py-xl-10">
                    <div class="pe-xl-6 position-relative z-index-9">
                        <div class="section-heading mb-4 mb-lg-5 wow fadeIn" data-wow-delay="100ms">
                            <span class="text-white">Tại sao chọn DAI-ICHI</span>
                            <h2 class="mb-0 text-white h1">Chúng tôi có những thành tích</h2>
                        </div>

                        <div class="progress-text">
                            <div class="row">
                                <div class="col-7">Khách hàng</div>
                                <div class="col-5 text-end">hơn 4.000.000 người sử dụng</div>
                            </div>
                        </div>
                        <div class="custom-progress progress">
                            <div class="custom-bar progress-bar slideInLeft" style="width:50%" aria-valuemax="100"
                                aria-valuemin="0" aria-valuenow="50" role="progressbar"></div>
                        </div>
                        <div class="progress-text">
                            <div class="row">
                                <div class="col-8">Nhân viên</div>
                                <div class="col-4 text-end">1.800 nhân viên</div>
                            </div>
                        </div>
                        <div class="custom-progress progress">
                            <div class="custom-bar progress-bar slideInLeft" style="width:90%" aria-valuemax="100"
                                aria-valuemin="0" aria-valuenow="90" role="progressbar"></div>
                        </div>
                        <div class="progress-text">
                            <div class="row">
                                <div class="col-8">Nhân viên tư vấn chuyên nghiệp</div>
                                <div class="col-4 text-end">120.000 người</div>
                            </div>
                        </div>
                        <div class="custom-progress progress">
                            <div class="custom-bar progress-bar slideInLeft" style="width:68%" aria-valuemax="100"
                                aria-valuemin="0" aria-valuenow="68" role="progressbar"></div>
                        </div>
                        <div class="progress-text">
                            <div class="row">
                                <div class="col-8">Top 10 công ty bảo hiểm thế giới</div>
                                <div class="col-4 text-end">đứng thứ 2</div>
                            </div>
                        </div>
                        <div class="custom-progress progress mb-0">
                            <div class="custom-bar progress-bar slideInLeft" style="width:80%" aria-valuemax="100"
                                aria-valuemin="0" aria-valuenow="80" role="progressbar"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block wow fadeIn" data-wow-delay="100ms">
                    <div class="position-relative h-100 vw-lg-50 bg-img cover-background overflow-visible py-8 py-xl-10"
                        data-overlay-dark="0" data-background="{{ asset('client/img/bg/bg-01.png') }}">
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('client/img/content/shape1.png') }}" class="position-absolute bottom-0 start-0 ani-top-bottom d-none d-lg-block"
            alt="...">
    </section>

    <!-- TEAM
        ================================================== -->
        <section class="bg-light">
            <div class="container">
                <div class="section-heading text-center mb-2-9 mb-lg-6 wow fadeIn" data-wow-delay="100ms">
                    <h2 class="display-22 display-sm-18 display-md-16 display-lg-11 mb-0">Hội đồng thành viên</h2>
                </div>
                <div class="row g-lg-5 mt-n2-6 text-center">
                    <div class="col-md-6 col-lg-4 mt-2-6 wow fadeIn" data-wow-delay="200ms">
                        <div class="team-style1">
                            <div class="image-hover">
                                <img src="{{ asset('client/img/team/team-07.jpg') }}" class="rounded" alt="...">
                            </div>
                            <div class="team-content">
                                <p class="mb-1">Chủ tịch danh dự</p>
                                <h3 class="h4 mb-0">Ông Takashi Fujii</h3>
                                <div class="team-social-icons">
                                    <div class="team-share"><i class="fas fa-share-alt"></i></div>
                                    <div class="team-social-links">
                                        <ul class="m-0 p-0 mt-1">
                                            <li><a href="#!"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#!"><i class="ti-twitter-alt"></i></a></li>
                                            <li><a href="#!"><i class="ti-instagram"></i></a></li>
                                            <li><a href="#!"><i class="ti-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-2-6 wow fadeIn" data-wow-delay="400ms">
                        <div class="team-style1">
                            <div class="image-hover">
                                <img src="{{ asset('client/img/team/team-08.jpg') }}" class="rounded" alt="...">
                            </div>
                            <div class="team-content">
                                <p class="mb-1">Chủ tịch</p>
                                <h3 class="h4 mb-0">Ông Trần Đình Quân</h3>
                                <div class="team-social-icons">
                                    <div class="team-share"><i class="fas fa-share-alt"></i></div>
                                    <div class="team-social-links">
                                        <ul class="m-0 p-0 mt-1">
                                            <li><a href="#!"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#!"><i class="ti-twitter-alt"></i></a></li>
                                            <li><a href="#!"><i class="ti-instagram"></i></a></li>
                                            <li><a href="#!"><i class="ti-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-2-6 wow fadeIn" data-wow-delay="600ms">
                        <div class="team-style1">
                            <div class="image-hover">
                                <img src="{{ asset('client/img/team/team-03.jpg') }}" class="rounded" alt="...">
                            </div>
                            <div class="team-content">
                                <p class="mb-1">Phó giám đốc điều hành</p>
                                <h3 class="h4 mb-0">Ông Đặng Hồng Hải</h3>
                                <div class="team-social-icons">
                                    <div class="team-share"><i class="fas fa-share-alt"></i></div>
                                    <div class="team-social-links">
                                        <ul class="m-0 p-0 mt-1">
                                            <li><a href="#!"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#!"><i class="ti-twitter-alt"></i></a></li>
                                            <li><a href="#!"><i class="ti-instagram"></i></a></li>
                                            <li><a href="#!"><i class="ti-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ asset('client/img/content/shape7.png') }}" class="position-absolute bottom-25 right-5 ani-move d-none d-sm-block" alt="...">
        </section>

    <!-- TESTIMONIALS
            ================================================== -->
    {{-- <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-2-9 mb-lg-0">
                    <div class="position-relative testimonial-1 pe-2 pe-sm-2-9">
                        <div class="text-center text-sm-end">
                            <div class="img-1 mt-sm-9 d-inline-block">
                                <img src="{{ asset('client/img/content/testimonial.jpg') }}" alt="...">
                            </div>
                        </div>
                        <img src="{{ asset('client/img/content/testimonial2.jpg') }}" class="position-absolute img-2 d-none d-sm-block"
                            alt="...">
                        <img src="{{ asset('client/img/content/shape8.png') }}" class="position-absolute top-40 left-5 d-none d-sm-block"
                            alt="...">
                        <img src="{{ asset('client/img/content/shape9.png') }}" class="position-absolute top-5 left-45 ani-move"
                            alt="...">
                        <img src="{{ asset('client/img/content/shape5.png') }}" class="position-absolute bottom-10 left-15 ani-left-right"
                            alt="...">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ps-lg-7 ps-xxl-9">
                        <div class="section-heading mb-2-9">
                            <span>Testimonial</span>
                            <h2 class="display-22 display-sm-18 display-md-16 display-lg-11 mb-0">What our clients say</h2>
                        </div>
                        <img src="{{ asset('client/img/icons/quote.png') }}" class="mb-4" alt="...">
                        <div class="testimonial-carousel owl-theme owl-carousel">
                            <div>
                                <p class="mb-1-9 lead text-dark">Your company is truly upstanding and is behind its product
                                    100%. We've used insurance for the last five years. It fits our needs perfectly. Nice
                                    work on your insurance. It's incredible.</p>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('client/img/avatar/avatar-02.jpg') }}" class="author-img rounded-circle"
                                            alt="...">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="text-secondary h5">Jai Erskine</h4>
                                        <span class="mb-0 text-primary font-weight-400 h6">- Senior Marketer</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p class="mb-1-9 lead text-dark">I made back the purchase price in just 48 hours! No matter
                                    where you go, You won't regret it. Insurance is great. I'd be lost without insurance.
                                    Thanks guys, keep up the good work!</p>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('client/img/avatar/avatar-03.jpg') }}" class="author-img rounded-circle"
                                            alt="...">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="text-secondary h5">Georgia Holden</h4>
                                        <span class="mb-0 text-primary font-weight-400 h6">- Business Advisor</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p class="mb-1-9 lead text-dark">Insurance should be nominated for service of the year. I
                                    love insurance. Insurance is the most valuable business resource we have EVER purchased.
                                    I will refer everyone I know.</p>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('client/img/avatar/avatar-04.jpg') }}" class="author-img rounded-circle"
                                            alt="...">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="text-secondary h5">Luke Petrie</h4>
                                        <span class="mb-0 text-primary font-weight-400 h6">- Project Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    

@endsection
