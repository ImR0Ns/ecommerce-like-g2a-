$(document).ready(function() {
    $('.titleP').keyup(function () {
        $('.titleForCaseT').text($(this).val()); //title
    });
    $('.priceNSell').keyup(function () {
        $('.anotgerDd').text($(this).val()); //price
    });
    $('.insuranceSell').keyup(function () {
        $('.daysCaseT').text($(this).val()); // insurance
    });
    $('.quantitySell').keyup(function () {
        $('.actualyQuant').text($(this).val()); // quantity
    });
    $('.tellMoreSell').keyup(function () {
        $('.subTitleForCaseT').text($(this).val()); // description
    });

});