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
                        <div class="header-child-title">Perluasan Risiko</div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <div class="content-container">
        <section class="risk-expansion">
            <div class="container">
                <div>Pilih perluasan risiko untuk perlindungan mobil Anda</div>
                <div class="risks mt-3">
                    @foreach ($risks->data as $key => $risk)
                    <div class="risk">
                        @if ($risk->is_selected)
                        <div class="risk-header" data-bs-toggle="modal" data-bs-target="#riskModal">
                            @else
                            <div class="risk-header">
                                @endif
                                <div class="form-check risk-header-left">
                                    <div>
                                        @if ($risk->status)
                                        <input class="form-check-input risk-check" name="risk_check" type="checkbox"
                                            value="{{ $risk->price }}" data-id="{{ $risk->id }}"
                                            data-value="{{ $risk->title }}" id="checkbox{{ $key }}" checked disabled>
                                        @else
                                        <input class="form-check-input risk-check" name="risk_check" type="checkbox"
                                            value="{{ $risk->price }}" data-id="{{ $risk->id }}"
                                            data-value="{{ $risk->title }}" id="checkbox{{ $key }}">
                                        @endif
                                    </div>
                                    <div>
                                        <label class="form-check-label ms-2" for="checkbox{{ $key }}">
                                            {{ $risk->title }}
                                        </label>
                                    </div>
                                </div>
                                <div class="d-flex risk-header-right">
                                    @if (!$risk->is_selected)
                                    <div class="risk-price">+Rp @currency($risk->price)</div>
                                    @else
                                    <div class="risk-price"></div>
                                    @endif
                                    <i data-feather="chevron-down" data-bs-toggle="collapse"
                                        href="#collapseExample{{ $key }}" role="button" aria-expanded="false"
                                        aria-controls="collapseExample"></i>
                                </div>
                            </div>
                            <div class="collapse" id="collapseExample{{ $key }}">
                                <div class="card card-body">
                                    {{ $risk->description }}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
        </section>
        <section class="risk-footer">
            <div class="container">
                <div class="risk-footer-group">
                    <div>
                        <div>Premi per Tahun</div>
                        <div id="premiPerYearText">Rp  @currency($premiPerYear)</div>
                    </div>
                    <div class="risk-footer-button">Beli</div>
                </div>
            </div>
        </section>
    </div>

    <input type="hidden" value="{{ $premiPerYear }}" id="premiPerYear">
    <input type="hidden" value="{{ $count }}" id="count">
    <input type="hidden" value="{{ $orderId }}" id="orderId">

    <div class="modal fade modal-navbar" id="riskModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header modal-header-add-car">
                    <h5 class="modal-title" id="exampleModalToggleLabel">Pilih Benefit Anda</h5>
                    <button type="button" class="btn-close btn-close-add-car" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>
            </div>
        </div>
    </div>

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

    <script>
        var count = $("#count").val();

        for (let i = 0; i < count; i++) {
            $("#checkbox" + i).click(function () {
                if ($(this).attr('checked')) {
                    $(this).attr('checked', false);

                    var value = $(this).val();
                    var premiPerYear = $("#premiPerYear").val();
                    var premiPerYearTotal = parseInt(premiPerYear) - parseInt(value);

                    $("#premiPerYearText").html('Rp ' + formatRupiah(premiPerYearTotal.toString()));

                    $("#premiPerYear").val(premiPerYearTotal);
                } else {
                    $(this).attr('checked', true);

                    var value = $(this).val();
                    var premiPerYear = $("#premiPerYear").val();
                    var premiPerYearTotal = parseInt(value) + parseInt(premiPerYear);

                    $("#premiPerYearText").html('Rp ' + formatRupiah(premiPerYearTotal.toString()));

                    $("#premiPerYear").val(premiPerYearTotal);
                }
            });
        }

        $(".risk-footer-button").click(function () {
            var checkbox = $("input:checkbox[name=risk_check]:checked");

            if (checkbox.length > 0) {
                var isRiskExpansion = 1;
            } else {
                var isRiskExpansion = 0;
            }

            var risks = [];

            checkbox.each(function () {
                var data = new Object();
                data.id = $(this).data("id");
                data.title = $(this).data("value");
                data.price = $(this).val();

                risks.push(data);
            });

            $.ajax({
                type: "POST",
                url: "/shop/risk-expansion",
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    order_id: $("#orderId").val(),
                    is_risk_expansion: isRiskExpansion,
                    total_price_premi: $("#premiPerYear").val(),
                    risk_expansion: risks
                },
                success: function (data) {
                    window.location.href = '{{ url("/shop/personal-data") }}';
                }
            });
        });

    </script>

</body>

</html>
