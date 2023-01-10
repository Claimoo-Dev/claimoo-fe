<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="manifest" href="./manifest.json">
    <link rel="icon" href="assets-voxo/images/favicon/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets-voxo/images/favicon/favicon.png">
    <meta name="theme-color" content="#073f78">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Claimoo">
    <meta name="msapplication-TileImage" content="assets-voxo/images/favicon/favicon.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Claimoo">
    <meta name="keywords" content="Claimoo">
    <meta name="author" content="Claimoo">
    <link rel="icon" href="assets/img/favicon.png" type="image/x-icon" />
    <title>Claimoo - Klaim dan Inspeksi Mobil Berbasis AI</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Hind:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hind:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="assets-voxo/css/vendors/bootstrap.css">

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="assets-voxo/css/vendors/font-awesome.css">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="assets-voxo/css/vendors/feather-icon.css">

    <!-- Icon Start -->
    <link rel="icon" href="assets/img/favicon.png">

    <!-- animation css -->
    <link rel="stylesheet" type="text/css" href="assets-voxo/css/vendors/animate.css">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="assets-voxo/css/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="assets-voxo/css/vendors/slick/slick-theme.css">

    <!-- Theme css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="assets-voxo/css/demo3.css">
    <link id="color-link" rel="stylesheet" type="text/css" href="assets-voxo/css/custom-style.css">

</head>

<body class="theme-color2 light ltr">
    <!-- header start -->
    <header id="home">
        <div class="main-header navbar-searchbar">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-menu">
                            <div class="menu-left">
                                <div class="toggle-nav">
                                    <i data-feather="align-justify" class="sidebar-bar"></i>
                                </div>
                                <div class="brand-logo">
                                    <a href="{{ route('landing-page') }}">
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
                                                        class="btn btn-solid-default btn-spacing w-100">TAMBAHKAN KE
                                                        HOMESCREEN</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <div class="menu-right">
                                <ul>
                                    <li class="onhover-dropdown wislist-dropdown">
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
                                                        href="{{ route('landing-page') }}">EN</a>
                                                </li>
                                                <li class="w-100">
                                                    <a class="dropdown-item"
                                                        href="{{ route('landing-page') }}">ID</a>
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
                                                        href="{{ route('landing-page') }}">Log In</a>
                                                </li>
                                                <li class="w-100">
                                                    <a class="dropdown-item"
                                                        href="{{ route('landing-page') }}">Daftar</a>
                                                </li>
                                            </ul>
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
                <a href="javascript:void(0)" class="active">
                    <i data-feather="home"></i>
                    <span>Beranda</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i data-feather="shopping-bag"></i>
                    <span>Belanja</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i color="red" data-feather="edit"></i>
                    <span>Klaim</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i data-feather="help-circle"></i>
                    <span>Bantuan</span>
                </a>
            </li>
            <li>
                <a href="user-dashboard.html">
                    <i data-feather="user"></i>
                    <span>Akun</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- mobile fix menu end -->

    <section class="pt-0 overflow-hidden">
        <div class="banner">
            <div class="slider">
                <img class="img-fluid blur-up lazyload" src="assets-voxo/images/innova.png" alt="">
                <h2 class="slider-text">Lorem Ipsum Dolor Sit Amet</h2>
            </div>
            <div class="slider">
                <img class="img-fluid blur-up lazyload" src="assets-voxo/images/sienta.png" alt="">
                <h2 class="slider-text">Lorem Ipsum Dolor Sit Amet</h2>
            </div>
            <div class="slider">
                <img class="img-fluid blur-up lazyload" src="assets-voxo/images/avanza.png" alt="">
                <h2 class="slider-text">Lorem Ipsum Dolor Sit Amet</h2>
            </div>
            <div class="slider">
                <img class="img-fluid blur-up lazyload" src="assets-voxo/images/pwa-claimoo.png" alt="">
                <h2 class="slider-text">Lorem Ipsum Dolor Sit Amet</h2>
            </div>
        </div>
    </section>

    <section class="about pt-0">
        <div class="container">
            <div class="row about-row">
                <div class="col-lg-6">
                    <div class="about-image">
                        <img class="blur-up lazyload" src="assets-voxo/images/innova.png" alt="">
                    </div>
                </div>

                <div class="col-lg-6 mt-lg-0">
                    <div class="about-body">
                        <div class="about-title text-center">
                            <h2 class="about-title-h2">Tentang Claimoo</h2>
                        </div>
                        <div class="about-description mt-3 mt-lg-5">
                            <p>Claimoo adalah aplikasi klaim & inspeksi mobil berdasarkan deteksi kerusakan berbasis
                                Artificial
                                Intelligence dengan menyediakan sistem yang cerdas dan handal. Bekerjasama dengan
                                Asuransi
                                terpercaya.</p>
                        </div>
                        <a href="{{ route('landing-page') }}">
                            <div class="about-footer-parent mt-3 mt-lg-5">
                                <div class="about-footer text-center">
                                    Selengkapnya
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="about-image">
            <img class="blur-up lazyload" src="assets-voxo/images/innova.png" alt="">
        </div>
        <div class="about-body">
            <div class="container">
                <div class="about-title text-center">
                    <h2 class="about-title-h2">Tentang Claimoo</h2>
                </div>
                <div class="about-description mt-3">
                    <p>Claimoo adalah aplikasi klaim & inspeksi mobil berdasarkan deteksi kerusakan berbasis Artificial
                        Intelligence dengan menyediakan sistem yang cerdas dan handal. Bekerjasama dengan Asuransi
                        terpercaya.</p>
                </div>
                <a href="{{ route('landing-page') }}">
                    <div class="text-center" style="width: 130px;">
                        <div class="about-footer text-center mt-3">
                            Selengkapnya
                        </div>
                    </div>
                </a>
            </div>
        </div> -->
    </section>

    <!-- Custome services Section Start -->
    <section class="service-section pt-5 pb-4">
        <div class="container">
            <div class="text-center mb-4 mb-lg-5">
                <h2>Keunggulan Kami</h2>
            </div>
            <div class="row g-4 g-sm-3">
                <div class="col-xl-3 col-sm-6">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <svg>
                                <use xlink:href="assets-voxo/svg/icons.svg#customer"></use>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3 class="mb-2">Proses Klaim Cepat</h3>
                            <span class="font-light">Dengan teknologi Machine Learning, membuat siapapun bisa menikmati
                                cepatnya proses klaim</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <svg>
                                <use xlink:href="assets-voxo/svg/icons.svg#shop"></use>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3 class="mb-2">Pendaftaran Mudah</h3>
                            <span class="font-light">Dapatkan asuransi mobilmu kapanpun dan dimanapun, tanpa
                                survei!</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <svg>
                                <use xlink:href="assets-voxo/svg/icons.svg#secure-payment"></use>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3 class="mb-2">Pembayaran yang Aman</h3>
                            <span class="font-light">Kami menerima berbagai macam jenis pembayaran.</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <svg>
                                <use xlink:href="assets-voxo/svg/icons.svg#return"></use>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3 class="mb-2">Free Returns</h3>
                            <span class="font-light">30-days free return policy.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Custome services Section End -->

    <section class="package pt-5 pb-5">
        <div class="container">
            <div class="text-center mb-4">
                <h2>Paket Member</h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card text-center">
                        <div class="card-header">
                            Free
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#" class="btn btn-solid-default btn-offer">Daftar</a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 mt-lg-0 mt-5">
                    <div class="card text-center">
                        <div class="card-header">
                            Premium
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#" class="btn btn-solid-default btn-offer">Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="poster-section ratio2_1 pt-5 pb-5">
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="poster-image">
                            <h2>Sekarang, lebih mudah memiliki asuransi mobil</h2>
                            <p class="mt-4">Daftar, Pilih Polis, dan Klaim langsung dari ponsel Anda. Ucapkan selamat
                                tinggal pada
                                asuransi mobil yang rumit. Tonton video untuk mengetahui lebih lanjut.</p>
                            <a href="{{ route('landing-page') }}">
                                <div class="btn btn-solid-default btn-offer text-center mt-3">
                                    DAPATKAN PENAWARAN TERBAIK
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-lg-0 mt-4">
                        <div class="poster-image">
                            <img src="assets-voxo/images/sienta.png" class="img-fluid bg-img blur-up lazyload" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- brand section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="text-center mb-4">
                <h2>Mitra</h2>
            </div>
            <div class="row">
                <div class="col">
                    <div class="brand-slider">
                        <div>
                            <div class="brand-image">
                                <img src="assets-voxo/images/brand/1.png" class="img-fluid blur-up lazyload"
                                    alt="brand logo">
                            </div>
                        </div>
                        <div>
                            <div class="brand-image">
                                <img src="assets-voxo/images/brand/2.png" class="img-fluid blur-up lazyload"
                                    alt="brand logo">
                            </div>
                        </div>
                        <div>
                            <div class="brand-image">
                                <img src="assets-voxo/images/brand/3.png" class="img-fluid blur-up lazyload"
                                    alt="brand logo">
                            </div>
                        </div>
                        <div>
                            <div class="brand-image">
                                <img src="assets-voxo/images/brand/4.png" class="img-fluid blur-up lazyload"
                                    alt="brand logo">
                            </div>
                        </div>
                        <div>
                            <div class="brand-image">
                                <img src="assets-voxo/images/brand/5.png" class="img-fluid blur-up lazyload"
                                    alt="brand logo">
                            </div>
                        </div>
                        <div>
                            <div class="brand-image">
                                <img src="assets-voxo/images/brand/6.png" class="img-fluid blur-up lazyload"
                                    alt="brand logo">
                            </div>
                        </div>
                        <div>
                            <div class="brand-image">
                                <img src="assets-voxo/images/brand/4.png" class="img-fluid blur-up lazyload"
                                    alt="brand logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- brand section end -->

    <section class="reference">
        <div class="container">
            <div class="reference-title">
                <h2 class="reference-title-h2">Ajak teman Anda dan dapatkan poin nya</h2>
            </div>
            <div class="reference-description mt-4">
                <p>Anda akan mendapatkan 150 poin ketika teman Anda menyelesaikan pembelian polis pertama nya dengan
                    menggunakan kode referensi Anda. Gunakan poin Anda untuk mendapatkan hadiah.</p>
            </div>
            <a href="{{ route('landing-page') }}">
                <div class="reference-footer text-center mt-4">
                    AJAK TEMAN ANDA
                </div>
            </a>
        </div>
    </section>

    <!-- footer start -->
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
                    <!-- <div class="col-md-6"> -->
                    <!-- <ul>
                            <li class="font-dark">Kami menerima</li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="assets-voxo/images/payment-icon/1.jpg" class="img-fluid blur-up lazyload"
                                        alt="payment icon"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="assets-voxo/images/payment-icon/2.jpg" class="img-fluid blur-up lazyload"
                                        alt="payment icon"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="assets-voxo/images/payment-icon/3.jpg" class="img-fluid blur-up lazyload"
                                        alt="payment icon"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="assets-voxo/images/payment-icon/4.jpg" class="img-fluid blur-up lazyload"
                                        alt="payment icon"></a>
                            </li>
                        </ul> -->
                    <!-- </div> -->
                    <div class="col-md-12">
                        <p class="mb-0 font-dark text-center">© 2023 Claimoo. Hak Cipta Dilindungi Undang-undang</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->



    <!-- Quick view modal start -->
    <div class="modal fade quick-view-modal" id="quick-view">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row gy-4">
                        <div class="col-lg-6">
                            <div class="quick-view-image">
                                <div class="quick-view-slider ratio_2">
                                    <div>
                                        <img src="assets-voxo/images/shoes/product/1.jpg"
                                            class="img-fluid bg-img blur-up lazyload" alt="product">
                                    </div>
                                    <div>
                                        <img src="assets-voxo/images/shoes/product/2.jpg"
                                            class="img-fluid bg-img blur-up lazyload" alt="product">
                                    </div>
                                    <div>
                                        <img src="assets-voxo/images/shoes/product/3.jpg"
                                            class="img-fluid bg-img blur-up lazyload" alt="product">
                                    </div>
                                    <div>
                                        <img src="assets-voxo/images/shoes/product/4.jpg"
                                            class="img-fluid bg-img blur-up lazyload" alt="product">
                                    </div>
                                </div>
                                <div class="quick-nav">
                                    <div>
                                        <img src="assets-voxo/images/shoes/product/1.jpg"
                                            class="img-fluid blur-up lazyload" alt="product">
                                    </div>
                                    <div>
                                        <img src="assets-voxo/images/shoes/product/2.jpg"
                                            class="img-fluid blur-up lazyload" alt="product">
                                    </div>
                                    <div>
                                        <img src="assets-voxo/images/shoes/product/3.jpg"
                                            class="img-fluid blur-up lazyload" alt="product">
                                    </div>
                                    <div>
                                        <img src="assets-voxo/images/shoes/product/4.jpg"
                                            class="img-fluid blur-up lazyload" alt="product">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-right">
                                <h2 class="mb-2">Latest Sports Shoes</h2>
                                <ul class="rating mt-1">
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li class="font-light">(In stock)</li>
                                </ul>
                                <div class="price mt-3">
                                    <h3>$20.00</h3>
                                </div>
                                <div class="color-types">
                                    <h4>colors</h4>
                                    <ul class="color-variant mb-0">
                                        <li class="bg-half-light selected">
                                        </li>
                                        <li class="bg-light1"></li>
                                        <li class="bg-blue1"></li>
                                        <li class="bg-black1"></li>
                                    </ul>
                                </div>
                                <div class="size-detail">
                                    <h4>size</h4>
                                    <ul class="">
                                        <li class="selected">S</li>
                                        <li>M</li>
                                        <li>L</li>
                                        <li>XL</li>
                                    </ul>
                                </div>
                                <div class="product-details">
                                    <h4>product details</h4>
                                    <ul>
                                        <li>
                                            <span class="font-light">Style :</span> Boat Shoe
                                        </li>
                                        <li>
                                            <span class="font-light">Catgory :</span> Sports Shoes
                                        </li>
                                        <li>
                                            <span class="font-light">Tags:</span> Summer
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-btns">
                                    <a href="cart.html" class="btn btn-solid-default btn-sm">Add to cart</a>
                                    <a href="product-left-sidebar.html" class="btn btn-solid-default btn-sm">View
                                        details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick view modal end -->

    <!-- Newsletter modal start -->
    <!-- untuk news letter-->
    <!-- Newsletter modal end -->

    <!-- Coockie Section Start -->
    <!-- <div class="cookie-bar-section">
        <img src="assets-voxo/images/cookie.png" alt="">
        <div class="content">
            <h3>Cookies Consent</h3>
            <p class="font-light">This website use cookies to ensure you get the best experience on our website.</p>
            <div class="cookie-buttons">
                <button class="btn btn-solid-default" id="button">I understand</button>
                <a href="javascript:void(0)" class="btn default-light1">Learn more</a>
            </div>
        </div>
    </div> -->
    <!-- Coockie Section End -->

    <!-- Cart Successful Start -->
    <div class="modal fade cart-modal" id="addtocart" tabindex="-1" role="dialog" aria-label="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="modal-contain">
                        <div>
                            <div class="modal-messages">
                                <i class="fas fa-check"></i> 3-stripes full-zip hoodie successfully added to
                                you cart.
                            </div>
                            <div class="modal-product">
                                <div class="modal-contain-img">
                                    <img src="assets-voxo/images/fashion/instagram/4.jpg"
                                        class="img-fluid blur-up lazyload" alt="">
                                </div>
                                <div class="modal-contain-details">
                                    <h4>Premier Cropped Skinny Jean</h4>
                                    <p class="font-light my-2">Yellow, Qty : 3</p>
                                    <div class="product-total">
                                        <h5>TOTAL : <span>$1,140.00</span></h5>
                                    </div>
                                    <div class="shop-cart-button mt-3">
                                        <a href="shop-left-sidebar.html"
                                            class="btn default-light-theme conti-button default-theme default-theme-2 rounded">CONTINUE
                                            SHOPPING</a>
                                        <a href="cart.html"
                                            class="btn default-light-theme conti-button default-theme default-theme-2 rounded">VIEW
                                            CART</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ratio_asos mt-4">
                        <div class="container">
                            <div class="row m-0">
                                <div class="col-sm-12 p-0">
                                    <div
                                        class="product-wrapper product-style-2 slide-4 p-0 light-arrow bottom-space spacing-slider">
                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-left-sidebar.html">
                                                            <img src="assets-voxo/images/fashion/product/front/1.jpg"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">$78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-left-sidebar.html">
                                                            <img src="assets-voxo/images/fashion/product/front/2.jpg"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">$78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-left-sidebar.html">
                                                            <img src="assets-voxo/images/fashion/product/front/3.jpg"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">$78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-left-sidebar.html">
                                                            <img src="assets-voxo/images/fashion/product/front/4.jpg"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">$78.00</h3>
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
        </div>
    </div>
    <!-- Cart Successful End -->

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

    <!-- Bootstrap js-->
    <script src="assets-voxo/js/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- feather icon js-->
    <script src="assets-voxo/js/feather/feather.min.js"></script>

    <!-- lazyload js-->
    <script src="assets-voxo/js/lazysizes.min.js"></script>

    <!-- Add To Home js -->
    <script src="assets-voxo/js/pwa.js"></script>

    <!-- Timer Js -->
    <script src="assets-voxo/js/timer1.js"></script>

    <!-- Slick js-->
    <script src="assets-voxo/js/slick/slick.js"></script>
    <script src="assets-voxo/js/slick/slick-animation.min.js"></script>
    <script src="assets-voxo/js/slick/custom_slick.js"></script>

    <!-- newsletter js -->
    <script src="assets-voxo/js/newsletter.js"></script>

    <!-- add to cart modal resize -->
    <script src="assets-voxo/js/cart_modal_resize.js"></script>

    <!-- Notify js-->
    <script src="assets-voxo/js/bootstrap/bootstrap-notify.min.js"></script>

    <!-- script js -->
    <script src="assets-voxo/js/theme-setting.js"></script>
    <script src="assets-voxo/js/script.js"></script>
    <script src="assets-voxo/js/custom-script.js"></script>
</body>

</html>
