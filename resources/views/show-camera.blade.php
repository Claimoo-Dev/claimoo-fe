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
    <meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
</head>

<body>
    <input type="hidden" name="type_car" value="{{ $typeCar }}" id="typeCar">
    <input type="hidden" name="type_frame" id="typeFrame">

    <div class="display-cover">
        <video autoplay></video>
        <canvas class="d-none"></canvas>

        <div class="frame-parent">
            <img class="frame" alt="">
        </div>

        <div class="controls">
            <a href="{{ route('dashboard') }}">
                <button class="btn btn-outline-info back mb-2 d-none" title="Back"><i
                        data-feather="arrow-left"></i></button>
            </a>
            <br>
            <button class="btn btn-outline-success screenshot d-none" title="ScreenShot"><i
                    data-feather="camera"></i></button>
        </div>

        <button type="button" class="btn btn-outline-primary btn-modal" data-toggle="modal"
            data-target="#exampleModalCenter" onclick="lock()">
            Select Frame
        </button>

        <div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-custom m-0 modal-dialog-centered" role="document">
                <div class="modal-content modal-content-custom">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="card bs-card br-10px depan">
                                    <div>
                                        <img class="card-img-top icon-frame-depan" alt="Icon">
                                    </div>
                                    <div class="card-body p-2 text-center">
                                        <h5 class="card-title mb-0 fz-1rem">Depan</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card bs-card br-10px belakang">
                                    <div>
                                        <img class="card-img-top icon-frame-belakang" alt="Icon">
                                    </div>
                                    <div class="card-body p-2 text-center">
                                        <h5 class="card-title mb-0 fz-1rem">Belakang</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-6">
                                <div class="card bs-card br-10px samping-kanan-depan">
                                    <div>
                                        <img class="card-img-top icon-frame-kanan-depan" alt="Icon">
                                    </div>
                                    <div class="card-body p-2 text-center">
                                        <h5 class="card-title mb-0 fz-1rem">Samping Kanan Depan</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card bs-card br-10px samping-kiri-depan">
                                    <div>
                                        <img class="card-img-top icon-frame-kiri-depan" alt="Icon">
                                    </div>
                                    <div class="card-body p-2 text-center">
                                        <h5 class="card-title mb-0 fz-1rem">Samping Kiri Depan</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-6">
                                <div class="card bs-card br-10px samping-kanan-belakang">
                                    <div>
                                        <img class="card-img-top icon-frame-kanan-belakang" alt="Icon">
                                    </div>
                                    <div class="card-body p-2 text-center">
                                        <h5 class="card-title mb-0 fz-1rem">Samping Kanan Belakang</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card bs-card br-10px samping-kiri-belakang">
                                    <div>
                                        <img class="card-img-top icon-frame-kiri-belakang" alt="Icon">
                                    </div>
                                    <div class="card-body p-2 text-center">
                                        <h5 class="card-title mb-0 fz-1rem">Samping Kiri Belakang</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-6">
                                <div class="card bs-card br-10px lampu-depan-kanan">
                                    <div>
                                        <img class="card-img-top icon-frame-lampu-kanan-depan" alt="Icon">
                                    </div>
                                    <div class="card-body p-2 text-center">
                                        <h5 class="card-title mb-0 fz-1rem">Lampu Depan Kanan</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card bs-card br-10px lampu-depan-kiri">
                                    <div>
                                        <img class="card-img-top icon-frame-lampu-kiri-depan" alt="Icon">
                                    </div>
                                    <div class="card-body p-2 text-center">
                                        <h5 class="card-title mb-0 fz-1rem">Lampu Depan Kiri</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-6">
                                <div class="card bs-card br-10px lampu-belakang-kanan">
                                    <div>
                                        <img class="card-img-top icon-frame-lampu-kanan-belakang" alt="Icon">
                                    </div>
                                    <div class="card-body p-2 text-center">
                                        <h5 class="card-title mb-0 fz-1rem">Lampu Belakang Kanan</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card bs-card br-10px lampu-belakang-kiri">
                                    <div>
                                        <img class="card-img-top icon-frame-lampu-kiri-belakang" alt="Icon">
                                    </div>
                                    <div class="card-body p-2 text-center">
                                        <h5 class="card-title mb-0 fz-1rem">Lampu Belakang Kiri</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal" id="exampleModalCenter1" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-custom m-0 modal-dialog-centered" role="document">
                <div class="modal-content modal-content-custom">
                    <div class="modal-header">
                        <h4 class="modal-title">Deskripsi</h4>
                        <span class="text-red">*tidak wajib</span>
                    </div>
                    <div class="modal-body">
                        <form id="descriptions" class="descriptions" name="descriptions" method="post">
                            <div class="form-check">
                                <input class="form-check-input" name="descriptions" type="checkbox" value="Kaca Pecah"
                                    id="kacaPecah">
                                <label class="form-check-label" for="kacaPecah">
                                    Kaca Pecah
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="descriptions" type="checkbox" value="Kaca Retak"
                                    id="kacaRetak">
                                <label class="form-check-label" for="kacaRetak">
                                    Kaca Retak
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="descriptions" type="checkbox" value="Lecet"
                                    id="lecet">
                                <label class="form-check-label" for="lecet">
                                    Lecet
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="descriptions" type="checkbox" value="Sobek"
                                    id="sobek">
                                <label class="form-check-label" for="sobek">
                                    Sobek
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="descriptions" type="checkbox" value="Penyok"
                                    id="penyok">
                                <label class="form-check-label" for="penyok">
                                    Penyok
                                </label>
                            </div>
                        </form>
                        <div class="text-center mt-2">
                            <button type="button" class="btn btn-primary btn-description">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="progress" id="progressBar">
                        <div class="progress-bar bg-success" id="progressBarProcess" role="progressbar"
                            style="width:0%;" aria-valuemin="0" aria-valuemax="100">0%
                        </div>
                    </div>
                    <div class="modal-body text-center">
                        <p id="closeModalProgress">Tutup</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script src="script.js"></script>
    <script type="text/javascript">
        function lock() {
            let de = document.documentElement;
            if (de.requestFullscreen) {
                de.requestFullscreen();
            } else if (de.mozRequestFullScreen) {
                de.mozRequestFullScreen();
            } else if (de.webkitRequestFullscreen) {
                de.webkitRequestFullscreen();
            } else if (de.msRequestFullscreen) {
                de.msRequestFullscreen();
            }

            screen.orientation.lock('portrait');
        }

    </script>
</body>

</html>
