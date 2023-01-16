<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="manifest" href="./manifest.json" />
    <link rel="icon" href="assets-voxo/images/favicon/favicon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="assets-voxo/images/favicon/favicon.png" />
    <meta name="theme-color" content="#e22454" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-title" content="Claimoo" />
    <meta name="msapplication-TileImage" content="assets-voxo/images/favicon/favicon.png" />
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
    <link rel="icon" href="assets/img/favicon.png" type="image/x-icon" />
    <title>Claimoo | Klaim</title>

    <!-- Google font -->
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
    <link id="color-link" rel="stylesheet" type="text/css" href="assets-voxo/css/custom-style.css">
    <link id="color-link" rel="stylesheet" type="text/css" href="assets-voxo/css/custom-style-claim.css">

</head>

<body class="theme-color2 light ltr">
    <!-- header start -->
    <header class="header-style-2" id="home">
        <div class="main-header navbar-searchbar">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-menu main-menu-dashboard">
                            <div class="menu-left">
                                <div class="brand-logo">
                                    <a href="{{ route('dashboard-customer') }}">
                                        <img src="assets-voxo/images/logo-claimoo.png"
                                            class="img-fluid blur-up lazyload" alt="logo">
                                    </a>
                                </div>
                            </div>
                            <nav>
                                <div class="main-navbar">
                                    <div id="mainnav">
                                        <div class="me-3"></div>
                                        <ul class="nav-menu">
                                            <li class="back-btn d-xl-none">
                                                <div class="close-btn">
                                                    Menu
                                                    <span class="mobile-back"><i class="fa fa-angle-left"></i>
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="home-menu">
                                                <a href="javascript:void(0)" class="nav-link menu-title">Beranda</a>

                                            </li>

                                            <li class="dropdown">
                                                <a href="javascript:void(0)" class="nav-link menu-title">Tentang
                                                    Kami</a>
                                                <ul class="nav-submenu menu-content">
                                                    <li>
                                                        <a href="javascript:void(0)">Perusahaan</a>
                                                        <a href="javascript:void(0)">Komisaris &amp; Direksi</a>
                                                        <a href="javascript:void(0)">Tenaga Ahli</a>
                                                        <a href="javascript:void(0)">Partner</a>
                                                    </li>

                                                </ul>
                                            </li>

                                            <li class="mega-menu dropdown ratio_40">
                                                <a href="javascript:void(0)" class="nav-link menu-title">
                                                    <div class="gradient-title">Produk Asuransi</div>
                                                </a>
                                                <div class="mega-menu-container poster-bg-image menu-content">
                                                    <div class="container-fluid">
                                                        <div class="row row-cols-5">
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="submenu-title">
                                                                        <h5>Simas Mobil</h5>
                                                                    </div>
                                                                    <div class="submenu-content opensubmegamenu">
                                                                        <ul class="list">
                                                                            <li>
                                                                                <a href="javascript:void(0)">All
                                                                                    Risk</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:void(0)">TLO</a>
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="submenu-title">
                                                                        <h5>Zurich Autocillin</h5>
                                                                    </div>
                                                                    <div class="submenu-content opensubmegamenu">
                                                                        <ul class="list">
                                                                            <li>
                                                                                <a href="javascript:void(0)">All
                                                                                    Risk</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:void(0)">TLO</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="link-section">
                                                                    <div class="submenu-title">
                                                                        <h5>Astra Garda Oto</h5>
                                                                    </div>
                                                                    <div class="submenu-content opensubmegamenu">
                                                                        <ul class="list">
                                                                            <li>
                                                                                <a href="javascript:void(0)">All
                                                                                    Risk</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:void(0)">TLO</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </li>


                                            <li>
                                                <a href="javascript:void(0)" class="nav-link menu-title">Bengkel</a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)" class="nav-link menu-title">Berita</a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)" class="nav-link menu-title">Hubungi
                                                    Kami</a>
                                            </li>


                                            <li class="mobile-poster d-flex d-xl-none">
                                                <img src="assets-voxo/images/pwa.png" class="img-fluid" alt="">
                                                <div class="mobile-contain">
                                                    <h5>Aplikasi Mobile Lite</h5>
                                                    <p class="font-light">Jadikan web ini ke versi aplikasi mobile.</p>
                                                    <a href="javascript:void(0)" id="installApp"
                                                        class="btn btn-primary btn-spacing w-100">TAMBAHKAN KE
                                                        HOMESCREEN</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <div class="menu-right">
                                <ul>
                                    <li class="onhover-dropdown wislist-dropdown bell-icon">
                                        <div class="cart-media">
                                            <div class="cart-icon">
                                                <i data-feather="bell"></i>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="language-icon d-none d-sm-block">
                                        <div class="dropdown top-header-dropdown">
                                            <a class="dropdown-toggle" href="javascript:void(0)" role="button"
                                                id="dropdownMenuLink" data-bs-toggle="dropdown">
                                                <span><i data-feather="globe"></i>ID
                                                    <i class="fas fa-chevron-down"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="dropdownMenuLink">
                                                <li class="w-100">
                                                    <a class="dropdown-item"
                                                        href="{{ route('dashboard-customer') }}">EN</a>
                                                </li>
                                                <li class="w-100">
                                                    <a class="dropdown-item"
                                                        href="{{ route('dashboard-customer') }}">ID</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="user-icon d-none d-sm-block">
                                        <div class="dropdown top-header-dropdown">
                                            <a class="dropdown-toggle" href="javascript:void(0)" role="button"
                                                id="dropdownMenuLink" data-bs-toggle="dropdown">
                                                <span><i data-feather="user"></i>
                                                    <i class="fas fa-chevron-down"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="dropdownMenuLink">
                                                <li class="w-100">
                                                    <a class="dropdown-item"
                                                        href="{{ route('dashboard-customer') }}">Log In</a>
                                                </li>
                                                <li class="w-100">
                                                    <a class="dropdown-item"
                                                        href="{{ route('dashboard-customer') }}">Daftar</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="toggle-icon .d-md-none .d-lg-block">
                                        <div class="toggle-nav">
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
    <div class="mobile-menu d-sm-none">
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
    </div>
    <!-- mobile fix menu end -->

    @if ($type == 'free')
    
    <section class="term">
        <div class="container">
            @if ($message = Session::get('success'))
            <div class="alert alert-success mt-3">{{ $message }}</div>
            @endif

            @if ($message = Session::get('error'))
            <div class="alert alert-danger mt-3">{{ $message }}</div>
            @endif

            <div class="row">
                <div class="col-12">
                    <div class="card term-condition-card">
                        <h3 class="card-header term-condition-card-header text-center">Syarat & Ketentuan :</h3>
                        <ul class="term-condition-card-body">
                            <li>Mohon izinkan kamera & lokasi untuk menggunakan layanan ini.</li>
                            <li class="mt-2">Mohon pilih jenis mobil.</li>
                            <li class="mt-2">Pastikan tidak ada obyek lain yang berada di dekat mobil seperti
                                tangan, pensil, kendaraan lain.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 col-md-6 col-6 pr-5px" id="mpv">
                    <div class="card card-car">
                        <div class="p-2">
                            <img class="card-img-top" src="type-car-icon/mpv.png" alt="Card image cap">
                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title mb-0">MPV</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 pl-5px" id="suv">
                    <div class="card card-car">
                        <div class="p-2">
                            <img class="card-img-top" src="type-car-icon/suv.png" alt="Card image cap">
                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title mb-0">SUV</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 pr-5px mt-3 mt-lg-0" id="crossover">
                    <div class="card card-car">
                        <div class="p-2">
                            <img class="card-img-top" src="type-car-icon/crossover.png" alt="Card image cap">
                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title mb-0">Crossover</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 pl-5px mt-3 mt-lg-0" id="hatchback">
                    <div class="card card-car">
                        <div class="p-2">
                            <img class="card-img-top" src="type-car-icon/hatchback.png" alt="Card image cap">
                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title mb-0">Hatchback</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 pr-5px mt-3" id="sedan">
                    <div class="card card-car">
                        <div class="p-2">
                            <img class="card-img-top" src="type-car-icon/sedan.png" alt="Card image cap">
                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title mb-0">Sedan</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 pl-5px mt-3" id="stationWagon">
                    <div class="card card-car">
                        <div class="p-2">
                            <img class="card-img-top" src="type-car-icon/station-wagon.png" alt="Card image cap">
                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title mb-0">Station Wagon</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 pr-5px mt-3" id="jeep">
                    <div class="card card-car">
                        <div class="p-2">
                            <img class="card-img-top" src="type-car-icon/jeep.png" alt="Card image cap">
                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title mb-0">Jeep</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 pl-5px mt-3" id="pickup">
                    <div class="card card-car">
                        <div class="p-2">
                            <img class="card-img-top" src="type-car-icon/pickup.png" alt="Card image cap">
                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title mb-0">Pickup</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="row mt-1">
                <div class="col-lg-3 col-md-6 col-6 pr-5px" id="crossover">
                    <div class="card card-car">
                        <div class="p-2">
                            <img class="card-img-top" src="type-car-icon/crossover.png" alt="Card image cap">
                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title mb-0">Crossover</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 pl-5px" id="hatchback">
                    <div class="card card-car">
                        <div class="p-2">
                            <img class="card-img-top" src="type-car-icon/hatchback.png" alt="Card image cap">
                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title mb-0">Hatchback</h3>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="row mt-1">
                <div class="col-lg-3 col-md-6 col-6 pr-5px" id="sedan">
                    <div class="card card-car">
                        <div class="p-2">
                            <img class="card-img-top" src="type-car-icon/sedan.png" alt="Card image cap">
                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title mb-0">Sedan</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 pl-5px" id="stationWagon">
                    <div class="card card-car">
                        <div class="p-2">
                            <img class="card-img-top" src="type-car-icon/station-wagon.png" alt="Card image cap">
                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title mb-0">Station Wagon</h3>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="row mt-1">
                <div class="col-lg-3 col-md-6 col-6 pr-5px" id="jeep">
                    <div class="card card-car">
                        <div class="p-2">
                            <img class="card-img-top" src="type-car-icon/jeep.png" alt="Card image cap">
                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title mb-0">Jeep</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 pl-5px" id="pickup">
                    <div class="card card-car">
                        <div class="p-2">
                            <img class="card-img-top" src="type-car-icon/pickup.png" alt="Card image cap">
                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title mb-0">Pickup</h3>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

    @else
    
    <section class="term">
        <div class="container">
            <h3 class="text-center">Pilih Polis Anda</h3>
            <div class="row mt-4">
                <div class="col-lg-4 col-md-4 col-6 pr-5px">
                    <div class="card">
                        <img src="assets-voxo/images/avanza.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">Polis Mobil Avanza</h3>
                            <p class="card-text">Asuransi Mobil</p>
                            <p class="card-text">No. Polis 123-456-7890</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-6 pl-5px">
                    <div class="card">
                        <img src="assets-voxo/images/avanza.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">Polis Mobil Avanza</h3>
                            <p class="card-text">Asuransi Mobil</p>
                            <p class="card-text">No. Polis 123-456-7890</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-6 pr-5px mt-3 mt-md-0">
                    <div class="card">
                        <img src="assets-voxo/images/avanza.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">Polis Mobil Avanza</h3>
                            <p class="card-text">Asuransi Mobil</p>
                            <p class="card-text">No. Polis 123-456-7890</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-6 pl-5px mt-3">
                    <div class="card">
                        <img src="assets-voxo/images/avanza.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">Polis Mobil Avanza</h3>
                            <p class="card-text">Asuransi Mobil</p>
                            <p class="card-text">No. Polis 123-456-7890</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endif

    <footer class="footer-sm-space">
        <div class="main-footer">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-contact">
                            <div class="brand-logo">
                                <a href="{{ route('landing-page') }}" class="footer-logo">
                                    <img src="assets-voxo/images/logo-claimoo.png" class="img-fluid blur-up lazyload"
                                        alt="logo">
                                </a>
                            </div>
                            <p class="font-light">Jl. Tole Iskandar No. 66, Depok, Jawa Barat 16412
                            </p>
                            <p>Download app from:</p>
                            <div>
                                <center><img src="assets-voxo/images/logos/android.png" width="100">
                                    <img src="assets-voxo/images/logos/ios.png" width="100">
                                </center>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-6">
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

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
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

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
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

                    <div class="col-xl-3 col-lg-4 col-sm-6 d-none d-sm-block">
                        <div class="footer-newsletter">
                            <h3>Hubungi kami:</h3>
                            <div class="footer-number">
                                <div class="footer-number-image">
                                    <img src="assets-voxo/images/shoes/other/headphone.png"
                                        class="img-fluid blur-up lazyload" alt="">
                                </div>

                                <div class="footer-number-container">
                                    <h3>+62 21 7783 7035</h3>
                                </div>
                            </div>

                            <div class="footer-details">
                                <ul>
                                    <li>
                                        <span>
                                            <b>Alamat: </b><span class="font-light">Jl. Tole Iskandar No. 66, Depok.
                                                Jawa Barat. 16412</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <b>Email: </b><span class="font-light"> admin@claimoo.com</span>
                                        </span>
                                    </li>
                                </ul>

                                <div>
                                    <img src="assets-voxo/images/logos/ojk.webp" width="200">
                                </div>
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
    </footer>

    <!-- tap to top Section Start -->
    <div class="tap-to-top">
        <a href="#home">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
    <!-- tap to top Section End -->

    <div class="bg-overlay"></div>

    <!-- latest jquery-->
    <script src="assets-voxo/js/jquery-3.5.1.min.js"></script>

    <!-- Add To Home js -->
    <script src="assets-voxo/js/pwa.js"></script>

    <!-- Bootstrap js-->
    <script src="assets-voxo/js/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- feather icon js-->
    <script src="assets-voxo/js/feather/feather.min.js"></script>

    <!-- lazyload js-->
    <script src="assets-voxo/js/lazysizes.min.js"></script>

    <!-- Slick js-->
    <script src="assets-voxo/js/slick/slick.js"></script>
    <script src="assets-voxo/js/slick/slick-animation.min.js"></script>
    <script src="assets-voxo/js/slick/custom_slick.js"></script>

    <!-- Filter Hide and show Js -->
    <script src="assets-voxo/js/filter.js"></script>

    <!-- Notify js-->
    <script src="assets-voxo/js/bootstrap/bootstrap-notify.min.js"></script>

    <!-- script js -->
    <script src="assets-voxo/js/theme-setting.js"></script>
    <script src="assets-voxo/js/script.js"></script>

</body>

</html>
