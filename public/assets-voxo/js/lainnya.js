$("#priceAccessoriesLainnya").keyup(function () {
    $("#priceAccessoriesLainnya").val(formatRupiah(this.value));
});

$("#nameAccessories").keyup(function () {
    if ($('#nameAccessories').val() && $('#brandAccessoriesLainnya').val() && $('#typeAccessoriesLainnya').val() && $('#priceAccessoriesLainnya').val() &&
        $('#priceAccessoriesLainnya').val() != 0) {
        $('#btn-save-lainnya').removeAttr('disabled');
    } else {
        $('#btn-save-lainnya').attr('disabled', true);
    }
});

$("#brandAccessoriesLainnya").keyup(function () {
    if ($('#nameAccessories').val() && $('#brandAccessoriesLainnya').val() && $('#typeAccessoriesLainnya').val() && $('#priceAccessoriesLainnya').val() &&
        $('#priceAccessoriesLainnya').val() != 0) {
        $('#btn-save-lainnya').removeAttr('disabled');
    } else {
        $('#btn-save-lainnya').attr('disabled', true);
    }
});

$("#typeAccessoriesLainnya").keyup(function () {
    if ($('#nameAccessories').val() && $('#brandAccessoriesLainnya').val() && $('#typeAccessoriesLainnya').val() && $('#priceAccessoriesLainnya').val() &&
        $('#priceAccessoriesLainnya').val() != 0) {
        $('#btn-save-lainnya').removeAttr('disabled');
    } else {
        $('#btn-save-lainnya').attr('disabled', true);
    }
});

$("#priceAccessoriesLainnya").keyup(function () {
    if ($('#nameAccessories').val() && $('#brandAccessoriesLainnya').val() && $('#typeAccessoriesLainnya').val() && $('#priceAccessoriesLainnya').val() &&
        $('#priceAccessoriesLainnya').val() != 0) {
        $('#btn-save-lainnya').removeAttr('disabled');
    } else {
        $('#btn-save-lainnya').attr('disabled', true);
    }
});

$('#btn-save-lainnya').click(function () {
    if ($('#nameAccessories').val() && $('#brandAccessoriesLainnya').val() && $('#typeAccessoriesLainnya').val() && $('#priceAccessoriesLainnya').val() &&
        $('#priceAccessoriesLainnya').val() != 0) {

        var priceAccessoriesLainnya = $('#priceAccessoriesLainnya').val();
        priceAccessoriesLainnya = priceAccessoriesLainnya.split('.').join("");

        $('#lainnyaCheck').val(priceAccessoriesLainnya);

        $("#titleLainnya").html($('#nameAccessories').val());
        $("#lainnyaName").html($('#nameAccessories').val() + " - " + $('#brandAccessoriesLainnya').val() + " - " + $('#typeAccessoriesLainnya').val());
        $("#lainnyaPrice").html("Rp " + $('#priceAccessoriesLainnya').val());

        $('#lainnyaName').removeClass('d-none');
        $('#lainnyaPrice').removeClass('d-none');

        var openedCanvas = bootstrap.Offcanvas.getInstance(document.getElementById("lainnya"));
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
        data.name = $('#nameAccessories').val();
        data.brand = $('#brandAccessoriesLainnya').val();
        data.type = $('#typeAccessoriesLainnya').val();
        data.price = priceAccessoriesLainnya;

        arrayAccessories.push(data);
    }
});

$("#lainnyaGroup").click(function () {
    if ($("#lainnyaCheck").is(':checked')) {
        $('#lainnyaCheck').prop('checked', false);

        $('#lainnyaName').addClass('d-none');
        $('#lainnyaPrice').addClass('d-none');

        $('#lainnyaCheck').val(0);

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
            return query.name !== $('#nameAccessories').val();
        });
    } else {
        $('#lainnyaCheck').prop('checked', true);

        var offcanvas = new bootstrap.Offcanvas(document.getElementById("lainnya"));
        offcanvas.show();
    }
});

$("#lainnyaCheck").click(function () {
    if ($("#lainnyaCheck").is(':checked')) {
        $('#lainnyaCheck').prop('checked', true);

        var offcanvas = new bootstrap.Offcanvas(document.getElementById("lainnya"));
        offcanvas.show();
    } else {
        $('#lainnyaCheck').prop('checked', false);

        $('#lainnyaName').addClass('d-none');
        $('#lainnyaPrice').addClass('d-none');

        $('#lainnyaCheck').val(0);

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
            return query.name !== $('#nameAccessories').val();
        });
    }
});

$('#lainnya').on('hide.bs.offcanvas', function () {
    if ($("#lainnyaName").hasClass('d-none') && $("#lainnyaPrice").hasClass('d-none')) {
        $('#lainnyaCheck').prop('checked', false);
    }
});
