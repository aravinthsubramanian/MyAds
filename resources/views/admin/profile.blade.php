@include('layouts.admin.head')

<body>

    <div class="main-wrapper">

        @include('layouts.admin.header')

        @include('layouts.admin.sidebar')

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
                                                        <img src="@if (file_exists($user->image)) {{ asset($user->image) }} @else {{ asset('assets/img/profile-img.jpg') }} @endif" alt="Profile">
                                                    </div>
                                                    <div class="settings-upload-btn">
                                                        <input class="hide-input image-upload" id="profile_image" name="image" type="file" accept="image/*">
                                                        <label class="file-upload" for="file">Upload New photo</label>
                                                    </div>
                                                    <span>Max file size: 10 MB</span>
                                                </div>
                                                <a class="profile-img-del" id="profile_delete" href="javascript:void(0)"><i class="fa-regular fa-trash-can"></i></a>
                                            </div>

                                            <div class="profile-form">
                                                <form action="{{ route('admin.update') }}" method="POST">
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
                                                <form action="{{ route('admin.change_password') }}" method="POST">
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

    <!-- Delete -->
    <div class="modal fade" id="delete-item" aria-labelledby="exampleModalLabel" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Profile Image</h5>
                    <button class="btn-close close-modal" data-bs-dismiss="modal" type="button" aria-label="Close">
                        <i class="fe fe-x"></i>
                    </button>
                </div>
                <form action="{{route('admin.delete_profile_image')}}" method="GET">
                    @csrf
                    <div class="modal-body py-0">
                        <div class="del-modal">
                            <p>Are you sure want to Delete?</p>
                        </div>
                    </div>
                    <br>
                    <div class="modal-footer pt-0">
                        <button class="btn btn-cancel" data-bs-dismiss="modal" type="button">Cancel</button>
                        <button class="btn btn-submit" type="submit">Yes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Delete -->

    <!-- Profile -->
    <div class="modal fade" id="imageModel" aria-labelledby="exampleModalLabel" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Upload Profile Image</h5>
                    <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="image_demo"></div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                    <button class="btn btn-primary crop_image" type="button">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Profile -->

    <!-- Scripts  -->
    @include('layouts.admin.script')

</body>

<!-- Footer -->
@include('layouts.admin.footer')
