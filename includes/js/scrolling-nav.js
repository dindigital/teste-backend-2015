//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('.page-scroll a').bind('click', function(event) {
        var $anchor = $(this);
        var offset_tmp = $($anchor.attr('href')).offset();
        var top_tmp = (offset_tmp == undefined) ? 0 : offset_tmp.top;
        $('html, body').stop().animate({
            scrollTop: top_tmp
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});