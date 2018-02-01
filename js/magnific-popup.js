(function ($) {
    $('.js-gallery-popup').each(function () {
        var galleryItems = [],
            galleryItem = $(this).find('.js-gallery-popup-item');

        galleryItem.each(function () {
            var src = $(this).attr('data-image'),
                description = $(this).find('.js-mfp-description').html();

            galleryItems.push({
                img: '<img src=' + src + ' >',
                description: description
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
                '<div class="mfp-description wysiwyg"></div>' +
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