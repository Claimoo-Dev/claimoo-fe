<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon" />
    <title>Claimoo - Camera</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
</head>

<body>
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
            Pilih Frame
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
    </div>

    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script>
        feather.replace();

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

        const controls = document.querySelector('.controls');
        const cameraOptions = document.querySelector('.video-options>select');
        const video = document.querySelector('video');
        const canvas = document.querySelector('canvas');
        const btnModal = document.querySelector('.btn-modal');
        const modal = document.querySelector('.modal');
        const back = document.querySelector('.back');
        const screenshot = document.querySelector('.screenshot');
        const frame = document.querySelector('.frame');
        const depan = document.querySelector('.depan');
        const belakang = document.querySelector('.belakang');
        const sampingKananDepan = document.querySelector('.samping-kanan-depan');
        const sampingKiriDepan = document.querySelector('.samping-kiri-depan');
        const sampingKananBelakang = document.querySelector('.samping-kanan-belakang');
        const sampingKiriBelakang = document.querySelector('.samping-kiri-belakang');
        const lampuDepanKanan = document.querySelector('.lampu-depan-kanan');
        const lampuDepanKiri = document.querySelector('.lampu-depan-kiri');
        const lampuBelakangKanan = document.querySelector('.lampu-belakang-kanan');
        const lampuBelakangKiri = document.querySelector('.lampu-belakang-kiri');
        const typeCar = getCookie('type_car');
        const typeFrame = document.getElementById("typeFrame");
        const iconFrameDepan = document.querySelector(".icon-frame-depan");
        const iconFrameBelakang = document.querySelector(".icon-frame-belakang");
        const iconFrameKananDepan = document.querySelector(".icon-frame-kanan-depan");
        const iconFrameKiriDepan = document.querySelector(".icon-frame-kiri-depan");
        const iconFrameKananBelakang = document.querySelector(".icon-frame-kanan-belakang");
        const iconFrameKiriBelakang = document.querySelector(".icon-frame-kiri-belakang");
        const iconFrameLampuKananDepan = document.querySelector(".icon-frame-lampu-kanan-depan");
        const iconFrameLampuKiriDepan = document.querySelector(".icon-frame-lampu-kiri-depan");
        const iconFrameLampuKananBelakang = document.querySelector(".icon-frame-lampu-kanan-belakang");
        const iconFrameLampuKiriBelakang = document.querySelector(".icon-frame-lampu-kiri-belakang");
        const closeModalProgress = document.getElementById("closeModalProgress");
        const statusImage = document.getElementById("statusImage");
        const identificationImage = document.getElementById("identificationImage");
        const damage = document.getElementById("damage");
        const image = document.getElementById("image");
        const result = document.getElementById("result");
        let streamStarted = false;

        if (typeCar == 'mpv') {
            iconFrameDepan.src = "icon-frame/innova/depan.png";
            iconFrameBelakang.src = "icon-frame/innova/belakang.png";
            iconFrameKananDepan.src = "icon-frame/innova/kanan-depan.png";
            iconFrameKiriDepan.src = "icon-frame/innova/kiri-depan.png";
            iconFrameKananBelakang.src = "icon-frame/innova/kanan-belakang.png";
            iconFrameKiriBelakang.src = "icon-frame/innova/kiri-belakang.png";
            iconFrameLampuKananDepan.src = "icon-frame/innova/lampu-kanan-depan.png";
            iconFrameLampuKiriDepan.src = "icon-frame/innova/lampu-kiri-depan.png";
            iconFrameLampuKananBelakang.src = "icon-frame/innova/lampu-kanan-belakang.png";
            iconFrameLampuKiriBelakang.src = "icon-frame/innova/lampu-kiri-belakang.png";
        } else if (typeCar == 'suv') {
            iconFrameDepan.src = "icon-frame/fortuner/depan.png";
            iconFrameBelakang.src = "icon-frame/fortuner/belakang.png";
            iconFrameKananDepan.src = "icon-frame/fortuner/kanan-depan.png";
            iconFrameKiriDepan.src = "icon-frame/fortuner/kiri-depan.png";
            iconFrameKananBelakang.src = "icon-frame/fortuner/kanan-belakang.png";
            iconFrameKiriBelakang.src = "icon-frame/fortuner/kiri-belakang.png";
            iconFrameLampuKananDepan.src = "icon-frame/fortuner/lampu-kanan-depan.png";
            iconFrameLampuKiriDepan.src = "icon-frame/fortuner/lampu-kiri-depan.png";
            iconFrameLampuKananBelakang.src = "icon-frame/fortuner/lampu-kanan-belakang.png";
            iconFrameLampuKiriBelakang.src = "icon-frame/fortuner/lampu-kiri-belakang.png";
        } else if (typeCar == 'crossover') {
            iconFrameDepan.src = "icon-frame/mobilio/depan.png";
            iconFrameBelakang.src = "icon-frame/mobilio/belakang.png";
            iconFrameKananDepan.src = "icon-frame/mobilio/kanan-depan.png";
            iconFrameKiriDepan.src = "icon-frame/mobilio/kiri-depan.png";
            iconFrameKananBelakang.src = "icon-frame/mobilio/kanan-belakang.png";
            iconFrameKiriBelakang.src = "icon-frame/mobilio/kiri-belakang.png";
            iconFrameLampuKananDepan.src = "icon-frame/mobilio/lampu-kanan-depan.png";
            iconFrameLampuKiriDepan.src = "icon-frame/mobilio/lampu-kiri-depan.png";
            iconFrameLampuKananBelakang.src = "icon-frame/mobilio/lampu-kanan-belakang.png";
            iconFrameLampuKiriBelakang.src = "icon-frame/mobilio/lampu-kiri-belakang.png";
        } else if (typeCar == 'hatchback') {
            iconFrameDepan.src = "icon-frame/brio/depan.png";
            iconFrameBelakang.src = "icon-frame/brio/belakang.png";
            iconFrameKananDepan.src = "icon-frame/brio/kanan-depan.png";
            iconFrameKiriDepan.src = "icon-frame/brio/kiri-depan.png";
            iconFrameKananBelakang.src = "icon-frame/brio/kanan-belakang.png";
            iconFrameKiriBelakang.src = "icon-frame/brio/kiri-belakang.png";
            iconFrameLampuKananDepan.src = "icon-frame/brio/lampu-kanan-depan.png";
            iconFrameLampuKiriDepan.src = "icon-frame/brio/lampu-kiri-depan.png";
            iconFrameLampuKananBelakang.src = "icon-frame/brio/lampu-kanan-belakang.png";
            iconFrameLampuKiriBelakang.src = "icon-frame/brio/lampu-kiri-belakang.png";
        } else if (typeCar == 'sedan') {
            iconFrameDepan.src = "icon-frame/civic/depan.png";
            iconFrameBelakang.src = "icon-frame/civic/belakang.png";
            iconFrameKananDepan.src = "icon-frame/civic/kanan-depan.png";
            iconFrameKiriDepan.src = "icon-frame/civic/kiri-depan.png";
            iconFrameKananBelakang.src = "icon-frame/civic/kanan-belakang.png";
            iconFrameKiriBelakang.src = "icon-frame/civic/kiri-belakang.png";
            iconFrameLampuKananDepan.src = "icon-frame/civic/lampu-kanan-depan.png";
            iconFrameLampuKiriDepan.src = "icon-frame/civic/lampu-kiri-depan.png";
            iconFrameLampuKananBelakang.src = "icon-frame/civic/lampu-kanan-belakang.png";
            iconFrameLampuKiriBelakang.src = "icon-frame/civic/lampu-kiri-belakang.png";
        } else if (typeCar == 'stationWagon') {
            iconFrameDepan.src = "icon-frame/mini-cooper/depan.png";
            iconFrameBelakang.src = "icon-frame/mini-cooper/belakang.png";
            iconFrameKananDepan.src = "icon-frame/mini-cooper/kanan-depan.png";
            iconFrameKiriDepan.src = "icon-frame/mini-cooper/kiri-depan.png";
            iconFrameKananBelakang.src = "icon-frame/mini-cooper/kanan-belakang.png";
            iconFrameKiriBelakang.src = "icon-frame/mini-cooper/kiri-belakang.png";
            iconFrameLampuKananDepan.src = "icon-frame/mini-cooper/lampu-kanan-depan.png";
            iconFrameLampuKiriDepan.src = "icon-frame/mini-cooper/lampu-kiri-depan.png";
            iconFrameLampuKananBelakang.src = "icon-frame/mini-cooper/lampu-kanan-belakang.png";
            iconFrameLampuKiriBelakang.src = "icon-frame/mini-cooper/lampu-kiri-belakang.png";
        } else if (typeCar == 'jeep') {
            iconFrameDepan.src = "icon-frame/jimny/depan.png";
            iconFrameBelakang.src = "icon-frame/jimny/belakang.png";
            iconFrameKananDepan.src = "icon-frame/jimny/kanan-depan.png";
            iconFrameKiriDepan.src = "icon-frame/jimny/kiri-depan.png";
            iconFrameKananBelakang.src = "icon-frame/jimny/kanan-belakang.png";
            iconFrameKiriBelakang.src = "icon-frame/jimny/kiri-belakang.png";
            iconFrameLampuKananDepan.src = "icon-frame/jimny/lampu-kanan-depan.png";
            iconFrameLampuKiriDepan.src = "icon-frame/jimny/lampu-kiri-depan.png";
            iconFrameLampuKananBelakang.src = "icon-frame/jimny/lampu-kanan-belakang.png";
            iconFrameLampuKiriBelakang.src = "icon-frame/jimny/lampu-kiri-belakang.png";
        } else if (typeCar == 'pickup') {
            iconFrameDepan.src = "icon-frame/granmax/depan.png";
            iconFrameBelakang.src = "icon-frame/granmax/belakang.png";
            iconFrameKananDepan.src = "icon-frame/granmax/kanan-depan.png";
            iconFrameKiriDepan.src = "icon-frame/granmax/kiri-depan.png";
            iconFrameKananBelakang.src = "icon-frame/granmax/kanan-belakang.png";
            iconFrameKiriBelakang.src = "icon-frame/granmax/kiri-belakang.png";
            iconFrameLampuKananDepan.src = "icon-frame/granmax/lampu-kanan-depan.png";
            iconFrameLampuKiriDepan.src = "icon-frame/granmax/lampu-kiri-depan.png";
            iconFrameLampuKananBelakang.src = "icon-frame/granmax/lampu-kanan-belakang.png";
            iconFrameLampuKiriBelakang.src = "icon-frame/granmax/lampu-kiri-belakang.png";
        }

        const constraints = {
            video: {
                width: {
                    min: 1280,
                    ideal: 1920,
                    max: 2560,
                },
                height: {
                    min: 720,
                    ideal: 1080,
                    max: 1440
                },
                facingMode: {
                    exact: 'user'
                }
            }
        };

        depan.onclick = () => {
            $('#exampleModalCenter').modal('hide');

            if (typeCar == 'mpv') {
                frame.src = "transparent/innova/depan.png";
            } else if (typeCar == 'suv') {
                frame.src = "transparent/fortuner/depan.png";
            } else if (typeCar == 'crossover') {
                frame.src = "transparent/mobilio/depan.png";
            } else if (typeCar == 'hatchback') {
                frame.src = "transparent/brio/depan.png";
            } else if (typeCar == 'sedan') {
                frame.src = "transparent/civic/depan.png";
            } else if (typeCar == 'stationWagon') {
                frame.src = "transparent/mini-cooper/depan.png";
            } else if (typeCar == 'jeep') {
                frame.src = "transparent/ignis/depan.png";
            } else if (typeCar == 'pickup') {
                frame.src = "transparent/granmax/depan.png";
            }

            screenshot.classList.remove('d-none');
            back.classList.remove('d-none');
            typeFrame.value = "depan";
        };

        belakang.onclick = () => {
            $('#exampleModalCenter').modal('hide');

            if (typeCar == 'mpv') {
                frame.src = "transparent/innova/belakang.png";
            } else if (typeCar == 'suv') {
                frame.src = "transparent/fortuner/belakang.png";
            } else if (typeCar == 'crossover') {
                frame.src = "transparent/mobilio/belakang.png";
            } else if (typeCar == 'hatchback') {
                frame.src = "transparent/brio/belakang.png";
            } else if (typeCar == 'sedan') {
                frame.src = "transparent/civic/belakang.png";
            } else if (typeCar == 'stationWagon') {
                frame.src = "transparent/mini-cooper/belakang.png";
            } else if (typeCar == 'jeep') {
                frame.src = "transparent/ignis/belakang.png";
            } else if (typeCar == 'pickup') {
                frame.src = "transparent/granmax/belakang.png";
            }

            screenshot.classList.remove('d-none');
            back.classList.remove('d-none');
            typeFrame.value = "belakang";
        };

        sampingKananDepan.onclick = () => {
            $('#exampleModalCenter').modal('hide');

            if (typeCar == 'mpv') {
                frame.src = "transparent/innova/samping-kanan-depan.png";
            } else if (typeCar == 'suv') {
                frame.src = "transparent/fortuner/samping-kanan-depan.png";
            } else if (typeCar == 'crossover') {
                frame.src = "transparent/mobilio/samping-kanan-depan.png";
            } else if (typeCar == 'hatchback') {
                frame.src = "transparent/brio/samping-kanan-depan.png";
            } else if (typeCar == 'sedan') {
                frame.src = "transparent/civic/samping-kanan-depan.png";
            } else if (typeCar == 'stationWagon') {
                frame.src = "transparent/mini-cooper/samping-kanan-depan.png";
            } else if (typeCar == 'jeep') {
                frame.src = "transparent/ignis/samping-kanan-depan.png";
            } else if (typeCar == 'pickup') {
                frame.src = "transparent/granmax/samping-kanan-depan.png";
            }

            screenshot.classList.remove('d-none');
            back.classList.remove('d-none');
            typeFrame.value = "kanan depan";
        };

        sampingKiriDepan.onclick = () => {
            $('#exampleModalCenter').modal('hide');

            if (typeCar == 'mpv') {
                frame.src = "transparent/innova/samping-kiri-depan.png";
            } else if (typeCar == 'suv') {
                frame.src = "transparent/fortuner/samping-kiri-depan.png";
            } else if (typeCar == 'crossover') {
                frame.src = "transparent/mobilio/samping-kiri-depan.png";
            } else if (typeCar == 'hatchback') {
                frame.src = "transparent/brio/samping-kiri-depan.png";
            } else if (typeCar == 'sedan') {
                frame.src = "transparent/civic/samping-kiri-depan.png";
            } else if (typeCar == 'stationWagon') {
                frame.src = "transparent/mini-cooper/samping-kiri-depan.png";
            } else if (typeCar == 'jeep') {
                frame.src = "transparent/ignis/samping-kiri-depan.png";
            } else if (typeCar == 'pickup') {
                frame.src = "transparent/granmax/samping-kiri-depan.png";
            }

            screenshot.classList.remove('d-none');
            back.classList.remove('d-none');
            typeFrame.value = "kiri depan";
        };

        sampingKananBelakang.onclick = () => {
            $('#exampleModalCenter').modal('hide');

            if (typeCar == 'mpv') {
                frame.src = "transparent/innova/samping-kanan-belakang.png";
            } else if (typeCar == 'suv') {
                frame.src = "transparent/fortuner/samping-kanan-belakang.png";
            } else if (typeCar == 'crossover') {
                frame.src = "transparent/mobilio/samping-kanan-belakang.png";
            } else if (typeCar == 'hatchback') {
                frame.src = "transparent/brio/samping-kanan-belakang.png";
            } else if (typeCar == 'sedan') {
                frame.src = "transparent/civic/samping-kanan-belakang.png";
            } else if (typeCar == 'stationWagon') {
                frame.src = "transparent/mini-cooper/samping-kanan-belakang.png";
            } else if (typeCar == 'jeep') {
                frame.src = "transparent/ignis/samping-kanan-belakang.png";
            } else if (typeCar == 'pickup') {
                frame.src = "transparent/granmax/samping-kanan-belakang.png";
            }

            screenshot.classList.remove('d-none');
            back.classList.remove('d-none');
            typeFrame.value = "kanan belakang";
        };

        sampingKiriBelakang.onclick = () => {
            $('#exampleModalCenter').modal('hide');

            if (typeCar == 'mpv') {
                frame.src = "transparent/innova/samping-kiri-belakang.png";
            } else if (typeCar == 'suv') {
                frame.src = "transparent/fortuner/samping-kiri-belakang.png";
            } else if (typeCar == 'crossover') {
                frame.src = "transparent/mobilio/samping-kiri-belakang.png";
            } else if (typeCar == 'hatchback') {
                frame.src = "transparent/brio/samping-kiri-belakang.png";
            } else if (typeCar == 'sedan') {
                frame.src = "transparent/civic/samping-kiri-belakang.png";
            } else if (typeCar == 'stationWagon') {
                frame.src = "transparent/mini-cooper/samping-kiri-belakang.png";
            } else if (typeCar == 'jeep') {
                frame.src = "transparent/ignis/samping-kiri-belakang.png";
            } else if (typeCar == 'pickup') {
                frame.src = "transparent/granmax/samping-kiri-belakang.png";
            }

            screenshot.classList.remove('d-none');
            back.classList.remove('d-none');
            typeFrame.value = "kiri belakang";
        };

        lampuDepanKanan.onclick = () => {
            $('#exampleModalCenter').modal('hide');
            
            if (typeCar == 'mpv') {
                frame.src = "transparent/innova/lampu-depan-kanan.png";
            } else if (typeCar == 'suv') {
                frame.src = "transparent/fortuner/lampu-depan-kanan.png";
            } else if (typeCar == 'crossover') {
                frame.src = "transparent/mobilio/lampu-depan-kanan.png";
            } else if (typeCar == 'hatchback') {
                frame.src = "transparent/brio/lampu-depan-kanan.png";
            } else if (typeCar == 'sedan') {
                frame.src = "transparent/civic/lampu-depan-kanan.png";
            } else if (typeCar == 'stationWagon') {
                frame.src = "transparent/mini-cooper/lampu-depan-kanan.png";
            } else if (typeCar == 'jeep') {
                frame.src = "transparent/ignis/lampu-depan-kanan.png";
            } else if (typeCar == 'pickup') {
                frame.src = "transparent/granmax/lampu-depan-kanan.png";
            }

            screenshot.classList.remove('d-none');
            back.classList.remove('d-none');
            typeFrame.value = "lampu kanan depan";
        };

        lampuDepanKiri.onclick = () => {
            $('#exampleModalCenter').modal('hide');

            if (typeCar == 'mpv') {
                frame.src = "transparent/innova/lampu-depan-kiri.png";
            } else if (typeCar == 'suv') {
                frame.src = "transparent/fortuner/lampu-depan-kiri.png";
            } else if (typeCar == 'crossover') {
                frame.src = "transparent/mobilio/lampu-depan-kiri.png";
            } else if (typeCar == 'hatchback') {
                frame.src = "transparent/brio/lampu-depan-kiri.png";
            } else if (typeCar == 'sedan') {
                frame.src = "transparent/civic/lampu-depan-kiri.png";
            } else if (typeCar == 'stationWagon') {
                frame.src = "transparent/mini-cooper/lampu-depan-kiri.png";
            } else if (typeCar == 'jeep') {
                frame.src = "transparent/ignis/lampu-depan-kiri.png";
            } else if (typeCar == 'pickup') {
                frame.src = "transparent/granmax/lampu-depan-kiri.png";
            }

            screenshot.classList.remove('d-none');
            back.classList.remove('d-none');
            typeFrame.value = "lampu kiri depan";
        };

        lampuBelakangKanan.onclick = () => {
            $('#exampleModalCenter').modal('hide');
            
            if (typeCar == 'mpv') {
                frame.src = "transparent/innova/lampu-belakang-kanan.png";
            } else if (typeCar == 'suv') {
                frame.src = "transparent/fortuner/lampu-belakang-kanan.png";
            } else if (typeCar == 'crossover') {
                frame.src = "transparent/mobilio/lampu-belakang-kanan.png";
            } else if (typeCar == 'hatchback') {
                frame.src = "transparent/brio/lampu-belakang-kanan.png";
            } else if (typeCar == 'sedan') {
                frame.src = "transparent/civic/lampu-belakang-kanan.png";
            } else if (typeCar == 'stationWagon') {
                frame.src = "transparent/mini-cooper/lampu-belakang-kanan.png";
            } else if (typeCar == 'jeep') {
                frame.src = "transparent/ignis/lampu-belakang-kanan.png";
            } else if (typeCar == 'pickup') {
                frame.src = "transparent/granmax/lampu-belakang-kanan.png";
            }

            screenshot.classList.remove('d-none');
            back.classList.remove('d-none');
            typeFrame.value = "lampu kanan belakang";
        };

        lampuBelakangKiri.onclick = () => {
            $('#exampleModalCenter').modal('hide');
            
            if (typeCar == 'mpv') {
                frame.src = "transparent/innova/lampu-belakang-kiri.png";
            } else if (typeCar == 'suv') {
                frame.src = "transparent/fortuner/lampu-belakang-kiri.png";
            } else if (typeCar == 'crossover') {
                frame.src = "transparent/mobilio/lampu-belakang-kiri.png";
            } else if (typeCar == 'hatchback') {
                frame.src = "transparent/brio/lampu-belakang-kiri.png";
            } else if (typeCar == 'sedan') {
                frame.src = "transparent/civic/lampu-belakang-kiri.png";
            } else if (typeCar == 'stationWagon') {
                frame.src = "transparent/mini-cooper/lampu-belakang-kiri.png";
            } else if (typeCar == 'jeep') {
                frame.src = "transparent/ignis/lampu-belakang-kiri.png";
            } else if (typeCar == 'pickup') {
                frame.src = "transparent/granmax/lampu-belakang-kiri.png";
            }

            screenshot.classList.remove('d-none');
            back.classList.remove('d-none');
            typeFrame.value = "lampu kiri belakang";
        };

        const doScreenshot = () => {
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            canvas.getContext('2d').drawImage(video, 0, 0);

            var dataURL = canvas.toDataURL();

            $.ajax({
                type: "POST",
                url: "{{ route('collection-upload-image') }}",
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    image: dataURL,
                    type_frame: typeFrame.value
                },
                success: function (data) {
                    window.location.href = "{{ route('collection-image') }}";
                },
                error: function (xhr) {
                }
            });
        };

        screenshot.onclick = doScreenshot;

        const startStream = async () => {
            if ('mediaDevices' in navigator && navigator.mediaDevices.getUserMedia) {
                const updatedConstraints = {
                    ...constraints
                };

                const stream = await navigator.mediaDevices.getUserMedia(updatedConstraints);

                handleStream(stream);
            }
        };

        const handleStream = (stream) => {
            video.srcObject = stream;
        };

        startStream();

    </script>
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
