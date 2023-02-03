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
                            <div class="header-child-title">B | DAIHATSU ALL NEW XENIA 1.3 M MT</div>
                            <div class="header-child-subtitle">Total Nilai pertanggungan IDR Rp 200.000.000</div>
                    </div>
                </div>
            </div>
            <hr class="header-line">
            <div class="container">
                <div class="product-upper">
                    <div class="product-upper-item" data-bs-toggle="modal" data-bs-target="#sortModal">Urutkan</div>
                    <div class="product-upper-item ms-1 me-1">Filter</div>
                    <div class="product-upper-item">Bandingkan</div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <div class="content-container">
        <section class="products">
            <div class="container">
                <div class="product mb-3">
                    <div class="product-badge">
                        <div class="product-badge-item">Terlaris</div>
                        <div class="product-badge-item">Klaim Cepat</div>
                        <div class="product-badge-item">Penerbitan Cepat</div>
                    </div>
                    <div class="product-header">
                        <div class="product-header-icon">
                            <img src="{{ asset('assets-voxo/images/zurich.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="product-header-title">
                            <div class="product-header-title-name">Zurich Insurance</div>
                            <div class="product-header-title-type">Autocilin Total Loss</div>
                        </div>
                    </div>
                    <div class="product-body">
                        <ul class="list-group">
                            <li class="list-group-item benefits">
                                <input class="form-check-input me-1" type="checkbox" checked>
                                Fasilitas Derek (Khusus kecelakaan total)
                            </li>
                            <li class="list-group-item benefits">
                                <input class="form-check-input me-1" type="checkbox" checked>
                                Hotline 24 jam/7 hari
                            </li>
                        </ul>
                    </div>
                    <div class="product-footer">
                        <div>
                            <div>Premi per Tahun</div>
                            <div>Rp 760.190</div>
                        </div>
                        <div class="product-footer-button">
                            <div class="btn-detail me-2">Detail</div>
                            <div class="btn-buy">Beli</div>
                        </div>
                    </div>
                </div>

                <div class="product mb-3">
                    <div class="product-header">
                        <div class="product-header-icon">
                            <img src="{{ asset('assets-voxo/images/zurich.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="product-header-title">
                            <div class="product-header-title-name">Zurich Insurance</div>
                            <div class="product-header-title-type">Autocilin Comprehensive</div>
                        </div>
                    </div>
                    <div class="product-body">
                        <ul class="list-group">
                            <li class="list-group-item benefits">
                                <input class="form-check-input me-1" type="checkbox" checked>
                                Emergency Road Assistance (ERA) dan Fasilitas Derek Autocillin
                            </li>
                            <li class="list-group-item benefits">
                                <input class="form-check-input me-1" type="checkbox" checked>
                                Jaminan Keaslian Suku Cadang dan Garansi Perbaikan 6 Bulan
                            </li>
                        </ul>
                    </div>
                    <div class="product-footer">
                        <div>
                            <div>Premi per Tahun</div>
                            <div>Rp 4.161.040</div>
                        </div>
                        <div class="product-footer-button">
                            <div class="btn-detail me-2">Detail</div>
                            <div class="btn-buy">Beli</div>
                        </div>
                    </div>
                </div>

                <div class="product mb-3">
                    <div class="product-header">
                        <div class="product-header-icon">
                            <img src="{{ asset('assets-voxo/images/mag.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="product-header-title">
                            <div class="product-header-title-name">Asuransi MAG</div>
                            <div class="product-header-title-type">MAG Auto Total Loss</div>
                        </div>
                    </div>
                    <div class="product-body">
                        <ul class="list-group">
                            <li class="list-group-item benefits">
                                <input class="form-check-input me-1" type="checkbox" checked>
                                Manfaat Penggantian Biaya Derek dan Ambulans
                            </li>
                            <li class="list-group-item benefits">
                                <input class="form-check-input me-1" type="checkbox" checked>
                                Hotline 24 jam/7 hari
                            </li>
                        </ul>
                    </div>
                    <div class="product-footer">
                        <div>
                            <div>Premi per Tahun</div>
                            <div>Rp 760.190</div>
                        </div>
                        <div class="product-footer-button">
                            <div class="btn-detail me-2">Detail</div>
                            <div class="btn-buy">Beli</div>
                        </div>
                    </div>
                </div>

                <div class="product">
                    <div class="product-header">
                        <div class="product-header-icon">
                            <img src="{{ asset('assets-voxo/images/mag.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="product-header-title">
                            <div class="product-header-title-name">Asuransi MAG</div>
                            <div class="product-header-title-type">MAG Auto Total Loss</div>
                        </div>
                    </div>
                    <div class="product-body">
                        <ul class="list-group">
                            <li class="list-group-item benefits">
                                <input class="form-check-input me-1" type="checkbox" checked>
                                Manfaat Penggantian Biaya Derek dan Ambulans
                            </li>
                            <li class="list-group-item benefits">
                                <input class="form-check-input me-1" type="checkbox" checked>
                                Hotline 24 jam/7 hari
                            </li>
                        </ul>
                    </div>
                    <div class="product-footer">
                        <div>
                            <div>Premi per Tahun</div>
                            <div>Rp 760.190</div>
                        </div>
                        <div class="product-footer-button">
                            <div class="btn-detail me-2">Detail</div>
                            <div class="btn-buy">Beli</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="modal fade modal-navbar" id="sortModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body sort-modal-body">
                    <div>Urutkan dari</div>
                    <div class="form-check mt-3">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Harga premi rendah ke tinggi
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Harga premi tinggi ke rendah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault3">
                            Alfabet A-Z
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault4">
                            Alfabet Z-A
                        </label>
                    </div>
                </div>
            </div>
        </div>
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
