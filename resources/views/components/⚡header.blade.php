<?php

use Livewire\Component;

new class extends Component {};

?>

<div>
    <header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300" x-data="{ mobileMenuOpen: false, scrolled: false }" x-init="window.addEventListener('scroll', () => { scrolled = window.pageYOffset > 10 })"
        :class="scrolled ? 'bg-white/70 backdrop-blur-lg shadow-lg' : ''">
        <div class="container-custom">
            <div class="flex items-center justify-between h-16 lg:h-20">
                {{-- Logo --}}
                <a href="{{ route('home') }}"
                    class="flex items-center space-x-3 hover:opacity-80 transition-opacity duration-200">
                    <img src="{{ asset('img/gs-logo.png') }}" class="h-8 lg:h-10" alt="Glacial Studio Logo" />
                    <span class="text-xl lg:text-2xl font-display font-semibold text-glacier-900">Glacial Studio</span>
                </a>

                {{-- Desktop Navigation --}}
                <nav class="hidden lg:flex items-center space-x-8">
                    <a href="#products"
                        class="text-glacier-700 hover:text-primary-600 font-medium transition-colors duration-200 relative group">
                        Products
                        <span
                            class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary-600 transition-all duration-200 group-hover:w-full"></span>
                    </a>
                    <a href="#services"
                        class="text-glacier-700 hover:text-primary-600 font-medium transition-colors duration-200 relative group">
                        Services
                        <span
                            class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary-600 transition-all duration-200 group-hover:w-full"></span>
                    </a>
                    <a href="#contact"
                        class="text-glacier-700 hover:text-primary-600 font-medium transition-colors duration-200 relative group">
                        Contact
                        <span
                            class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary-600 transition-all duration-200 group-hover:w-full"></span>
                    </a>
                </nav>

                {{-- Social Links & Mobile Menu Button --}}
                <div class="flex items-center space-x-4">
                    {{-- Social Links --}}
                    <div class="hidden sm:flex items-center space-x-3">
                        <a href="https://www.facebook.com/GlacialStudioWebSolutions" target="_blank" rel="noreferrer"
                            class="text-glacier-600 hover:text-primary-600 transition-colors duration-200">
                            <i class="fa-brands fa-facebook text-2xl"></i>
                        </a>
                    </div>

                    {{-- Mobile Menu Button --}}
                    <button class="lg:hidden p-2 text-glacier-700 hover:text-primary-600 transition-colors duration-200"
                        @click="mobileMenuOpen = !mobileMenuOpen" aria-label="Toggle mobile menu">
                        <i class="fa-solid fa-bars text-lg" x-show="!mobileMenuOpen"></i>
                        <i class="fa-solid fa-xmark text-lg" x-show="mobileMenuOpen" x-cloak></i>
                    </button>
                </div>
            </div>

            {{-- Mobile Navigation --}}
            <div class="lg:hidden" x-show="mobileMenuOpen" x-cloak x-transition>
                <div class="px-2 pt-2 pb-3 space-y-1 bg-white/80 backdrop-blur-lg border-t border-glacier-100">
                    <a href="#products"
                        class="block px-3 py-2 text-glacier-700 hover:text-primary-600 font-medium transition-colors duration-200">Products</a>
                    <a href="#services"
                        class="block px-3 py-2 text-glacier-700 hover:text-primary-600 font-medium transition-colors duration-200">Services</a>
                    <a href="#contact"
                        class="block px-3 py-2 text-glacier-700 hover:text-primary-600 font-medium transition-colors duration-200">Contact</a>
                </div>
            </div>
        </div>
    </header>

    {{-- Spacer for fixed header --}}
    <div class="h-16 lg:h-20"></div>
</div>
