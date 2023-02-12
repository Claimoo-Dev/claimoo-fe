$("#priceAccessoriesVelgBan").keyup(function () {
    $("#priceAccessoriesVelgBan").val(formatRupiah(this.value));
});

$("#brandAccessoriesVelgBan").keyup(function () {
    if ($('#brandAccessoriesVelgBan').val() && $('#typeAccessoriesVelgBan').val() && $('#priceAccessoriesVelgBan').val() &&
        $('#priceAccessoriesVelgBan').val() != 0) {
        $('#btn-save-velg-ban').removeAttr('disabled');
    } else {
        $('#btn-save-velg-ban').attr('disabled', true);
    }
});

$("#typeAccessoriesVelgBan").keyup(function () {
    if ($('#brandAccessoriesVelgBan').val() && $('#typeAccessoriesVelgBan').val() && $('#priceAccessoriesVelgBan').val() &&
        $('#priceAccessoriesVelgBan').val() != 0) {
        $('#btn-save-velg-ban').removeAttr('disabled');
    } else {
        $('#btn-save-velg-ban').attr('disabled', true);
    }
});

$("#priceAccessoriesVelgBan").keyup(function () {
    if ($('#brandAccessoriesVelgBan').val() && $('#typeAccessoriesVelgBan').val() && $('#priceAccessoriesVelgBan').val() &&
        $('#priceAccessoriesVelgBan').val() != 0) {
        $('#btn-save-velg-ban').removeAttr('disabled');
    } else {
        $('#btn-save-velg-ban').attr('disabled', true);
    }
});

$('#btn-save-velg-ban').click(function () {
    if ($('#brandAccessoriesVelgBan').val() && $('#typeAccessoriesVelgBan').val() && $('#priceAccessoriesVelgBan').val() &&
        $('#priceAccessoriesVelgBan').val() != 0) {

        var priceAccessoriesVelgBan = $('#priceAccessoriesVelgBan').val();
        priceAccessoriesVelgBan = priceAccessoriesVelgBan.split('.').join("");

        $('#velgBanCheck').val(priceAccessoriesVelgBan);

        $("#velgBanName").html($('#brandAccessoriesVelgBan').val() + " - " + $('#typeAccessoriesVelgBan').val());
        $("#velgBanPrice").html("Rp " + $('#priceAccessoriesVelgBan').val());

        $('#velgBanName').removeClass('d-none');
        $('#velgBanPrice').removeClass('d-none');

        var openedCanvas = bootstrap.Offcanvas.getInstance(document.getElementById("velgBan"));
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
        data.name = "Velg & Ban";
        data.brand = $('#brandAccessoriesVelgBan').val();
        data.type = $('#typeAccessoriesVelgBan').val();
        data.price = priceAccessoriesVelgBan;

        arrayAccessories.push(data);
    }
});

$("#velgBanGroup").click(function () {
    if ($("#velgBanCheck").is(':checked')) {
        $('#velgBanCheck').prop('checked', false);

        $('#velgBanName').addClass('d-none');
        $('#velgBanPrice').addClass('d-none');

        $('#velgBanCheck').val(0);

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
            return query.name !== 'Velg & Ban';
        });
    } else {
        $('#velgBanCheck').prop('checked', true);

        var offcanvas = new bootstrap.Offcanvas(document.getElementById("velgBan"));
        offcanvas.show();
    }
});

$("#velgBanCheck").click(function () {
    if ($("#velgBanCheck").is(':checked')) {
        $('#velgBanCheck').prop('checked', true);

        var offcanvas = new bootstrap.Offcanvas(document.getElementById("velgBan"));
        offcanvas.show();
    } else {
        $('#velgBanCheck').prop('checked', false);

        $('#velgBanName').addClass('d-none');
        $('#velgBanPrice').addClass('d-none');

        $('#velgBanCheck').val(0);

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
            return query.name !== 'Velg & Ban';
        });
    }
});

$('#velgBan').on('hide.bs.offcanvas', function () {
    if ($("#velgBanName").hasClass('d-none') && $("#velgBanPrice").hasClass('d-none')) {
        $('#velgBanCheck').prop('checked', false);
    }
});