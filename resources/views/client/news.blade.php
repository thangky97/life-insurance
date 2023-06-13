@extends('layouts.client.master')

@section('title', 'Bài viết')

@section('content')

    <section style="margin-top: -15rem">
        <div class="container">
            <div class="section-heading text-center mb-2-9 mb-lg-6 wow fadeIn" data-wow-delay="100ms">
                <h2 class="display-22 display-sm-18 display-md-16 display-lg-11 mb-0">Bài viết</h2>
            </div>

            <div class="row g-xl-5 mt-n2-9">
                @forelse ($news as $new)
                    <div class="col-md-6 col-lg-4 mt-2-9 wow fadeIn" data-wow-delay="200ms">
                        <article class="card card-style3 border-0 h-100">
                            <div class="card-image position-relative">
                                <img src="{{ asset($new->images_news) ? '' . Storage::url($new->images_news) : $new->title }}" class="card-img-top" alt="Bài viết">
                            </div>
                            <div class="card-body p-1-9 position-relative">
                                {{-- <div class="blog-date position-absolute">
                                    <span
                                        class="d-block text-primary z-index-2 position-relative alt-font font-weight-700 display-26 display-sm-22 lh-1 mb-2">{{ $new->updated_at }}</span>
                                    <span
                                        class="d-block text-primary z-index-2 position-relative alt-font text-uppercase small lh-1">nov</span>
                                    <span class="blog-shape"></span>
                                </div> --}}
                                <ul class="mb-2 p-0">
                                    {{-- <li class="display-30 d-inline-block text-capitalize me-3"><a href="#!"><i
                                                class="ti-user text-primary pe-2"></i>admin</a></li> --}}
                                    {{-- <li class="display-30 d-inline-block"><i class="ti-comments text-primary pe-2"></i>{{ $new->updated_at }}</li> --}}
                                </ul>
                                <h3 class="h4 mb-4"><a href="{{ route('route_FrontEnd_News_Detail', ['id' => $new->id]) }}">{{ $new->title }}</a>
                                </h3>
                                <p class="mb-0">{{ $new->sort_content }}</p>
                            </div>
                            <div class="card-footer bg-transparent px-1-9 py-3 border-color-light-gray">
                                <a href="{{ route('route_FrontEnd_News_Detail', ['id' => $new->id]) }}" class="text-secondary text-primary-hover font-weight-600">Đọc thêm
                                    <i class="ti-arrow-right ms-2 align-middle display-30"></i></a>
                            </div>
                        </article>
                    </div>
                @empty
                    <div class="text-center text-danger" style="padding-top: 30px">
                        <p colspan="12" style="color: red !important">Không có dịch vụ</p>
                    </div>
                @endforelse

                <div class="col-md-12 wow fadeIn mt-2-9" data-wow-delay="200ms">
                    <ul class="pagination justify-content-center d-block d-sm-flex text-center text-sm-start m-0">
                        <li><a href="#!"><i class="fas fa-long-arrow-alt-left"></i></a></li>
                        <li class="active"><a href="#!">1</a></li>
                        <li><a href="#!">2</a></li>
                        <li><a href="#!">3</a></li>
                        <li><a href="#!"><i class="fas fa-long-arrow-alt-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <img src="img/content/shape7.png" class="position-absolute bottom-35 right-5 ani-move d-none d-sm-block"
            alt="...">
    </section>

@endsection
