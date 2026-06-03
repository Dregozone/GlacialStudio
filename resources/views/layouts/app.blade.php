<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Glacial Studio - Professional web development and digital solutions. Creating modern, effective web applications and digital experiences.">
    <meta name="keywords" content="web development, digital solutions, Laravel, modern web applications">
    <meta name="author" content="Glacial Studio">

    {{-- <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" /> --}}
    {{-- <link rel="icon" type="image/svg+xml" href="/favicon.svg" /> --}}
    <link rel="shortcut icon" href="/favicon.ico" />
    {{-- <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" /> --}}
    <meta name="apple-mobile-web-app-title" content="Glacial Studio" />
    <link rel="manifest" href="/site.webmanifest" />

    <title>{{ $title ?? 'Glacial Studio - Modern Web Development & Digital Solutions' }}</title>

    <!-- Modern Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://challenges.cloudflare.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    @livewireStyles
</head>

<body class="font-sans antialiased bg-glacier-950 text-white">

    {{-- Skip to content (accessibility) --}}
    <a href="#main-content"
        class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-[200] focus:px-4 focus:py-2 focus:bg-primary-600 focus:text-white focus:rounded-lg focus:text-sm focus:font-medium">
        Skip to main content
    </a>

    {{ $slot }}

    {{-- Scroll to Top Button --}}
    <div
        x-data="{ show: false }"
        x-init="window.addEventListener('scroll', () => { show = window.scrollY > window.innerHeight })"
        x-show="show"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-4"
        class="fixed bottom-8 right-8 z-50"
    >
        <button
            @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
            class="group flex items-center justify-center w-12 h-12 rounded-full bg-white/10 backdrop-blur-xl border border-white/20 text-white shadow-lg hover:bg-primary-600 hover:border-primary-500 hover:shadow-primary-500/30 hover:shadow-xl transition-all duration-300 hover:-translate-y-1 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-400 focus-visible:ring-offset-2 focus-visible:ring-offset-glacier-900"
            aria-label="Scroll to top"
        >
            <i class="fa-solid fa-arrow-up text-sm group-hover:scale-110 transition-transform duration-200"></i>
        </button>
    </div>

    {{-- GDPR Cookie Consent Banner --}}
    <div
        x-data="{
            show: false,
            init() {
                if (!localStorage.getItem('gs-cookie-consent')) {
                    setTimeout(() => this.show = true, 1500);
                }
            },
            accept() {
                localStorage.setItem('gs-cookie-consent', JSON.stringify({
                    essential: true,
                    analytics: true,
                    timestamp: Date.now()
                }));
                this.show = false;
            },
            essentialOnly() {
                localStorage.setItem('gs-cookie-consent', JSON.stringify({
                    essential: true,
                    analytics: false,
                    timestamp: Date.now()
                }));
                this.show = false;
            }
        }"
        x-show="show"
        x-transition:enter="transition ease-out duration-500"
        x-transition:enter-start="translate-y-full opacity-0"
        x-transition:enter-end="translate-y-0 opacity-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="translate-y-0 opacity-100"
        x-transition:leave-end="translate-y-full opacity-0"
        x-cloak
        class="fixed bottom-0 inset-x-0 z-[100] p-4 sm:p-6"
        role="dialog"
        aria-label="Cookie consent"
        aria-describedby="cookie-description"
    >
        <div class="max-w-4xl mx-auto bg-glacier-900/95 backdrop-blur-2xl border border-white/10 rounded-2xl p-6 sm:p-8 shadow-2xl shadow-black/30">
            <div class="flex flex-col lg:flex-row items-start lg:items-center gap-5">
                <div class="flex-1">
                    <div class="flex items-center gap-2.5 mb-2.5">
                        <div class="w-8 h-8 rounded-full bg-accent-400/20 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-cookie-bite text-accent-400 text-sm"></i>
                        </div>
                        <h3 class="text-white font-semibold font-sans text-base">We value your privacy</h3>
                    </div>
                    <p id="cookie-description" class="text-glacier-400 text-sm leading-relaxed">
                        We use essential cookies to keep our site running smoothly. We'd also like to set optional analytics cookies to help us improve your experience.
                        <a href="{{ route('privacy-policy') }}" class="text-primary-400 hover:text-primary-300 underline underline-offset-2 transition-colors duration-200">Learn more</a>
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row gap-3 shrink-0 w-full sm:w-auto">
                    <button
                        @click="essentialOnly()"
                        class="px-5 py-2.5 text-sm text-glacier-300 hover:text-white border border-white/10 rounded-xl hover:border-white/25 hover:bg-white/5 transition-all duration-200 font-medium focus:outline-none focus-visible:ring-2 focus-visible:ring-white/50"
                    >
                        Essential Only
                    </button>
                    <button
                        @click="accept()"
                        class="px-5 py-2.5 text-sm text-white bg-primary-600 hover:bg-primary-500 rounded-xl shadow-lg shadow-primary-600/25 transition-all duration-200 font-semibold focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-400"
                    >
                        Accept All
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
    @livewireScripts
</body>

</html>
