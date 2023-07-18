$(document).ready(function () {
    updateCartData();
});

function cartData(url, targetSelector) {
    return $.get(url, {})
        .done(function (data) {
            $(targetSelector).html(data);
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            return;
        });
}

function updateCartData() {
    cartData("/keranjang/cart", "#data-cart-list")
        .then(function () {
            return cartData("/keranjang/price", "#data-cart-price");
        })
        .then(function () {
            return cartData("/keranjang/count", "#data-cart-count");
        })
        .fail(function (errors) {
            return;
        });
}

$(document).on("input", ".qty", function () {
    let key = $(this).attr("data-key");
    let qty = $("#qty_" + key).val();

    if (qty < 0) {
        $(this).val(1);
        alert("Kuantitas Tidak Boleh Kurang Dari 1");
        return;
    }

    if (qty > 10000) {
        $(this).val(10000);
        alert("Kuantitas Tidak Boleh Melebihi Batas 10000");
        return;
    }

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $.post("keranjang/qty", {
        _method: "put",
        id: key,
        qty: qty,
    })
        .done((response) => {
            updateCartData();
        })
        .fail((errors) => {
            return;
        });
});
