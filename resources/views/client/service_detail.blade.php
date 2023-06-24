@extends('layouts.client.master')

@section('title', 'Chi tiết dịch vụ')

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 order-2 order-lg-1 wow fadeIn" data-wow-delay="200ms">
                    <div class="sidebar pe-xl-4">
                        <div class="widget mb-1-9 rounded">
                            <div class="widget-title">
                                <h3 class="mb-0 h6">Các dịch vụ</h3>
                            </div>
                            <div class="list-style3 p-1-9">
                                <ul class="list-unstyled service-detail mb-0">
                                    @foreach ($listService as $list)
                                        <li><a href="{{ route('route_FrontEnd_Service_Detail', ['id' => $list->id]) }}">{{ $list->service_name }}<span
                                                    class="ti-arrow-right"></span></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="widget mb-1-9 rounded">
                            <div class="widget-title">
                                <h3 class="mb-0 h6">Liên hệ</h3>
                            </div>
                            <div class="p-1-9">
                                <div class="d-flex mb-1-9">
                                    <div class="flex-shrink-0">
                                        <i class="ti-mobile text-primary-service-detail display-23"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="mb-1 h6">Số điện thoại</h4>
                                        <span>
                                            @foreach ($support as $phone)
                                                {{ $phone->support_phone_number }}
                                            @endforeach
                                        </span>
                                    </div>
                                </div>
                                <div class="d-flex mb-1-9">
                                    <div class="flex-shrink-0">
                                        <i class="ti-email text-primary-service-detail display-23"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="mb-1 h6">Email</h4>
                                        <span>
                                            @foreach ($support as $email)
                                                {{ $email->support_email }}
                                            @endforeach
                                        </span>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <i class="ti-location-pin text-primary-service-detail display-23"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="mb-1 h6">Địa chỉ</h4>
                                        <span>Hà Nội</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget rounded bg-img cover-background primary-overlay primary-overlay-news-detail wow fadeIn"
                            data-overlay-dark="9" data-background="{{ asset('client/img/bg/bg-04.jpg') }}"
                            data-wow-delay="700ms">
                            <div class="z-index-1 position-relative p-1-9">
                                <img src="{{ asset('client/img/content/sidebar.jpg') }}" alt="...">
                                <h3 class="text-white mt-4 h4">Chúng tôi có thể giúp gì?</h3>
                                <p class="text-white">Chúng tôi rất sẵn lòng phục vụ bạn.</p>
                                {{-- <a href="{{ route('route_FrontEnd_Service') }}" class="text-white">Xem tất cả dịch vụ<i
                                        class="ti-arrow-right align-middle ms-2"></i></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-1 order-lg-2 mb-2-9 mb-lg-0 wow fadeIn" data-wow-delay="400ms">
                    <div class="row">
                        <div class="col-12 mb-2-9 image-hover image-service-detail">
                            <img src="{{ asset($service->thumbnail) ? '' . Storage::url($service->thumbnail) : $service->service_name }}"
                                alt="Dịch vụ" class="rounded" style="height: 600px">
                        </div>
                        <div class="col-12 mb-1-9">
                            <h3 class="mb-3">{{ $service->service_name }}</h3>
                            <p class="mb-0">{{ $service->description }}</p>
                        </div>
                        {{-- <div class="col-12 mb-2-9">
                            <div class="row mt-n1-6">
                                <div class="col-md-6 col-lg-4 mt-1-6">
                                    <h3 class="mb-3 text-primary h1"><span>01</span></h3>
                                    <h4 class="h5 mb-3">Savings Potenstial</h4>
                                    <p class="mb-0 opacity8">We help you discover any protection inclusions that are ideal
                                        for you.</p>
                                </div>
                                <div class="col-md-6 col-lg-4 mt-1-6">
                                    <h3 class="mb-3 text-primary h1"><span>02</span></h3>
                                    <h4 class="h5 mb-3">Excellent Protection</h4>
                                    <p class="mb-0 opacity8">We help you discover any protection inclusions that are ideal
                                        for you.</p>
                                </div>
                                <div class="col-md-6 col-lg-4 mt-1-6">
                                    <h3 class="mb-3 text-primary h1"><span>03</span></h3>
                                    <h4 class="h5 mb-3">Worldwide Coverage</h4>
                                    <p class="mb-0 opacity8">We help you discover any protection inclusions that are ideal
                                        for you.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <p class="mb-1-9">All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                chunks as necessary, making this the first true generator on the Internet. It uses a
                                dictionary of over 200 Latin words, combined with a handful of model sentence structures, to
                                generate Lorem Ipsum.</p>
                            <div class="row">
                                <div class="col-sm-6 mb-1-9 mb-sm-0">
                                    <div class="image-hover">
                                        <img src="img/service/service-details13.jpg" class="rounded" alt="...">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="image-hover">
                                        <img src="img/service/service-details14.jpg" class="rounded" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        {{-- Hiển thị bảng dịch vụ bảo hiểm --}}
                        @if (isset($service))
                            <div class="inner-title" style="margin-bottom: 0px; border-bottom: none">
                                <h3 class="h4 mb-0">Thông tin dịch vụ</h3>
                            </div>
                        @else
                        @endif

                        @if (isset($service->charges))
                            <div class="row g-0">
                                <div class="col-md-5 bg-light border py-2 mb-3 text-center">Mức phí</div>
                                <div class="col-md-7 bg-light border py-2 mb-3 text-center">{{ $service->charges }}</div>
                            </div>
                        @else
                        @endif

                        @if (isset($service->duration))
                            <div class="row g-0">
                                <div class="col-md-5 bg-light border py-2 mb-3 text-center">Thời hạn</div>
                                <div class="col-md-7 bg-light border py-2 mb-3 text-center">{{ $service->duration }}</div>
                            </div>
                        @else
                        @endif

                        @if (isset($service->chface_protect_lifearges))
                            <div class="row g-0">
                                <div class="col-md-5 bg-light border py-2 mb-3 text-center">Mệnh giá bảo vệ tính mạng</div>
                                <div class="col-md-7 bg-light border py-2 mb-3 text-center">
                                    {{ $service->face_protect_life }}
                                </div>
                            </div>
                        @else
                        @endif

                        @if (isset($service->comprehensive_accident_insurance))
                            <div class="row g-0">
                                <div class="col-md-5 bg-light border py-2 mb-3 text-center">Bảo hiểm tai nạn toàn diện</div>
                                <div class="col-md-7 bg-light border py-2 mb-3 text-center">
                                    {{ $service->comprehensive_accident_insurance }}</div>
                            </div>
                        @else
                        @endif

                        @if (isset($service->critical_illness_insurance))
                            <div class="row g-0">
                                <div class="col-md-5 bg-light border py-2 mb-3 text-center">Bảo hiểm bệnh hiểm nghèo</div>
                                <div class="col-md-7 bg-light border py-2 mb-3 text-center">
                                    {{ $service->critical_illness_insurance }}</div>
                            </div>
                        @else
                        @endif

                        @if (isset($service->health_care_insurance))
                            <div class="row g-0">
                                <div class="col-md-5 bg-light border py-2 mb-3 text-center">Bảo hiểm chăm sóc sức khỏe</div>
                                <div class="col-md-7 bg-light border py-2 mb-3 text-center">
                                    {{ $service->health_care_insurance }}</div>
                            </div>
                        @else
                        @endif


                        {{-- Hiển thị bảng chi tiết dịch vụ bảo hiểm --}}
                        @if (isset($service->insurance_services))
                            <div class="inner-title mt-5" style="margin-bottom: 0px; border-bottom: none">
                                <h3 class="h4 mb-0">Chi tiết bảo vệ quyền lợi</h3>
                            </div>
                            <div class="row g-0">
                                <div class="col-md-12 border py-2 mb-3 text-center"
                                    style="font-weight: 700; color: #ec1f28">1. Quyền
                                    lợi tử vong</div>
                            </div>
                        @else
                        @endif

                        @if (isset($service->insurance_services->dead))
                            <div class="row g-0">
                                <div class="col-md-5 bg-light border py-2 mb-3 text-center">Tử vong/mất khả năng lao
                                    động</div>
                                <div class="col-md-7 bg-light border py-2 mb-3 text-center">
                                    {{ $service->insurance_services->dead }}</div>
                            </div>
                        @else
                        @endif

                        @if (isset($service->insurance_services->accidental_death))
                            <div class="row g-0">
                                <div class="col-md-5 bg-light border py-2 mb-3 text-center">Tử vong do tai nạn (sinh hoạt
                                    hoặc giao thông...) (5 - 65 tuổi)</div>
                                <div class="col-md-7 bg-light border py-2 mb-3 text-center">
                                    {{ $service->insurance_services->accidental_death }}
                                </div>
                            </div>
                        @else
                        @endif

                        @if (isset($service->insurance_services->death_due_special_accident))
                            <div class="row g-0">
                                <div class="col-md-5 bg-light border py-2 mb-3 text-center">Tử vong do tai nạn đặc biệt (5 -
                                    65 tuổi)
                                </div>
                                <div class="col-md-7 bg-light border py-2 mb-3 text-center">
                                    {{ $service->insurance_services->death_due_special_accident }}
                                </div>
                            </div>
                        @else
                        @endif

                        @if (isset($service->insurance_services))
                            <div class="row g-0">
                                <div class="col-md-12 border py-2 mb-3 text-center"
                                    style="font-weight: 700; color: #ec1f28">2.
                                    Bảo
                                    hiểm tai nạn toàn diện nâng cao</div>
                            </div>
                        @else
                        @endif

                        @if (isset($service->insurance_services->temporary_disability_benefits))
                            <div class="row g-0">
                                <div class="col-md-5 bg-light border py-2 mb-3 text-center">Quyền thương tật tạm thời
                                </div>
                                <div class="col-md-7 bg-light border py-2 mb-3 text-center">
                                    {{ $service->insurance_services->temporary_disability_benefits }}</div>
                            </div>
                        @else
                        @endif

                        @if (isset($service->insurance_services))
                            <div class="row g-0">
                                <div class="col-md-12 border py-2 mb-3 text-center"
                                    style="font-weight: 700; color: #ec1f28">3.
                                    Bảo
                                    hiểm bệnh hiểm nghèo cao cấp toàn diện</div>
                            </div>
                        @else
                        @endif

                        @if (isset($service->insurance_services->serious_illness_mild))
                            <div class="row g-0">
                                <div class="col-md-5 bg-light border py-2 mb-3 text-center">Bệnh hiểm nghèo thể nhẹ
                                </div>
                                <div class="col-md-7 bg-light border py-2 mb-3 text-center">
                                    {{ $service->insurance_services->serious_illness_mild }}</div>
                            </div>
                        @else
                        @endif

                        @if (isset($service->insurance_services->serious_illness))
                            <div class="row g-0">
                                <div class="col-md-5 bg-light border py-2 mb-3 text-center">Bệnh hiểm nghèo thể nặng
                                </div>
                                <div class="col-md-7 bg-light border py-2 mb-3 text-center">
                                    {{ $service->insurance_services->serious_illness }}</div>
                            </div>
                        @else
                        @endif

                        @if (isset($service->insurance_services))
                            <div class="row g-0">
                                <div class="col-md-12 border py-2 mb-3 text-center"
                                    style="font-weight: 700; color: #ec1f28">
                                    4. Quyền
                                    lợi chăm sóc sức khỏe</div>
                            </div>
                        @else
                        @endif

                        @if (isset($service->insurance_services->benefits_pay_medical_expenses))
                            <div class="row g-0">
                                <div class="col-md-5 bg-light border py-2 mb-3 text-center">Quyền lợi thanh toán chi phí y
                                    tế
                                </div>
                                <div class="col-md-7 bg-light border py-2 mb-3 text-center">
                                    {{ $service->insurance_services->benefits_pay_medical_expenses }}</div>
                            </div>
                        @else
                        @endif

                    </div>

                    <div class="col-12 mb-1-9 mt-5">
                        <div class="inner-title" style="margin-bottom: 5px">
                            <h3 class="h4 mb-0">Bảo lãnh viện phí</h3>
                        </div>
                        <p class="mb-4">
                            Bên cạnh hình thức tự thanh toán và nộp yêu cầu giải quyết bảo hiểm cho Dai-ichi Life Việt Nam,
                            khách hàng có thể sử dụng tiện ích của dịch vụ bảo lãnh thanh toán viện phí tại các bệnh viện
                            thuộc mạng lưới thanh toán trực tiếp của Pacific Cross Việt Nam – nhà cung cấp dịch vụ chuyên
                            nghiệp tại châu Á, do Dai-ichi Life Việt Nam chỉ định. Một số bệnh viện áp dụng bảo lãnh viện
                            phí: Vinmec, Phương Đông, Thu Cúc, Hồng Ngọc, Nhi Trung Ương, 108, ….
                        </p>

                        <p class="mb-0">
                            Bên cạnh hình thức tự thanh toán và nộp yêu cầu giải quyết bảo hiểm cho Dai-ichi Life Việt Nam,
                            khách hàng có thể sử dụng tiện ích của dịch vụ bảo lãnh thanh toán viện phí tại các bệnh viện
                            thuộc mạng lưới thanh toán trực tiếp của Pacific Cross Việt Nam – nhà cung cấp dịch vụ chuyên
                            nghiệp tại châu Á, do Dai-ichi Life Việt Nam chỉ định. Một số bệnh viện áp dụng bảo lãnh viện
                            phí: Vinmec, Phương Đông, Thu Cúc, Hồng Ngọc, Nhi Trung Ương, 108, ….
                        </p>
                    </div>

                    <div class="row">
                        <div class="col-md-12 position-relative elements-block mb-6 mb-md-0">

                            <div class="inner-title" style="margin-bottom: 5px">
                                <h3 class="h4 mb-0">Thủ tục thanh toán chi phí y tế</h3>
                            </div>

                            <ul class="list-style1 mb-0">
                                <li>Tại bệnh viện quốc tế /liên kết bảo lãnh : Thanh toán sau 1h kể từ lúc khách hàng yêu
                                    cầu ra viện</li>
                                <li>Tại bệnh viện cấp Quận/Huyện trở lên : Thủ tục thanh toán nhanh nhất là 5 ngày và chậm
                                    nhất là 14 ngày kể từ ngày nhận giấy thanh toán điều trị</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 position-relative elements-block mb-6 mb-md-0 mt-5">

                            <div class="inner-title" style="margin-bottom: 5px">
                                <h3 class="h4 mb-0">Giấy tờ liên quan</h3>
                            </div>

                            <ul class="list-style1 mb-0">
                                <li>Tại bệnh viện quốc tế /liên kết bảo lãnh : Thẻ Dai-ichi Life Care và chứng minh thư
                                    khách hàng</li>
                                <li>Tại bệnh viện cấp Quận/Huyện trở lên : yêu cầu 4 giấy tờ như sau:
                                    <ul class="list-style1 list-style1-service-detail mb-0">
                                        <li>1. Sổ khám bệnh</li>
                                        <li>2. Kết quả điều trị ( kết quả xét nghiệm máu, điện tâm đồ, phim chụp X-Quang..)
                                        </li>
                                        <li>3. Hóa đơn thanh toán ( Hóa đơn đỏ, Giấy thu tiền, Biên lai thanh toán..)</li>
                                        <li>4. Giấy ra viện</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
