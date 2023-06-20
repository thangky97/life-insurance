<?php
$notifications = DB::table('contact')
    ->orderby('id', 'desc')
    ->paginate(6);
$notificationCount = DB::table('contact')
    ->whereDate('created_at', today())
    ->count();
?>

<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('admin/assets/images/logo-sm.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('admin/assets/images/logo-dark.png') }}" alt="" height="17">
                    </span>
                </a>

                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('admin/assets/images/favicon.ico') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('admin/assets/images/logo-sm.png') }}" alt="" height="18">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-menu"></i>
            </button>

        </div>

        <div class="d-flex">
            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="fa fa-search"></span>
                </div>
            </form>

            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..."
                                    aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i
                                            class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                    <i class="mdi mdi-fullscreen"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect"
                    id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="mdi mdi-bell-outline"></i>
                    <span class="badge bg-danger rounded-pill" id="notification-count">{{ $notificationCount }}</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="m-0 font-size-16">Thông báo ({{ $notificationCount }})</h5>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        <div id="notification-list">
                            @foreach ($notifications as $notification)
                                <a href="#" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-xs">
                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="mdi mdi-bell"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">{{ $notification->contact_name }}
                                            </h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">
                                                    {{ \Illuminate\Support\Str::limit($notification->message, 20) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                @if (!$notification->is_read)
                                    <script>
                                        // Đánh dấu thông báo là đã đọc khi người dùng nhấp vào
                                        document.addEventListener('DOMContentLoaded', function() {
                                            const notificationItem = document.querySelector('.notification-item');
                                            notificationItem.addEventListener('click', function() {
                                                axios.post('/notifications/mark-as-read/' + '{{ $notification->id }}')
                                                    .then(function() {
                                                        const notificationCount = document.getElementById('notification-count');
                                                        notificationCount.textContent = parseInt(notificationCount.textContent) - 1;
                                                    })
                                                    .catch(function(error) {
                                                        console.log(error);
                                                    });
                                            });
                                        });
                                    </script>
                                @endif
                            @endforeach

                        </div>
                    </div>
                    {{-- <div class="p-2 border-top">
                        <div class="d-grid">
                            <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)"
                                id="view-all-link">
                                View all
                            </a>
                        </div>
                    </div> --}}
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user"
                        src="{{ asset(Auth::user()->avatar) ? '' . Storage::url(Auth::user()->avatar) : Auth::user()->name }}"
                        alt="{{ Auth::user()->name }}">
                    {{-- @if (Auth::check())
                        <p>{{ Auth::user()->name }}</p>
                    @endif --}}
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item"
                        href="{{ route('route_BackEnd_Profile_Edit', ['id' => Auth::user()->id]) }}"><i
                            class="mdi mdi-account-circle font-size-17 align-middle me-1"></i> Hồ sơ</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{ route('logout') }}"><i
                            class="bx bx-power-off font-size-17 align-middle me-1 text-danger"></i> Đăng xuất</a>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="mdi mdi-cog-outline"></i>
                </button>
            </div>

        </div>
    </div>
</header>


{{-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        var notificationIcon = document.getElementById("page-header-notifications-dropdown");
        var notificationCount = document.getElementById("notification-count");
        var notificationList = document.getElementById("notification-list");

        notificationIcon.addEventListener("click", function() {
            // Gọi Ajax request để đánh dấu thông báo đã xem
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "{{ route('notifications.markAsRead') }}");
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send();

            // Cập nhật số lượng thông báo
            notificationCount.innerText = "0";

            // Xóa tất cả các thông báo trong danh sách
            while (notificationList.firstChild) {
                notificationList.removeChild(notificationList.firstChild);
            }
        });
    });
</script> --}}
