$(document).ready(function() {
    $(".updatecart").click(function() {
        var rowId = $(this).attr('id');
        var qty = $(this).parent().parent().find('.form-control.input-sm').val();
        var token = $("input[name = '_token']").val();
        $.ajax({
            url: 'cap-nhat-gio-hang/' + rowId + '/' + qty,
            type: 'GET',
            cache: false,
            data: {
                "_token": token,
                "id": rowId,
                "qty": qty
            },
            success: function(data) {
                if (data == "oke") {
                    window.location = "gio-hang"
                }
            },
            error: function() {
                alert("error!!!!");
            }
        });
    });

    function numberFormat(number) {

        var digitCount = (number + "").length;
        var formatedNumber = number + "";
        var ind = digitCount % 3 || 3;
        var temparr = formatedNumber.split('');

        if (digitCount > 3 && digitCount <= 6) {

            temparr.splice(ind, 0, ',');
            formatedNumber = temparr.join('');

        } else if (digitCount >= 7 && digitCount <= 15) {
            var temparr2 = temparr.slice(0, ind);
            temparr2.push(',');
            temparr2.push(temparr[ind]);
            temparr2.push(temparr[ind + 1]);
            // temparr2.push( temparr[ind + 2] ); 
            if (digitCount >= 7 && digitCount <= 9) {
                temparr2.push(" million");
            } else if (digitCount >= 10 && digitCount <= 12) {
                temparr2.push(" billion");
            } else if (digitCount >= 13 && digitCount <= 15) {
                temparr2.push(" trillion");

            }
            formatedNumber = temparr2.join('');
        }
        return formatedNumber;
    }

    $(".autoupdate").off('keyup').on('keyup', function() {
        var qty = parseInt($(this).val());
        var rowId = $(this).data('id');
        var token = $("input[name = '_token']").val();
        var money = parseInt($(this).data('price'));
        var total = (qty * money);

        $.ajax({
            url: 'cap-nhat-gio-hang/' + rowId + '/' + qty,
            type: 'GET',
            cache: false,
            data: {
                "_token": token,
                "id": rowId,
                "qty": qty
            },
            success: function(data) {
                if (data == "oke") {
                    if (parseInt(total) != 0) {
                        $('#total_' + rowId).html('$' + numberFormat(total));
                    } else {
                        $('#total_' + rowId).html(total);
                    }
                }
            },
            error: function() {
                window.location = "gio-hang";
            }
        });
    });

});