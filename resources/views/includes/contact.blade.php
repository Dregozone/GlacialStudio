<section class="section-padding bg-gradient-to-b from-white to-glacier-50" id="contact">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-display font-bold text-glacier-900 mb-6">
                Get in <span class="gradient-text">Touch</span>
            </h2>
            <p class="text-lg text-glacier-600 max-w-3xl mx-auto">
                Ready to start your next project? Let's discuss how we can bring your vision to life.
            </p>
        </div>

        {{-- Availability Notice --}}
        <div class="max-w-2xl mx-auto mb-12">
            <div class="bg-amber-50 border border-amber-200 rounded-2xl p-6 text-center">
                <div class="flex items-center justify-center mb-4">
                    <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center mr-4">
                        <i class="fa-solid fa-clock text-amber-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-display font-semibold text-amber-800">Currently Unavailable</h3>
                </div>
                <p class="text-amber-700 leading-relaxed">
                    I am not currently taking on any new projects. Please check back later or follow us on social media
                    for updates.
                </p>
            </div>
        </div>

        {{-- Contact Information --}}
        <div class="grid md:grid-cols-2 gap-12 max-w-4xl mx-auto">
            {{-- Contact Details --}}
            <div class="space-y-8">
                <div>
                    <h3 class="text-2xl font-display font-semibold text-glacier-900 mb-6">
                        Contact Information
                    </h3>
                    <p class="text-glacier-600 leading-relaxed mb-8">
                        While we're not taking new projects right now, feel free to reach out for future opportunities
                        or general inquiries.
                    </p>
                </div>

                <div class="space-y-6">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center">
                            <i class="fa-solid fa-envelope text-primary-600"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-glacier-900">Email</h4>
                            <p class="text-glacier-600">info@glacialstudio.com</p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-accent-100 rounded-full flex items-center justify-center">
                            <i class="fa-solid fa-location-dot text-accent-600"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-glacier-900">Location</h4>
                            <p class="text-glacier-600">United Kingdom</p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-glacier-100 rounded-full flex items-center justify-center">
                            <i class="fa-brands fa-facebook text-glacier-600"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-glacier-900">Social Media</h4>
                            <a href="https://www.facebook.com/GlacialStudioWebSolutions" target="_blank"
                                rel="noreferrer"
                                class="text-primary-600 hover:text-primary-700 transition-colors duration-200">
                                Follow us on Facebook
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Future Contact Form Placeholder --}}
            <div class="bg-white rounded-2xl shadow-lg p-8 border border-glacier-100">
                <h3 class="text-xl font-display font-semibold text-glacier-900 mb-6">
                    Future Inquiries
                </h3>
                <p class="text-glacier-600 mb-6">
                    When we're available for new projects, you'll be able to submit your project details here.
                </p>

                <div class="space-y-4 opacity-50">
                    <div>
                        <label class="block text-sm font-medium text-glacier-700 mb-2">Name</label>
                        <input type="text" disabled
                            class="w-full px-4 py-3 border border-glacier-200 rounded-lg bg-glacier-50">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-glacier-700 mb-2">Email</label>
                        <input type="email" disabled
                            class="w-full px-4 py-3 border border-glacier-200 rounded-lg bg-glacier-50">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-glacier-700 mb-2">Message</label>
                        <textarea rows="4" disabled class="w-full px-4 py-3 border border-glacier-200 rounded-lg bg-glacier-50"></textarea>
                    </div>
                    <button disabled
                        class="w-full px-4 py-3 bg-glacier-200 text-glacier-500 rounded-lg cursor-not-allowed">
                        Submit (Coming Soon)
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
