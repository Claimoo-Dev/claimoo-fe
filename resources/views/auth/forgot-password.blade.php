<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Voxo">
    <meta name="keywords" content="Voxo">
    <meta name="author" content="Voxo">
    <link rel="icon" href="assets/img/favicon.png" type="image/x-icon" />
    <title>Forgot Password</title>

    <!--Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="assets-voxo/css/vendors/bootstrap.css">

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="assets-voxo/css/vendors/font-awesome.css">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="assets-voxo/css/vendors/feather-icon.css">

    <!-- animation css -->
    <link rel="stylesheet" type="text/css" href="assets-voxo/css/vendors/animate.css">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="assets-voxo/css/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="assets-voxo/css/vendors/slick/slick-theme.css">

    <!-- Theme css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="assets-voxo/css/demo2.css">
    <link rel="stylesheet" type="text/css" href="assets-voxo/style.css">


</head>

<body class="theme-color2 light ltr">


    <!-- Sign Up Section Start -->
    <div class="login-section">
        <div class="materialContainer">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">{{ $message }}</div>
            @endif

            @if ($message = Session::get('error'))
            <div class="alert alert-danger">{{ $message }}</div>
            @endif
            <div class="box">
                <div class="width-100 img-center">
                    <img src="assets/img/logo2.png" alt="" class="width-50">
                </div>

                <div class="register-title mt-4">
                    <h3 class="fz-24 fw-900">Lupa Kata Sandi</h3>
                </div>

                <form action="{{ route('sendLinkForgotPassword') }}" method="post">
                    @csrf
                    <div class="input mt-0">
                        <label for="emailname">Masukkan Email</label>
                        <input type="text" name="username" class="is-invalid" id="emailname" required>
                        <span class="spin"></span>
                    </div>

                    <div class="button login button-1">
                        <button>
                            <span>Kirim</span>
                            <i class="fa fa-check"></i>
                        </button>
                    </div>
                </form>

                <p><a href="{{ url('sign-in') }}" class="theme-color">Kembali</a></p>
            </div>
        </div>
    </div>
    <!-- Sign Up Section End -->

    <div class="bg-overlay"></div>

    <!-- latest jquery-->
    <script src="assets-voxo/js/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap js-->
    <script src="assets-voxo/js/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- feather icon js-->
    <script src="assets-voxo/js/feather/feather.min.js"></script>

    <!-- Slick js-->
    <script src="assets-voxo/js/slick/slick.js"></script>
    <script src="assets-voxo/js/slick/slick-animation.min.js"></script>
    <script src="assets-voxo/js/slick/custom_slick.js"></script>

    <!-- Notify js-->
    <script src="assets-voxo/js/bootstrap/bootstrap-notify.min.js"></script>

    <!-- script js -->
    <script src="assets-voxo/js/theme-setting.js"></script>
    <script src="assets-voxo/js/script.js"></script>
    <script src="assets-voxo/js/home-script.js"></script>

</body>

</html>
