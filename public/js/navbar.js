$(document).ready(function () {
    $(window).scroll(function () {
        const scroll = $(window).scrollTop();
        const navbarHeight = $(".navbar").outerHeight();
        if (scroll > navbarHeight) {
            $(".navbar").addClass("active");
        } else {
            $(".navbar").removeClass("active");
        }
    });
});
