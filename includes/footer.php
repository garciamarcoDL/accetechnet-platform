<footer class="border-t border-slate-800 py-16 mt-20 bg-slate-950">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-10">

            <!-- BRAND -->

            <div>

                <div class="flex items-center gap-3 mb-4">

                    <img
                        src="assets/images/logo.png"
                        alt="Accetechnet Logo"
                        class="h-12 w-auto rounded">

                    <h2 class="text-2xl font-bold">
                        Accetechnet
                    </h2>

                </div>

                <p class="text-slate-400 leading-relaxed mb-4">
                    Helping businesses grow through Shopify Development,
                    SEO, SaaS Platforms, AI Solutions and Custom Web Development.
                </p>

                <p class="text-cyan-400 text-sm">
                    Shopify Partner Expert • Top Rated Upwork Freelancer
                </p>

            </div>

            <!-- NAVIGATION -->

            <div>

                <h4 class="font-bold mb-4 text-white">
                    Navigation
                </h4>

                <ul class="space-y-3 text-slate-400">

                    <li><a href="index.php" class="hover:text-cyan-400 transition duration-300">Home</a></li>
                    <li><a href="about.php" class="hover:text-cyan-400 transition duration-300">About</a></li>
                    <li><a href="services.php" class="hover:text-cyan-400 transition duration-300">Services</a></li>
                    <li><a href="portfolio.php" class="hover:text-cyan-400 transition duration-300">Portfolio</a></li>
                    <li><a href="blog.php" class="hover:text-cyan-400 transition duration-300">Blog</a></li>
                    <li><a href="contact.php" class="hover:text-cyan-400 transition duration-300">Contact</a></li>

                </ul>

            </div>

            <!-- SERVICES -->

            <div>

                <h4 class="font-bold mb-4 text-white">
                    Services
                </h4>

                <ul class="space-y-3 text-slate-400">

                    <li>Shopify Development</li>
                    <li>SEO & Organic Growth</li>
                    <li>SaaS Development</li>
                    <li>AI Solutions</li>
                    <li>Custom Web Development</li>

                </ul>

            </div>

            <!-- CONNECT -->

            <div>

                <h4 class="font-bold mb-4 text-white">
                    Connect
                </h4>

                <ul class="space-y-3 text-slate-400">

                    <li>
                        <a href="mailto:yourtechbuddy@accetechnet.biz"
                           class="hover:text-cyan-400 transition duration-300">

                            📧 yourtechbuddy@accetechnet.biz

                        </a>
                    </li>

                    <li>
                        <a href="https://wa.me/12059245584"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="hover:text-green-400 transition duration-300">

                            💬 WhatsApp

                        </a>
                    </li>

                    <li>
                        <a href="tel:+639602736012"
                           class="hover:text-purple-400 transition duration-300">

                            📱 Viber

                        </a>
                    </li>

                    <li>
                        <a href="https://www.upwork.com/freelancers/garciamarcodl?mp_source=share"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="hover:text-cyan-400 transition duration-300">

                            ⭐ Upwork Profile

                        </a>
                    </li>

                    <li>
                        <a href="https://www.facebook.com/share/g/16znFiYRzK/?mibextid=wwXIfr"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="hover:text-blue-400 transition duration-300">

                            👥 Facebook Community

                        </a>
                    </li>

                </ul>

            </div>

        </div>

        <!-- CTA -->

        <div class="border-t border-slate-800 mt-12 pt-10 text-center">

            <h3 class="text-3xl font-bold mb-4">
                Ready To Grow Your Business?
            </h3>

            <p class="text-slate-400 mb-6">
                Let's discuss your next Shopify, SEO, SaaS or AI project.
            </p>

            <a href="contact.php"
               class="bg-cyan-500 hover:bg-cyan-600 px-8 py-4 rounded-xl font-semibold inline-block transition duration-300">

                Book A Free Consultation

            </a>

        </div>

        <!-- COPYRIGHT -->

        <div class="border-t border-slate-800 mt-12 pt-8 text-center">

            <p class="text-slate-500">
                © <?php echo date('Y'); ?> Accetechnet. All Rights Reserved.
            </p>

            <p class="text-slate-600 text-sm mt-2">
                Built by John Marco Garcia • Shopify Partner Expert • Top Rated Upwork Freelancer • SEO Specialist
            </p>

        </div>

    </div>

</footer>

<!-- FLOATING WHATSAPP -->

<a href="https://wa.me/12059245584"
   target="_blank"
   rel="noopener noreferrer"
   class="fixed bottom-6 right-6 z-50
          bg-green-500 hover:bg-green-600
          text-white
          px-5 py-4
          rounded-full
          shadow-2xl
          flex items-center gap-3
          transition-all duration-300
          hover:scale-110">

    <span class="text-2xl">💬</span>

    <span class="hidden lg:block font-semibold">
        Chat With Us
    </span>

</a>

<!-- AOS -->

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
AOS.init({
    duration: 800,
    once: true,
    offset: 100
});
</script>

<!-- COUNTER -->

<script>
const counters = document.querySelectorAll('.counter');

counters.forEach(counter => {

    const updateCounter = () => {

        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;

        const increment = target / 100;

        if (count < target) {

            counter.innerText = Math.ceil(count + increment);

            setTimeout(updateCounter, 20);

        } else {

            if (target === 218) {
                counter.innerText = '218K+';
            } else if (target === 12) {
                counter.innerText = '12+';
            } else {
                counter.innerText = target;
            }

        }

    };

    updateCounter();

});
</script>

</body>
</html>