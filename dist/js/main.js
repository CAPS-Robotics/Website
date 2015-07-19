$(document).ready(function() {

    var $body = $('body');
    var $document = $(document);
    var $nav = $('.nav');
    var $window = $(window);
    var navOffsetTop = $nav.offset().top;

    function init() {

        $window.on('scroll', onScroll);
        $window.on('resize', onResize);
        $('a[href^="#"]').on('click', smoothScroll);

    }

    function smoothScroll() {

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top - 40
        }, 0, 'swing', function() {
            window.location.hash = target;
            $document.on('scroll', onScroll);
        });

        $document.off('scroll');

        return false;

    }

    function onResize() {

        $nav.removeClass('nav-docked');
        navOffsetTop = $nav.offset().top;
        onScroll();

    }

    function onScroll() {

        if (navOffsetTop < $window.scrollTop() && !$body.hasClass('has-nav-docked')) {
            $body.addClass('has-nav-docked');
        }

        if (navOffsetTop > $window.scrollTop() && $body.hasClass('has-nav-docked')) {
            $body.removeClass('has-nav-docked');
        }

    }

    init();

});
