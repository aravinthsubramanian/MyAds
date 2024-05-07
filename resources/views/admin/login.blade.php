<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Login | Buy Guns</title>

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

            <!-- Login image -->
            <div class="login-img-wrapper">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="login-img bg-white p-4 border rounded shadow-sm">
                                <img class="shape-icon1-blk" src="{{ asset('assets/img/shape1.svg') }}" alt="">
                                <img class="shape-icon2-blk" src="{{ asset('assets/img/shape2.svg') }}" alt="">
                                <div class="login-wrap">
                                    <div class="login-header">
                                        <img class="logo-blk" src="{{ asset('assets/img/logo.svg') }}" alt="">
                                        <h4>Login</h4>

                                        <p>Hello <img class="me-1" src="{{ asset('assets/img/hai-icon.svg') }}" alt=""><span>Enter Details to continue</span></p>
                                    </div>
                                    <!-- Login Form -->
                                    <form action="{{ route('admins.authentication') }}" method="POST">
                                        @csrf
                                        <div class="form-set">
                                            <input class="form-control" name="email" type="text" placeholder="Email Address"
                                                @if (isset($_COOKIE['email'])) value="{{ $_COOKIE['email'] }}" @else value="{{ old('email') }}" @endif>
                                            @error('email')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-set">
                                            <div class="pass-group position-relative">
                                                <input class="form-control pass-input" name="password" type="password" placeholder="Password"
                                                    @if (isset($_COOKIE['password'])) value="{{ $_COOKIE['password'] }}" @endif>
                                                <span class="toggle-password feather-eye"></span>
                                            </div>
                                            @error('password')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        @if (session()->has('error'))
                                            <p class='text-danger'>{{ session('error') }}</p>
                                        @endif
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <label class="custom_check">
                                                    <input class="rememberme" name="rememberme" type="checkbox" @if (isset($_COOKIE['rememberme'])) checked @endif>
                                                    <span class="checkmark"></span>Remember Me
                                                </label>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="text-md-end">
                                                    <a class="forgot-link" href="{{ route('admins.forgot_password') }}">Forgot password?</a>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary w-100 login-btn" type="submit">Login</button>
                                    </form>
                                    <!-- /Login Form -->
                                </div>
                            </div>
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
