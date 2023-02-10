$("#priceAccessoriesBodyKit").keyup(function () {
    $("#priceAccessoriesBodyKit").val(formatRupiah(this.value));
});

$("#brandAccessoriesBodyKit").keyup(function () {
    if ($('#brandAccessoriesBodyKit').val() && $('#typeAccessoriesBodyKit').val() && $('#priceAccessoriesBodyKit').val() &&
        $('#priceAccessoriesBodyKit').val() != 0) {
        $('#btn-save-body-kit').removeAttr('disabled');
    } else {
        $('#btn-save-body-kit').attr('disabled', true);
    }
});

$("#typeAccessoriesBodyKit").keyup(function () {
    if ($('#brandAccessoriesBodyKit').val() && $('#typeAccessoriesBodyKit').val() && $('#priceAccessoriesBodyKit').val() &&
        $('#priceAccessoriesBodyKit').val() != 0) {
        $('#btn-save-body-kit').removeAttr('disabled');
    } else {
        $('#btn-save-body-kit').attr('disabled', true);
    }
});

$("#priceAccessoriesBodyKit").keyup(function () {
    if ($('#brandAccessoriesBodyKit').val() && $('#typeAccessoriesBodyKit').val() && $('#priceAccessoriesBodyKit').val() &&
        $('#priceAccessoriesBodyKit').val() != 0) {
        $('#btn-save-body-kit').removeAttr('disabled');
    } else {
        $('#btn-save-body-kit').attr('disabled', true);
    }
});

$('#btn-save-body-kit').click(function () {
    if ($('#brandAccessoriesBodyKit').val() && $('#typeAccessoriesBodyKit').val() && $('#priceAccessoriesBodyKit').val() &&
        $('#priceAccessoriesBodyKit').val() != 0) {

        var priceAccessoriesBodyKit = $('#priceAccessoriesBodyKit').val();
        priceAccessoriesBodyKit = priceAccessoriesBodyKit.split('.').join("");

        $('#bodyKitCheck').val(priceAccessoriesBodyKit);

        $("#bodyKitName").html($('#brandAccessoriesBodyKit').val() + " - " + $('#typeAccessoriesBodyKit').val());
        $("#bodyKitPrice").html("Rp " + $('#priceAccessoriesBodyKit').val());

        $('#bodyKitName').removeClass('d-none');
        $('#bodyKitPrice').removeClass('d-none');

        var openedCanvas = bootstrap.Offcanvas.getInstance(document.getElementById("bodyKit"));
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
        data.name = "Body Kit";
        data.brand = $('#brandAccessoriesBodyKit').val();
        data.type = $('#typeAccessoriesBodyKit').val();
        data.price = priceAccessoriesBodyKit;

        arrayAccessories.push(data);
    }
});

$("#bodyKitGroup").click(function () {
    if ($("#bodyKitCheck").is(':checked')) {
        $('#bodyKitCheck').prop('checked', false);

        $('#bodyKitName').addClass('d-none');
        $('#bodyKitPrice').addClass('d-none');

        $('#bodyKitCheck').val(0);

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
            return query.name !== 'Body Kit';
        });
    } else {
        $('#bodyKitCheck').prop('checked', true);

        var offcanvas = new bootstrap.Offcanvas(document.getElementById("bodyKit"));
        offcanvas.show();
    }
});

$('#bodyKit').on('hide.bs.offcanvas', function () {
    if ($("#bodyKitName").hasClass('d-none') && $("#bodyKitPrice").hasClass('d-none')) {
        $('#bodyKitCheck').prop('checked', false);
    }
});