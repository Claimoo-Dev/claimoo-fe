$("#priceAccessoriesSoundSystem").keyup(function () {
    $("#priceAccessoriesSoundSystem").val(formatRupiah(this.value));
});

$("#brandAccessoriesSoundSystem").keyup(function () {
    if ($('#brandAccessoriesSoundSystem').val() && $('#typeAccessoriesSoundSystem').val() && $('#priceAccessoriesSoundSystem').val() &&
        $('#priceAccessoriesSoundSystem').val() != 0) {
        $('#btn-save-sound-system').removeAttr('disabled');
    } else {
        $('#btn-save-sound-system').attr('disabled', true);
    }
});

$("#typeAccessoriesSoundSystem").keyup(function () {
    if ($('#brandAccessoriesSoundSystem').val() && $('#typeAccessoriesSoundSystem').val() && $('#priceAccessoriesSoundSystem').val() &&
        $('#priceAccessoriesSoundSystem').val() != 0) {
        $('#btn-save-sound-system').removeAttr('disabled');
    } else {
        $('#btn-save-sound-system').attr('disabled', true);
    }
});

$("#priceAccessoriesSoundSystem").keyup(function () {
    if ($('#brandAccessoriesSoundSystem').val() && $('#typeAccessoriesSoundSystem').val() && $('#priceAccessoriesSoundSystem').val() &&
        $('#priceAccessoriesSoundSystem').val() != 0) {
        $('#btn-save-sound-system').removeAttr('disabled');
    } else {
        $('#btn-save-sound-system').attr('disabled', true);
    }
});

$('#btn-save-sound-system').click(function () {
    if ($('#brandAccessoriesSoundSystem').val() && $('#typeAccessoriesSoundSystem').val() && $('#priceAccessoriesSoundSystem').val() &&
        $('#priceAccessoriesSoundSystem').val() != 0) {

        var priceAccessoriesSoundSystem = $('#priceAccessoriesSoundSystem').val();
        priceAccessoriesSoundSystem = priceAccessoriesSoundSystem.split('.').join("");

        $('#soundSystemCheck').val(priceAccessoriesSoundSystem);

        $("#soundSystemName").html($('#brandAccessoriesSoundSystem').val() + " - " + $('#typeAccessoriesSoundSystem').val());
        $("#soundSystemPrice").html("Rp " + $('#priceAccessoriesSoundSystem').val());

        $('#soundSystemName').removeClass('d-none');
        $('#soundSystemPrice').removeClass('d-none');

        var openedCanvas = bootstrap.Offcanvas.getInstance(document.getElementById("soundSystem"));
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
        data.name = "Sound System";
        data.brand = $('#brandAccessoriesSoundSystem').val();
        data.type = $('#typeAccessoriesSoundSystem').val();
        data.price = priceAccessoriesSoundSystem;

        arrayAccessories.push(data);
    }
});

$("#soundSystemGroup").click(function () {
    if ($("#soundSystemCheck").is(':checked')) {
        $('#soundSystemCheck').prop('checked', false);

        $('#soundSystemName').addClass('d-none');
        $('#soundSystemPrice').addClass('d-none');

        $('#soundSystemCheck').val(0);

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
            return query.name !== 'Sound System';
        });
    } else {
        $('#soundSystemCheck').prop('checked', true);

        var offcanvas = new bootstrap.Offcanvas(document.getElementById("soundSystem"));
        offcanvas.show();
    }
});

$("#soundSystemCheck").click(function () {
    if ($("#soundSystemCheck").is(':checked')) {
        $('#soundSystemCheck').prop('checked', true);
        
        var offcanvas = new bootstrap.Offcanvas(document.getElementById("soundSystem"));
        offcanvas.show();
    } else {
        $('#soundSystemCheck').prop('checked', false);

        $('#soundSystemName').addClass('d-none');
        $('#soundSystemPrice').addClass('d-none');

        $('#soundSystemCheck').val(0);

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
            return query.name !== 'Sound System';
        });
    }
});

$('#soundSystem').on('hide.bs.offcanvas', function () {
    if ($("#soundSystemName").hasClass('d-none') && $("#soundSystemPrice").hasClass('d-none')) {
        $('#soundSystemCheck').prop('checked', false);
    }
});
