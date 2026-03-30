<?php

use Livewire\Component;

new class extends Component {};

?>

<section class="section-padding bg-glacier-950 relative" id="contact">
    <div class="container-custom" x-data="{ shown: false }" x-intersect.once="shown = true">
        {{-- Section Header --}}
        <div class="text-center mb-16 lg:mb-20">
            <div
                :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                class="transition-all duration-700"
            >
                <span class="section-label">
                    <i class="fa-solid fa-envelope text-[10px]" aria-hidden="true"></i>
                    Contact
                </span>
            </div>
            <h2
                class="text-3xl sm:text-4xl md:text-5xl font-display font-bold text-white mb-6"
                :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                style="transition: all 0.7s ease; transition-delay: 100ms;"
            >
                Get in <span class="gradient-text">Touch</span>
            </h2>
            <p
                class="text-lg text-glacier-400 max-w-3xl mx-auto leading-relaxed"
                :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                style="transition: all 0.7s ease; transition-delay: 200ms;"
            >
                Ready to start your next project? Let's discuss how we can bring your vision to life.
            </p>
        </div>

        {{-- Availability Notice --}}
        <div
            class="max-w-2xl mx-auto mb-12"
            :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
            style="transition: all 0.7s ease; transition-delay: 300ms;"
        >
            <div class="bg-amber-500/10 border border-amber-500/20 rounded-2xl p-6 text-center backdrop-blur-sm" role="status">
                <div class="flex items-center justify-center mb-4">
                    <div class="w-11 h-11 bg-amber-500/20 rounded-xl flex items-center justify-center mr-3">
                        <i class="fa-solid fa-clock text-amber-400" aria-hidden="true"></i>
                    </div>
                    <h3 class="text-lg font-display font-semibold text-amber-300">Currently Unavailable</h3>
                </div>
                <p class="text-amber-300/80 leading-relaxed text-sm">
                    I am not currently taking on any new projects. Please check back later or follow us on social media for updates.
                </p>
            </div>
        </div>

        {{-- Contact Info Grid --}}
        <div
            class="grid md:grid-cols-2 gap-8 lg:gap-12 max-w-4xl mx-auto"
            :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
            style="transition: all 0.7s ease; transition-delay: 400ms;"
        >
            {{-- Contact Details --}}
            <div class="space-y-8">
                <div>
                    <h3 class="text-2xl font-display font-semibold text-white mb-5">
                        Contact Information
                    </h3>
                    <p class="text-glacier-400 leading-relaxed">
                        While we're not taking new projects right now, feel free to reach out for future opportunities or general inquiries.
                    </p>
                </div>

                <div class="space-y-5">
                    <div class="flex items-center space-x-4 group">
                        <div class="w-11 h-11 bg-primary-500/10 rounded-xl flex items-center justify-center group-hover:bg-primary-500/20 transition-colors duration-300 shrink-0">
                            <i class="fa-solid fa-envelope text-primary-400 text-sm" aria-hidden="true"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white text-sm font-sans">Email</h4>
                            <p class="text-glacier-400 text-sm">info@glacialstudio.com</p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4 group">
                        <div class="w-11 h-11 bg-accent-500/10 rounded-xl flex items-center justify-center group-hover:bg-accent-500/20 transition-colors duration-300 shrink-0">
                            <i class="fa-solid fa-location-dot text-accent-400 text-sm" aria-hidden="true"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white text-sm font-sans">Location</h4>
                            <p class="text-glacier-400 text-sm">United Kingdom</p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4 group">
                        <div class="w-11 h-11 bg-cyan-500/10 rounded-xl flex items-center justify-center group-hover:bg-cyan-500/20 transition-colors duration-300 shrink-0">
                            <i class="fa-brands fa-facebook text-cyan-400 text-sm" aria-hidden="true"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white text-sm font-sans">Social Media</h4>
                            <a href="https://www.facebook.com/GlacialStudioWebSolutions" target="_blank" rel="noreferrer"
                                class="text-primary-400 hover:text-primary-300 transition-colors duration-200 text-sm">
                                Follow us on Facebook
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Future Contact Form Placeholder --}}
            <div class="glass-card p-7 sm:p-8">
                <h3 class="text-xl font-display font-semibold text-white mb-5">
                    Future Inquiries
                </h3>
                <p class="text-glacier-400 mb-6 text-sm leading-relaxed">
                    When we're available for new projects, you'll be able to submit your project details here.
                </p>

                <div class="space-y-4 opacity-40" aria-hidden="true">
                    <div>
                        <label class="block text-xs font-medium text-glacier-500 mb-2 font-sans">Name</label>
                        <input type="text" disabled tabindex="-1"
                            class="w-full px-4 py-3 bg-white/5 border border-white/[0.06] rounded-xl text-white placeholder-glacier-600 text-sm">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-glacier-500 mb-2 font-sans">Email</label>
                        <input type="email" disabled tabindex="-1"
                            class="w-full px-4 py-3 bg-white/5 border border-white/[0.06] rounded-xl text-white placeholder-glacier-600 text-sm">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-glacier-500 mb-2 font-sans">Message</label>
                        <textarea rows="3" disabled tabindex="-1" class="w-full px-4 py-3 bg-white/5 border border-white/[0.06] rounded-xl text-white placeholder-glacier-600 text-sm resize-none"></textarea>
                    </div>
                    <button disabled tabindex="-1"
                        class="w-full px-4 py-3 bg-white/5 text-glacier-600 rounded-xl border border-white/[0.06] cursor-not-allowed text-sm font-medium">
                        Submit (Coming Soon)
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
