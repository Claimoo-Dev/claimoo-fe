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
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                    <a href="{{ route('landing-page') }}">
                        <i data-feather="chevron-left" class="header-child-arrow"></i>
                    </a>
                    <div class="header-child-title-parent">
                        <div class="header-child-title">Asuransi Mobil</div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <div class="content-container">
        <section class="term">
            <div class="container">
                <div class="mb-4">
                    <h3 class="shop-title">Detail mobil Anda</h3>
                </div>
                <div class="form-parent">
                    <label for="year" class="form-label select-label">Tahun Produksi Mobil</label>
                    <select class="year form-control" id="year"></select>
                </div>
                <div class="form-parent mt-2">
                    <label for="brand" class="form-label select-label">Merek Mobil</label>
                    <select class="brand form-control" id="brand" disabled></select>
                </div>
                <div class="form-parent mt-2">
                    <label for="type" class="form-label select-label">Tipe Mobil</label>
                    <select class="type form-control" id="type" disabled></select>
                </div>
                <div class="form-parent mt-2">
                    <label for="seri" class="form-label select-label">Seri Mobil</label>
                    <select class="seri form-control" id="seri" disabled></select>
                </div>

                <div class="mt-3 fz-12">Mobil Anda belum tersedia? <a data-bs-toggle="modal" data-bs-target="#addCar"
                        class="click-here">Klik di sini</a></div>

                <div class="mt-3 mb-2 car-price">
                    <label for="carPrice" class="fz-12">Harga Mobil</label>
                    <span class="fz-12" id="carPriceRange">Rp 0 - Rp 0</span>
                </div>
                <div class="input-group">
                    <span class="input-group-text span-car-price" id="basic-addon1">Rp</span>
                    <input type="text" class="form-control input-car-price" id="carPrice">
                </div>

                <div class="add-accessories-btn mt-3">
                    <input class="form-check-input add-accessories-check" type="checkbox" id="addAccessoriesBtn"
                        data-bs-toggle="modal" data-bs-target="#addAccessories">
                    <label class="fz-12 ms-2" for="addAccessoriesBtn">
                        Tambahkan Aksesoris Mobil
                    </label>
                </div>

                <div class="form-parent mt-3">
                    <label for="plate" class="form-label select-label">Plat Wilayah</label>
                    <select class="plate form-control" id="plate"></select>
                </div>

                <button class="btn btn-search btn-primary mt-3 btn-shop" id="btn-search" disabled>Cari</button>
            </div>
        </section>
    </div>

    <div class="modal fade modal-navbar" id="addCar" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header modal-header-add-car">
                    <h5 class="modal-title" id="exampleModalToggleLabel">Tentang Mobil Anda</h5>
                    <button type="button" class="btn-close btn-close-add-car" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body modal-body-add-car">
                    <div class="parent-add-car">
                        <div class="personal-data">
                            <div>Data Pribadi</div>
                            <div class="auto-fill" id="autoFill">Isi Otomatis</div>
                        </div>
                        <div class="mt-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" placeholder="Masukkan nama Anda">
                        </div>

                        <div class="mt-3">
                            <label for="email" class="form-label">Email (Opsional)</label>
                            <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda">
                        </div>

                        <label for="phone" class="form-label mt-3">Nomor Telepon</label>
                        <div class="input-group">
                            <span class="input-group-text group-phone-number" id="basic-addon1">+62</span>
                            <input type="text" class="form-control" placeholder="Masukkan nomor telepon Anda"
                                id="phone">
                        </div>
                    </div>

                    <div class="parent-add-car mt-3">
                        <div class="personal-data">Tentang Mobil Anda</div>
                        <div class="mt-3">
                            <label for="carBrand" class="form-label">Merek Mobil</label>
                            <input type="text" class="form-control" id="carBrand"
                                placeholder="Masukkan merek mobil Anda">
                        </div>

                        <div class="mt-3">
                            <label for="carType" class="form-label">Jenis Mobil</label>
                            <input type="text" class="form-control" id="carType"
                                placeholder="Masukkan jenis mobil Anda">
                        </div>

                        <div class="mt-3">
                            <label for="carSeri" class="form-label">Seri Mobil</label>
                            <input type="text" class="form-control" id="carSeri" placeholder="Masukkan seri mobil Anda">
                        </div>
                    </div>

                    <button class="btn btn-request btn-primary btn-shop mt-3" id="btn-request" disabled>Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-navbar" id="addAccessories" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header modal-header-add-car">
                    <h5 class="modal-title" id="exampleModalToggleLabel">Aksesoris Mobil</h5>
                    <button type="button" class="btn-close btn-close-add-car" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body modal-body-add-car">
                    <div class="add-accessories-title">Pilih Aksesoris Kendaraan Anda</div>
                    <div class="add-accessories-subtitle">Maksimum 10% dari harga kendaraan</div>

                    <div class="mt-3 add-accessories-body" id="kacaFilmGroup">
                        <div>
                            <input class="form-check-input add-accessories-check" name="accessories" type="checkbox"
                                id="kacaFilmCheck">
                        </div>
                        <div class="ms-2 add-accessories-detail">
                            <div>
                                <div class="add-accessories-detail-title">Kaca Film</div>
                                <div class="add-accessories-detail-name d-none" id="kacaFilmName"></div>
                            </div>
                            <div class="add-accessories-detail-price d-none" id="kacaFilmPrice"></div>
                        </div>
                    </div>
                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="kacaFilm"
                        aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Kaca Film</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">
                            <div>
                                <label for="brandAccessories" class="form-label">Merek</label>
                                <input type="text" class="form-control" id="brandAccessories" placeholder="Merek">
                            </div>

                            <div class="mt-3">
                                <label for="typeAccessories" class="form-label">Tipe</label>
                                <input type="text" class="form-control" id="typeAccessories" placeholder="Tipe">
                            </div>

                            <label for="priceAccessories" class="form-label mt-3">Harga</label>
                            <div class="input-group">
                                <span class="input-group-text group-phone-number fz-12" id="basic-addon1">Rp</span>
                                <input type="text" class="form-control" id="priceAccessories">
                            </div>

                            <div class="mt-3">
                                <button class="btn btn-save btn-primary btn-shop" id="btn-save" disabled>Simpan</button>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 add-accessories-body" id="soundSystemGroup">
                        <div>
                            <input class="form-check-input add-accessories-check" name="accessories" type="checkbox"
                                id="soundSystemCheck">
                        </div>
                        <div class="ms-2 add-accessories-detail">
                            <div>
                                <div class="add-accessories-detail-title">Sound System</div>
                                <div class="add-accessories-detail-name d-none" id="soundSystemName"></div>
                            </div>
                            <div class="add-accessories-detail-price d-none" id="soundSystemPrice"></div>
                        </div>
                    </div>
                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="soundSystem"
                        aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Sound System</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">
                            <div>
                                <label for="brandAccessoriesSoundSystem" class="form-label">Merek</label>
                                <input type="text" class="form-control" id="brandAccessoriesSoundSystem"
                                    placeholder="Merek">
                            </div>

                            <div class="mt-3">
                                <label for="typeAccessoriesSoundSystem" class="form-label">Tipe</label>
                                <input type="text" class="form-control" id="typeAccessoriesSoundSystem"
                                    placeholder="Tipe">
                            </div>

                            <label for="priceAccessoriesSoundSystem" class="form-label mt-3">Harga</label>
                            <div class="input-group">
                                <span class="input-group-text group-phone-number fz-12" id="basic-addon1">Rp</span>
                                <input type="text" class="form-control" id="priceAccessoriesSoundSystem">
                            </div>

                            <div class="mt-3">
                                <button class="btn btn-primary btn-shop" id="btn-save-sound-system"
                                    disabled>Simpan</button>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 add-accessories-body" id="karpetMobilGroup">
                        <div>
                            <input class="form-check-input add-accessories-check" name="accessories" type="checkbox"
                                id="karpetMobilCheck">
                        </div>
                        <div class="ms-2 add-accessories-detail">
                            <div>
                                <div class="add-accessories-detail-title">Karpet Mobil</div>
                                <div class="add-accessories-detail-name d-none" id="karpetMobilName"></div>
                            </div>
                            <div class="add-accessories-detail-price d-none" id="karpetMobilPrice"></div>
                        </div>
                    </div>
                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="karpetMobil"
                        aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Karpet Mobil</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">
                            <div>
                                <label for="brandAccessoriesKarpetMobil" class="form-label">Merek</label>
                                <input type="text" class="form-control" id="brandAccessoriesKarpetMobil"
                                    placeholder="Merek">
                            </div>

                            <div class="mt-3">
                                <label for="typeAccessoriesKarpetMobil" class="form-label">Tipe</label>
                                <input type="text" class="form-control" id="typeAccessoriesKarpetMobil"
                                    placeholder="Tipe">
                            </div>

                            <label for="priceAccessoriesKarpetMobil" class="form-label mt-3">Harga</label>
                            <div class="input-group">
                                <span class="input-group-text group-phone-number fz-12" id="basic-addon1">Rp</span>
                                <input type="text" class="form-control" id="priceAccessoriesKarpetMobil">
                            </div>

                            <div class="mt-3">
                                <button class="btn btn-primary btn-shop" id="btn-save-karpet-mobil"
                                    disabled>Simpan</button>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 add-accessories-body" id="velgBanGroup">
                        <div>
                            <input class="form-check-input add-accessories-check" name="accessories" type="checkbox"
                                id="velgBanCheck">
                        </div>
                        <div class="ms-2 add-accessories-detail">
                            <div>
                                <div class="add-accessories-detail-title">Velg & Ban</div>
                                <div class="add-accessories-detail-name d-none" id="velgBanName"></div>
                            </div>
                            <div class="add-accessories-detail-price d-none" id="velgBanPrice"></div>
                        </div>
                    </div>
                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="velgBan"
                        aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Velg & Ban</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">
                            <div>
                                <label for="brandAccessoriesVelgBan" class="form-label">Merek</label>
                                <input type="text" class="form-control" id="brandAccessoriesVelgBan"
                                    placeholder="Merek">
                            </div>

                            <div class="mt-3">
                                <label for="typeAccessoriesVelgBan" class="form-label">Tipe</label>
                                <input type="text" class="form-control" id="typeAccessoriesVelgBan" placeholder="Tipe">
                            </div>

                            <label for="priceAccessoriesVelgBan" class="form-label mt-3">Harga</label>
                            <div class="input-group">
                                <span class="input-group-text group-phone-number fz-12" id="basic-addon1">Rp</span>
                                <input type="text" class="form-control" id="priceAccessoriesVelgBan">
                            </div>

                            <div class="mt-3">
                                <button class="btn btn-primary btn-shop" id="btn-save-velg-ban" disabled>Simpan</button>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 add-accessories-body" id="jokMobilGroup">
                        <div>
                            <input class="form-check-input add-accessories-check" name="accessories" type="checkbox"
                                id="jokMobilCheck">
                        </div>
                        <div class="ms-2 add-accessories-detail">
                            <div>
                                <div class="add-accessories-detail-title">Jok Mobil</div>
                                <div class="add-accessories-detail-name d-none" id="jokMobilName"></div>
                            </div>
                            <div class="add-accessories-detail-price d-none" id="jokMobilPrice"></div>
                        </div>
                    </div>
                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="jokMobil"
                        aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Jok Mobil</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">
                            <div>
                                <label for="brandAccessoriesJokMobil" class="form-label">Merek</label>
                                <input type="text" class="form-control" id="brandAccessoriesJokMobil"
                                    placeholder="Merek">
                            </div>

                            <div class="mt-3">
                                <label for="typeAccessoriesJokMobil" class="form-label">Tipe</label>
                                <input type="text" class="form-control" id="typeAccessoriesJokMobil" placeholder="Tipe">
                            </div>

                            <label for="priceAccessoriesJokMobil" class="form-label mt-3">Harga</label>
                            <div class="input-group">
                                <span class="input-group-text group-phone-number fz-12" id="basic-addon1">Rp</span>
                                <input type="text" class="form-control" id="priceAccessoriesJokMobil">
                            </div>

                            <div class="mt-3">
                                <button class="btn btn-primary btn-shop" id="btn-save-jok-mobil"
                                    disabled>Simpan</button>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 add-accessories-body" id="bodyKitGroup">
                        <div>
                            <input class="form-check-input add-accessories-check" name="accessories" type="checkbox"
                                id="bodyKitCheck">
                        </div>
                        <div class="ms-2 add-accessories-detail">
                            <div>
                                <div class="add-accessories-detail-title">Body Kit</div>
                                <div class="add-accessories-detail-name d-none" id="bodyKitName"></div>
                            </div>
                            <div class="add-accessories-detail-price d-none" id="bodyKitPrice"></div>
                        </div>
                    </div>
                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="bodyKit"
                        aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Body Kit</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">
                            <div>
                                <label for="brandAccessoriesBodyKit" class="form-label">Merek</label>
                                <input type="text" class="form-control" id="brandAccessoriesBodyKit"
                                    placeholder="Merek">
                            </div>

                            <div class="mt-3">
                                <label for="typeAccessoriesBodyKit" class="form-label">Tipe</label>
                                <input type="text" class="form-control" id="typeAccessoriesBodyKit" placeholder="Tipe">
                            </div>

                            <label for="priceAccessoriesBodyKit" class="form-label mt-3">Harga</label>
                            <div class="input-group">
                                <span class="input-group-text group-phone-number fz-12" id="basic-addon1">Rp</span>
                                <input type="text" class="form-control" id="priceAccessoriesBodyKit">
                            </div>

                            <div class="mt-3">
                                <button class="btn btn-primary btn-shop" id="btn-save-body-kit" disabled>Simpan</button>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 add-accessories-body" id="lainnyaGroup">
                        <div>
                            <input class="form-check-input add-accessories-check" name="accessories" type="checkbox"
                                id="lainnyaCheck">
                        </div>
                        <div class="ms-2 add-accessories-detail">
                            <div>
                                <div class="add-accessories-detail-title" id="titleLainnya">Lainnya</div>
                                <div class="add-accessories-detail-name d-none" id="lainnyaName"></div>
                            </div>
                            <div class="add-accessories-detail-price d-none" id="lainnyaPrice"></div>
                        </div>
                    </div>
                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="lainnya"
                        aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Lainnya</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">
                            <div>
                                <label for="nameAccessories" class="form-label">Nama Aksesoris</label>
                                <input type="text" class="form-control" id="nameAccessories"
                                    placeholder="Nama Aksesoris" value="Lainnya">
                            </div>

                            <div class="mt-3">
                                <label for="brandAccessoriesLainnya" class="form-label">Merek</label>
                                <input type="text" class="form-control" id="brandAccessoriesLainnya"
                                    placeholder="Merek">
                            </div>

                            <div class="mt-3">
                                <label for="typeAccessoriesLainnya" class="form-label">Tipe</label>
                                <input type="text" class="form-control" id="typeAccessoriesLainnya" placeholder="Tipe">
                            </div>

                            <label for="priceAccessoriesLainnya" class="form-label mt-3">Harga</label>
                            <div class="input-group">
                                <span class="input-group-text group-phone-number fz-12" id="basic-addon1">Rp</span>
                                <input type="text" class="form-control" id="priceAccessoriesLainnya">
                            </div>

                            <div class="mt-3">
                                <button class="btn btn-primary btn-shop" id="btn-save-lainnya" disabled>Simpan</button>
                            </div>
                        </div>
                    </div>

                    <div class="total-accessories mt-5">
                        <div class="total-accessories-price">
                            <div>Harga Aksesoris</div>
                            <div id="subtotal">Rp 0</div>
                        </div>
                        <div>
                            <button class="btn btn-primary" id="btnAccessories" disabled>Tambah</button>
                        </div>
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
    <script src="{{ asset('assets-voxo/js/custom-script.js') }}"></script>

    <!-- select2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- sweetalert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript">
        $('.year').select2({
            placeholder: 'Pilih Tahun Produksi',
            ajax: {
                type: 'GET',
                url: '/claim/list-year',
                dataType: 'json',
                data: function (params) {
                    var query = {
                        search: params.term
                    }

                    return query;
                },
                processResults: function (data) {
                    return {
                        results: $.map(data.data, function (item) {
                            return {
                                text: item.tahun,
                                id: item.tahun
                            }
                        })
                    };
                },
                cache: true
            }
        });

        $('.brand').select2({
            placeholder: 'Pilih Merek Mobil',
            ajax: {
                type: 'GET',
                url: '/claim/list-brand',
                dataType: 'json',
                data: function (params) {
                    var query = {
                        search: params.term,
                        year: document.getElementById("year").value
                    }

                    return query;
                },
                processResults: function (data) {
                    return {
                        results: $.map(data.data, function (item) {
                            return {
                                text: item.merek,
                                id: item.merek
                            }
                        })
                    };
                },
                cache: true
            }
        });

        $('.type').select2({
            placeholder: 'Pilih Tipe Mobil',
            ajax: {
                type: 'GET',
                url: '/claim/list-type',
                dataType: 'json',
                data: function (params) {
                    var query = {
                        search: params.term,
                        year: document.getElementById("year").value,
                        brand: document.getElementById("brand").value
                    }

                    return query;
                },
                processResults: function (data) {
                    return {
                        results: $.map(data.data, function (item) {
                            return {
                                text: item.tipe,
                                id: item.tipe
                            }
                        })
                    };
                },
                cache: true
            }
        });

        $('.seri').select2({
            placeholder: 'Pilih Seri Mobil',
            ajax: {
                type: 'GET',
                url: '/claim/list-seri',
                dataType: 'json',
                data: function (params) {
                    var query = {
                        search: params.term,
                        year: document.getElementById("year").value,
                        brand: document.getElementById("brand").value,
                        type: document.getElementById("type").value
                    }

                    return query;
                },
                processResults: function (data) {
                    return {
                        results: $.map(data.data, function (item) {
                            return {
                                text: item.seri,
                                id: item.seri
                            }
                        })
                    };
                },
                cache: true
            }
        });

        $('.plate').select2({
            placeholder: 'Pilih Wilayah',
            ajax: {
                type: 'GET',
                url: '/claim/list-plate',
                dataType: 'json',
                data: function (params) {
                    var query = {
                        keyword: params.term
                    }

                    return query;
                },
                processResults: function (data) {
                    return {
                        results: $.map(data.data, function (item) {
                            return {
                                text: item.plate + ' (' + item.Area + ')',
                                id: item.plate
                            }
                        })
                    };
                },
                cache: true
            }
        });

        $('#year').change(function () {
            $("#brand").empty();
            $("#type").empty();
            $("#seri").empty();
        });

        $('#brand').change(function () {
            $("#type").empty();
            $("#seri").empty();
        });

        $('#type').change(function () {
            $("#seri").empty();
            $("#btn-search").attr('disabled', true);
        });

        $('.year').on('select2:select', function (e) {
            $('.brand').removeAttr('disabled');
        });

        $('.brand').on('select2:select', function (e) {
            $('.type').removeAttr('disabled');
        });

        $('.type').on('select2:select', function (e) {
            $('.seri').removeAttr('disabled');
        });

        $('.seri').on('select2:select', function (e) {
            if ($('.plate').val()) {
                $('.btn-search').removeAttr('disabled');
            }

            $.ajax({
                type: "GET",
                url: "/claim/price-car",
                data: {
                    year: $('#year').val(),
                    brand: $('#brand').val(),
                    type: $('#type').val(),
                    seri: $('#seri').val()
                },
                success: function (data) {
                    $.each(data.data, function (i, item) {
                        var lowestPrice = formatRupiah(item.harga_terendah.toString());
                        var highestPrice = formatRupiah(item.harga_tertinggi.toString());
                        var price = formatRupiah(item.harga.toString());

                        $("#carPriceRange").html("Rp " + lowestPrice + " - Rp " +
                            highestPrice);
                        $("#carPrice").val(price);
                    });
                }
            });
        });

        $('.plate').on('select2:select', function () {
            if ($('.seri').val()) {
                $('.btn-search').removeAttr('disabled');
            }
        });

        $("#carPrice").keyup(function () {
            $("#carPrice").val(formatRupiah(this.value));
        });

        $("#phone").keyup(function () {
            $("#phone").val(formatNumber(this.value));
        });

        $("#name").keyup(function () {
            if ($('#name').val() && $('#phone').val() && $('#carBrand').val() && $('#carType').val() && $(
                    '#carSeri').val()) {
                $('#btn-request').removeAttr('disabled');
            } else {
                $('#btn-request').attr('disabled', true);
            }
        });

        $("#email").keyup(function () {
            if ($('#name').val() && $('#phone').val() && $('#carBrand').val() && $('#carType').val() && $(
                    '#carSeri').val()) {
                $('#btn-request').removeAttr('disabled');
            } else {
                $('#btn-request').attr('disabled', true);
            }
        });

        $("#phone").keyup(function () {
            if ($('#name').val() && $('#phone').val() && $('#carBrand').val() && $('#carType').val() && $(
                    '#carSeri').val()) {
                $('#btn-request').removeAttr('disabled');
            } else {
                $('#btn-request').attr('disabled', true);
            }
        });

        $("#carBrand").keyup(function () {
            if ($('#name').val() && $('#phone').val() && $('#carBrand').val() && $('#carType').val() && $(
                    '#carSeri').val()) {
                $('#btn-request').removeAttr('disabled');
            } else {
                $('#btn-request').attr('disabled', true);
            }
        });

        $("#carType").keyup(function () {
            if ($('#name').val() && $('#phone').val() && $('#carBrand').val() && $('#carType').val() && $(
                    '#carSeri').val()) {
                $('#btn-request').removeAttr('disabled');
            } else {
                $('#btn-request').attr('disabled', true);
            }
        });

        $("#carSeri").keyup(function () {
            if ($('#name').val() && $('#phone').val() && $('#carBrand').val() && $('#carType').val() && $(
                    '#carSeri').val()) {
                $('#btn-request').removeAttr('disabled');
            } else {
                $('#btn-request').attr('disabled', true);
            }
        });

        $("#btn-request").click(function () {
            if ($('#name').val() && $('#phone').val() && $('#carBrand').val() && $('#carType').val() && $(
                    '#carSeri').val()) {
                $.ajax({
                    type: "POST",
                    url: "/shop/request-car",
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        name: $('#name').val(),
                        email: $('#email').val(),
                        phone: $('#phone').val(),
                        brand: $('#carBrand').val(),
                        type: $('#carType').val(),
                        seri: $('#carSeri').val()
                    },
                    success: function (data) {
                        Swal.fire({
                            icon: 'success',
                            text: 'Pengajuan mobil Anda sedang di proses',
                            confirmButtonColor: '#073f78'
                        }).then(function () {
                            window.location.href = 'shop';
                        });
                    }
                });
            }
        });

        $('#autoFill').click(function () {
            $.ajax({
                type: "GET",
                url: "/user",
                success: function (response) {
                    $("#name").val(response.data.name);
                    $("#email").val(response.data.email);
                    $("#phone").val(response.data.phone);
                }
            });
        });

        $('#btnAccessories').click(function () {
            var sum = 0;
            $("input:checkbox[name=accessories]:checked").each(function () {
                sum = sum + parseInt($(this).val());
            });

            var carPrice = $('#carPrice').val();
            carPrice = carPrice.split('.').join("");

            var maxAccessories = carPrice * 10 / 100;

            if (maxAccessories == 0) {
                Swal.fire({
                    icon: 'error',
                    text: 'Mohon isi detail mobil Anda',
                    confirmButtonColor: '#073f78'
                });
            } else if (sum > maxAccessories) {
                Swal.fire({
                    icon: 'error',
                    text: 'Harga Aksesoris Maksimum IDR ' + formatRupiah(maxAccessories.toString()),
                    confirmButtonColor: '#073f78'
                });
            } else {
                $('#addAccessories').modal('hide');
            }

        });

        $('#addAccessoriesBtn').click(function () {
            $('#addAccessoriesBtn').prop('checked', true);
        });

        $('#addAccessories').on('hide.bs.modal', function () {
            var sum = 0;
            $("input:checkbox[name=accessories]:checked").each(function () {
                sum = sum + parseInt($(this).val());
            });

            var carPrice = $('#carPrice').val();
            carPrice = carPrice.split('.').join("");

            var maxAccessories = carPrice * 10 / 100;

            if (sum > maxAccessories) {
                $('#addAccessoriesBtn').prop('checked', false);

                $("input:checkbox[name=accessories]:checked").each(function () {
                    $(this).prop('checked', false);
                });

                $('#kacaFilmName').addClass('d-none');
                $('#kacaFilmPrice').addClass('d-none');

                $('#soundSystemName').addClass('d-none');
                $('#soundSystemPrice').addClass('d-none');

                $('#karpetMobilName').addClass('d-none');
                $('#karpetMobilPrice').addClass('d-none');

                $('#velgBanName').addClass('d-none');
                $('#velgBanPrice').addClass('d-none');

                $('#jokMobilName').addClass('d-none');
                $('#jokMobilPrice').addClass('d-none');

                $('#bodyKitName').addClass('d-none');
                $('#bodyKitPrice').addClass('d-none');

                $('#lainnyaName').addClass('d-none');
                $('#lainnyaPrice').addClass('d-none');

                $("#subtotal").html("Rp 0");
            }

            if (sum == 0) {
                $('#addAccessoriesBtn').prop('checked', false);
            }
        });

        var arrayAccessories = [];

        $(".btn-search").click(function () {
            if ($('.seri').val() && $('.plate').val()) {
                var totalPriceAccessories = 0;

                $.each(arrayAccessories, function (i, item) {
                    totalPriceAccessories = totalPriceAccessories + parseInt(item.price);
                });

                var carPrice = $('#carPrice').val();
                carPrice = carPrice.split('.').join("");

                $.ajax({
                    type: "POST",
                    url: "/shop/search-product",
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        year: $('#year').val(),
                        brand: $('#brand').val(),
                        type: $('#type').val(),
                        seri: $('#seri').val(),
                        price: carPrice,
                        is_car_accessories: arrayAccessories.length,
                        accessories: arrayAccessories,
                        total_price_accessories: totalPriceAccessories,
                        plate: $('.plate').val()
                    },
                    success: function (data) {
                        window.location.href = '{{ url("/shop/product") }}'
                    }
                });
            }
        });

    </script>
    <script src="{{ asset('assets-voxo/js/kaca-film.js') }}"></script>
    <script src="{{ asset('assets-voxo/js/sound-system.js') }}"></script>
    <script src="{{ asset('assets-voxo/js/karpet-mobil.js') }}"></script>
    <script src="{{ asset('assets-voxo/js/velg-ban.js') }}"></script>
    <script src="{{ asset('assets-voxo/js/jok-mobil.js') }}"></script>
    <script src="{{ asset('assets-voxo/js/body-kit.js') }}"></script>
    <script src="{{ asset('assets-voxo/js/lainnya.js') }}"></script>

</body>

</html>
