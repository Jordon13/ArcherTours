var winWidth = $(window).width();
var sval = $(this).scrollTop();
var counter = 0;

if (window.addEventListener) {
    window.addEventListener('DOMMouseScroll', wheel, { passive: true });
    window.onmousewheel = document.onmousewheel = wheel;

    function wheel(event) {
        var delta = 0;
        if (event.wheelDelta) delta = event.wheelDelta / 80;
        else if (event.detail) delta = -event.detail / 4;

        handle(delta);
    }

    function handle(delta) {
        var time = 800;
        var distance = 300;

        $('html').stop().animate({
            scrollTop: $(window).scrollTop() - (distance * delta)
        }, time);
    }
}


var animateDivs = () => {

    var divs = $('.contents');
    var indicators = $('.indicator');

    console.log("Indicator Length: " + indicators.length);

    var divCount = divs.length;
    var count = 0;
    var firstrun = true;
    var divSlide = setInterval(() => {



        if (firstrun) {
            count = 1;
            $(divs).fadeOut(1000);
            $(divs).eq(count).delay(1000 - 2).fadeIn(2000);
            $(indicators).removeClass('indicator-active');
            $(indicators).eq(count).addClass('indicator-active');
            firstrun = false;
        } else {

            $(divs).fadeOut(1000);
            $(divs).eq(count).delay(1000 - 2).fadeIn(2000);
            $(indicators).removeClass('indicator-active');
            $(indicators).eq(count).addClass('indicator-active');
        }

        count++
        if (count == divCount) {
            count = 0;
        }
        console.log(count);

    }, 10000);

}

var indicatorChange = () => {

        var divs = $('.contents');
        var indicators = $('.indicator');

        console.log("Indicator Length: " + indicators.length);

        var divCount = divs.length;

        var firstrun = true;



        $(indicators).click(function() {

            var currentIndex = indicators.index(this);

            $(divs).fadeOut(500);
            $(divs).eq(currentIndex).delay(500 - 5).fadeIn(1000);
            $(indicators).removeClass('indicator-active');
            $(indicators).eq(currentIndex).addClass('indicator-active');
        });



    }
    //1261 for the close icon for header and the responsiveness is complete
    // console.log(sval);

$(document).ready(function() {
    $('.sidenav').sidenav();

    AOS.init();

    for (x = 0; x < $('.contents').length - 1; x++) {
        $('.indicators').append('<div class="indicator"></div>');
    }


    indicatorChange();


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

    if (winWidth < 1090) {
        $(".nav-links").addClass("less-width");
    } else {
        $(".nav-links").removeClass("less-width");
    }


    scrollProcess();
}

var scrollProcess = () => {

    if (sval > 114) {
        $('.nav-header').addClass("nav-header-small"); //nav-links-invert
        $('.nav-header').addClass("nav-links-invert");
        $('.nav-misc>i').addClass("invert");
        $('.nav-misc>button').addClass("invert");
        $('.nav-header').addClass("nav-header-small"); //nav-body-small
        $('.nav-body').addClass("nav-body-small");
    } else {
        $('.nav-header').removeClass("nav-header-small");
        $('.nav-header').removeClass("nav-links-invert");
        $('.nav-misc>i').removeClass("invert");
        $('.nav-misc>button').removeClass("invert");
        $('.nav-header').removeClass("nav-header-small");
        $('.nav-body').removeClass("nav-body-small");
    }
}