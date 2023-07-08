@extends('layouts.admin.master')

@section('title', 'Danh sách bài viết')

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
                                <h4 class="card-title mb-4">Danh sách bài viết</h4>
                                <div class="table-responsive">
                                    <table class="table table-hover table-centered table-nowrap table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Ảnh</th>
                                                <th scope="col">Tiêu đề</th>
                                                <th scope="col">Ngày đăng</th>
                                                <th scope="col">Người đăng</th>
                                                <th scope="col">Nội dung ngắn</th>
                                                <th scope="col">Trạng thái</th>
                                                <th scope="col">Hành động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($news as $new)
                                                <tr>
                                                    <th scope="row" class="text-primary">{{ 'NE000' . $new->id }}</th>
                                                    <td>
                                                        <div>
                                                            <img src="{{ asset($new->images_news) ? '' . Storage::url($new->images_news) : $new->title }}"
                                                                alt="news" class="avatar-xs rounded-circle me-2">
                                                            {{ $new->name }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        @if ($new->title)
                                                            <span>{{ $new->title }}</span>
                                                        @else
                                                            <span>Không có tiêu đề</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($new->post_date)
                                                            <span>{{ $format = date('d-m-Y', strtotime($new->post_date)) }}</span>
                                                        @else
                                                            <span>Không có ngày đăng</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($new->user)
                                                            <span>{{ $new->user->name }}</span>
                                                        @else
                                                            <span>Không có người đăng</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($new->sort_content)
                                                            @php
                                                                $limitedMessage = Str::limit($new->sort_content, 20, '...');
                                                            @endphp
                                                            <span>{!! $limitedMessage !!}</span>
                                                        @else
                                                            <span>Không có nội dung ngắn</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($new && $new->status === 1)
                                                            <span class="badge bg-success">Hoạt động</span>
                                                        @elseif ($new && $new->status === 2)
                                                            <span class="badge bg-warning">Không hoạt động</span>
                                                        @else
                                                            <span class="badge bg-danger">Khóa</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <a href="{{ route('route_BackEnd_News_Edit', $new->id) }}"
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
                                    {{ $news->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
