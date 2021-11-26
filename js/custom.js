$(document).ready(function() {
    $(".main-banner-slider").slick({
        dots: false,
        prevArrow: false,
        nextArrow: false,
        autoplay: true,
        autplaySpeed: 2000,
    });

    // new arrivals slider
    $(".modal-slider").slick({
        dots: false,
        prevArrow: "<i class='fas fa-angle-left'></i>",
        nextArrow: "<i class='fas fa-angle-right'></i>",
        autoplay: false,
        autplaySpeed: 2000,
    });
});