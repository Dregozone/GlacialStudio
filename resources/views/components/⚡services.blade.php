<?php

use Livewire\Component;

new class extends Component {};

?>

<section class="section-padding bg-glacier-900/50 relative overflow-hidden" id="services">
    {{-- Top gradient line --}}
    <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-primary-500/20 to-transparent" aria-hidden="true"></div>

    <div class="container-custom" x-data="{ shown: false }" x-intersect.once="shown = true">
        {{-- Section Header --}}
        <div class="text-center mb-16 lg:mb-20">
            <div
                :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                class="transition-all duration-700"
            >
                <span class="section-label">
                    <i class="fa-solid fa-wand-magic-sparkles text-[10px]" aria-hidden="true"></i>
                    Services
                </span>
            </div>
            <h2
                class="text-3xl sm:text-4xl md:text-5xl font-display font-bold text-white mb-6"
                :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                style="transition: all 0.7s ease; transition-delay: 100ms;"
            >
                Our <span class="gradient-text">Services</span>
            </h2>
            <p
                class="text-lg text-glacier-400 max-w-3xl mx-auto leading-relaxed"
                :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                style="transition: all 0.7s ease; transition-delay: 200ms;"
            >
                Comprehensive web development and digital solutions tailored to your business needs.
                From concept to deployment, we handle every aspect of your project.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            @foreach (\App\Models\Service::where('active', 1)->get() as $index => $service)
                <div
                    class="glass-card group flex flex-col overflow-hidden"
                    :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                    style="transition: all 0.7s ease; transition-delay: {{ 300 + ($index * 100) }}ms;"
                >
                    {{-- Service Image --}}
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('img/' . $service->img) }}"
                            class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-700"
                            alt="{{ $service->name }}" />
                        <div class="absolute inset-0 bg-gradient-to-t from-glacier-950/80 via-glacier-950/20 to-transparent"></div>

                        {{-- Popular Badge --}}
                        @if ($service->default)
                            <div class="absolute top-4 left-4">
                                <span class="inline-flex items-center gap-1.5 bg-primary-500/90 backdrop-blur-sm text-white px-3 py-1 rounded-full text-xs font-semibold">
                                    <i class="fa-solid fa-star text-[8px]" aria-hidden="true"></i>
                                    Popular
                                </span>
                            </div>
                        @endif
                    </div>

                    {{-- Service Content --}}
                    <div class="p-6 flex flex-col flex-1">
                        <h3 class="text-xl font-display font-semibold text-white mb-3">
                            {{ $service->name }}
                        </h3>

                        <p class="text-glacier-400 mb-6 leading-relaxed text-sm flex-1">
                            {{ $service->description }}
                        </p>

                        {{-- Pricing --}}
                        <div class="mb-6">
                            @if ($service->one_time_price == -1)
                                <span class="text-primary-400 font-semibold">Variable costs</span>
                            @elseif ($service->monthly_price == 0 && $service->one_time_price === null)
                                <span class="text-2xl font-bold text-green-400 font-sans">FREE</span>
                            @else
                                @if ($service->one_time_price !== null)
                                    <div class="space-y-0.5">
                                        <span class="text-glacier-500 text-xs uppercase tracking-widest font-sans">Starting from</span>
                                        <div class="text-2xl font-bold text-primary-400 font-sans">
                                            £{{ $service->one_time_price }}
                                        </div>
                                    </div>
                                @else
                                    <div class="space-y-0.5">
                                        <span class="text-glacier-500 text-xs uppercase tracking-widest font-sans">Monthly</span>
                                        <div class="text-2xl font-bold text-primary-400 font-sans">
                                            £{{ $service->monthly_price }}
                                        </div>
                                    </div>
                                @endif
                            @endif
                        </div>

                        {{-- Action Button --}}
                        <a href="#contact" class="btn-primary w-full group mt-auto">
                            <i class="fa-solid fa-arrow-right mr-2 group-hover:translate-x-1 transition-transform duration-200" aria-hidden="true"></i>
                            Get Started
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Why Choose Us --}}
        <div
            class="mt-16 lg:mt-24"
            :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
            style="transition: all 0.7s ease; transition-delay: 700ms;"
        >
            <div class="glass-card p-8 sm:p-12">
                <h3 class="text-2xl sm:text-3xl font-display font-semibold text-white mb-10 text-center">
                    Why Choose <span class="gradient-text">Glacial Studio?</span>
                </h3>
                <div class="grid sm:grid-cols-3 gap-8">
                    <div class="text-center group">
                        <div class="w-14 h-14 bg-primary-500/10 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-primary-500/20 transition-colors duration-300 rotate-3">
                            <i class="fa-solid fa-code text-xl text-primary-400" aria-hidden="true"></i>
                        </div>
                        <h4 class="font-semibold text-white mb-2 font-sans">Modern Technology</h4>
                        <p class="text-sm text-glacier-400 leading-relaxed">Built with the latest frameworks and best practices</p>
                    </div>
                    <div class="text-center group">
                        <div class="w-14 h-14 bg-accent-500/10 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-accent-500/20 transition-colors duration-300 -rotate-3">
                            <i class="fa-solid fa-mobile-screen text-xl text-accent-400" aria-hidden="true"></i>
                        </div>
                        <h4 class="font-semibold text-white mb-2 font-sans">Responsive Design</h4>
                        <p class="text-sm text-glacier-400 leading-relaxed">Perfect on all devices and screen sizes</p>
                    </div>
                    <div class="text-center group">
                        <div class="w-14 h-14 bg-cyan-500/10 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-cyan-500/20 transition-colors duration-300 rotate-3">
                            <i class="fa-solid fa-headset text-xl text-cyan-400" aria-hidden="true"></i>
                        </div>
                        <h4 class="font-semibold text-white mb-2 font-sans">Ongoing Support</h4>
                        <p class="text-sm text-glacier-400 leading-relaxed">We're here to help after launch</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Bottom gradient line --}}
    <div class="absolute bottom-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-white/[0.06] to-transparent" aria-hidden="true"></div>
</section>
