@extends('layouts.client.master')

@section('title', 'Chi tiết dịch vụ')

@section('content')

    <section style="margin-top: -15rem">
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
                                    @foreach ($listMenuService as $list)
                                        <li><a href="{{ route('route_FrontEnd_Service_Detail', ['id' => $list->id]) }}">{{ $list->service_name }}<span
                                                    class="ti-arrow-right"></span></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="widget mb-1-9 rounded">
                            <div class="widget-title">
                                <h3 class="mb-0 h6">contact info</h3>
                            </div>
                            <div class="p-1-9">
                                <div class="d-flex mb-1-9">
                                    <div class="flex-shrink-0">
                                        <i class="ti-mobile text-primary display-23"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="mb-1 h6">Phone</h4>
                                        <span> (+44) 123 456 789</span>
                                    </div>
                                </div>
                                <div class="d-flex mb-1-9">
                                    <div class="flex-shrink-0">
                                        <i class="ti-email text-primary display-23"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="mb-1 h6">Email</h4>
                                        <span>hungmv.mgmydinh@gmail.com</span>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <i class="ti-location-pin text-primary display-23"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="mb-1 h6">Location</h4>
                                        <span>Regina ST, London, SK 8GH.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget rounded bg-img cover-background primary-overlay" data-overlay-dark="9"
                            data-background="img/bg/bg-04.jpg">
                            <div class="z-index-1 position-relative p-1-9">
                                <img src="img/content/sidebar.jpg" alt="...">
                                <h3 class="text-white mt-4 h4">How Can We Help?</h3>
                                <p class="text-white">We help you discover any protection inclusions that are ideal for you.
                                </p>
                                <a href="services.html" class="text-white">View All Services<i
                                        class="ti-arrow-right align-middle ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-1 order-lg-2 mb-2-9 mb-lg-0 wow fadeIn" data-wow-delay="400ms">
                    <div class="row">
                        <div class="col-12 mb-2-9 image-hover">
                            <img src="{{ asset($service->thumbnail) ? '' . Storage::url($service->thumbnail) : $service->service_name }}"
                                alt="..." class="rounded">
                        </div>
                        <div class="col-12 mb-1-9">
                            <h2 class="mb-3">Travel Insurance</h2>
                            <p class="mb-0">It is a long established fact that a reader will be distracted by the readable
                                content of a page when looking at its layout. The point of using Lorem Ipsum is that it has
                                a more-or-less normal distribution of letters, as opposed to using 'Content here, content
                                here', making it look like readable.</p>
                        </div>
                        <div class="col-12 mb-2-9">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
