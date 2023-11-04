$(document).ready(function() {
    var topLogo = $(".top-logo");
    var navbar = $(".navbar");
    checkScroll();
    $(window).scroll(function() {
        checkScroll();
    });
    function checkScroll() {
        if ($(window).scrollTop() > 100) {
            topLogo.hide();
            navbar.addClass("fixed-nav");
        } else {
            topLogo.show();
            navbar.removeClass("fixed-nav");
        }
    }
});