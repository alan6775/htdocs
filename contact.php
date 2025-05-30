<?php
// Handle form submission
$success = false;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = 'northcornwallcnc@gmail.com'; // <-- Replace with your email address
    $subject = isset($_POST['subject']) && $_POST['subject'] !== '' ? $_POST['subject'] : 'New Contact Form Submission';

    // Sanitize inputs
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';

    if (!$name || !$email || !$message) {
        $error = 'Please fill out all required fields.';
    } else {
        $body = "Name: " . $name . "\nEmail: " . $email . "\nPhone: " . $phone . "\n\nMessage:\n" . $message;
        $headers = 'From: admin@nccnc.co.uk' . "\r\n" .
                   'Reply-To: ' . $email . "\r\n" .
                   'X-Mailer: PHP/' . phpversion();

        if (mail($to, $subject, $body, $headers)) {
            $success = true;
        } else {
            $error = 'Something went wrong while sending your message. Please try again later.';
        }
    }
}
?>
<?php
include 'php/functions.php';
output_header();
?>
<main class="pt-0">
    <section class="relative bg-gradient-to-r from-sky-700 to-indigo-800 pt-32 pb-12 text-center text-white">
        <h1 class="mx-auto max-w-4xl px-4 text-4xl font-extrabold tracking-tight md:text-5xl">Contact Us</h1>
        <p class="mx-auto mt-4 max-w-2xl px-4 text-lg">Get in touch for a free quote or to discuss your project.</p>
    </section>
<?php
$breadcrumbs = [
    ["name" => "Home", "url" => "/"],
    ["name" => "Contact", "url" => "/contact"],
];

output_breadcrumbs($breadcrumbs);
?>
    <section class="mx-auto mt-16 max-w-3xl px-4 lg:px-0">
        <h2 class="text-3xl font-extrabold text-slate-900 text-center">Let’s Create Something Brilliant</h2>
        <p class="mt-2 text-center text-slate-600 max-w-2xl mx-auto">Have an idea or project in mind? Fill out the form and we’ll get back to you as soon as possible — usually within one business day.</p>

        <?php if ($success): ?>
            <div class="mt-6 p-4 text-center rounded-md bg-green-50 text-green-700 border border-green-200">
                ✅ Your message has been sent! We’ll be in touch shortly.
            </div>
        <?php elseif ($error): ?>
            <div class="mt-6 p-4 text-center rounded-md bg-red-50 text-red-700 border border-red-200">
                ❌ <?= $error ?>
            </div>
        <?php endif; ?>

        <form action="contact.php" method="POST" class="mt-10 space-y-6 bg-white p-6 rounded-xl shadow-md">
            <!-- FORM FIELDS UNCHANGED -->
            <!-- Copy form fields from your original HTML -->
            <div class="grid gap-6 sm:grid-cols-2">
                <div>
                    <label for="name" class="block text-sm font-medium text-slate-700">Full Name *</label>
                    <input type="text" id="name" name="name" required placeholder="Jane Doe" class="mt-1 w-full rounded-lg border border-slate-300 px-4 py-2" />
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-slate-700">Email Address *</label>
                    <input type="email" id="email" name="email" required placeholder="jane@example.com" class="mt-1 w-full rounded-lg border border-slate-300 px-4 py-2" />
                </div>
                <div>
                    <label for="phone" class="block text-sm font-medium text-slate-700">Phone (optional)</label>
                    <input type="tel" id="phone" name="phone" placeholder="01208 368564" class="mt-1 w-full rounded-lg border border-slate-300 px-4 py-2" />
                </div>
                <div>
                    <label for="subject" class="block text-sm font-medium text-slate-700">Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="I’m interested in a 3D sign…" class="mt-1 w-full rounded-lg border border-slate-300 px-4 py-2" />
                </div>
            </div>
            <div>
                <label for="message" class="block text-sm font-medium text-slate-700">Your Message *</label>
                <textarea id="message" name="message" rows="5" required placeholder="Tell us more about your project or enquiry…" class="mt-1 w-full rounded-lg border border-slate-300 px-4 py-2"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-sky-700 hover:bg-indigo-800 text-white font-semibold rounded-lg shadow-md transition" id = "contact-submit">
                    ✉️ Send Message
                </button>
            </div>
        </form>
    </section>
</main>
<?php
output_footer('<script src="/js/lightbox.js"></script>');
?>
