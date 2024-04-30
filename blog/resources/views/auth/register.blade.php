<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog register</title>

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="dashboard_assets/css/style.min.css" rel="stylesheet" type="text/css">
    <link href="dashboard_assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <script src="dashboard_assets/js/config.js"></script>
</head>
<body class="bg-primary d-flex justify-content-center align-items-center min-vh-100 p-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-md-5">
                <div class="card">
                    <div class="card-body p-4">

                        <div class="text-center w-75 mx-auto auth-logo mb-4">
                            <a class='logo-dark' href='index.html'>
                                <span><img src="assets/images/logo-dark.png" alt="" height="22"></span>
                            </a>

                            <a class='logo-light' href='index.html'>
                                <span><img src="assets/images/logo-light.png" alt="" height="22"></span>
                            </a>
                        </div>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group mb-3">
                                <label class="form-label" for="name">Name</label>
                                <input class="form-control" type="text" placeholder="Enter your Name" name="name" value="{{ old('name') }}">
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label" for="emailaddress">Email address</label>
                                <input class="form-control" type="email" placeholder="Enter your email" name="email" value="{{ old('email') }}">
                            </div>

                            <div class="form-group mb-3">
                                <a class='text-muted float-end' href='pages-recoverpw.html'><small></small></a>
                                <label class="form-label" for="password">Password</label>
                                <input class="form-control" type="password" placeholder="Enter your password" name="password">
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label" for="password-confirm">Confirm Password</label>
                                <input class="form-control" type="password" placeholder="Enter your password" name="password_confirmation">
                            </div>

                            <div class="form-group mb-3">
                                <div class="">
                                    <input class="form-check-input" type="checkbox" id="checkbox-signin" checked>
                                    <label class="form-check-label ms-2" for="checkbox-signin">I accept <a href="#">Terms and Conditions</a></label>
                                </div>
                            </div>
                            <div class="mb-3">
                                {!! NoCaptcha::display() !!}
                            </div>

                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary w-100" type="submit"> Sign Up </button>
                            </div>

                        </form>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="text-white-50">Already have an account ? <a class='text-white font-weight-medium ms-1' href='{{ route('login') }}'>Log In</a></p>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>

    <!-- App js -->
    <script src="dashboard_assets/js/vendor.min.js"></script>
    <script src="dashboard_assets/js/app.js"></script>
    {!! NoCaptcha::renderJs() !!}

</body>


<!-- Mirrored from myrathemes.com/dashtrap/pages-register by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Mar 2024 03:40:33 GMT -->
</html>
