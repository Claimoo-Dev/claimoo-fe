<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="manifest" href="./manifest.json" />
    <link rel="icon" href="assets-voxo/images/favicon/favicon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="assets-voxo/images/favicon/favicon.png" />
    <meta name="theme-color" content="#073f78" />
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
                <a href="{{ route('support') }}">
                    <i data-feather="help-circle"></i>
                    <span>Bantuan</span>
                </a>
            </li>
            <li>
                <a href="{{ route('dashboard-customer') }}" class="active">
                    <i data-feather="user"></i>
                    <span>Akun</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- mobile fix menu end -->

    <div class="content-container">
        <!-- Breadcrumb section start -->
        <section class="breadcrumb-section">
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
            <!-- <div class="container">
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
            </div> -->
        </section>
        <!-- Breadcrumb section end -->

        <!-- user dashboard section start -->
        <section class="section-b-space">
            <div class="container">
                <ul class="nav nav-tabs custome-nav-tabs flex-column category-option" id="myTab">
                    <li class="nav-item mb-2">
                        <button class="nav-link font-light active" id="tab" data-bs-toggle="tab"
                            data-bs-target="#dash" type="button"><i
                                class="fas fa-angle-right"></i>Dasbor</button>
                    </li>

                    <li class="nav-item mb-2">
                        <button class="nav-link font-light" id="1-tab" data-bs-toggle="tab"
                            data-bs-target="#policy" type="button"><i class="fas fa-angle-right"></i>Polis
                            Saya</button>
                    </li>

                    <li class="nav-item mb-2">
                        <button class="nav-link font-light" id="2-tab" data-bs-toggle="tab"
                            data-bs-target="#detection" type="button"><i class="fas fa-angle-right"></i>Riwayat
                            Deteksi</button>
                    </li>

                    <li class="nav-item mb-2">
                        <button class="nav-link font-light" id="3-tab" data-bs-toggle="tab"
                            data-bs-target="#profile" type="button"><i
                                class="fas fa-angle-right"></i>Profil</button>
                    </li>

                    <li class="nav-item mb-2">
                        <button class="nav-link font-light" id="4-tab" data-bs-toggle="tab"
                            data-bs-target="#reward" type="button"><i class="fas fa-angle-right"></i>Dapatkan
                            Penghargaan</button>
                    </li>

                    <li class="nav-item mb-2">
                        <button class="nav-link font-light" id="5-tab" data-bs-toggle="tab"
                            data-bs-target="#about" type="button"><i class="fas fa-angle-right"></i>Tentang
                            Aplikasi</button>
                    </li>

                    <li class="nav-item mb-2">
                        <button class="nav-link font-light" id="6-tab" data-bs-toggle="tab"
                            data-bs-target="#setting" type="button"><i
                                class="fas fa-angle-right"></i>Pengaturan</button>
                    </li>
                </ul>
                <div class="row">
                    <!-- <div class="col-3">
                    </div> -->

                    <div class="col-12">
                        <div class="filter-button dash-filter dashboard mb-5">
                            <button class="btn btn-primary filter-btn" onclick="date()">Tampilkan Menu</button>
                        </div>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="dash">
                                <div class="dashboard-right">
                                    <div class="dashboard">
                                        <div class="page-title title title1 title-effect">
                                            <h2 class="fz-12">Dasbor Saya</h2>
                                        </div>
                                        <div class="welcome-msg">
                                            <h6 class="font-light dashboard-text">Selamat Datang, <span>{{ $user->data->name }} !</span>
                                            </h6>
                                            <span class="badge bg-primary dashboard-badge">Reguler</span>
                                        </div>

                                        <div class="order-box-contain my-4">
                                            <div class="row g-4">
                                                <div class="col-12">
                                                    <div class="order-box">
                                                        <div class="order-box-image">
                                                            <img src="assets-voxo/images/svg/box.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </div>
                                                        <div class="order-box-contain">
                                                            <img src="assets-voxo/images/svg/box1.png"
                                                                class="img-fluid blur-up lazyload img-order-box" alt="">
                                                            <div>
                                                                <h5 class="font-light fz-12">total polis</h5>
                                                                <h3 class="fz-12">{{ $dashboard->data->total_polis->total }}</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="order-box">
                                                        <div class="order-box-image">
                                                            <img src="assets-voxo/images/svg/sent.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </div>
                                                        <div class="order-box-contain">
                                                            <img src="assets-voxo/images/svg/sent1.png"
                                                                class="img-fluid blur-up lazyload img-order-box" alt="">
                                                            <div>
                                                                <h5 class="font-light fz-12">riwayat deteksi</h5>
                                                                <h3 class="fz-12">{{ $dashboard->data->riwayat_deteksi->total }}</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- <div class="box-account box-info">
                                            <div class="box-head">
                                                <h3>Informasi Akun</h3>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade table-dashboard dashboard wish-list-section" id="policy">
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

                            <div class="tab-pane fade table-dashboard dashboard wish-list-section" id="detection">
                                <div class="box-head mb-3">
                                    <h3 class="fz-12">Daftar Riwayat Deteksi Kerusakan</h3>
                                </div>
                                <div class="table-responsive">
                                    <table class="table cart-table" id="table">
                                        <thead>
                                            <tr class="table-head">
                                                <th scope="col">foto asli</th>
                                                <th scope="col">foto hasil</th>
                                                <th scope="col">tipe mobil</th>
                                                <!-- <th scope="col">status deteksi</th> -->
                                                <th scope="col">deskripsi kerusakan</th>
                                                <th scope="col">tanggal</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody">
                                            <!-- <tr>
                                                <td>
                                                    <a href="#">
                                                        <img src="assets-voxo/images/fashion/product/front/1.jpg"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#">
                                                        <img src="assets-voxo/images/fashion/product/front/1.jpg"
                                                            class="img-fluid blur-up lazyload" alt="">
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
                                            </tr> -->
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
                                    <li class="d-block">
                                        <div class="left">
                                            <h6 class="font-light">Nama Lengkap</h6>
                                        </div>
                                        <div class="right">
                                            <h6>{{ $user->data->name }}</h6>
                                        </div>
                                    </li>

                                    <li class="mt-3 d-block">
                                        <div class="left">
                                            <h6 class="font-light">Alamat</h6>
                                        </div>
                                        <div class="right">
                                            <h6>null</h6>
                                        </div>
                                    </li>

                                    <li class="mt-3 d-block">
                                        <div class="left">
                                            <h6 class="font-light">Tanggal registrasi</h6>
                                        </div>
                                        <div class="right">
                                            <h6>{{ $user->data->created_date }}</h6>
                                        </div>
                                    </li>

                                    <li class="mt-3 d-block">
                                        <div class="left">
                                            <h6 class="font-light">Nomor Telepon</h6>
                                        </div>
                                        <div class="right">
                                            <h6>{{ $user->data->phone }}</h6>
                                        </div>
                                    </li>

                                    <li class="mt-3 d-block">
                                        <div class="left">
                                            <h6 class="font-light">Tipe Akun</h6>
                                        </div>
                                        <div class="right">
                                            <h6>null</h6>
                                        </div>
                                    </li>
                                </ul>

                                <div class="box-head mt-5">
                                    <h3>Detail Kredensial</h3>
                                </div>

                                <ul class="dash-profile">
                                    <li class="d-block">
                                        <div class="left">
                                            <h6 class="font-light">Email</h6>
                                        </div>
                                        <div class="right">
                                            <h6>{{ $user->data->email }}</h6>
                                        </div>
                                    </li>

                                    <li class="mt-3 d-block">
                                        <div class="btn-change-password" data-bs-toggle="modal" data-bs-target="#resetEmail">Ubah Kata Sandi</div>
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

                            <div class="tab-pane fade dashboard-security dashboard" id="setting">
                                <div class="box-head">
                                    <h3>Pengaturan</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- user dashboard section end -->
    </div>

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

    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
    </div>

    <input type="hidden" value="{{ $user->data->member_code }}" id="memberCode">
    <input type="hidden" id="page" value="1">
    <input type="hidden" value="{{ $token }}" id="token">
    <input type="hidden" id="startDate">
    <input type="hidden" id="endDate">

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

    <script>
        var token = document.getElementById("token").value;
        var memberCode = document.getElementById("memberCode").value;
        
        function date() {
            var startDate = document.getElementById("startDate").value;
            var endDate = document.getElementById("endDate").value;
            document.getElementById("page").value = 1;

            $.ajax({
                type: "GET",
                url: "/list-image-customer?member_code=" + memberCode + "&status=1&limit=10&start_date=" + startDate + "&end_date=" + endDate + "&page=1",
                headers: {
                    'Authorization': token,
                    'X-Channel': 'cust_mobile_app',
                    'Content-Type': 'application/json'
                },
                success: function (data) {
                    console.log(data);
                    $('#tbody').remove();
                    // $('#option').remove();

                    var trHTML = '<tbody id="tbody">';
                    $.each(data.data, function (i, item) {
                        var newStr = item.created_date.replace(/-/g, "/");
                        var imgSrc = "images/" + newStr + "/" + item.image;

                        trHTML += 
                            '<tr>' +
                                '<td>' +
                                    '<img class="img-fluid my-image" src="' + imgSrc + '">' +
                                '</td>' +
                                '<td>' +
                                    '<img class="img-fluid my-image" src="' + imgSrc + '">' +
                                '</td>' +
                                '<td class="text-center text-uppercase">' + item.type_car + '</td>' +
                                '<td class="text-center text-capitalize">' + item.result_description + '</td>' +
                                '<td class="text-center">' + item.created_date + '</td>' +
                            '</tr>';
                    });
                    trHTML += '</tbody>';
                    $('#table').append(trHTML);

                    // if (data.pagination.has_next_page && data.pagination.has_previous_page) {
                    //     var button = '<div class="text-center" id="option">' +
                    //         '<button class="btn btn-primary me-1" onclick="previousPage()"> < </button>' +
                    //         '<button class="btn btn-primary" onclick="nextPage()"> > </button>' +
                    //     '</div>';
                        
                    //     $('#option-parent').append(button);
                    // } else if (data.pagination.has_next_page) {
                    //     var button = '<div class="text-center" id="option">' +
                    //         '<button class="btn btn-primary" onclick="nextPage()"> > </button>' +
                    //     '</div>';
                        
                    //     $('#option-parent').append(button);
                    // } else if (data.pagination.has_previous_page) {
                    //     var button = '<div class="text-center" id="option">' +
                    //         '<button class="btn btn-primary" onclick="previousPage()"> < </button>' +
                    //     '</div>';
                        
                    //     $('#option-parent').append(button);
                    // }

                    var modal = document.getElementById("myModal");
                    var img = document.getElementsByClassName("my-image");
                    var modalImg = document.getElementById("img01");

                    for (let i = 0; i < img.length; i++) {
                        img[i].onclick = function () {
                            modal.style.display = "block";
                            modalImg.src = this.src;
                        }
                    }
                    
                    var span = document.getElementsByClassName("close")[0];
                    
                    span.onclick = function () {
                        modal.style.display = "none";
                    }
                }
            });
        };

    </script>

</body>

</html>
