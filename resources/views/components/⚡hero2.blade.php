<?php

use Livewire\Component;

new class extends Component {};

?>

<section class="section-padding relative overflow-hidden bg-glacier-900/50" aria-label="Our Impact">
    {{-- Top gradient line --}}
    <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-primary-500/20 to-transparent" aria-hidden="true"></div>

    {{-- Background orbs --}}
    <div class="absolute top-10 right-10 w-80 h-80 bg-primary-500/5 rounded-full blur-3xl" aria-hidden="true"></div>
    <div class="absolute bottom-10 left-10 w-60 h-60 bg-accent-500/5 rounded-full blur-3xl" aria-hidden="true"></div>

    <div class="container-custom relative z-10" x-data="{ shown: false }" x-intersect.once="shown = true">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            {{-- Content --}}
            <div class="text-center lg:text-left">
                <div
                    :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                    class="transition-all duration-700"
                >
                    <span class="section-label">
                        <i class="fa-solid fa-heart text-[10px]" aria-hidden="true"></i>
                        Social Impact
                    </span>
                </div>

                <h2
                    class="text-3xl sm:text-4xl md:text-5xl font-display font-bold text-white mb-6"
                    :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                    style="transition: all 0.7s ease; transition-delay: 100ms;"
                >
                    Making a <span class="gradient-text-warm">Difference</span>
                </h2>

                <p
                    class="text-lg text-glacier-400 leading-relaxed mb-10"
                    :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                    style="transition: all 0.7s ease; transition-delay: 200ms;"
                >
                    Since January 2025, Glacial Studio has been committed to donating 5% of all profits from product
                    sales and subscriptions to good causes that combat climate change or support animal conservation projects.
                </p>

                {{-- Animated Counter Cards --}}
                <div
                    class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start"
                    :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                    style="transition: all 0.7s ease; transition-delay: 300ms;"
                >
                    <div class="glass-card-highlight p-6 text-center sm:text-left min-w-[140px]">
                        <div class="text-3xl sm:text-4xl font-bold text-primary-400 mb-1 font-sans"
                            x-data="{ current: 0, target: 5 }"
                            x-intersect.once="
                                let start = performance.now();
                                const step = (now) => {
                                    const progress = Math.min((now - start) / 1500, 1);
                                    current = Math.round(progress * target);
                                    if (progress < 1) requestAnimationFrame(step);
                                };
                                requestAnimationFrame(step);
                            "
                        >
                            <span x-text="current">0</span><span>%</span>
                        </div>
                        <div class="text-sm text-glacier-400">of profits donated</div>
                    </div>
                    <div class="glass-card p-6 text-center sm:text-left min-w-[140px] hover:border-accent-400/20">
                        <div class="text-3xl sm:text-4xl font-bold text-accent-400 mb-1 font-sans"
                            x-data="{ current: 0, target: 100 }"
                            x-intersect.once="
                                let start = performance.now();
                                const step = (now) => {
                                    const progress = Math.min((now - start) / 2000, 1);
                                    current = Math.round(progress * target);
                                    if (progress < 1) requestAnimationFrame(step);
                                };
                                requestAnimationFrame(step);
                            "
                        >
                            <span x-text="current">0</span><span>%</span>
                        </div>
                        <div class="text-sm text-glacier-400">commitment to change</div>
                    </div>
                </div>
            </div>

            {{-- Visual Card --}}
            <div
                :class="shown ? 'opacity-100 translate-y-0 scale-100' : 'opacity-0 translate-y-8 scale-95'"
                style="transition: all 0.8s ease; transition-delay: 400ms;"
            >
                <div class="glass-card p-8 sm:p-10">
                    <div class="text-center">
                        <div class="w-20 h-20 bg-gradient-to-br from-primary-500/20 to-cyan-400/20 rounded-2xl flex items-center justify-center mx-auto mb-6 rotate-3">
                            <i class="fa-solid fa-heart text-3xl text-primary-400" aria-hidden="true"></i>
                        </div>
                        <h3 class="text-2xl font-display font-semibold text-white mb-4">
                            Every Purchase Helps
                        </h3>
                        <p class="text-glacier-400 leading-relaxed mb-6">
                            Every purchase you make helps us to help them. Together, we can create a positive impact on
                            our planet and its inhabitants.
                        </p>
                        <div class="flex items-center justify-center gap-6 text-sm">
                            <span class="flex items-center gap-2 text-glacier-400">
                                <span class="w-8 h-8 rounded-lg bg-green-500/10 flex items-center justify-center">
                                    <i class="fa-solid fa-leaf text-green-400 text-xs" aria-hidden="true"></i>
                                </span>
                                Climate Action
                            </span>
                            <span class="flex items-center gap-2 text-glacier-400">
                                <span class="w-8 h-8 rounded-lg bg-orange-500/10 flex items-center justify-center">
                                    <i class="fa-solid fa-paw text-orange-400 text-xs" aria-hidden="true"></i>
                                </span>
                                Conservation
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Bottom gradient line --}}
    <div class="absolute bottom-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-white/[0.06] to-transparent" aria-hidden="true"></div>
</section>
