@extends('layouts.admin.master')

@section('title', 'Danh sách người dùng')

@section('content')

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Danh sách người dùng</h4>
                                <div class="table-responsive">
                                    <table class="table table-hover table-centered table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Tên</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Số điện thoại</th>
                                                <th scope="col">Ngày sinh</th>
                                                <th scope="col" colspan="2">Trạng thái</th>
                                                <th scope="col" colspan="2">Hành động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($customer as $cus)
                                                <tr>
                                                    {{-- <th scope="row">{{ 'US' . $user->id }}</th> --}}
                                                    <th scope="row">{{ 'KH' . $cus->id }}</th>
                                                    <td>
                                                        <div>
                                                            <img src="{{ asset('admin/assets/images/users/user-2.jpg') }}"
                                                                alt="avatar" class="avatar-xs rounded-circle me-2">
                                                            {{ $cus->name }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        @if ($cus->email)
                                                            <span>{{ $cus->email }}</span>
                                                        @else
                                                            <span>Không có email</span>
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
                                                        @if ($cus && $cus->status === 1)
                                                            <span class="badge bg-success">Hoạt động</span>
                                                        @elseif ($cus && $cus->status === 1)
                                                            <span class="badge bg-warning">Không hoạt động</span>
                                                        @else
                                                            <span class="badge bg-danger">Khóa</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <a href="#" class="btn btn-primary btn-sm">Chỉnh sửa</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr class="text-center text-danger">
                                                    <td colspan="12">Không có bản ghi</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
