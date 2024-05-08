<?php $page = Route::current()->getName(); ?>

<!-- Header -->
<div class="header">
    <div class="header-left">
        <a class="logo" href="index.html">
            <img src="{{ asset('assets/img/logo.svg') }}" alt="Logo" width="30" height="30">
        </a>
        <a class=" logo-small" href="index.html">
            <img src="{{ asset('assets/img/logo-small.svg') }}" alt="Logo" width="30" height="30">
        </a>
    </div>
    <a class="mobile_btn" id="mobile_btn" href="javascript:void(0);">
        <i class="fas fa-align-left"></i>
    </a>
    <div class="header-split">
        <div class="page-headers">
            <div class="search-bar">
                <span><i class="fe fe-search"></i></span>
                <input class="form-control" type="text" placeholder="Search">
            </div>
        </div>
        <ul class="nav user-menu">
            <!-- Notifications -->
            <li class="nav-item">
                <a class="viewsite" href="../index.html"><i class="fe fe-globe me-2"></i>View Site</a>
            </li>
            <li class="nav-item dropdown has-arrow dropdown-heads flag-nav">
                <a class="nav-link" data-bs-toggle="dropdown" href="javascript:void(0);" role="button">
                    <img src="{{ asset('assets/img/flags/us1.png') }}" alt="" height="20">
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="javascript:void(0);">
                        <img class="me-2" src="{{ asset('assets/img/flags/us.png') }}" alt="" height="16"> English
                    </a>
                    <a class="dropdown-item" href="javascript:void(0);">
                        <img class="me-2" src="{{ asset('assets/img/flags/fr.png') }}" alt="" height="16"> French
                    </a>
                    <a class="dropdown-item" href="javascript:void(0);">
                        <img class="me-2" src="{{ asset('assets/img/flags/es.png') }}" alt="" height="16"> Spanish
                    </a>
                    <a class="dropdown-item" href="javascript:void(0);">
                        <img class="me-2" src="{{ asset('assets/img/flags/de.png') }}" alt="" height="16"> German
                    </a>
                </div>
            </li>
            <li class="nav-item  has-arrow dropdown-heads ">
                <a class="toggle-switch" href="javascript:void(0);">
                    <i class="fe fe-moon"></i>
                </a>
            </li>
            <li class="nav-item dropdown has-arrow dropdown-heads ">
                <a data-bs-toggle="dropdown" href="javascript:void(0);">
                    <i class="fe fe-bell"></i>
                </a>
                <div class="dropdown-menu notifications">
                    <div class="topnav-dropdown-header">
                        <span class="notification-title">Notifications</span>
                        <a class="clear-noti" href="javascript:void(0)"> Clear All </a>
                    </div>
                    <div class="noti-content">
                        <ul class="notification-list">
                            <li class="notification-message">
                                <a href="notifications.html">
                                    <div class="media d-flex">
                                        <span class="avatar avatar-sm flex-shrink-0">
                                            <img class="avatar-img rounded-circle" src="{{ asset('assets/img/provider/provider-01.jpg') }}" alt="">
                                        </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details">
                                                <span class="noti-title">Matthew Garcia have been subscribed</span>
                                            </p>
                                            <p class="noti-time">
                                                <span class="notification-time">15 Sep 2020 10:20 PM</span>
                                            </p>

                                        </div>
                                    </div>
                                </a>
                                <button class="btn btn-accept" type="submit">Accept</button><span><button class="btn btn-decline" type="submit">Decline</button></span>
                            </li>
                            <li class="notification-message">
                                <a href="notifications.html">
                                    <div class="media d-flex">
                                        <span class="avatar avatar-sm flex-shrink-0">
                                            <img class="avatar-img rounded-circle" src="{{ asset('assets/img/provider/provider-02.jpg') }}" alt="">
                                        </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details">
                                                <span class="noti-title">New User Registered “James Hardin”</span>
                                            </p>
                                            <p class="noti-time">
                                                <span class="notification-time">15 Sep 2020 10:20 PM</span>
                                            </p>

                                        </div>
                                    </div>
                                </a>
                                <button class="btn btn-accept" type="submit">Accept</button><span><button class="btn btn-decline" type="submit">Decline</button></span>
                            </li>
                            <li class="notification-message">
                                <a href="notifications.html">
                                    <div class="media d-flex">
                                        <span class="avatar avatar-sm flex-shrink-0">
                                            <img class="avatar-img rounded-circle" src="{{ asset('assets/img/provider/provider-03.jpg') }}" alt="">
                                        </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details">
                                                <span class="noti-title">New Service added “Plumbing”</span>
                                            </p>
                                            <p class="noti-time">
                                                <span class="notification-time">15 Sep 2020 10:20 PM</span>
                                            </p>

                                        </div>
                                    </div>
                                </a>
                                <button class="btn btn-decline-accept" type="submit">Accept</button>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="notifications.html">View all Notifications</a>
                    </div>
                </div>
            </li>
            <li class="nav-item  has-arrow dropdown-heads ">
                <a class="win-maximize" href="javascript:void(0);">
                    <i class="fe fe-maximize"></i>
                </a>
            </li>

            <!-- User Menu -->
            <li class="nav-item dropdown">
                <a class="user-link  nav-link" data-bs-toggle="dropdown" href="javascript:void(0)">
                    <span class="user-img">
                        <img src="{{ asset('assets/img/profile-img.jpg') }}" alt="Admin">
                        <span class="animate-circle"></span>
                    </span>
                    <span class="user-content">
                        <span class="user-name">John Smith</span>
                        <span class="user-details">Demo User</span>
                    </span>
                </a>
                <div class="dropdown-menu menu-drop-user">
                    <div class="profilemenu ">
                        <div class="user-detials">
                            <a href="account.html">
                                <span class="profile-image">
                                    <img class="profilesidebar" src="{{ asset('assets/img/profile-img.jpg') }}" alt="img">
                                </span>
                                <span class="profile-content">
                                    <span>John Smith</span>
                                    <span>John@gmail.com</span>
                                </span>
                            </a>
                        </div>
                        <div class="subscription-menu">
                            <ul>
                                <li>
                                    <a href="{{route('admin.profile')}}">Profile</a>
                                </li>
                                <li>
                                    <a href="localization.html">Settings</a>
                                </li>
                            </ul>
                        </div>
                        <div class="subscription-logout">
                            <a href="{{route('admin.logout')}}">Log Out</a>
                        </div>
                    </div>
                </div>
            </li>
            <!-- /User Menu -->
        </ul>
    </div>

</div>
<!-- /Header -->
