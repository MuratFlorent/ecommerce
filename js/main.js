$(document).ready(function () {
    $('.toggleProducts').on('click', function (oEvent) {
        oEvent.preventDefault();

        var iProductId = $(this).attr('id');
        $('.oldOrders tr[data-product="' + iProductId + '"]').each(function () {
            $(this).fadeToggle('slow');
        });
    })
});
