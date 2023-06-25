@extends('layouts.admin.master')

@section('title', 'Thêm mới khách hàng')

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

                                <h4 class="card-title mb-4">Thêm khách hàng</h4>

                                <form class="custom-validation" action="" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Tên khách hàng <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="full_name" class="form-control"
                                                value="{{ old('full_name', isset($request['full_name']) ? $request['full_name'] : '') }}">
                                            @error('full_name')
                                                <div>
                                                    <p class="text-danger">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Số điện thoại <span
                                                    class="text-danger">*</span></label>
                                            <div>
                                                <input data-parsley-type="number" name="phone_number" type="number"
                                                    class="form-control"
                                                    value="{{ old('phone_number', isset($request['phone_number']) ? $request['phone_number'] : '') }}">
                                                @error('phone_number')
                                                    <div>
                                                        <p class="text-danger">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Ngày gọi <span class="text-danger">*</span></label>
                                            <div class="input-group" id="datepicker2">
                                                <input name="calling_date" type="date" id="input-date1"
                                                    value="{{ old('calling_date', isset($request['calling_date']) ? $request['calling_date'] : '') }}"
                                                    class="form-control input-mask" data-inputmask="'alias': 'datetime'"
                                                    data-inputmask-inputformat="dd/mm/yyyy">
                                            </div>
                                            @error('calling_date')
                                                <div>
                                                    <p class="text-danger">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Ngày gọi lại <span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group" id="datepicker2">
                                                <input name="call_back" type="date" id="input-date1"
                                                    value="{{ old('call_back', isset($request['call_back']) ? $request['call_back'] : '') }}"
                                                    class="form-control input-mask" data-inputmask="'alias': 'datetime'"
                                                    data-inputmask-inputformat="dd/mm/yyyy">

                                                {{-- <span class="input-group-text"><i class="mdi mdi-calendar"></i></span> --}}
                                            </div>
                                            @error('call_back')
                                                <div>
                                                    <p class="text-danger">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Chọn dịch vụ <span
                                                    class="text-danger">*</span></label>
                                            <select class="select2 form-control select2-multiple" name="service_id[]"
                                                multiple="multiple" multiple data-placeholder="Chọn dịch vụ ...">
                                                @foreach ($services as $index => $service)
                                                    <option id="{{ $service->id }}"
                                                        value="{{ $service->id }}">{{ $service->service_name }}
                                                    </option>
                                                @endforeach
                                            </select>

                                            @error('service_id')
                                                <div>
                                                    <p class="text-danger">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Địa chỉ <span class="text-danger">*</span></label>
                                            <input type="text" name="address" class="form-control"
                                                value="{{ old('address', isset($request['address']) ? $request['address'] : '') }}">
                                            @error('address')
                                                <div>
                                                    <p class="text-danger">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Giới tính <span class="text-danger">*</span></label>
                                            <select name="gender" class="form-select" id="validationCustom04">
                                                <option value="">Chọn giới tính</option>
                                                <option value="1">Nam</option>
                                                <option value="2">Nữ</option>
                                                <option value="0">Khác</option>
                                            </select>
                                            @error('gender')
                                                <div>
                                                    <p class="text-danger">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Nguồn <span class="text-danger">*</span></label>
                                            <input type="text" name="source" class="form-control"
                                                value="{{ old('source', isset($request['source']) ? $request['source'] : '') }}">
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
                                                <option value="1">Tiềm năng</option>
                                                <option value="2">Quan tâm</option>
                                                <option value="0">Tham khảo</option>
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
                                                <option value="1">Đang chăm sóc</option>
                                                <option value="0">Không chăm sóc</option>
                                            </select>
                                            @error('status')
                                                <div>
                                                    <p class="text-danger">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nội dung</label>
                                        <div>
                                            <textarea name="content" class="form-control" rows="5" placeholder="Nhập nội dung..."></textarea>
                                            @error('content')
                                                <div>
                                                    <p class="text-danger">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <input type="text" name="created_at"
                                        value="{{ date('Y-m-d H:i:s', strtotime('now')) }}" hidden>
                                    <div class="mb-0">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                Thêm mới
                                            </button>
                                            <a href="{{ route('route_BackEnd_Customers_List') }}"
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
