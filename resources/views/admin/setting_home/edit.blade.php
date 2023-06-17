@extends('layouts.admin.master')

@section('title', 'Sửa nội dung hệ thống')

@section('content')

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h6 class="page-title">Sửa nội dung hệ thống</h6>
                        </div>
                    </div>
                </div>
                <!-- end page title -->



                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form id="form-horizontal" class="form-horizontal form-wizard-wrapper"
                                    action="{{ route('route_BackEnd_Setting_Home_Update', ['id' => request()->route('id')]) }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row mb-3">
                                                <label for="txtFirstNameBilling"
                                                    class="col-lg-3 col-form-label">Favicon</label>
                                                <div class="col-lg-9">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ asset($setting->favicon) ? '' . Storage::url($setting->favicon) : '' }}"
                                                            alt="" class="img-fluid img-thumbnail avatar-xl">
                                                        <input type="file" name="images_favicon"
                                                            class="form-file-input form-control mt-2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                        <div class="col-md-6">
                                            <div class="row mb-3">
                                                <label for="txtLastNameBilling" class="col-lg-3 col-form-label">Logo</label>
                                                <div class="col-lg-9">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{ asset($setting->logo) ? '' . Storage::url($setting->logo) : '' }}"
                                                            alt="" class="img-fluid img-thumbnail avatar-xl">
                                                        <input type="file" name="images_logo"
                                                            class="form-file-input form-control mt-2">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row mb-3">
                                                <label for="txtCityBilling" class="col-lg-3 col-form-label">Email</label>
                                                <div class="col-lg-9">
                                                    <input id="txtCityBilling" name="support_email" type="text"
                                                        class="form-control" value="{{ $setting->support_email }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row mb-3">
                                                <label for="txtStateProvinceBilling" class="col-lg-3 col-form-label">Số điện
                                                    thoại</label>
                                                <div class="col-lg-9">
                                                    <input id="txtStateProvinceBilling" name="support_phone_number"
                                                        type="phone" class="form-control"
                                                        value="{{ $setting->support_phone_number }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row mb-3">
                                                <label for="txtTelephoneBilling" class="col-lg-3 col-form-label">Link
                                                    Zalo</label>
                                                <div class="col-lg-9">
                                                    <input id="txtTelephoneBilling" name="link_zalo" type="text"
                                                        class="form-control" value="{{ $setting->link_zalo }}">
                                                </div>
                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <!-- end col -->
                                        <div class="col-md-6">
                                            <div class="row mb-3">
                                                <label for="txtFaxBilling" class="col-lg-3 col-form-label">Link
                                                    facebook</label>
                                                <div class="col-lg-9">
                                                    <input id="txtFaxBilling" name="link_facebook" type="text"
                                                        class="form-control" value="{{ $setting->link_facebook }}">
                                                </div>
                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                    <input type="text" name="updated_at" value="{{date("Y-m-d H:i:s", strtotime("now"))}}" hidden>
                                    <div class="mb-0" style="text-align: right">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                Lưu
                                            </button>
                                            <a href="{{ route('route_BackEnd_Setting_Home_List') }}"
                                                class="btn btn-secondary waves-effect">Quay lại</a>
                                        </div>
                                    </div>
                                </form>
                                <!-- end form -->
                            </div>
                        </div>
                    </div>
                </div> <!-- row end -->
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


    </div>

@endsection
