<?php

use Livewire\Component;

new class extends Component {};

?>

<section
    class="relative min-h-[100dvh] flex items-center justify-center overflow-hidden bg-glacier-950"
    aria-label="Welcome to Glacial Studio"
>
    {{-- Aurora Gradient Background --}}
    <div class="absolute inset-0 aurora-bg"></div>

    {{-- Subtle Grid Pattern --}}
    <div class="absolute inset-0 grid-pattern"></div>

    {{-- Floating Orbs --}}
    <div class="absolute top-1/4 left-[10%] w-72 h-72 bg-primary-500/10 rounded-full blur-3xl animate-float" aria-hidden="true"></div>
    <div class="absolute top-1/3 right-[15%] w-56 h-56 bg-cyan-400/10 rounded-full blur-3xl animate-float-slow" aria-hidden="true"></div>
    <div class="absolute bottom-1/4 left-1/3 w-64 h-64 bg-violet-500/5 rounded-full blur-3xl animate-float-delayed" aria-hidden="true"></div>

    {{-- Decorative Rings --}}
    <div class="absolute top-1/2 right-[10%] -translate-y-1/2 hidden lg:block" aria-hidden="true">
        <div class="relative w-48 h-48">
            <div class="absolute inset-0 border border-white/[0.04] rounded-full animate-spin-slow"></div>
            <div class="absolute inset-6 border border-primary-400/10 rounded-full animate-spin-slower" style="animation-direction: reverse;"></div>
            <div class="absolute inset-12 border border-cyan-400/5 rounded-full animate-spin-slow"></div>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="w-3 h-3 bg-primary-400/50 rounded-full animate-glow-pulse"></div>
            </div>
        </div>
    </div>

    {{-- Handle flash messages --}}
    @foreach (['success', 'fail', 'msg'] as $type)
        @if (Session::has($type))
            <div id="{{ $type }}" @class([
                'fixed top-24 left-1/2 transform -translate-x-1/2 z-[60] px-6 py-3 rounded-xl backdrop-blur-xl text-white font-medium shadow-xl border',
                'bg-green-500/90 border-green-400/30' => $type == 'success',
                'bg-red-500/90 border-red-400/30' => $type == 'fail',
                'bg-primary-500/90 border-primary-400/30' => $type == 'msg',
            ]) role="alert">
                {{ Session::get($type) }}
            </div>

            <script>
                setTimeout(() => {
                    document.getElementById('{{ $type }}').style.display = "none";
                }, 5000);
            </script>
        @endif
    @endforeach

    {{-- Hero Content --}}
    <div class="container-custom relative z-10">
        <div class="text-center max-w-4xl mx-auto"
            x-data="{ shown: false }"
            x-intersect.once="shown = true"
        >
            {{-- Tagline Badge --}}
            <div
                :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                class="transition-all duration-700 delay-[100ms]"
            >
                <span class="section-label">
                    <span class="w-2 h-2 rounded-full bg-primary-400 animate-pulse" aria-hidden="true"></span>
                    Web Development Studio
                </span>
            </div>

            {{-- Main Heading with Word Rotation --}}
            <h1
                class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-display font-bold text-white mb-6 leading-[1.1] tracking-tight"
                :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                style="transition: all 0.7s ease; transition-delay: 200ms;"
            >
                We Build
                <span class="block mt-2"
                    x-data="{
                        words: ['Extraordinary', 'Innovative', 'Beautiful', 'Powerful'],
                        currentIndex: 0,
                        currentWord: 'Extraordinary',
                        transitioning: false,
                        init() {
                            setInterval(() => {
                                this.transitioning = true;
                                setTimeout(() => {
                                    this.currentIndex = (this.currentIndex + 1) % this.words.length;
                                    this.currentWord = this.words[this.currentIndex];
                                    this.transitioning = false;
                                }, 400);
                            }, 3000);
                        }
                    }"
                >
                    <span
                        class="gradient-text inline-block transition-all duration-500"
                        :class="transitioning ? 'opacity-0 translate-y-3 blur-sm' : 'opacity-100 translate-y-0 blur-0'"
                        x-text="currentWord"
                        aria-live="polite"
                    >Extraordinary</span>
                </span>
                <span class="block mt-2 text-glacier-300 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-light">
                    Digital Experiences
                </span>
            </h1>

            {{-- Subtitle --}}
            <p
                class="text-base sm:text-lg md:text-xl text-glacier-400 mb-10 max-w-2xl mx-auto leading-relaxed font-light"
                :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                style="transition: all 0.7s ease; transition-delay: 400ms;"
            >
                Transform your ideas into powerful web applications with cutting-edge technology and professional design.
                Let's build something extraordinary together.
            </p>

            {{-- CTAs --}}
            <div
                class="flex flex-col sm:flex-row gap-4 justify-center items-center"
                :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                style="transition: all 0.7s ease; transition-delay: 550ms;"
            >
                <a href="#services" class="btn-primary group">
                    <i class="fa-regular fa-handshake mr-2.5 group-hover:scale-110 transition-transform duration-200" aria-hidden="true"></i>
                    Start Your Project
                </a>
                <a href="#products" class="btn-secondary group">
                    <i class="fa-solid fa-eye mr-2.5 group-hover:scale-110 transition-transform duration-200" aria-hidden="true"></i>
                    View Our Work
                </a>
            </div>

            {{-- Trust Indicators --}}
            <div
                class="mt-16 flex flex-wrap justify-center items-center gap-x-8 gap-y-4"
                :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                style="transition: all 0.7s ease; transition-delay: 700ms;"
            >
                <div class="flex items-center space-x-2.5 text-glacier-500">
                    <div class="w-8 h-8 rounded-full bg-primary-500/10 flex items-center justify-center">
                        <i class="fa-solid fa-check text-primary-400 text-xs" aria-hidden="true"></i>
                    </div>
                    <span class="text-sm font-medium">Professional Quality</span>
                </div>
                <div class="flex items-center space-x-2.5 text-glacier-500">
                    <div class="w-8 h-8 rounded-full bg-primary-500/10 flex items-center justify-center">
                        <i class="fa-solid fa-bolt text-primary-400 text-xs" aria-hidden="true"></i>
                    </div>
                    <span class="text-sm font-medium">Fast Delivery</span>
                </div>
                <div class="flex items-center space-x-2.5 text-glacier-500">
                    <div class="w-8 h-8 rounded-full bg-primary-500/10 flex items-center justify-center">
                        <i class="fa-solid fa-shield-halved text-primary-400 text-xs" aria-hidden="true"></i>
                    </div>
                    <span class="text-sm font-medium">Secure & Reliable</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Scroll Indicator --}}
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce" aria-hidden="true">
        <button
            @click="document.getElementById('about').scrollIntoView({behavior: 'smooth'})"
            class="flex flex-col items-center space-y-2 group cursor-pointer focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-400 rounded-full p-2"
            aria-label="Scroll to learn more"
        >
            <div class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center group-hover:bg-white/10 group-hover:border-white/20 transition-all duration-300">
                <svg class="w-4 h-4 text-glacier-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </div>
            <span class="text-xs text-glacier-600 font-medium tracking-wider uppercase">Explore</span>
        </button>
    </div>
</section>
