$(document).ready(function() {
    var topLogo = $(".top-logo");
    var navbar = $(".navbar");

    // Initial page load check
    checkScroll();

    // Check the scroll position on scroll events
    $(window).scroll(function() {
        checkScroll();
    });

    function checkScroll() {
        if ($(window).scrollTop() > 100) { // Adjust the scroll value as needed
            topLogo.hide();
            navbar.addClass("fixed-nav");
        } else {
            topLogo.show();
            navbar.removeClass("fixed-nav");
        }
    }
});