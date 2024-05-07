<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Profile | Buy Guns</title>

        <!-- Favicons -->
        <link href="{{ asset('assets/img/favicon.png') }}" rel="shortcut icon">

        <!-- Select 2 -->
        <link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" rel="stylesheet">

        <!-- Fontawesome CSS -->
        <link href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}" rel="stylesheet">

        <!-- Datatable CSS -->
        <link href="{{ asset('assets/plugins/datatables/datatables.min.css') }}" rel="stylesheet">

        <!-- Feather CSS -->
        <link href="{{ asset('assets/plugins/feather/feather.css') }}" rel="stylesheet">

        <!-- Main CSS -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    </head>

    <body>
        <div class="main-wrapper">

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
                                    <img src="{{ asset('assets/img/user.jpg') }}" alt="Admin">
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
                                                <img class="profilesidebar" src="{{ asset('assets/img/user.jpg') }}" alt="img">
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
                                                <a href="account-settings.html">Profile</a>
                                            </li>
                                            <li>
                                                <a href="localization.html">Settings</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="subscription-logout">
                                        <a href="signin.html">Log Out</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- /User Menu -->
                    </ul>
                </div>

            </div>
            <!-- /Header -->

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
                                <a class="active" href="ads-list.html"><i class="fe fe-grid"></i> <span>Ads List</span></a>
                            </li>
                            <li>
                                <a href="ads-category.html"><i class="fe fe-grid"></i> <span>Ads Category</span></a>
                            </li>
                            <li>
                                <a href="index.html"><i class="fe fe-grid"></i> <span>Ads Sub Category</span></a>
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
                                <a href="{{ route('admins.logout') }}"><i class="fe fe-log-out"></i> <span>Logout</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Sidebar -->

            <div class="page-wrapper page-settings">
                <div class="content">
                    <div class="content-page-header content-page-headersplit">
                        <h5>Profile Settings</h5>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="profile-content">
                                <div class="row dashboard-info">
                                    <div class="col-lg-8">
                                        <div class="card dash-cards">
                                            <div class="card-header">
                                                <h4>Profile Details</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="profile-photo">
                                                    <div class="profile-img">
                                                        <div class="settings-upload-img">
                                                            <img src="{{ asset('assets/img/profile-img.jpg') }}" alt="profile">
                                                        </div>
                                                        <div class="settings-upload-btn">
                                                            <input class="hide-input image-upload" id="file" name="image" type="file" accept="image/*">
                                                            <label class="file-upload" for="file">Upload New photo</label>
                                                        </div>
                                                        <span>Max file size: 10 MB</span>
                                                    </div>
                                                    <a class="profile-img-del" href="javascript:void(0)"><i class="fa-regular fa-trash-can"></i></a>
                                                </div>
                                                <div class="profile-form">
                                                    <form action="{{ route('admins.update') }}" method="POST">
                                                        @csrf
                                                        <div class="form-set">
                                                            <label class="col-form-label">Your Full Name</label>
                                                            <div class="pass-group group-img">
                                                                <input class="form-control" name="name" type="text" value="{{ $user->name }}">
                                                            </div>
                                                            @error('name')
                                                                <p class='text-danger'>{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="form-set">
                                                                    <label class="col-form-label">Mobile</label>
                                                                    <div class="pass-group group-img">
                                                                        <input class="form-control" name="mobile" type="text" value="{{ $user->mobile }}" maxlength="14">
                                                                    </div>
                                                                    @error('mobile')
                                                                        <p class='text-danger'>{{ $message }}</p>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="form-set">
                                                                    <label class="col-form-label">Email Address</label>
                                                                    <div class="group-img">
                                                                        <input class="form-control" name="email" type="text" value="{{ $user->email }}" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @if (session()->has('error'))
                                                            <p class='text-danger'>{{ session('error') }}</p>
                                                        @endif
                                                        <button class="btn btn-primary" type="submit">Save</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="profile-sidebar">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4>Change Password</h4>
                                                </div>
                                                <div class="card-body">
                                                    <form action="{{ route('admins.change_password') }}" method="POST">
                                                        @csrf
                                                        <div class="form-set">
                                                            <label class="col-form-label">Current Password</label>
                                                            <div class="pass-group group-img">
                                                                <span class="lock-icon"><i class="feather-lock"></i></span>
                                                                <input class="form-control pass-input" name="password" type="password" placeholder="Current Password">
                                                                <span class="toggle-password feather-eye-off"></span>
                                                            </div>
                                                            @error('password')
                                                                <p class='text-danger'>{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                        <div class="form-set">
                                                            <label class="col-form-label">New Password</label>
                                                            <div class="pass-group group-img">
                                                                <span class="lock-icon"><i class="feather-lock"></i></span>
                                                                <input class="form-control pass-input" name="newpassword" type="password" placeholder="New Password">
                                                                <span class="toggle-password feather-eye-off"></span>
                                                            </div>
                                                            @error('newpassword')
                                                                <p class='text-danger'>{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                        <div class="form-set">
                                                            <label class="col-form-label">Confirm New Password</label>
                                                            <div class="pass-group group-img">
                                                                <span class="lock-icon"><i class="feather-lock"></i></span>
                                                                <input class="form-control pass-input" name="confirmpassword" type="password" placeholder="Confirm Password">
                                                                <span class="toggle-password feather-eye-off"></span>
                                                            </div>
                                                            @error('confirmpassword')
                                                                <p class='text-danger'>{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                        @if (session()->has('error'))
                                                            <p class='text-danger'>{{ session('error') }}</p>
                                                        @endif
                                                        <br>
                                                        <button class="btn btn-primary" type="submit"> Change Password</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Delete -->
        <div class="modal fade" id="delete-item" aria-labelledby="exampleModalLabel" aria-hidden="true" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Services</h5>
                        <button class="btn-close close-modal" data-bs-dismiss="modal" type="button" aria-label="Close">
                            <i class="fe fe-x"></i>
                        </button>
                    </div>
                    <form action="listings.html">
                        <div class="modal-body py-0">
                            <div class="del-modal">
                                <p>Are you sure want to Delete?</p>
                            </div>
                        </div>
                        <div class="modal-footer pt-0">
                            <button class="btn btn-cancel" data-bs-dismiss="modal" type="button">Cancel</button>
                            <button class="btn btn-submit" type="submit">Yes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Delete -->

        <!-- jQuery -->
        <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>

        <!-- Select 2 JS-->
        <script src="{{ asset('assets/js/select2.min.js') }}"></script>

        <!-- Bootstrap Core JS -->
        <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Bootstrap Tagsinput JS -->
        <script src="{{ asset('assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}"></script>

        <!-- Feather Icon JS -->
        <script src="{{ asset('assets/js/feather.min.js') }}"></script>

        <!-- Datatable JS -->
        <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/js/dataTables.bootstrap4.min.js') }}"></script>

        <!-- Slimscroll JS -->
        <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

        <!-- Custom JS -->
        <script src="{{ asset('assets/js/admin.js') }}"></script>

    </body>

</html>
