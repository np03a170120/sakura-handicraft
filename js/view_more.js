// FILTER IN MOBILE VIEW
$(".view_more").click(function() {
    $(".filter-content").fadeToggle();
});

$(".view_content_more").click(function() {
    $(".view_contents").fadeToggle();
});

$("#ed_btn").click(function() {
    $(".edit-account-information").fadeToggle();
});

$("#c_email").click(function() {
    $(".change-email").fadeToggle();
});

$("#c_password").click(function() {
    $(".change-password").fadeToggle();
});

$("#bil_btn").click(function() {
    $(".edit-billing-information").fadeToggle();
});