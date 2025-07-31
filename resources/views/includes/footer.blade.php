<footer class="bg-glacier-900 text-white">
    <div class="container-custom py-16">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            {{-- Company Info --}}
            <div class="lg:col-span-2">
                <div class="flex items-center space-x-3 mb-6">
                    <img src="{{ asset('img/gs-logo.png') }}" class="h-10" alt="Glacial Studio Logo" />
                    <span class="text-2xl font-display font-semibold">Glacial Studio</span>
                </div>
                <p class="text-glacier-300 leading-relaxed mb-6 max-w-md">
                    Professional web development and digital solutions. We create modern, effective web applications
                    that drive business growth and user engagement.
                </p>
                <div class="flex space-x-4">
                    <a href="https://www.facebook.com/GlacialStudioWebSolutions" target="_blank" rel="noreferrer"
                        class="w-10 h-10 bg-glacier-800 rounded-full flex items-center justify-center hover:bg-primary-600 transition-colors duration-200">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                </div>
            </div>

            {{-- Quick Links --}}
            <div>
                <h3 class="text-lg font-semibold mb-6">Quick Links</h3>
                <ul class="space-y-3">
                    <li>
                        <a href="#products" class="text-glacier-300 hover:text-white transition-colors duration-200">
                            Products
                        </a>
                    </li>
                    <li>
                        <a href="#services" class="text-glacier-300 hover:text-white transition-colors duration-200">
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="#contact" class="text-glacier-300 hover:text-white transition-colors duration-200">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Contact Info --}}
            <div>
                <h3 class="text-lg font-semibold mb-6">Contact</h3>
                <ul class="space-y-3">
                    <li class="flex items-center space-x-3">
                        <i class="fa-solid fa-envelope text-primary-400"></i>
                        <span class="text-glacier-300">info@glacialstudio.com</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fa-solid fa-location-dot text-primary-400"></i>
                        <span class="text-glacier-300">United Kingdom</span>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Bottom Section --}}
        <div class="border-t border-glacier-800 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-glacier-400 text-sm mb-4 md:mb-0">
                    © {{ date('Y') }} Glacial Studio. All rights reserved.
                </div>
                <div class="flex space-x-6 text-sm">
                    <a href="{{ route('privacy-policy') }}"
                        class="text-glacier-400 hover:text-white transition-colors duration-200">
                        Privacy Policy
                    </a>
                    <a href="{{ route('terms-of-service') }}"
                        class="text-glacier-400 hover:text-white transition-colors duration-200">
                        Terms of Service
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
