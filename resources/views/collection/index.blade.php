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

    <style>
        .modal-backdrop {
            display: none !important;
        }

    </style>
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
            <div class="col-6 pe-1" id="mpv" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
            <div class="col-12">
                <div class="card bs-card br-10px text-center bg-color-blue">
                    <div class="card-body p-0">
                        <button class="btn width-100 height-100 text-white" id="signOut">Keluar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="{{ route('collection-upload-image') }}" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="foto">Upload Foto</label>
                            <input type="file" class="form-control-file" id="foto" name="image">
                        </div>

                        <div class="form-group mt-3">
                            <button class="btn btn-primary" type="submit">Kirim</button>
                        </div>
                    </form>
                    <div class="mt-3">Atau <a href="{{ route('collection') }}">Gunakan Kamera</a></div>
                </div>
            </div>
        </div>
    </div>

    <!-- latest jquery-->
    <script src="assets-voxo/js/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap js-->
    <script src="assets-voxo/js/bootstrap/bootstrap.bundle.min.js"></script>

    <script>
        const mpv = document.getElementById('mpv');
        const suv = document.getElementById('suv');
        const crossover = document.getElementById('crossover');
        const hatchback = document.getElementById('hatchback');
        const sedan = document.getElementById('sedan');
        const stationWagon = document.getElementById('stationWagon');
        const jeep = document.getElementById('jeep');
        const pickup = document.getElementById('pickup');
        const signOut = document.getElementById('signOut');

        function setCookie(name, value, days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "") + expires + "; path=/";
        }

        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }

        function eraseCookie(name) {
            document.cookie = name + '=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
        }

        mpv.onclick = () => {
            // localStorage.setItem("type_car", "mpv");
            setCookie('type_car','mpv',1);
            // eraseCookie('type_car');
        };

        suv.onclick = () => {
            navigator.geolocation.getCurrentPosition(function (position) {
                window.location.href = 'collection?type_car=suv&latitude=' + position.coords.latitude +
                    '&longitude=' + position.coords.longitude;
            });
        };

        crossover.onclick = () => {
            navigator.geolocation.getCurrentPosition(function (position) {
                window.location.href = 'collection?type_car=crossover&latitude=' + position.coords
                    .latitude +
                    '&longitude=' + position.coords.longitude;
            });
        };

        hatchback.onclick = () => {
            navigator.geolocation.getCurrentPosition(function (position) {
                window.location.href = 'collection?type_car=hatchback&latitude=' + position.coords
                    .latitude +
                    '&longitude=' + position.coords.longitude;
            });
        };

        sedan.onclick = () => {
            navigator.geolocation.getCurrentPosition(function (position) {
                window.location.href = 'collection?type_car=sedan&latitude=' + position.coords.latitude +
                    '&longitude=' + position.coords.longitude;
            });
        };

        stationWagon.onclick = () => {
            navigator.geolocation.getCurrentPosition(function (position) {
                window.location.href = 'collection?type_car=stationWagon&latitude=' + position.coords
                    .latitude +
                    '&longitude=' + position.coords.longitude;
            });
        };

        jeep.onclick = () => {
            navigator.geolocation.getCurrentPosition(function (position) {
                window.location.href = 'collection?type_car=jeep&latitude=' + position.coords.latitude +
                    '&longitude=' + position.coords.longitude;
            });
        };

        pickup.onclick = () => {
            navigator.geolocation.getCurrentPosition(function (position) {
                window.location.href = 'collection?type_car=pickup&latitude=' + position.coords.latitude +
                    '&longitude=' + position.coords.longitude;
            });
        };

        signOut.onclick = () => {
            $.ajax({
                type: "POST",
                url: "/sign-out",
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                }
            }).done(function (o) {
                window.location.href = 'sign-in';
            });
        };

        navigator.geolocation.getCurrentPosition(function (position) {
            position.coords.latitude, position.coords.longitude;
        });

        navigator.mediaDevices.getUserMedia({
            video: true
        });

        $(document).ready(function () {
            window.setTimeout(function () {
                $(".alert").fadeTo(500, 0).slideUp(500, function () {
                    $(this).remove();
                });
            }, 500);
        });

    </script>
</body>

</html>
