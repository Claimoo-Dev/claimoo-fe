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
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-menu">
                            <div class="menu-left">
                                <div class="brand-logo">
                                    <a href="{{ route('landing-page') }}">
                                        <img src="assets-voxo/images/logo-claimoo.png"
                                            class="img-fluid blur-up lazyload" alt="logo">
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
    <div class="mobile-menu">
        <ul>
            <li>
                <a href="{{ route('landing-page') }}" class="active">
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
                    <i data-feather="edit"></i>
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

    <div class="content-container">
        <section class="section-banner overflow-hidden">
            <div class="banner" id="banner">
                <div class="slider">
                    <img class="img-fluid blur-up lazyload img-banner" src="assets-voxo/images/car5.jpg" alt="">
                    <h2 class="slider-text">Aplikasi inspeksi Mobil tercerdas di Indonesia</h2>
                </div>
                <div class="slider">
                    <img class="img-fluid blur-up lazyload img-banner" src="assets-voxo/images/car5.jpg" alt="">
                    <h2 class="slider-text">Testing</h2>
                </div>
            </div>
        </section>

        <section class="about">
            <div class="container">
                <div class="row about-row">
                    <div class="col-4 col-about-image pe-1">
                        <div class="about-image">
                            <img class="img-fluid blur-up lazyload" src="assets-voxo/images/about.jpg" alt="">
                        </div>
                    </div>

                    <div class="col-8 ps-1 col-about-body">
                        <div class="about-body">
                            <div class="about-title">
                                <h3 class="about-title-h3">Klaim Asuransi Tercepat</h3>
                            </div>
                            <div class="about-description">
                                <p>Claimoo adalah aplikasi klaim & inspeksi mobil berdasarkan deteksi kerusakan berbasis
                                    Artificial
                                    Intelligence dengan menyediakan sistem yang cerdas dan handal. Bekerjasama dengan
                                    Asuransi
                                    terpercaya.</p>
                            </div>
                            <a href="{{ route('landing-page') }}">
                                <div class="about-footer-parent">
                                    <div class="about-footer text-center">
                                        Selengkapnya
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="service-section">
            <div class="container">
                <div class="mb-4">
                    <h3 class="service-title">Keunggulan Kami</h3>
                </div>
                <div class="columns">
                    <div class="column">
                        <img class="img-fluid" src="assets-voxo/images/easy-registration.png" alt="">
                        <p>Pendaftaran Mudah</p>
                    </div>
                    <div class="column me-1 ms-1">
                        <img class="img-fluid" src="assets-voxo/images/quick-claim.png" alt="">
                        <p>Proses Klaim Cepat</p>
                    </div>
                    <div class="column">
                        <img class="img-fluid" src="assets-voxo/images/secure-payment.png" alt="">
                        <p>Pembayaran Aman</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="package">
            <div class="container">
                <div class="mb-4">
                    <h3 class="service-title">Paket Member</h3>
                </div>
                <div class="card mb-3 package-card">
                    <div class="row g-0">
                        <div class="col-4 package-image">
                            <img src="assets-voxo/images/reguler.png" class="img-fluid rounded-start">
                        </div>
                        <div class="col-8">
                            <div class="card-body ps-0">
                                <h5 class="card-title package-card-title">Reguler</h5>
                                <p class="card-text">Nikmati fitur gratis deteksi kerusakan, tingkat kerusakan, estimasi
                                    biaya</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card package-card">
                    <div class="row g-0">
                        <div class="col-4 package-image">
                            <img src="assets-voxo/images/priority.png" class="img-fluid rounded-start">
                        </div>
                        <div class="col-8">
                            <div class="card-body ps-0">
                                <h5 class="card-title package-card-title">Prioritas</h5>
                                <p class="card-text">Dengan membeli Polis Asuransi melalui kami, anda
                                    akan mendapatkan benefit klaim dengan teknologi AI
                                    yang cepat dan akurat, tanpa survey dan diberikan
                                    rekomendasi bengkel yang sesuai kebutuhan Anda</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="poster-section ratio2_1">
            <div class="container">
                <div class="poster-image">
                    <h3>Sekarang, lebih mudah memiliki asuransi mobil</h3>
                    <p>Daftar, beli Polis, dan Klaim langsung dari ponsel Anda. Ucapkan selamat
                        tinggal pada
                        asuransi mobil yang rumit. Tonton video untuk mengetahui lebih lanjut.</p>
                    <a href="{{ route('landing-page') }}">
                        <div class="btn-offer text-center">
                            Dapatkan Penawaran Terbaik
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section class="section-b-space">
            <div class="container">
                <div class="text-center mb-4">
                    <h3 class="service-title">Mitra</h3>
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

        <section class="referenceimg">
            <div class="container">
                <div class="reference-title">
                    <h3 class="reference-title-h3">Ajak teman Anda dan dapatkan poin nya</h3>
                </div>
                <div class="reference-description">
                    <p>Anda akan mendapatkan 150 poin ketika teman Anda menyelesaikan pembelian polis pertama nya dengan
                        menggunakan kode referensi Anda. Gunakan poin Anda untuk mendapatkan hadiah.</p>
                </div>
                <a href="{{ route('landing-page') }}">
                    <div class="reference-footer text-center">
                        Ajak Teman Anda
                    </div>
                </a>
            </div>
        </section>

        <section class="help-section">
            <div class="container">
                <div class="mb-4">
                    <h3 class="help-title">Butuh bantuan? Hubungi layanan pelanggan kami di :</h3>
                </div>
                <div class="help-parent">
                    <div class="help-item text-center">
                        <img class="img-fluid" src="assets-voxo/images/telp.png" alt="">
                        <p> Telepon </p>
                    </div>
                    <div class="help-item ms-1 me-1 text-center">
                        <img class="img-fluid" src="assets-voxo/images/email.png" alt="">
                        <p> Email </p>
                    </div>
                    <div class="help-item me-1 text-center">
                        <img class="img-fluid" src="assets-voxo/images/wa.png" alt="">
                        <p> WhatsApp </p>
                    </div>
                    <div class="help-item text-center">
                        <img class="img-fluid" src="assets-voxo/images/chat.png" alt="">
                        <p> Chat </p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- footer start -->
    <footer class="footer-sm-space">
        <div class="main-footer">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-12">
                        <div class="footer-contact">
                            <div class="brand-logo">
                                <a href="{{ route('landing-page') }}" class="footer-logo">
                                    <img src="assets-voxo/images/logo-claimoo.png" class="img-fluid blur-up lazyload"
                                        alt="logo">
                                </a>
                            </div>
                            <p class="font-light">Jl. Tole Iskandar No. 66, Depok, Jawa Barat 16412
                            </p>
                            <!-- <p>Download app from:</p>
                            <div>
                                <center><img src="assets-voxo/images/logos/android.png" width="100">
                                    <img src="assets-voxo/images/logos/ios.png" width="100">
                                </center>
                            </div> -->
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

                    <!-- <div class="col-xl-3 col-lg-4 col-sm-6 d-none d-sm-block">
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
                    </div> -->
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
    <!-- footer end -->

    <div class="modal fade modal-navbar" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                            <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                                aria-controls="collapseExample">
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
                            <a data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false"
                                aria-controls="collapseExample1">
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
