<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- HERO -->

<section class="py-20 md:py-28">

    <div class="max-w-6xl mx-auto px-6 text-center">

        <span class="text-cyan-400 uppercase tracking-[4px]">
            Contact
        </span>

        <h1 class="text-4xl md:text-6xl font-bold mt-6 mb-8">
            Let's Build Something Amazing
        </h1>

        <p class="text-lg md:text-xl text-slate-400 max-w-4xl mx-auto">
            Whether you need a Shopify store, SaaS platform,
            SEO strategy, AI solution, or custom web development,
            I'd love to hear about your project.
        </p>

    </div>

</section>

<!-- CONTACT OPTIONS -->

<section class="pb-20">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-8">

            <!-- EMAIL -->

            <div class="bg-slate-900 border border-slate-800 rounded-3xl p-8 hover:border-cyan-500 transition">

                <div class="text-5xl mb-6">📧</div>

                <h3 class="text-2xl font-bold mb-4">
                    Email
                </h3>

                <p class="text-slate-400 mb-6">
                    Send project details directly.
                </p>

                <a href="mailto:yourtechbuddy@accetechnet.biz"
                   class="text-cyan-400 hover:text-cyan-300">

                    Inquire via Email →

                </a>

            </div>

            <!-- WHATSAPP -->

            <div class="bg-slate-900 border border-green-600 rounded-3xl p-8 hover:border-green-500 transition">

                <div class="text-5xl mb-6">💬</div>

                <h3 class="text-2xl font-bold mb-4">
                    WhatsApp
                </h3>

                <p class="text-slate-400 mb-6">
                    Fastest way to reach me.
                </p>

                <a href="https://wa.me/12059245584"
                   target="_blank"
                   class="text-green-400 hover:text-green-300">

                    Chat on WhatsApp →

                </a>

            </div>

            <!-- VIBER -->

            <div class="bg-slate-900 border border-purple-600 rounded-3xl p-8 hover:border-purple-500 transition">

                <div class="text-5xl mb-6">📱</div>

                <h3 class="text-2xl font-bold mb-4">
                    Viber
                </h3>

                <p class="text-slate-400 mb-6">
                    Available for international communication.
                </p>

                <a href="tel:+639602736012"
                   class="text-purple-400 hover:text-purple-300">

                    Message on Viber →

                </a>

            </div>

            <!-- UPWORK -->

            <div class="bg-slate-900 border border-slate-800 rounded-3xl p-8 hover:border-cyan-500 transition">

                <div class="text-5xl mb-6">⭐</div>

                <h3 class="text-2xl font-bold mb-4">
                    Upwork
                </h3>

                <p class="text-slate-400 mb-6">
                    Hire me directly through Upwork.
                </p>

                <a href="https://www.upwork.com/freelancers/garciamarcodl?mp_source=share"
                   target="_blank"
                   class="text-cyan-400 hover:text-cyan-300">

                    View Profile →

                </a>

            </div>

        </div>

    </div>

</section>

<!-- FACEBOOK COMMUNITY -->

<section class="pb-20">

    <div class="max-w-5xl mx-auto px-6">

        <div class="bg-slate-900 border border-slate-800 rounded-3xl p-10 text-center">

            <div class="text-5xl mb-6">👥</div>

            <h2 class="text-3xl font-bold mb-4">
                Join Our Facebook Community
            </h2>

            <p class="text-slate-400 mb-8 max-w-2xl mx-auto">
                Connect with over 218,000 Shopify store owners,
                entrepreneurs and eCommerce professionals.
            </p>

            <a href="https://www.facebook.com/share/g/16znFiYRzK/?mibextid=wwXIfr"
               target="_blank"
               class="bg-blue-600 hover:bg-blue-700 px-8 py-4 rounded-xl inline-block">

                Join Community

            </a>

        </div>

    </div>

</section>

<!-- CONTACT FORM -->

<section class="py-24 border-t border-slate-800">

    <div class="max-w-4xl mx-auto px-6">

        <div class="text-center mb-12">

            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                Tell Me About Your Project
            </h2>

            <p class="text-slate-400">
                Fill out the form below and I'll get back to you.
            </p>

        </div>

        <form
            action="contact-process.php"
            method="POST"
            class="space-y-6">

            <input
                type="text"
                name="name"
                required
                placeholder="Your Name"
                class="w-full bg-slate-900 border border-slate-700 rounded-xl p-4">

            <input
                type="email"
                name="email"
                required
                placeholder="Your Email"
                class="w-full bg-slate-900 border border-slate-700 rounded-xl p-4">

            <input
                type="text"
                name="company"
                placeholder="Company Name"
                class="w-full bg-slate-900 border border-slate-700 rounded-xl p-4">

            <select
                name="service"
                class="w-full bg-slate-900 border border-slate-700 rounded-xl p-4">

                <option value="">Select Service</option>
                <option>Shopify Development</option>
                <option>SEO & Organic Growth</option>
                <option>SaaS Development</option>
                <option>AI Solutions</option>
                <option>Custom Web Development</option>
                <option>Other Services</option>

            </select>

            <textarea
                rows="6"
                name="message"
                required
                placeholder="Tell me about your project..."
                class="w-full bg-slate-900 border border-slate-700 rounded-xl p-4"></textarea>

            <button
                type="submit"
                class="bg-cyan-500 hover:bg-cyan-600 px-8 py-4 rounded-xl font-semibold">

                Send Inquiry

            </button>

        </form>

    </div>

</section>

<?php include 'includes/footer.php'; ?>