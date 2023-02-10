$("#priceAccessoriesJokMobil").keyup(function () {
    $("#priceAccessoriesJokMobil").val(formatRupiah(this.value));
});

$("#brandAccessoriesJokMobil").keyup(function () {
    if ($('#brandAccessoriesJokMobil').val() && $('#typeAccessoriesJokMobil').val() && $('#priceAccessoriesJokMobil').val() &&
        $('#priceAccessoriesJokMobil').val() != 0) {
        $('#btn-save-jok-mobil').removeAttr('disabled');
    } else {
        $('#btn-save-jok-mobil').attr('disabled', true);
    }
});

$("#typeAccessoriesJokMobil").keyup(function () {
    if ($('#brandAccessoriesJokMobil').val() && $('#typeAccessoriesJokMobil').val() && $('#priceAccessoriesJokMobil').val() &&
        $('#priceAccessoriesJokMobil').val() != 0) {
        $('#btn-save-jok-mobil').removeAttr('disabled');
    } else {
        $('#btn-save-jok-mobil').attr('disabled', true);
    }
});

$("#priceAccessoriesJokMobil").keyup(function () {
    if ($('#brandAccessoriesJokMobil').val() && $('#typeAccessoriesJokMobil').val() && $('#priceAccessoriesJokMobil').val() &&
        $('#priceAccessoriesJokMobil').val() != 0) {
        $('#btn-save-jok-mobil').removeAttr('disabled');
    } else {
        $('#btn-save-jok-mobil').attr('disabled', true);
    }
});

$('#btn-save-jok-mobil').click(function () {
    if ($('#brandAccessoriesJokMobil').val() && $('#typeAccessoriesJokMobil').val() && $('#priceAccessoriesJokMobil').val() &&
        $('#priceAccessoriesJokMobil').val() != 0) {

        var priceAccessoriesJokMobil = $('#priceAccessoriesJokMobil').val();
        priceAccessoriesJokMobil = priceAccessoriesJokMobil.split('.').join("");

        $('#jokMobilCheck').val(priceAccessoriesJokMobil);

        $("#jokMobilName").html($('#brandAccessoriesJokMobil').val() + " - " + $('#typeAccessoriesJokMobil').val());
        $("#jokMobilPrice").html("Rp " + $('#priceAccessoriesJokMobil').val());

        $('#jokMobilName').removeClass('d-none');
        $('#jokMobilPrice').removeClass('d-none');

        var openedCanvas = bootstrap.Offcanvas.getInstance(document.getElementById("jokMobil"));
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
        data.name = "Jok Mobil";
        data.brand = $('#brandAccessoriesJokMobil').val();
        data.type = $('#typeAccessoriesJokMobil').val();
        data.price = priceAccessoriesJokMobil;

        arrayAccessories.push(data);
    }
});

$("#jokMobilGroup").click(function () {
    if ($("#jokMobilCheck").is(':checked')) {
        $('#jokMobilCheck').prop('checked', false);

        $('#jokMobilName').addClass('d-none');
        $('#jokMobilPrice').addClass('d-none');

        $('#jokMobilCheck').val(0);

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
            return query.name !== 'Jok Mobil';
        });
    } else {
        $('#jokMobilCheck').prop('checked', true);

        var offcanvas = new bootstrap.Offcanvas(document.getElementById("jokMobil"));
        offcanvas.show();
    }
});

$('#jokMobil').on('hide.bs.offcanvas', function () {
    if ($("#jokMobilName").hasClass('d-none') && $("#jokMobilPrice").hasClass('d-none')) {
        $('#jokMobilCheck').prop('checked', false);
    }
});