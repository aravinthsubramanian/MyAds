<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Forgot Password | Buy Guns</title>

        <!-- Favicon -->
        <link href="{{ asset('assets/img/favicon.png') }}" rel="shortcut icon">

        <!-- Bootstrap CSS -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Fontawesome CSS -->
        <link href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}" rel="stylesheet">

        <!-- Aos CSS -->
        <link href="{{ asset('assets/plugins/aos/aos.css') }}" rel="stylesheet">

        <!-- Fearther CSS -->
        <link href="{{ asset('assets/css/feather.css') }}" rel="stylesheet">

        <!-- Main CSS -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    </head>

    <body>

        <div class="main-wrapper flex-login forgot-password">

            <!-- Login Section -->
            <div class="login-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 my-auto">
                            <div class="login-wrap">

                                <div class="login-header">
                                    <img class="logo-blk" src="{{ asset('assets/img/logo.svg') }}" alt="">
                                    <h4>Forgot Password?</h4>
                                    <p>Enter your email and we will send you a link to get back into your account</p>
                                </div>

                                <!-- Login Form -->
                                <form action="{{ route('admin.get_link') }}" method="POST">
                                    @csrf
                                    <div class="form-set">
                                        <input class="form-control" name="email" type="text" value="{{ old('email') }}" placeholder="Email Address">
                                        @error('email')
                                            <p class='text-danger ms-1'>{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <button class="btn btn-primary w-100 login-btn" type="submit">Get Link</button>
                                    <div class="register-link text-center">
                                        <p>No issues return to <a class="forgot-link" href="{{ route('admin.login') }}">Login</a></p>
                                    </div>
                                </form>
                                <!-- /Login Form -->

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /Login Section -->
            <!-- Login image -->
            <div class="login-img-wrapper">
                <div class="login-img">
                    <img class="shape-icon1-blk" src="{{ asset('assets/img/shape1.svg') }}" alt="">
                    <img class="shape-icon2-blk" src="{{ asset('assets/img/shape2.svg') }}" alt="">
                    <div class="content-info">
                        <h3>Grow your <span>business</span> with <span>Advertisement Management</span></h3>
                        <div class="text-end">
                            <img class="img-fluid" src="{{ asset('assets/img/ad-card-1.svg') }}" alt="">
                        </div>
                        <div class="text-start">
                            <img class="img-fluid" src="{{ asset('assets/img/ad-card-2.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Login Section -->
        </div>

        <!-- jQuery -->
        <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>

        <!-- Bootstrap Core JS -->
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Select2 JS -->
        <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>

        <!-- Aos -->
        <script src="{{ asset('assets/plugins/aos/aos.js') }}"></script>

        <!-- Top JS -->
        <script src="{{ asset('assets/js/backToTop.js') }}"></script>

        <!-- Fearther JS -->
        <script src="{{ asset('assets/js/feather.min.js') }}"></script>

        <!-- Custom JS -->
        <script src="{{ asset('assets/js/script.js') }}"></script>

    </body>

</html>
