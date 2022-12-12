feather.replace();

const controls = document.querySelector('.controls');
const cameraOptions = document.querySelector('.video-options>select');
const video = document.querySelector('video');
const canvas = document.querySelector('canvas');
const btnModal = document.querySelector('.btn-modal');
const buttons = [...controls.querySelectorAll('button')];
let streamStarted = false;

const [play, pause, screenshot] = buttons;

const frame = document.querySelector('.frame');

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

play.onclick = () => {
  if (streamStarted) {
    video.play();
    play.classList.add('d-none');
    pause.classList.remove('d-none');
    pause.classList.add('mb-5');
    return;
  }
  if ('mediaDevices' in navigator && navigator.mediaDevices.getUserMedia) {
    const updatedConstraints = {...constraints};
    startStream(updatedConstraints);
  }
};

const pauseStream = () => {
  video.pause();
  play.classList.remove('d-none');
  play.classList.add('mb-5');
  pause.classList.add('d-none');
};

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
        _token : $('meta[name="csrf-token"]').attr('content'),
        image: dataURL
    }
  }).done(function(o) {
    console.log('saved'); 
  });
};

pause.onclick = pauseStream;
screenshot.onclick = doScreenshot;

const startStream = async (constraints) => {
  const stream = await navigator.mediaDevices.getUserMedia(constraints);
  handleStream(stream);
};

const handleStream = (stream) => {
  video.srcObject = stream;
  play.classList.add('d-none');
  pause.classList.remove('d-none');
  pause.classList.add('mb-5');
  screenshot.classList.remove('d-none');
  frame.classList.remove('d-none');
  btnModal.classList.remove('d-none');
};