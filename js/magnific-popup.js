(function ($) {
    $('.js-gallery-popup').each(function () {
        var galleryItems = [],
            galleryItem = $(this).find('.js-gallery-popup-item');

        galleryItem.each(function () {
            var src = $(this).attr('data-image'),
                content = $(this).find('.js-mfp-content').html();

            galleryItems.push({
                img: '<img src=' + src + ' >',
                content: content
            });
        });

        galleryItem.magnificPopup({
            items: galleryItems,
            gallery: {
                enabled: true
            },
            type: 'inline',
            inline: {
                markup:
                '<div class="mfp-figure">' +
                '<div class="mfp-close"></div>' +
                '<div class="mfp-img"></div>' +
                '<div class="mfp-content wysiwyg"></div>' +
                '</div>'
            },
            callbacks: {
                beforeOpen: function () {
                    var index = galleryItem.index(this.st.el);
                    if (index !== -1) this.goTo(index);
                }
            }
        });
    });
})(jQuery);