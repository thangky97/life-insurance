@extends('layouts.admin.master')

@section('title', 'Danh sách khách hàng')

@section('content')

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
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
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Danh sách khách hàng</h4>
                                <div class="table-responsive">
                                    <table class="table table-hover table-centered table-nowrap table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Tên KH</th>
                                                <th scope="col">Ngày gọi</th>
                                                <th scope="col">Ngày gọi lại</th>
                                                <th scope="col">Tình trạng</th>
                                                <th scope="col">Số điện thoại</th>
                                                <th scope="col">Dịch vụ</th>
                                                {{-- <th scope="col">Địa chỉ</th> --}}
                                                <th scope="col">Nguồn</th>
                                                {{-- <th scope="col">Giới tính</th> --}}
                                                <th scope="col">Trạng thái</th>
                                                <th scope="col" colspan="2">Hành động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($customer as $cus)
                                                <tr>
                                                    {{-- <th scope="row">{{ 'US' . $user->id }}</th> --}}
                                                    <th class="text-primary" scope="row">{{ 'KH000' . $cus->id }}</th>
                                                    <td>
                                                        @if ($cus->full_name)
                                                            <span>{{ $cus->full_name }}</span>
                                                        @else
                                                            <span>Không</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($cus->calling_date)
                                                            <span>{{ $format = date("d-m-Y",strtotime($cus->calling_date)) }}</span>
                                                        @else
                                                            <span>Không ngày gọi</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($cus->call_back)
                                                            <span>{{ $format = date("d-m-Y",strtotime( $cus->call_back)) }}</span>
                                                        @else
                                                            <span>Không ngày gọi lại</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($cus && $cus->status_customer === 1)
                                                            <span class="badge bg-success">Tiềm năng</span>
                                                        @elseif ($cus && $cus->status_customer === 2)
                                                            <span class="badge bg-warning">Quan tâm</span>
                                                        @else
                                                            <span class="badge bg-danger">Tham khảo</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($cus->phone_number)
                                                            <span>{{ $cus->phone_number }}</span>
                                                        @else
                                                            <span>Không có số điện thoại</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <?php $service_id = explode(',', $cus->service_id); ?>
                                                        @foreach ($listServices as $service)
                                                            @foreach ($service_id as $index => $ser_id)
                                                                @if ($ser_id == $service->id)
                                                                    {{ $index > 0 ? ', ' . $service->service_name : $service->service_name }}
                                                                @endif
                                                            @endforeach
                                                        @endforeach
                                                    </td>
                                                    {{-- <td>
                                                        @if ($cus->address)
                                                            <span>{{ $cus->address }}</span>
                                                        @else
                                                            <span>Không có</span>
                                                        @endif
                                                    </td> --}}
                                                    <td>
                                                        @if ($cus->source)
                                                            <span>{{ $cus->source }}</span>
                                                        @else
                                                            <span>Không</span>
                                                        @endif
                                                    </td>
                                                    {{-- <td>
                                                        @if ($cus && $cus->gender === 1)
                                                            <span>Nam</span>
                                                        @elseif ($cus && $cus->gender === 2)
                                                            <span>Nữ</span>
                                                        @else
                                                            <span>Khác</span>
                                                        @endif
                                                    </td> --}}
                                                    <td>
                                                        @if ($cus && $cus->status === 1)
                                                            <span class="badge bg-success">Đang chăm sóc</span>
                                                        @else
                                                            <span class="badge bg-danger">Không chăm sóc</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <a href="{{ route('route_BackEnd_Customers_Edit', $cus->id) }}"
                                                                class="btn btn-primary btn-sm">Chỉnh sửa</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr class="text-center text-danger">
                                                    <td colspan="12" style="color: red !important">Không có bản ghi</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                <div class="mt-4">
                                    {{ $customer->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
