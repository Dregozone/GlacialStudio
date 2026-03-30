<?php

use Livewire\Component;

new class extends Component {};

?>

<section
    class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-glacier-50 via-white to-primary-50">
    {{-- Sophisticated Background Elements --}}
    <div class="absolute inset-0">
        {{-- Animated Grid Pattern --}}
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0"
                style="background-image: radial-gradient(circle at 1px 1px, rgba(59, 130, 246, 0.15) 1px, transparent 0); background-size: 50px 50px;">
            </div>
        </div>

        {{-- Floating Tech Orbs --}}
        <div
            class="absolute top-20 left-10 w-32 h-32 bg-gradient-to-br from-primary-400/20 to-primary-600/20 rounded-full blur-xl animate-float">
        </div>
        <div class="absolute top-40 right-20 w-24 h-24 bg-gradient-to-br from-accent-400/20 to-accent-600/20 rounded-full blur-xl animate-float"
            style="animation-delay: -2s;"></div>
        <div class="absolute bottom-32 left-1/4 w-28 h-28 bg-gradient-to-br from-glacier-400/20 to-glacier-600/20 rounded-full blur-xl animate-float"
            style="animation-delay: -4s;"></div>

        {{-- Animated Circuit Lines --}}
        <div class="absolute top-1/4 left-1/4 w-64 h-64">
            <svg class="w-full h-full" viewBox="0 0 256 256">
                <path d="M20,20 L120,20 L120,120 L20,120 Z" stroke="rgba(59, 130, 246, 0.1)" stroke-width="2"
                    fill="none" class="animate-pulse" />
                <circle cx="60" cy="60" r="3" fill="rgba(59, 130, 246, 0.3)" class="animate-ping" />
                <circle cx="180" cy="180" r="3" fill="rgba(251, 191, 36, 0.3)" class="animate-ping"
                    style="animation-delay: -1s;" />
            </svg>
        </div>

        {{-- Floating Code Blocks --}}
        <div class="absolute top-1/3 right-1/3 transform rotate-12">
            <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4 border border-white/20 shadow-lg">
                <div class="flex space-x-2 mb-2">
                    <div class="w-3 h-3 bg-red-400 rounded-full"></div>
                    <div class="w-3 h-3 bg-yellow-400 rounded-full"></div>
                    <div class="w-3 h-3 bg-green-400 rounded-full"></div>
                </div>
                <div class="space-y-1">
                    <div class="h-2 bg-primary-300/30 rounded w-16"></div>
                    <div class="h-2 bg-accent-300/30 rounded w-20"></div>
                    <div class="h-2 bg-glacier-300/30 rounded w-12"></div>
                </div>
            </div>
        </div>

        {{-- Rotating Tech Rings --}}
        <div class="absolute top-1/2 right-1/4">
            <div class="relative w-32 h-32">
                <div class="absolute inset-0 border-2 border-primary-300/30 rounded-full animate-spin"
                    style="animation-duration: 20s;"></div>
                <div class="absolute inset-2 border-2 border-accent-300/30 rounded-full animate-spin"
                    style="animation-duration: 15s; animation-direction: reverse;"></div>
                <div class="absolute inset-4 border-2 border-glacier-300/30 rounded-full animate-spin"
                    style="animation-duration: 25s;"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="w-4 h-4 bg-primary-500 rounded-full animate-pulse"></div>
                </div>
            </div>
        </div>

        <div class="absolute top-3/4 left-1/4 w-8 h-8 border border-glacier-300/50 rotate-12 animate-float"
            style="animation-delay: -2s;"></div>
    </div>

    {{-- Handle flash messages --}}
    @foreach (['success', 'fail', 'msg'] as $type)
        @if (Session::has($type))
            <div id="{{ $type }}" @class([
                'fixed top-20 left-1/2 transform -translate-x-1/2 z-50 px-6 py-3 rounded-lg shadow-lg text-white font-medium',
                'bg-green-500' => $type == 'success',
                'bg-red-500' => $type == 'fail',
                'bg-primary-500' => $type == 'msg',
            ])>
                {{ Session::get($type) }}
            </div>

            <script>
                setTimeout(() => {
                    document.getElementById('{{ $type }}').style.display = "none";
                }, 5000);
            </script>
        @endif
    @endforeach

    <div class="container-custom relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            {{-- Main Heading --}}
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-display font-bold text-glacier-900 mb-6 leading-tight">
                Modern Web Solutions for
                <span class="gradient-text">Digital Excellence</span>
            </h1>

            {{-- Subtitle --}}
            <p class="text-lg md:text-xl text-glacier-600 mb-8 max-w-2xl mx-auto leading-relaxed">
                Transform your ideas into powerful web applications with cutting-edge technology and professional
                design.
                Let's build something extraordinary together.
            </p>

            {{-- Call to Action Buttons --}}
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="#services" class="btn-primary group">
                    <i class="fa-regular fa-handshake mr-2 group-hover:scale-110 transition-transform duration-200"></i>
                    Start Your Project
                </a>
                <a href="#products" class="btn-secondary group">
                    <i class="fa-solid fa-eye mr-2 group-hover:scale-110 transition-transform duration-200"></i>
                    View Our Work
                </a>
            </div>

            {{-- Trust Indicators --}}
            <div class="mt-12 flex flex-wrap justify-center items-center gap-8 text-glacier-500">
                <div class="flex items-center space-x-2">
                    <i class="fa-solid fa-check-circle text-primary-500"></i>
                    <span class="text-sm font-medium">Professional Quality</span>
                </div>
                <div class="flex items-center space-x-2">
                    <i class="fa-solid fa-clock text-primary-500"></i>
                    <span class="text-sm font-medium">Fast Delivery</span>
                </div>
                <div class="flex items-center space-x-2">
                    <i class="fa-solid fa-shield-halved text-primary-500"></i>
                    <span class="text-sm font-medium">Secure & Reliable</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Clear Bouncing Scroll Indicator --}}
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce cursor-pointer"
        onclick="document.getElementById('about').scrollIntoView({behavior: 'smooth'})">
        <div class="flex flex-col items-center space-y-3">
            {{-- Large Scroll Arrow --}}
            <div class="relative">
                <div
                    class="w-12 h-12 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center shadow-lg border border-glacier-200 hover:shadow-xl transition-all duration-300">
                    <svg class="w-6 h-6 text-glacier-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </div>
                {{-- Pulsing Ring --}}
                <div
                    class="absolute inset-0 w-12 h-12 border-2 border-primary-400 rounded-full animate-ping opacity-75">
                </div>
            </div>

            {{-- Clear Text --}}
            <div
                class="text-sm text-glacier-600 font-medium bg-white/80 backdrop-blur-sm px-4 py-2 rounded-full shadow-sm">
                Scroll to explore
            </div>

            {{-- Animated Dots --}}
            <div class="flex space-x-2">
                <div class="w-2 h-2 bg-primary-400 rounded-full animate-pulse"></div>
                <div class="w-2 h-2 bg-primary-400 rounded-full animate-pulse" style="animation-delay: 0.2s;"></div>
                <div class="w-2 h-2 bg-primary-400 rounded-full animate-pulse" style="animation-delay: 0.4s;"></div>
            </div>
        </div>
    </div>
</section>
