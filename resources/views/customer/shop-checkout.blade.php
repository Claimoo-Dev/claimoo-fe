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

<body class="theme-color2 light ltr bg-shop">
    <!-- header start -->
    <header class="header-style-2 bg-white" id="home">
        <div class="main-header navbar-searchbar">
            <div class="container">
                <div class="header-parent">
                    <a href="#">
                        <i data-feather="chevron-left" class="header-child-arrow"></i>
                    </a>
                    <div class="header-child-title-parent">
                        <div class="header-child-title">Review Pembelian</div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <div class="content-container">
        <section class="review">
            <div class="container">
                <div class="review-header-logo">
                    <div class="review-header-logo-img">
                        <img src="{{ asset('assets-voxo/images/' . $data->data->data_insurance->thumbnail_insurance) }}" class="img-fluid" alt="">
                    </div>
                    <div class="review-header-logo-text">{{ $data->data->data_insurance->product_insurance_name }}</div>
                </div>
                <div class="review-header-active mt-2">
                    <div>Masa Aktif Polis</div>
                    <div>{{ $data->data->data_insurance->policy_active_date }}</div>
                </div>
                <div class="review-header-active">
                    <div>Total Nilai Pertanggungan</div>
                    <div>Rp @currency($data->data->data_insurance->total_sum_insured)</div>
                </div>
            </div>
        </section>
        <section class="review-policy mt-2">
            <div class="container">
                <div class="review-policy-header review-policy-display ">
                    <div>Pemegang Polis</div>
                    <i data-feather="chevron-down" data-bs-toggle="collapse" href="#policyHolder" role="button"
                        aria-expanded="false" aria-controls="policyHolder"></i>
                </div>
                <div class="collapse mt-2" id="policyHolder">
                    <div class="review-policy-display">
                        <div>Nama</div>
                        <div>{{ $data->data->data_policy_holders->fullname }}</div>
                    </div>
                    <div class="review-policy-display">
                        <div>Email</div>
                        <div>{{ $data->data->data_policy_holders->email }}</div>
                    </div>
                    <div class="review-policy-display">
                        <div>No. Telepon</div>
                        <div>{{ $data->data->data_policy_holders->phone }}</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="review-policy mt-2">
            <div class="container">
                <div class="review-policy-header review-policy-display ">
                    <div>Detail Kendaraan</div>
                    <i data-feather="chevron-down" data-bs-toggle="collapse" href="#vehicleDetail" role="button"
                        aria-expanded="false" aria-controls="vehicleDetail"></i>
                </div>
                <div class="collapse mt-2" id="vehicleDetail">
                    <div class="review-policy-display">
                        <div>Nomor Plat</div>
                        <div>{{ $data->data->data_vehicle_details->plat_number }}</div>
                    </div>
                    <div class="review-policy-display">
                        <div>Merek Mobil</div>
                        <div>{{ $data->data->data_vehicle_details->brand_car }}</div>
                    </div>
                    <div class="review-policy-display">
                        <div>Tipe Mobil</div>
                        <div>{{ $data->data->data_vehicle_details->type_car }}</div>
                    </div>
                    <div class="review-policy-display">
                        <div>Seri Mobil</div>
                        <div>{{ $data->data->data_vehicle_details->car_series }}</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="review-term mt-2">
            <div class="container">
                <div class="review-term-header">
                    <input class="form-check-input term-check" type="checkbox" id="term">
                    <label class="ms-2" for="term">Saya setuju dan telah membaca syarat & ketentuan pembelian dan polis
                        asuransi produk</label>
                </div>
                <div class="review-term-description">
                    <div>Dengan menandai kotak ini, saya menyatakan bahwa setiap informasi/keterangan diatas adalah
                        benar dan sesuai dengan ketentuan produk asuransi yang saya pilih.</div>
                </div>
            </div>
        </section>
        <section class="review-subtotal mt-2">
            <div class="container">
                <div class="review-subtotal-header review-policy-display">
                    <div>Total Pembelian</div>
                    <div>Rp @currency($data->data->data_purchase_total->total_price_premi)</div>
                </div>
                <div class="review-policy-display review-subtotal-subheader">
                    <div>Harga Premi</div>
                    <div>Rp @currency($data->data->data_purchase_total->total_premi_years)</div>
                </div>
                <!-- <div class="review-policy-display">
                    <div>Biaya Admin</div>
                    <div>+ Rp 10.000</div>
                </div> -->
            </div>
            <div class="btn btn-primary mt-5 btn-shop">Pilih Pembayaran</div>
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
