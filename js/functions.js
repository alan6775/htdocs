const $navToggle = $('#navToggle');
const $mobileNav = $('#mobileNav');
const $navClose = $('#navToggleClose');
const $header = $('#site-header');

$(document).ready(function () {
    // Initial state
    $navClose.addClass('hidden');
    $mobileNav.addClass('hidden');
    $navToggle.removeClass('hidden');

    // Mobile nav toggle
    $navToggle.on('click', function () {
        $mobileNav.removeClass('hidden');
        $navToggle.addClass('hidden');
        $navClose.removeClass('hidden');
    });

    $navClose.on('click', function () {
        $mobileNav.addClass('hidden');
        $navToggle.removeClass('hidden');
        $navClose.addClass('hidden');
    });

    // Header blur on scroll
    const blurHeader = () => {
        $(window).scrollTop() > 10 ? $header.addClass('scrolled') : $header.removeClass('scrolled');
    };
    blurHeader();
    $(window).on('scroll', blurHeader);

    // Highlight active nav link
    const currentPath = window.location.pathname.replace(/\/$/, '').replace(/\.[^/.]+$/, '');
    $('nav a').each(function () {
        let linkPath = $(this).attr('href')?.replace(/\/$/, '').replace(/\.[^/.]+$/, '') || '';
        if (!linkPath.startsWith('/')) linkPath = '/' + linkPath;
        if (linkPath === '/') linkPath = '';
        if (linkPath.trim() === currentPath.trim()) {
            $(this).addClass('text-yellow-300 font-semibold');
        } else {
            $(this).removeClass('text-yellow-300 font-semibold');
        }
    });
});

// Page show event (mainly for debugging)
$(window).on('pageshow', function () {
    console.log('Page loaded event triggered');
        // Initial state
        $navClose.addClass('hidden');
        $mobileNav.addClass('hidden');
        $navToggle.removeClass('hidden');
});