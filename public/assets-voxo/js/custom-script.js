$(document).ready(function () {
    $(".banner").slick({
        autoplay: true,
        speed: 5000,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true
    });
});

document.addEventListener('DOMContentLoaded', function () {
    var frames = document.getElementById('frames');
    frames.addEventListener('click', function (e) {
        if (e.target.classList.contains('item')) {
            e.target.parentNode.scrollLeft = e.target.offsetLeft;

        }
    });
});