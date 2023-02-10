$("#priceAccessoriesKarpetMobil").keyup(function () {
    $("#priceAccessoriesKarpetMobil").val(formatRupiah(this.value));
});

$("#brandAccessoriesKarpetMobil").keyup(function () {
    if ($('#brandAccessoriesKarpetMobil').val() && $('#typeAccessoriesKarpetMobil').val() && $('#priceAccessoriesKarpetMobil').val() &&
        $('#priceAccessoriesKarpetMobil').val() != 0) {
        $('#btn-save-karpet-mobil').removeAttr('disabled');
    } else {
        $('#btn-save-karpet-mobil').attr('disabled', true);
    }
});

$("#typeAccessoriesKarpetMobil").keyup(function () {
    if ($('#brandAccessoriesKarpetMobil').val() && $('#typeAccessoriesKarpetMobil').val() && $('#priceAccessoriesKarpetMobil').val() &&
        $('#priceAccessoriesKarpetMobil').val() != 0) {
        $('#btn-save-karpet-mobil').removeAttr('disabled');
    } else {
        $('#btn-save-karpet-mobil').attr('disabled', true);
    }
});

$("#priceAccessoriesKarpetMobil").keyup(function () {
    if ($('#brandAccessoriesKarpetMobil').val() && $('#typeAccessoriesKarpetMobil').val() && $('#priceAccessoriesKarpetMobil').val() &&
        $('#priceAccessoriesKarpetMobil').val() != 0) {
        $('#btn-save-karpet-mobil').removeAttr('disabled');
    } else {
        $('#btn-save-karpet-mobil').attr('disabled', true);
    }
});

$('#btn-save-karpet-mobil').click(function () {
    if ($('#brandAccessoriesKarpetMobil').val() && $('#typeAccessoriesKarpetMobil').val() && $('#priceAccessoriesKarpetMobil').val() &&
        $('#priceAccessoriesKarpetMobil').val() != 0) {

        var priceAccessoriesKarpetMobil = $('#priceAccessoriesKarpetMobil').val();
        priceAccessoriesKarpetMobil = priceAccessoriesKarpetMobil.split('.').join("");

        $('#karpetMobilCheck').val(priceAccessoriesKarpetMobil);

        $("#karpetMobilName").html($('#brandAccessoriesKarpetMobil').val() + " - " + $('#typeAccessoriesKarpetMobil').val());
        $("#karpetMobilPrice").html("Rp " + $('#priceAccessoriesKarpetMobil').val());

        $('#karpetMobilName').removeClass('d-none');
        $('#karpetMobilPrice').removeClass('d-none');

        var openedCanvas = bootstrap.Offcanvas.getInstance(document.getElementById("karpetMobil"));
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
        data.name = "Karpet Mobil";
        data.brand = $('#brandAccessoriesKarpetMobil').val();
        data.type = $('#typeAccessoriesKarpetMobil').val();
        data.price = priceAccessoriesKarpetMobil;

        arrayAccessories.push(data);
    }
});

$("#karpetMobilGroup").click(function () {
    if ($("#karpetMobilCheck").is(':checked')) {
        $('#karpetMobilCheck').prop('checked', false);

        $('#karpetMobilName').addClass('d-none');
        $('#karpetMobilPrice').addClass('d-none');

        $('#karpetMobilCheck').val(0);

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
            return query.name !== 'Karpet Mobil';
        });
    } else {
        $('#karpetMobilCheck').prop('checked', true);

        var offcanvas = new bootstrap.Offcanvas(document.getElementById("karpetMobil"));
        offcanvas.show();
    }
});

$('#karpetMobil').on('hide.bs.offcanvas', function () {
    if ($("#karpetMobilName").hasClass('d-none') && $("#karpetMobilPrice").hasClass('d-none')) {
        $('#karpetMobilCheck').prop('checked', false);
    }
});