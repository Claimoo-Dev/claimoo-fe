feather.replace();

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
const btnDescription = document.querySelector('.btn-description');
const typeCar = document.getElementById("typeCar").value;
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
const resultImage = document.getElementById("resultImage");
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
            exact: 'environment'
        }
    }
};

depan.onclick = () => {
    $('#exampleModalCenter').modal('hide');
    $('#exampleModalCenter1').modal('show');

    btnDescription.onclick = () => {
        $('#exampleModalCenter1').modal('hide');

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
    }

    typeFrame.value = "depan";
};

belakang.onclick = () => {
    $('#exampleModalCenter').modal('hide');
    $('#exampleModalCenter1').modal('show');

    btnDescription.onclick = () => {
        $('#exampleModalCenter1').modal('hide');

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
    }

    typeFrame.value = "belakang";
};

sampingKananDepan.onclick = () => {
    $('#exampleModalCenter').modal('hide');
    $('#exampleModalCenter1').modal('show');

    btnDescription.onclick = () => {
        $('#exampleModalCenter1').modal('hide');

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
    }

    typeFrame.value = "kanan depan";
};

sampingKiriDepan.onclick = () => {
    $('#exampleModalCenter').modal('hide');
    $('#exampleModalCenter1').modal('show');

    btnDescription.onclick = () => {
        $('#exampleModalCenter1').modal('hide');

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
    }

    typeFrame.value = "kiri depan";
};

sampingKananBelakang.onclick = () => {
    $('#exampleModalCenter').modal('hide');
    $('#exampleModalCenter1').modal('show');

    btnDescription.onclick = () => {
        $('#exampleModalCenter1').modal('hide');

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
    }

    typeFrame.value = "kanan belakang";
};

sampingKiriBelakang.onclick = () => {
    $('#exampleModalCenter').modal('hide');
    $('#exampleModalCenter1').modal('show');

    btnDescription.onclick = () => {
        $('#exampleModalCenter1').modal('hide');

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
    }

    typeFrame.value = "kiri belakang";
};

lampuDepanKanan.onclick = () => {
    $('#exampleModalCenter').modal('hide');
    $('#exampleModalCenter1').modal('show');

    btnDescription.onclick = () => {
        $('#exampleModalCenter1').modal('hide');

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
    }

    typeFrame.value = "lampu kanan depan";
};

lampuDepanKiri.onclick = () => {
    $('#exampleModalCenter').modal('hide');
    $('#exampleModalCenter1').modal('show');

    btnDescription.onclick = () => {
        $('#exampleModalCenter1').modal('hide');

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
    }

    typeFrame.value = "lampu kiri depan";
};

lampuBelakangKanan.onclick = () => {
    $('#exampleModalCenter').modal('hide');
    $('#exampleModalCenter1').modal('show');

    btnDescription.onclick = () => {
        $('#exampleModalCenter1').modal('hide');

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
    }

    typeFrame.value = "lampu kanan belakang";
};

lampuBelakangKiri.onclick = () => {
    $('#exampleModalCenter').modal('hide');
    $('#exampleModalCenter1').modal('show');

    btnDescription.onclick = () => {
        $('#exampleModalCenter1').modal('hide');

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
    }

    typeFrame.value = "lampu kiri belakang";
};

const doScreenshot = () => {
    $('#exampleModalCenter2').modal('show');
    canvas.width = video.videoWidth;
    canvas.height = video.videoHeight;
    canvas.getContext('2d').drawImage(video, 0, 0);
    // screenshotImage.src = canvas.toDataURL('image/webp');

    var dataURL = canvas.toDataURL();

    var descriptions = [];
    $("input:checked").each(function () {
        descriptions.push($(this).val());
    });

    var progressBarProcess = document.getElementById('progressBarProcess');

    navigator.geolocation.getCurrentPosition(function (position) {
        $.ajax({
            xhr: function () {
                var xhr = new window.XMLHttpRequest();

                xhr.upload.addEventListener("progress", function (evt) {
                    var percentComplete = Math.round((evt.loaded / evt.total) * 100);
                    progressBarProcess.style.width = percentComplete + '%';

                    if (percentComplete < 50) {
                        progressBarProcess.innerHTML = percentComplete + '% uploading';
                    } else if (percentComplete >= 50 && percentComplete <= 99) {
                        progressBarProcess.innerHTML = percentComplete + '% analyzing';
                    } else {
                        progressBarProcess.innerHTML = percentComplete + '% done';
                    }
                });

                return xhr;
            },
            type: "POST",
            url: "/save-image",
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                image: dataURL,
                latitude: position.coords.latitude,
                longitude: position.coords.longitude,
                descriptions: descriptions,
                type_car: document.getElementById("typeCar").value,
                type_frame: typeFrame.value
            },
            success: function (data) {
                console.log('saved');
                $('input[type=checkbox]').prop('checked', false);

                if (data.status == 1) {
                    var responseStatus = 'Foto Layak Proses';
                } else {
                    var responseStatus = 'Foto Tidak Layak Proses';
                }

                statusImage.innerHTML = 
                '<table class="w-100">' +
                    '<tr>' +
                        '<td class="col-2 p-0"></td>' +
                        '<td class="col-3 p-0 text-left">Status</td>' +
                        '<td class="col-1 p-0 text-center">:</td>' +
                        '<td class="col-6 p-0 text-left">'+ responseStatus + '</td>' +
                    '</tr>' +
                '</table>';

                resultImage.innerHTML = 
                    '<table class="w-100">' +
                        '<tr>' +
                            '<td class="col-2 p-0"></td>' +
                            '<td class="col-3 p-0 text-left">Hasil</td>' +
                            '<td class="col-1 p-0 text-center">:</td>' +
                            '<td class="col-6 p-0 text-left">'+ data.hasil + '</td>' +
                        '</tr>' +
                    '</table>';
            },
            error: function (data) {
                statusImage.innerHTML = 
                '<table class="w-100">' +
                    '<tr>' +
                        '<td class="col-12 p-0 text-center">' + data + '</td>' +
                    '</tr>' +
                '</table>';
            }
        });
    });
};

screenshot.onclick = doScreenshot;

closeModalProgress.onclick = () => {
    $('#exampleModalCenter2').modal('hide');
};

$('#exampleModalCenter2').on('hidden.bs.modal', function () {
    var progressBarProcess = document.getElementById('progressBarProcess');
    progressBarProcess.innerHTML = '0%';
    $('.progress .progress-bar').css('width', '0%').attr('aria-valuenow', 0);
    statusImage.innerHTML = '';
    resultImage.innerHTML = '';
});

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
