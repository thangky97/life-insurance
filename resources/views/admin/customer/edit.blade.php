@extends('layouts.admin.master')

@section('title', 'Sửa khách hàng')

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

                                <h4 class="card-title mb-4">Sửa quản trị viên</h4>

                                <form class="custom-validation"
                                    action="{{ route('route_BackEnd_Customers_Update', ['id' => request()->route('id')]) }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Tên khách hàng <span class="text-danger">*</span></label>
                                        <input type="text" name="full_name" class="form-control"
                                            value="{{ $customer->full_name }}">
                                        @error('full_name')
                                            <div>
                                                <p class="text-danger">{{ $message }}</p>
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Ngày gọi <span class="text-danger">*</span></label>
                                            <div class="input-group" id="datepicker2">
                                                <input class="form-control" name="calling_date" type="date"
                                                    value="{{ $customer->calling_date }}" id="example-date-input">
                                                @error('calling_date')
                                                    <div>
                                                        <p class="text-danger">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Ngày gọi lại <span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group" id="datepicker2">
                                                <input class="form-control" name="call_back" type="date"
                                                    value="{{ $customer->call_back }}" id="example-date-input">
                                                @error('call_back')
                                                    <div>
                                                        <p class="text-danger">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Giới tính <span class="text-danger">*</span></label>
                                            <select name="gender" class="form-select" id="validationCustom04">
                                                <option value="">Chọn giới tính</option>
                                                <option value="1"
                                                    {{ isset($customer) && $customer->gender === 1 ? 'selected' : '' }}>
                                                    Nam</option>
                                                <option value="2"
                                                    {{ isset($customer) && $customer->gender === 2 ? 'selected' : '' }}>
                                                    Nữ</option>
                                                <option value="0"
                                                    {{ isset($customer) && $customer->gender === 0 ? 'selected' : '' }}>
                                                    Khác</option>
                                            </select>
                                            @error('gender')
                                                <div>
                                                    <p class="text-danger">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Địa chỉ <span class="text-danger">*</span></label>
                                            <input type="text" name="address" class="form-control"
                                                value="{{ $customer->address }}">
                                            @error('address')
                                                <div>
                                                    <p class="text-danger">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Số điện thoại <span
                                                    class="text-danger">*</span></label>
                                            <div>
                                                <input data-parsley-type="number" name="phone_number" type="text"
                                                    class="form-control" value="{{ $customer->phone_number }}">
                                                @error('phone_number')
                                                    <div>
                                                        <p class="text-danger">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Nguồn <span class="text-danger">*</span></label>
                                            <input type="text" name="source" class="form-control"
                                                value="{{ $customer->source }}">
                                            @error('source')
                                                <div>
                                                    <p class="text-danger">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Trạng thái quan tâm <span
                                                    class="text-danger">*</span></label>
                                            <select name="status_customer" class="form-select" id="validationCustom04">
                                                <option selected value="">Chọn trạng thái quan tâm</option>
                                                <option value="1"
                                                    {{ isset($customer) && $customer->status_customer === 1 ? 'selected' : '' }}>
                                                    Tiềm năng</option>
                                                <option value="2"
                                                    {{ isset($customer) && $customer->status_customer === 2 ? 'selected' : '' }}>
                                                    Quan tâm</option>
                                                <option value="0"
                                                    {{ isset($customer) && $customer->status_customer === 0 ? 'selected' : '' }}>
                                                    Tham khảo</option>
                                            </select>
                                            @error('status_customer')
                                                <div>
                                                    <p class="text-danger">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Trạng thái <span
                                                    class="text-danger">*</span></label>
                                            <select name="status" class="form-select" id="validationCustom04">
                                                <option selected value="">Chọn trạng thái</option>
                                                <option value="1"
                                                    {{ isset($customer) && $customer->status === 1 ? 'selected' : '' }}>
                                                    Đang chăm sóc</option>
                                                <option value="0"
                                                    {{ isset($customer) && $customer->status === 0 ? 'selected' : '' }}>
                                                    Không chăm sóc</option>
                                                </select>
                                                @error('status')
                                                    <div>
                                                        <p class="text-danger">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                        </div>
                                    </div>
                                    {{-- <div class="mb-3">
                                        <label class="form-label">Nội dung</label>
                                        <div>
                                            <textarea name="content" data-parsley-type="text" class="form-control" rows="5" value="{{ $customer->content }}"></textarea>
                                            @error('content')
                                                <div>
                                                    <p class="text-danger">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>
                                    </div> --}}
                                    <div class="mb-3" style="height: 7rem"> 
                                        <label class="form-label">Nội dung </label>
                                        <input type="text" name="content" class="form-control"
                                            value="{{ $customer->content }}" >
                                        @error('content')
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
                                            <button type="reset" class="btn btn-secondary waves-effect">
                                                Hủy
                                            </button>
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
