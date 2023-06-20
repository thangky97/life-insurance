@extends('layouts.admin.master')

@section('title', 'Danh sách liên hệ')

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
                                <h4 class="card-title mb-4">Danh sách liên hệ</h4>
                                <div class="table-responsive">
                                    <table class="table table-hover table-centered table-nowrap table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Tên khách hàng</th>
                                                <th scope="col">Số điện thoại</th>
                                                <th scope="col">Nội dung</th>
                                                <th scope="col">Trạng thái</th>
                                                <th scope="col">Hành động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($contact as $item)
                                                <tr>
                                                    <th scope="row" class="text-primary">{{ 'CT000' . $item->id }}</th>
                                                    <td>
                                                        @if ($item->contact_name)
                                                            <span>{{ $item->contact_name }}</span>
                                                        @else
                                                            <span>Không có tên</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($item->phone_number)
                                                            <span>{{ $item->phone_number }}</span>
                                                        @else
                                                            <span>Không có sđt</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($item->message)
                                                            @php
                                                                $limitedMessage = Str::limit($item->message, 20, '...');
                                                            @endphp
                                                            <span>{!! nl2br(e($limitedMessage)) !!}</span>
                                                        @else
                                                            <span>Không có lời nhắn</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($item && $item->status === 1)
                                                            <span class="badge bg-success">Đã tư vấn</span>
                                                        @else
                                                            <span class="badge bg-warning">Chưa tư vấn</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <a href="{{ route('route_BackEnd_Contact_Edit', $item->id) }}"
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
                                    {{ $contact->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
