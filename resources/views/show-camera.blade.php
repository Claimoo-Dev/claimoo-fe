<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Claimoo</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <input type="hidden" name="user_id" value="{{ $userId }}" id="userId">

    <div class="display-cover">
        <video autoplay></video>
        <canvas class="d-none"></canvas>

        <div class="frame-parent">
            <img class="frame d-none" alt="">
        </div>

        <div class="controls">
            <button class="btn btn-danger play" title="Play"><i data-feather="play-circle"></i></button>
            <button class="btn btn-info pause d-none" title="Pause"><i data-feather="pause"></i></button>
            <br>
            <button class="btn btn-outline-success screenshot d-none" title="ScreenShot"><i
                    data-feather="image"></i></button>
        </div>

        <button type="button" class="btn btn-outline-primary btn-modal d-none" data-toggle="modal"
            data-target="#exampleModalCenter">
            Select Frame
        </button>

        <div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button class="btn btn-outline-primary col-12 mb-1 depan">Depan</button>
                        <button class="btn btn-outline-primary col-12 mb-1 belakang">Belakang</button>
                        <button class="btn btn-outline-primary col-12 mb-1 samping-kanan-depan">Samping Kanan Depan</button>
                        <button class="btn btn-outline-primary col-12 mb-1 samping-kiri-depan">Samping Kiri Depan</button>
                        <button class="btn btn-outline-primary col-12 mb-1 samping-kanan-belakang">Samping Kanan
                            Belakang</button>
                        <button class="btn btn-outline-primary col-12 mb-1 samping-kiri-belakang">Samping Kiri
                            Belakang</button>
                        <button class="btn btn-outline-primary col-12 mb-1 lampu-depan-kanan">Lampu Depan Kanan</button>
                        <button class="btn btn-outline-primary col-12 mb-1 lampu-depan-kiri">Lampu Depan Kiri</button>
                        <button class="btn btn-outline-primary col-12 mb-1 lampu-belakang-kanan">Lampu Belakang Kanan</button>
                        <button class="btn btn-outline-primary col-12 mb-1 lampu-belakang-kiri">Lampu Belakang Kiri</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="alert alert-success alert-dismissible fade" role="alert" id="success-alert">
        Success!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script src="script.js"></script>
</body>

</html>
