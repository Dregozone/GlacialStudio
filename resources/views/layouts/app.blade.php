<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Glacial Studio - Professional web development and digital solutions. Creating modern, effective web applications and digital experiences.">
    <meta name="keywords" content="web development, digital solutions, Laravel, modern web applications">
    <meta name="author" content="Glacial Studio">

    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Glacial Studio" />
    <link rel="manifest" href="/site.webmanifest" />

    <title>{{ $title ?? 'Glacial Studio - Modern Web Development & Digital Solutions' }}</title>

    <!-- Modern Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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

<body class="font-sans antialiased bg-white">

    {{ $slot }}

    <!-- Scroll to Top Button -->
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
            class="group flex items-center justify-center w-12 h-12 rounded-full bg-primary-600 text-white shadow-lg hover:bg-primary-700 hover:shadow-primary-500/30 hover:shadow-xl transition-all duration-300 hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2"
            aria-label="Scroll to top"
        >
            <i class="fa-solid fa-arrow-up text-sm group-hover:scale-110 transition-transform duration-200"></i>
        </button>
    </div>

    @livewireScripts
</body>

</html>
