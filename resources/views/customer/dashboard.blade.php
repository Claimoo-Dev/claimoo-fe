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
    <title>Claimoo | DashBoard</title>

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
                                <div class="toggle-nav">
                                    <i data-feather="align-justify" class="sidebar-bar"></i>
                                </div>
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
                <div class="col-12">
                    <h3>Dasbor User</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('landing-page') }}">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Dasbor User</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb section end -->

    <!-- user dashboard section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs custome-nav-tabs flex-column category-option" id="myTab">
                        <li class="nav-item mb-2">
                            <button class="nav-link font-light active" id="tab" data-bs-toggle="tab"
                                data-bs-target="#dash" type="button"><i class="fas fa-angle-right"></i>Dasbor</button>
                        </li>

                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="1-tab" data-bs-toggle="tab" data-bs-target="#order"
                                type="button"><i class="fas fa-angle-right"></i>Polis Saya</button>
                        </li>

                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="2-tab" data-bs-toggle="tab"
                                data-bs-target="#wishlist" type="button"><i class="fas fa-angle-right"></i>Deteksi
                                Kerusakan</button>
                        </li>

                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="3-tab" data-bs-toggle="tab"
                                data-bs-target="#profile" type="button"><i
                                    class="fas fa-angle-right"></i>Profil</button>
                        </li>

                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="4-tab" data-bs-toggle="tab" data-bs-target="#reward"
                                type="button"><i class="fas fa-angle-right"></i>Dapatkan Penghargaan</button>
                        </li>

                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="5-tab" data-bs-toggle="tab" data-bs-target="#about"
                                type="button"><i class="fas fa-angle-right"></i>Tentang Aplikasi</button>
                        </li>

                    </ul>
                </div>

                <div class="col-lg-9">
                    <div class="filter-button dash-filter dashboard">
                        <button class="btn btn-primary btn-sm fw-bold filter-btn">Show Menu</button>
                    </div>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="dash">
                            <div class="dashboard-right">
                                <div class="dashboard">
                                    <div class="page-title title title1 title-effect">
                                        <h2>Dasbor Saya</h2>
                                    </div>
                                    <div class="welcome-msg">
                                        <h6 class="font-light dashboard-text">Selamat Datang, <span>User !</span></h6>
                                        <span class="badge bg-primary dashboard-badge">Premium</span>
                                        <!-- <p class="font-light">From your My Account Dashboard you have the ability to
                                            view a snapshot of your recent account activity and update your account
                                            information. Select a link below to view or edit information.</p> -->
                                    </div>

                                    <div class="order-box-contain my-4">
                                        <div class="row g-4">
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="order-box">
                                                    <div class="order-box-image">
                                                        <img src="assets-voxo/images/svg/box.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </div>
                                                    <div class="order-box-contain">
                                                        <img src="assets-voxo/images/svg/box1.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                        <div>
                                                            <h5 class="font-light">total polis</h5>
                                                            <h3>5</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-sm-6">
                                                <div class="order-box">
                                                    <div class="order-box-image">
                                                        <img src="assets-voxo/images/svg/sent.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </div>
                                                    <div class="order-box-contain">
                                                        <img src="assets-voxo/images/svg/sent1.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                        <div>
                                                            <h5 class="font-light">deteksi kerusakan</h5>
                                                            <h3>10</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="col-lg-4 col-sm-6">
                                                <div class="order-box">
                                                    <div class="order-box-image">
                                                        <img src="assets-voxo/images/svg/wishlist.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </div>
                                                    <div class="order-box-contain">
                                                        <img src="assets-voxo/images/svg/wishlist1.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                        <div>
                                                            <h5 class="font-light">wishlist</h5>
                                                            <h3>63874</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>

                                    <div class="box-account box-info">
                                        <div class="box-head">
                                            <h3>Informasi Akun</h3>
                                        </div>
                                        <div class="row">
                                            <!-- <div class="col-sm-6">
                                                <div class="box">
                                                    <div class="box-title">
                                                        <h4>Informasi Kontak</h4><a
                                                            href="javascript:void(0)">Edit</a>
                                                    </div>
                                                    <div class="box-content">
                                                        <h6 class="font-light">User</h6>
                                                        <h6 class="font-light">user@gmail.com</h6>
                                                        <a href="javascript:void(0)">Change Password</a>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="col-sm-6">
                                                <div class="box">
                                                    <div class="box-title">
                                                        <h4>Buletin</h4>
                                                    </div>
                                                    <div class="box-content">
                                                        <h6 class="font-light">Saat ini Anda tidak berlangganan buletin
                                                            apa pun.</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade table-dashboard dashboard wish-list-section" id="order">
                            <div class="box-head mb-3">
                                <h3>Polis Saya</h3>
                                <button class="btn btn-primary btn-sm fw-bold ms-auto" data-bs-toggle="modal"
                                    data-bs-target="#addAddress"><i class="fas fa-plus"></i>
                                    Beli Polis</button>
                            </div>
                            <div class="save-details-box">
                                <div class="row g-3">
                                    <div class="col-xl-4 col-md-6">
                                        <div class="save-details">
                                            <div class="save-name">
                                                <h5>Polis Mobil Avanza</h5>
                                                <!-- <div class="save-position">
                                                    <h6>Home</h6>
                                                </div> -->
                                            </div>

                                            <div class="save-address">
                                                <p class="font-light">Asuransi Mobil</p>
                                                <p class="font-light">Lorem Ipsum Dolor Sit Amet</p>
                                            </div>

                                            <div class="mobile">
                                                <p class="font-light mobile">No. Polis 123-456-7890</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-md-6">
                                        <div class="save-details">
                                            <div class="save-name">
                                                <h5>Polis Mobil Avanza</h5>
                                                <!-- <div class="save-position">
                                                    <h6>Home</h6>
                                                </div> -->
                                            </div>

                                            <div class="save-address">
                                                <p class="font-light">Asuransi Mobil</p>
                                                <p class="font-light">Lorem Ipsum Dolor Sit Amet</p>
                                            </div>

                                            <div class="mobile">
                                                <p class="font-light mobile">No. Polis 123-456-7890</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-md-6">
                                        <div class="save-details">
                                            <div class="save-name">
                                                <h5>Polis Mobil Avanza</h5>
                                                <!-- <div class="save-position">
                                                    <h6>Home</h6>
                                                </div> -->
                                            </div>

                                            <div class="save-address">
                                                <p class="font-light">Asuransi Mobil</p>
                                                <p class="font-light">Lorem Ipsum Dolor Sit Amet</p>
                                            </div>

                                            <div class="mobile">
                                                <p class="font-light mobile">No. Polis 123-456-7890</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade table-dashboard dashboard wish-list-section" id="wishlist">
                            <div class="box-head mb-3">
                                <h3>Daftar Foto Deteksi Kerusakan</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table cart-table">
                                    <thead>
                                        <tr class="table-head">
                                            <th scope="col">foto asli</th>
                                            <th scope="col">foto hasil</th>
                                            <th scope="col">tipe mobil</th>
                                            <th scope="col">status deteksi</th>
                                            <th scope="col">deskripsi kerusakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#">
                                                    <img src="assets-voxo/images/fashion/product/front/1.jpg"
                                                        class="blur-up lazyload" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <a href="#">
                                                    <img src="assets-voxo/images/fashion/product/front/1.jpg"
                                                        class="blur-up lazyload" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <p class="fs-6 m-0">MPV</p>
                                            </td>
                                            <td>
                                                <p class="fs-6">Foto Layak Proses</p>
                                            </td>
                                            <td>
                                                <p class="m-0">Lecet</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#">
                                                    <img src="assets-voxo/images/fashion/product/front/1.jpg"
                                                        class="blur-up lazyload" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <a href="#">
                                                    <img src="assets-voxo/images/fashion/product/front/1.jpg"
                                                        class="blur-up lazyload" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <p class="fs-6 m-0">SUV</p>
                                            </td>
                                            <td>
                                                <p class="fs-6">Foto Tidak Layak Proses</p>
                                            </td>
                                            <td>
                                                <p class="m-0"></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#">
                                                    <img src="assets-voxo/images/fashion/product/front/1.jpg"
                                                        class="blur-up lazyload" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <a href="#">
                                                    <img src="assets-voxo/images/fashion/product/front/1.jpg"
                                                        class="blur-up lazyload" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <p class="fs-6 m-0">Jeep</p>
                                            </td>
                                            <td>
                                                <p class="fs-6">Foto Layak Proses</p>
                                            </td>
                                            <td>
                                                <p class="m-0">Penyok</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade dashboard-profile dashboard" id="profile">
                            <div class="box-head">
                                <h3>Profil</h3>
                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                    data-bs-target="#resetEmail">Edit</a>
                            </div>
                            <ul class="dash-profile">
                                <li>
                                    <div class="left">
                                        <h6 class="font-light">Nama Lengkap</h6>
                                    </div>
                                    <div class="right">
                                        <h6>Yusuf Rijal Robbani</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="left">
                                        <h6 class="font-light">Alamat</h6>
                                    </div>
                                    <div class="right">
                                        <h6>Jl. Jerman No. 146, Kalibaru, Cilodong, Kota Depok</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="left">
                                        <h6 class="font-light">Tanggal registrasi</h6>
                                    </div>
                                    <div class="right">
                                        <h6>10 Januari 2023</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="left">
                                        <h6 class="font-light">Nomor Telepon</h6>
                                    </div>
                                    <div class="right">
                                        <h6>082199717914</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="left">
                                        <h6 class="font-light">Email</h6>
                                    </div>
                                    <div class="right">
                                        <h6>yusufrijalr14@gmail.com</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="left">
                                        <h6 class="font-light">Tipe Akun</h6>
                                    </div>
                                    <div class="right">
                                        <h6>Premium</h6>
                                    </div>
                                </li>
                            </ul>

                            <div class="box-head mt-lg-5 mt-3">
                                <h3>Detail Kredensial</h3>
                                <!-- <a href="javascript:void(0)" data-bs-toggle="modal"
                                    data-bs-target="#resetEmail">Edit</a> -->
                            </div>

                            <ul class="dash-profile">
                                <li>
                                    <div class="left">
                                        <h6 class="font-light">Email</h6>
                                    </div>
                                    <div class="right">
                                        <h6>yusufrijalr14@gmail.com</h6>
                                    </div>
                                    <!-- <a href="javascript:void(0)" data-bs-toggle="modal"
                                        data-bs-target="#resetEmail">Edit</a> -->
                                </li>

                                <li>
                                    <div class="left">
                                        <h6 class="font-light">Nomor Telepon </h6>
                                    </div>
                                    <div class="right">
                                        <h6>+1-202-555-0198</h6>
                                    </div>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                        data-bs-target="#resetEmail">Edit</a>
                                </li>

                                <li class="mb-0">
                                    <div class="left">
                                        <h6 class="font-light">Kata Sandi</h6>
                                    </div>
                                    <div class="right">
                                        <h6>●●●●●●</h6>
                                    </div>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                        data-bs-target="#resetEmail">Edit</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-pane fade dashboard-security dashboard" id="reward">
                            <div class="box-head">
                                <h3>Dapatkan Penghargaan</h3>
                            </div>
                            <div class="security-details">
                                <h5 class="font-light mt-3">Ajak teman Anda dan dapatkan poin nya</h5>
                                <p class="font-light mt-3">Anda akan mendapatkan 150 poin ketika teman Anda
                                    menyelesaikan pembelian polis pertama nya dengan
                                    menggunakan kode referensi Anda. Gunakan poin Anda untuk mendapatkan hadiah.
                                </p>
                            </div>

                            <button class="btn btn-primary btn-sm fw-bold rounded" data-bs-toggle="modal"
                                data-bs-target="#deleteModal">Ajak Teman Anda</button>
                        </div>

                        <div class="tab-pane fade dashboard-security dashboard" id="about">
                            <div class="box-head">
                                <h3>Versi 1.0.0</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- user dashboard section end -->

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

    <!-- Reset Password Modal Start -->
    <div class="modal fade reset-email-modal" id="resetEmail">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Comfirm Email</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body pt-3">
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label font-light">Email address</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="comfirmEmail" class="form-label font-light">Comfirm Email address</label>
                            <input type="email" class="form-control" id="comfirmEmail">
                        </div>
                        <div>
                            <label for="exampleInputPassword1" class="form-label font-light">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                    </form>
                </div>
                <div class="modal-footer pt-0">
                    <button class="btn bg-secondary rounded-1 modal-close-button" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary rounded-1" data-bs-dismiss="modal">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Reset Password Modal End -->

    <!-- Add Address Modal Start -->
    <div class="modal fade add-address-modal" id="addAddress">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label font-light">Full Name</label>
                            <input type="text" class="form-control" id="name" placeholder="full name">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label font-light">Full Address</label>
                            <input type="text" class="form-control" id="address" placeholder="123, abcd, xyz">
                        </div>
                        <div>
                            <label for="number" class="form-label font-light">Mobile</label>
                            <input type="number" class="form-control" id="number" placeholder="+1-123-456-7890">
                        </div>
                    </form>
                </div>
                <div class="modal-footer pt-0 text-end d-block">
                    <button type="button" class="btn bg-secondary text-white rounded-1 modal-close-button"
                        data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary rounded-1" data-bs-dismiss="modal">Save Address</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Address Modal End -->

    <!-- Add Payment Modal Start -->
    <div class="modal fade payment-modal" id="addPayment">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <label for="name" class="form-label">Card Type</label>
                        <select class="form-select form-select-lg mb-4">
                            <option selected disabled>Choose Your Card</option>
                            <option value="1">Creadit Card</option>
                            <option value="2">Debit Card</option>
                            <option value="3">Debit Card and ATM</option>
                        </select>

                        <div class="mb-4">
                            <label for="card" class="form-label">Name On Card</label>
                            <input type="text" class="form-control" id="card" placeholder="Name card">
                        </div>
                        <div class="mb-4">
                            <label for="cAddress" class="form-label">Card Number</label>
                            <input type="number" class="form-control" id="cAddress" placeholder="XXXX-XXXX-XXXX-XXXX">
                        </div>
                        <div class="row">
                            <div class="col-md-8 mb-4">
                                <label for="expiry" class="form-label">Expiry Date</label>
                                <input type="date" class="form-control font-light" id="expiry">
                            </div>
                            <div class="col-md-4 mb-4">
                                <label for="cvv" class="form-label">CVV</label>
                                <input type="number" class="form-control" id="cvv" placeholder="XX9">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer pt-0 text-end d-block">
                    <button type="button" class="btn bg-secondary text-white rounded-1 modal-close-button"
                        data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary rounded-1" data-bs-dismiss="modal">Save Card Details</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Payment Modal End -->

    <!-- Comfirm Delete Modal Start -->
    <div class="modal delete-account-modal fade" id="deleteModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body pb-3 text-center mt-4">
                    <h4>Are you sure you want to delete your account?</h4>
                </div>
                <div class="modal-footer d-block text-center mb-4">
                    <button class="btn btn-primary btn-sm fw-bold rounded" data-bs-target="#doneModal"
                        data-bs-toggle="modal" data-bs-dismiss="modal">Yes Delete account</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal delete-account-modal fade" id="doneModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body pb-3 text-center mt-4">
                    <h4>Done!!! Delete Your Account</h4>
                </div>
                <div class="modal-footer d-block text-center mb-4">
                    <button class="btn btn-primary btn-sm fw-bold rounded" data-bs-target="#exampleModalToggle"
                        data-bs-toggle="modal" data-bs-dismiss="modal">Okay</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Comfirm Delete Modal End -->

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
