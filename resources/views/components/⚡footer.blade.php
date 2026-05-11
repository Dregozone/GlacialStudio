<?php

use Livewire\Component;

new class extends Component {};

?>

<footer class="bg-glacier-950 text-white relative" role="contentinfo">
    {{-- Top gradient line --}}
    <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-white/[0.06] to-transparent" aria-hidden="true"></div>

    <div class="container-custom py-16 lg:py-20">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-8 mb-12">
            {{-- Company Info --}}
            <div class="lg:col-span-2">
                <div class="flex items-center space-x-3 mb-6">
                    <img src="{{ asset('img/gs-logo.png') }}" class="h-9" alt="" aria-hidden="true" />
                    <span class="text-xl font-display font-semibold">
                        Glacial <span class="gradient-text">Studio</span>
                    </span>
                </div>
                <p class="text-glacier-400 leading-relaxed mb-6 max-w-md text-sm">
                    Professional web development and digital solutions. We create modern, effective web applications
                    that drive business growth and user engagement.
                </p>
                <div class="flex space-x-3">
                    <a href="https://www.facebook.com/GlacialStudioWebSolutions" target="_blank" rel="noreferrer"
                        class="w-10 h-10 bg-white/5 border border-white/[0.06] rounded-xl flex items-center justify-center hover:bg-primary-500/20 hover:border-primary-500/30 hover:text-primary-400 transition-all duration-300 text-glacier-400"
                        aria-label="Follow us on Facebook">
                        <i class="fa-brands fa-facebook text-sm" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

            {{-- Quick Links --}}
            <nav aria-label="Footer navigation">
                <h3 class="text-sm font-semibold mb-5 uppercase tracking-widest text-glacier-300 font-sans">Quick Links</h3>
                <ul class="space-y-3">
                    <li>
                        <a href="#products" class="text-glacier-400 hover:text-white transition-colors duration-200 text-sm inline-flex items-center gap-2 group">
                            <span class="w-1 h-1 rounded-full bg-glacier-600 group-hover:bg-primary-400 transition-colors duration-200" aria-hidden="true"></span>
                            Products
                        </a>
                    </li>
                    <li>
                        <a href="#services" class="text-glacier-400 hover:text-white transition-colors duration-200 text-sm inline-flex items-center gap-2 group">
                            <span class="w-1 h-1 rounded-full bg-glacier-600 group-hover:bg-primary-400 transition-colors duration-200" aria-hidden="true"></span>
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="#contact" class="text-glacier-400 hover:text-white transition-colors duration-200 text-sm inline-flex items-center gap-2 group">
                            <span class="w-1 h-1 rounded-full bg-glacier-600 group-hover:bg-primary-400 transition-colors duration-200" aria-hidden="true"></span>
                            Contact
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('meet-the-owner') }}" class="text-glacier-400 hover:text-white transition-colors duration-200 text-sm inline-flex items-center gap-2 group">
                            <span class="w-1 h-1 rounded-full bg-glacier-600 group-hover:bg-primary-400 transition-colors duration-200" aria-hidden="true"></span>
                            Meet the Owner
                        </a>
                    </li>
                </ul>
            </nav>

            {{-- Contact Info --}}
            <div>
                <h3 class="text-sm font-semibold mb-5 uppercase tracking-widest text-glacier-300 font-sans">Contact</h3>
                <ul class="space-y-3">
                    <li class="flex items-center space-x-3">
                        <i class="fa-solid fa-envelope text-primary-400/60 text-xs" aria-hidden="true"></i>
                        <span class="text-glacier-400 text-sm">aclearmonth@gmail.com</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fa-solid fa-location-dot text-primary-400/60 text-xs" aria-hidden="true"></i>
                        <span class="text-glacier-400 text-sm">United Kingdom</span>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Bottom Section --}}
        <div class="border-t border-white/[0.06] pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="text-glacier-500 text-xs">
                    © {{ date('Y') }} Glacial Studio. All rights reserved.
                </div>
                <div class="flex space-x-6 text-xs">
                    <a href="{{ route('privacy-policy') }}"
                        class="text-glacier-500 hover:text-white transition-colors duration-200">
                        Privacy Policy
                    </a>
                    <a href="{{ route('terms-of-service') }}"
                        class="text-glacier-500 hover:text-white transition-colors duration-200">
                        Terms of Service
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
