$("#priceAccessories").keyup(function () {
    $("#priceAccessories").val(formatRupiah(this.value));
});

$("#brandAccessories").keyup(function () {
    if ($('#brandAccessories').val() && $('#typeAccessories').val() && $('#priceAccessories').val() &&
        $('#priceAccessories').val() != 0) {
        $('#btn-save').removeAttr('disabled');
    } else {
        $('#btn-save').attr('disabled', true);
    }
});

$("#typeAccessories").keyup(function () {
    if ($('#brandAccessories').val() && $('#typeAccessories').val() && $('#priceAccessories').val() &&
        $('#priceAccessories').val() != 0) {
        $('#btn-save').removeAttr('disabled');
    } else {
        $('#btn-save').attr('disabled', true);
    }
});

$("#priceAccessories").keyup(function () {
    if ($('#brandAccessories').val() && $('#typeAccessories').val() && $('#priceAccessories').val() &&
        $('#priceAccessories').val() != 0) {
        $('#btn-save').removeAttr('disabled');
    } else {
        $('#btn-save').attr('disabled', true);
    }
});

$('#btn-save').click(function () {
    if ($('#brandAccessories').val() && $('#typeAccessories').val() && $('#priceAccessories').val() &&
        $('#priceAccessories').val() != 0) {

        var priceAccessories = $('#priceAccessories').val();
        priceAccessories = priceAccessories.split('.').join("");

        $('#kacaFilmCheck').val(priceAccessories);

        $("#kacaFilmName").html($('#brandAccessories').val() + " - " + $('#typeAccessories').val());
        $("#kacaFilmPrice").html("Rp " + $('#priceAccessories').val());

        $('#kacaFilmName').removeClass('d-none');
        $('#kacaFilmPrice').removeClass('d-none');

        var openedCanvas = bootstrap.Offcanvas.getInstance(document.getElementById("kacaFilm"));
        openedCanvas.hide();

        var sum = 0;
        $("input:checkbox[name=accessories]:checked").each(function () {
            sum = sum + parseInt($(this).val());
        });

        $("#subtotal").html("Rp " + formatRupiah(sum.toString()));

        if (sum > 0) {
            $("#btnAccessories").removeAttr('disabled');
        } else {
            $("#btnAccessories").attr('disabled', true);
        }

        var data = new Object();
        data.name = "Kaca Film";
        data.brand = $('#brandAccessories').val();
        data.type = $('#typeAccessories').val();
        data.price = priceAccessories;

        arrayAccessories.push(data);
    }
});

$("#kacaFilmGroup").click(function () {
    if ($("#kacaFilmCheck").is(':checked')) {
        $('#kacaFilmCheck').prop('checked', false);

        $('#kacaFilmName').addClass('d-none');
        $('#kacaFilmPrice').addClass('d-none');

        $('#kacaFilmCheck').val(0);

        var sum = 0;
        $("input:checkbox[name=accessories]:checked").each(function () {
            sum = sum + parseInt($(this).val());
        });

        $("#subtotal").html("Rp " + formatRupiah(sum.toString()));

        if (sum > 0) {
            $("#btnAccessories").removeAttr('disabled');
        } else {
            $("#btnAccessories").attr('disabled', true);
        }

        arrayAccessories = $.grep(arrayAccessories, function (query) {
            return query.name !== 'Kaca Film';
        });
    } else {
        $('#kacaFilmCheck').prop('checked', true);

        var offcanvas = new bootstrap.Offcanvas(document.getElementById("kacaFilm"));
        offcanvas.show();
    }
});

$('#kacaFilm').on('hide.bs.offcanvas', function () {
    if ($("#kacaFilmName").hasClass('d-none') && $("#kacaFilmPrice").hasClass('d-none')) {
        $('#kacaFilmCheck').prop('checked', false);
    }
});
