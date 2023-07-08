@extends('layouts.admin.master')

@section('title', 'Sửa dịch vụ')

@section('content')

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
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
                        </div>
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4">Sửa dịch vụ</h4>

                                <form class="custom-validation"
                                    action="{{ route('route_BackEnd_Services_Update', ['id' => request()->route('id')]) }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Tên <span class="text-danger">*</span></label>
                                            <input type="text" name="service_name" class="form-control"
                                                value="{{ $services->service_name }}">
                                            @error('service_name')
                                                <div>
                                                    <p class="text-danger">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Mức giá <span class="text-danger">*</span></label>
                                            <div>
                                                <input name="charges" type="text" class="form-control"
                                                    value="{{ $services->charges }}">
                                                @error('charges')
                                                    <div>
                                                        <p class="text-danger">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Thời hạn <span class="text-danger">*</span></label>
                                            <div>
                                                <input name="duration" type="text" class="form-control"
                                                    value="{{ $services->duration }}">
                                                @error('duration')
                                                    <div>
                                                        <p class="text-danger">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Giá bảo vệ tính mạng <span
                                                    class="text-danger">*</span></label>
                                            <div>
                                                <input name="face_protect_life" type="text" class="form-control"
                                                    value="{{ $services->face_protect_life }}">
                                                @error('face_protect_life')
                                                    <div>
                                                        <p class="text-danger">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label class="form-label">BH tai nạn toàn diện <span
                                                    class="text-danger">*</span></label>
                                            <div>
                                                <input name="comprehensive_accident_insurance" type="text"
                                                    class="form-control"
                                                    value="{{ $services->comprehensive_accident_insurance }}">
                                                @error('comprehensive_accident_insurance')
                                                    <div>
                                                        <p class="text-danger">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">BH bệnh hiểm nghèo <span
                                                    class="text-danger">*</span></label>
                                            <div>
                                                <input name="critical_illness_insurance" type="text" class="form-control"
                                                    value="{{ $services->critical_illness_insurance }}">
                                                @error('critical_illness_insurance')
                                                    <div>
                                                        <p class="text-danger">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">BH chăm sóc sức khỏe <span
                                                    class="text-danger">*</span></label>
                                            <div>
                                                <input name="health_care_insurance" type="text" class="form-control"
                                                    value="{{ $services->health_care_insurance }}">
                                                @error('health_care_insurance')
                                                    <div>
                                                        <p class="text-danger">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Mô tả <span class="text-danger">*</span></label>
                                        <div>
                                            <textarea name="description" id="description" class="form-control" rows="3">{!! $services->description !!}</textarea>
                                            @error('description')
                                                <div>
                                                    <p class="text-danger">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Ảnh <span class="text-danger">*</span></label>
                                        <div>
                                            <div class="form-file">
                                                <input type="file" name="images"
                                                    class="form-file-input form-control mb-2">
                                                @if (isset($services) && $services->thumbnail)
                                                    <img src="{{ asset($services->thumbnail ? '' . Storage::url($services->thumbnail) : $services->service_name) }}"
                                                        alt="{{ $services->service_name }}" width="100">
                                                @endif
                                            </div>
                                            @error('images')
                                                <div>
                                                    <p class="text-danger">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Trạng thái <span class="text-danger">*</span></label>
                                        <select name="status" class="form-select" id="validationCustom04">
                                            <option value="">Chọn trạng thái</option>
                                            <option value="1"
                                                {{ isset($services) && $services->status === 1 ? 'selected' : '' }}>
                                                Hoạt động</option>
                                            <option value="2"
                                                {{ isset($services) && $services->status === 2 ? 'selected' : '' }}>
                                                Không hoạt động</option>
                                            <option value="0"
                                                {{ isset($services) && $services->status === 0 ? 'selected' : '' }}>
                                                Khóa</option>
                                        </select>
                                        @error('status')
                                            <div>
                                                <p class="text-danger">{{ $message }}</p>
                                            </div>
                                        @enderror
                                    </div>
                                    <input type="text" name="updated_at"
                                        value="{{ date('Y-m-d H:i:s', strtotime('now')) }}" hidden>
                                    <div class="mb-0">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                Cập nhật
                                            </button>
                                            <a href="{{ route('route_BackEnd_Services_List') }}"
                                                class="btn btn-secondary waves-effect">Quay lại</a>
                                        </div>
                                    </div>
                                </form>
                                <!-- end form -->
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div> <!-- end col -->
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $('#description').summernote({
            placeholder: 'Nội dung',
            tabsize: 2,
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
@endsection
