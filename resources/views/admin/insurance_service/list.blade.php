@extends('layouts.admin.master')

@section('title', 'Danh sách dịch vụ bảo hiểm')

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
                                <h4 class="card-title mb-4">Danh sách dịch vụ bảo hiểm</h4>
                                <div class="table-responsive">
                                    <table class="table table-hover table-centered table-nowrap table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Dịch vụ</th>
                                                <th scope="col">Dead/mất khả năng lao động</th>
                                                <th scope="col">Dead do tai nạn</th>
                                                <th scope="col">Dead do tai nạn đặc biệt</th>
                                                <th scope="col">Dead do ung thư</th>
                                                <th scope="col">Thương tật tạm thời</th>
                                                <th scope="col">BH nghèo thể nhẹ</th>
                                                <th scope="col">BH nghèo thể nặng</th>
                                                <th scope="col">Thanh toán chi phí y tế</th>
                                                <th scope="col">Trạng thái</th>
                                                <th scope="col">Hành động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($insurance_services as $is)
                                                <tr>
                                                    <td>
                                                        @if ($is->service)
                                                            <span><a
                                                                    href="{{ route('route_BackEnd_Services_List') }}">{{ $is->service->service_name }}</a></span>
                                                        @else
                                                            <span>Không có người đăng</span>
                                                        @endif
                                                    </td>
                                                    </th>
                                                    <td>
                                                        @if ($is->dead)
                                                            @php
                                                                $limitedMessage = Str::limit($is->dead, 20, '...');
                                                            @endphp
                                                            <span>{!! nl2br(e($limitedMessage)) !!}</span>
                                                        @else
                                                            <span>No tử vong/mất khả năng lao động</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($is->accidental_death)
                                                            @php
                                                                $limitedMessage = Str::limit($is->accidental_death, 20, '...');
                                                            @endphp
                                                            <span>{!! nl2br(e($limitedMessage)) !!}</span>
                                                        @else
                                                            <span>No tử vong do tai nạn</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($is->death_due_special_accident)
                                                            @php
                                                                $limitedMessage = Str::limit($is->death_due_special_accident, 20, '...');
                                                            @endphp
                                                            <span>{!! nl2br(e($limitedMessage)) !!}</span>
                                                        @else
                                                            <span>No tử vong do tai nạn special</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($is->death_from_cancer)
                                                            @php
                                                                $limitedMessage = Str::limit($is->death_from_cancer, 20, '...');
                                                            @endphp
                                                            <span>{!! nl2br(e($limitedMessage)) !!}</span>
                                                        @else
                                                            <span>No tử vong do ung thư</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($is->temporary_disability_benefits)
                                                            @php
                                                                $limitedMessage = Str::limit($is->temporary_disability_benefits, 20, '...');
                                                            @endphp
                                                            <span>{!! nl2br(e($limitedMessage)) !!}</span>
                                                        @else
                                                            <span>No quyền lợi thương tật tạm thời</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($is->serious_illness_mild)
                                                            @php
                                                                $limitedMessage = Str::limit($is->serious_illness_mild, 20, '...');
                                                            @endphp
                                                            <span>{!! nl2br(e($limitedMessage)) !!}</span>
                                                        @else
                                                            <span>No bệnh hiểm nghèo thể nhẹ</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($is->serious_illness)
                                                            @php
                                                                $limitedMessage = Str::limit($is->serious_illness, 20, '...');
                                                            @endphp
                                                            <span>{!! nl2br(e($limitedMessage)) !!}</span>
                                                        @else
                                                            <span>No bệnh hiểm nghèo thể nặng</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($is->benefits_pay_medical_expenses)
                                                            @php
                                                                $limitedMessage = Str::limit($is->benefits_pay_medical_expenses, 20, '...');
                                                            @endphp
                                                            <span>{!! nl2br(e($limitedMessage)) !!}</span>
                                                        @else
                                                            <span>No quyền lợi TT chi phí y tế</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($is && $is->status === 1)
                                                            <span class="badge bg-success">Hoạt động</span>
                                                        @elseif ($is && $is->status === 2)
                                                            <span class="badge bg-warning">Không hoạt động</span>
                                                        @else
                                                            <span class="badge bg-danger">Khóa</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <a href="{{ route('route_BackEnd_Insurance_Services_Edit', $is->id) }}"
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
                                    {{ $insurance_services->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
