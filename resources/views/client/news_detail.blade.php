@extends('layouts.client.master')

@section('title', 'Chi tiết bài viết')

@section('content')

    <section style="margin-top: -15rem">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <article class="card card-style3 border-0 h-100">
                                <img src="{{ asset($news->images_news) ? '' . Storage::url($news->images_news) : $news->title }}"
                                    class="card-img-top" alt="Bài viết" style="height: 540px">
                                <div class="card-body p-1-9 position-relative">
                                    {{-- <div class="blog-date position-absolute">
                                        <span
                                            class="d-block text-primary z-index-2 position-relative alt-font font-weight-700 display-26 display-sm-22 lh-1 mb-2">17</span>
                                        <span
                                            class="d-block text-primary z-index-2 position-relative alt-font text-uppercase small lh-1">nov</span>
                                        <span class="blog-shape"></span>
                                    </div> --}}
                                    {{-- <ul class="mb-2 p-0">
                                        <li class="display-30 d-inline-block text-capitalize me-3"><a href="#!"><i
                                                    class="ti-user text-primary pe-2"></i>admin</a></li>
                                        <li class="display-30 d-inline-block"><i
                                                class="ti-comments text-primary pe-2"></i>13 Comments</li>
                                    </ul> --}}
                                    <h3 class="mb-4">{{ $news->title }}</h3>
                                    <p>{{ $news->sort_content }}</p>
                                    <p class="text-primary mb-1-9">{{ $news->content }}</p>
                                    <div class="row mb-4">
                                        <div class="col-6">
                                            <div class="image-hover">
                                                <img src="{{ asset('client/img/blog/blog-post-02.jpg') }}" class="rounded"
                                                    alt="...">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="image-hover">
                                                <img src="{{ asset('client/img/blog/blog-post-03.jpg') }}" class="rounded"
                                                    alt="...">
                                            </div>
                                        </div>
                                    </div>
                                    <p>{{ $news->content }}</p>
                                    <ul class="list-style2 mb-1-9">
                                        <li>We can save you money.</li>
                                        <li>Production or trading of good</li>
                                        <li>Our life insurance is flexible.</li>
                                        <li>A fast & easy application</li>
                                        <li>Growing your business</li>
                                    </ul>
                                </div>
                                <div
                                    class="border-top border-color-light-black p-1-9 g-0 d-md-flex align-items-center entry-footer float-start w-100">
                                    <div class="tags flex-grow-1 mb-4 mb-md-0 pe-md-3 wow fadeIn" data-wow-delay="200ms">
                                        <label class="h6 me-3 mb-0">Tags:</label>
                                        <a href="#!">business</a>
                                        <a href="#!">finance</a>
                                        <a href="#!">analysis</a>
                                    </div>
                                    <div class="blog-share-icon wow fadeIn wow fadeIn" data-wow-delay="400ms">
                                        <label class="h6 me-1 mb-0">Share:</label>
                                        <ul class="share-post m-0 p-0 d-inline-block">
                                            <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li><a href="https://twitter.com/?lang=vi"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li><a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                                            </li>
                                            <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog sidebar ps-xl-4">
                        <div class="widget mb-1-9 wow fadeIn" data-wow-delay="400ms">
                            <div class="widget-title">
                                <h3 class="mb-0 h6">Bài viết gần đây</h3>
                            </div>
                            <div class="p-1-9">
                                @forelse ($relatedNew as $new)
                                    <div class="d-flex mb-4">
                                        <div class="flex-shrink-0 image-hover">
                                            <img src="{{ asset($new->images_news) ? '' . Storage::url($new->images_news) : $new->title }}"
                                                class="rounded" alt="Bài viết" style="height: 70px">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h4 class="h6"><a href="{{ route('route_FrontEnd_News_Detail', ['id' => $new->id]) }}">{{ $new->title }}</a></h4>
                                            {{-- <p class="mb-0 small">Nov 22, 2021</p> --}}
                                        </div>
                                    </div>
                                @empty
                                    <div class="text-center text-danger" style="padding-top: 30px">
                                        <p colspan="12" style="color: red !important">Không có dịch vụ</p>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                        {{-- <div class="widget mb-1-9 wow fadeIn" data-wow-delay="500ms">
                            <div class="widget-title">
                                <h3 class="mb-0 h6">Tags</h3>
                            </div>
                            <div class="tags p-1-9">
                                <a href="#!">agency</a>
                                <a href="#!">business</a>
                                <a href="#!">design</a>
                                <a href="#!">development</a>
                                <a href="#!">technology</a>
                                <a href="#!">web</a>
                                <a href="#!">corporate</a>
                                <a href="#!">startup</a>
                            </div>
                        </div> --}}
                        <div class="widget wow fadeIn mb-1-9" data-wow-delay="600ms">
                            <div class="widget-title">
                                <h3 class="mb-0 h6">Theo dõi chúng tôi</h3>
                            </div>
                            <div class="p-1-9">
                                <ul class="social-icon-style2 mb-0 d-inline-block list-unstyled">
                                    <li class="d-inline-block me-2"><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="d-inline-block me-2"><a href="https://twitter.com/?lang=vi"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="d-inline-block me-2"><a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a>
                                    </li>
                                    <li class="d-inline-block"><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget rounded bg-img cover-background primary-overlay primary-overlay-news-detail wow fadeIn"
                            data-overlay-dark="9" data-background="{{ asset('client/img/bg/bg-04.jpg') }}"
                            data-wow-delay="700ms">
                            <div class="z-index-1 position-relative p-1-9">
                                <img src="{{ asset('client/img/content/sidebar.jpg') }}" alt="...">
                                <h3 class="text-white mt-4 h4">Chúng tôi có thể giúp gì?</h3>
                                <p class="text-white">Chúng tôi rất sẵn lòng phục vụ bạn.</p>
                                <a href="{{ route('route_FrontEnd_Service') }}" class="text-white">Xem tất cả dịch vụ<i
                                        class="ti-arrow-right align-middle ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
