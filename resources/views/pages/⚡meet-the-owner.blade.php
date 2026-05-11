<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::app')] #[Title('Meet the Owner - Glacial Studio')] class extends Component {};

?>

<div>
    <livewire:header />

    <main class="min-h-screen bg-glacier-950">
        <div class="container-custom py-20 lg:py-28">
            <div class="max-w-5xl mx-auto grid lg:grid-cols-2 gap-10 lg:gap-14 items-start">
                <div class="space-y-6" x-data="{ shown: false }" x-intersect.once="shown = true">
                    <div
                        :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                        class="transition-all duration-700"
                    >
                        <span class="section-label">
                            <i class="fa-solid fa-user text-[10px]" aria-hidden="true"></i>
                            Meet the Owner
                        </span>
                    </div>
                    <h1
                        class="text-4xl md:text-5xl font-display font-bold text-white leading-tight"
                        :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                        style="transition: all 0.7s ease; transition-delay: 100ms;"
                    >
                        The person behind <span class="gradient-text">Glacial Studio</span>
                    </h1>
                    <div
                        class="space-y-5 text-glacier-300 leading-relaxed"
                        :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                        style="transition: all 0.7s ease; transition-delay: 200ms;"
                    >
                        <p>
                            Hi, I'm Anders. I founded Glacial Studio to build modern, effective web solutions with a practical,
                            collaborative approach from start to finish.
                        </p>
                        <p>
                            This page is a starting point to share more about my background, how I work, and what I care about.
                            I'll keep adding more detail over time.
                        </p>
                        <p>
                            My personal blog is
                            <a href="https://dregozone.com" target="_blank" rel="noopener noreferrer"
                                class="text-primary-300 hover:text-primary-200 underline underline-offset-4 transition-colors duration-200">
                                dregozone.com
                            </a>.
                            That's where I post about technology and other things that interest me.
                        </p>
                    </div>
                    <a href="{{ route('home') }}" class="btn-secondary group inline-flex">
                        <i class="fa-solid fa-arrow-left mr-2 group-hover:-translate-x-1 transition-transform duration-200" aria-hidden="true"></i>
                        Back to Home
                    </a>
                </div>

                <div
                    class="relative glass-card p-4 sm:p-5"
                    x-data="{ shown: false }"
                    x-intersect.once="shown = true"
                    :class="shown ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-8'"
                    style="transition: all 0.8s ease; transition-delay: 150ms;"
                >
                    <div class="rounded-2xl overflow-hidden relative">
                        <img src="{{ asset('img/wedding-morning-tsp.png') }}"
                            class="w-full h-80 sm:h-96 object-cover"
                            alt="Anders Learmonth - Founder of Glacial Studio" />
                        <div class="absolute inset-0 bg-gradient-to-t from-glacier-950/60 via-transparent to-transparent"></div>
                    </div>
                    <div class="mt-5 px-1">
                        <p class="text-white font-semibold">Anders Learmonth</p>
                        <p class="text-glacier-500 text-sm">Founder & Lead Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <livewire:footer />
</div>
