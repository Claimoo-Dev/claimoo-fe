const mpv = document.getElementById('mpv');
const suv = document.getElementById('suv');
const crossover = document.getElementById('crossover');
const hatchback = document.getElementById('hatchback');
const sedan = document.getElementById('sedan');
const stationWagon = document.getElementById('stationWagon');
const jeep = document.getElementById('jeep');
const pickup = document.getElementById('pickup');
const signOut = document.getElementById('signOut');
const feedback =  document.getElementById('feedback');

mpv.onclick = () => {
    window.location.href = 'camera?type_car=mpv';
};

suv.onclick = () => {
    window.location.href = 'camera?type_car=suv';
};

crossover.onclick = () => {
    window.location.href = 'camera?type_car=crossover';
};

hatchback.onclick = () => {
    window.location.href = 'camera?type_car=hatchback';
};

sedan.onclick = () => {
    window.location.href = 'camera?type_car=sedan';
};

stationWagon.onclick = () => {
    window.location.href = 'camera?type_car=stationWagon';
};

jeep.onclick = () => {
    window.location.href = 'camera?type_car=jeep';
};

pickup.onclick = () => {
    window.location.href = 'camera?type_car=pickup';
};

signOut.onclick = () => {
    window.location.href = 'sign-in';
};

feedback.onclick = () => {
    window.location.href = 'feedback';
};

// const startStream = async () => {
//     if ('mediaDevices' in navigator && navigator.mediaDevices.getUserMedia) {
//         const updatedConstraints = {
//             ...constraints
//         };

//         await navigator.mediaDevices.getUserMedia(updatedConstraints);
//     }

//     if (navigator.geolocation) {
//         navigator.geolocation.getCurrentPosition(showPosition);
//     } else { 
//         console.log("Geolocation is not supported by this browser.");
//     }

//     function showPosition(position) {
//         var latitude = position.coords.latitude;
//         var longitude = position.coords.longitude;
//     }
// };

// startStream();

navigator.geolocation.getCurrentPosition(function(position) {
    position.coords.latitude, position.coords.longitude;
});

navigator.mediaDevices.getUserMedia({video: true});