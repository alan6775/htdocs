$(document).ready(function () {
    const $lightbox = $('#lightbox');
    const $lightboxImg = $('#lightboxImg');
    const $lightboxCaption = $('#lightboxCaption');
    const $lightboxClose = $('#lightboxClose');
    const $body = $('body');

    let isManualClose = false;

    // Create and append description element once
    const $lightboxDescription = $('<p>', {
        class: 'mt-2 text-sm text-slate-400'
    }).appendTo($lightbox);

    $('.gallery-img').on('click', function () {
        const $img = $(this).find('img');
        const captionText = $(this).find('figcaption span').text() || $img.attr('alt');
        const description = $(this).data('description') || '';

        $lightboxImg.attr('src', $img.attr('src'));
        $lightboxCaption.text(captionText);
        $lightboxDescription.text(description);

        $lightbox.removeClass('hidden');
        $body.addClass('overflow-hidden');

        history.pushState({ lightbox: true }, '');
    });

    const closeLightbox = () => {
        $lightbox.addClass('hidden');
        $lightboxImg.attr('src', '');
        $lightboxCaption.text('');
        $lightboxDescription.text('');
        $body.removeClass('overflow-hidden');

        if (!isManualClose && history.state && history.state.lightbox) {
            history.back();
        }
    };

    $lightbox.on('click', function (e) {
        if (e.target === this || e.target === $lightboxClose[0]) {
            isManualClose = true;
            closeLightbox();
            isManualClose = false;
        }
    });

    $(document).on('keydown', function (e) {
        if (e.key === 'Escape' && !$lightbox.hasClass('hidden')) {
            isManualClose = true;
            closeLightbox();
            isManualClose = false;
        }
    });

    $(window).on('popstate', function () {
        if (!$lightbox.hasClass('hidden')) {
            closeLightbox();
        }
    });
});