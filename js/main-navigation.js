(function ($) {
    var lastId,
        topMenu = $('.site-header'),
        topMenuHeight = topMenu.outerHeight() + 1,

        menuItems = topMenu.find('.main-navigation a'),

        scrollItems = menuItems.map(function () {
            var item = $($(this).attr('href'));
            if (item.length) {
                return item;
            }
        });

    menuItems.click(function (e) {
        var href = $(this).attr('href'),
            offsetTop = href === '#' ? 0 : $(href).offset().top - topMenuHeight + 1;

        $('html, body').stop().animate({
            scrollTop: offsetTop
        }, 850);
        e.preventDefault();

        if ($('.site-header').hasClass('site-header--open')) {
            $('.js-navigation-toggle').trigger('click');
        }
    });

    $(window).on('scroll', function () {
        var fromTop = $(this).scrollTop() + topMenuHeight;
        var cur = scrollItems.map(function () {
            if ($(this).offset().top < fromTop)
                return this;
        });
        cur = cur[cur.length - 1];
        var id = cur && cur.length ? cur[0].id : '';

        if (lastId !== id) {
            lastId = id;
            menuItems.parent().removeClass('current-menu-item').end().filter('[href="#' + id + '"]').parent().addClass('current-menu-item');
        }
    });

    $(window).on('scroll', function () {
        var windowPosition = $(window).scrollTop(),
            windowTarget = $('.site-header:not(.site-header--mobile)').offset().top;

        if (windowPosition > windowTarget) {
            $('.sticky-menu').addClass('sticky-menu--fixed');
        } else {
            $('.sticky-menu').removeClass('sticky-menu--fixed');
        }
    });

    $('.js-navigation-toggle').on('click', function (e) {
        e.preventDefault();

        $('.js-navigation-target').toggleClass('site-header--open');
    });
})(jQuery);
