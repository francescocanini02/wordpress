jQuery(document).ready(function ($) {
    /*var wpcf7Elm = document.querySelector('.wpcf7');

    wpcf7Elm.addEventListener('wpcf7submit', function (event) {
        alert("Fire!");
    }, false);*/

    $(".wpcf7").on("wpcf7mailfailed", function (e) {
        $(this).hide(300, function () {
            alert("nascosto!");
        });
    });

});