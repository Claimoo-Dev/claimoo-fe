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
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                    <a href="#">
                        <i data-feather="chevron-left" class="header-child-arrow"></i>
                    </a>
                    <div class="header-child-title-parent">
                        <div class="header-child-title">Dokumen Yang Diperlukan</div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <div class="content-container">
        <section class="total-premi">
            <div class="container">
                <div>Total Premi</div>
                <div>Rp @currency($totalPremi)</div>
            </div>
        </section>
        <section class="required-document">
            <div class="container">
                <div class="required-document-group">
                    <div class="required-document-header">Detail Kendaraan</div>
                    <hr>
                    <div class="mb-3">
                        <label for="plate" class="form-label">Nomor Plat</label>
                        <div class="input-group">
                            <span class="input-group-text group-phone-number" id="basic-addon1">{{ $plate }}</span>
                            <input type="text" class="form-control" placeholder="1234 B" id="plate">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="color" class="form-label">Warna</label>
                        <input type="text" class="form-control" placeholder="Hitam" id="color">
                    </div>
                    <div class="mb-3">
                        <label for="machine" class="form-label">Nomor Mesin</label>
                        <input type="text" class="form-control" id="machine" placeholder="ABC1234">
                    </div>
                    <div class="mb-3">
                        <label for="chassis" class="form-label">Nomor Rangka</label>
                        <input type="text" class="form-control" id="chassis" placeholder="ABC1234">
                    </div>
                </div>
            </div>
        </section>
        <section class="policy-holder">
            <div class="container">
                <div class="policy-holder-group">
                    <div class="policy-holder-active">
                        <input class="form-check-input add-accessories-check" type="checkbox" value=""
                            id="flexCheckDefault">
                        <label class="form-check-label ms-2" for="flexCheckDefault">
                            Saya masih memiliki polis aktif
                        </label>
                    </div>
                    <hr>
                    <div class="policy-holder-name">
                        <div>Kondisi Mobil</div>
                        <div>Contoh Foto</div>
                    </div>
                    <div class="car-condition-btn-group">
                        <ul class="nav nav-pills car-condition-ul" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-new-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-new" type="button" role="tab" aria-controls="pills-new"
                                    aria-selected="true">
                                    Baru</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link " id="pills-used-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-used" type="button" role="tab" aria-controls="pills-used"
                                    aria-selected="false">Bekas</button>
                            </li>
                        </ul>
                        <!-- <div class="col-6 car-condition-btn me-1">Baru</div>
                        <div class="col-6 car-condition-btn ms-1">Bekas</div> -->
                    </div>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-new" role="tabpanel"
                            aria-labelledby="pills-new-tab" tabindex="0">
                            <div class="container">
                                <div class="product-detail-benefit">
                                    <div>
                                        <label for="idCardImage" class="form-label">BASTK (Maksimal 14 hari sejak diterbitkan)</label>
                                        <input class="form-control" type="file" id="idCardImage">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-used" role="tabpanel" aria-labelledby="pills-used-tab"
                            tabindex="0">
                            <div class="container">
                                <div class="product-detail-benefit">
                                    <div>
                                        <label  class="form-label">Surat Tanda Nomor Kendaraan (STNK)</label>
                                        <input class="form-control" type="file" >
                                    </div>
                                    <div>
                                        <label  class="form-label mt-2">Foto Bagian Depan Kendaraan</label>
                                        <input class="form-control" type="file" >
                                    </div>
                                    <div>
                                        <label  class="form-label mt-2">Foto Bagian Belakang Kendaraan</label>
                                        <input class="form-control" type="file" >
                                    </div>
                                    <div>
                                        <label  class="form-label mt-2">Foto Bagian Kanan Kendaraan</label>
                                        <input class="form-control" type="file" >
                                    </div>
                                    <div>
                                        <label  class="form-label mt-2">Foto Bagian Kiri Kendaraan</label>
                                        <input class="form-control" type="file" >
                                    </div>
                                    <div>
                                        <label  class="form-label mt-2">Foto Dasbor Kendaraan dan Tongkat Transmisi</label>
                                        <input class="form-control" type="file" >
                                    </div>
                                    <div>
                                        <label  class="form-label mt-2">Foto Mesin Kendaraan</label>
                                        <input class="form-control" type="file" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn btn-primary mt-3 btn-shop" id="carDataBtn">Lanjut</div>
            </div>
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
    
    <script>
        $('#carDataBtn').click(function() {
            var formData = new FormData();
            formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
            formData.append('plate', $("#plate").val());
            formData.append('color', $("#color").val());
            formData.append('machine', $("#machine").val());
            formData.append('chassis', $("#chassis").val());

            $.ajax({
                type: "POST",
                url: "/shop/step4",
                data: formData,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function (response) {
                    window.location.href = '{{ url("/shop/checkout") }}';
                }
            });
        });
    </script>

</body>

</html>
