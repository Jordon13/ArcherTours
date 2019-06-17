var winWidth = $(window).width();
var sval = $(this).scrollTop();

$(document).ready(function() {
    $('.sidenav').sidenav();

    AOS.init();

    $(".close").click(function() {
        $(".searcharea").fadeOut(500);
    });

    $(".search-trigger").click(function() {
        $(".searcharea").fadeIn(500);
    });

    executeProcess();

    scrollProcess();

    $(window).resize(function() {
        winWidth = $(window).width();
        executeProcess();
    });

    $(window).scroll(function() {
        sval = $(this).scrollTop();
        scrollProcess();
    });

});

var executeProcess = () => {
    if (winWidth < 1340) {
        $(".nav-body").addClass('reset');
    } else {
        $(".nav-body").removeClass('reset');
    }

    if (winWidth < 940) {
        $(".nav-icon").show();
        $(".noshow").hide();
    } else {
        $(".nav-icon").hide();
        $(".noshow").show();
    }

    if (winWidth < 1360) {
        $(".nav-links").addClass("less-width");
    } else {
        $(".nav-links").removeClass("less-width");
    }


    if (sval > 114) {
        $('.nav-header').addClass("nav-header-small");
    } else {
        $('.nav-header').removeClass("nav-header-small");
    }
}

var scrollProcess = () => {

    if (sval > 114) {
        $('.nav-header').addClass("nav-header-small");
    } else {
        $('.nav-header').removeClass("nav-header-small");
    }
}