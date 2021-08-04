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
                    <li><a><i class="fa fa-user"></i> Admin <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('admin.admins.create') }}">Add</a></li>
                            <li><a href="{{ route('admin.admins.index') }}">List</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-users"></i> Users <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('admin.users.create') }}">Add</a></li>
                            <li><a href="{{ route('admin.users.index') }}">List</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-users"></i> Drivers <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('admin.drivers.create') }}">Add</a></li>
                            <li><a href="{{ route('admin.drivers.index') }}">List</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-tag"></i> Categories <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('admin.categories.create') }}">Add</a></li>
                            <li><a href="{{ route('admin.categories.index') }}">List</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-list"></i> Brands <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('admin.brands.create') }}">Add</a></li>
                            <li><a href="{{ route('admin.brands.index') }}">List</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-product-hunt"></i> Products <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('admin.products.create') }}">Add</a></li>
                            <li><a href="{{ route('admin.products.index') }}">List</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-percent"></i> Discounts <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('admin.discounts.create') }}">Add</a></li>
                            <li><a href="{{ route('admin.discounts.index') }}">List</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-picture-o"></i> Banners <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('admin.banners.create') }}">Add</a></li>
                            <li><a href="{{ route('admin.banners.index') }}">List</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-shopping-cart"></i> Orders <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('admin.orders.index') }}">List</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-usd"></i> Payments <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('admin.payments.index') }}">List</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-file"></i> Pages <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('admin.pages.create') }}">Add</a></li>
                            <li><a href="{{ route('admin.pages.index') }}">List</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
