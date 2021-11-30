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

    // cart
    $(".check__cart").click(function() {
        $("#cart").addClass("open");
        $("body").addClass("open-opacity");
    });
    const $cart = $("#cart");
    $(document).mouseup((e) => {
        if (!$cart.is(e.target) && // if the target of the click isn't the container...
            $cart.has(e.target).length === 0
        ) {
            // ... nor a descendant of the container
            $cart.removeClass("open");
            $("body").removeClass("open-opacity");
        }
    });

    $(".closebtn").click(function() {
        $("#cart").removeClass("open");
        $("#profile").removeClass("open");
        $("body").removeClass("open-opacity");
    });

    // profile
    $(".check__profile").click(function() {
        $("#profile").addClass("open");
        $("body").addClass("open-opacity");
    });
    const $profile = $("#profile");
    $(document).mouseup((e) => {
        if (!$profile.is(e.target) && // if the target of the click isn't the container...
            $profile.has(e.target).length === 0
        ) {
            // ... nor a descendant of the container
            $profile.removeClass("open");
            $("body").removeClass("open-opacity");
        }
    });
});