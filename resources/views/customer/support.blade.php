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
                    <i data-feather="edit"></i>
                    <span>Klaim</span>
                </a>
            </li>
            <li>
                <a href="{{ route('support') }}" class="active">
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

    <!-- Breadcrumb section start -->
    <section class="breadcrumb-section section-b-space">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col-12 search-section">
                    <h3>How can we help you?</h3>
                    <div class="search-bar">
                        <div class="input-group search-bar">
                            <input type="search" class="form-control" placeholder="Search">
                            <button class="input-group-text" id="basic-addon3">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb section end -->

    <!-- FAQ Section Start -->
    <section class="faq-section pt-0">
        <div class="container">
            <div class="row g-lg-5 g-4">
                <div class="col-md-4 zi-1">
                    <div class="faq-contain">
                        <div class="faq-image">
                            <img src="assets-voxo/images/inner-page/faq/guides.png" class="img-fluid blur-up lazyload"
                                alt="">
                        </div>
                        <h2>Guides</h2>
                        <h5>Guides related to buying products, latest trends, upcoming products.</h5>
                    </div>
                </div>

                <div class="col-md-4 zi-1">
                    <div class="faq-contain">
                        <div class="faq-image">
                            <img src="assets-voxo/images/inner-page/faq/faq.png" class="img-fluid blur-up lazyload" alt="">
                        </div>
                        <h2>FAQ</h2>
                        <h5>Need some help with your order or gor a question that you need answered.</h5>
                    </div>
                </div>

                <div class="col-md-4 zi-1">
                    <div class="faq-contain">
                        <div class="faq-image">
                            <img src="assets-voxo/images/inner-page/faq/community.png" class="img-fluid blur-up lazyload"
                                alt="">
                        </div>
                        <h2>Community</h2>
                        <h5>Join our large community who will help you in any query.</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ Section End -->

    <!-- FAQ details start -->
    <section class="faq-details section-b-space">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="faq-link-box">
                        <ul>
                            <li>
                                <a href="#1">
                                    <h4>1.</h4>
                                    <h5>How does it work?</h5>
                                </a>
                            </li>
                            <li>
                                <a href="#2">
                                    <h4>2.</h4>
                                    <h5>Another very important question in FAQ?</h5>
                                </a>
                            </li>
                            <li>
                                <a href="#3">
                                    <h4>3.</h4>
                                    <h5>Another important quesstion in FAQ?</h5>
                                </a>
                            </li>
                            <li>
                                <a href="#4">
                                    <h4>4.</h4>
                                    <h5>Another question in FAQ?</h5>
                                </a>
                            </li>
                            <li>
                                <a href="#5">
                                    <h4>5.</h4>
                                    <h5>Another very important question in FAQ?</h5>
                                </a>
                            </li>
                            <li>
                                <a href="#6">
                                    <h4>6.</h4>
                                    <h5>Another question in FAQ?</h5>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 col-md-8">
                    <div class="faq-heading" id="1">
                        <i data-feather="help-circle" class="theme-color"></i>
                        <div class="faq-option">
                            <h3>How does it work?</h3>
                            <h6 class="font-light">When choosing a static caravan you will probably look for the holiday
                                park which meets
                                your requirements and the move onto the caravan selection the right holiday park is
                                vital to ensure a long term ownership.</h6>
                        </div>
                    </div>

                    <div class="faq-heading" id="2">
                        <i data-feather="help-circle" class="theme-color"></i>
                        <div class="faq-option">
                            <h3>Another very important question in FAQ?</h3>
                            <h6 class="font-light">Now for yhe caravan and looking for the right caravan to suit your
                                needs. Most of the
                                parks will deal with majority of the manufactures. If buying directly from the park you
                                will probably deal with a salesperson instead of direct with the manufactures. You Can
                                collect brochures direct from the manufactures. you can collect brochures direct from
                                the manufactures to research all the models and specifications which will not only
                                ensure you choose the correct model but also help you to understand what to look for and
                                choice of different modals. To see the caravan you can vixit them at key caravan
                                exhibitions as most top manufactures will display there, see events.</h6>
                        </div>
                    </div>

                    <div class="faq-heading" id="3">
                        <i data-feather="help-circle" class="theme-color"></i>
                        <div class="faq-option">
                            <h3>Another important quesstion in FAQ?</h3>
                            <h6 class="font-light">The static holiday caravan has been designed for holiday use instead
                                of full time
                                living. With its modern construction and use of high quality materials the static
                                caravan should be built to British and European standard: BS EN 1647 but some luxury
                                caravans are built to BS 3632 confirming to residential standards.</h6>
                        </div>
                    </div>

                    <div class="faq-heading" id="4">
                        <i data-feather="help-circle" class="theme-color"></i>
                        <div class="faq-option">
                            <h3>Another question in FAQ?</h3>
                            <h6 class="font-light">Normal static caravan can come in either one or two sectiond with
                                width up to 22ft and
                                60ft long. If you have a one piece model this is a single unit and the two piece is
                                known as a twin and usually assembled on site.</h6>
                        </div>
                    </div>

                    <div class="faq-heading" id="5">
                        <i data-feather="help-circle" class="theme-color"></i>
                        <div class="faq-option">
                            <h3>Another very important question in FAQ?</h3>
                            <h6 class="font-light">Decide on how many bedrooms you require as most caravans can be from
                                2 to 4 bedrooms but
                                up to eight berths. manufactures will normally have their own layout but will offer but
                                will a number of ranges depending on your budget.</h6>
                        </div>
                    </div>

                    <div class="faq-heading" id="6">
                        <i data-feather="help-circle" class="theme-color"></i>
                        <div class="faq-option">
                            <h3>Another question in FAQ?</h3>
                            <h6 class="font-light">The static holiday caravan has been designed for holiday use instead
                                of full time
                                living. With its modern construction and use of high quality materials the static
                                caravan should be built to British and European standard: BS EN 1647 but some luxury
                                caravans are built to BS 3632 confirming to residential standards.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ details end -->

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
