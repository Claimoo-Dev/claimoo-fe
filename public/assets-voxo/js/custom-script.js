$(document).ready(function () {
    $(".banner").slick({
        autoplay: true,
        speed: 5000,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true
    });
});

function formatNumber(number) {
    return number.replace(/[^,\d]/g, "").toString();
}

function formatRupiah(angka) {
    var number_string = angka.replace(/[^,\d]/g, "").toString(),
        split = number_string.split(","),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if (ribuan) {
        separator = sisa ? "." : "";
        rupiah += separator + ribuan.join(".");
    }

    rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
    return rupiah;
}