<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        <div class="w-100 text-center mt-3">
            <p class="text-welcome fw-900">Selamat Datang Yusuf, Mohon pilih jenis mobil</p>
        </div>
        <div class="row mt-3">
            <div class="col-6">
                <div class="card text-center">
                    <div class="card-body p-0 height-50px">
                        <button class="btn btn-outline-primary width-100 height-100" id="mpv">MPV</button>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card text-center">
                    <div class="card-body p-0 height-50px">
                        <button class="btn btn-outline-primary width-100 height-100" id="suv">SUV</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-6">
                <div class="card text-center">
                    <div class="card-body p-0 height-50px">
                        <button class="btn btn-outline-primary width-100 height-100" id="crossover">Crossover</button>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card text-center">
                    <div class="card-body p-0 height-50px">
                        <button class="btn btn-outline-primary width-100 height-100" id="hatchback">Hatchback</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-6">
                <div class="card text-center">
                    <div class="card-body p-0 height-50px">
                        <button class="btn btn-outline-primary width-100 height-100" id="sedan">Sedan</button>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card text-center">
                    <div class="card-body p-0 height-50px">
                        <button class="btn btn-outline-primary width-100 height-100" id="stationWagon">Station Wagon</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-6">
                <div class="card text-center">
                    <div class="card-body p-0 height-50px">
                        <button class="btn btn-outline-primary width-100 height-100" id="jeep">Jeep</button>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card text-center">
                    <div class="card-body p-0 height-50px">
                        <button class="btn btn-outline-primary width-100 height-100" id="pickup">Pickup</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">
                <a href="{{ url('sign-in') }}" class="theme-color td-none">Sign Out</a>
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
