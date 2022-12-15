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
        frame.src = "frame/innova/depan.png";
        screenshot.classList.remove('d-none');
        back.classList.remove('d-none');
    }
};

belakang.onclick = () => {
    $('#exampleModalCenter').modal('hide');
    $('#exampleModalCenter1').modal('show');

    btnDescription.onclick = () => {
        $('#exampleModalCenter1').modal('hide');
        frame.src = "frame/innova/belakang.png";
    }
};

sampingKananDepan.onclick = () => {
    $('#exampleModalCenter').modal('hide');
    $('#exampleModalCenter1').modal('show');

    btnDescription.onclick = () => {
        $('#exampleModalCenter1').modal('hide');
        frame.src = "frame/innova/samping-kanan-depan.png";
    }
};

sampingKiriDepan.onclick = () => {
    $('#exampleModalCenter').modal('hide');
    $('#exampleModalCenter1').modal('show');

    btnDescription.onclick = () => {
        $('#exampleModalCenter1').modal('hide');
        frame.src = "frame/innova/samping-kiri-depan.png";
    }
};

sampingKananBelakang.onclick = () => {
    $('#exampleModalCenter').modal('hide');
    $('#exampleModalCenter1').modal('show');

    btnDescription.onclick = () => {
        $('#exampleModalCenter1').modal('hide');
        frame.src = "frame/innova/samping-kanan-belakang.png";
    }
};

sampingKiriBelakang.onclick = () => {
    $('#exampleModalCenter').modal('hide');
    $('#exampleModalCenter1').modal('show');

    btnDescription.onclick = () => {
        $('#exampleModalCenter1').modal('hide');
        frame.src = "frame/innova/samping-kiri-belakang.png";
    }
};

lampuDepanKanan.onclick = () => {
    $('#exampleModalCenter').modal('hide');
    $('#exampleModalCenter1').modal('show');

    btnDescription.onclick = () => {
        $('#exampleModalCenter1').modal('hide');
        frame.src = "frame/innova/lampu-depan-kanan.png";
    }
};

lampuDepanKiri.onclick = () => {
    $('#exampleModalCenter').modal('hide');
    $('#exampleModalCenter1').modal('show');

    btnDescription.onclick = () => {
        $('#exampleModalCenter1').modal('hide');
        frame.src = "frame/innova/lampu-depan-kiri.png";
    }
};

lampuBelakangKanan.onclick = () => {
    $('#exampleModalCenter').modal('hide');
    $('#exampleModalCenter1').modal('show');

    btnDescription.onclick = () => {
        $('#exampleModalCenter1').modal('hide');
        frame.src = "frame/innova/lampu-belakang-kanan.png";
    }
};

lampuBelakangKiri.onclick = () => {
    $('#exampleModalCenter').modal('hide');
    $('#exampleModalCenter1').modal('show');

    btnDescription.onclick = () => {
        $('#exampleModalCenter1').modal('hide');
        frame.src = "frame/innova/lampu-belakang-kiri.png";
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

    screen.orientation.lock("portrait");
};

const handleStream = (stream) => {
    video.srcObject = stream;
};

startStream();
