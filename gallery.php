<?php
include 'php/functions.php';
output_header();
?>

<main class="pt-0">
    <!-- Hero / Tagline -->
    <section class="relative bg-gradient-to-r from-sky-700 to-indigo-800 pt-32 pb-12 text-center text-white">
        <h1 class="mx-auto max-w-4xl px-4 text-4xl font-extrabold tracking-tight md:text-5xl">Illuminated 3D Sign Gallery</h1>
        <p class="mx-auto mt-4 px-4 text-lg">Real installations that prove dimensional signage turns brands into landmarks.</p>
    </section>
<?php
$breadcrumbs = [
    ["name" => "Home", "url" => "/"],
    ["name" => "Gallery", "url" => "/gallery"],
];

output_breadcrumbs($breadcrumbs);
?>
    <h2 class="text-2xl font-bold text-slate-900 text-center mt-15">TEST CNC‑Fabricated Channel Letters & Logos</h2>
    <!-- Gallery Grid -->
    <section class="mx-auto mt-12 max-w-6xl px-4">

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Project 1 -->
            <figure class="group relative overflow-hidden rounded-lg shadow-lg gallery-img" data-description = "This eye-catching custom sign crafted for The Little Greek combines classic elegance with modern design, showcasing bold, dimensional lettering that prominently highlights the brand's identity. The sleek, sophisticated black finish contrasts beautifully with the minimalist aesthetic, providing exceptional visibility and visual impact. Ideal for both indoor and outdoor environments, this signage not only enhances brand presence but also sets a distinctive and welcoming tone for customers.">
                <img src="images/greek-food-trailer.jpg" alt="Food trailer with 'GREEK' illuminated 3D sign at night" class="h-full w-full cursor-zoom-in object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy" />
                <figcaption class="absolute inset-0 flex items-end bg-gradient-to-t from-slate-900/80 via-slate-800/20 to-transparent p-4 text-sm text-white opacity-50 group-hover:opacity-100 transition-opacity duration-300"><span>Face‑lit letters for <strong>The Little Greek Grill</strong></span></figcaption>
            </figure>

            <!-- Project 2 -->
            <figure class="group relative overflow-hidden rounded-lg shadow-lg gallery-img">
                <img src="images/seaview-hotel.jpg" alt="Halo‑lit stainless hotel sign reading 'Seaview Hotel'" class="h-full w-full cursor-zoom-in object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy" />
                <figcaption class="absolute inset-0 flex items-end bg-gradient-to-t from-slate-900/80 via-slate-800/20 to-transparent p-4 text-sm text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300"><span>Halo‑lit stainless letters for <strong>Seaview Hotel</strong></span></figcaption>
            </figure>

            <!-- Project 3 -->
            <figure class="group relative overflow-hidden rounded-lg shadow-lg gallery-img">
                <img src="images/soft2bet-sign.jpg" alt="Indoor exhibition logo sign lit in white and green for Soft2Bet" class="h-full w-full cursor-zoom-in object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy" />
                <figcaption class="absolute inset-0 flex items-end bg-gradient-to-t from-slate-900/80 via-slate-800/20 to-transparent p-4 text-sm text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300"><span>Expo logo for <strong>Soft2Bet</strong></span></figcaption>
            </figure>

            <!-- Project 4 -->
            <figure class="group relative overflow-hidden rounded-lg shadow-lg gallery-img">
                <img src="images/bakery-shop.jpg" alt="Bakery storefront with pink illuminated 3D sign 'The Little Bakery'" class="h-full w-full cursor-zoom-in object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy" />
                <figcaption class="absolute inset-0 flex items-end bg-gradient-to-t from-slate-900/80 via-slate-800/20 to-transparent p-4 text-sm text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300"><span>Front‑lit letters for <strong>The Little Bakery</strong></span></figcaption>
            </figure>

            <!-- Duplicate / add more figures as needed -->
        </div>
    </section>

    <!-- CTA -->
    <section class="mt-20 overflow-hidden bg-gradient-to-r from-sky-600 to-indigo-700 py-20 text-center text-white">
        <h2 class="mx-auto mb-4 max-w-2xl text-3xl font-bold">Ready to put your logo in lights?</h2>
        <p class="mx-auto mb-8 max-w-2xl text-lg">Share your vision and we’ll fabricate a sign that demands attention.</p>
        <a href="contact.html" class="inline-block rounded-full bg-white px-10 py-4 text-sky-700 font-semibold shadow-lg ring-2 ring-white/50 hover:bg-slate-100 transition">Get a Free Quote</a>
    </section>
</main>


<?php
output_footer('<script src="/js/lightbox.js"></script>');
?>

