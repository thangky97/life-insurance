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

                                <div class="accordion" id="accordionExample">
                                    @forelse ($questions as $index => $que)
                                        <div class="accordion-item border rounded mt-2">
                                            <h2 class="accordion-header" id="heading{{ $index }}">
                                                <button class="accordion-button collapsed fw-semibold" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}"
                                                    aria-expanded="false" aria-controls="collapse{{ $index }}">
                                                    Câu hỏi {{ $index + 1 }}: {{ $que->title }}
                                                </button>
                                            </h2>
                                            <div id="collapse{{ $index }}" class="accordion-collapse collapse"
                                                aria-labelledby="heading{{ $index }}" data-bs-parent="#accordionExample">
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

@section('script')
<script>
    var accordionItems = document.getElementsByClassName('accordion-button');

    for (var i = 0; i < accordionItems.length; i++) {
        accordionItems[i].addEventListener('click', function() {
            var currentCollapse = this.getAttribute('data-bs-target');
            var isExpanded = this.getAttribute('aria-expanded');

            // Đóng tất cả các accordion items trước khi mở item mới
            var allCollapseItems = document.getElementsByClassName('accordion-collapse');
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
@endsection