<?php
function output_header($jsonLD = [])
{
    $headerfile = "./php/header.html";
    if (!file_exists($headerfile)) {
        die("Header file does not exist");
    }
    $header = file_get_contents($headerfile);
    if ($header === false) {
        die("Error loading header file");
    }

//{"@context":"https://schema.org/","@type":"LocalBusiness","name":"North Cornwall 3d signs","url":"https://www.nccnc.co.uk","image":"https://static.wixstatic.com/media/85d68c_5f22b4bca680476fbc2aabe79c588236~mv2.jpg","address":{"@type":"PostalAddress","addressCountry":"GB","addressLocality":"Saint Kew Highway","addressRegion":"ENG","postalCode":"PL30 3DS"},"telephone":"01208 368564"}
    // Pre-fill organization JSON-LD if not provided
   $organizationJSONLD = [
       "@context" => "https://schema.org",
       "@type" => "Organization",
       "name" => "North Cornwall CNC",
       "url" => "https://www.nccnc.co.uk",
       "logo" => "https://www.nccnc.co.uk/images/nccnc-logo.png",
       "sameAs" => [
           "https://www.facebook.com/nccnc",
           "https://www.instagram.com/northcornwallcnc",
       ],
       "contactPoint" => [
            [
                  "@type" => "ContactPoint",
                  "telephone" => "+44-1208-368564",
                  "email" => "alan@nccnc.co.uk",
                  "contactType" => "Sales"
              ],
              [
                         "@type" => "ContactPoint",
                         "telephone" => "+44-1208-368564",
                         "email" => "alan@nccnc.co.uk",
                         "contactType" => "Customer Service",
                     ]

       ],
       "address" => [
           "@type" => "PostalAddress",
           "streetAddress" => "Lanseague Mill, St Kew Highway",
           "addressLocality" => "Bodmin",
           "addressRegion" => "Cornwall",
           "postalCode" => "PL30 3DS",
           "addressCountry" => "GB"
       ],
         "image" => "https://www.nccnc.co.uk/images/nccnc-logo.png",
         "telephone" => "+44-1208-368564"
   ];

   $websiteJSONLD = [
       "@context" => "https://schema.org",
       "@type" => "WebSite",
       "name" => "North Cornwall CNC",
       "url" => "https://www.nccnc.co.uk/"
   ];
$servicesJSONLD = [
    "@context" => "https://schema.org",
    "@type" => "Service",
    "serviceType" => "Custom 3D Signage & Illuminated Channel Letters",
    "provider" => [
        "@type" => "LocalBusiness",
        "name" => "North Cornwall CNC",
        "image" => "https://www.nccnc.co.uk/images/nccnc-logo.png",
        "address" => [
            "@type" => "PostalAddress",
            "streetAddress" => "Lanseague Mill, St Kew Highway",
            "addressLocality" => "Bodmin",
            "addressRegion" => "Cornwall",
            "postalCode" => "PL30 3DS",
            "addressCountry" => "GB"
        ],
        "telephone" => "+44-1208-368564",
        "email" => "alan@nccnc.co.uk",
        "url" => "https://www.nccnc.co.uk"
    ],
    "areaServed" => [
        "@type" => "Place",
        "address" => [
            "@type" => "PostalAddress",
            "addressRegion" => "Cornwall",
            "addressCountry" => "GB"
        ]
    ],
    "hasOfferCatalog" => [
        "@type" => "OfferCatalog",
        "name" => "3D Signage Services",
        "itemListElement" => [
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "Face-Lit Channel Letters",
                    "description" => "Custom fabricated illuminated letters with opal acrylic faces, aluminium channels, and low-voltage LED lighting."
                ]
            ],
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "Halo-Lit Signs",
                    "description" => "Reverse-lit letters with glowing backlight effect for modern and upscale storefronts."
                ]
            ],
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "CNC-Fabricated 3D Letters",
                    "description" => "Precision-cut acrylic and metal signage produced in-house for commercial branding applications."
                ]
            ]
        ]
    ],
    "description" => "North Cornwall CNC offers premium illuminated 3D signage services, including face-lit channel letters, halo-lit signs, and CNC-crafted dimensional logos, serving businesses across Cornwall and the UK.",
    "url" => "https://www.nccnc.co.uk/3d-signs.html"
];

$services3DJSONLD = [
    "@context" => "https://schema.org",
    "@type" => "Service",
    "serviceType" => "3D Signage",
    "provider" => [
        "@type" => "Organization",
        "name" => "North Cornwall CNC",
        "url" => "https://www.nccnc.co.uk",
        "logo" => "https://www.nccnc.co.uk/images/nccnc-logo.png",
        "sameAs" => [
            "https://www.facebook.com/nccnc",
            "https://www.instagram.com/northcornwallcnc"
        ],
        "address" => [
            "@type" => "PostalAddress",
            "streetAddress" => "Lanseague Mill, St Kew Highway",
            "addressLocality" => "Bodmin",
            "addressRegion" => "Cornwall",
            "postalCode" => "PL30 3DS",
            "addressCountry" => "GB"
        ],
        "telephone" => "+44-1208-368564"
    ],
    "areaServed" => [
        "@type" => "Place",
        "address" => [
            "@type" => "PostalAddress",
            "addressRegion" => "Cornwall",
            "addressCountry" => "GB"
        ]
    ],
    "offers" => [
        "@type" => "Offer",
        "url" => "https://www.nccnc.co.uk/3d-signs.html",
        "priceCurrency" => "GBP",
        "price" => "Varies",
        "itemOffered" => [
            "@type" => "Product",
            "name" => "Custom 3D Signage",
            "description" => "High-quality illuminated 3D signs tailored to your specifications."
        ]
    ]
];


    $jsonLDScripts = '';
    foreach ($jsonLD as $data) {

        if($data == 'organization') {
            $jsonLDScripts .= '<script type="application/ld+json">' . json_encode($organizationJSONLD, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
        } elseif ($data == 'website') {
            $jsonLDScripts .= '<script type="application/ld+json">' . json_encode($websiteJSONLD, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
        } elseif ($data == 'services') {
            $jsonLDScripts .= '<script type="application/ld+json">' . json_encode($servicesJSONLD, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
        } elseif ($data == 'services-3d-signs') {
            $jsonLDScripts .= '<script type="application/ld+json">' . json_encode($servicesJSONLD, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
        }else{
        die("Invalid JSON-LD type specified");
        }
    }
    // Replace the placeholder with JSON-LD scripts
    $header = str_replace("<!-- JSON-LD -->", $jsonLDScripts, $header);

    echo $header;
}

function output_footer($append = "")
{
    $footerfile = "./php/footer.html";
    if (!file_exists($footerfile)) {
        die("Footer file does not exist");
    }
    $footer = file_get_contents($footerfile);
    if ($footer === false) {
        die("Error loading footer file");
    } else {
        echo str_replace("<!-- APPEND -->", $append, $footer);
    }
}

function output_breadcrumbs($breadcrumbs)
{
    if (empty($breadcrumbs) || !is_array($breadcrumbs)) {
        die("Invalid breadcrumbs data");
    }

    // Start HTML breadcrumbs
    $html = '<nav aria-label="Breadcrumb" class="bg-slate-100 py-3 px-4 rounded-md">';
    $html .= '<ol class="flex space-x-2 text-sm text-slate-600">';

    // Start JSON-LD breadcrumbs
    $jsonLD = [
        "@context" => "https://schema.org",
        "@type" => "BreadcrumbList",
        "itemListElement" => []
    ];

    foreach ($breadcrumbs as $index => $breadcrumb) {
        if (!isset($breadcrumb['name']) || !isset($breadcrumb['url'])) {
            die("Each breadcrumb must have a 'name' and 'url'");
        }

        if ($index < count($breadcrumbs) - 1) {
            // Intermediate breadcrumb
            $html .= '<li>';
            $html .= '<a href="' . htmlspecialchars($breadcrumb['url']) . '" class="hover:text-sky-600">' . htmlspecialchars($breadcrumb['name']) . '</a>';
            $html .= '<span aria-hidden="true"> / </span>';
            $html .= '</li>';
        } else {
            // Current page breadcrumb
            $html .= '<li aria-current="page" class="text-slate-800 font-semibold">' . htmlspecialchars($breadcrumb['name']) . '</li>';
        }

        // Add to JSON-LD
        $jsonLD['itemListElement'][] = [
            "@type" => "ListItem",
            "position" => $index + 1,
            "name" => $breadcrumb['name'],
            "item" => $breadcrumb['url']
        ];
    }

    $html .= '</ol></nav>';

    // Output HTML and JSON-LD
    echo $html;
    echo '<script type="application/ld+json">' . json_encode($jsonLD, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . '</script>';
}

function output_faq(array $faqs)
{
    if (empty($faqs)) {
        echo '<p>No FAQ data available.</p>';
        return;
    }

    ob_start();

    // Start HTML output
    ?>
    <section class="mx-auto mt-16 max-w-6xl px-4">
        <h2 class="mb-8 text-center text-3xl font-bold text-slate-900">Frequently Asked Questions</h2>
        <div id="faq-container" class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <?php foreach ($faqs as $index => $faq):
                if (empty($faq['question']) || empty($faq['answer'])) {
                    continue; // skip invalid entries
                }

                $hiddenClass = $index >= 6 ? ' hidden' : '';
                ?>
                <article class="rounded-xl bg-white p-6 shadow-lg ring-1 ring-slate-200<?= $hiddenClass ?>">
                    <h3 class="font-semibold text-sky-700"><?= htmlspecialchars($faq['question']) ?></h3>
                    <p class="mt-2 text-sm text-slate-600"><?= nl2br(htmlspecialchars($faq['answer'])) ?></p>
                </article>
            <?php endforeach; ?>
        </div>

        <?php if (count($faqs) > 6): ?>
            <div class="text-center mt-6">
                <button id="show-more-btn"
                        class="rounded-full bg-sky-600 px-6 py-2 text-white font-semibold hover:bg-sky-700 transition">
                    Show More
                </button>
            </div>
        <?php endif; ?>
    </section>

    <?php
    // JSON-LD structured data
    $jsonLD = [
        "@context" => "https://schema.org",
        "@type" => "FAQPage",
        "mainEntity" => []
    ];

    foreach ($faqs as $faq) {
        if (empty($faq['question']) || empty($faq['answer'])) {
            continue;
        }
        $jsonLD['mainEntity'][] = [
            "@type" => "Question",
            "name" => $faq['question'],
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => $faq['answer']
            ]
        ];
    }

    echo '<script type="application/ld+json">' . json_encode($jsonLD, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . '</script>';
    ?>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const showMoreBtn = document.getElementById('show-more-btn');
            if (showMoreBtn) {
                showMoreBtn.addEventListener('click', function () {
                    const hiddenFaqs = document.querySelectorAll('#faq-container .hidden');
                    hiddenFaqs.forEach(faq => faq.classList.remove('hidden'));
                    this.style.display = 'none';
                });
            }
        });
    </script>

    <?php
    echo ob_get_clean();
}
?>