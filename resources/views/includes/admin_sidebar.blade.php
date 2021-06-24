@php
$segment1 = request()->segment(1);
$segment2 = request()->segment(2) ?? '';
$segment3 = request()->segment(3) ?? '';
@endphp
<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-user"></i> <span>Admin Panel</span></a>
        </div>
        <div class="clearfix"></div>
        <br />
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li>
                        <a href="{{ route('admin.dashboard') }}"><i class="fa fa-home"></i> Dashboard</a>
                    </li>
                    <li><a><i class="fa fa-users"></i> Users <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('admin.users.create') }}">Create User</a></li>
                            <li><a href="{{ route('admin.users.index') }}">Users List</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-users"></i> Drivers <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('admin.drivers.create') }}">Create Driver</a></li>
                            <li><a href="{{ route('admin.drivers.index') }}">Drivers List</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('admin.loginForm') }}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
    </div>
</div>
