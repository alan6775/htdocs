<?php
include 'php/functions.php';
output_header(array("services-3d-signs"));
?>
<main class="pt-0">
    <section class="relative bg-gradient-to-r from-sky-700 to-indigo-800 pt-32 pb-12 text-center text-white">
        <h1 class="mx-auto max-w-4xl px-4 text-4xl font-extrabold tracking-tight md:text-5xl">3D Signs</h1>
        <h2 class="mx-auto mt-4 px-4 text-lg">Channel letters, halo‑lit logos &amp; bespoke illuminated signs – crafted in Cornwall.</h2>
    </section>
<?php
$breadcrumbs = [
    ["name" => "Home", "url" => "/"],
    ["name" => "3D Signs", "url" => "/3d-signs.html"]
];

output_breadcrumbs($breadcrumbs);
?>
    <section class="mx-auto mt-16 max-w-4xl px-4">
        <h2 class="mb-6 text-3xl font-bold text-slate-900">Why choose a 3D sign?</h2>
        <p class="text-lg text-slate-700">We design and manufacture <strong class="font-semibold">bespoke 3D signs</strong> that make your brand impossible to ignore. From illuminated channel letters to intricate logo signs, our team handles the entire process in‑house.</p>
    </section>

    <!-- Types of 3D Signs -->
    <section class="mx-auto mt-16 max-w-6xl px-4">
        <h2 class="mb-8 text-center text-3xl font-bold text-slate-900">Types of 3D Signs We Offer</h2>

        <div class="grid gap-12 lg:grid-cols-3">
            <!-- Face‑lit -->
            <article class="rounded-xl bg-white p-8 shadow-lg ring-1 ring-slate-200">
                <h3 class="mb-4 text-xl font-semibold text-sky-700">Face‑Lit Channel Letters</h3>
                <p class="text-slate-700">Face‑lit (front‑lit) channel letters shine through translucent acrylic faces illuminated by internal LEDs, delivering <strong class="font-medium">high‑impact visibility</strong> day and night.</p>
                <p class="mt-3 text-sm text-slate-600"><em>Ideal for</em>: retail shops, restaurants &amp; high‑street chains where legibility from distance is paramount.</p>
            </article>

            <!-- Halo‑lit -->
            <article class="rounded-xl bg-white p-8 shadow-lg ring-1 ring-slate-200">
                <h3 class="mb-4 text-xl font-semibold text-sky-700">Halo‑Lit (Back‑Lit) Letters</h3>
                <p class="text-slate-700">Light emanates from behind opaque letter faces, casting a refined <strong class="font-medium">halo glow</strong> onto the wall. Subtle by day, dramatic by night.</p>
                <p class="mt-3 text-sm text-slate-600"><em>Ideal for</em>: boutiques, hotels &amp; premium brands seeking understated elegance and compliance with low‑glare regulations.</p>
            </article>

            <!-- 3D Logos -->
            <article class="rounded-xl bg-white p-8 shadow-lg ring-1 ring-slate-200">
                <h3 class="mb-4 text-xl font-semibold text-sky-700">3D Logos &amp; Custom Shapes</h3>
                <p class="text-slate-700">Transform any emblem into a dimensional showpiece. Illuminated or non‑lit, CNC‑routed to <strong class="font-medium">match brand Pantones</strong> with absolute accuracy.</p>
                <p class="mt-3 text-sm text-slate-600"><em>Ideal for</em>: office lobbies, exhibitions &amp; exterior branding where depth sets you apart.</p>
            </article>
        </div>
    </section>

    <!-- Materials & Construction -->
    <section class="mx-auto mt-16 max-w-6xl px-4">
        <h2 class="mb-6 text-center text-3xl font-bold text-slate-900">Materials &amp; Construction</h2>
        <p class="mx-auto max-w-3xl text-center text-lg text-slate-700">Every sign is engineered for Cornwall’s coastal climate – corrosion‑resistant metals, UV‑stable acrylics and IP67 electronics come as standard.</p>

        <!-- Image Block  max-width 600px-->
        <img
                src="images/construction.jpg"
                alt="Close-up of face-lit channel letters built by North Cornwall CNC"
                class="rounded-lg w-full object-cover shadow-lg ring-1 ring-slate-200 mt-10 max-w-2xl mx-auto"
                loading="lazy"
        />

        <ul class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <li class="rounded-lg bg-white p-6 shadow ring-1 ring-slate-200">
                <h3 class="font-semibold text-sky-700">Acrylic Faces</h3>
                <p class="mt-2 text-sm text-slate-600">3 mm opal acrylic diffuses LEDs evenly. Solid colours or printed vinyl overlays available.</p>
            </li>
            <li class="rounded-lg bg-white p-6 shadow ring-1 ring-slate-200">
                <h3 class="font-semibold text-sky-700">Aluminium Returns</h3>
                <p class="mt-2 text-sm text-slate-600">Precision‑formed, lightweight &amp; rust‑proof. Powder‑coated or brushed finishes to any RAL.</p>
            </li>
            <li class="rounded-lg bg-white p-6 shadow ring-1 ring-slate-200">
                <h3 class="font-semibold text-sky-700">LED Illumination</h3>
                <p class="mt-2 text-sm text-slate-600">Low‑voltage, CE‑certified modules in white or full RGB. Rated 50,000 h – minimal running costs.</p>
            </li>
            <li class="rounded-lg bg-white p-6 shadow ring-1 ring-slate-200">
                <h3 class="font-semibold text-sky-700">Serviceable Backs</h3>
                <p class="mt-2 text-sm text-slate-600">PVC or aluminium panels with quick‑release fixings for future maintenance.</p>
            </li>
            <li class="rounded-lg bg-white p-6 shadow ring-1 ring-slate-200">
                <h3 class="font-semibold text-sky-700">Vinyl &amp; Paint</h3>
                <p class="mt-2 text-sm text-slate-600">High‑tack vinyl graphics &amp; 2‑pack polyurethane paint for flawless, durable colour.</p>
            </li>
        </ul>
    </section>

    <!-- Process -->
    <section class="mx-auto mt-16 max-w-6xl px-4">
        <h2 class="mb-8 text-center text-3xl font-bold text-slate-900">From Idea to Installation</h2>

        <ol class="relative border-l border-sky-600 pl-8">
            <li class="mb-10">
                <span class="absolute -left-3 flex h-6 w-6 items-center justify-center rounded-full bg-sky-600 text-xs font-bold text-white">1</span>
                <h3 class="font-semibold text-slate-800">Consult &amp; Design</h3>
                <p class="mt-2 text-sm text-slate-600">We capture your vision, propose sizes, lighting and provide realistic mock‑ups.</p>
            </li>
            <li class="mb-10">
                <span class="absolute -left-3 flex h-6 w-6 items-center justify-center rounded-full bg-sky-600 text-xs font-bold text-white">2</span>
                <h3 class="font-semibold text-slate-800">CNC Fabrication</h3>
                <p class="mt-2 text-sm text-slate-600">Designs are converted to toolpaths; our routers cut acrylic and aluminium with ±0.1 mm accuracy.</p>
            </li>
            <li class="mb-10">
                <span class="absolute -left-3 flex h-6 w-6 items-center justify-center rounded-full bg-sky-600 text-xs font-bold text-white">3</span>
                <h3 class="font-semibold text-slate-800">Assembly &amp; Wiring</h3>
                <p class="mt-2 text-sm text-slate-600">Returns bonded, LEDs installed, wiring loomed and tested for uniform brightness.</p>
            </li>
            <li class="mb-10">
                <span class="absolute -left-3 flex h-6 w-6 items-center justify-center rounded-full bg-sky-600 text-xs font-bold text-white">4</span>
                <h3 class="font-semibold text-slate-800">Finishing &amp; QA</h3>
                <p class="mt-2 text-sm text-slate-600">Paint, vinyl and protective clear‑coat applied; 2‑hour soak test in dark‑room to spot any light leaks.</p>
            </li>
            <li>
                <span class="absolute -left-3 flex h-6 w-6 items-center justify-center rounded-full bg-sky-600 text-xs font-bold text-white">5</span>
                <h3 class="font-semibold text-slate-800">Delivery/Collection</h3>
                <p class="mt-2 text-sm text-slate-600">Delivered to pre-arranged address or collection from workshop.</p>
            </li>
        </ol>
    </section>

    <!-- FAQ -->
    <?php
    $faqs = [
        ["question" => "How long does it take to make a sign?", "answer" => "Lead times vary by project size and complexity, but most signs are completed within 1-2 weeks"],
        ["question" => "Do you offer installation?", "answer" => "Yes, installation can be discussed during our consultation"],
        ["question" => "Can I see a sample before ordering?", "answer" => "Unfortunately i am only able to provide images of past work or locations"],
        ["question" => "What if I need a custom size?", "answer" => "We can create custom sizes to fit your specific needs. Just let us know your requirements."],
        ["question" => "What materials do you use?", "answer" => "We use high-quality acrylic, aluminium, and LED components to ensure durability and longevity."],
        ["question" => "Can I choose the colour of my sign?", "answer" => "Absolutely! We can match your brand colours or provide a range of options for you to choose from."],
        ["question" => "Do you offer warranties on your signs?", "answer" => "Yes, we offer warranties on our signs to ensure your satisfaction and peace of mind."],
        ["question" => "Are your signs weatherproof?", "answer" => "Yes, our signs are built to withstand the Cornish weather, ensuring durability and longevity."],
        ["question" => "Can you create illuminated signs?", "answer" => "Yes, we specialize in illuminated signs that enhance visibility and aesthetics."],
        ["question" => "What is the maximum size for a sign?", "answer" => "We can create signs of various sizes, but larger projects may require additional planning and logistics."],
        ["question" => "Do you provide design services?", "answer" => "Yes, we offer design services to help bring your vision to life."],
        ["question" => "How do I maintain my sign?", "answer" => "Regular cleaning with mild soap and water is recommended to keep your sign looking its best."]
    ];

    output_faq($faqs);
    ?>
    <!-- CTA -->
    <section class="relative mt-24 overflow-hidden bg-gradient-to-r from-sky-600 to-indigo-700 py-16 text-center text-white">
        <h2 class="mx-auto mb-4 max-w-2xl text-3xl font-bold">Ready to elevate your brand with light &amp; depth?</h2>
        <p class="mx-auto mb-8 max-w-2xl text-lg">Book a free consultation today and see how a bespoke 3D sign can transform your presence.</p>
        <a href="contact.html" class="inline-block rounded-full bg-white px-10 py-4 text-sky-700 font-semibold shadow-lg ring-2 ring-white/50 hover:bg-slate-100 transition">Request a Consultation</a>
        <p class="mt-4 text-sm"><a href="gallery.html" class="underline hover:text-yellow-300">View our gallery of completed projects →</a></p>
    </section>
</main>
<?php

output_footer('<script src="/js/lightbox.js"></script>');

?>
