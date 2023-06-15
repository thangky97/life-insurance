@extends('layouts.admin.master')

@section('title', 'Sửa banner')

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

                                <h4 class="card-title mb-4">Sửa banner</h4>

                                <form class="custom-validation"
                                    action="{{ route('route_BackEnd_Banner_Update', ['id' => request()->route('id')]) }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Tiêu đề </label>
                                        <input type="text" name="title" class="form-control"
                                            value="{{ $banner->title }}">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Ảnh <span class="text-danger">*</span></label>
                                        <div>
                                            <div class="form-file">
                                                <input type="file" name="images" class="form-file-input form-control mb-2">
                                                @if (isset($banner) && $banner->image)
                                                    <img src="{{ asset($banner->image ? '' . Storage::url($banner->image) : $banner->title) }}"
                                                        alt="{{ $banner->title }}" width="250">
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
                                                {{ isset($banner) && $banner->status === 1 ? 'selected' : '' }}>
                                                Hoạt động</option>
                                            <option value="2"
                                                {{ isset($banner) && $banner->status === 2 ? 'selected' : '' }}>
                                                Không hoạt động</option>
                                            <option value="0"
                                                {{ isset($banner) && $banner->status === 0 ? 'selected' : '' }}>
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
                                            <a href="{{ route('route_BackEnd_Banner_List') }}"
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
