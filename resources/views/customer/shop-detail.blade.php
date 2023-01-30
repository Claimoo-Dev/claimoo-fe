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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-menu">
                            <div class="menu-left">
                                <div class="brand-logo">
                                    <a href="{{ route('landing-page') }}">
                                        <img src="{{ asset('assets-voxo/images/logo-claimoo.png') }}" class="img-fluid blur-up lazyload" alt="logo">
                                    </a>
                                </div>
                            </div>
                            <div class="menu-right">
                                <ul>
                                    <li class="onhover-dropdown wislist-dropdown">
                                        <div class="cart-media">
                                            <div class="cart-icon">
                                                <i data-feather="bell"></i>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="modal-icon">
                                        <div class="modal-nav" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i data-feather="align-justify" class="sidebar-bar"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <!-- mobile fix menu start -->
    <!-- <div class="mobile-menu">
        <ul>
            <li>
                <a href="{{ route('landing-page') }}">
                    <i data-feather="home"></i>
                    <span>Beranda</span>
                </a>
            </li>
            <li>
                <a href="{{ route('shop') }}">
                    <i data-feather="shopping-bag"></i>
                    <span>Belanja</span>
                </a>
            </li>
            <li>
                <a href="{{ route('claim') }}">
                    <i color="red" data-feather="edit"></i>
                    <span>Klaim</span>
                </a>
            </li>
            <li>
                <a href="{{ route('support') }}">
                    <i data-feather="help-circle"></i>
                    <span>Bantuan</span>
                </a>
            </li>
            <li>
                <a href="{{ route('dashboard-customer') }}">
                    <i data-feather="user"></i>
                    <span>Akun</span>
                </a>
            </li>
        </ul>
    </div> -->
    <!-- mobile fix menu end -->

    <div class="content-container">
        <section>
            <div class="container">
                <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-manfaat-tab" data-bs-toggle="pill" data-bs-target="#pills-manfaat" type="button" role="tab" aria-controls="pills-manfaat" aria-selected="true"><i class="fas fa-user-shield"></i> Manfaat</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-sk-tab" data-bs-toggle="pill" data-bs-target="#pills-sk" type="button" role="tab" aria-controls="pills-sk" aria-selected="false"><i class="fas fa-tasks"></i> S &amp; K</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-klaim-tab" data-bs-toggle="pill" data-bs-target="#pills-klaim" type="button" role="tab" aria-controls="pills-klaim" aria-selected="false"><i class="fas fa-calendar-plus"></i> Klaim</button>
                    </li>

                </ul>

                <div class="tab-content mb-4" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-manfaat" role="tabpanel" aria-labelledby="pills-manfaat-tab" tabindex="0">Manfaat</div>
                    <div class="tab-pane fade" id="pills-sk" role="tabpanel" aria-labelledby="pills-sk-tab" tabindex="0">Syarat & Ketentuan</div>
                    <div class="tab-pane fade" id="pills-klaim" role="tabpanel" aria-labelledby="pills-klaim-tab" tabindex="0">Klaim</div>
                </div>
            </div>
        </section>

        <section>

        </section>

        <div class="container">
            <h3 class="reference-title-h3 mb-3">Fitur</h3>
            <div class="card mb-0 package-card">
                <div class="row g-0">
                    <div class="col-12">
                        <div class="card-body">
                            <h5 class="card-title package-card-title">Fasilitas Derek (Khusus Kecelakaan)</h5>
                            <p class="card-text">Fasilitas derek gratis bagi Anda yang mengalami kecelakaan saat berkendara untuk wilayah Jabodetabek, Surabaya, Bandung, Semarang, Palembang, Makassar, Medan. Untuk wilayah yang tidak terjangkau mobil derek Autocillin dan rekanan, Anda dapat mengajukan penggantian biaya derek maksimum 0.5% dari harga pertanggungan atau maksimum Rp 500 ribu per kejadian).</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card package-card">
                <div class="row g-0">

                    <div class="col-12">
                        <div class="card-body">
                            <h5 class="card-title package-card-title">Autocillin Mobile Claim</h5>
                            <p class="card-text">Autocillin Mobile Claim adalah aplikasi yang akan memudahkan proses klaim untuk kendaraan Anda. Aplikasi ini dapat diunduh melalui Android Google Play Store dan Apple App Store</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <section>
            <div class="container">

                <div class="card mb-2 package-card">
                    <div class="row g-0">
                        <div class="col-8">
                            <div class="card-body ps-4">
                                <h5 class="card-title package-card-title">Bengkel Tersedia</h5>
                                <p class="card-text">Memiliki lebih dari 517 bengkel rekanan yang tersebar di berbagai kota di seluruh Indonesia</p>
                            </div>
                        </div>
                        <div class="col-4 package-image">
                            <a href="{{ route('landing-page') }}">
                                <div class="reference-klaim text-center">
                                    Lihat
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card package-card">
                    <div class="row g-0">

                        <div class="col-8">
                            <div class="card-body ps-4">

                                <h5 class="card-text package-card-title">Brosur Produk</h5>
                            </div>
                        </div>
                        <div class="col-4 package-image">
                            <a href="{{ route('landing-page') }}">
                                <div class="reference-klaim text-center">
                                    Lihat
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- <footer class="footer-sm-space">
        <div class="main-footer">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-12">
                        <div class="footer-contact">
                            <div class="brand-logo">
                                <a href="{{ route('landing-page') }}" class="footer-logo">
                                    <img src="{{ asset('assets-voxo/images/logo-claimoo.png') }}" class="img-fluid blur-up lazyload" alt="logo">
                                </a>
                            </div>
                            <p class="font-light">Jl. Tole Iskandar No. 66, Depok, Jawa Barat 16412
                            </p>

                        </div>
                    </div>

                    <div class="col-12">
                        <div class="footer-links">
                            <div class="footer-title">
                                <h3>Tentang Kami</h3>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="font-dark">Beranda</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="font-dark">Perusahaan</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="font-dark">Komisaris &amp; Direksi</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="font-dark">Tenaga Ahli</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="font-dark">Partner</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="footer-links">
                            <div class="footer-title">
                                <h3>Produk Asuransi</h3>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li>
                                        <a href=javascript:void(0)" class="font-dark">Simas Mobil</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="font-dark">Zurich Autocilin</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="font-dark">Astra Garda Oto</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="footer-links">
                            <div class="footer-title">
                                <h3>Bantuan</h3>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="font-dark">Akun Anda</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="font-dark">Keranjang</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="font-dark">FAQs</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="font-dark">Kebijakan Privasi</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="font-dark">Hubungi Kami</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                   
                </div>
            </div>
        </div>
        <div class="sub-footer">
            <div class="container">
                <div class="row gy-3">
                    <div class="col-md-12">
                        <p class="mb-0 font-dark text-center">© 2023 Claimoo. Hak Cipta Dilindungi Undang-undang</p>
                    </div>
                </div>
            </div>
        </div>
    </footer> -->

    <div class="modal fade modal-navbar" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="menu">
                        <a href="#">Beranda</a>
                    </div>
                    <div class="menu">
                        <div class="dropdown">
                            <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Tentang Kami
                            </a>

                            <div class="collapse" id="collapseExample">
                                <ul class="menu-child">
                                    <a href="">
                                        <li class="menu-child-item"> Perusahaan </li>
                                    </a>
                                    <a href="">
                                        <li class="menu-child-item"> Komisaris & Direksi </li>
                                    </a>
                                    <a href="">
                                        <li class="menu-child-item"> Tenaga Ahli </li>
                                    </a>
                                    <a href="">
                                        <li class="menu-child-item"> Partner </li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="menu">
                        <div class="dropdown">
                            <a data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">
                                Produk Asuransi
                            </a>

                            <div class="collapse" id="collapseExample1">
                                <ul class="menu-child">
                                    <a href="">
                                        <li class="menu-child-item"> All Risk </li>
                                    </a>
                                    <a href="">
                                        <li class="menu-child-item"> TLO </li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="menu">
                        <a href="#">Bengkel</a>
                    </div>
                    <div class="menu">
                        <a href="#">Berita</a>
                    </div>
                    <div class="menu">
                        <a href="#">Hubungi Kami</a>
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