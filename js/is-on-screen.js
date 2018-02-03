(function ($) {
    function checkForElementsToAnimate() {
        var jsAnimateSelector = $('.js-animate-when-visible'),
            onScreenOffsetX = 0.2,
            onScreenOffsetY = 0.2,
            mobOnScreenOffsetX = 0.05,
            mobOnScreenOffsetY = 0.05,
            wysiwygOnScreenOffsetX = 0.25,
            wysiwygOnScreenOffsetY = 0.25,
            onScreenBreakPoint = 800,
            onScreen;

        if (jsAnimateSelector.length < 1) return;

        jsAnimateSelector.each(function () {
            var delayAnimation = $(this).data('delay-animation'),
                alreadyOnScreen = $(this).offset().top < $(window).scrollTop(),
                wysiwygChildOnScreen = $(this).hasClass('wysiwyg') && $(this).children().isOnScreen(wysiwygOnScreenOffsetX, wysiwygOnScreenOffsetY);

            if ($(window).width() < onScreenBreakPoint) {
                onScreen = $(this).isOnScreen(mobOnScreenOffsetX, mobOnScreenOffsetY);
            } else {
                onScreen = $(this).isOnScreen(onScreenOffsetX, onScreenOffsetY);
            }

            if (onScreen || alreadyOnScreen || wysiwygChildOnScreen) {
                if (delayAnimation) {
                    $(this).css('animation-delay', delayAnimation);
                }
                $(this).addClass('animate').removeClass('js-animate-when-visible');
            }
        });
    }

    $(window).on('load resize scroll', function () {
        checkForElementsToAnimate();
    });

    setTimeout(function () {
        $('.hero-banner__video').get(0).play();
    }, 1500);
})(jQuery);
