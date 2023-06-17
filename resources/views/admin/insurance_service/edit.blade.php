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
                                    action="{{ route('route_BackEnd_Insurance_Services_Update', ['id' => request()->route('id')]) }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="mb-3">
                                        <label class="form-label">Dịch vụ <span class="text-danger">*</span></label>
                                        <select name="service_id" id="" class="form-control" disabled style="background: #ccc">
                                            @foreach ($service_id as $service)
                                                <option value="{{ $service->id }}"
                                                    {{ isset($insurance_services) && $insurance_services->service_id === $service->id ? 'selected' : '' }}>
                                                    {{ $service->service_name }}</option>
                                            @endforeach
                                            @error('service_id')
                                                <div>
                                                    <p class="text-danger">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </select>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Tử vong/mất khả năng lao động<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="dead" class="form-control"
                                                value="{{ $insurance_services->dead }}">
                                            @error('dead')
                                                <div>
                                                    <p class="text-danger">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Tử vong do tai nạn <span
                                                    class="text-danger">*</span></label>
                                            <div>
                                                <input name="accidental_death" type="text" class="form-control"
                                                    value="{{ $insurance_services->accidental_death }}">
                                                @error('accidental_death')
                                                    <div>
                                                        <p class="text-danger">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Tử vong do tai nạn đặc biệt <span
                                                    class="text-danger">*</span></label>
                                            <div>
                                                <input name="death_due_special_accident" type="text" class="form-control"
                                                    value="{{ $insurance_services->death_due_special_accident }}">
                                                @error('death_due_special_accident')
                                                    <div>
                                                        <p class="text-danger">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Tử vong do ung thư </label>
                                            <div>
                                                <input name="death_from_cancer" type="text" class="form-control"
                                                    value="{{ $insurance_services->death_from_cancer }}">
                                                @error('death_from_cancer')
                                                    <div>
                                                        <p class="text-danger">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label class="form-label">Quyền lợi thương tật tạm thời <span
                                                    class="text-danger">*</span></label>
                                            <div>
                                                <input name="temporary_disability_benefits" type="text"
                                                    class="form-control"
                                                    value="{{ $insurance_services->temporary_disability_benefits }}">
                                                @error('temporary_disability_benefits')
                                                    <div>
                                                        <p class="text-danger">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Bệnh hiểm nghèo thể nhẹ<span
                                                    class="text-danger">*</span></label>
                                            <div>
                                                <input name="serious_illness_mild" type="text" class="form-control"
                                                    value="{{ $insurance_services->serious_illness_mild }}">
                                                @error('serious_illness_mild')
                                                    <div>
                                                        <p class="text-danger">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Bệnh hiểm nghèo thể nặng <span
                                                    class="text-danger">*</span></label>
                                            <div>
                                                <input name="serious_illness" type="text" class="form-control"
                                                    value="{{ $insurance_services->serious_illness }}">
                                                @error('serious_illness')
                                                    <div>
                                                        <p class="text-danger">{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Quyền lợi thanh toán chi phí y tế <span
                                                class="text-danger">*</span></label>
                                        <div>
                                            <input name="benefits_pay_medical_expenses" type="text" class="form-control"
                                                value="{{ $insurance_services->benefits_pay_medical_expenses }}">
                                            @error('benefits_pay_medical_expenses')
                                                <div>
                                                    <p class="text-danger">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Trạng thái <span class="text-danger">*</span></label>
                                        <select name="status" class="form-select" id="validationCustom04">
                                            <option selected value="">Chọn trạng thái</option>
                                            <option value="1"
                                                {{ isset($insurance_services) && $insurance_services->status === 1 ? 'selected' : '' }}>
                                                Hoạt động</option>
                                            <option value="2"
                                                {{ isset($insurance_services) && $insurance_services->status === 2 ? 'selected' : '' }}>
                                                Không hoạt động</option>
                                            <option value="0"
                                                {{ isset($insurance_services) && $insurance_services->status === 0 ? 'selected' : '' }}>
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
                                            <a href="{{ route('route_BackEnd_Insurance_Services_List') }}"
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
