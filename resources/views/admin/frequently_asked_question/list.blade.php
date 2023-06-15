@extends('layouts.admin.master')

@section('title', 'Danh sách câu hỏi thường gặp')

@section('content')

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h6 class="page-title">Danh sách câu hỏi thường gặp</h6>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <!-- Collapse -->
                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4">Câu hỏi & Câu trả lời</h4>

                                <div class="accordion" id="accordionExample">
                                    @forelse ($questions as $index => $que)
                                        <div class="accordion-item border rounded mt-2">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed fw-semibold" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    Câu hỏi {{ $index + 1 }}: {{ $que->title }}
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    {{ $que->content }}
                                                </div>
                                                <div class="mb-2" style="text-align: right; margin-right: 1.5rem">
                                                    <a href="{{ route('route_BackEnd_Ask_Question_Edit', $que->id) }}"
                                                        class="btn btn-primary btn-sm">Sửa</a>
                                                </div>
                                            </div>
                                        </div>

                                    @empty
                                        <div class="text-center">
                                            <span class="text-center" style="color: red">Không có dữ liệu</span>
                                        </div>
                                    @endforelse
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

    </div>

@endsection
