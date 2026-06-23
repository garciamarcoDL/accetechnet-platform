<nav class="sticky top-0 z-50 bg-slate-950/90 backdrop-blur border-b border-slate-800">

    <div class="max-w-7xl mx-auto px-6">

        <div class="flex items-center justify-between h-20">

            <!-- LOGO -->

            <a href="index.php" class="flex items-center gap-3">

                <img
                    src="assets/images/logo.png"
                    alt="Accetechnet Logo"
                    class="h-12 md:h-14 w-auto">

            </a>

            <!-- DESKTOP MENU -->

            <div class="hidden lg:flex items-center gap-8 text-lg font-medium">

                <a href="index.php"
                   class="hover:text-cyan-400 transition">
                    Home
                </a>

                <a href="about.php"
                   class="hover:text-cyan-400 transition">
                    About
                </a>

                <!-- SERVICES DROPDOWN -->

                <div class="relative group">

                    <button class="hover:text-cyan-400 transition flex items-center gap-2">

                        Services

                        <span class="text-xs">▼</span>

                    </button>

                    <div class="absolute top-full left-0 mt-4 w-72 bg-slate-900 border border-slate-800 rounded-2xl shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">

                        <a href="shopify-development.php"
                           class="block px-6 py-4 hover:bg-slate-800 rounded-t-2xl">

                            🛍️ Shopify Development

                        </a>

                        <a href="seo-services.php"
                           class="block px-6 py-4 hover:bg-slate-800">

                            📈 SEO Services

                        </a>

                        <a href="saas-development.php"
                           class="block px-6 py-4 hover:bg-slate-800">

                            ⚙️ SaaS Development

                        </a>

                        <a href="ai-solutions.php"
                           class="block px-6 py-4 hover:bg-slate-800 rounded-b-2xl">

                            🤖 AI Solutions

                        </a>

                    </div>

                </div>

                <a href="portfolio.php"
                   class="hover:text-cyan-400 transition">
                    Portfolio
                </a>

                <a href="blog.php"
                   class="hover:text-cyan-400 transition">
                    Blog
                </a>

                <a href="contact.php"
                   class="hover:text-cyan-400 transition">
                    Contact
                </a>

            </div>

            <!-- CTA -->

            <div class="hidden lg:block">

                <a href="contact.php"
                   class="bg-cyan-500 hover:bg-cyan-600 transition px-6 py-3 rounded-xl font-semibold text-lg">

                    Book a Free Strategy Call

                </a>

            </div>

            <!-- MOBILE BUTTON -->

            <button
                id="mobile-menu-button"
                class="lg:hidden text-white text-3xl">

                ☰

            </button>

        </div>

        <!-- MOBILE MENU -->

        <div
            id="mobile-menu"
            class="hidden lg:hidden py-4 border-t border-slate-800">

            <div class="flex flex-col gap-4">

                <a href="index.php" class="hover:text-cyan-400">
                    Home
                </a>

                <a href="about.php" class="hover:text-cyan-400">
                    About
                </a>

                <!-- SERVICES -->

                <div class="border-t border-slate-800 pt-4">

                    <p class="text-cyan-400 uppercase tracking-wider text-xs mb-3">

                        Services

                    </p>

                    <div class="flex flex-col gap-3 ml-3">

                        <a href="shopify-development.php">
                            🛍️ Shopify Development
                        </a>

                        <a href="seo-services.php">
                            📈 SEO Services
                        </a>

                        <a href="saas-development.php">
                            ⚙️ SaaS Development
                        </a>

                        <a href="ai-solutions.php">
                            🤖 AI Solutions
                        </a>

                    </div>

                </div>

                <a href="portfolio.php" class="hover:text-cyan-400">
                    Portfolio
                </a>

                <a href="blog.php" class="hover:text-cyan-400">
                    Blog
                </a>

                <a href="contact.php" class="hover:text-cyan-400">
                    Contact
                </a>

                <a href="contact.php"
                   class="bg-cyan-500 text-center py-3 rounded-xl mt-2 font-semibold">

                    Book a Call

                </a>

            </div>

        </div>

    </div>

</nav>

<script>

document.addEventListener('DOMContentLoaded', function() {

    const button = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');

    button.addEventListener('click', function() {

        menu.classList.toggle('hidden');

    });

});

</script>