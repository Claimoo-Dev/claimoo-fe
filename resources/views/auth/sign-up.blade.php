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
    <title>Claimoo - Sign Up</title>

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

<body class="signup-page theme-color2">

    <!-- Sign Up Section Start -->
    <div class="login-section">
        <div class="materialContainer">

            @if ($message = Session::get('error'))
            <div class="alert alert-danger">{{ $message }}</div>
            @endif

            <div class="box">
                <div class="width-100 img-center">
                    <img src="assets/img/logo2.png" alt="" class="width-50">
                </div>

                <div class="register-title mt-4">
                    <h3 class="fz-24 fw-900">Daftar</h3>
                </div>

                <form action="{{ url('api/sign_up') }}" method="post">
                    <div class="input mt-0">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" name="name" id="name" required>
                        <span class="spin"></span>
                    </div>

                    <div class="input mt-0">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required>
                        <span class="spin"></span>
                    </div>

                    <label for="phone" class="form-label mt-3 mb-0">Nomor Telepon</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">62</span>
                        <input type="text" name="phone" class="form-control" id="phone" required>
                    </div>

                    <div class="input mt-0">
                        <label for="password">Kata Sandi</label>
                        <input type="password" name="password" id="password" required>
                        <span class="spin"></span>
                    </div>

                    <div class="input mt-0">
                        <label for="retypePassword" id="labelRetypePassword">Ulangi Kata Sandi</label>
                        <input type="password" name="retype_password" id="retypePassword" required>
                        <span class="spin"></span>
                    </div>

                    <div class="button login">
                        <button type="submit" id="submit">
                            <span>Daftar</span>
                            <!-- <i class="fa fa-check"></i> -->
                        </button>
                    </div>
                </form>
                <p class="mt-0"><a href="{{ url('sign-in') }}" class="theme-color">Sudah punya akun?</a></p>
            </div>
        </div>
    </div>
    <!-- Sign Up Section End -->

    <!-- latest jquery-->
    <script src="assets-voxo/js/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap js-->
    <script src="assets-voxo/js/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- lazyload js-->
    <script src="assets-voxo/js/lazysizes.min.js"></script>

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

    <script type="text/javascript">
        $(document).ready(function () {
            window.setTimeout(function () {
                $(".alert").fadeTo(500, 0).slideUp(500, function () {
                    $(this).remove();
                });
            }, 500);
        });

        $('#password, #retypePassword').on('keyup', function () {
            if ($('#retypePassword').val()) {
                if ($('#password').val() != $('#retypePassword').val()) {
                    $('#labelRetypePassword').html('Confirm Password (tidak sesuai)').css('color', 'red');
                } else {
                    $('#labelRetypePassword').html('Confirm Password').css('color', 'black');
                }
            }
        });
    </script>
</body>

</html>
