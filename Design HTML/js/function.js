$(document).ready(function () {
    $('.your-class').slick({
        lazyLoad: 'ondemand',
        dots: true,
        centerMode: false,
        infinite: true,
        centerPadding: '60px',
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 4,
        arrows: false,
        responsive: [{
            breakpoint: 1200,
            settings: {
                arrows: false,
                centerMode: false,
                centerPadding: '40px',
                slidesToShow: 2
            }
        }, {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: false,
                centerPadding: '40px',
                slidesToShow: 1,
                dots: false
            }
        }]
    });
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        autoplay: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        autoplay: false,
        dots: false,
        arrows: false,
        centerMode: true,
        focusOnSelect: true,
        vertical: true
    });
});
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
        document.getElementById("header").style.top = "0";
    } else {
        document.getElementById("header").style.top = "-80px";
    }
}

var sections = $('.scrolleffect')
    , nav = $('header, .nav-res')

    , nav_height = nav.outerHeight();
$(window).on('scroll', function () {
    var cur_pos = $(this).scrollTop();

    sections.each(function () {
        var top = $(this).offset().top - nav_height,
            bottom = top + $(this).outerHeight();

        if (cur_pos >= top && cur_pos <= bottom) {
            nav.find('a').removeClass('activeForA');
            nav.find('a').addClass('activeForAhidden');
            nav.find('a[href="#' + $(this).attr('id') + '"]').addClass('activeForA').removeClass('activeForAhidden');
        }
    });
});
$('.scrolling-down a, .scroll-up').on('click', function () {
    var $el = $(this), id = $el.attr('href');
    $('html, body').animate({

        scrollTop: $(id).offset().top - 79
    }, 500);

    return false;
});
$('.navIcon').click(function () {
    $('.nav-res').toggle();
});

nav.find('a').on('click', function () {
    var $el = $(this), id = $el.attr('href');
    $('html, body').animate({

        scrollTop: $(id).offset().top - 79
    }, 500);

    return false;
});
