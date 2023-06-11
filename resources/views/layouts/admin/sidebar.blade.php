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
                        <i class="ti-layout"></i>
                        <span>Layouts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Vertical</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-light-sidebar.html">Light Sidebar</a></li>
                                <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                                <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                                <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                                <li><a href="layouts-colored-sidebar.html">Colored Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">Horizontal</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-horizontal.html">Horizontal</a></li>
                                <li><a href="layouts-hori-topbar-light.html">Light Topbar</a></li>
                                <li><a href="layouts-hori-boxed.html">Boxed Layout</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
