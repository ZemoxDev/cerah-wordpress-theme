$(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            $('.navbar').addClass('active');
        } else {
            $('.navbar').removeClass('active');
        }
    });
});

$( "#navbar-toggler" ).click(function() {
    $(".collapse:not(.show)").css("display", "unset");
});