<section class="section-padding bg-gradient-to-b from-glacier-50 to-white" id="services">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-display font-bold text-glacier-900 mb-6">
                Our <span class="gradient-text">Services</span>
            </h2>
            <p class="text-lg text-glacier-600 max-w-3xl mx-auto">
                Comprehensive web development and digital solutions tailored to your business needs.
                From concept to deployment, we handle every aspect of your project.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach (\App\Models\Service::where('active', 1)->get() as $service)
                <div class="card group hover:scale-105 transition-all duration-300">
                    {{-- Service Image --}}
                    <div class="relative overflow-hidden rounded-t-xl">
                        <img src="{{ asset('img/' . $service->img) }}"
                            class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-300"
                            alt="{{ $service->name }}" />

                        {{-- Popular Badge --}}
                        @if ($service->default)
                            <div class="absolute top-4 left-4">
                                <span class="bg-primary-500 text-white px-3 py-1 rounded-full text-xs font-medium">
                                    Popular
                                </span>
                            </div>
                        @endif
                    </div>

                    {{-- Service Content --}}
                    <div class="p-6">
                        <h3 class="text-xl font-display font-semibold text-glacier-900 mb-3">
                            {{ $service->name }}
                        </h3>

                        <p class="text-glacier-600 mb-6 leading-relaxed">
                            {{ $service->description }}
                        </p>

                        {{-- Pricing --}}
                        <div class="mb-6">
                            @if ($service->one_time_price == -1)
                                <span class="text-primary-600 font-semibold">Variable costs</span>
                            @elseif ($service->monthly_price == 0 && $service->one_time_price === null)
                                <span class="text-2xl font-bold text-green-600">FREE</span>
                            @else
                                @if ($service->one_time_price !== null)
                                    <div class="space-y-1">
                                        <span class="text-glacier-600 text-sm">Starting from</span>
                                        <div class="text-2xl font-bold text-primary-600">
                                            £{{ $service->one_time_price }}
                                        </div>
                                    </div>
                                @else
                                    <div class="space-y-1">
                                        <span class="text-glacier-600 text-sm">Monthly</span>
                                        <div class="text-2xl font-bold text-primary-600">
                                            £{{ $service->monthly_price }}
                                        </div>
                                    </div>
                                @endif
                            @endif
                        </div>

                        {{-- Action Button --}}
                        <a href="#contact" class="btn-primary w-full justify-center group">
                            <i
                                class="fa-solid fa-arrow-right mr-2 group-hover:translate-x-1 transition-transform duration-200"></i>
                            Get Started
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Additional Info --}}
        <div class="mt-16 text-center">
            <div class="bg-white rounded-2xl shadow-lg p-8 max-w-4xl mx-auto">
                <h3 class="text-2xl font-display font-semibold text-glacier-900 mb-4">
                    Why Choose Glacial Studio?
                </h3>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div
                            class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fa-solid fa-code text-2xl text-primary-600"></i>
                        </div>
                        <h4 class="font-semibold text-glacier-900 mb-2">Modern Technology</h4>
                        <p class="text-sm text-glacier-600">Built with the latest frameworks and best practices</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fa-solid fa-mobile-screen text-2xl text-accent-600"></i>
                        </div>
                        <h4 class="font-semibold text-glacier-900 mb-2">Responsive Design</h4>
                        <p class="text-sm text-glacier-600">Perfect on all devices and screen sizes</p>
                    </div>
                    <div class="text-center">
                        <div
                            class="w-16 h-16 bg-glacier-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fa-solid fa-headset text-2xl text-glacier-600"></i>
                        </div>
                        <h4 class="font-semibold text-glacier-900 mb-2">Ongoing Support</h4>
                        <p class="text-sm text-glacier-600">We're here to help after launch</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
