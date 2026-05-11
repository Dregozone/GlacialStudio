<?php

use Livewire\Component;

new class extends Component {};

?>

<div>
    <header
        class="fixed top-0 left-0 right-0 z-50 transition-all duration-500"
        x-data="{ mobileMenuOpen: false, scrolled: false }"
        x-init="window.addEventListener('scroll', () => { scrolled = window.pageYOffset > 20 })"
        :class="scrolled ? 'bg-glacier-950/80 backdrop-blur-2xl border-b border-white/[0.06] shadow-lg shadow-black/10' : ''"
    >
        <div class="container-custom">
            <div class="flex items-center justify-between h-16 lg:h-20">
                {{-- Logo --}}
                <a href="{{ route('home') }}"
                    class="flex items-center space-x-3 group focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-400 rounded-lg"
                    aria-label="Glacial Studio - Home">
                    <img src="{{ asset('img/gs-logo.png') }}" class="h-8 lg:h-10 transition-transform duration-300 group-hover:scale-105" alt="" aria-hidden="true" />
                    <span class="text-xl lg:text-2xl font-display font-semibold text-white">
                        Glacial <span class="gradient-text">Studio</span>
                    </span>
                </a>

                {{-- Desktop Navigation --}}
                <nav class="hidden lg:flex items-center space-x-1" aria-label="Main navigation">
                    <a href="#products"
                        class="relative px-4 py-2 text-glacier-300 hover:text-white font-medium transition-colors duration-300 rounded-lg group focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-400">
                        Products
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-primary-400 to-cyan-400 transition-all duration-300 group-hover:w-3/4 rounded-full"></span>
                    </a>
                    <a href="#services"
                        class="relative px-4 py-2 text-glacier-300 hover:text-white font-medium transition-colors duration-300 rounded-lg group focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-400">
                        Services
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-primary-400 to-cyan-400 transition-all duration-300 group-hover:w-3/4 rounded-full"></span>
                    </a>
                    <a href="#contact"
                        class="relative px-4 py-2 text-glacier-300 hover:text-white font-medium transition-colors duration-300 rounded-lg group focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-400">
                        Contact
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-primary-400 to-cyan-400 transition-all duration-300 group-hover:w-3/4 rounded-full"></span>
                    </a>
                </nav>

                {{-- Social Links & Mobile Menu Button --}}
                <div class="flex items-center space-x-3">
                    <a href="https://www.facebook.com/GlacialStudioWebSolutions" target="_blank" rel="noreferrer"
                        class="hidden sm:flex w-10 h-10 items-center justify-center rounded-full text-glacier-400 hover:text-white hover:bg-white/10 transition-all duration-300 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-400"
                        aria-label="Follow us on Facebook">
                        <i class="fa-brands fa-facebook text-lg" aria-hidden="true"></i>
                    </a>

                    {{-- Mobile Menu Button --}}
                    <button
                        class="lg:hidden flex items-center justify-center w-10 h-10 rounded-xl text-glacier-300 hover:text-white hover:bg-white/10 transition-all duration-300 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-400"
                        @click="mobileMenuOpen = !mobileMenuOpen"
                        :aria-expanded="mobileMenuOpen"
                        aria-label="Toggle navigation menu"
                        aria-controls="mobile-menu"
                    >
                        <i class="fa-solid fa-bars text-lg" x-show="!mobileMenuOpen" aria-hidden="true"></i>
                        <i class="fa-solid fa-xmark text-lg" x-show="mobileMenuOpen" x-cloak aria-hidden="true"></i>
                    </button>
                </div>
            </div>

            {{-- Mobile Navigation --}}
            <nav
                id="mobile-menu"
                class="lg:hidden"
                x-show="mobileMenuOpen"
                x-cloak
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 -translate-y-4"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-4"
                aria-label="Mobile navigation"
            >
                <div class="py-4 space-y-1 border-t border-white/[0.06]">
                    <a href="#products" @click="mobileMenuOpen = false"
                        class="block px-4 py-3 text-glacier-300 hover:text-white hover:bg-white/5 font-medium transition-all duration-200 rounded-xl">
                        Products
                    </a>
                    <a href="#services" @click="mobileMenuOpen = false"
                        class="block px-4 py-3 text-glacier-300 hover:text-white hover:bg-white/5 font-medium transition-all duration-200 rounded-xl">
                        Services
                    </a>
                    <a href="#contact" @click="mobileMenuOpen = false"
                        class="block px-4 py-3 text-glacier-300 hover:text-white hover:bg-white/5 font-medium transition-all duration-200 rounded-xl">
                        Contact
                    </a>
                    <div class="pt-3 px-4">
                        <a href="https://www.facebook.com/GlacialStudioWebSolutions" target="_blank" rel="noreferrer"
                            class="inline-flex items-center gap-2 text-glacier-400 hover:text-primary-400 transition-colors duration-200">
                            <i class="fa-brands fa-facebook" aria-hidden="true"></i>
                            <span class="text-sm">Follow on Facebook</span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    {{-- Spacer for fixed header --}}
    <div class="h-16 lg:h-20"></div>
</div>
