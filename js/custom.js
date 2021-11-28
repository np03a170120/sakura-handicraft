$(document).ready(function() {
    $(".main-banner-slider").slick({
        dots: false,
        prevArrow: false,
        nextArrow: false,
        autoplay: true,
        autplaySpeed: 2000,
    });
    $(".insta-slider").slick({
        infinite: true,
        prevArrow: false,
        nextArrow: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        speed: 1000,
        autoplay: true,
        autplaySpeed: 8000,
    });

    // new arrivals slider
    $(".modal-slider").slick({
        dots: false,
        prevArrow: "<i class='fas fa-angle-left'></i>",
        nextArrow: "<i class='fas fa-angle-right'></i>",

        autoplay: true,
        autplaySpeed: 8000,
    });
});