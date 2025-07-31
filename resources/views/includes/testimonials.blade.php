<section class="section-padding bg-gradient-to-b from-white to-glacier-50">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-display font-bold text-glacier-900 mb-6">
                Our <span class="gradient-text">Past Work</span>
            </h2>
            <p class="text-lg text-glacier-600 max-w-3xl mx-auto">
                Take a look at some of our previous projects and the impact we've made for our clients.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach (\App\Models\PastWork::where('active', 1)->orderBy('order', 'ASC')->get() as $pastWork)
                <div class="card group hover:scale-105 transition-all duration-300">
                    {{-- Project Image --}}
                    <div class="relative overflow-hidden rounded-t-xl">
                        <img src="{{ asset("img/{$pastWork->img}") }}" alt="{{ $pastWork->name }} - Project screenshot"
                            class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-300" />

                        {{-- Project Badge --}}
                        <div class="absolute top-4 left-4">
                            <span class="bg-primary-500 text-white px-3 py-1 rounded-full text-xs font-medium">
                                Completed
                            </span>
                        </div>
                    </div>

                    {{-- Project Content --}}
                    <div class="p-6">
                        <h3 class="text-xl font-display font-semibold text-glacier-900 mb-3">
                            {{ $pastWork->name }}
                        </h3>

                        <p class="text-glacier-600 leading-relaxed">
                            {{ $pastWork->description }}
                        </p>

                        {{-- Project Stats --}}
                        <div class="mt-6 pt-4 border-t border-glacier-100">
                            <div class="flex items-center justify-between text-sm text-glacier-500">
                                <span class="flex items-center">
                                    <i class="fa-solid fa-calendar mr-2"></i>
                                    Project Date
                                </span>
                                <span class="flex items-center">
                                    <i class="fa-solid fa-code mr-2"></i>
                                    Web Development
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Call to Action --}}
        <div class="text-center mt-16">
            <div class="bg-white rounded-2xl shadow-lg p-8 max-w-2xl mx-auto">
                <h3 class="text-2xl font-display font-semibold text-glacier-900 mb-4">
                    Ready to Start Your Project?
                </h3>
                <p class="text-glacier-600 mb-6">
                    Let's discuss how we can bring your vision to life with our expertise and modern development
                    approach.
                </p>
                <a href="#contact" class="btn-primary group">
                    <i class="fa-solid fa-rocket mr-2 group-hover:scale-110 transition-transform duration-200"></i>
                    Get Started Today
                </a>
            </div>
        </div>
    </div>
</section>
