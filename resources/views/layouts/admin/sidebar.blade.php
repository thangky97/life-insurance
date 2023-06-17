<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Main</li>

                <li>
                    <a href="{{ route('route_BackEnd_Dashboard') }}" class="waves-effect">
                        <i class="ti-home"></i><span class="badge rounded-pill bg-primary float-end">1</span>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="menu-title">Quản lý hệ thống</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-cogs"></i>
                        <span>Quản lý hệ thống</span>
                    </a>

                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ route('route_BackEnd_Setting_Home_List') }}">Nội dung hệ thống</a></li>
                        <li><a href="javascript: void(0);" class="has-arrow">Banner</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{ route('route_BackEnd_Banner_List') }}">Danh sách banner</a></li>
                                <li><a href="{{ route('route_BackEnd_Banner_Create') }}">Tạo mới</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript: void(0);" class="has-arrow">Câu hỏi thường gặp</a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('route_BackEnd_Ask_Question_List') }}">Danh sách câu hỏi</a></li>
                                <li><a href="{{ route('route_BackEnd_Ask_Question_Create') }}">Tạo mới</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript: void(0);" class="has-arrow">KH sử dụng</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{ route('route_BackEnd_Customers_Use_List') }}">Danh sách KHSD</a></li>
                                <li><a href="{{ route('route_BackEnd_Customers_Use_Create') }}">Tạo mới</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#!">Đối tác
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="menu-title">Người dùng</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-user-cog"></i>
                        <span>Quản trị viên</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('route_BackEnd_Users_List') }}">Danh sách quản trị viên</a></li>
                        <li><a href="{{ route('route_BackEnd_Users_Create') }}">Tạo mới</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-user-md"></i>
                        <span>Khách hàng</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('route_BackEnd_Customers_List') }}">Danh sách khách hàng</a></li>
                        <li><a href="{{ route('route_BackEnd_Customers_Create') }}">Tạo mới</a></li>
                    </ul>
                </li>

                <li class="menu-title">Bảo hiểm</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fab fa-shopify"></i>
                        <span>Dịch vụ</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('route_BackEnd_Services_List') }}">Danh sách dịch vụ</a></li>
                        <li><a href="{{ route('route_BackEnd_Services_Create') }}">Tạo mới</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-space-shuttle"></i>
                        <span>Dịch vụ bảo hiểm</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('route_BackEnd_Insurance_Services_List') }}">Danh sách dịch vụ bảo
                                hiểm</a></li>
                        <li><a href="{{ route('route_BackEnd_Insurance_Services_Create') }}">Tạo mới</a></li>
                    </ul>
                </li>

                <li class="menu-title">Chăm sóc khách hàng</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-phone-ring"></i>
                        <span>Liên hệ</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('route_BackEnd_Contact_List') }}">Danh sách liên hệ</a></li>
                    </ul>
                </li>

                <li class="menu-title">Tin tức</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-archive"></i>
                        <span>Bài viết</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('route_BackEnd_News_List') }}">Danh sách bài viết</a></li>
                        <li><a href="{{ route('route_BackEnd_News_Create') }}">Tạo mới</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
