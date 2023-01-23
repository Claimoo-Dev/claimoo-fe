<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="assets/img/favicon.png" type="image/x-icon" />
    <title>Claimoo - Dashboard</title>

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="assets-voxo/css/vendors/font-awesome.css">

    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="assets-voxo/css/vendors/bootstrap.css">

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="assets-voxo/style.css">
</head>

<body>
    <div class="container">
        <div class="width-100 img-center mt-3">
            <img src="assets/img/logo2.png" alt="" class="width-50">
        </div>

        @if ($message = Session::get('success'))
        <div class="alert alert-success mt-3">{{ $message }}</div>
        @endif

        @if ($message = Session::get('error'))
            <div class="alert alert-danger mt-3">{{ $message }}</div>
        @endif

        <div class="row mt-3">
            <div class="col-12">
                <div class="card bs-card br-10px p-3">
                    <p class="text-center fw-500 fz-18">Hai {{ $user->data->name }}</p>
                    <p class="text-center fw-500 fz-18">Syarat & Ketentuan :</p>
                    <div class="tnc">
                        <img class="img-fluid" src="tnc/tnc1.png" alt="">
                    </div>
                    <div class="tnc">
                        <img class="img-fluid" src="tnc/tnc2.png" alt="">
                    </div>
                    <div class="tnc">
                        <img class="img-fluid" src="tnc/tnc3.png" alt="">
                    </div>
                    <div class="tnc">
                        <img class="img-fluid" src="tnc/tnc4.png" alt="">
                    </div>
                    <div class="tnc">
                        <img class="img-fluid" src="tnc/tnc5.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-6 pe-1" id="mpv">
                <div class="card bs-card br-10px">
                    <div class="p-2">
                        <img class="card-img-top" src="type-car-frame/mpv.png" alt="Card image cap">
                    </div>
                </div>
            </div>
            <div class="col-6 ps-1" id="suv">
                <div class="card bs-card br-10px">
                    <div class="p-2">
                        <img class="card-img-top" src="type-car-frame/suv.png" alt="Card image cap">
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-1">
            <div class="col-6 pe-1" id="crossover">
                <div class="card bs-card br-10px">
                    <div class="p-2">
                        <img class="card-img-top" src="type-car-frame/crossover.png" alt="Card image cap">
                    </div>
                </div>
            </div>
            <div class="col-6 ps-1" id="hatchback">
                <div class="card bs-card br-10px">
                    <div class="p-2">
                        <img class="card-img-top" src="type-car-frame/hatchback.png" alt="Card image cap">
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-1">
            <div class="col-6 pe-1" id="sedan">
                <div class="card bs-card br-10px">
                    <div class="p-2">
                        <img class="card-img-top" src="type-car-frame/sedan.png" alt="Card image cap">
                    </div>
                </div>
            </div>
            <div class="col-6 ps-1" id="stationWagon">
                <div class="card bs-card br-10px">
                    <div class="p-2">
                        <img class="card-img-top" src="type-car-frame/station-wagon.png" alt="Card image cap">
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-1">
            <div class="col-6 pe-1" id="jeep">
                <div class="card bs-card br-10px">
                    <div class="p-2">
                        <img class="card-img-top" src="type-car-frame/jeep.png" alt="Card image cap">
                    </div>
                </div>
            </div>
            <div class="col-6 ps-1" id="pickup">
                <div class="card bs-card br-10px">
                    <div class="p-2">
                        <img class="card-img-top" src="type-car-frame/pickup.png" alt="Card image cap">
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4 mb-4">
            <div class="col-4 pe-1">
                <div class="card bs-card br-10px text-center bg-color-blue">
                    <div class="card-body p-0 height-75px">
                        <button class="btn width-100 height-100 br-10px text-white" id="signOut">Keluar</button>
                    </div>
                </div>
            </div>
            <div class="col-4 pe-1 ps-1">
                <div class="card bs-card br-10px text-center bg-color-blue">
                    <div class="card-body p-0 height-75px">
                        <button class="btn width-100 height-100 br-10px text-white" id="feedback">Beri Masukan</button>
                    </div>
                </div>
            </div>
            <div class="col-4 ps-1">
                <div class="card bs-card br-10px text-center bg-color-blue">
                    <div class="card-body p-0 height-75px">
                        <button class="btn width-100 height-100 br-10px text-white" id="listImage">Daftar Foto</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- latest jquery-->
    <script src="assets-voxo/js/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap js-->
    <script src="assets-voxo/js/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- js -->
    <script src="assets-voxo/script.js"></script>
</body>

</html>
