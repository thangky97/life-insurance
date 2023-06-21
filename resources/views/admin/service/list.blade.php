@extends('layouts.admin.master')

@section('title', 'Danh sách dịch vụ')

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
                                <h4 class="card-title mb-4">Danh sách quản trị viên</h4>
                                <div class="table-responsive">
                                    <table class="table table-hover table-centered table-nowrap table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Tên dịch vụ</th>
                                                <th scope="col">Mức phí</th>
                                                <th scope="col">Thời hạn</th>
                                                <th scope="col">Giá BV tính mạng</th>
                                                <th scope="col">BH tai nạn toàn diện</th>
                                                <th scope="col">BH bệnh hiểm nghèo</th>
                                                <th scope="col">BH chăm sóc sức khỏe</th>
                                                <th scope="col">Trạng thái</th>
                                                <th scope="col">Hành động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($services as $service)
                                                <tr>
                                                    <th scope="row" class="text-primary">{{ 'DV000' . $service->id }}
                                                    </th>
                                                    <td>
                                                        <img src="{{ asset($service->thumbnail) ? '' . Storage::url($service->thumbnail) : $service->service_name }}"
                                                            alt="Dịch vụ" class="avatar-xs rounded-circle me-2">
                                                        {{ $service->service_name }}
                                                    </td>
                                                    <td>
                                                        @if ($service->charges)
                                                            <span>{{ $service->charges }}</span>
                                                        @else
                                                            <span>Không có phí</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($service->duration)
                                                            @php
                                                                $limitedMessage = Str::limit($service->duration, 20, '...');
                                                            @endphp
                                                            <span>{!! nl2br(e($limitedMessage)) !!}</span>
                                                        @else
                                                            <span>Không có thời hạn</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($service->face_protect_life)
                                                            <span>{{ $service->face_protect_life }}</span>
                                                        @else
                                                            <span>No</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($service->comprehensive_accident_insurance)
                                                            <span>{{ $service->comprehensive_accident_insurance }}</span>
                                                        @else
                                                            <span>No tai nạn</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($service->critical_illness_insurance)
                                                            <span>{{ $service->critical_illness_insurance }}</span>
                                                        @else
                                                            <span>No hiểm nghèo</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($service->health_care_insurance)
                                                            @php
                                                                $limitedMessage = Str::limit($service->health_care_insurance, 20, '...');
                                                            @endphp
                                                            <span>{!! nl2br(e($limitedMessage)) !!}</span>
                                                        @else
                                                            <span>No sức khỏe</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($service && $service->status === 1)
                                                            <span class="badge bg-success">Hoạt động</span>
                                                        @elseif ($service && $service->status === 2)
                                                            <span class="badge bg-warning">Không hoạt động</span>
                                                        @else
                                                            <span class="badge bg-danger">Khóa</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <a href="{{ route('route_BackEnd_Services_Edit', $service->id) }}"
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
                                    {{ $services->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
