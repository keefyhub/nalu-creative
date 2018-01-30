(function ($) {
    var wpcf7 = document.querySelector('.wpcf7');
    var scrollOffset = 140;
    var animateDuration = 500;
    var scrollPosition;

    wpcf7.addEventListener('wpcf7submit', function (event) {
        if ($('.wpcf7-not-valid').length > 0) {
            scrollPosition = $('.wpcf7-not-valid').offset().top - scrollOffset;
        }

        if ($('.gform_confirmation_message').length > 0) {
            scrollPosition = $('.gform_confirmation_message').offset().top - scrollOffset;
        }

        $('html, body').animate({
            scrollTop: scrollPosition
        }, animateDuration);
    }, false);

    wpcf7.addEventListener('wpcf7mailsent', function (event) {
        var message = $('.wpcf7-mail-sent-ok');

        $('html, body').animate({
            scrollTop: scrollPosition
        }, animateDuration);

        $(this).parent().append(message);
    }, false);

    $('.wpcf7').on('change', 'input, select, textarea', function () {
        $(this).removeClass('wpcf7-not-valid');
    });
})(jQuery);