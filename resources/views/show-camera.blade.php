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
    <div class="display-cover">
        <video autoplay></video>
        <canvas class="d-none"></canvas>

        <!-- <div class="video-options">
            <select name="" id="" class="custom-select">
                <option value="">Select camera</option>
            </select>
        </div> -->

        <!-- <img class="screenshot-image d-none" alt=""> -->

        <div class="frame-parent">
            <img class="frame d-none" src="frame/APV-granmax/granmax-belakang.png" alt="">
        </div>

        <div class="controls">
            <button class="btn btn-danger play" title="Play"><i data-feather="play-circle"></i></button>
            <button class="btn btn-info pause d-none" title="Pause"><i data-feather="pause"></i></button>
            <br>
            <button class="btn btn-outline-success screenshot d-none" title="ScreenShot"><i
                    data-feather="image"></i></button>
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-primary btn-modal d-none" data-toggle="modal" data-target="#exampleModalCenter">
            Select Frame
        </button>

        <!-- Modal -->
        <div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <!-- <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div> -->
                    <div class="modal-body">
                        ...
                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div> -->
                </div>
            </div>
        </div>

        <!-- <div class="video-options">
            <select name="" id="" class="custom-select">
                <option value="">Depan</option>
                <option value="">Belakang</option>
                <option value="">Samping Kanan Depan</option>
                <option value="">Samping Kiri Depan</option>
                <option value="">Samping Kanan Belakang</option>
                <option value="">Samping Kiri Belakang</option>
                <option value="">Lampu Depan Kanan</option>
                <option value="">Lampu Depan Kiri</option>
                <option value="">Lampu Belakang Kanan</option>
                <option value="">Lampu Belakang Kanan</option>
            </select>
        </div> -->
    </div>

    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>
