<?php
include 'php/functions.php';
output_header(array("organization", "website", "services"));
?>
<!-- Hero Section -->
<section class="relative flex min-h-screen items-center justify-center overflow-hidden">
  <img src="images/hero.jpg" alt="Illuminated 3D sign for a food truck in cornwall" class="absolute inset-0 h-full w-full object-cover" loading="lazy"/>
  <div class="absolute inset-0 bg-gradient-to-br from-sky-700/60 to-indigo-900/60"></div>
  <div class="relative z-10 mx-auto max-w-2xl p-4 text-center text-white">
    <h1 class="text-4xl md:text-6xl font-extrabold leading-tight drop-shadow-md">
      Illuminated 3D Signage to Make Your Brand <span class="text-yellow-300">Shine</span>
    <h2 class="mt-4 text-lg md:text-2xl">
      Custom channel letters, logos &amp; illuminated signs – hand crafted in Cornwall.
    </h2>
    <a href="/contact" class="mt-8 inline-block rounded-full bg-yellow-300 px-8 py-3 text-base font-semibold text-slate-900 shadow-lg ring-2 ring-yellow-400/40 hover:bg-yellow-200 focus:outline-none focus:ring-4 focus:ring-yellow-400/70 transition">Get a Free Quote</a>
  </div>
</section>
<?php
$breadcrumbs = [
    ["name" => "Home", "url" => ""]
];

output_breadcrumbs($breadcrumbs);
?>
<!-- Benefits -->
<section class="mx-auto max-w-6xl px-4 py-16">
  <h2 class="mb-8 text-center text-3xl font-bold text-slate-900">Why Our 3D Signs Work</h2>

  <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
    <article class="rounded-xl bg-white p-6 shadow-lg transition hover:-translate-y-1 hover:shadow-2xl">
      <svg xmlns="http://www.w3.org/2000/svg" class="mb-4 h-8 w-8 text-sky-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c2.21 0 4-1.79 4-4S14.21 0 12 0 8 1.79 8 4s1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
      <h3 class="font-semibold text-slate-800">Instant Visibility</h3>
      <p class="mt-2 text-sm text-slate-600">Depth + light = a storefront impossible to ignore. Capture attention faster than flat signage ever could.</p>
    </article>

    <article class="rounded-xl bg-white p-6 shadow-lg transition hover:-translate-y-1 hover:shadow-2xl">
      <svg xmlns="http://www.w3.org/2000/svg" class="mb-4 h-8 w-8 text-sky-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4H9V9h3V7.5a4.5 4.5 0 114.5 4.5H15v2h2v3h-2v4h-2v-4h-2v-3h2V9h2a2.5 2.5 0 10-2.5-2.5V9H9v3h3v4z"/></svg>
      <h3 class="font-semibold text-slate-800">24/7 Brand Power</h3>
      <p class="mt-2 text-sm text-slate-600">Hi‑efficiency LEDs keep your logo glowing long after competitors’ lights go out.</p>
    </article>

    <article class="rounded-xl bg-white p-6 shadow-lg transition hover:-translate-y-1 hover:shadow-2xl">
      <svg xmlns="http://www.w3.org/2000/svg" class="mb-4 h-8 w-8 text-sky-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v10l3 3m6.042-6.042A9 9 0 1112 21l.218-.006A9 9 0 0021 12l-.958-.042z"/></svg>
      <h3 class="font-semibold text-slate-800">Built to Last</h3>
      <p class="mt-2 text-sm text-slate-600">Powder‑coated aluminium, acrylic & IP67‑rated LEDs. Cornish weather‑proof, guaranteed.</p>
    </article>

    <article class="rounded-xl bg-white p-6 shadow-lg transition hover:-translate-y-1 hover:shadow-2xl">
      <svg xmlns="http://www.w3.org/2000/svg" class="mb-4 h-8 w-8 text-sky-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 3l3.293 3.293-2.293 2.293 1.414 1.414L15 7.414l3.293 3.293-1.414 1.414L13.586 9 11 11.586 9.586 10.172 6.293 13.707 3 10.414l1.414-1.414L7.586 12 10 9.586 12.586 12 14 10.586 10 7.172V3z"/></svg>
      <h3 class="font-semibold text-slate-800">Scalable Craft</h3>
      <p class="mt-2 text-sm text-slate-600">From one‑off boutique pieces to multi‑site roll‑outs – all fabricated in‑house on CNC.</p>
    </article>
  </div>
</section>

<!-- View Gallery Button -->
<section class="bg-slate-100 py-16 text-center">
  <h2 class="text-3xl font-bold text-slate-900 mb-8">See More of Our Work</h2>
  <p class="mb-4 text-lg text-slate-700">Explore our gallery of illuminated signs and channel letters.</p>
  <a href="/gallery" class="inline-block rounded-full bg-sky-600 px-10 py-4 text-white font-semibold shadow-lg ring-2 ring-white/50 hover:bg-sky-700 transition">View Gallery</a>
</section>

<!-- divider -->
 <section class="bg-slate-200 py-8">
  <div class="mx-auto max-w-6xl px-4">
    <hr class="border-t border-slate-300" />
  </div>
</section>

<section class="mx-auto max-w-6xl px-4 py-16">
  <h2 class="text-center text-3xl font-bold text-slate-900 mb-8">Face-Lit Channel Letters & 3D Illuminated Signage</h2>
  <div class="grid md:grid-cols-2 gap-8 text-slate-700 text-base leading-relaxed">

    <!-- LEFT COLUMN (Text Only) -->
    <div class="space-y-4">
      <p><strong>Face-lit channel letters</strong>—also known as front-lit signs or 3D letters—offer a captivating and high-impact way to showcase your brand. These illuminated signs combine bold dimensional design with vibrant LED lighting to grab attention and enhance visibility both day and night.</p>
      <p>Perfect for businesses operating during evening hours or looking to create a striking storefront presence, our <strong>illuminated 3D signs</strong> help you stand out in any environment. North Cornwall CNC offers custom fabrication of <strong>front-lit</strong>, <strong>halo-lit</strong>, and <strong>face-lit channel letters</strong> using premium materials and precision CNC techniques.</p>
    </div>

    <!-- RIGHT COLUMN (Text + Image) -->
    <div class="space-y-4">
      <p>Each letter is engineered for durability and easy maintenance. Our 3D letters feature a <strong>3mm translucent opal acrylic face with rebated edges</strong>, bonded to a single-piece aluminium channel for structural integrity. The rear is made from expanded PVC and fitted with low-voltage LED modules, ensuring long-lasting, energy-efficient illumination.</p>
      <p>Letter faces can be fully customised with printed designs or solid colours, and the aluminium channels are available in a variety of exterior-grade finishes to complement your brand aesthetic. <strong>We fabricate everything in-house in Cornwall</strong>, giving you full creative control and reliable turnaround times.</p>
    </div>

  </div>
</section>

<section class="mx-auto max-w-6xl px-4 py-16">
  <h2 class="text-center text-3xl font-bold text-slate-900 mb-12">What Makes Our Signs Different?</h2>
  <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">

    <article class="rounded-xl bg-white p-6 shadow-lg transition hover:-translate-y-1 hover:shadow-2xl text-center">
      <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-4 h-10 w-10 text-sky-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v16h16V4H4z" />
      </svg>
      <h3 class="text-lg font-semibold text-slate-800 mb-2">Precision-Crafted</h3>
      <p class="text-sm text-slate-600">Our CNC machines cut with unmatched precision for flawless finishes and perfect fit.</p>
    </article>

    <article class="rounded-xl bg-white p-6 shadow-lg transition hover:-translate-y-1 hover:shadow-2xl text-center">
      <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-4 h-10 w-10 text-sky-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6h13" />
      </svg>
      <h3 class="text-lg font-semibold text-slate-800 mb-2">Built to Perform</h3>
      <p class="text-sm text-slate-600">Designed to shine through any condition—rain, fog, or Cornish gale—day and night.</p>
    </article>

    <article class="rounded-xl bg-white p-6 shadow-lg transition hover:-translate-y-1 hover:shadow-2xl text-center">
      <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-4 h-10 w-10 text-sky-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6l4 2" />
      </svg>
      <h3 class="text-lg font-semibold text-slate-800 mb-2">End-to-End Control</h3>
      <p class="text-sm text-slate-600">We design, build and finish everything in-house, giving you full creative control.</p>
    </article>

    <article class="rounded-xl bg-white p-6 shadow-lg transition hover:-translate-y-1 hover:shadow-2xl text-center">
      <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-4 h-10 w-10 text-sky-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2 4 4 8-8 4 4" />
      </svg>
      <h3 class="text-lg font-semibold text-slate-800 mb-2">Brand-First Approach</h3>
      <p class="text-sm text-slate-600">We don’t just build signs—we amplify your brand in every detail and every light.</p>
    </article>

    <article class="rounded-xl bg-white p-6 shadow-lg transition hover:-translate-y-1 hover:shadow-2xl text-center">
      <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-4 h-10 w-10 text-sky-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h6m-6 4h10" />
      </svg>
      <h3 class="text-lg font-semibold text-slate-800 mb-2">Fast & Reliable</h3>
      <p class="text-sm text-slate-600">Short lead times and consistent project updates mean no chasing, no surprises.</p>
    </article>

    <article class="rounded-xl bg-white p-6 shadow-lg transition hover:-translate-y-1 hover:shadow-2xl text-center">
      <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-4 h-10 w-10 text-sky-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
      </svg>
      <h3 class="text-lg font-semibold text-slate-800 mb-2">Fully Custom</h3>
      <p class="text-sm text-slate-600">Every project is bespoke, tailored to your space, brand, and lighting goals.</p>
    </article>

  </div>
</section>



<!-- Testimonial Section -->
<section class="bg-slate-100 py-16">
  <div class="mx-auto max-w-3xl px-4 text-center">
    <blockquote class="relative rounded-lg bg-white p-8 shadow-lg">
      <svg class="absolute -top-5 left-1/2 -translate-x-1/2 transform text-yellow-300" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" viewBox="0 0 24 24"><path d="M2.3 17.38C3 13.66 4.83 9.97 9.2 2h4.4l-1.71 10.3c3.26.86 4.81 3.43 5.57 5.08C18.43 20.38 16.2 23 12 23c-3.45 0-8.08-2.25-9.7-5.62z"/></svg>
      <p class="text-lg font-medium leading-relaxed text-slate-700">“The new 3D sign turned our sleepy frontage into a landmark. Footfall is up and customers keep commenting on how professional it looks.”</p>
      <cite class="mt-4 block text-sm font-semibold text-slate-500">Jane Doe – The Little Bakery</cite>
    </blockquote>
  </div>
</section>

 <!-- FAQ -->
    <?php
    $faqs = [
        ["question" => "How long does it take to make a sign?", "answer" => "Lead times vary by project size and complexity, but most signs are completed within 1-2 weeks"],
        ["question" => "Do you offer installation?", "answer" => "Yes, installation can be discussed during our consultation"],
        ["question" => "What if I need a custom size?", "answer" => "We can create custom sizes to fit your specific needs. Just let us know your requirements."],
        ["question" => "What materials do you use?", "answer" => "We use high-quality acrylic, aluminium, and LED components to ensure durability and longevity."],
        ["question" => "Can I choose the colour of my sign?", "answer" => "Absolutely! We can match your brand colours or provide a range of options for you to choose from."],
        ["question" => "Do you offer warranties on your signs?", "answer" => "Yes, we offer warranties on our signs to ensure your satisfaction and peace of mind."],
    ];

    output_faq($faqs);
    ?>
<!-- Call‑to‑Action -->
<section class="relative overflow-hidden bg-gradient-to-r from-sky-600 to-indigo-700 py-20 text-center text-white">
  <h2 class="mx-auto mb-4 max-w-2xl text-3xl font-bold">Ready to make a bold statement?</h2>
  <p class="mx-auto mb-8 max-w-2xl text-lg">Let’s build the sign that puts your brand in lights.</p>
  <a href="/contact" class="inline-block rounded-full bg-white px-10 py-4 text-sky-700 font-semibold shadow-lg ring-2 ring-white/50 hover:bg-slate-100 transition">Book a Consultation</a>
</section>
<?php
output_footer();
?>