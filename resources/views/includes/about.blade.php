<section id="about" class="section-padding bg-gradient-to-b from-white to-glacier-50">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-display font-bold text-glacier-900 mb-6">
                About <span class="gradient-text">Glacial Studio</span>
            </h2>
            <p class="text-lg text-glacier-600 max-w-3xl mx-auto">
                We specialize in creating modern, effective web solutions that drive business growth and user
                engagement.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-center">
            {{-- Image Section --}}
            <div class="relative">
                <div class="relative z-10">
                    <img src="{{ asset('img/wedding-morning-tsp.png') }}"
                        class="w-full h-96 object-cover rounded-2xl shadow-2xl"
                        alt="Anders Learmonth - Founder of Glacial Studio" />
                </div>
                {{-- Decorative Elements --}}
                <div class="absolute -top-4 -right-4 w-24 h-24 bg-primary-200 rounded-full opacity-60"></div>
                <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-accent-200 rounded-full opacity-60"></div>
            </div>

            {{-- Content Section --}}
            <div class="space-y-8">
                <div class="space-y-6">
                    <h3 class="text-2xl font-display font-semibold text-glacier-900">
                        Our Mission
                    </h3>
                    <p class="text-glacier-600 leading-relaxed">
                        At Glacial Studio, we believe in the power of technology to transform businesses and create
                        meaningful digital experiences.
                        Our mission is to deliver affordable, effective web solutions that exceed expectations and drive
                        real results.
                    </p>
                </div>

                {{-- Quote Section --}}
                <div class="relative bg-white p-8 rounded-2xl shadow-lg border border-glacier-100">
                    <div class="absolute -top-4 left-8">
                        <div class="w-8 h-8 bg-primary-500 rounded-full flex items-center justify-center">
                            <i class="fa-solid fa-quote-left text-white text-sm"></i>
                        </div>
                    </div>

                    <blockquote class="relative">
                        <p class="text-glacier-700 text-lg leading-relaxed mb-6">
                            "I set up Glacial Studio with the goal to provide affordable, effective web solutions.
                            I strive for customer satisfaction; Setting deliverables with clear timeframes upfront, and
                            always working towards your dream solution."
                        </p>

                        <footer class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center">
                                <span class="text-primary-600 font-semibold text-lg">A</span>
                            </div>
                            <div>
                                <cite class="text-glacier-900 font-semibold not-italic">Anders Learmonth</cite>
                                <p class="text-glacier-500 text-sm">Founder & Lead Developer</p>
                            </div>
                        </footer>
                    </blockquote>
                </div>

                {{-- Key Values --}}
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                    <div class="text-center p-4">
                        <div
                            class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-3">
                            <i class="fa-solid fa-rocket text-primary-600"></i>
                        </div>
                        <h4 class="font-semibold text-glacier-900 mb-2">Fast Delivery</h4>
                        <p class="text-sm text-glacier-600">Quick turnaround times without compromising quality</p>
                    </div>
                    <div class="text-center p-4">
                        <div class="w-12 h-12 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-3">
                            <i class="fa-solid fa-shield-halved text-accent-600"></i>
                        </div>
                        <h4 class="font-semibold text-glacier-900 mb-2">Reliable</h4>
                        <p class="text-sm text-glacier-600">Secure, stable, and scalable solutions</p>
                    </div>
                    <div class="text-center p-4">
                        <div
                            class="w-12 h-12 bg-glacier-100 rounded-full flex items-center justify-center mx-auto mb-3">
                            <i class="fa-solid fa-users text-glacier-600"></i>
                        </div>
                        <h4 class="font-semibold text-glacier-900 mb-2">Customer Focus</h4>
                        <p class="text-sm text-glacier-600">Your success is our priority</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
