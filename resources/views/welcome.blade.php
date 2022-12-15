<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Claimoo</title>
    <meta name="description" content="Claimoo Vehicle Inspection System">
    <meta name="keywords"
        content="bootstrap, wallet, banking, fintech mobile template, cordova, phonegap, mobile, html, responsive" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="manifest" href="__manifest.json">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
</head>

<body>

    <!-- loader -->
    <div id="loader">
        <img src="assets/img/loading-icon.png" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader bg-primary text-light">
        <div class="left">
            <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            <img src="assets/img/logo.png" alt="logo" class="logo">
        </div>
        <!-- <div class="right">
            <a href="app-notifications.html" class="headerButton">
                <ion-icon class="icon" name="notifications-outline"></ion-icon>
                <span class="badge badge-danger">4</span>
            </a>
            <a href="app-settings.html" class="headerButton">
                <img src="assets/img/sample/avatar/avatar1.jpg" alt="image" class="imaged w32">
                <span class="badge badge-danger">6</span>
            </a>
        </div> -->
    </div>
    <!-- * App Header -->


    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section mb-2">
            <div class="section-title">Isi Data</div>
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('camera') }}" method="get">
                    <!-- @csrf -->
                        <div class="form-group boxed">
                            <div class="input-wrapper">
                                <label class="label" for="userId">Nama Lengkap</label>
                                <select class="livesearch form-control" id="userId" name="user_id" required></select>
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <input type="hidden" name="latitude" id="latitude">
                        <input type="hidden" name="longitude" id="longitude">

                        <!-- <div class="form-group boxed">
                            <div class="input-wrapper">
                                <label class="label" for="select4b">Jenis Mobil</label>
                                <select class="form-control custom-select" id="select4b" name="type_id" required>
                                    <option value="1">Sedan</option>
                                    <option value="2">MPV</option>
                                    <option value="3">SUV</option>
                                    <option value="4">Crossover</option>
                                    <option value="5">Hatckback</option>
                                    <option value="6">Sport</option>
                                    <option value="7">Convertible</option>
                                    <option value="8">Station Wagon</option>
                                    <option value="9">Off Road</option>
                                    <option value="10">Pick Up</option>
                                </select>
                            </div>
                        </div> -->
                        
                        <li class="splide__slide mt-3">
                            <div class="bill-box">
                                <div class="price">Mohon Aktifkan Kamera & Location</div>
                                <p>untuk menggunakan layanan ini</p>
                                <div class="price">Pastikan tidak ada obyek lain yang berada di dekat mobil seperti tangan, pensil, kendaraan lain</div>
                                <button class="btn btn-primary btn-block btn-sm" type="submit">Take Picture</button>
                            </div>
                        </li>
                    </form>
                </div>
            </div>
        </div>

        <!-- Wallet Card -->
        <!-- <div class="section mb-2">
            <div class="wallet-card">

                <li class="splide__slide">
                    <div class="bill-box">
                        
                        <div class="price">Mohon Aktifkan Kamera & Location</div>
                        <p>untuk menggunakan layanan ini</p>
                        <a href="cam/camera.html" class="btn btn-primary btn-block btn-sm">Take Picture</a>
                    </div>
                </li>

            </div>
        </div> -->
        <!-- Wallet Card -->

        <!-- app footer -->
        <!-- <div class="appFooter">
            <div class="footer-title">
                Copyright © Claimoo 2022. All Rights Reserved.
            </div>
            Vehicle Inspection System.
        </div> -->
        <!-- * app footer -->

    </div>
    <!-- * App Capsule -->


    <!-- App Bottom Menu -->
    <div class="appBottomMenu">
        <a href="index.html" class="item active">
            <div class="col">
                <ion-icon name="pie-chart-outline"></ion-icon>
                <strong>Overview</strong>
            </div>
        </a>
        <a href="app-pages.html" class="item">
            <div class="col">
                <ion-icon name="document-text-outline"></ion-icon>
                <strong>Pages</strong>
            </div>
        </a>
        <a href="app-components.html" class="item">
            <div class="col">
                <ion-icon name="apps-outline"></ion-icon>
                <strong>Components</strong>
            </div>
        </a>
        <a href="app-cards.html" class="item">
            <div class="col">
                <ion-icon name="card-outline"></ion-icon>
                <strong>My Polis</strong>
            </div>
        </a>
        <a href="app-settings.html" class="item">
            <div class="col">
                <ion-icon name="settings-outline"></ion-icon>
                <strong>Settings</strong>
            </div>
        </a>
    </div>
    <!-- * App Bottom Menu -->

    <!-- App Sidebar -->
    <div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <!-- profile box -->
                    <div class="profileBox pt-2 pb-2">
                        <div class="image-wrapper">
                            <img src="assets/img/logo2.png" alt="image" class="imaged  w36">
                        </div>
                        <div class="in">
                            <strong>Agung Sutikno</strong>
                            <div class="text-muted">123456789</div>
                        </div>
                        <a href="#" class="btn btn-link btn-icon sidebar-close" data-bs-dismiss="modal">
                            <ion-icon name="close-outline"></ion-icon>
                        </a>
                    </div>
                    <!-- * profile box -->


                </div>
            </div>
        </div>
    </div>
    <!-- * App Sidebar -->

    <!-- ========= JS Files =========  -->
    <!-- Bootstrap -->
    <script src="assets/js/lib/bootstrap.bundle.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->
    <script src="assets/js/plugins/splide/splide.min.js"></script>
    <!-- Base Js File -->
    <script src="assets/js/base.js"></script>

    <script>
        AddtoHome("2000", "repeat");
    </script>

    <script type="text/javascript">
        $('.livesearch').select2({
            ajax: {
                url: 'api/select2',
                dataType: 'json',
                delay: 250,
                processResults: function (data) {
                    return {
                        results: $.map(data, function (item) {
                            return {
                                text: item.name,
                                id: item.id
                            }
                        })
                    };
                },
                cache: true
            }
        });

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else { 
            console.log("Geolocation is not supported by this browser.");
        }

        function showPosition(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;

            document.getElementById("latitude").value = latitude;
            document.getElementById("longitude").value = longitude;
        }
    </script>

</body>
</html>