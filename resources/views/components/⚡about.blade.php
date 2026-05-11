<?php

use Livewire\Component;

new class extends Component {};

?>

<section id="about" class="section-padding bg-glacier-950 relative overflow-hidden">
    {{-- Subtle gradient accent --}}
    <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-white/[0.06] to-transparent" aria-hidden="true"></div>

    <div class="container-custom" x-data="{ shown: false }" x-intersect.once="shown = true">
        {{-- Section Header --}}
        <div class="text-center mb-16 lg:mb-20">
            <div
                :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                class="transition-all duration-700"
            >
                <span class="section-label">
                    <i class="fa-solid fa-user text-[10px]" aria-hidden="true"></i>
                    About Us
                </span>
            </div>
            <h2
                class="text-3xl sm:text-4xl md:text-5xl font-display font-bold text-white mb-6"
                :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                style="transition: all 0.7s ease; transition-delay: 100ms;"
            >
                About <span class="gradient-text">Glacial Studio</span>
            </h2>
            <p
                class="text-lg text-glacier-400 max-w-3xl mx-auto leading-relaxed"
                :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                style="transition: all 0.7s ease; transition-delay: 200ms;"
            >
                We specialize in creating modern, effective web solutions that drive business growth and user engagement.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            {{-- Image Section --}}
            <div
                class="relative"
                :class="shown ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-8'"
                style="transition: all 0.8s ease; transition-delay: 300ms;"
            >
                <div class="relative z-10 rounded-2xl overflow-hidden">
                    <img src="{{ asset('img/wedding-morning-tsp.png') }}"
                        class="w-full h-80 sm:h-96 object-cover"
                        alt="Anders Learmonth - Founder of Glacial Studio" />
                    {{-- Image overlay gradient --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-glacier-950/60 via-transparent to-transparent"></div>
                </div>
                {{-- Decorative elements --}}
                <div class="absolute -top-4 -right-4 w-24 h-24 bg-primary-500/10 rounded-full blur-2xl" aria-hidden="true"></div>
                <div class="absolute -bottom-4 -left-4 w-20 h-20 bg-cyan-400/10 rounded-full blur-2xl" aria-hidden="true"></div>
                {{-- Border accent --}}
                <div class="absolute inset-0 rounded-2xl border border-white/[0.06] z-20 pointer-events-none"></div>
            </div>

            {{-- Content Section --}}
            <div
                class="space-y-8"
                :class="shown ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-8'"
                style="transition: all 0.8s ease; transition-delay: 400ms;"
            >
                <div class="space-y-5">
                    <h3 class="text-2xl font-display font-semibold text-white">
                        Our Mission
                    </h3>
                    <p class="text-glacier-400 leading-relaxed">
                        At Glacial Studio, we believe in the power of technology to transform businesses and create
                        meaningful digital experiences. Our mission is to deliver affordable, effective web solutions
                        that exceed expectations and drive real results.
                    </p>
                    <p class="text-sm text-glacier-500">
                        Want to know more about the founder?
                        <a href="{{ route('meet-the-owner') }}" class="text-primary-300 hover:text-primary-200 underline underline-offset-4 transition-colors duration-200">
                            Meet the owner
                        </a>
                    </p>
                </div>

                {{-- Quote Section --}}
                <div class="relative glass-card p-8">
                    <div class="absolute -top-3 left-8">
                        <div class="w-7 h-7 bg-primary-500 rounded-lg flex items-center justify-center shadow-lg shadow-primary-500/30">
                            <i class="fa-solid fa-quote-left text-white text-xs" aria-hidden="true"></i>
                        </div>
                    </div>

                    <blockquote class="relative">
                        <p class="text-glacier-300 text-lg leading-relaxed mb-6 italic">
                            "I set up Glacial Studio with the goal to provide affordable, effective web solutions.
                            I strive for customer satisfaction; Setting deliverables with clear timeframes upfront, and
                            always working toward your dream solution."
                        </p>

                        <footer class="flex items-center space-x-4">
                            <div class="w-11 h-11 bg-gradient-to-br from-primary-500 to-cyan-400 rounded-full flex items-center justify-center">
                                <span class="text-white font-bold text-base">A</span>
                            </div>
                            <div>
                                <cite class="text-white font-semibold not-italic block">Anders Learmonth</cite>
                                <p class="text-glacier-500 text-sm">Founder & Lead Developer</p>
                            </div>
                        </footer>
                    </blockquote>
                </div>

                {{-- Key Values --}}
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="glass-card text-center p-5 group hover:border-primary-400/20">
                        <div class="w-11 h-11 bg-primary-500/10 rounded-xl flex items-center justify-center mx-auto mb-3 group-hover:bg-primary-500/20 transition-colors duration-300">
                            <i class="fa-solid fa-rocket text-primary-400" aria-hidden="true"></i>
                        </div>
                        <h4 class="font-semibold text-white mb-1.5 text-sm font-sans">Fast Delivery</h4>
                        <p class="text-xs text-glacier-500 leading-relaxed">Quick turnaround without compromising quality</p>
                    </div>
                    <div class="glass-card text-center p-5 group hover:border-accent-400/20">
                        <div class="w-11 h-11 bg-accent-500/10 rounded-xl flex items-center justify-center mx-auto mb-3 group-hover:bg-accent-500/20 transition-colors duration-300">
                            <i class="fa-solid fa-shield-halved text-accent-400" aria-hidden="true"></i>
                        </div>
                        <h4 class="font-semibold text-white mb-1.5 text-sm font-sans">Reliable</h4>
                        <p class="text-xs text-glacier-500 leading-relaxed">Secure, stable, and scalable solutions</p>
                    </div>
                    <div class="glass-card text-center p-5 group hover:border-cyan-400/20">
                        <div class="w-11 h-11 bg-cyan-500/10 rounded-xl flex items-center justify-center mx-auto mb-3 group-hover:bg-cyan-500/20 transition-colors duration-300">
                            <i class="fa-solid fa-users text-cyan-400" aria-hidden="true"></i>
                        </div>
                        <h4 class="font-semibold text-white mb-1.5 text-sm font-sans">Customer Focus</h4>
                        <p class="text-xs text-glacier-500 leading-relaxed">Your success is our priority</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
