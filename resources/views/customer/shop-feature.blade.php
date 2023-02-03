<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="manifest" href="./manifest.json" />
    <link rel="icon" href="{{ asset('assets-voxo/images/favicon/favicon.png') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('assets-voxo/images/favicon/favicon.png') }}" />
    <meta name="theme-color" content="#073f78" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-title" content="Claimoo" />
    <meta name="msapplication-TileImage" content="{{ asset('assets-voxo/images/favicon/favicon.png') }}" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Claimoo">
    <meta name="keywords" content="Claimoo">
    <meta name="author" content="Claimoo">
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon" />
    <title>Claimoo | Beli Polis</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset('assets-voxo/css/vendors/bootstrap.css') }}">

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets-voxo/css/vendors/font-awesome.css') }}">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets-voxo/css/vendors/feather-icon.css') }}">

    <!-- animation css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets-voxo/css/vendors/animate.css') }}">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets-voxo/css/vendors/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets-voxo/css/vendors/slick/slick-theme.css') }}">

    <!-- select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Theme css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('assets-voxo/css/demo2.css') }}">
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('assets-voxo/css/custom-style.css') }}">

</head>

<body class="theme-color2 light ltr">
    <!-- header start -->
    <header class="header-style-2" id="home">
        <div class="main-header navbar-searchbar">
            <div class="container">
                <div class="header-parent">
                    <div class="header-child-arrow">
                        <</div> <div class="header-child-title-parent">
                            <div class="header-child-title">Perluasan Risiko</div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <div class="content-container">
        <section class="risk-expansion">
            <div class="container">
                <div>Pilih perluasan risiko untuk perlindungan mobil Anda</div>
                <div class="risks mt-3">
                    <div class="risk">
                        <div class="risk-header">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                                <label class="form-check-label" for="checkbox1">
                                    Huru-hara dan Kerusakan
                                </label>
                            </div>
                            <div class="d-flex">
                                <div>+Rp 70.018</div>
                                <i data-feather="chevron-down" data-bs-toggle="collapse" href="#collapseExample"
                                    role="button" aria-expanded="false" aria-controls="collapseExample"></i>
                            </div>
                        </div>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                Jaminan ganti rugi atau biaya perbaikan atas kehilangan/kerusakan pada kendaraan yang secara
                                langsung oleh kerusuhan, pemogokan, penghalangan bekerja, tawuran, huru-hara, pembangkitan
                                rakyat atau revolusi.
                            </div>
                        </div>
                    </div>

                    <div class="risk">
                        <div class="risk-header">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="checkbox2">
                                <label class="form-check-label" for="checkbox2">
                                    Terorisme dan Sabotase
                                </label>
                            </div>
                            <div class="d-flex">
                                <div>+Rp 70.018</div>
                                <i data-feather="chevron-down" data-bs-toggle="collapse" href="#collapseExample1"
                                    role="button" aria-expanded="false" aria-controls="collapseExample1"></i>
                            </div>
                        </div>
                        <div class="collapse" id="collapseExample1">
                            <div class="card card-body">
                                Jaminan ganti rugi atau biaya perbaikan atas kehilangan/ kerusakan pada kendaraan yang
                                secara langsung disebabkan oleh tindakan terorisme dan sabotase.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="risk-footer">
            <div class="container">
                <div class="risk-footer-group">
                    <div>
                        <div>Premi per Tahun</div>
                        <div>Rp 760.190</div>
                    </div>
                    <div class="risk-footer-button">Beli</div>
                </div>
            </div>
        </section>
    </div>

    <!-- tap to top Section Start -->
    <div class="tap-to-top">
        <a href="#home">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
    <!-- tap to top Section End -->

    <div class="bg-overlay"></div>

    <!-- latest jquery-->
    <script src="{{ asset('assets-voxo/js/jquery-3.5.1.min.js') }}"></script>

    <!-- Add To Home js -->
    <script src="{{ asset('assets-voxo/js/pwa.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('assets-voxo/js/bootstrap/bootstrap.bundle.min.js') }}"></script>

    <!-- feather icon js-->
    <script src="{{ asset('assets-voxo/js/feather/feather.min.js') }}"></script>

    <!-- lazyload js-->
    <script src="{{ asset('assets-voxo/js/lazysizes.min.js') }}"></script>

    <!-- Slick js-->
    <script src="{{ asset('assets-voxo/js/slick/slick.js') }}"></script>
    <script src="{{ asset('assets-voxo/js/slick/slick-animation.min.js') }}"></script>
    <script src="{{ asset('assets-voxo/js/slick/custom_slick.js') }}"></script>

    <!-- Filter Hide and show Js -->
    <script src="{{ asset('assets-voxo/js/filter.js') }}"></script>

    <!-- Notify js-->
    <script src="{{ asset('assets-voxo/js/bootstrap/bootstrap-notify.min.js') }}"></script>

    <!-- script js -->
    <script src="{{ asset('assets-voxo/js/theme-setting.js') }}"></script>
    <script src="{{ asset('assets-voxo/js/script.js') }}"></script>

    <!-- select2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</body>

</html>
