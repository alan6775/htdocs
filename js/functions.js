// Helper functions for class manipulation
const addClasses = (element, ...classes) => element?.classList.add(...classes);
const removeClasses = (element, ...classes) => element?.classList.remove(...classes);

// Mobile nav
document.addEventListener('DOMContentLoaded', () => {
    const navToggle = document.getElementById('navToggle');
    const mobileNav = document.getElementById('mobileNav');
    const navClose = document.getElementById('navToggleClose');

    navToggle?.addEventListener('click', () => {
        removeClasses(mobileNav, 'hidden');
        addClasses(navToggle, 'hidden');
        removeClasses(navClose, 'hidden');
    });

    navClose?.addEventListener('click', () => {
        addClasses(mobileNav, 'hidden');
        removeClasses(navToggle, 'hidden');
        addClasses(navClose, 'hidden');
    });

    addClasses(navClose, 'hidden');
    addClasses(mobileNav, 'hidden');
    removeClasses(navToggle, 'hidden');

    // Header blur
    const header = document.getElementById('site-header');
    const blurHeader = () => {
        window.scrollY > 10 ? addClasses(header, 'scrolled') : removeClasses(header, 'scrolled');
    };
    blurHeader();
    window.addEventListener('scroll', blurHeader);

    // Highlight active nav
    const highlightActiveNav = () => {
        const currentPath = window.location.pathname.replace(/\/$/, '').replace(/\.[^/.]+$/, '');
        const navLinks = document.querySelectorAll('nav a');

        navLinks.forEach(link => {
            let linkPath = link.getAttribute('href')?.replace(/\/$/, '').replace(/\.[^/.]+$/, '') || '';
            if (!linkPath.startsWith('/')) {
                linkPath = '/' + linkPath;
                if(linkPath === "/") {
                    linkPath = '';
                }
            }
            if (linkPath.trim() === currentPath.trim()) {
                console.log(`Active link: ${linkPath}`); // Debugging line
                addClasses(link, 'text-yellow-300', 'font-semibold');
            } else {
                removeClasses(link, 'text-yellow-300', 'font-semibold');
            }
        });
    };

    highlightActiveNav();
});

document.addEventListener('page:load', () => {
console.log('Page loaded event triggered'); // Debugging line
});