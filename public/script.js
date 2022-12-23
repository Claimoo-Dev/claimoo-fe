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
            frame.src = "frame/innova/depan.png";
        } else if (typeCar == 'suv') {
            frame.src = "frame/fortuner/depan.png";
        } else if (typeCar == 'crossover') {
            frame.src = "frame/mobilio/depan.png";
        } else if (typeCar == 'hatchback') {
            frame.src = "frame/brio/depan.png";
        } else if (typeCar == 'sedan') {
            frame.src = "frame/civic/depan.png";
        } else if (typeCar == 'stationWagon') {
            frame.src = "frame/mini-cooper/depan.png";
        } else if (typeCar == 'jeep') {
            frame.src = "frame/jimny/depan.png";
        } else if (typeCar == 'pickup') {
            frame.src = "frame/granmax/depan.png";
        }

        screenshot.classList.remove('d-none');
        back.classList.remove('d-none');
    }
};

belakang.onclick = () => {
    $('#exampleModalCenter').modal('hide');
    $('#exampleModalCenter1').modal('show');

    btnDescription.onclick = () => {
        $('#exampleModalCenter1').modal('hide');

        if (typeCar == 'mpv') {
            frame.src = "frame/innova/belakang.png";
        } else if (typeCar == 'suv') {
            frame.src = "frame/fortuner/belakang.png";
        } else if (typeCar == 'crossover') {
            frame.src = "frame/mobilio/belakang.png";
        } else if (typeCar == 'hatchback') {
            frame.src = "frame/brio/belakang.png";
        } else if (typeCar == 'sedan') {
            frame.src = "frame/civic/belakang.png";
        } else if (typeCar == 'stationWagon') {
            frame.src = "frame/mini-cooper/belakang.png";
        } else if (typeCar == 'jeep') {
            frame.src = "frame/jimny/belakang.png";
        } else if (typeCar == 'pickup') {
            frame.src = "frame/granmax/belakang.png";
        }

        screenshot.classList.remove('d-none');
        back.classList.remove('d-none');
    }
};

sampingKananDepan.onclick = () => {
    $('#exampleModalCenter').modal('hide');
    $('#exampleModalCenter1').modal('show');

    btnDescription.onclick = () => {
        $('#exampleModalCenter1').modal('hide');

        if (typeCar == 'mpv') {
            frame.src = "frame/innova/samping-kanan-depan.png";
        } else if (typeCar == 'suv') {
            frame.src = "frame/fortuner/samping-kanan-depan.png";
        } else if (typeCar == 'crossover') {
            frame.src = "frame/mobilio/samping-kanan-depan.png";
        } else if (typeCar == 'hatchback') {
            frame.src = "frame/brio/samping-kanan-depan.png";
        } else if (typeCar == 'sedan') {
            frame.src = "frame/civic/samping-kanan-depan.png";
        } else if (typeCar == 'stationWagon') {
            frame.src = "frame/mini-cooper/samping-kanan-depan.png";
        } else if (typeCar == 'jeep') {
            frame.src = "frame/jimny/samping-kanan-depan.png";
        } else if (typeCar == 'pickup') {
            frame.src = "frame/granmax/samping-kanan-depan.png";
        }

        screenshot.classList.remove('d-none');
        back.classList.remove('d-none');
    }
};

sampingKiriDepan.onclick = () => {
    $('#exampleModalCenter').modal('hide');
    $('#exampleModalCenter1').modal('show');

    btnDescription.onclick = () => {
        $('#exampleModalCenter1').modal('hide');

        if (typeCar == 'mpv') {
            frame.src = "frame/innova/samping-kiri-depan.png";
        } else if (typeCar == 'suv') {
            frame.src = "frame/fortuner/samping-kiri-depan.png";
        } else if (typeCar == 'crossover') {
            frame.src = "frame/mobilio/samping-kiri-depan.png";
        } else if (typeCar == 'hatchback') {
            frame.src = "frame/brio/samping-kiri-depan.png";
        } else if (typeCar == 'sedan') {
            frame.src = "frame/civic/samping-kiri-depan.png";
        } else if (typeCar == 'stationWagon') {
            frame.src = "frame/mini-cooper/samping-kiri-depan.png";
        } else if (typeCar == 'jeep') {
            frame.src = "frame/jimny/samping-kiri-depan.png";
        } else if (typeCar == 'pickup') {
            frame.src = "frame/granmax/samping-kiri-depan.png";
        }

        screenshot.classList.remove('d-none');
        back.classList.remove('d-none');
    }
};

sampingKananBelakang.onclick = () => {
    $('#exampleModalCenter').modal('hide');
    $('#exampleModalCenter1').modal('show');

    btnDescription.onclick = () => {
        $('#exampleModalCenter1').modal('hide');

        if (typeCar == 'mpv') {
            frame.src = "frame/innova/samping-kanan-belakang.png";
        } else if (typeCar == 'suv') {
            frame.src = "frame/fortuner/samping-kanan-belakang.png";
        } else if (typeCar == 'crossover') {
            frame.src = "frame/mobilio/samping-kanan-belakang.png";
        } else if (typeCar == 'hatchback') {
            frame.src = "frame/brio/samping-kanan-belakang.png";
        } else if (typeCar == 'sedan') {
            frame.src = "frame/civic/samping-kanan-belakang.png";
        } else if (typeCar == 'stationWagon') {
            frame.src = "frame/mini-cooper/samping-kanan-belakang.png";
        } else if (typeCar == 'jeep') {
            frame.src = "frame/jimny/samping-kanan-belakang.png";
        } else if (typeCar == 'pickup') {
            frame.src = "frame/granmax/samping-kanan-belakang.png";
        }

        screenshot.classList.remove('d-none');
        back.classList.remove('d-none');
    }
};

sampingKiriBelakang.onclick = () => {
    $('#exampleModalCenter').modal('hide');
    $('#exampleModalCenter1').modal('show');

    btnDescription.onclick = () => {
        $('#exampleModalCenter1').modal('hide');

        if (typeCar == 'mpv') {
            frame.src = "frame/innova/samping-kiri-belakang.png";
        } else if (typeCar == 'suv') {
            frame.src = "frame/fortuner/samping-kiri-belakang.png";
        } else if (typeCar == 'crossover') {
            frame.src = "frame/mobilio/samping-kiri-belakang.png";
        } else if (typeCar == 'hatchback') {
            frame.src = "frame/brio/samping-kiri-belakang.png";
        } else if (typeCar == 'sedan') {
            frame.src = "frame/civic/samping-kiri-belakang.png";
        } else if (typeCar == 'stationWagon') {
            frame.src = "frame/mini-cooper/samping-kiri-belakang.png";
        } else if (typeCar == 'jeep') {
            frame.src = "frame/jimny/samping-kiri-belakang.png";
        } else if (typeCar == 'pickup') {
            frame.src = "frame/granmax/samping-kiri-belakang.png";
        }

        screenshot.classList.remove('d-none');
        back.classList.remove('d-none');
    }
};

lampuDepanKanan.onclick = () => {
    $('#exampleModalCenter').modal('hide');
    $('#exampleModalCenter1').modal('show');

    btnDescription.onclick = () => {
        $('#exampleModalCenter1').modal('hide');

        if (typeCar == 'mpv') {
            frame.src = "frame/innova/lampu-depan-kanan.png";
        } else if (typeCar == 'suv') {
            frame.src = "frame/fortuner/lampu-depan-kanan.png";
        } else if (typeCar == 'crossover') {
            frame.src = "frame/mobilio/lampu-depan-kanan.png";
        } else if (typeCar == 'hatchback') {
            frame.src = "frame/brio/lampu-depan-kanan.png";
        } else if (typeCar == 'sedan') {
            frame.src = "frame/civic/lampu-depan-kanan.png";
        } else if (typeCar == 'stationWagon') {
            frame.src = "frame/mini-cooper/lampu-depan-kanan.png";
        } else if (typeCar == 'jeep') {
            frame.src = "frame/jimny/lampu-depan-kanan.png";
        } else if (typeCar == 'pickup') {
            frame.src = "frame/granmax/lampu-depan-kanan.png";
        }

        screenshot.classList.remove('d-none');
        back.classList.remove('d-none');
    }
};

lampuDepanKiri.onclick = () => {
    $('#exampleModalCenter').modal('hide');
    $('#exampleModalCenter1').modal('show');

    btnDescription.onclick = () => {
        $('#exampleModalCenter1').modal('hide');

        if (typeCar == 'mpv') {
            frame.src = "frame/innova/lampu-depan-kiri.png";
        } else if (typeCar == 'suv') {
            frame.src = "frame/fortuner/lampu-depan-kiri.png";
        } else if (typeCar == 'crossover') {
            frame.src = "frame/mobilio/lampu-depan-kiri.png";
        } else if (typeCar == 'hatchback') {
            frame.src = "frame/brio/lampu-depan-kiri.png";
        } else if (typeCar == 'sedan') {
            frame.src = "frame/civic/lampu-depan-kiri.png";
        } else if (typeCar == 'stationWagon') {
            frame.src = "frame/mini-cooper/lampu-depan-kiri.png";
        } else if (typeCar == 'jeep') {
            frame.src = "frame/jimny/lampu-depan-kiri.png";
        } else if (typeCar == 'pickup') {
            frame.src = "frame/granmax/lampu-depan-kiri.png";
        }

        screenshot.classList.remove('d-none');
        back.classList.remove('d-none');
    }
};

lampuBelakangKanan.onclick = () => {
    $('#exampleModalCenter').modal('hide');
    $('#exampleModalCenter1').modal('show');

    btnDescription.onclick = () => {
        $('#exampleModalCenter1').modal('hide');

        if (typeCar == 'mpv') {
            frame.src = "frame/innova/lampu-belakang-kanan.png";
        } else if (typeCar == 'suv') {
            frame.src = "frame/fortuner/lampu-belakang-kanan.png";
        } else if (typeCar == 'crossover') {
            frame.src = "frame/mobilio/lampu-belakang-kanan.png";
        } else if (typeCar == 'hatchback') {
            frame.src = "frame/brio/lampu-belakang-kanan.png";
        } else if (typeCar == 'sedan') {
            frame.src = "frame/civic/lampu-belakang-kanan.png";
        } else if (typeCar == 'stationWagon') {
            frame.src = "frame/mini-cooper/lampu-belakang-kanan.png";
        } else if (typeCar == 'jeep') {
            frame.src = "frame/jimny/lampu-belakang-kanan.png";
        } else if (typeCar == 'pickup') {
            frame.src = "frame/granmax/lampu-belakang-kanan.png";
        }

        screenshot.classList.remove('d-none');
        back.classList.remove('d-none');
    }
};

lampuBelakangKiri.onclick = () => {
    $('#exampleModalCenter').modal('hide');
    $('#exampleModalCenter1').modal('show');

    btnDescription.onclick = () => {
        $('#exampleModalCenter1').modal('hide');

        if (typeCar == 'mpv') {
            frame.src = "frame/innova/lampu-belakang-kiri.png";
        } else if (typeCar == 'suv') {
            frame.src = "frame/fortuner/lampu-belakang-kiri.png";
        } else if (typeCar == 'crossover') {
            frame.src = "frame/mobilio/lampu-belakang-kiri.png";
        } else if (typeCar == 'hatchback') {
            frame.src = "frame/brio/lampu-belakang-kiri.png";
        } else if (typeCar == 'sedan') {
            frame.src = "frame/civic/lampu-belakang-kiri.png";
        } else if (typeCar == 'stationWagon') {
            frame.src = "frame/mini-cooper/lampu-belakang-kiri.png";
        } else if (typeCar == 'jeep') {
            frame.src = "frame/jimny/lampu-belakang-kiri.png";
        } else if (typeCar == 'pickup') {
            frame.src = "frame/granmax/lampu-belakang-kiri.png";
        }

        screenshot.classList.remove('d-none');
        back.classList.remove('d-none');
    }
};

const doScreenshot = () => {
    canvas.width = video.videoWidth;
    canvas.height = video.videoHeight;
    canvas.getContext('2d').drawImage(video, 0, 0);
    // screenshotImage.src = canvas.toDataURL('image/webp');

    var dataURL = canvas.toDataURL();

    navigator.geolocation.getCurrentPosition(function (position) {
        $.ajax({
            type: "POST",
            url: "/save-image",
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                image: dataURL,
                latitude: position.coords.latitude,
                longitude: position.coords.longitude,
                description: document.getElementById("description").value,
                type_car: document.getElementById("typeCar").value,
                type_frame: 'depan'
            }
        }).done(function (o) {
            console.log('saved');
            description.value = '';

            $("#success-alert").fadeTo(500, 500).slideUp(100, function () {
                $("#success-alert").slideUp(500);
            });
        }).fail(function () {
            console.log('something wrong');
            description.value = '';

            $("#error-alert").fadeTo(500, 500).slideUp(100, function () {
                $("#error-alert").slideUp(500);
            });
        });
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
