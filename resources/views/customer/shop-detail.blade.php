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

<body class="theme-color2 light ltr" style="background-color: #eff2f7;">
    <!-- header start -->
    <header class="header-style-2" id="home" style="background-color: white;">
        <div class="main-header navbar-searchbar">
            <div class="container">
                <div class="header-parent">
                    <a href="{{ route('shopProduct') }}">
                        <i data-feather="chevron-left" class="header-child-arrow"></i>
                    </a>
                    <div class="header-child-title-parent">
                        <div class="header-child-title">{{ $product->data->insurance_product }}</div>
                    </div>
                </div>
            </div>
            <hr class="header-line">
            <div class="container">
                <ul class="nav nav-pills product-upper" id="pills-tab" role="tablist">
                    <li class="nav-item product-upper-nav-detail" role="presentation">
                        <button class="nav-link product-upper-item-detail active" id="pills-manfaat-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-manfaat" type="button" role="tab"
                            aria-controls="pills-manfaat" aria-selected="true"><i class="fas fa-user-shield"></i>
                            Manfaat</button>
                    </li>
                    <li class="nav-item product-upper-nav-detail" role="presentation">
                        <button class="nav-link product-upper-item-detail" id="pills-sk-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-sk" type="button" role="tab" aria-controls="pills-sk"
                            aria-selected="false"><i class="fas fa-tasks"></i> S &amp; K</button>
                    </li>
                    <li class="nav-item product-upper-nav-detail" role="presentation">
                        <button class="nav-link product-upper-item-detail" id="pills-klaim-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-klaim" type="button" role="tab" aria-controls="pills-klaim"
                            aria-selected="false"><i class="fas fa-calendar-plus"></i> Klaim</button>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- header end -->

    <div class="content-container">
        <section class="product-detail-section">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-manfaat" role="tabpanel"
                    aria-labelledby="pills-manfaat-tab" tabindex="0">
                    <div class="container">
                        <div class="product-detail-benefit">
                            <div class="product-detail-benefit-header">
                                <div class="product-detail-benefit-header-img">
                                    <img src="{{ asset('assets-voxo/images/' . $product->data->thumbnail) }}"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="product-detail-benefit-header-title ms-2">
                                    {{ $product->data->insurance_product }}</div>
                            </div>
                            <div>
                                {!! $product->data->benefit !!}
                            </div>
                        </div>
                        <div class="product-detail-feature mt-3">
                            <div class="product-detail-feature-header">
                                <div class="product-detail-feature-header-title">Fitur</div>
                            </div>
                            <div class="product-detail-feature-body">
                                <div>
                                    {!! $product->data->feature !!}
                                </div>
                            </div>
                        </div>
                        <div class="product-detail-garage mt-3">
                            <div>
                                <div class="product-detail-garage-title">{{ $product->data->total_garage }} Bengkel
                                    Tersedia</div>
                                <div class="product-detail-garage-subtitle">Memiliki lebih dari
                                    {{ $product->data->total_garage }} bengkel rekanan yang
                                    tersebar di berbagai kota di seluruh Indonesia.</div>
                            </div>
                            <a href="{{ url('/garage/' . $product->data->garage_pdf) }}" target="_blank"
                                class="product-detail-garage-btn">Lihat</a>
                        </div>
                        <div class="product-detail-garage mt-3">
                            <div class="product-detail-garage-title">Brosur Produk</div>
                            <a href="{{ url('/brochure/' . $product->data->brochure_pdf) }}" target="_blank"
                                class="product-detail-garage-btn">Lihat</a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-sk" role="tabpanel" aria-labelledby="pills-sk-tab" tabindex="0">
                    <div class="container">
                        <div class="product-detail-benefit">
                            {!! $product->data->terms_and_condition !!}
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-klaim" role="tabpanel" aria-labelledby="pills-klaim-tab"
                    tabindex="0">
                    <div class="container">
                        <div class="product-detail-benefit">
                            {!! $product->data->claim !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-detail-footer-section">
            <div class="container">
                <div class="product-detail-footer">
                    <div>
                        <div>Premi per Tahun</div>
                        <div>Rp @currency($product->data->total_price)</div>
                    </div>
                    <div class="product-detail-footer-btn">Lanjut</div>
                </div>
            </div>
        </section>
    </div>

    <input type="hidden" value="{{ $product->data->insurance_id }}" id="insuranceId">
    <input type="hidden" value="{{ $product->data->id_product }}" id="productId">
    <input type="hidden" value="{{ $product->data->insurance_name }}" id="insuranceName">
    <input type="hidden" value="{{ $product->data->insurance_product }}" id="productName">
    <input type="hidden" value="{{ $product->data->total_price }}" id="premiPerYear">
    <input type="hidden" value="{{ $orderId }}" id="orderId">

    <!-- tap to top Section Start -->
    <!-- <div class="tap-to-top">
        <a href="#home">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div> -->
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
        $(".product-detail-footer-btn").click(function () {
            $.ajax({
                type: "POST",
                url: "/shop/step2",
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    order_id: $("#orderId").val(),
                    insurance_id: $("#insuranceId").val(),
                    product_id: $('#productId').val(),
                    insurance_name: $("#insuranceName").val(),
                    product_name: $("#productName").val(),
                    premi_per_year: $('#premiPerYear').val()
                },
                success: function (data) {
                    window.location.href = '{{ url("/shop/feature") }}';
                }
            });
        });

    </script>

</body>

</html>
