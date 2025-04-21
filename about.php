<?php
include 'php/functions.php';
output_header();
?>


<main class="pt-0">
    <!-- Hero / Tagline -->
    <section class="relative bg-gradient-to-r from-sky-700 to-indigo-800 pt-32 pb-12 text-center text-white">
        <h1 class="mx-auto max-w-4xl px-4 text-4xl font-extrabold tracking-tight md:text-5xl">Crafting Illuminated 3D Signs</h1>
        <p class="mx-auto mt-4 max-w-2xl px-4 text-lg">Family‑run in Cornwall, engineering logos that shine – day & night.</p>
    </section>
<?php
$breadcrumbs = [
    ["name" => "Home", "url" => "/"],
    ["name" => "About", "url" => "/about"]
];

output_breadcrumbs($breadcrumbs);
?>
    <!-- Story & Expertise -->
    <section class="mx-auto mt-16 max-w-4xl px-4">
        <h2 class="text-2xl font-bold text-slate-900">Our Story & Expertise</h2>
        <p class="mt-4 leading-relaxed">Founded by <strong>Alan Wold</strong>, a sign maker with 40 years of experience, North Cornwall CNC specialises in bold, professional, and affordable 3D LED signage. Working directly from our Cornwall workshop, we design, machine, and assemble every sign in-house—ensuring precision, quality, and durability.</p>
    </section>

    <!-- Values -->
    <section class="mx-auto mt-16 max-w-6xl px-4">
        <h2 class="text-2xl font-bold text-slate-900 text-center">What Drives Us</h2>
        <div class="mt-10 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
            <article class="rounded-xl bg-white p-6 shadow">
                <h3 class="font-semibold text-sky-700">Quality First</h3>
                <p class="mt-2 text-sm">Premium alloys, UV‑stable acrylic, rigorous QC. If it won’t last a decade, we won’t ship it.</p>
            </article>
            <article class="rounded-xl bg-white p-6 shadow">
                <h3 class="font-semibold text-sky-700">Client Collaboration</h3>
                <p class="mt-2 text-sm">Concept sketches, 3D mock‑ups, on‑site install – you’re looped‑in from first idea to final fixings.</p>
            </article>
            <article class="rounded-xl bg-white p-6 shadow">
                <h3 class="font-semibold text-sky-700">Relentless Innovation</h3>
                <p class="mt-2 text-sm">RGB pixel LEDs? Push‑through acrylic? We test new tech so your signage stays ahead of trend.</p>
            </article>
            <article class="rounded-xl bg-white p-6 shadow">
                <h3 class="font-semibold text-sky-700">Local Commitment</h3>
                <p class="mt-2 text-sm">Cornish business, Cornish craftsmen – quick lead‑times and genuine community support.</p>
            </article>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="mx-auto mt-16 max-w-3xl px-4 text-center">
        <h2 class="text-2xl font-bold text-slate-900">Trust & Testimonials</h2>
        <blockquote class="relative mt-8 rounded-lg bg-white p-8 shadow-lg">
            <svg class="absolute -top-5 left-1/2 -translate-x-1/2 transform text-yellow-300" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" viewBox="0 0 24 24"><path d="M2.3 17.38C3 13.66 4.83 9.97 9.2 2h4.4l-1.71 10.3c3.26.86 4.81 3.43 5.57 5.08C18.43 20.38 16.2 23 12 23c-3.45 0-8.08-2.25-9.7-5.62z"/></svg>
            <p class="text-lg leading-relaxed text-slate-700">“The halo‑lit sign North Cornwall CNC built for our hotel is nothing short of spectacular. Guests mention it daily, and it’s now our signature landmark.”</p>
            <cite class="mt-4 block text-sm font-semibold text-slate-500">John Doe – Seaview Hotel</cite>
        </blockquote>
        <p class="mt-8 text-sm text-slate-600">Proud members of the <strong>British Sign & Graphics Association (BSGA)</strong>.</p>
    </section>

    <!-- CTA -->
    <section class="mt-20 overflow-hidden bg-gradient-to-r from-sky-600 to-indigo-700 py-20 text-center text-white">
        <h2 class="mx-auto mb-4 max-w-2xl text-3xl font-bold">Let’s Build Your Statement Sign</h2>
        <p class="mx-auto mb-8 max-w-2xl text-lg">Tell us your idea – we’ll turn it into illuminated reality.</p>
        <a href="contact.php" class="inline-block rounded-full bg-white px-10 py-4 text-sky-700 font-semibold shadow-lg ring-2 ring-white/50 hover:bg-slate-100 transition">Get in Touch</a>
    </section>
</main>


<?php
output_footer('<script src="/js/lightbox.js"></script>');
?>

