const mpv = document.getElementById('mpv');
const suv = document.getElementById('suv');
const crossover = document.getElementById('crossover');
const hatchback = document.getElementById('hatchback');
const sedan = document.getElementById('sedan');
const stationWagon = document.getElementById('stationWagon');
const jeep = document.getElementById('jeep');
const pickup = document.getElementById('pickup');
const signOut = document.getElementById('signOut');
const feedback = document.getElementById('feedback');

mpv.onclick = () => {
    navigator.geolocation.getCurrentPosition(function (position) {
        window.location.href = 'camera?type_car=mpv&latitude=' + position.coords.latitude + '&longitude=' + position.coords.longitude;
    });
};

suv.onclick = () => {
    navigator.geolocation.getCurrentPosition(function (position) {
        window.location.href = 'camera?type_car=suv&latitude=' + position.coords.latitude + '&longitude=' + position.coords.longitude;
    });
};

crossover.onclick = () => {
    navigator.geolocation.getCurrentPosition(function (position) {
        window.location.href = 'camera?type_car=crossover&latitude=' + position.coords.latitude + '&longitude=' + position.coords.longitude;
    });
};

hatchback.onclick = () => {
    navigator.geolocation.getCurrentPosition(function (position) {
        window.location.href = 'camera?type_car=hatchback&latitude=' + position.coords.latitude + '&longitude=' + position.coords.longitude;
    });
};

sedan.onclick = () => {
    navigator.geolocation.getCurrentPosition(function (position) {
        window.location.href = 'camera?type_car=sedan&latitude=' + position.coords.latitude + '&longitude=' + position.coords.longitude;
    });
};

stationWagon.onclick = () => {
    navigator.geolocation.getCurrentPosition(function (position) {
        window.location.href = 'camera?type_car=stationWagon&latitude=' + position.coords.latitude + '&longitude=' + position.coords.longitude;
    });
};

jeep.onclick = () => {
    navigator.geolocation.getCurrentPosition(function (position) {
        window.location.href = 'camera?type_car=jeep&latitude=' + position.coords.latitude + '&longitude=' + position.coords.longitude;
    });
};

pickup.onclick = () => {
    navigator.geolocation.getCurrentPosition(function (position) {
        window.location.href = 'camera?type_car=pickup&latitude=' + position.coords.latitude + '&longitude=' + position.coords.longitude;
    });
};

signOut.onclick = () => {
    $.ajax({
        type: "POST",
        url: "/sign-out",
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
        }
    }).done(function (o) {
        window.location.href = 'sign-in';
    });
};

feedback.onclick = () => {
    window.location.href = 'feedback';
};

navigator.geolocation.getCurrentPosition(function (position) {
    position.coords.latitude, position.coords.longitude;
});

navigator.mediaDevices.getUserMedia({
    video: true
});

$(document).ready(function () {
    window.setTimeout(function () {
        $(".alert").fadeTo(500, 0).slideUp(500, function () {
            $(this).remove();
        });
    }, 500);
});
