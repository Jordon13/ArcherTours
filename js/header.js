var winWidth = $(window).width();
var sval = $(this).scrollTop();
var counter = 0;
var center = 0;

// if (window.addEventListener) {
//     window.addEventListener('DOMMouseScroll', wheel, { passive: true });
//     window.onmousewheel = document.onmousewheel = wheel;

//     function wheel(event) {
//         var delta = 0;
//         if (event.wheelDelta) delta = event.wheelDelta / 100;
//         else if (event.detail) delta = -event.detail / 8;

//         handle(delta);
//     }

//     function handle(delta) {
//         var time = 300;
//         var distance = 600;

//         $('html').stop().animate({
//             scrollTop: $(window).scrollTop() - (distance * delta)
//         }, time);
//     }
// }


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

var setDropDown = () => {
    // var offset = $('.trigger-menu').offset();

    // var left = offset.left;

    // if (winWidth < 1090) {
    //     center = (left - ($('.trigger-menu').width()));
    // } else {
    //     center = (left - ($('.trigger-menu').width() / 2)) + 12;
    // }

    // $('.custom-dropdown').css("left", center + "px");
}



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
        $(".nav-misc").addClass("nav-misc-sm");
    } else {
        $(".nav-misc").removeClass("nav-misc-sm");
        $(".nav-links").removeClass("less-width");
    }


    scrollProcess();
}

$(document).ready(function() {
    $('.button-collapse').sideNav();

    $('.dropdown-button').dropdown({
        inDuration: 300,
        outDuration: 225,
        constrainWidth: false, // Does not change width of dropdown to that of the activator
        hover: true, // Activate on hover
        gutter: 2, // Spacing from edge
        belowOrigin: true, // Displays dropdown below the button
        alignment: 'left', // Displays dropdown with edge aligned to the left of button
        stopPropagation: false // Stops event propagation
      }
    );

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

    setDropDown();

    $('.trigger-menu').hover(function() {
        $('.custom-dropdown').fadeIn();
    });

    $('.custom-dropdown').mouseleave(function() {
        $(this).fadeOut();
    });

    $(window).click(function() {
        $('.custom-dropdown').fadeOut();
    });

    $(window).resize(function() {
        winWidth = $(window).width();
        setDropDown();
        executeProcess();
    });

    $(window).scroll(function() {
        sval = $(this).scrollTop();
        scrollProcess();
    });

});