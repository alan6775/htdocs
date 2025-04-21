const imgs = document.querySelectorAll('.gallery-img');
const lightbox = document.getElementById('lightbox');
const lightboxImg = document.getElementById('lightboxImg');
const lightboxCaption = document.getElementById('lightboxCaption');
const lightboxClose = document.getElementById('lightboxClose');
const lightboxDescription = document.createElement('p'); // Create a description element
lightboxDescription.className = 'mt-2 text-sm text-slate-400';
lightbox.appendChild(lightboxDescription); // Append it to the lightbox

imgs.forEach(wrapper => wrapper.addEventListener('click', () => {
    const img = wrapper.querySelector('img');
    lightboxImg.src = img.src;
    const captionEl = wrapper.querySelector('figcaption span');
    lightboxCaption.textContent = captionEl ? captionEl.textContent : img.alt;
    lightboxDescription.textContent = wrapper.dataset.description || ''; // Set the description
    lightbox.classList.remove('hidden');
    document.body.classList.add('overflow-hidden');
}));

const closeLightbox = () => {
    lightbox.classList.add('hidden');
    lightboxImg.src = '';
    lightboxCaption.textContent = '';
    lightboxDescription.textContent = ''; // Clear the description
    document.body.classList.remove('overflow-hidden');
};

lightbox.addEventListener('click', (e) => {
    if (e.target === lightbox || e.target === lightboxClose) closeLightbox();
});

document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && !lightbox.classList.contains('hidden')) closeLightbox();
});
lightbox.addEventListener('click', (e) => {
    if (e.target === lightbox || e.target === lightboxClose) closeLightbox();
});
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && !lightbox.classList.contains('hidden')) closeLightbox();
});