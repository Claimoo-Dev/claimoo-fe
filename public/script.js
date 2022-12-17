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
let streamStarted = false;

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
            
        } else if (typeCar == 'stationWagon') {
            
        } else if (typeCar == 'jeep') {
            
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
            
        } else if (typeCar == 'stationWagon') {
            
        } else if (typeCar == 'jeep') {
            
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
            
        } else if (typeCar == 'stationWagon') {
            
        } else if (typeCar == 'jeep') {
            
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
            
        } else if (typeCar == 'stationWagon') {
            
        } else if (typeCar == 'jeep') {
            
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
            
        } else if (typeCar == 'stationWagon') {
            
        } else if (typeCar == 'jeep') {
            
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
            
        } else if (typeCar == 'stationWagon') {
            
        } else if (typeCar == 'jeep') {
            
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
            // frame.src = "frame/fortuner/lampu-depan-kanan.png";
        } else if (typeCar == 'crossover') {
            // frame.src = "frame/mobilio/lampu-depan-kanan.png";
        } else if (typeCar == 'hatchback') {
            // frame.src = "frame/brio/lampu-depan-kanan.png";
        } else if (typeCar == 'sedan') {
            
        } else if (typeCar == 'stationWagon') {
            
        } else if (typeCar == 'jeep') {
            
        } else if (typeCar == 'pickup') {
            // frame.src = "frame/granmax/lampu-depan-kanan.png";
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
            // frame.src = "frame/fortuner/lampu-depan-kiri.png";
        } else if (typeCar == 'crossover') {
            // frame.src = "frame/mobilio/lampu-depan-kiri.png";
        } else if (typeCar == 'hatchback') {
            // frame.src = "frame/brio/lampu-depan-kiri.png";
        } else if (typeCar == 'sedan') {
            
        } else if (typeCar == 'stationWagon') {
            
        } else if (typeCar == 'jeep') {
            
        } else if (typeCar == 'pickup') {
            // frame.src = "frame/granmax/lampu-depan-kiri.png";
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
            // frame.src = "frame/fortuner/lampu-belakang-kanan.png";
        } else if (typeCar == 'crossover') {
            // frame.src = "frame/mobilio/lampu-belakang-kanan.png";
        } else if (typeCar == 'hatchback') {
            // frame.src = "frame/brio/lampu-belakang-kanan.png";
        } else if (typeCar == 'sedan') {
            
        } else if (typeCar == 'stationWagon') {
            
        } else if (typeCar == 'jeep') {
            
        } else if (typeCar == 'pickup') {
            // frame.src = "frame/granmax/lampu-belakang-kanan.png";
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
            // frame.src = "frame/fortuner/lampu-belakang-kiri.png";
        } else if (typeCar == 'crossover') {
            // frame.src = "frame/mobilio/lampu-belakang-kiri.png";
        } else if (typeCar == 'hatchback') {
            // frame.src = "frame/brio/lampu-belakang-kiri.png";
        } else if (typeCar == 'sedan') {
            
        } else if (typeCar == 'stationWagon') {
            
        } else if (typeCar == 'jeep') {
            
        } else if (typeCar == 'pickup') {
            // frame.src = "frame/granmax/lampu-belakang-kiri.png";
        }

        screenshot.classList.remove('d-none');
        back.classList.remove('d-none');
    }
};

// play.onclick = () => {
//   if (streamStarted) {
//     video.play();
//     play.classList.add('d-none');
//     pause.classList.remove('d-none');
//     pause.classList.add('mb-5');
//     return;
//   }
//   if ('mediaDevices' in navigator && navigator.mediaDevices.getUserMedia) {
//     const updatedConstraints = {...constraints};
//     startStream(updatedConstraints);
//   }
// };

// const pauseStream = () => {
//     video.pause();
// };

const doScreenshot = () => {
    canvas.width = video.videoWidth;
    canvas.height = video.videoHeight;
    canvas.getContext('2d').drawImage(video, 0, 0);
    // screenshotImage.src = canvas.toDataURL('image/webp');
    // screenshotImage.classList.remove('d-none');

    var dataURL = canvas.toDataURL();

    $.ajax({
        type: "POST",
        url: "/save-image",
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            image: dataURL,
            user_id: document.getElementById("userId").value,
            latitude: document.getElementById("latitude").value,
            longitude: document.getElementById("longitude").value,
            description: document.getElementById("description").value
        }
    }).done(function (o) {
        console.log('saved');

        description.value = '';

        $("#success-alert").fadeTo(500, 500).slideUp(100, function () {
            $("#success-alert").slideUp(100);
        });
    });
};

// pause.onclick = pauseStream;
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
