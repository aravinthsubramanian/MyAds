<?php $page = Route::current()->getName(); ?>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <div class="sidebar-logo">
            <a href="index.html">
                <img class="img-fluid logo" src="{{ asset('assets/img/logo.svg') }}" alt="">
            </a>
            <a href="index.html">
                <img class="img-fluid logo-small" src="{{ asset('assets/img/logo-small.svg') }}" alt="">
            </a>
        </div>
        <div class="siderbar-toggle">
            <label class="switch" id="toggle_btn">
                <input type="checkbox">
                <span class="slider round"></span>
            </label>
        </div>
    </div>

    <div class="sidebar-inner slimscroll">
        <div class="sidebar-menu" id="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <h6>Main Menu</h6>
                </li>
                <li>
                    <a href="index.html"><i class="fe fe-grid"></i> <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="ads-list.html"><i class="fe fe-grid"></i> <span>Ads List</span></a>
                </li>
                <li>
                    <a href="{{route('admin.categories')}}" @if ($page == 'admin.categories') ? class="active": @endif><i class="fe fe-grid"></i> <span>Ads Category</span></a>
                </li>
                <li>
                    <a href="ads-subcategory.html"><i class="fe fe-grid"></i> <span>Ads Sub Category</span></a>
                </li>
                <li>
                    <a href="index.html"><i class="fe fe-grid"></i> <span>Reviews</span></a>
                </li>
                <li>
                    <a href="index.html"><i class="fe fe-grid"></i> <span>Sellers</span></a>
                </li>
                <li>
                    <a href="index.html"><i class="fe fe-grid"></i> <span>Subscription</span></a>
                </li>
                <li>
                    <a href="index.html"><i class="fe fe-grid"></i> <span>Subscription History</span></a>
                </li>
                <li class="menu-title">
                    <h6>Help</h6>
                </li>
                <li>
                    <a href="localization.html"><i class="fe fe-settings"></i> <span>Settings</span></a>
                </li>
                <li>
                    <a href="{{ route('admin.logout') }}"><i class="fe fe-log-out"></i> <span>Logout</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
