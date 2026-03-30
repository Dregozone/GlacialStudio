<?php

use Livewire\Component;

new class extends Component {};

?>

<section class="section-padding bg-glacier-950 relative overflow-hidden">
    {{-- Top gradient line --}}
    <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-white/[0.06] to-transparent" aria-hidden="true"></div>

    <div class="container-custom" x-data="{ shown: false }" x-intersect.once="shown = true">
        {{-- Section Header --}}
        <div class="text-center mb-16 lg:mb-20">
            <div
                :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                class="transition-all duration-700"
            >
                <span class="section-label">
                    <i class="fa-solid fa-briefcase text-[10px]" aria-hidden="true"></i>
                    Portfolio
                </span>
            </div>
            <h2
                class="text-3xl sm:text-4xl md:text-5xl font-display font-bold text-white mb-6"
                :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                style="transition: all 0.7s ease; transition-delay: 100ms;"
            >
                Our <span class="gradient-text">Past Work</span>
            </h2>
            <p
                class="text-lg text-glacier-400 max-w-3xl mx-auto leading-relaxed"
                :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                style="transition: all 0.7s ease; transition-delay: 200ms;"
            >
                Take a look at some of our previous projects and the impact we've made for our clients.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            @foreach (\App\Models\PastWork::where('active', 1)->orderBy('order', 'ASC')->get() as $index => $pastWork)
                <div
                    class="glass-card group overflow-hidden"
                    :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                    style="transition: all 0.7s ease; transition-delay: {{ 300 + ($index * 100) }}ms;"
                >
                    {{-- Project Image --}}
                    <div class="relative overflow-hidden">
                        <img src="{{ asset("img/{$pastWork->img}") }}"
                            alt="{{ $pastWork->name }} - Project screenshot"
                            class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-700" />
                        <div class="absolute inset-0 bg-gradient-to-t from-glacier-950/80 via-glacier-950/20 to-transparent"></div>

                        {{-- Project Badge --}}
                        <div class="absolute top-4 left-4">
                            <span class="inline-flex items-center gap-1.5 bg-primary-500/90 backdrop-blur-sm text-white px-3 py-1 rounded-full text-xs font-semibold">
                                <i class="fa-solid fa-check text-[8px]" aria-hidden="true"></i>
                                Completed
                            </span>
                        </div>
                    </div>

                    {{-- Project Content --}}
                    <div class="p-6">
                        <h3 class="text-xl font-display font-semibold text-white mb-3">
                            {{ $pastWork->name }}
                        </h3>

                        <p class="text-glacier-400 leading-relaxed text-sm">
                            {{ $pastWork->description }}
                        </p>

                        {{-- Project Stats --}}
                        <div class="mt-5 pt-4 border-t border-white/[0.06]">
                            <div class="flex items-center justify-between text-sm text-glacier-500">
                                <span class="flex items-center gap-2">
                                    <i class="fa-solid fa-calendar text-glacier-600 text-xs" aria-hidden="true"></i>
                                    Project Date
                                </span>
                                <span class="flex items-center gap-2">
                                    <i class="fa-solid fa-code text-glacier-600 text-xs" aria-hidden="true"></i>
                                    Web Development
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- CTA --}}
        <div
            class="text-center mt-16 lg:mt-20"
            :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
            style="transition: all 0.7s ease; transition-delay: 600ms;"
        >
            <div class="glass-card p-8 sm:p-10 max-w-2xl mx-auto text-center">
                <h3 class="text-2xl font-display font-semibold text-white mb-4">
                    Ready to Start Your Project?
                </h3>
                <p class="text-glacier-400 mb-6 leading-relaxed">
                    Let's discuss how we can bring your vision to life with our expertise and modern development approach.
                </p>
                <a href="#contact" class="btn-primary group">
                    <i class="fa-solid fa-rocket mr-2 group-hover:scale-110 transition-transform duration-200" aria-hidden="true"></i>
                    Get Started Today
                </a>
            </div>
        </div>
    </div>
</section>
