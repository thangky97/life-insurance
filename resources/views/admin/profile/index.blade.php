@extends('layouts.admin.master')

@section('title', 'Sửa profile')

@section('content')

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h6 class="page-title">Trang cá nhân</h6>
                        </div>
                    </div>
                </div>
                <!-- end page title -->



                <div class="row">
                    <div class="col-xl-3">
                        <div class="user-sidebar">
                            <div class="card">
                                <div class="card-body">
                                    <div class="position-relative">
                                        <div class="text-center">
                                            <img src="{{ asset($user->avatar) ? '' . Storage::url($user->avatar) : $user->name }}"
                                                alt="..." class="avatar-xl rounded-circle img-thumbnail">

                                            <div class="mt-3">
                                                <h5 class="">{{ $user->name }}</h5>
                                                <div>
                                                    <a href="#" class="text-muted m-1">{{ $user->email }}</a>
                                                </div>

                                                <div class="mt-4">
                                                    <a href="#"
                                                        class="btn btn-primary waves-effect waves-light btn-sm">Quản
                                                        trị viên</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div> <!-- end card body -->
                            </div> <!-- end card -->

                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Thông tin cá nhân</h4>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled mb-0">
                                        @if (isset($user->gender))
                                            <li class="d-flex justify-content-between p-2 font-size-15"><span
                                                    class="text-muted">Giới tính</span><span>
                                                    @if ($user && $user->gender === 1)
                                                        <span>Nam</span>
                                                    @else
                                                        <span>Nữ</span>
                                                    @endif
                                                </span>
                                            </li>
                                        @else
                                        @endif

                                        @if (isset($user->date_of_birthday))
                                            <li class="d-flex justify-content-between p-2 font-size-15"><span
                                                    class="text-muted">Ngày
                                                    sinh</span><span>{{ $format = date('d-m-Y', strtotime($user->date_of_birthday)) }}</span>
                                            </li>
                                        @else
                                        @endif

                                        @if (isset($user->phone_number))
                                            <li class="d-flex justify-content-between p-2 font-size-15"><span
                                                    class="text-muted">Số điện
                                                    thoại</span><span>{{ $user->phone_number }}</span></li>
                                        @else
                                        @endif

                                        @if (isset($user->address))
                                            <li class="d-flex justify-content-between p-2 font-size-15"><span
                                                    class="text-muted">Địa chỉ</span><span>{{ $user->address }}</span>
                                            </li>
                                        @else
                                        @endif

                                        @if (isset($user->status))
                                            <li class="d-flex justify-content-between p-2 font-size-15"><span
                                                    class="text-muted">Trạng thái</span>
                                                @if ($user && $user->status === 1)
                                                    <span class="text-success">Hoạt động</span>
                                                @elseif ($user && $user->status === 2)
                                                    <span class="text-warning">Không hoạt động</span>
                                                @else
                                                    <span class="text-danger">Khóa</span>
                                                @endif
                                            </li>
                                        @else
                                        @endif

                                    </ul>
                                </div> <!-- end card body -->
                            </div> <!-- end card -->

                        </div>
                    </div>

                    <div class="col-xl-9">
                        <div class="card">
                            <div class="card-body">
                                <div id="msg-box">
                                    <?php //Hiển thị thông báo thành công
                                    ?>
                                    @if (Session::has('success'))
                                        <div class="alert alert-success solid alert-dismissible fade show">
                                            <span><i class="mdi mdi-check"></i></span>
                                            <strong>{{ Session::get('success') }}</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="btn-close">
                                            </button>
                                        </div>
                                    @endif
                                    <?php //Hiển thị thông báo lỗi
                                    ?>
                                    @if (Session::has('error'))
                                        <div class="alert alert-danger solid alert-end-icon alert-dismissible fade show">
                                            <span><i class="mdi mdi-help"></i></span>
                                            <strong>{{ Session::get('errors') }}</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="btn-close">
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
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="btn-close">
                                            </button>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#messages" role="tab">
                                        <i class="bx bx-mail-send font-size-20"></i>
                                        <span class="d-none d-sm-block">Cập nhật tài khoản</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#restPassword" role="tab">
                                        <i class="bx bx-mail-send font-size-20"></i>
                                        <span class="d-none d-sm-block">Cập nhật mật khẩu</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- Tab content -->
                            <div class="tab-content p-4">
                                <div class="tab-pane active" id="messages" role="tabpanel">
                                    <div>
                                        <h5 class="font-size-16 mb-4">Cập nhật tài khoản</h5>

                                        <div class="rounded mt-4">
                                            <form
                                                action="{{ route('route_BackEnd_Profile_Update', ['id' => request()->route('id')]) }}"
                                                method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <label class="form-label">Tên <span class="text-danger">*</span></label>
                                                    <input type="text" name="name" class="form-control"
                                                        value="{{ $user->name }}">
                                                    @error('name')
                                                        <div>
                                                            <p class="text-danger">{{ $message }}</p>
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">E-Mail <span
                                                            class="text-danger">*</span></label>
                                                    <div>
                                                        <input type="email" name="email" class="form-control"
                                                            value="{{ $user->email }}" parsley-type="email">
                                                        @error('email')
                                                            <div>
                                                                <p class="text-danger">{{ $message }}</p>
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Số điện thoại <span
                                                            class="text-danger">*</span></label>
                                                    <div>
                                                        <input data-parsley-type="number" name="phone_number"
                                                            type="text" class="form-control"
                                                            value="{{ $user->phone_number }}">
                                                        @error('phone_number')
                                                            <div>
                                                                <p class="text-danger">{{ $message }}</p>
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Giới tính </label>
                                                    <select name="gender" class="form-select" id="validationCustom04">
                                                        <option value="1"
                                                            {{ isset($user) && $user->gender === 1 ? 'selected' : '' }}>
                                                            Nam</option>
                                                        <option value="0"
                                                            {{ isset($user) && $user->gender === 0 ? 'selected' : '' }}>
                                                            Nữ</option>
                                                    </select>
                                                    @error('gender')
                                                        <div>
                                                            <p class="text-danger">{{ $message }}</p>
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Địa chỉ </label>
                                                    <div>
                                                        <input name="address" type="text" class="form-control"
                                                            value="{{ $user->address }}">
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Ngày sinh <span
                                                            class="text-danger">*</span></label>
                                                    <div>
                                                        <input class="form-control" name="date_of_birthday"
                                                            type="date" value="{{ $user->date_of_birthday }}"
                                                            id="example-date-input">
                                                        @error('date_of_birthday')
                                                            <div>
                                                                <p class="text-danger">{{ $message }}</p>
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Ảnh <span
                                                            class="text-danger">*</span></label>
                                                    <div>
                                                        <div class="form-file">
                                                            <input type="file" name="images"
                                                                class="form-file-input form-control">
                                                            @if (isset($user) && $user->avatar)
                                                                <img src="{{ asset($user->avatar ? '' . Storage::url($user->avatar) : $user->name) }}"
                                                                    alt="{{ $user->name }}" width="100">
                                                            @endif
                                                            @error('images')
                                                                <div>
                                                                    <p class="text-danger">{{ $message }}</p>
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="text-end mt-3">
                                                    <button type="submit"
                                                        class="btn btn-success w-sm text-truncate ms-2">
                                                        Cập nhật <i class="bx bx-send ms-2 align-middle"></i></button>
                                                </div>
                                            </form>
                                        </div> <!-- end .border-->

                                    </div>
                                </div>

                            </div>
                            <div class="tab-content p-4">
                                <div class="tab-pane" id="restPassword" role="tabpanel">
                                    <div>
                                        <h5 class="font-size-16 mb-4">Cập nhật mật khẩu</h5>

                                        <div class="rounded mt-4">
                                            <form
                                                action="{{ route('route_BackEnd_Admin_Update_Password', ['id' => request()->route('id')]) }}"
                                                method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <label class="form-label">Mật khẩu cũ <span
                                                            class="text-danger">*</span></label>
                                                    <input type="password" name="password" class="form-control"
                                                    value="@isset($request['password']){{ $request['password'] }}@endisset">
                                                    @error('password')
                                                        <div>
                                                            <p class="text-danger">{{ $message }}</p>
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Mật khẩu mới <span
                                                            class="text-danger">*</span></label>
                                                    <div>
                                                        <input type="password" name="new_password" class="form-control"
                                                        value="@isset($request['new_password']){{ $request['new_password'] }}@endisset" id="password">
                                                        @error('new_password')
                                                            <div>
                                                                <p class="text-danger">{{ $message }}</p>
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Xác nhận mật khẩu mới <span
                                                            class="text-danger">*</span></label>
                                                    <div>
                                                        <input type="password" class="form-control"
                                                            value="@isset($request['new_password']){{ $request['new_password'] }}@endisset"
                                                            id="confirm_password">
                                                    </div>
                                                </div>

                                                <div class="text-end mt-3">
                                                    <button type="submit"
                                                        class="btn btn-success w-sm text-truncate ms-2">
                                                        Cập nhật <i class="bx bx-send ms-2 align-middle"></i></button>
                                                </div>
                                            </form>
                                        </div> <!-- end .border-->

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <!--end row-->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

    </div>
    <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

@endsection

@section('srcipt')
    <script>
        var password = document.getElementById("password"),
            confirm_password = document.getElementById("confirm_password");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Mật khẩu mới không khớp!");
            } else {
                confirm_password.setCustomValidity("");
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
@endsection
